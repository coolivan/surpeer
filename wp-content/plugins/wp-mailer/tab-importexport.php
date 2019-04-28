<?php
defined('ABSPATH') or die('You can not access this file directly.');
$current_tab = 'importexport';

require_once('wpmh.php');

if ($_SERVER['REQUEST_METHOD']=="POST" and $_REQUEST['action']=='import') {
    if($_FILES['file']['tmp_name']) {
        if(!$_FILES['file']['error'])  {
            $file = file_get_contents ($_FILES['file']['tmp_name']);
            $lines = preg_split('/\r\n|\r|\n/', $file);
            $success=0;
            $failed=0;
            if (count($lines)>1) {
                $headers = array_shift($lines);
                $table = $wpdb->prefix."wpm_subscribers";
                $success=0; $failed=0;
                foreach ($lines as $line) {
                    list($email, $name) = explode(',', $line);
                    $email = strtolower(str_replace(',','', sanitize_email($email)));
                    $name = str_replace(',','', sanitize_text_field($name));

                    if (is_email($email)) {

                        $sql = "INSERT INTO `".$table."` (sub_email, sub_name, sub_added) VALUES (%s, %s, now())";
                        $sql = $wpdb->prepare($sql, $email, $name);
                        $wpdb->query($sql);
                        $id = $wpdb->insert_id;
                        if ($id>0 && $id<>$lastid) $success++;
                        else $failed++;
                        $lastid = $id;
                    } elseif (strrpos($line, ',') !== FALSE) $failed++;
                }
            }

            wpm_status($success, $failed, 'subscriber', 'added');
        } else {
            echo '<div class="notice notice-warning"><p>Error, there seems to of been a problem uploading your csv.</p></div>';
        }
    }
}


?>
<style>
    .plugin-card { padding: 20px;}
</style>
    <div class="wpm_templates">
        <div class="plugin-card">

            <form id="import-csv" method="post" enctype="multipart/form-data" action="?page=<?php echo WPM_FOLDER ?>/tab-importexport.php&action=import">

                <h3>Import Subscribers</h3>
                <label for="file"><input id="file" name="file" type="file" value="" /></label>
                <p class="description">Import a CSV file, each record must be on its own line and each field separated by comma's. The first field should be the email address and the second the persons name which is optional.</p>
                <p class="description">Example: <br>
                    Email Address,Full Name<br>
                    joe@blogs.com,Joe Blogs</p>

                <p class="submit"><input type="submit" value="Import CSV Subscribers" class="button button-primary" id="submit" name="submit"></p>
            </form>

        </div>

        <div class="plugin-card">
            <h3>Export Subscribers</h3>
            <a class="button button-primary" href="?action=export_csv">Export Subscribers as CSV File</a>

        </div>

    </div>
<?php

require_once('wpmf.php');