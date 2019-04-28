<?php
defined('ABSPATH') or die('You can not access this file directly.');

require_once('wpmh.php');

$id = isset($_REQUEST['id'])?(int)$_REQUEST['id']:'';

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $data = array(
        'form_layout' => 'standard', //sanitize_key($_POST['form_layout']),
        'form_name' => sanitize_text_field($_POST['form_name']),
        'form_prepend' => sanitize_text_field($_POST['form_prepend']),
        'form_nameshow' => intval($_POST['form_nameshow']),
        'form_namelbl' => sanitize_text_field($_POST['form_namelbl']),
        'form_nameph' => sanitize_text_field($_POST['form_nameph']),
        'form_emaillbl' => sanitize_text_field($_POST['form_emaillbl']),
        'form_emailph' => sanitize_text_field($_POST['form_emailph']),
        'form_submitshow' => intval($_POST['form_submitshow']),
        'form_submittxt' => sanitize_text_field($_POST['form_submittxt']),
        'form_thankyou' => sanitize_key($_POST['form_thankyou']),
        'form_thanksmsg' => sanitize_text_field($_POST['form_thanksmsg']),
    );

    if (isset($id) && $id>0) {
        wpm_update_form($id, $data);
        echo '<div class="updated"><p>Success, form "'.sanitize_text_field($_POST['form_name']).'" has been updated.</p></div>';
    } else {
        $id = wpm_create_form($data);
        echo '<div class="updated"><p>Success, form "'.sanitize_text_field($_POST['form_name']).'" has been created.</p></div>';
    }

}

if (isset($id)) $form = wpm_get_form($id);

if (is_object($form)) {
    $form_name = $form->form_name;
    $form_prepend = $form->form_prepend;
    $form_nameshow = $form->form_nameshow;
    $form_namelbl = $form->form_namelbl;
    $form_nameph = $form->form_nameph;
    $form_emaillbl = $form->form_emaillbl;
    $form_emailph = $form->form_emailph;
    $form_submitshow = $form->form_submitshow;
    $form_submittxt = $form->form_submittxt;
    $form_thankyou = $form->form_thankyou;
    $form_thanksmsg = $form->form_thanksmsg;
} else {
    $form_name = $_REQUEST['form_name'];
    $form_prepend = $_REQUEST['form_prepend'];
    $form_nameshow = $_REQUEST['form_nameshow'];
    $form_namelbl = $_REQUEST['form_namelbl'];
    $form_nameph = $_REQUEST['form_nameph'];
    $form_emaillbl = $_REQUEST['form_emaillbl'];
    $form_emailph = $_REQUEST['form_emailph'];
    $form_submitshow = $_REQUEST['form_submitshow'];
    $form_submittxt = $_REQUEST['form_submittxt'];
    $form_thankyou = $_REQUEST['form_thankyou'];
    $form_thanksmsg = $_REQUEST['form_thanksmsg'];
}


?>
<style>
    .wpm-fixed { width: 150px; margin-bottom: 15px; }
</style>
<h3><?php echo ($id?'Update':'Add New'); ?> Form <?php echo $form->form_name; ?></h3>
    <form method="post" action="?page=<?php echo WPM_FOLDER; ?>/tab-forms.php&action=addedit">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <table class="form-table">
        <tbody>

        <tr>
            <th scope="row"><label for="form_name">Form Name/Reference</label></th>
            <td>
                <input name="form_name" type="text" id="form_name" value="<?php echo $form_name; ?>" class="regular-text">
                <p class="description">Mandatory, this is used as a reference name in other areas of the WordPress admin.</p>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="form_prepend">Form Header Text</label></th>
            <td>
                <textarea name="form_prepend"  id="form_prepend" class="large-text code" rows="3"><?php echo $form_prepend; ?></textarea>
                <p class="description">Optional, this will display text below the title and above the form.</p>
            </td>
        </tr>

        <!--// FOR A LATER DATE

        <tr>
            <th scope="row"><label for="form_layout">Form Code Layout</label></th>
            <td>
                <select name="form_layout">
                    <option<?php echo (form_layout=='standard'?' selected':''); ?> value="standard">Default - label/input's wrapped in p tags</option>
                    <option<?php echo ($form_layout=='bootstrap3'?' selected':''); ?> value="bootstrap3">Bootstrap3 - Twitter Bootstrap 3 form-group layout</option>
                </select>
            </td>
        </tr>

        -->

        <tr>
            <th scope="row">Name Field Options</th>
            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span>Name Field Options</span></legend>
                    <label for="form_nameshow">
                        <input name="form_nameshow" class="toggle" data-toggle=".namefieldshow" type="checkbox" id="form_nameshow" value="1"<?php echo ($form_nameshow==1?' checked="checked"':''); ?>>
                        Show the name field on this form?</label>

                    <div class="namefieldshow" style="display: none">

                        <label for="form_namelbl" class="wpm-fixed">Name Label</label>
                        <input name="form_namelbl" type="text" id="form_namelbl"  value="<?php echo $form_namelbl; ?>" class="regular-text">
                        <br>
                        <label for="form_nameph" class="wpm-fixed">Name Placeholder</label>
                        <input name="form_nameph" type="text" id="form_nameph"  value="<?php echo $form_nameph; ?>" class="regular-text">

                    </div>
                </fieldset>
            </td>
        </tr>

        <tr>
            <th scope="row">Email Field Options</th>
            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span>Email Field Options</span></legend>

                    <label for="form_emaillbl" class="wpm-fixed">Email Label</label>
                    <input name="form_emaillbl" type="text" id="form_emaillbl"  value="<?php echo $form_emaillbl; ?>" class="regular-text">
                    <br>
                    <label for="form_emailph" class="wpm-fixed">Email Placeholder</label>
                    <input name="form_emailph" type="text" id="form_emailph"  value="<?php echo $form_emailph; ?>" class="regular-text">
                </fieldset>
            </td>
        </tr>

        <tr>
            <th scope="row">Submit Button Options</th>
            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span>Submit Button Options</span></legend>
                    <label for="form_submitshow">
                        <input name="form_submitshow" class="toggle" data-toggle=".submitshow" type="checkbox" id="form_submitshow" value="1"<?php echo ($form_submitshow==1?' checked="checked"':''); ?>>
                        Show the submit button on this form?</label>

                    <div class="submitshow" style="display:none">

                        <label for="form_submittxt" class="wpm-fixed">Submit Button Text</label>
                        <input name="form_submittxt" type="text" id="form_submittxt"  value="<?php echo $form_submittxt; ?>" class="regular-text">

                    </div>
                </fieldset>
            </td>
        </tr>

        <tr>
            <th scope="row">Thank You Options</th>
            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span>Submit Button Options</span></legend>
                    <label for="form_thankyou">On subscribe, the user should be redirect to
                        <select name="form_thankyou">
                            <option<?php echo ($form_thankyou=='header'?' selected':''); ?> value="header">the same page with a message above the form</option>
                            <option<?php echo ($form_thankyou=='jsalert'?' selected':''); ?> value="jsalert">the same page with a JavaScript alert message</option>
                           <!--
                           // Struggling to get this one working
                            <option<?php echo ($form_thankyou=='blank'?' selected':''); ?> value="blank">a blank page with a message</option>
                            // Later date
                             <option<?php echo ($form_thankyou=='redirect'?' selected':''); ?> value="redirect">a different url</option>
                            -->
                        </select>
                        </label>
                        <br>
                        <label for="form_thanksmsg" class="wpm-fixed">Thank You Message</label>
                        <textarea name="form_thanksmsg"  id="form_thanksmsg" class="large-text code" rows="3"><?php echo $form_thanksmsg; ?></textarea>
                </fieldset>
            </td>
        </tr>

        </tbody></table>


        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo ($id?'Update':'Add'); ?> Form"></p></form>

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