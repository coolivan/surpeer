<?php
defined('ABSPATH') or die('You can not access this file directly.');
$current_tab = 'settings';

require_once('wpmh.php');

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $wpm_autosend = $_REQUEST['wpm_autosend'];
    $wpm_notify = $_REQUEST['wpm_notify'];
    $wpm_sendername = $_REQUEST['wpm_sendername'];
    $wpm_senderemail = $_REQUEST['wpm_senderemail'];
    $wpm_senderreply = $_REQUEST['wpm_senderreply'];
    $wpm_batchsize = $_REQUEST['wpm_batchsize'];
    $wpm_batchpause = $_REQUEST['wpm_batchpause'];
    $wpm_unsubscribemsg = $_REQUEST['wpm_unsubscribemsg'];

    // Validation here

    if (!isset($error)) {
        update_option('wpm_autosend', intval($wpm_autosend));
        update_option('wpm_notify', sanitize_text_field($wpm_notify));
        update_option('wpm_sendername', sanitize_text_field($wpm_sendername));
        update_option('wpm_senderemail', sanitize_email($wpm_senderemail));
        update_option('wpm_senderreply', sanitize_email($wpm_senderreply));
        update_option('wpm_batchsize', intval($wpm_batchsize));
        update_option('wpm_batchpause', intval($wpm_batchpause));
        update_option('wpm_unsubscribemsg', sanitize_text_field($wpm_unsubscribemsg));
        echo '<div class="updated"><p>Success, settings have been updated.</p></div>';
    } else {
        echo '<div class="notice notice-warning"><p>Error, settings could not be updated.</p></div>';
    }



}

$wpm_autosend = get_option('wpm_autosend');
$wpm_notify = get_option('wpm_notify');
$wpm_sendername = get_option('wpm_sendername');
$wpm_senderemail = get_option('wpm_senderemail');
$wpm_senderreply = get_option('wpm_senderreply');
$wpm_batchsize = get_option('wpm_batchsize');
$wpm_batchpause = get_option('wpm_batchpause');
$wpm_unsubscribemsg = get_option('wpm_unsubscribemsg');

?>
    <style>
        .wpm-fixed { width: 150px; margin-bottom: 15px; }
    </style>
    <h3>General Settings</h3>
    <form method="post" action="">

        <table class="form-table">
            <tbody>

            <tr>
                <th scope="row"><label for="wpm_autosend">Automatic Mail Sending</label></th>
                <td>
                    <select name="wpm_autosend">
                        <option<?php echo ($wpm_autosend==1?' selected':''); ?> value="1">YES</option>
                        <option<?php echo ($wpm_autosend<>1?' selected':''); ?> value="">NO</option>
                    </select>
                    <p class="description">When settings this to 'YES', we will automatically schedule a cron every 15 minutes to process any new posts. If this is set to 'NO', you will need to go into campaigns and click send after creating your new post.</p>
                </td>
            </tr>



            </tbody>
        </table>

    <h3>Notification Settings</h3>

        <table class="form-table">
            <tbody>

            <tr>
                <th scope="row"><label for="wpm_notify">Get Notified</label></th>
                <td>
                    <input name="wpm_notify" type="text" id="wpm_notify" value="<?php echo $wpm_notify; ?>" class="regular-text">
                    <p class="description">Optional, enter your email address here and we will notify you when someone subscribes or unsubscribes.</p>
                </td>
            </tr>

            </tbody>
        </table>

    <h3>Mail Settings</h3>

        <p>Please note, this plugin uses the built in WordPress mail sending method to send out newsletters. You may need to check with your hosting provider as to how many emails they are happy for you to send and if there are any penalties involved. We will look at developing other providers into the plugin at a later date.</p>

        <table class="form-table">
            <tbody>

            <tr>
                <th scope="row"><label for="wpm_sendername">Sender Name</label></th>
                <td>
                    <input name="wpm_sendername" type="text" id="wpm_sendername" value="<?php echo $wpm_sendername; ?>" class="regular-text">
                </td>
            </tr>

            <tr>
                <th scope="row"><label for="wpm_senderemail">Sender Email</label></th>
                <td>
                    <input name="wpm_senderemail" type="text" id="wpm_senderemail" value="<?php echo $wpm_senderemail; ?>" class="regular-text">
                </td>
            </tr>

            <tr>
                <th scope="row"><label for="wpm_senderreply">Reply To</label></th>
                <td>
                    <input name="wpm_senderreply" type="text" id="wpm_senderreply" value="<?php echo $wpm_senderreply; ?>" class="regular-text">
                </td>
            </tr>

            <tr>
                <th scope="row">Send Rate</th>
                <td>
                    <label for="wpm_batchsize">How many emails would you like to send per batch? </label>
                    <input name="wpm_batchsize" style="width: 80px" type="text" id="wpm_batchsize" value="<?php echo $wpm_batchsize; ?>" class="regular-text"><br>
                    <label for="wpm_batchpause">How many seconds gap would you like between sending each batch? </label>
                    <input name="wpm_batchpause" style="width: 80px" type="text" id="wpm_batchpause" value="<?php echo $wpm_batchpause; ?>" class="regular-text">
                </td>
            </tr>

            </tbody>
        </table>

    <h3>Unsubscribe Settings</h3>



        <table class="form-table">
            <tbody>

            <tr>
                <th scope="row"><label for="wpm_unsubscribemsg">Unsubscribe Message</label></th>
                <td>
                    <textarea name="wpm_unsubscribemsg"  id="wpm_unsubscribemsg" class="large-text code" rows="3"><?php echo $wpm_unsubscribemsg; ?></textarea>
                </td>
            </tr>

            </tbody>
        </table>


        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p></form>

    <script type="text/javascript">
        $wpmj=jQuery.noConflict();
        $wpmj(document).ready(function () {
            function wpm_checktoggle(check) {
                var toggle = $wpmj(check).data('toggle');
                $wpmj(toggle).css('display', $wpmj(check).is(':checked')?'block':'none');
            }
            $wpmj('input[type=checkbox].toggle').change(function(e) {
                wpm_checktoggle(this);
            }).each(function(e) {
                wpm_checktoggle(this);
            });
        });
    </script>
<?php

require_once('wpmf.php');