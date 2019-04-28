<?php

/* newsletters.html */
class __TwigTemplate_1228561c29abeac633fba2982a1565d97614cf663fda4ea6ce1ce8adf64e270f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "newsletters.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
            'after_translations' => array($this, 'block_after_translations'),
            'after_javascript' => array($this, 'block_after_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"newsletters_container\"></div>

  <script type=\"text/javascript\">
    var mailpoet_listing_per_page = ";
        // line 7
        echo twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "html", null, true);
        echo ";
    var mailpoet_display_nps_poll = location.hash === '#/standard';
    var mailpoet_listing_per_page = ";
        // line 9
        echo twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "html", null, true);
        echo ";
    var mailpoet_segments = ";
        // line 10
        echo json_encode(($context["segments"] ?? null));
        echo ";
    var mailpoet_settings = ";
        // line 11
        echo json_encode(($context["settings"] ?? null));
        echo ";
    var mailpoet_installed_at_isoFormat = \"";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "installed_at", array(), "array"), "c"), "html", null, true);
        echo "\";
    var mailpoet_current_wp_user = ";
        // line 13
        echo json_encode(($context["current_wp_user"] ?? null));
        echo ";
    var mailpoet_lists = ";
        // line 14
        echo json_encode(($context["lists"] ?? null));
        echo ";
    var mailpoet_roles = ";
        // line 15
        echo json_encode(($context["roles"] ?? null));
        echo ";
    var mailpoet_current_date = ";
        // line 16
        echo json_encode(($context["current_date"] ?? null));
        echo ";
    var mailpoet_current_time = ";
        // line 17
        echo json_encode(($context["current_time"] ?? null));
        echo ";
    var mailpoet_schedule_time_of_day = ";
        // line 18
        echo json_encode(($context["schedule_time_of_day"] ?? null));
        echo ";
    var mailpoet_date_display_format = \"";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getWPDateFormat();
        echo "\";
    var mailpoet_site_url = \"";
        // line 20
        echo twig_escape_filter($this->env, ($context["site_url"] ?? null), "html", null, true);
        echo "\";
    var mailpoet_date_storage_format = \"Y-m-d\";
    var mailpoet_tracking_enabled = ";
        // line 22
        echo json_encode(($context["tracking_enabled"] ?? null));
        echo ";
    var mailpoet_premium_active = ";
        // line 23
        echo json_encode(($context["premium_plugin_active"] ?? null));
        echo ";
    var mailpoet_automatic_emails = ";
        // line 24
        echo json_encode(($context["automatic_emails"] ?? null));
        echo ";
    var mailpoet_in_app_announcements = mailpoet_settings.in_app_announcements;
    var mailpoet_free_welcome_emails_image = '";
        // line 26
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("in_app_announcements/hello-illustration-for-welcome-emails.png");
        echo "';
    ";
        // line 27
        $context["newUser"] = (((($context["is_new_user"] ?? null) == true)) ? ("true") : ("false"));
        // line 28
        echo "    var mailpoet_is_new_user = ";
        echo twig_escape_filter($this->env, ($context["newUser"] ?? null), "html", null, true);
        echo ";
  </script>
";
    }

    // line 32
    public function block_translations($context, array $blocks = array())
    {
        // line 33
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("pageTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Emails"), "tabStandardTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletters"), "tabWelcomeTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome Emails"), "tabNotificationTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Post Notifications"), "tabWoocommerceTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("WooCommerce Emails"), "searchLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Search"), "loadingItems" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Loading emails..."), "noItemsFound" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Nothing here yet! But, don't fret - there's no reason to get upset. Pretty soon, you’ll be sending emails faster than a turbo-jet."), "selectAllLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails on this page are selected."), "selectedAllLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All %d emails are selected."), "selectAllLink" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select all emails on all pages"), "clearSelection" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Clear selection"), "permanentlyDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%d emails were permanently deleted."), "selectBulkAction" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select bulk action"), "bulkActions" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bulk Actions"), "apply" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Apply"), "filter" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Filter"), "emptyTrash" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Empty Trash"), "selectAll" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select All"), "restore" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Restore"), "deletePermanently" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Delete Permanently"), "showMoreDetails" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show more details"), "previousPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Previous page"), "firstPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("First page"), "nextPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Next page"), "lastPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Last page"), "currentPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Current page"), "pageOutOf" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("of"), "numberOfItemsSingular" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 item"), "numberOfItemsMultiple" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d items"), "selectType" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select type"), "events" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Events"), "conditions" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Conditions", "Configuration options for automatic email events"), "template" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template"), "designer" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Designer"), "send" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send"), "subject" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subject"), "status" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Status"), "statsListingActionTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Statistics"), "statistics" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Opened, Clicked"), "lists" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Lists"), "settings" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Settings"), "history" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("History"), "viewHistory" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("View history"), "createdOn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Created on"), "lastModifiedOn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Last modified on"), "sentOn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sent on"), "oneNewsletterTrashed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 email was moved to the trash."), "multipleNewslettersTrashed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d emails were moved to the trash."), "oneNewsletterDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 email was permanently deleted."), "multipleNewslettersDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d emails were permanently deleted."), "oneNewsletterRestored" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 email has been restored from the Trash."), "multipleNewslettersRestored" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d emails have been restored from the Trash."), "trash" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Trash"), "moveToTrash" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Move to trash"), "edit" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit"), "duplicate" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Duplicate"), "newsletterDuplicated" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email \"%\$1s\" has been duplicated."), "notSentYet" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Not sent yet"), "scheduledFor" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Scheduled for"), "scheduleIt" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Schedule it"), "active" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Active"), "inactive" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Not Active"), "newsletterQueueCompleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sent to %\$1d of %\$2d"), "sentToXSubscribers" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sent to %\$1d subscribers"), "resume" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Resume"), "pause" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Pause"), "paused" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paused"), "new" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add New"), "excellentBadgeName" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Excellent"), "excellentBadgeTooltip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Congrats!"), "goodBadgeName" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Good"), "goodBadgeTooltip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Good stuff."), "badBadgeName" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bad"), "badBadgeTooltip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Something to improve."), "openedStatTooltip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Above 30% is excellent.\\nBetween 10 and 30% is good.\\nUnder 10% is bad."), "clickedStatTooltip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Above 3% is excellent.\\nBetween 1 and 3% is good.\\nUnder 1% is bad."), "unsubscribedStatTooltip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Under 1% is excellent.\\nBetween 1 and 3% is good.\\nOver 3% is bad."), "checkBackInHours" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Nice job! Check back in %\$1d hour(s) for more stats."), "improveThisLinkText" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("What can I do to improve this?"), "templateFileMalformedError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This template file appears to be damaged. Please try another one."), "importTemplateTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Import a template"), "selectJsonFileToUpload" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a .json file to upload"), "helpTooltipTemplateUpload" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("You can only upload .json templates that were originally created with MailPoet 3."), "upload" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Upload"), "mailpoetGuideTemplateTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet's Guide"), "confirmTemplateDeletion" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("You are about to delete the template named \"%\$1s\"."), "delete" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Delete"), "select" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Select", "Verb"), "preview" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview"), "selectTemplateTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a responsive template"), "draftNewsletterTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subject"), "pickCampaignType" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select type of email"), "seeVideoGuide" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("See video guide"), "regularNewsletterTypeTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter"), "regularNewsletterTypeDescription" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send a newsletter with images, buttons, dividers, and social bookmarks. Or, just send a basic text email."), "create" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Create"), "welcomeNewsletterTypeTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome Email"), "welcomeNewsletterTypeDescription" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Automatically send an email (or series of emails) to new subscribers or WordPress users. Send a day, a week, or a month after they sign up."), "premiumFeatureLink" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is a Premium feature"), "setUp" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Set up"), "postNotificationNewsletterTypeTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Latest Post Notifications"), "postNotificationNewsletterTypeDescription" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Let MailPoet email your subscribers with your latest content. You can send daily, weekly, monthly, or even immediately after publication."), "selectFrequency" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a frequency"), "postNotificationSubjectLineTip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Insert [newsletter:total] to show number of posts, [newsletter:post_title] to show the latest post's title & [newsletter:number] to display the issue number."), "activate" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate"), "sendWelcomeEmailWhen" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send this Welcome Email when..."), "daily" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Once a day at..."), "weekly" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Weekly on..."), "monthly" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Monthly on the..."), "monthlyEvery" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Monthly every..."), "immediately" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Immediately"), "sunday" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sunday"), "monday" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Monday"), "tuesday" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Tuesday"), "wednesday" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Wednesday"), "thursday" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Thursday"), "friday" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Friday"), "saturday" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Saturday"), "first" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1st"), "second" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("2nd"), "third" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("3rd"), "nth" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1dth"), "last" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("last", "e.g. monthly every last Monday"), "next" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Next", "Button label: Next step"), "selectEventToSendWelcomeEmail" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("When is this Welcome Email sent?"), "onSubscriptionToList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone subscribes to the list..."), "onWPUserRegistration" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("When a new WordPress user is added to your site..."), "delayImmediately" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("immediately"), "delayHoursAfter" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("hour(s) later"), "delayDaysAfter" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("day(s) later"), "delayWeeksAfter" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("week(s) later"), "subjectLine" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subject line"), "subjectLineTip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Be creative! It's the first thing that your subscribers see. Tempt them to open your email."), "emptySubjectLineError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please specify a subject"), "segments" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Lists"), "segmentsTip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This subscriber segment will be used for this email."), "selectSegmentPlaceholder" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a list"), "noSegmentsSelectedError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please select a list"), "sender" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sender"), "senderTip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name and email"), "senderNamePlaceholder" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("John Doe"), "senderAddressPlaceholder" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("john.doe@email.com"), "replyTo" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reply-to"), "replyToTip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers reply to your emails, their emails will go to this address."), "replyToNamePlaceholder" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("John Doe"), "replyToAddressPlaceholder" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("john.doe@email.com"), "newsletterUpdated" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email was updated successfully!"), "newsletterAdded" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email was added successfully!"), "newsletterSendingError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("An error occurred while trying to send. <a href=\"%\$1s\">Please check your settings</a>."), "finalNewsletterStep" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Final Step: Last Details"), "saveDraftAndClose" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save as draft and close"), "helpTooltipSendEmail" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("You cannot send the same email twice, as that would be considered spam. <br /> If you must send the same email more than one time, simply duplicate this email first."), "orSimply" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("or simply"), "goBackToDesign" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("go back to the Design page"), "websiteTimeIs" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your website’s time is"), "noScheduledDateError" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please enter the scheduled date."), "schedule" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Schedule"), "feedback" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Feedback?"), "tooltipTemplateTabs" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Click [link]here[/link] to give your feedback on this feature. We’d love to hear from you."), "close" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Close"), "today" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Today"), "january" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("January"), "february" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("February"), "march" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("March"), "april" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("April"), "may" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("May"), "june" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("June"), "july" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("July"), "august" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("August"), "september" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("September"), "october" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("October"), "november" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("November"), "december" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("December"), "januaryShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Jan"), "februaryShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Feb"), "marchShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Mar"), "aprilShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Apr"), "mayShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("May"), "juneShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Jun"), "julyShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Jul"), "augustShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Aug"), "septemberShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sep"), "octoberShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Oct"), "novemberShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Nov"), "decemberShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Dec"), "sundayShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sun"), "mondayShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Mon"), "tuesdayShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Tue"), "wednesdayShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Wed"), "thursdayShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Thu"), "fridayShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Fri"), "saturdayShort" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sat"), "sundayMin" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("S", "Sunday - one letter abbreviation"), "mondayMin" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("M", "Monday - one letter abbreviation"), "tuesdayMin" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("T", "Tuesday - one letter abbreviation"), "wednesdayMin" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("W", "Wednesday - one letter abbreviation"), "thursdayMin" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("T", "Thursday - one letter abbreviation"), "fridayMin" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("F", "Friday - one letter abbreviation"), "saturdayMin" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("S", "Saturday - one letter abbreviation"), "next" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Next"), "previous" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Previous"), "newsletterBeingSent" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("The newsletter is being sent..."), "newsletterHasBeenScheduled" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("The newsletter has been scheduled."), "newsletterSendingHasBeenResumed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("The newsletter sending has been resumed."), "welcomeEmailActivated" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your Welcome Email is now activated!"), "welcomeEmailActivationFailed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your Welcome Email could not be activated, please check the settings."), "postNotificationActivated" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your post notification is now active!"), "postNotificationActivationFailed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your Post Notification could not be activated, check the settings."), "welcomeEventSegment" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This newsletter is sent when someone subscribes to the list: \"%\$1s\"."), "welcomeEventWPUserAnyRole" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This newsletter is sent when a new WordPress user is added to your site."), "welcomeEventWPUserWithRole" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This newsletter is sent when a new WordPress user with the role \"%\$1s\" is added to your site."), "sendingDelayHours" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d hour(s) later"), "sendingDelayDays" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d day(s) later"), "sendingDelayWeeks" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d week(s) later"), "sendingDelayInvalid" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Invalid sending delay"), "sendDaily" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send daily at %\$1s"), "sendWeekly" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send weekly on %\$1s at %\$2s"), "sendMonthly" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send monthly on the %\$1s at %\$2s"), "sendNthWeekDay" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send every %\$1s %\$2s of the month at %\$3s"), "sendImmediately" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send immediately"), "ifNewContentToSegments" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("if there's new content to %\$1s."), "sendingToSegmentsNotSpecified" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("You need to select a list to send to."), "backToPostNotifications" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Back to Post notifications"), "noSubscribers" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("No subscribers!"), "mailerSendErrorNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending is paused because %\$1s prevents MailPoet from delivering emails with the following error: %\$2s"), "mailerConnectionErrorNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending is paused because the following connection issue prevents MailPoet from delivering emails: %\$1s"), "mailerErrorCode" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Error code: %\$1s"), "mailerCheckSettingsNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Check your [link]sending method settings[/link]."), "mailerResumeSendingButton" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Resume sending"), "mailerSendingResumedNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending has been resumed."), "confirmEdit" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending is in progress. Do you want to pause sending and edit the newsletter?"), "confirmTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Confirm to proceed"), "confirmLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Confirm"), "cancelLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Cancel"), "recentlySent" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Recently sent"), "savedTemplates" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your saved templates"), "templatePreview" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template preview"), "zoom" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview"), "blank" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Blank", "Blank newsletters templates category"), "sample" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Sample", "Sample newsletters templates category"), "tabImportTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Import", "Importing template tab title"), "noTemplates" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This category does not contain any template yet!"), "soon" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Soon"), "beta" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Beta"), "errorWhileTakingScreenshot" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("An error occured while saving the template in \"Recently sent\""), "selectAutomaticEmailsEventsHeading" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select %\$1s events"), "cronNotAccessibleNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Oops! There seems to be an issue with the sending on your website. [link]See our guide[/link] to solve this yourself."), "introLists" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome on board. Let’s get you started quickly. Here, you can create new lists."), "introForms" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Create a form and add it to your website so your visitors can subscribe to your list."), "introChat" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("You have a question? Start a chat or send a message to get an answer from our support team."), "introEmails" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("We suggest you begin by creating a newsletter, a welcome email or a post notification. Enjoy!"), "introNext" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Next", "A label on a button"), "introBack" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Back", "A label on a button"), "introSkip" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Skip", "A label on a button"), "introDone" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Done", "A label on a button"), "freeWelcomeEmailsHeading" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome Emails are now free for everyone"), "freeWelcomeEmailsParagraph" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Say “Hello!” automatically to all your new subscribers. They’ll appreciate the extra touch.")));
        // line 311
        echo "
";
    }

    // line 314
    public function block_after_translations($context, array $blocks = array())
    {
        // line 315
        echo "  ";
        echo do_action("mailpoet_newsletters_translations_after");
        echo "
";
    }

    // line 318
    public function block_after_javascript($context, array $blocks = array())
    {
        // line 319
        if ($this->getAttribute(($context["settings"] ?? null), "show_intro", array())) {
            // line 320
            echo "<script>
  HS.beacon.ready(function () {
    MailPoet.showIntro();
  });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "newsletters.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 320,  144 => 319,  141 => 318,  134 => 315,  131 => 314,  126 => 311,  123 => 33,  120 => 32,  112 => 28,  110 => 27,  106 => 26,  101 => 24,  97 => 23,  93 => 22,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletters.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletters.html");
    }
}
