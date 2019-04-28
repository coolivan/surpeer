<?php
/*
Template Name: Default
Template Author: Webforward
Template Website: http://www.webfwd.co.uk/
Template Description: The default email template that comes with WP Mailer
*/
defined('ABSPATH') or die('You can not access this file directly.');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php the_title(); ?></title>
    <style type="text/css">
        * { font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; margin:0; padding:0; }
        img {
            max-width: 100%;
        }
        body {
            -webkit-font-smoothing:antialiased;
            -webkit-text-size-adjust:none;
            width: 100% !important;
            height: 100%;
        }
        a { color: #2BA6CB; }
        .container {
            display:block!important;
            max-width:600px!important;
            margin:0 auto!important;
            clear:both!important;
        }
        .content {
            padding:15px;
            max-width:600px;
            margin:0 auto;
            display:block;
            background: #ffffff;
        }
        .content table { width: 100%; }
        .btn {
            text-decoration:none;
            color: #FFF;
            background-color: #666;
            padding:10px 16px;
            font-weight:bold;
            margin-right:10px;
            text-align:center;
            cursor:pointer;
            display: inline-block;
        }
        table.body-wrap { width: 100%; background:#eee; }
        h1,h2,h3 {
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; line-height: 1; margin-bottom:15px; color:#000;
        }
        h1 { font-weight:700; font-size: 44px;}
        h2 { font-weight:700; font-size: 27px;}
        h3 { font-weight:500; font-size: 25px;}
        p, ul {
            margin-bottom: 10px;
            font-weight: normal;
            font-size:16px;
            line-height:1.6;
        }
        p.unsubscribe { font-size:14px; }
        p.last { margin-bottom:0px;}
        ul li {
            margin-left:15px;
            list-style-position: inside;
        }
    </style>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="#eeeeee">
<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container">
            <div class="content">
                <table>
                    <tr>
                        <td>
                            <h1><?php bloginfo('name'); ?></h1>
                                <div class="entry">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                </div>
                            <p class="unsubscribe"><a href="<?php wpm_unsubscribe_url(); ?>">Unsubscribe</a></p></td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
</body>
</html>