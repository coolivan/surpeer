<?php
function wpm_create_form($data, $format=null) {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_forms";
    $wpdb->insert($table_name, $data);
    return $wpdb->insert_id;
}
function wpm_update_form($form_id, $data, $format=null) {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_forms";
    $where = array('form_id' => (int)$form_id);
    return $wpdb->update($table_name, $data, $where, $format);
}
function wpm_get_form($form_id) {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_forms";
    return $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE form_id = %d", (int)$form_id));
}
function wpm_delete_form($form_id) {
    global $wpdb;
    $table = $wpdb->prefix."wpm_forms";
    return  $wpdb->delete($table, array( 'form_id' => $form_id), array('%d'));
}

function wpm_get_forms() {
    global $wpdb;
    $table_name = $wpdb->prefix."wpm_forms";
    $def_order = array('form_name', 'asc');
    return $wpdb->get_results("SELECT * FROM $table_name $where ORDER BY $def_order[0] $def_order[1]");
}

function wpm_form($form_id){
    $form = wpm_get_form($form_id);
    $showform=true;
    if (!$form->form_id) return;
    $return = '';
    $error = array();
    if (isset($_POST['wpm_form']) && $_POST['wpm_form'] == $form->form_id) {

        $name = sanitize_text_field($_POST['wpm_name']);
        $email = sanitize_email($_POST['wpm_email']);

        // We do not need to validate the name
        if (!is_email($email)) $error['email'] = 'invalid email address';
        if ($email=='') $error['email'] = 'invalid email address';

        if (!count($error)) {

            wpm_add_subscriber($email, $name);

            // Send notification that a subscriber has been added

            if ($form->form_thankyou == 'header') {
                $showform = false;
                $return .= '<p class="wpm_thankyou">'.$form->form_thanksmsg.'</p>';
            } elseif ($form->form_thankyou == 'jsalert') {
                $showform = true;
                $return .= "<script>window.onload = function() { alert('".$form->form_thanksmsg."'); }</script>";
            //} elseif ($form->form_thankyou == 'header') {
            //    wp_die($form->form_thanksmsg);

            }
        }
    }
    if($showform || count($error)) {

        $return .= '<form class="wpm_form" method="post"><input class="wpm_hiddenfield" name="wpm_form" type="hidden" value="'.$form->form_id.'">';

        if (count($error)) $return .= '<p class="wpm_notice">We could not add you to our list, please check for errors below and try again.</p>';

        if (!count($error) && $form->form_prepend) $return .= '<p class="wpm_prepend">'.$form->form_prepend.'</p>';

        if ($form->form_nameshow) {
            $return .= '<p class="wpm_name'.(array_key_exists('name', $error)?' wpm_error':'').'">
            <label class="wpm_namelabel" for="wpm_name">'.$form->form_namelbl.'</label>
            <input class="wpm_nameinput" placeholder="'.$form->form_nameph.'" name="wpm_name" type="text" value="">
            </p>';
        }

        $return .= '<p class="wpm_email'.(array_key_exists('email', $error)?' wpm_error':'').'">
            <label class="wpm_emaillabel" for="wpm_email">'.$form->form_emaillbl.'</label>
            <input class="wpm_emailinput" name="wpm_email" placeholder="'.$form->form_emailph.'" type="text" value="">
            </p>';

        if ($form->form_submitshow) $return .= '<p class="wpm_submit"><input name="submit" class="btn wpm_submitbtn" type="submit" value="'.($form->form_submittxt?$form->form_submittxt:'Submit').'"></p>';

        $return .= '</form>';

    }


    return $return;
}