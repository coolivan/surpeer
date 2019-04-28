<?php
defined('ABSPATH') or die('You can not access this file directly.');
$current_tab = 'credits';

require_once('wpmh.php');



?>
<h3><em>Thank you ever so much for downloading our plugin!</em></h3>

<p>Please refrain from giving a bad rating at this stage as this is still in the
    early stages of development but please do let us know!</p>

<p>If you like the plugin then please <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SC73FL5DKG6CW">donate</a>.</p>

<p>Our highest priority is to ensure that this plugin works well, secure and without bugs.</p>

<p>If you do come across any issues or would like to suggest a new feature then please complete the form below to send us a message.
    Please do not ask me to login an help you setup the plugin.</p>

<form method="post" action="">

    <?php

    $name = isset($_REQUEST['name'])?sanitize_text_field($_REQUEST['name']):'';
    $email = isset($_REQUEST['email'])?sanitize_email($_REQUEST['email']):'';
    $site = get_site_url();
    $wpver = get_bloginfo('version');
    $nature = isset($_REQUEST['subject'])?sanitize_text_field($_REQUEST['subject']):'';
    $message = isset($_REQUEST['message'])?sanitize_text_field($_REQUEST['message']):'';

    if ($_SERVER['REQUEST_METHOD']=='POST') {

        // Validation here

        if (!isset($error) && strlen($message)> 20) {

            $to = "support@mailerplugin.com";
            $subject = "WP Easy Post Mailer - " . $nature;
            $content =
                "Name: <strong>{$name}</strong><br>" .
                "Email: <strong>{$email}</strong><br>" .
                "Website: <strong>{$site}</strong><br>" .
                "Version: <strong>{$wpver}</strong><br>" .
                "Message: <br><strong>{$message}</strong>";

            $headers = array(
                'From: '.get_option('blogname').' <'.get_option('admin_email').'>',
                'Reply-To' => $name . '<' . $email . '>',
                'Content-Type: text/html; charset=UTF-8'
            );

            $status = wp_mail($to, $subject, $content, $headers);

            echo '<div class="updated"><p>Success, settings have been updated.</p></div>';
        } else {
            echo '<div class="notice notice-warning"><p>Error, the message could not be sent.</p></div>';
        }

    }
    ?>

    <table class="form-table">
        <tbody>

        <tr>
            <th scope="row"><label for="name">Your Name</label></th>
            <td>
                <input name="name" type="text" id="name" value="<?php echo $name; ?>" class="regular-text">
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="email">Your Email</label></th>
            <td>
                <input name="email" type="text" id="email" value="<?php echo $email; ?>" class="regular-text">
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="name">Your WordPress</label></th>
            <td>
                Address: <?php echo $site; ?> - Version: <?php echo $wpver; ?>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="subject">Message Nature</label></th>
            <td>
                <select name="subject">
                    <option<?php echo ($nature=='General Enquiry'?' selected':''); ?>>General Enquiry</option>
                    <option<?php echo ($nature=='Bug'?' selected':''); ?>>Bug</option>
                    <option<?php echo ($nature=='Suggestion'?' selected':''); ?>>Suggestion</option>
                </select>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="message">Your Message</label></th>
            <td>
                <textarea name="message"  id="message" class="large-text code" rows="8"><?php echo $message; ?></textarea>
            </td>
        </tr>

        </tbody>
    </table>

    <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Send Message"></p></form>

<?php

require_once('wpmf.php');