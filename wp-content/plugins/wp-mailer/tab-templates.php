<?php
defined('ABSPATH') or die('You can not access this file directly.');
$current_tab = 'templates';

require_once('wpmh.php');

$header_data = array(
    'name' => 'Template Name',
    'author' => 'Template Author',
    'website' => 'Template Website',
    'description' => 'Template Description'
);

if (isset($_GET['activate']) && base64_decode($_GET['activate'])) {
    wpm_activate_template(base64_decode($_GET['activate']));
}

$templates = wpm_get_templates_list();
$active_template = get_option('wpm_mail_template');
//wpm_move_to_top($templates, $active_template);

if (count($templates)) {

    echo '<div class="wpm_templates">';
    foreach ($templates as $template => $path) {

        $data = get_file_data($path, $header_data);
        $slug = pathinfo($path, PATHINFO_FILENAME);
        $active = ($template==$active_template?true:false);
        $image = dirname($path).'/'.pathinfo($path, PATHINFO_FILENAME).'.png';
        if (!file_exists($image)) $image = WPM_DIR.'/assets/no-image.jpg';
        ?>
        <div class="plugin-card">
            <div class="plugin-card-top" style="min-height: 175px; <?php echo ($active?'background: #e2ffe2':''); ?>">
                <div class="plugin-icon"><img src="<?php echo str_replace(ABSPATH, get_site_url().'/', $image); ?>"></div>
                <div class="name column-name">
                    <h4><?php echo $data['name']; ?></h4>
                </div>
                <div class="action-links">
                    <ul class="plugin-action-buttons">
                        <li><?php if ($active) { ?>
                        <span class="button button-disabled" title="This template is already activated">Active</span>
                        <?php } else { ?>
                        <a class="install-now button" data-slug="<?php echo $slug; ?>" href="?page=<?php echo WPM_FOLDER ?>/tab-templates.php&activate=<?php echo base64_encode($template); ?>" aria-label="Install <?php echo $data['name']; ?>" data-name="<?php echo $data['name']; ?> by <?php echo $data['author']; ?>">Activate Now</a>
                        <?php } ?></li>
                        <li><a href="?action=wpm_preview_template&template=<?php echo $template; ?>&width=700&height=600" class="thickbox" aria-label="Preview <?php echo $data['name']; ?>" data-title="<?php echo $data['name']; ?>">Preview</a></li>
                        <li><a href="?action=wpm_send_test&template=<?php echo $template; ?>&width=300&height=230&TB_iframe=true" class="thickbox" aria-label="Send Test Email" data-title="<?php echo $data['name']; ?>">Test Email</a></li>
                    </ul>
                </div>
                <div class="desc column-description">
                    <p><?php echo $data['description']; ?></p>
                    <p class="authors"><cite>By <a href="<?php echo $data['website']; ?>"><?php echo $data['author']; ?></a></cite></p>
                </div>

            </div>
        </div>

        <?php
    }
    echo '</div>';

    add_thickbox();
}
?>
    <div style="clear:both"></div>
    <h3>Make your own templates!</h3>
    <p>This plugin has been specifically developed so that you can make your own email templates. I will find some time to complete documentation and maybe put together a video guide on how to do this but for now please read the following discussion for a better idea on how to do this: <a target="_blank" href="https://wordpress.org/support/topic/how-to-make-your-own-theme">https://wordpress.org/support/topic/how-to-make-your-own-theme</a>.</p>
    <p>If you would like to share your mail template then please zip it up and email it to us at support@mailerplugin.com.</p>
<?php

require_once('wpmf.php');

function wpm_move_to_top(&$array, $key) {
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
}