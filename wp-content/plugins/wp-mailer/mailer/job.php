<?php
defined('ABSPATH') or die('You can not access this file directly.');

function wpm_run_jobs() {
    // Dont think we need to create a lock out due to WP_CRON_LOCK_TIMEOUT;

    //if (get_option('wpm_cron_running') != true) {
        //update_option('wpm_cron_running', true);
        //update_option('wpm_cron_lastran', time());

        $jobs = wpm_get_scheduled_jobs(); // Get only scheduled and in-progress jobs
        if (count($jobs)) {
            foreach ($jobs as $job) {
                wpm_send_job($job);
            }
        }
        //update_option('wpm_cron_running', false);
    //}
}
add_action( 'wpm_cron_routine', 'wpm_run_jobs' );

function wpm_create_job($post) {
    global $wpdb;
    if (!is_object($post)) $post = get_post($post);
    $table = $wpdb->prefix . "wpm_jobs";
    $sql = "INSERT INTO `" . $table . "` (job_post_id, job_status) VALUES (%d, %d) ON DUPLICATE KEY UPDATE `job_start` = %s";
    $sql = $wpdb->prepare($sql, $post->ID, (get_option('wpm_autosend') ? 1 : 0), $post->post_date, $post->post_date);
    $wpdb->query($sql);
    return $wpdb->insert_id;

}
add_action('draft_to_publish', 'wpm_create_job');
add_action('draft_to_future', 'wpm_create_job');
add_action('auto-draft_to_publish', 'wpm_create_job');
add_action('auto-draft_to_future', 'wpm_create_job');
add_action('pending_to_publish', 'wpm_create_job');
add_action('pending_to_future', 'wpm_create_job');
add_action('future_to_publish', 'wpm_create_job');

function wpm_delete_job($post_id) {
    global $wpdb;
    $table = $wpdb->prefix."wpm_jobs";
    return  $wpdb->delete($table, array( 'job_post_id' => $post_id), array('%d'));
}
add_action('delete_post', 'wpm_delete_job'); //TODO - This does not work for campaigns going into trash - calls twice...

function wpm_get_jobs($status=null) {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_jobs";
    $def_order = array('job_id', 'asc');
    if (is_int($status)) {$where = 'WHERE `job_status`= '.(int)$status; }
    return $wpdb->get_results("SELECT * FROM $table_name $where ORDER BY $def_order[0] $def_order[1]");
}

function wpm_get_scheduled_jobs() {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_jobs";
    $def_order = array('job_id', 'asc');
    return $wpdb->get_results("SELECT * FROM $table_name WHERE `job_start` < now() and (`job_status`=1 or `job_status`=2) ORDER BY $def_order[0] $def_order[1]");
}

function wpm_get_job($post_id) {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_jobs";
    return $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE job_post_id = %d", $post_id));
}
function wpm_update_job($job_id, $data) {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_jobs";
    $where = array('job_id' => (int)$job_id);
    return $wpdb->update($table_name, $data, $where);
}