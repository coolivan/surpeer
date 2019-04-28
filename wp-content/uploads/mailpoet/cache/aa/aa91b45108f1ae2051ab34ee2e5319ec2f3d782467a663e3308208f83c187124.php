<?php

/* settings/mta.html */
class __TwigTemplate_7b16fe31cdc097b8dd7bb7d4a3da96eafe446d73cc9db99d6617f79f6cb2f468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["intervals"] = array(0 => 1, 1 => 2, 2 => 5, 3 => 10, 4 => 15, 5 => 30);
        // line 2
        $context["mss_key_valid"] = ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "mailpoet_api_key_state", array()), "state", array()) == "valid");
        // line 3
        $context["default_frequency"] = array("website" => array("emails" => 25, "interval" => 5), "smtp" => array("emails" => 100, "interval" => 5));
        // line 13
        echo "
<!-- mta: group -->
<input
  type=\"hidden\"
  id=\"mta_group\"
  name=\"mta_group\"
  value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "mta_group", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mailpoet_smtp_provider\"
  name=\"mailpoet_smtp_provider\"
  value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()), "html", null, true);
        echo "\"
/>
<!-- mta: method -->
<input
  type=\"hidden\"
  id=\"mta_method\"
  name=\"mta[method]\"
  value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "method", array()), "html", null, true);
        echo "\"
/>

<!-- mta: sending frequency -->
<input
  type=\"hidden\"
  id=\"mta_frequency_emails\"
  name=\"mta[frequency][emails]\"
  value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mta_frequency_interval\"
  name=\"mta[frequency][interval]\"
  value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "interval", array()), "html", null, true);
        echo "\"
/>

<!-- mta: mailpoet sending service key -->
<input
  type=\"hidden\"
  id=\"mailpoet_api_key\"
  name=\"mta[mailpoet_api_key]\"
  value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "mailpoet_api_key", array()), "html", null, true);
        echo "\"
/>

<!-- smtp: available sending methods -->
<ul class=\"mailpoet_sending_methods\">
  <li
    data-group=\"mailpoet\"
    class=\"";
        // line 61
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "mailpoet")) {
            echo " mailpoet_active ";
        }
        echo " ";
        if ( !($context["mss_key_valid"] ?? null)) {
            echo " mailpoet_invalid_key ";
        }
        echo "\"
  >
    <div class=\"mailpoet_sending_method_description\">
      <h3>
        ";
        // line 65
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet Sending Service");
        echo "
      </h3>

      <div class=\"mailpoet_description\">
        <span class=\"";
        // line 69
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\" id=\"mailpoet_sending_method_active_text\">
          <strong>";
        // line 70
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You're now sending with MailPoet!");
        echo "</strong>
        </span>

        <span class=\"";
        // line 73
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\" id=\"mailpoet_sending_method_inactive_text\">
          <strong>";
        // line 74
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Solve all of your sending problems!");
        echo "</strong>
        </span>

        <ul class=\"sending-method-benefits mailpoet_success\">
          <li class=\"mailpoet_success_item\">";
        // line 78
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reach the inbox, not the spam box.");
        echo "</li>
          <li class=\"mailpoet_success_item\">";
        // line 79
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Easy configuration: enter a key to activate the sending service.");
        echo "</li>
          <li class=\"mailpoet_success_item\">";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Super fast: send up to 50,000 emails per hour.");
        echo "</li>
          <li class=\"mailpoet_success_item\">";
        // line 81
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails are signed with SPF & DKIM.");
        echo "</li>
          <li class=\"mailpoet_success_item\">";
        // line 82
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Automatically remove invalid and bounced addresses (bounce handling) to keep your lists clean.");
        echo "</li>
        </ul>

        <p class=\"mailpoet_sending_methods_help\">
          ";
        // line 86
        $context["badgeClassName"] = (((($context["is_new_user"] ?? null) == true)) ? ("mailpoet_badge mailpoet_badge_video") : ("mailpoet_badge mailpoet_badge_video mailpoet_badge_video_grey"));
        // line 87
        echo "          ";
        echo MailPoet\Util\Helpers::replaceLinkTags(sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("[link]%s See video guide[/link]"), "<span class=\"dashicons dashicons-format-video\"></span>"), "https://beta.docs.mailpoet.com/article/235-video-guide-sending-options", array("class" =>         // line 89
($context["badgeClassName"] ?? null), "target" => "_blank"), "link");
        // line 91
        echo "
        </p>
      </div>
    </div>
    <div class=\"mailpoet_status ";
        // line 95
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "mailpoet") ||  !($context["mss_key_valid"] ?? null))) {
            echo " mailpoet_invalid_key ";
        }
        echo "\">
      <div class=\"mailpoet_activated ";
        // line 96
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "mailpoet") ||  !($context["mss_key_valid"] ?? null))) {
            echo " mailpoet_hidden ";
        }
        echo "\">
        <span>";
        // line 97
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
      </div>
      <div class=\"mailpoet_actions\">
        <div class=\"mailpoet_invalid_key ";
        // line 100
        if (($context["mss_key_valid"] ?? null)) {
            echo " mailpoet_hidden ";
        }
        echo "\">
          <a class=\"button-primary\" href=\"https://www.mailpoet.com/free-plan/\" rel=\"noopener noreferrer\" target=\"_blank\">";
        // line 101
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Get a free key");
        echo "</a>
          ";
        // line 102
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("or");
        echo "
          ";
        // line 103
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("[link]enter your key[/link]"), "#premium");
        // line 107
        echo "
        </div>
        <div class=\"mailpoet_valid_key ";
        // line 109
        if (( !($context["mss_key_valid"] ?? null) || ($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "mailpoet"))) {
            echo " mailpoet_hidden ";
        }
        echo "\">
          <button type=\"button\" class=\"mailpoet_sending_service_activate button-primary\">";
        // line 110
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</button>
        </div>
      </div>
  </li>
  <li
    data-group=\"other\"
    ";
        // line 116
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "mailpoet")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 117
        echo "  >
    <div class=\"mailpoet_sending_method_description\">
      <h3>";
        // line 119
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Other");
        echo "</h3>
      <div class=\"mailpoet_description\">
        <strong>";
        // line 121
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send emails via your host (not recommended!) or via a third-party sender.");
        echo "</strong>
        <ul class=\"sending-method-benefits mailpoet_error\">
          <li class=\"mailpoet_error_item\">";
        // line 123
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unless you're a pro, you’ll probably end up in spam.");
        echo "</li>
          <li class=\"mailpoet_error_item\">";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending speed is limited by your host and/or your third-party (with a 2,000 per hour maximum).");
        echo "</li>
          <li class=\"mailpoet_error_item\">";
        // line 125
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manual configuration of SPF and DKIM required.");
        echo "</li>
          <li class=\"mailpoet_error_item\">";
        // line 126
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce handling is available, but only with an extra [link]add-on[/link]."), "https://wordpress.org/plugins/bounce-handler-mailpoet/", array("target" => "_blank"));
        // line 130
        echo "
          </li>
        </ul>
      </div>
    </div>
    <div class=\"mailpoet_status\">
      <span>";
        // line 136
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
      <div class=\"mailpoet_actions\">
        ";
        // line 138
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "mailpoet")) {
            // line 139
            echo "          <a class=\"button-primary mailpoet_other_sending_method_action\" href=\"#mta/other\">";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
            echo "</a>
        ";
        } else {
            // line 141
            echo "          <a class=\"button-secondary mailpoet_other_sending_method_action\" href=\"#mta/other\">";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
            echo "</a>
        ";
        }
        // line 143
        echo "      </div>
    </div>
  </li>
</ul>

<div id=\"mailpoet_sending_method_setup\">

  <!-- Sending Method: Other -->
  <div class=\"mailpoet_sending_method\" data-group=\"other\" style=\"display:none;\">
    <table class=\"form-table\">
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_smtp_method\">
            ";
        // line 156
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Method");
        echo "
          </label>
        </th>
        <td>
          <!-- smtp provider -->
          <select
            id=\"mailpoet_smtp_method\"
            name=\"smtp_provider\"
          >
            <option data-interval=\"5\" data-emails=\"25\" value=\"server\">
              ";
        // line 166
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host / web server");
        echo "
            </option>
            <option data-interval=\"5\" data-emails=\"100\" value=\"manual\"
              ";
        // line 170
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 172
            echo "              selected=\"selected\"
              ";
        }
        // line 174
        echo "            >
              ";
        // line 175
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP");
        echo "
            </option>
            <!-- providers -->
            <optgroup label=\"";
        // line 178
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select your provider");
        echo "\">
              ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hosts"] ?? null), "smtp", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 180
            echo "              <option
                value=\"";
            // line 181
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                data-emails=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                data-interval=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                data-fields=\"";
            // line 184
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["host"], "fields", array()), ","), "html", null, true);
            echo "\"
              ";
            // line 185
            if (($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) == $context["host_key"])) {
                // line 186
                echo "              selected=\"selected\"
              ";
            }
            // line 188
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "            </optgroup>
          </select>
        </td>
      </tr>
      <tr id=\"mailpoet_sending_method_host\"
        ";
        // line 196
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 198
            echo "        style=\"display:none;\"
        ";
        }
        // line 200
        echo "      >
        <th scope=\"row\">
          <label for=\"mailpoet_web_host\">
            ";
        // line 203
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host");
        echo "
          </label>
        </th>
        <td>
          <p>
            <!-- sending frequency -->
            <select
              id=\"mailpoet_web_host\"
              name=\"web_host\"
            >

              <!-- web hosts -->
              <option
                value=\"manual\"
                data-emails=\"25\"
                data-interval=\"5\"
                label=\"";
        // line 219
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Not listed (default)");
        echo "\"
              >
              ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hosts"] ?? null), "web", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 222
            echo "              <option
                value=\"";
            // line 223
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                data-emails=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                data-interval=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
              ";
            // line 226
            if (($this->getAttribute(($context["settings"] ?? null), "web_host", array()) == $context["host_key"])) {
                // line 227
                echo "              selected=\"selected\"
              ";
            }
            // line 229
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "            </select>
          </p>

        </td>
      </tr>
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_web_host\">
            ";
        // line 239
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
          </label>
        </th>
        <td>
          <p>
            <!-- sending frequency -->
            <select
              id=\"mailpoet_sending_frequency\"
              name=\"mailpoet_sending_frequency\"
            >
              <option value=\"auto\">
                ";
        // line 250
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Recommended");
        echo "
              </option>
              <option value=\"manual\"
                ";
        // line 254
        if ( !($this->getAttribute(($context["settings"] ?? null), "mailpoet_sending_frequency", array()) == "auto")) {
            // line 256
            echo "                selected=\"selected\"
                ";
        }
        // line 258
        echo "              >
                ";
        // line 259
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("I'll set my own frequency");
        echo "
              </option>
            </select>
            <span id=\"mailpoet_recommended_daily_emails\"></span>
          </p>
          <div id=\"mailpoet_sending_frequency_manual\"
            ";
        // line 266
        if (($this->getAttribute(($context["settings"] ?? null), "mailpoet_sending_frequency", array()) == "auto")) {
            // line 268
            echo "              style=\"display: none\"
            ";
        }
        // line 270
        echo "          >
            <p>
              <input
                id=\"other_frequency_emails\"
                type=\"number\"
                min=\"1\"
                max=\"1000\"
              ";
        // line 277
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "emails", array())) {
            // line 278
            echo "                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
              ";
        } else {
            // line 280
            echo "                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "emails", array()), "html", null, true);
            echo "\"
              ";
        }
        // line 282
        echo "              />
              ";
        // line 283
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
              <select id=\"other_frequency_interval\">
                ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["intervals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 286
            echo "                <option
                  value=\"";
            // line 287
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                ";
            // line 289
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 290
$context["interval"] == $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "interval", array())))) {
                // line 292
                echo "                selected=\"selected\"
                ";
            }
            // line 294
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 295
                echo "                selected=\"selected\"
                ";
            }
            // line 297
            echo "                >
                ";
            // line 298
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                ";
            // line 299
            if (($context["interval"] == $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "interval", array()))) {
                // line 300
                echo "                (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                ";
            }
            // line 302
            echo "                </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "              </select>
              <span id=\"mailpoet_other_daily_emails\"></span>
            </p>
            <br />
            <p>
              ";
        // line 309
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Warning!</strong> You may break the terms of your web host or provider by sending more than the recommended emails per day. Contact your host if you want to send more.");
        echo "
            </p>
          </div>
        </td>
      </tr>
      <tr class=\"mailpoet_smtp_field\" data-field=\"host\"
        ";
        // line 316
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 318
            echo "        style=\"display:none;\"
        ";
        }
        // line 320
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_host]\">
            ";
        // line 323
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Hostname");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 326
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.: smtp.mydomain.com");
        echo "
          </p>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_host]\"
            name=\"mta[host]\"
            value=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "host", array()), "html", null, true);
        echo "\" />
        </td>
      </tr>
      <!-- smtp: port -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"port\"
        ";
        // line 341
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 343
            echo "        style=\"display:none;\"
        ";
        }
        // line 345
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_port]\">
            ";
        // line 348
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Port");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"number\"
            max=\"65535\"
            min=\"1\"
            maxlength=\"5\"
            style=\"width:5em;\"
            id=\"settings[mta_port]\"
            name=\"mta[port]\"
            value=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "port", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: amazon region -->
      <tr class=\"mailpoet_aws_field\" data-field=\"region\"
        ";
        // line 368
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 370
            echo "        style=\"display:none;\"
        ";
        }
        // line 372
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_region]\">
            ";
        // line 375
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Region");
        echo "
          </label>
        </th>
        <td>
          <select
            id=\"settings[mta_region]\"
            name=\"mta[region]\"
            value=\"";
        // line 382
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 383
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "region", array()), "html", null, true);
        }
        // line 384
        echo "\"
          >
            ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["hosts"] ?? null), "smtp", array()), "AmazonSES", array()), "regions", array()));
        foreach ($context['_seq'] as $context["region"] => $context["server"]) {
            // line 387
            echo "            <option
              value=\"";
            // line 388
            echo twig_escape_filter($this->env, $context["server"], "html", null, true);
            echo "\"
            ";
            // line 389
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "region", array()) == $context["server"])) {
                // line 390
                echo "            selected=\"selected\"
            ";
            }
            // line 392
            echo "            >
            ";
            // line 393
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['region'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "          </select>
        </td>
      </tr>

      <!-- smtp: amazon access_key -->
      <tr class=\"mailpoet_aws_field\" data-field=\"access_key\"
        ";
        // line 403
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 405
            echo "        style=\"display:none;\"
        ";
        }
        // line 407
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_access_key]\">
            ";
        // line 410
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Access Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_access_key]\"

            name=\"mta[access_key]\"
            value=\"";
        // line 420
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 421
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "access_key", array()), "html", null, true);
        }
        // line 422
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: amazon secret_key -->
      <tr class=\"mailpoet_aws_field\" data-field=\"secret_key\"
        ";
        // line 430
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 432
            echo "        style=\"display:none;\"
        ";
        }
        // line 434
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_secret_key]\">
            ";
        // line 437
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secret Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_secret_key]\"

            name=\"mta[secret_key]\"
            value=\"";
        // line 447
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 448
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "secret_key", array()), "html", null, true);
        }
        // line 449
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: api key -->
      <tr class=\"mailpoet_sendgrid_field\" data-field=\"api_key\"
        ";
        // line 457
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "SendGrid"))) {
            // line 459
            echo "        style=\"display:none;\"
        ";
        }
        // line 461
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_api_key]\">
            ";
        // line 464
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("API Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_api_key]\"
            name=\"mta[api_key]\"
            value=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "api_key", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: login -->
      <tr id=\"mta_login\" class=\"mailpoet_smtp_field\" data-field=\"login\"
        ";
        // line 481
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 483
            echo "        style=\"display:none;\"
        ";
        }
        // line 485
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_login]\">
            ";
        // line 488
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Login");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_login]\"
            name=\"mta[login]\"
            value=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "login", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>
      <!-- smtp: password -->
      <tr id=\"mta_password\" class=\"mailpoet_smtp_field\" data-field=\"password\"
        ";
        // line 504
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 506
            echo "        style=\"display:none;\"
        ";
        }
        // line 508
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_password]\">
            ";
        // line 511
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Password");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"password\"
            class=\"regular-text\"
            id=\"settings[mta_password]\"
            name=\"mta[password]\"
            value=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "password", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>
      <!-- smtp: security protocol -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"encryption\"
        ";
        // line 527
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 529
            echo "        style=\"display:none;\"
        ";
        }
        // line 531
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_encryption]\">
            ";
        // line 534
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secure Connection");
        echo "
          </label>
        </th>
        <td>
          <select id=\"settings[mta_encryption]\" name=\"mta[encryption]\">
            <option value=\"\">";
        // line 539
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</option>
            <option
              value=\"ssl\"
            ";
        // line 542
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "encryption", array()) == "ssl")) {
            // line 543
            echo "            selected=\"selected\"
            ";
        }
        // line 545
        echo "            >SSL</option>
            <option
              value=\"tls\"
            ";
        // line 548
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "encryption", array()) == "tls")) {
            // line 549
            echo "            selected=\"selected\"
            ";
        }
        // line 551
        echo "            >TLS</option>
          </select>
        </td>
      </tr>
      <!-- smtp: authentication -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"authentication\"
        ";
        // line 558
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 560
            echo "        style=\"display:none;\"
        ";
        }
        // line 562
        echo "      >
        <th scope=\"row\">
          <label>
            ";
        // line 565
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Authentication");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 568
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this option set to Yes. Only a tiny portion of SMTP services prefer Authentication to be turned off.");
        echo "
          </p>
        </th>
        <td>
          <label>
            <input
              type=\"radio\"
              value=\"1\"
              name=\"mta[authentication]\"
            ";
        // line 578
        if (( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "authentication", array()) || ($this->getAttribute($this->getAttribute(        // line 579
($context["settings"] ?? null), "mta", array()), "authentication", array()) == "1"))) {
            // line 580
            echo "            checked=\"checked\"
            ";
        }
        // line 582
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              value=\"-1\"
              name=\"mta[authentication]\"
            ";
        // line 590
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "authentication", array()) == "-1")) {
            // line 591
            echo "            checked=\"checked\"
            ";
        }
        // line 593
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </td>
      </tr>
      </tbody>
    </table>

    <table class=\"form-table\">
      <tbody>
        <!-- SPF -->
        <tr id=\"mailpoet_mta_spf\">
          <th scope=\"row\">
            <label>
              ";
        // line 606
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF Signature (Highly recommended!)");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 609
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This improves your delivery rate by verifying that you're allowed to send emails from your domain.");
        echo "
            </p>
          </th>
          <td>
            <p>
              ";
        // line 614
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF is set up in your DNS. Read your host's support documentation for more information.");
        echo "
            </p>
          </td>
        </tr>
        <!-- test method -->
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_mta_test_email\">
              ";
        // line 622
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Test the sending method");
        echo "
            </label>
          </th>
          <td>
            <p>
              <input
                type=\"text\"
                id=\"mailpoet_mta_test_email\"
                class=\"regular-text\"
                value=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current_user"] ?? null), "user_email", array()), "html", null, true);
        echo "\"
              />
              <a
                id=\"mailpoet_mta_test\"
                class=\"button-secondary\"
              >";
        // line 636
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send a test email");
        echo "</a>

              <span id=\"tooltip-test\"></span>
            </p>
          </td>
        </tr>
        <!-- activate or cancel -->
        <tr>
          <th scope=\"row\">
            <p>
              <a
                href=\"javascript:;\"
                class=\"mailpoet_mta_setup_save button button-primary\"
              >";
        // line 649
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</a>
              &nbsp;
              <a
                href=\"javascript:;\"
                class=\"mailpoet_mta_setup_cancel\"
              >";
        // line 654
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("or Cancel");
        echo "</a>
            </p>
          </th>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    var tooltip = '";
        // line 666
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Didn't receive the test email? Read our [link]quick guide[/link] to sending issues."), "http://beta.docs.mailpoet.com/article/146-my-newsletters-are-not-being-received", array("target" => "_blank")), "js"), "html", null, true);
        // line 668
        echo "'

    MailPoet.helpTooltip.show(document.getElementById(\"tooltip-test\"), {
      tooltipId: \"tooltip-settings-test\",
      tooltip: tooltip,
    });

    var sending_frequency_template =
      Handlebars.compile(\$('#mailpoet_sending_frequency_template').html());

    // om dom loaded
    \$(function() {
      // constrain number type inputs
      \$('input[type=\"number\"]').on('keyup', function() {
        var currentValue = \$(this).val();
        if(!currentValue) return;

        var minValue = \$(this).attr('min');
        var maxValue = \$(this).attr('max');
        \$(this).val(Math.min(Math.max(minValue, currentValue), maxValue));
      });

      // testing sending method
      \$('#mailpoet_mta_test').on('click', function() {
        // get test email and include it in data
        var recipient = \$('#mailpoet_mta_test_email').val();

        var settings = jQuery('#mailpoet_settings_form').mailpoetSerializeObject();
        var mailer = settings.mta;

        mailer.method = getMethodFromGroup(\$('#mailpoet_smtp_method').val());

        // check that we have a from address
        if(settings.sender.address.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 704
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email could not be sent. Make sure the option \"Email notifications\" has a FROM email address in the Basics tab."), "js"), "html", null, true);
        echo "',
            { scroll: true, static: true }
          );
        }

        MailPoet.Modal.loading(true);
        MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'mailer',
          action: 'send',
          data: {
            mailer: mailer,
            newsletter: {
              subject: \"";
        // line 717
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is a Sending Method Test");
        echo "\",
              body: {
                html: \"<p>";
        // line 719
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "</p>\",
                text: \"";
        // line 720
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "\"
              }
            },
            subscriber: recipient
          }
        }).always(function() {
          MailPoet.Modal.loading(false);
        }).done(function(response) {
          MailPoet.Notice.success(
            \"";
        // line 729
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email has been sent! Check your inbox."), "js"), "html", null, true);
        echo "\",
            { scroll: true }
          );
          trackTestEmailSent(mailer, true);
        }).fail(function(response) {
          if (response.errors.length > 0) {
            MailPoet.Notice.error(
              response.errors.map(function(error) { return _.escape(error.message); }),
              { scroll: true }
            );
          }
          trackTestEmailSent(mailer, false);
        });
      });

      // sending frequency update based on selected provider
      \$('#mailpoet_web_host').on('change keyup', renderHostSendingFrequency);

      // update manual sending frequency when values are changed
      \$('#other_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('other');
      });
      \$('#other_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('other');
      });

      // save configuration of a sending method
      \$('.mailpoet_sending_service_activate').on('click', function(e, navigateToTab) {
        \$('#mta_group').val('mailpoet');
        saveSendingMethodConfiguration('mailpoet', navigateToTab);
      });
      \$('.mailpoet_mta_setup_save').on('click', function() {
        \$('#mailpoet_smtp_method').trigger(\"change\");
        \$('#other_frequency_emails').trigger(\"change\");
        // get selected method
        var group = \$('.mailpoet_sending_method:visible').data('group');
        saveSendingMethodConfiguration(group);
      });
      \$('#mailpoet_smtp_method').on('change keyup', renderHostsSelect);
      \$('#mailpoet_sending_frequency').on('change keyup', sendingFrequencyMethodUpdated);

      ";
        // line 770
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "mailpoet")) {
            // line 771
            echo "        \$('#mailpoet_smtp_method').trigger(\"change\");
        \$('#other_frequency_emails').trigger(\"change\");
      ";
        }
        // line 774
        echo "
      function saveSendingMethodConfiguration(group, navigateToTab) {
        // set sending method
        if(group === undefined) {
          MailPoet.Notice.error(
            \"";
        // line 779
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("You have selected an invalid sending method."), "js"), "html", null, true);
        echo "\"
          );
        } else {
          // set new sending method active
          setSendingMethodGroup(group);

          // enforce signup confirmation depending on selected group
          setSignupConfirmation(group);

          // back to selection of sending methods
          if (navigateToTab === undefined || navigateToTab === true) {
            MailPoet.Router.navigate('mta', { trigger: true });
          }

          // save settings
          \$('.mailpoet_settings_submit > input').trigger('click');

          if (group === 'mailpoet') {
            updateMSSActivationUI()
          }
        }
      }

      function setSignupConfirmation(group) {
        if (group === 'mailpoet') {
          // force signup confirmation (select \"Yes\")
          \$('.mailpoet_signup_confirmation[value=\"1\"]').attr('checked', true);
          \$('.mailpoet_signup_confirmation[value=\"\"]').attr('checked', false);

          // hide radio inputs
          \$('#mailpoet_signup_confirmation_input').hide();

          // show mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').show();

          // show signup confirmation options
          \$('#mailpoet_signup_options').show();
        } else {
          // show radio inputs
          \$('#mailpoet_signup_confirmation_input').show();

          // hide mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').hide();
        }
      }

      function setSendingMethodGroup(group) {
        // deactivate other sending methods
        \$('.mailpoet_sending_methods .mailpoet_active')
          .removeClass('mailpoet_active');

        // set active sending method
        \$('.mailpoet_sending_methods li[data-group=\"'+group+'\"]')
          .addClass('mailpoet_active');

        var method = getMethodFromGroup(\$('#mta_group').val());

        \$('#mta_method').val(method);

        // set MailPoet method description
        \$('#mailpoet_sending_method_active_text')
          .toggleClass('mailpoet_hidden', group !== 'mailpoet');
        \$('#mailpoet_sending_method_inactive_text')
          .toggleClass('mailpoet_hidden', group === 'mailpoet');

        // Hide server error notices
        \$('.mailpoet_notice_server').hide();

        updateMSSActivationUI();
      }

      function getMethodFromGroup(group) {
        var group = group || 'website';

        switch(group) {
          case 'mailpoet':
            return 'MailPoet';
          break;
          case 'server':
          case 'website':
            return 'PHPMail';
          break;
          case 'manual':
          case 'smtp':
            var method = \$('#mailpoet_smtp_provider').val();
            if(method === 'manual') {
              return 'SMTP';
            }
            return method;
          break;
          default:
            return group;
        }
      }

      // cancel configuration of a sending method
      \$('.mailpoet_mta_setup_cancel').on('click', function() {
        // back to selection of sending methods
        MailPoet.Router.navigate('mta', { trigger: true });
      });

      // render sending frequency form
      \$('#mailpoet_smtp_provider').trigger('change');
      \$('#mailpoet_web_host').trigger('change');

      function trackTestEmailSent(mailer, success) {
        MailPoet.trackEvent(
          'User has sent a test email from Settings',
          {
            'Sending was successful': !!success,
            'Sending method type': mailer.method,
            'MailPoet Free version': window.mailpoet_version
          }
        );
      }

      \$('.mailpoet_sending_methods_help a').on('click', function() {
        MailPoet.trackEvent(
          'User has clicked to view the sending comparison table',
          {'MailPoet Free version': window.mailpoet_version}
        );
      });
    });

    function setProviderForm() {
      // check provider
      var provider = \$(this).find('option:selected').first();
      var fields = provider.data('fields');

      if(fields === undefined) {
        fields = [
          'host',
          'port',
          'login',
          'password',
          'authentication',
          'encryption'
        ];
      } else {
        fields = fields.split(',');
      }

      \$('.mailpoet_smtp_field').hide();

      fields.map(function(field) {
        \$('.mailpoet_smtp_field[data-field=\"'+field+'\"]').show();
      });

      // update sending frequency
      renderSMTPSendingFrequency(provider);
    }

    function renderSMTPSendingFrequency() {
      // set sending frequency
      var emails = \$('#smtp_frequency_emails').val();
      var interval = \$('#smtp_frequency_interval').val();
      setSendingFrequency({
        output: '#mailpoet_smtp_daily_emails',
        only_daily: true,
        emails: emails,
        interval: interval
      });
      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function sendingFrequencyMethodUpdated() {
      var method = \$(this).find('option:selected').first();
      var sendingMethod = \$('#mailpoet_smtp_method').find('option:selected').first().val();
      if(method.val() === \"manual\") {
        \$('#mailpoet_sending_frequency_manual').show();
        \$('#mailpoet_recommended_daily_emails').hide();
        \$('#other_frequency_emails').trigger(\"change\");
      } else {
        \$('#mailpoet_sending_frequency_manual').hide();
        if(sendingMethod !== \"server\") {
          \$('#mailpoet_recommended_daily_emails').show();
        }
        \$('#mailpoet_smtp_method').trigger(\"change\");
      }
    }

    function renderHostsSelect() {
      var method = \$(this).find('option:selected').first();
      var val = method.val();

      if(val === \"server\") {
        \$('#mailpoet_sending_method_host').show();
        \$('#mta_group').val('website');
      } else {
        \$('#mailpoet_sending_method_host').hide();
      }
      if(val === \"manual\") {
        \$('.mailpoet_smtp_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('manual');
      } else {
        \$('.mailpoet_smtp_field').hide();
      }
      if(val === \"AmazonSES\") {
        \$('.mailpoet_aws_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('AmazonSES');
      } else {
        \$('.mailpoet_aws_field').hide();
      }
      if(val === \"SendGrid\") {
        \$('.mailpoet_sendgrid_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('SendGrid');
      } else {
        \$('.mailpoet_sendgrid_field').hide();
      }
      var emails = method.data('emails');
      var interval = method.data('interval');
      if(val === \"server\") {
        emails = \$('#mailpoet_web_host').find('option:selected').first().data('emails');
        interval = \$('#mailpoet_web_host').find('option:selected').first().data('interval');
      }
      const frequencyMethod = \$('#mailpoet_sending_frequency').find('option:selected').first().val();
      if(frequencyMethod === \"manual\") {
        \$('#mailpoet_recommended_daily_emails').hide();
        emails = \$('#other_frequency_emails').val();
        interval = \$('#other_frequency_interval').val();
      } else {
        \$('#mailpoet_recommended_daily_emails').show();
      }
      setSendingFrequency({
        output: '#mailpoet_recommended_daily_emails',
        only_daily: false,
        emails: emails,
        interval: interval
      });
      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function renderHostSendingFrequency() {
      var host = \$(this).find('option:selected').first();
      var frequencyType = \$(\"#mailpoet_sending_frequency\").find('option:selected').first().val();

      var emails =
        host.data('emails') || ";
        // line 1021
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "emails", array()), "html", null, true);
        echo ";
      var interval =
        host.data('interval') || ";
        // line 1023
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "interval", array()), "html", null, true);
        echo ";
      var fields =
        host.data('fields') || '';

      if (frequencyType === \"manual\") {
        return;
      } else {
        setSendingFrequency({
          output: '#mailpoet_recommended_daily_emails',
          only_daily: false,
          emails: emails,
          interval: interval
        });
      }

      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function updateSendingFrequency(method) {
      // get emails
      var options = {
        only_daily: true,
        emails: \$('#'+method+'_frequency_emails').val(),
        interval: \$('#'+method+'_frequency_interval').val()
      };

      var MINUTES_PER_DAY = 1440;
      var SECONDS_PER_DAY = 86400;

      options.daily_emails = ~~(
        (MINUTES_PER_DAY / options.interval) * options.emails
      );

      options.emails_per_second = (~~(
        ((options.daily_emails) / 86400) * 10)
      ) / 10;


      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$('#mailpoet_'+method+'_daily_emails').html(
        sending_frequency_template(options)
      );

      // update actual sending frequency values
      \$('#mta_frequency_emails').val(options.emails);
      \$('#mta_frequency_interval').val(options.interval);
    }

    function setSendingFrequency(options) {
      options.daily_emails = ~~((1440 / options.interval) * options.emails);

      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();
      \$(options.output).html(
        sending_frequency_template(options)
      );
    }

    Handlebars.registerHelper('format_time', function(value, block) {
      var label = null;
      var labels = {
        minute: \"";
        // line 1087
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every minute");
        echo "\",
        minutes: \"";
        // line 1088
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d minutes");
        echo "\",
        hour: \"";
        // line 1089
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every hour");
        echo "\",
        hours: \"";
        // line 1090
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d hours");
        echo "\"
      };

      // cast time as int
      value = ~~(value);

      // format time depending on the value
      if(value >= 60) {
        // we're dealing with hours
        if(value === 60) {
          label = labels.hour;
        } else {
          label = labels.hours;
        }
        value /= 60;
      } else {
        // we're dealing with minutes
        if(value === 1) {
          label = labels.minute;
        } else {
          label = labels.minutes;
        }
      }

      if(label !== null) {
        return label.replace('%1\$d', value);
      } else {
        return value;
      }
    });
  });

  // enable/disable MSS method activate button and notice
  function updateMSSActivationUI() {
    var \$ = jQuery;
    var group = \$('.mailpoet_sending_methods .mailpoet_active').data('group');
    var key_valid = !\$('.mailpoet_mss_key_valid').hasClass('mailpoet_hidden');

    if (group !== 'mailpoet') {
      \$('.mailpoet_actions .mailpoet_invalid_key').toggleClass('mailpoet_hidden', key_valid);
      \$('.mailpoet_actions .mailpoet_valid_key').toggleClass('mailpoet_hidden', !key_valid);
      \$('.mailpoet_other_sending_method_action').removeClass('button-primary').addClass('button-secondary').text('";
        // line 1131
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "');
    } else {
      \$('.mailpoet_actions .mailpoet_valid_key').addClass('mailpoet_hidden');
      \$('.mailpoet_activated').toggleClass('mailpoet_hidden', !key_valid);
      \$('.mailpoet_other_sending_method_action').removeClass('button-secondary').addClass('button-primary').text('";
        // line 1135
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "');
      \$('.mailpoet_invalid_key').toggleClass('mailpoet_hidden', key_valid);
      \$('.mailpoet_sending_methods li[data-group=\"'+group+'\"], .mailpoet_sending_methods li[data-group=\"'+group+'\"] > .mailpoet_status').toggleClass('mailpoet_invalid_key', !key_valid)
    }

    if (key_valid) {
        \$('.mailpoet_mss_activate_notice').toggle(group !== 'mailpoet');
      }
  };
</script>

";
        // line 1146
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "mailpoet_sending_frequency_template", "settings/templates/sending_frequency.hbs");
        // line 1149
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings/mta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1649 => 1149,  1647 => 1146,  1633 => 1135,  1626 => 1131,  1582 => 1090,  1578 => 1089,  1574 => 1088,  1570 => 1087,  1503 => 1023,  1498 => 1021,  1253 => 779,  1246 => 774,  1241 => 771,  1239 => 770,  1195 => 729,  1183 => 720,  1179 => 719,  1174 => 717,  1158 => 704,  1120 => 668,  1118 => 666,  1103 => 654,  1095 => 649,  1079 => 636,  1071 => 631,  1059 => 622,  1048 => 614,  1040 => 609,  1034 => 606,  1017 => 593,  1013 => 591,  1011 => 590,  999 => 582,  995 => 580,  993 => 579,  992 => 578,  980 => 568,  974 => 565,  969 => 562,  965 => 560,  963 => 558,  955 => 551,  951 => 549,  949 => 548,  944 => 545,  940 => 543,  938 => 542,  932 => 539,  924 => 534,  919 => 531,  915 => 529,  913 => 527,  904 => 520,  892 => 511,  887 => 508,  883 => 506,  881 => 504,  872 => 497,  860 => 488,  855 => 485,  851 => 483,  849 => 481,  839 => 473,  827 => 464,  822 => 461,  818 => 459,  816 => 457,  807 => 449,  804 => 448,  802 => 447,  789 => 437,  784 => 434,  780 => 432,  778 => 430,  769 => 422,  766 => 421,  764 => 420,  751 => 410,  746 => 407,  742 => 405,  740 => 403,  732 => 396,  723 => 393,  720 => 392,  716 => 390,  714 => 389,  710 => 388,  707 => 387,  703 => 386,  699 => 384,  696 => 383,  694 => 382,  684 => 375,  679 => 372,  675 => 370,  673 => 368,  663 => 360,  648 => 348,  643 => 345,  639 => 343,  637 => 341,  629 => 335,  617 => 326,  611 => 323,  606 => 320,  602 => 318,  600 => 316,  591 => 309,  584 => 304,  577 => 302,  571 => 300,  569 => 299,  565 => 298,  562 => 297,  558 => 295,  555 => 294,  551 => 292,  549 => 290,  548 => 289,  544 => 287,  541 => 286,  537 => 285,  532 => 283,  529 => 282,  523 => 280,  517 => 278,  515 => 277,  506 => 270,  502 => 268,  500 => 266,  491 => 259,  488 => 258,  484 => 256,  482 => 254,  476 => 250,  462 => 239,  452 => 231,  443 => 229,  439 => 227,  437 => 226,  433 => 225,  429 => 224,  425 => 223,  422 => 222,  418 => 221,  413 => 219,  394 => 203,  389 => 200,  385 => 198,  383 => 196,  376 => 190,  367 => 188,  363 => 186,  361 => 185,  357 => 184,  353 => 183,  349 => 182,  345 => 181,  342 => 180,  338 => 179,  334 => 178,  328 => 175,  325 => 174,  321 => 172,  319 => 170,  313 => 166,  300 => 156,  285 => 143,  279 => 141,  273 => 139,  271 => 138,  266 => 136,  258 => 130,  256 => 126,  252 => 125,  248 => 124,  244 => 123,  239 => 121,  234 => 119,  230 => 117,  226 => 116,  217 => 110,  211 => 109,  207 => 107,  205 => 103,  201 => 102,  197 => 101,  191 => 100,  185 => 97,  179 => 96,  173 => 95,  167 => 91,  165 => 89,  163 => 87,  161 => 86,  154 => 82,  150 => 81,  146 => 80,  142 => 79,  138 => 78,  131 => 74,  125 => 73,  119 => 70,  113 => 69,  106 => 65,  93 => 61,  83 => 54,  72 => 46,  63 => 40,  52 => 32,  42 => 25,  33 => 19,  25 => 13,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/mta.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\mta.html");
    }
}
