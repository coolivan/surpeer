<?php
defined('ABSPATH') or die('You can not access this file directly.');
$current_tab = 'subscribers';

if(!class_exists( 'WP_List_Table' ))  require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );


class WPM_Table extends WP_List_Table {

    function no_items() {
        _e( 'We could not find any subscribers.' );
    }

    function column_default( $item, $column_name ) {
        switch( $column_name ) {
            case 'sub_email':
                return esc_attr($item['sub_email']);
            case 'sub_name':
                return esc_attr($item['sub_name']);
            case 'sub_added':
                return mysql2date('Y/m/d h:i:s', $item['sub_added']);
            case 'action':
                return $item[ $column_name ];
            default:
                return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
        }
    }

    function get_sortable_columns() {
        $sortable_columns = array(
            'sub_email'         => array('sub_email',false),
            'sub_name'          => array('sub_name',false),
            'sub_added'         => array('sub_added',false)
        );
        return $sortable_columns;
    }

    function get_columns(){
        $columns = array(
            'cb'            => '<input type="checkbox" />',
            'sub_email'     => __( 'Email Address', 'wpm_table' ),
            'sub_name'      => __( 'Name', 'wpm_table' ),
            'sub_added'     => __( 'Added', 'wpm_table' ),
            'action'        => __( 'Actions', 'wpm_table' )
        );
        return $columns;
    }

    function column_action($item){
        $actions = array(
            //'edit'          => sprintf('<a href="?page=%s&action=%s&id[]=%s">Edit</a>', WPM_FOLDER.'/tab-subscribers.php', 'edit', $item['sub_id']),
            'delete'        => sprintf('<a href="?page=%s&action=%s&id[]=%s">Delete</a>', WPM_FOLDER.'/tab-subscribers.php', 'delete', $item['sub_id']),
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
            '<input type="checkbox" name="id[]" value="%s" />', $item['sub_id']
        );
    }

    function prepare_items() {
        global $wpdb;

        $table_name = $wpdb->prefix."wpm_subscribers";
        $per_page = 100;
        $def_order = array('sub_email', 'asc');
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();

        $this->_column_headers = array($columns, $hidden, $sortable);

        //Not needed yet
        //$this->process_bulk_action();

        if (isset($_REQUEST['s']) && strlen($_REQUEST['s'])) {
            $search = array();
            $search_query = $_REQUEST['s'];
            $search_exclude = array('cb', 'action');
            foreach(array_keys($columns) as $c) {
                if (!in_array($c, $search_exclude)) $search[] = "`".$c."` LIKE '%%".$search_query."%%'";
            }
            $search = 'AND ('.implode(' OR ', $search).')';
        }

        $total_items = $wpdb->get_var("SELECT COUNT(sub_id) FROM $table_name WHERE `sub_removed` = '0000/00/00 00:00:00' ".(isset($search)?$search:''));

        $paged = isset($_REQUEST['paged']) ? max(0, intval($_REQUEST['paged']) - 1) : 0;
        $orderby = (isset($_REQUEST['orderby'])&&in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns())))?$_REQUEST['orderby']:$def_order[0];
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : $def_order[1];

        //echo sprintf("SELECT * FROM $table_name $search ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged*$per_page);

        $this->items = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE `sub_removed` = '0000/00/00 00:00:00' ".(isset($search)?$search:'')." ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged*$per_page), ARRAY_A);

        $this->set_pagination_args(array(
            'total_items'   => $total_items,
            'per_page'      => $per_page,
            'total_pages'   => ceil($total_items/$per_page),
        ));
    }

}

require_once('wpmh.php');

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete' && is_array($_REQUEST['id'])) {
    $table_name = $wpdb->prefix."wpm_subscribers";
    $success=0; $failed=0;
    foreach ($_REQUEST['id'] as $id) {
        $result = $wpdb->delete($table_name, array('sub_id' => $id), array('%d'));
        if ($result>0) $success++;
        else $failed++;
    }

    wpm_status($success, $failed, 'subscriber', 'removed');
}

echo '<style type="text/css">';
echo '.wp-list-table .column-sub_id { width: 5%; }';
echo '.wp-list-table .column-sub_email { width: 35%; }';
echo '.wp-list-table .column-sub_name { width: 25%; }';
echo '.wp-list-table .column-sub_added { width: 15%; }';
echo '</style>';

$wpm_table = new WPM_Table();

$wpm_table->prepare_items();
echo '<form method="post" action="?page='.WPM_FOLDER.'/tab-subscribers.php">';
$wpm_table->search_box( 'search', 'wpm' );
$wpm_table->display();
echo '</form></div>';

require_once('wpmf.php');