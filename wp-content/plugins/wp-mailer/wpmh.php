<?php
defined('ABSPATH') or die('You can not access this file directly.');

echo '<div class="wrap">';
echo '<h2>WordPress Mailer</h2>';
//echo '<p>The easiest way to send regular email newsletters to your visitors.</p>';

echo '<div id="icon-themes" class="icon32"><br></div>';
echo '<h2 class="nav-tab-wrapper" style="padding-left: 0px;margin-bottom:10px">';
foreach($wpm_tabs as $tab_key => $tab_name) {
    $class = ($tab_key==$current_tab?' nav-tab-active':'');
    echo '<a class="nav-tab'.$class.'" href="?page='.WPM_FOLDER.'/tab-'.$tab_key.'.php">'.$tab_name.'</a>';
}
echo '</h2>';