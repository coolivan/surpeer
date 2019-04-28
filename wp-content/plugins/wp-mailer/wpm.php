<?php
/*
Plugin Name: WP Easy Post Mailer
Plugin URI: http://www.webfwd.co.uk/
Description: The easiest way to automatically send your blog posts straight to your email subscribers.
Version: 0.64
Author: Webforward
Author URI: http://www.mailerplugin.com/
License: GPL

Copyright 2015 WEBFWD LTD (email : support@mailerplugin.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

GNU General Public License: http://www.gnu.org/licenses/gpl.html
*/

// Plugin Activation
function wpm_install() {
    global $wpdb;

    // Lets set some defaults
    update_option('wpm_cron_running', false);
    if (!get_option('wpm_mail_template')) update_option('wpm_mail_template', 'wpm-default.php');
    if (!get_option('wpm_autosend')) update_option('wpm_autosend', 1);
    if (!get_option('wpm_sendername')) update_option('wpm_sendername', get_option('blogname'));
    if (!get_option('wpm_senderemail')) update_option('wpm_senderemail', get_option('admin_email'));
    if (!get_option('wpm_batchsize')) update_option('wpm_batchsize', 500);
    if (!get_option('wpm_batchpause')) update_option('wpm_batchpause', 5);
    if (!get_option('wpm_unsubscribemsg')) update_option('wpm_unsubscribemsg', 'Your email address has been removed from our mailing list.');

    $table = $wpdb->prefix."wpm_forms";
    $sql = "
    CREATE TABLE IF NOT EXISTS `".$table."` (
        `form_id` int(11) NOT NULL AUTO_INCREMENT,
        `form_layout` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
        `form_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
        `form_prepend` text COLLATE utf8_unicode_ci NOT NULL,
        `form_nameshow` tinyint(1) NOT NULL,
        `form_namelbl` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
        `form_nameph` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
        `form_emaillbl` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
        `form_emailph` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
        `form_submitshow` tinyint(1) NOT NULL,
        `form_submittxt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
        `form_thankyou` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
        `form_thanksmsg` text COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`form_id`)
    );
    ";
    $wpdb->query($sql);

    $table = $wpdb->prefix."wpm_jobs";
    $sql = "
        CREATE TABLE IF NOT EXISTS `".$table."` (
            `job_id` bigint(20) NOT NULL AUTO_INCREMENT,
            `job_post_id` bigint(20) NOT NULL,
            `job_status` int(1) DEFAULT '0',
            `job_sent` bigint(20) DEFAULT '0',
            `job_failed` bigint(20) DEFAULT '0',
            `job_total` bigint(20) DEFAULT '0',
            `job_start` datetime NOT NULL,
            `job_finish` datetime NOT NULL,
        PRIMARY KEY (`job_id`),
        UNIQUE KEY `job_post_id` (`job_post_id`)
        );
    ";
    $wpdb->query($sql);

    $table = $wpdb->prefix."wpm_subscribers";
    $sql = "
        CREATE TABLE IF NOT EXISTS `".$table."` (
            `sub_id` bigint(15) NOT NULL AUTO_INCREMENT,
            `sub_name` varchar(200) NOT NULL,
            `sub_email` varchar(200) NOT NULL,
            `sub_added` datetime NOT NULL,
            `sub_removed` datetime NOT NULL,
        UNIQUE KEY `sub_id` (`sub_id`),
        UNIQUE KEY `unique_sub_email` (`sub_email`)
        );
    ";
    $wpdb->query($sql);

    require('wpm-upgrade.php');

    wpm_register_cron();

}
register_activation_hook( __FILE__, 'wpm_install' );

// Plugin Deactivation
function wpm_uninstall() {
    //global $wpdb;
    wpm_unregister_cron();
}
register_deactivation_hook( __FILE__, 'wpm_uninstall' );

// Left Menu Button
function wpm_menu() {
    global $wpm_tabs;
    $first_tab_key = array_shift(array_keys($wpm_tabs));
    $first_tab_name = array_shift(array_values($wpm_tabs));
    add_menu_page('WP Mailer', 'WP Mailer', 'manage_options', dirname(__FILE__).'/tab-'.$first_tab_key.'.php', '',   plugins_url('assets/wpm-admin-icon.png', __FILE__));

    add_submenu_page(dirname(__FILE__).'/tab-'.$first_tab_key.'.php', $first_tab_name, $first_tab_name, 'manage_options', dirname(__FILE__).'/tab-'.$first_tab_key.'.php');
    if (is_array($wpm_tabs)) {
        foreach (array_slice($wpm_tabs,1) as $tab_key => $tab_name) {
            add_submenu_page(dirname(__FILE__).'/tab-'.$first_tab_key.'.php', $tab_name, $tab_name, 'manage_options', dirname(__FILE__).'/tab-'.$tab_key.'.php');
        }
    }

    // Hidden Pages
    add_submenu_page(NULL, 'WP Mailer', 'WP Mailer', 'manage_options', dirname(__FILE__).'/tab-forms-addedit.php');

}
add_action('admin_menu', 'wpm_menu');

if (!function_exists('wpm_get_version')) {
    function wpm_get_version() {
        $plugin_data = get_plugin_data(__FILE__);
        $plugin_version = $plugin_data['Version'];
        return $plugin_version;
    }
}


define('WPM_HASH', md5(AUTH_KEY));
define('WPM_FOLDER', reset(explode('/', plugin_basename(__FILE__))));
define('WPM_DIR', dirname(__FILE__));

$wpm_tabs = array(
    'jobs'          => 'Campaigns',
    'subscribers'   => 'Subscribers',
    'unsubscribed'  => 'Unsubscribed',
    'forms'         => 'Forms',
    'importexport'  => 'Import Export',
    'settings'      => 'Settings',
    'templates'     => 'Templates',
    'credits'       => 'Credits'
);

$wpm_job_statuses = array(
    0   => 'MANUAL',
    1   => 'QUEUED',
    2   => 'RUNNING',
    3   => 'COMPLETED',
    // 4   => 'CANCELLED', // For a later date
);


require_once('mailer/job.php');
require_once('mailer/cron.php');
require_once('mailer/send.php');
require_once('mailer/form.php');
require_once('mailer/subscriber.php');
require_once('mailer/mail.php');
require_once('mailer/template.php');
require_once('mailer/widget.php');
require_once('mailer/emogrifier.php');

function wpm_status($success, $failed, $type, $action) {
    if (isset($failed) && $failed>0) echo '<div class="notice notice-warning"><p>Notice, '.(isset($success) && $success>0?($failed>0?'<strong>'.$success.'</strong> '.$type.($success<>1?'s have':' has').' been '.$action.', but':''):'').'
    <strong>'.$failed.'</strong> '.$type.($failed<>1?'s':'').' could not be '.$action.'.</p></div>';
    else echo '<div class="updated"><p>Success, <strong>'.$success.'</strong> '.$type.($success<>1?'s have':' has').' been '.$action.'.</p></div>';
}

// Shortcode
function wpm_scform($atts=array()){
    $form_id = $atts['id'];
    return wpm_form($form_id);
}
add_shortcode('wpm_form', 'wpm_scform');
add_filter('widget_text', 'do_shortcode', 11);