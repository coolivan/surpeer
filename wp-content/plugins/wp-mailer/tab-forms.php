<?php
defined('ABSPATH') or die('You can not access this file directly.');
$current_tab = 'forms';

if (isset($_REQUEST['action']) && $_REQUEST['action']=='addedit') {
    require('tab-forms-addedit.php');
    exit;
}

if(!class_exists( 'WP_List_Table' ))  require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );


class WPM_Table extends WP_List_Table {

    function no_items() {
        _e( 'You do not have any forms.' );
    }

    function column_default( $item, $column_name ) {
        switch( $column_name ) {
            case 'form_id':
                return sprintf('<a href="?page=%s&action=%s&id=%s">'.$item['form_id'].'</a>', WPM_FOLDER.'/tab-forms.php', 'addedit', $item['form_id']);
            case 'form_name':
                return sprintf('<a href="?page=%s&action=%s&id=%s">'.$item['form_name'].'</a>', WPM_FOLDER.'/tab-forms.php', 'addedit', $item['form_id']);
            case 'action':
                return $item[ $column_name ];
            default:
                return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
        }
    }

    function get_sortable_columns() {
        $sortable_columns = array(
            'form_name'         => array('form_name',false)
        );
        return $sortable_columns;
    }

    function get_columns(){
        $columns = array(
            'cb'            => '<input type="checkbox" />',
            'form_id'       => __( 'Form ID', 'wpm_table' ),
            'form_name'     => __( 'Form Name', 'wpm_table' ),
            'action'        => __( 'Actions', 'wpm_table' )
        );
        return $columns;
    }

    function column_action($item){
        $actions = array(
            'editform'      => sprintf('<a href="?page=%s&action=%s&id=%s">Edit Form</a>', WPM_FOLDER.'/tab-forms.php', 'addedit', $item['form_id']),
            'delete'        => sprintf('<a href="?page=%s&action=%s&id[]=%s">Delete</a>', WPM_FOLDER.'/tab-forms.php', 'delete', $item['form_id']),
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
            '<input type="checkbox" name="id[]" value="%s" />', $item['form_id']
        );
    }

    function prepare_items() {
        global $wpdb;

        $table_name = $wpdb->prefix."wpm_forms";
        $per_page = 100;
        $def_order = array('form_name', 'asc');
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();

        $this->_column_headers = array($columns, $hidden, $sortable);

        //Not needed yet
        //$this->process_bulk_action();

        $total_items = $wpdb->get_var("SELECT COUNT(form_id) FROM $table_name");

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
    $table_name = $wpdb->prefix."wpm_forms";
    $success=0; $failed=0;
    foreach ($_REQUEST['id'] as $id) {
        $result = wpm_delete_form($id);
        if ($result>0) $success++;
        else $failed++;
    }

    wpm_status($success, $failed, 'form', 'removed');
}

echo '<style type="text/css">';
echo '.wp-list-table .column-form_id { width: 15%; }';
echo '.wp-list-table .column-form_name { width: 65%; }';
echo '</style>';

echo '<a href="?page='.WPM_FOLDER.'/tab-forms.php&action=addedit" class="button button-primary">Add New Form</a>';

$wpm_table = new WPM_Table();

$wpm_table->prepare_items();
echo '<form method="post" action="?page='.WPM_FOLDER.'/tab-forms.php">';
$wpm_table->display();
echo '</form></div>';

require_once('wpmf.php');