<?php
defined('ABSPATH') or die('You can not access this file directly.');
function wpm_get_subscriber_count() {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_subscribers";
    $count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE `sub_removed` = '0000/00/00 00:00:00'");
    return $count;
}

function wpm_get_subscribers($offset=0,$limit=9999999999999) {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_subscribers";
    return $wpdb->get_results("SELECT * FROM $table_name WHERE `sub_removed` = '0000/00/00 00:00:00' LIMIT ".(int)$offset.', '.(int)$limit);
}
function wpm_get_subscriber($sub_id) {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_subscribers";
    return $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE sub_id = %d", $sub_id));
}
function wpm_add_subscriber($email, $name='') {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_subscribers";
    $data = array(
        'sub_email' => strtolower($email),
        'sub_name' => $name,
        'sub_added' => current_time('mysql')
    );
    $wpdb->insert($table_name, $data);
    wpm_notify_subscribe($email);
    return $wpdb->insert_id;
}
function wpm_unsubscribe_url() {
    global $subscriber;
    echo get_site_url().'/?wpm_unsubscribe='.base64_encode($subscriber->sub_email);
}

function wpm_unsubscribe_action() {
    if (isset($_REQUEST['wpm_unsubscribe'])) {
        $email = base64_decode($_REQUEST['wpm_unsubscribe']);
        global $wpdb;
        $table_name = $wpdb->prefix."wpm_subscribers";
        $where = array('sub_email' => $email);
        $data = array('sub_removed' => current_time('mysql'));
        $wpdb->update($table_name, $data, $where);
        wpm_notify_unsubscribe($email);
        wp_die(get_option('wpm_unsubscribemsg'), 'Unsubscribed');
    }
}
add_action('init', 'wpm_unsubscribe_action');


function wpm_subscriber_csv() {
    if (isset($_GET['action']) && $_GET['action']=='export_csv' && current_user_can( 'manage_options')) {
        global $wpdb;
        header("Content-type: application/force-download");
        header('Content-Disposition: inline; filename="wpm-subscribers-'.date('YmdHis').'.csv"');
        $subscribers = $wpdb->get_results( "SELECT sub_email, sub_name, sub_added FROM ".$wpdb->prefix."wpm_subscribers WHERE sub_removed = '0000/00/00 00:00:00'");
        echo "Email Address,Full Name, Subscribe Date\r\n";
        if (count($subscribers))  {
            foreach($subscribers as $subscriber) {
                echo "{$subscriber->sub_email},{$subscriber->sub_name},{$subscriber->sub_added}\r\n";
            }
        }
        exit;
    }
}
add_action('admin_init', 'wpm_subscriber_csv');