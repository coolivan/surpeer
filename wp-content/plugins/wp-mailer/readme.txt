=== WP Easy Post Mailer ===
Contributors: webfwd, mozza912
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SC73FL5DKG6CW
Tags: mail, email, newsletter, subscribe, list, mailinglist, mail list, mailing list, campaign monitor, mailchimp, constant contact, subscriber, subscribers, email marketing, marketing, widget, post, plugin, admin, posts, sidebar, page, pages, mailchimp, aweber, vertical response, icontact, myemma, madmimi, getresponse, infusionsoft, ontraport, gravity forms, contact form 7
Requires at least: 3.0
Tested up to: 4.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The easiest way to automatically send your blog posts straight to your email subscribers.

== Description ==

WP Easy Post Mailer - Automatically send out blog posts as email newsletters to your subscribers without the need for any 3rd party email platform. Visitors can subscribe to receive updates of your new posts with the use of our subscribe widget.

WP Easy Post Mailer can be customised and comes with preset mail templates but you can easily create your own with a little programming knowledge.

**Features are as follows:-**

* Send email newsletters automatically when a post is published or scheduled.
* Staggered emailing sending to reduce server load.
* Subscribe widget and unsubscribe link in email newsletters.
* Unsubscribe suppression list to ensure you do not accidently reimport unsubscribed users.
* Customised subscribe forms with three methods of installation.
* Design and develop your own mail templates within your WordPress theme folder utilising the standard WordPress loop.
* Import and export subscribers in standardised CSV format

If you like it then please find the time to rate it.

== Installation ==

* <em>Step 1:</em> Upload `wp-mailer` folder to the `/wp-content/plugins/` directory or click `Install` within the Add new plugin section.
* <em>Step 2:</em> Activate the plugin through the 'Plugins' menu inside the WordPress admin.
* <em>Step 3:</em> Goto WP Mailer -> Forms and create a subscribe form.
* <em>Step 4:</em> Embed the form in your page by using one of three methods:-
    * Go to Appearance -> Widgets and drag `WP Mailer Subscribe Form` widget into a sidebar.
    * Use the shortcode `[wpm_form id="1"]`.
    * Call the form within php code `<?php echo wpm_form(1); ?>`.
* <em>Step 5:</em> If your would like to disable automatic sending of emails then change `Automatic Mail Sending` to NO in WP Mailer -> Settings.

If your posts queue up for a long time on the campaigns page then you need to ensure that your WordPress cron is running correctly.

**Security and bug-fixes are our highest priority, if you come across any issues then please go to the credits section within the plugin and send us a message.**

== Screenshots ==

1. Email Campaign Manager
2. Template Manager
3. Example Email Newsletter
4. Subscriber Management
5. Add/Update Subscribe Form

== Frequently Asked Questions ==

= Can this plugin be used to send emails when I publish a new post or page? =

Yes, currently it supports the ability to send email newsletters of WordPress posts only but we will look at pages and other custom post types in the near future.

= How can I create my own email template? =

Please take a look at the following discussion post https://wordpress.org/support/topic/how-to-make-your-own-theme

== Changelog ==

= 0.64
* Some users reported that mails were sent again when editing posts - this is now fixed.

= 0.63
* Fixed issue where emails are delivered in plain text

= 0.62
* Fix issue with label fields on edit forms
* Change how cron schedules work in hope to fix 46 years issue
* Reregistering cronjob on post publish to help wiht above issue
* Fix styling issue on templates page

= 0.61
* Fix PHP 5.2 specific issues

= 0.6
* Fix issue stopping campaigns from sending

= 0.5
* Fix bug where you can preview templates has stopped working.
* Fix estimated starting time problems.
* Reversed jobs list by default.
* Stop blank campaigns sending when scheduling a post, post must be published.
* Fix WP DEBUG issue with $success and $failed on jobs.

= 0.4
* Updated templates page to make it more clear on how to make a theme.

= 0.3
* Few more fixes so that the plugin works under WP_DEBUG=true.
* Update preview template actions so that it does not conflict with other plugins.
* ability to send a test email to see what each template looks like.

= 0.2
* Fix SQL error for counting subscribers.
* Wording changes.
* Decode html entities on subject.
* Added Emogrifier by John Reeve to convert seperated HTML and CSS into inline HTML+CSS.
* Changed bitly donate link as they think its spam.
* Working pretty well with WP_DEBUG enabled.
* Added WordPress version to credits form.


= 0.1
* After weeks of programming, we have finally launched the plugin, go easy on us.