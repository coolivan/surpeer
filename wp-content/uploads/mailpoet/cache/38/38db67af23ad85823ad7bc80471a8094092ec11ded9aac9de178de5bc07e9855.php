<?php

/* settings.html */
class __TwigTemplate_3fa9504405e728fc50ba44b66aec8e93380144012c52833ff903e6120bcbbccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "settings.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
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
        echo "  <div id=\"mailpoet_settings\">

    <h1 class=\"title\">";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Settings");
        echo "</h1>

    <!-- settings form  -->
    <form
      id=\"mailpoet_settings_form\"
      name=\"mailpoet_settings_form\"
      class=\"mailpoet_form\"
      autocomplete=\"off\"
      novalidate
    >
      <!-- tabs -->
      <h2 class=\"nav-tab-wrapper\" id=\"mailpoet_settings_tabs\">
        <a class=\"nav-tab\" href=\"#basics\">";
        // line 18
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Basics");
        echo "</a>
        <a class=\"nav-tab\" href=\"#signup\">";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign-up Confirmation");
        echo "</a>
        <a class=\"nav-tab\" href=\"#mta\">";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send With...");
        echo "</a>
        <a class=\"nav-tab\" href=\"#advanced\" data-automation-id=\"settings-advanced-tab\">";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Advanced");
        echo "</a>
        <a class=\"nav-tab\" href=\"#premium\">";
        // line 22
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Key Activation");
        echo "</a>
      </h2>

      <!-- sending method -->
      <div data-tab=\"mta\" class=\"mailpoet_panel\">
        ";
        // line 27
        $this->loadTemplate("settings/mta.html", "settings.html", 27)->display($context);
        // line 28
        echo "      </div>

       <!-- basics -->
      <div data-tab=\"basics\" class=\"mailpoet_panel\">
        ";
        // line 32
        $this->loadTemplate("settings/basics.html", "settings.html", 32)->display($context);
        // line 33
        echo "      </div>

      <!-- sign-up confirmation -->
      <div data-tab=\"signup\" class=\"mailpoet_panel\">
        ";
        // line 37
        $this->loadTemplate("settings/signup.html", "settings.html", 37)->display($context);
        // line 38
        echo "      </div>

     <!-- advanced -->
      <div data-tab=\"advanced\" class=\"mailpoet_panel\">
        ";
        // line 42
        $this->loadTemplate("settings/advanced.html", "settings.html", 42)->display($context);
        // line 43
        echo "      </div>

      <!-- premium -->
      <div data-tab=\"premium\" class=\"mailpoet_panel\">
        ";
        // line 47
        $this->loadTemplate("settings/premium.html", "settings.html", 47)->display($context);
        // line 48
        echo "      </div>

      <p class=\"submit mailpoet_settings_submit\" style=\"display:none;\">
        <input
          type=\"submit\"
          class=\"button button-primary\"
          name=\"submit\"
          data-automation-id=\"settings-submit-button\"
          value=\"";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save settings");
        echo "\"
        />
      </p>
    </form>
  </div>

  <script type=\"text/javascript\">
    jQuery(function(\$) {
      // on dom loaded
      \$(function() {
        // on form submission
        \$('#mailpoet_settings_form').on('submit', function() {
          var errorFound = false;
          // Check if filled emails are valid
          var invalidEmails = \$.map(\$('#mailpoet_settings_form')[0].elements, function(el) {
            return el.type === 'email' && el.value && !window.mailpoet_email_regex.test(el.value) ? el.value : null;
          }).filter(function(val) { return !!val; });
          if (invalidEmails.length) {
            MailPoet.Notice.error(
              \"";
        // line 75
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Invalid email addresses: "), "js"), "html", null, true);
        echo "\" + invalidEmails.join(', '),
              { scroll: true }
            );
            errorFound = true;
          }
          // if reCAPTCHA is enabled but keys are emty, show error
          var enabled = \$('input[name=\"re_captcha[enabled]\"]:checked').val(),
              site_key = \$('input[name=\"re_captcha[site_token]\"]').val().trim(),
              secret_key = \$('input[name=\"re_captcha[secret_token]\"]').val().trim();
          if (enabled && (site_key == '' || secret_key == '')) {
            \$('#settings_re_captcha_tokens_error').show();
            window.location.href = '#advanced';
            errorFound = true;
          } else {
            \$('#settings_re_captcha_tokens_error').hide();
          }
          // if new subscriber notification is enabled but sender is empty, show error
          var notifications_enabled = \$('input[name=\"subscriber_email_notification[enabled]\"]:checked').val(),
            address = \$('input[name=\"subscriber_email_notification[address]\"]').val().trim();
          if (notifications_enabled && address == '') {
            \$('#settings_subscriber_email_notification_error').show();
            window.location.href = '#basics';
            errorFound = true;
          } else {
            \$('#settings_subscriber_email_notification_error').hide();
          }
          // stop processing if an error was found
          if (errorFound) {
            return false;
          }
          // if we're setting up a sending method, try to activate it
          if (\$('.mailpoet_mta_setup_save').is(':visible')) {
            \$('.mailpoet_mta_setup_save').trigger('click');
          }
          var mailpoet_premium_key = \$('#mailpoet_premium_key').val();
          // sync mss key with premium key
          \$('#mailpoet_api_key').val(mailpoet_premium_key);
          if (mailpoet_premium_key.length > 0) {
            \$('#mailpoet_premium_key_verify').trigger('click', false);
          }
          saveSettings();
          return false;
        });

        function saveSettings() {
          // serialize form data
          var settings_data = \$('#mailpoet_settings_form').mailpoetSerializeObject();

          // show loading screen
          MailPoet.Modal.loading(true);

          MailPoet.Ajax.post({
            api_version: window.mailpoet_api_version,
            endpoint: 'settings',
            action: 'set',
            data: settings_data
          }).always(function() {
            MailPoet.Modal.loading(false);
          }).done(function(response) {
            MailPoet.Notice.success(
              \"";
        // line 135
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Settings saved"), "js"), "html", null, true);
        echo "\",
              { scroll: true }
            );
            MailPoet.trackEvent(
              'User has saved Settings',
              {
                'MailPoet Free version': window.mailpoet_version,
                'Sending method type': settings_data.mta_group || null,
                'Sending frequency (emails)': settings_data.mta_group != 'mailpoet' && settings_data.mta && settings_data.mta.frequency && settings_data.mta.frequency.emails,
                'Sending frequency (interval)': settings_data.mta_group != 'mailpoet' && settings_data.mta && settings_data.mta.frequency && settings_data.mta.frequency.interval,
                'Sending provider': settings_data.mta_group == 'smtp' && settings_data.smtp_provider,
                'Sign-up confirmation enabled': (settings_data.signup_confirmation && settings_data.signup_confirmation.enabled == true),
                'Bounce email is present': (settings_data.bounce && settings_data.bounce.address != \"\"),
                'Newsletter task scheduler method': (settings_data.cron_trigger && settings_data.cron_trigger.method)
              }
            );
          }).fail(function(response) {
            if (response.errors.length > 0) {
              MailPoet.Notice.error(
                response.errors.map(function(error) { return error.message; }),
                { scroll: true }
              );
            }
          });
        }

        // setup toggle checkboxes
        function toggleContent() {
          \$('#'+\$(this).data('toggle'))[
            (\$(this).is(':checked'))
            ? 'show'
            : 'hide'
          ]();
        }

        \$(document).on('click', 'input[data-toggle]', toggleContent);
        \$('input[data-toggle]').each(toggleContent);

        function toggleReCaptchaSettings() {
          if (\$('input[name=\"re_captcha[enabled]\"]:checked').val()) {
            \$('#settings_re_captcha_tokens').show();
          } else {
            \$('#settings_re_captcha_tokens').hide();
          }
        }
        \$('input[name=\"re_captcha[enabled]\"]').on('click', toggleReCaptchaSettings);
        toggleReCaptchaSettings();
        \$('#settings_re_captcha_tokens_error').hide();

        \$('#settings_subscriber_email_notification_error').hide();

        function toggleLinuxCronSettings() {
          if (\$('input[name=\"cron_trigger[method]\"]:checked').val() === '";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cron_trigger"] ?? null), "linux_cron", array()), "html", null, true);
        echo "') {
            \$('#settings_linux_cron').show();
          } else {
            \$('#settings_linux_cron').hide();
          }
        }
        \$('input[name=\"cron_trigger[method]\"]').on('click', toggleLinuxCronSettings);
        toggleLinuxCronSettings();

        // page preview
        \$('.mailpoet_page_preview').on('click', function() {
          var selection = \$(this).siblings('.mailpoet_page_selection');

          if (selection.length > 0) {
            \$(this).attr('href', \$(selection).find('option[value=\"'+\$(selection).val()+'\"]').data('preview-url'));
            \$(this).attr('target', '_blank');
          } else {
            \$(this).attr('href', 'javascript:;');
            \$(this).removeAttr('target');
          }
        });
      });
    });
    var mailpoet_in_app_announcements = ";
        // line 210
        echo json_encode($this->getAttribute(($context["settings"] ?? null), "in_app_announcements", array()));
        echo ";
    var mailpoet_new_subscriber_announcement_image = '";
        // line 211
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("in_app_announcements/new-subscriber-notification.png");
        echo "';
    var mailpoet_installed_at = ";
        // line 212
        echo json_encode($this->getAttribute(($context["settings"] ?? null), "installed_at", array()));
        echo ";
    ";
        // line 213
        $context["newUser"] = (((($context["is_new_user"] ?? null) == true)) ? ("true") : ("false"));
        // line 214
        echo "    var mailpoet_is_new_user = ";
        echo twig_escape_filter($this->env, ($context["newUser"] ?? null), "html", null, true);
        echo ";
  </script>
";
    }

    // line 217
    public function block_translations($context, array $blocks = array())
    {
        // line 218
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("reinstallConfirmation" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Are you sure? All of your MailPoet data will be permanently erased (newsletters, statistics, subscribers, etc.)."), "announcementHeader" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Get notified when someone subscribes"), "announcementParagraph1" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("It’s been a popular feature request from our users, we hope you get lots of emails about all your new subscribers!"), "announcementParagraph2" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("(You can turn this feature off if it’s too many emails.)")));
        // line 223
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 223,  310 => 218,  307 => 217,  299 => 214,  297 => 213,  293 => 212,  289 => 211,  285 => 210,  259 => 187,  204 => 135,  141 => 75,  119 => 56,  109 => 48,  107 => 47,  101 => 43,  99 => 42,  93 => 38,  91 => 37,  85 => 33,  83 => 32,  77 => 28,  75 => 27,  67 => 22,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings.html");
    }
}
