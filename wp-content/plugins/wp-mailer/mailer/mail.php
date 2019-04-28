<?php
defined('ABSPATH') or die('You can not access this file directly.');

function wpm_set_content_type(){
    return "text/html";
}

function wpm_get_mailer($template_path) {
    if (!file_exists($template_path)) return;
    global $wp_query, $subscriber;
    ob_start();
    require($template_path);
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function wpm_notify_subscribe($email) {
    $wpm_notify = get_option('wpm_notify');
    if (is_email($wpm_notify)) {
        $wpm_sendername = sanitize_text_field(get_option('wpm_sendername'));
        $wpm_senderemail = sanitize_email(get_option('wpm_senderemail'));
        $wpm_senderreply = sanitize_email(get_option('wpm_senderreply'));

        $headers = array(
            'From: '.$wpm_sendername.' <'.$wpm_senderemail.'>'
        );
        if ($wpm_senderreply) $headers[] = 'Reply-To: '.$wpm_senderreply;

        $subject = 'Subscribe Notice';
        $html = 'Email Address '.esc_attr($email).' has SUBSCRIBED to your list';

        add_filter('wp_mail_content_type', 'wpm_set_content_type');
        wp_mail($wpm_notify, $subject, $html, $headers);
        remove_filter('wp_mail_content_type', 'wpm_set_content_type');

    }
}

function wpm_notify_unsubscribe($email) {
    $wpm_notify = get_option('wpm_notify');
    if (is_email($wpm_notify)) {
        $wpm_sendername = sanitize_text_field(get_option('wpm_sendername'));
        $wpm_senderemail = sanitize_email(get_option('wpm_senderemail'));
        $wpm_senderreply = sanitize_email(get_option('wpm_senderreply'));

        $headers = array(
            'From: '.$wpm_sendername.' <'.$wpm_senderemail.'>',
            'Content-Type: text/html; charset=UTF-8'
        );
        if ($wpm_senderreply) $headers[] = 'Reply-To: '.$wpm_senderreply;

        $subject = 'Unsubscribe Notice';
        $html = 'Email Address '.esc_attr($email).' has UNSUBSCRIBED from your list';

        wp_mail($wpm_notify, $subject, $html, $headers);
    }
}