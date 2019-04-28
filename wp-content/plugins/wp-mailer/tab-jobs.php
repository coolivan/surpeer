<?php
defined('ABSPATH') or die('You can not access this file directly.');
$current_tab = 'jobs';

if(!class_exists( 'WP_List_Table' ))  require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );


class WPM_Table extends WP_List_Table {

    function no_items() {
        _e( 'You do not have any campaigns.' );
    }

    function column_default( $item, $column_name ) {
        global $wpm_job_statuses;
        switch( $column_name ) {
            case 'job_post':
                return get_the_title($item['job_post_id']);
            case 'job_status':
                return $wpm_job_statuses[$item['job_status']];
            case 'job_progress':
                if ($item['job_status']==3) {
                    $percent = $item['job_total']?round(($item['job_sent'] / $item['job_total']) * 100):100;
                    $progress  = '<div class="wpm-percent"><div class="wpm-complete" style="width: 100%"></div></div>';
                    $progress .= '<small><em>Sent to '.$item['job_sent'].' of '.$item['job_total'].' subscriber'.($item['job_total']<>1?'s':'').'</em></small>';
                    return $progress;
                } else if ($item['job_status']==2) {
                    $percent = round(($item['job_sent'] / $item['job_total']) * 100);
                    $progress  = '<div class="wpm-percent"><div class="wpm-sent" style="width: '.$percent.'%"></div></div>';
                    $progress .= '<small><em>Sent to '.$item['job_sent'].' of '.$item['job_total'].' subscriber'.($item['job_total']<>1?'s':'').'</em></small>';
                    return $progress;
                } else if ($item['job_status']==0) {
                    return '<a class="button button-primary" href="?page='.WPM_FOLDER.'/tab-jobs.php&action=queue&id='.$item['job_id'].'">Queue for Sending</a>';
                } else if ($item['job_status']==1) {
                    $post = get_post($item['job_post_id']);
                    if ($post->post_status == 'future') return 'Starting in '.human_time_diff(mysql2date('U', $post->post_date), time());
                    else return 'Starting in '.human_time_diff(wp_next_scheduled('wpm_cron_routine'), time());
                } else return '';
            case 'job_start':
                return $item['job_start']<>'0000-00-00 00:00:00'?mysql2date('Y/m/d h:i:s', $item['job_start']):'';
            case 'job_finish':
                return $item['job_finish']<>'0000-00-00 00:00:00'?mysql2date('Y/m/d h:i:s', $item['job_finish']):'';
            case 'action':
                return $item[ $column_name ];
            default:
                return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
        }
    }

    function get_sortable_columns() {
        $sortable_columns = array(
            'job_post'          => array('job_post',false),
            'job_status'        => array('job_status',false),
            'job_start'         => array('job_start',false)
        );
        return $sortable_columns;
    }

    function get_columns(){
        $columns = array(
            'cb'            => '<input type="checkbox" />',
            'job_post'      => __( 'Post Title', 'wpm_table' ),
            'job_status'    => __( 'Status', 'wpm_table' ),
            'job_progress'  => __( 'Progress', 'wpm_table' ),
            'job_start'     => __( 'Start', 'wpm_table' ),
            'job_finish'    => __( 'Finish', 'wpm_table' ),
            'action'        => __( 'Actions', 'wpm_table' )
        );
        return $columns;
    }

    function column_action($item){
        $actions = array(
            'editpost'      => sprintf('<a href="post.php?post=%d&action=edit">Edit Post</a>', $item['job_post_id']),
            'delete'        => sprintf('<a href="?page=%s&action=%s&id[]=%s">Delete</a>', WPM_FOLDER.'/tab-jobs.php', 'delete', $item['job_post_id']),
        );
        return $this->row_actions($actions);
    }

    function get_bulk_actions() {
        $actions = array(
            'delete'    => 'Delete'
        );
        return $actions;
    }

    function column_cb($item) {
        return sprintf(
            '<input type="checkbox" name="id[]" value="%s" />', $item['job_post_id']
        );
    }

    function prepare_items() {
        global $wpdb;

        $table_name = $wpdb->prefix."wpm_jobs";
        $per_page = 100;
        $def_order = array('job_id', 'desc');
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();

        $this->_column_headers = array($columns, $hidden, $sortable);

        //Not needed yet
        //$this->process_bulk_action();

        $total_items = $wpdb->get_var("SELECT COUNT(job_id) FROM $table_name");

        $paged = isset($_REQUEST['paged']) ? max(0, intval($_REQUEST['paged']) - 1) : 0;
        $orderby = (isset($_REQUEST['orderby'])&&in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns())))?$_REQUEST['orderby']:$def_order[0];
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : $def_order[1];

        //echo sprintf("SELECT * FROM $table_name $search ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged*$per_page);

        $this->items = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged*$per_page), ARRAY_A);

        $this->set_pagination_args(array(
            'total_items'   => $total_items,
            'per_page'      => $per_page,
            'total_pages'   => ceil($total_items/$per_page),
        ));
    }

}

require_once('wpmh.php');

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete' && is_array($_REQUEST['id'])) {
    $success=0; $failed=0;
    foreach ($_REQUEST['id'] as $id) {
        $result = wpm_delete_job($id);
        if ($result>0) $success++;
        else $failed++;
    }

    // TODO: Stop the job

    wpm_status($success, $failed, 'campaign', 'removed');
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'queue' && $_REQUEST['id']) {

    wpm_update_job((int)$_REQUEST['id'], array(
        'job_status' => 1 // Queued
    ));

    echo '<div class="updated"><p>Success, campaign has been queued for sending.</p></div>';
}

echo '<style type="text/css">';
echo '.wp-list-table .column-job_post { width: 25%; }';
echo '.wp-list-table .column-job_status { width: 100px; }';
echo '.wpm-percent, .wpm-sent, .wpm-complete { height: 12px; }';
echo '.wpm-percent { border: solid 1px #ccc; background:#fff; }';
echo '.wpm-sent { float: left; background: url('.plugins_url('assets/progress.gif', __FILE__).') top left; background-size: 100% 100%; }';
echo '.wpm-complete { float: left; background: #ccc; }';
echo '</style>';
if (isset($_REQUEST['reset']) && $_GET['reset']) update_option('wpm_cron_running', false);
$wpm_table = new WPM_Table();
$wpm_table->prepare_items();
echo '<form method="post" action="?page='.WPM_FOLDER.'/tab-jobs.php">';
$wpm_table->display();
echo '</form></div>';

require_once('wpmf.php');