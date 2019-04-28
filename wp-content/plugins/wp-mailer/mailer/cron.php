<?php
defined('ABSPATH') or die('You can not access this file directly.');

// Create a 5 minute timer
function wpm_cron_schedules($schedules) {
    $schedules['wpm_queue'] = array(
        'interval' => 300, // 300 = 5 Minutes
        'display' => __( 'Send queue running every 5 minutes' )
    );
    return $schedules;
}
add_filter( 'cron_schedules', 'wpm_cron_schedules' );

function wpm_register_cron() {
    if (!wp_next_scheduled('wpm_cron_routine')) wp_schedule_event(time(), 'wpm_queue', 'wpm_cron_routine');
}

function wpm_unregister_cron() {
    wp_unschedule_event(wp_next_scheduled('wpm_cron_routine'), 'wpm_cron_routine');
}
function wpm_reregister_cron() {
    wpm_unregister_cron();
    wpm_register_cron();
}

add_action('publish_post', 'wpm_reregister_cron');
add_action('future_post', 'wpm_reregister_cron');

// We can manually run the cron by going to website.com/?wpm_runcron=1
if (isset($_GET['wpm_runcron'])) add_action('init', 'wpm_run_jobs');