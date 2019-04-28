<?php
defined('ABSPATH') or die('You can not access this file directly.');
function wpm_get_template_path($name=null) {
    $template = wpm_find_template($name?$name:get_option('wpm_mail_template'));
    if (!$template) {
        $template = WPM_DIR.'/templates/wpm-default.php';
    }
    return $template;
}

function wpm_preview_template() {
    if (isset($_GET['action']) && $_GET['action']=='wpm_preview_template' && current_user_can( 'manage_options')) {
        $template = sanitize_file_name($_GET['template']);
        $template_path = wpm_find_template($template);
        if (!$template_path) die('This template does not exist');

        $args = array(
            'posts_per_page' => 1,
            'post_type' => 'post',
            'orderby' => 'date',
            'post_status' => 'publish',
            'order' => 'DESC'
        );
        global $wp_query;
        $wp_query = new WP_Query($args);
        rewind_posts();
        the_post();

        $html = wpm_get_mailer($template_path);

        echo $html;
        exit;
    }
}
add_action('admin_init', 'wpm_preview_template');

function wpm_preview_test() {
    if (isset($_GET['action']) && $_GET['action']=='wpm_send_test' && current_user_can( 'manage_options')) {
        $to = isset($_GET['to'])?sanitize_email($_GET['to']):'';
        $template = sanitize_file_name($_GET['template']);
        $template_path = wpm_find_template($template);
        if (!$template_path) die('This template does not exist');

        echo '
        <style>body { font-family: Arial; text-align: center; padding: 10px;}</style>
        <h3>Send a Test Email</h3>';

        if (is_email($to)) {

            $args = array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'orderby' => 'date',
                'post_status' => 'publish',
                'order' => 'DESC'
            );
            global $wp_query;
            $wp_query = new WP_Query($args);
            rewind_posts();
            the_post();

            $html = wpm_get_mailer($template_path);
            preg_match("/<title>(.*)<\/title>/siU", $html, $title_matches);
            if ($title_matches[1]) {
                $subject = preg_replace('/\s+/', ' ', $title_matches[1]);
                $subject = trim($subject);
                $subject = preg_replace_callback("/(&#[0-9]+;)/", function($m) { return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES"); }, $subject);
            }

            preg_match("/<style[^>]*>(.*)<\/style>/smiU", $html, $css_matches);
            if ($css_matches[1]) {
                $css = $css_matches[1];
            }

            $emogrifier = new \Pelago\Emogrifier();
            $emogrifier->setHtml($html);
            $emogrifier->setCss($css);
            $inline = $emogrifier->emogrify();

            $wpm_sendername = sanitize_text_field(get_option('wpm_sendername'));
            $wpm_senderemail = sanitize_email(get_option('wpm_senderemail'));
            $wpm_senderreply = sanitize_email(get_option('wpm_senderreply'));

            $headers = array(
                'From: '.$wpm_sendername.' <'.$wpm_senderemail.'>'
            );
            if ($wpm_senderreply) $headers[] = 'Reply-To: '.$wpm_senderreply;

            add_filter('wp_mail_content_type', 'wpm_set_content_type');
            wp_mail($to, 'Preview: '.$subject, $inline, $headers);
            remove_filter('wp_mail_content_type', 'wpm_set_content_type');
            echo '<p style="color: darkgreen">The email has successfully been sent.</p>';
        } elseif(isset($_GET['send'])) {
            echo '<p style="color: darkred">You did not enter a valid email address.</p>';
        }

        echo '<form action="" method="get">
            <p>Complete the form below and we will send an email of your latest WordPress using the '.$template.' mailer template.</p>
            <input name="action" type="hidden" value="wpm_send_test">
            <input name="template" type="hidden" value="'.$template.'">
            <input name="send" type="hidden" value="1">
            Email Address:<input name="to" type="text" value="'.$to.'">
            <input name="send" type="submit" value="send">
        </form>';

        exit;
    }
}
add_action('admin_init', 'wpm_preview_test');

function wpm_get_templates_list() {
    $templates = array();
    $dirs = array(TEMPLATEPATH, WPM_DIR.'/templates');
    foreach ($dirs as $dir) {
        $list = glob($dir.'/wpm-*.php');
        if (count($list)) {
            foreach ($list as $file) {
                $templates[basename($file)] = $file;
            }
        }
    }
    ksort($templates);
    return $templates;
}

function wpm_activate_template($template) {
    update_option('wpm_mail_template', $template);
}

function wpm_find_template($template) {
    $list = wpm_get_templates_list();
    return $list[$template];
}