<?php

/* settings/advanced.html */
class __TwigTemplate_f6ef8893b2b371fafe32961635f30d4b2c4fcad1f23bf20210ae4cac0a1c26ab extends Twig_Template
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
        echo "<table class=\"form-table\">
  <tbody>
    <!-- bounce email -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[bounce_email]\">
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce email address");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your bounced emails will be sent to this address.");
        echo "
          <a href=\"http://beta.docs.mailpoet.com/article/180-how-bounce-management-works-in-mailpoet-3\"
             target=\"_blank\"
          >";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[bounce_email]\"
            name=\"bounce[address]\"
            value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "bounce", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"bounce@mydomain.com\"
          />
        </p>
      </td>
    </tr>
    <!-- task scheduler -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter task scheduler (cron)");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 34
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select what will activate your newsletter queue.");
        echo "
          <a href=\"http://docs.mailpoet.com/article/129-what-is-the-newsletter-task-scheduler\"
             target=\"_blank\"
          >";
        // line 37
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cron_trigger"] ?? null), "wordpress", array()), "html", null, true);
        echo "\"
              ";
        // line 47
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "cron_trigger", array()), "method", array()) == $this->getAttribute(($context["cron_trigger"] ?? null), "wordpress", array()))) {
            // line 48
            echo "              checked=\"checked\"
              ";
        }
        // line 50
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors to your website (recommended)");
        echo "
          </label>
        </p>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cron_trigger"] ?? null), "mailpoet", array()), "html", null, true);
        echo "\"
              ";
        // line 59
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "cron_trigger", array()), "method", array()) == $this->getAttribute(($context["cron_trigger"] ?? null), "mailpoet", array()))) {
            // line 60
            echo "                checked=\"checked\"
                ";
        }
        // line 62
        echo "              />";
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet's own script. Doesn't work with [link]these hosts[/link]."), "http://docs.mailpoet.com/article/131-hosts-which-mailpoet-task-scheduler-wont-work", array("target" => "_blank"));
        // line 65
        echo "
          </label>
        </p>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cron_trigger"] ?? null), "linux_cron", array()), "html", null, true);
        echo "\"
            ";
        // line 74
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "cron_trigger", array()), "method", array()) == $this->getAttribute(($context["cron_trigger"] ?? null), "linux_cron", array()))) {
            // line 75
            echo "            checked=\"checked\"
            ";
        }
        // line 77
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Server side cron (Linux cron)");
        // line 78
        echo "
          </label>
        </p>
        <div id=\"settings_linux_cron\">
          <p>
            ";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("To use this option please add this command to your crontab:");
        echo "<br>
            <input
               value=\"php ";
        // line 85
        echo twig_escape_filter($this->env, ($context["linux_cron_path"] ?? null), "html", null, true);
        echo "/mailpoet-cron.php ";
        echo twig_escape_filter($this->env, ($context["ABSPATH"] ?? null), "html", null, true);
        echo "\"
               class=\"large-text\"
               readonly
            />
          <p>
            ";
        // line 90
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("With the frequency of running it every minute:");
        echo "<br>
            <input
               value=\"*/1 * * * *\"
               class=\"large-text\"
               readonly
            />
        </div>
      </td>
    </tr>
    <!-- roles and capabilities -->
    <tr>
      <th scope=\"row\">
        ";
        // line 102
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Roles and capabilities");
        echo "
        <p class=\"description\">
          ";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage which WordPress roles access which features of MailPoet.");
        echo "
        </p>
      </th>
      <td>
        ";
        // line 108
        if (($context["members_plugin_active"] ?? null)) {
            // line 109
            echo "        <p>
          <a href=\"";
            // line 110
            echo admin_url("users.php?page=roles");
            echo "\">";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage using the Members plugin");
            echo "</a>
        </p>
        ";
        } else {
            // line 113
            echo "          ";
            echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Install the plugin [link]Members[/link] (free) to manage permissions."), "https://wordpress.org/plugins/members/", array("target" => "_blank"));
            // line 116
            echo "
        ";
        }
        // line 118
        echo "      </td>
    </tr>
    <!-- link tracking -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open and click tracking");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 127
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable or disable open and click tracking.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              data-automation-id=\"tracking-enabled-radio\"
              value=\"1\"
              ";
        // line 138
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "tracking", array()), "enabled", array())) {
            // line 139
            echo "              checked=\"checked\"
              ";
        }
        // line 141
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              data-automation-id=\"tracking-disabled-radio\"
              value=\"\"
              ";
        // line 150
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "tracking", array()), "enabled", array())) {
            // line 151
            echo "              checked=\"checked\"
              ";
        }
        // line 153
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- share anonymous data? -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 162
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 165
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data and help us improve the plugin. We appreciate your help!");
        echo "
          <a
            href=\"http://docs.mailpoet.com/article/130-sharing-your-data-with-us\"
            target=\"_blank\"
          >";
        // line 169
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              value=\"1\"
              ";
        // line 179
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "analytics", array()), "enabled", array())) {
            // line 180
            echo "                checked=\"checked\"
              ";
        }
        // line 182
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              value=\"\"
              ";
        // line 190
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "analytics", array()), "enabled", array())) {
            // line 191
            echo "                checked=\"checked\"
              ";
        }
        // line 193
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- reCaptcha settings -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 202
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable reCAPTCHA");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 205
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Use reCAPTCHA to protect MailPoet subscription forms.");
        echo "
          <a
            href=\"https://www.google.com/recaptcha/admin\"
            target=\"_blank\"
          >";
        // line 209
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign up for an API key pair here.");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"re_captcha[enabled]\"
              value=\"1\"
              ";
        // line 219
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "re_captcha", array()), "enabled", array())) {
            // line 220
            echo "                checked=\"checked\"
              ";
        }
        // line 222
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"re_captcha[enabled]\"
              value=\"\"
              ";
        // line 230
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "re_captcha", array()), "enabled", array())) {
            // line 231
            echo "                checked=\"checked\"
              ";
        }
        // line 233
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
        <div id=\"settings_re_captcha_tokens\">
          <p>
            <input type=\"text\"
              name=\"re_captcha[site_token]\"
              value=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "re_captcha", array()), "site_token", array()), "html", null, true);
        echo "\"
              placeholder=\"";
        // line 241
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your reCAPTCHA Site Key");
        echo "\"
              class=\"regular-text\"
            />
          </p>
          <p>
            <input type=\"text\"
              name=\"re_captcha[secret_token]\"
              value=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "re_captcha", array()), "secret_token", array()), "html", null, true);
        echo "\"
              placeholder=\"";
        // line 249
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your reCAPTCHA Secret Key");
        echo "\"
              class=\"regular-text\"
            />
          </p>
          <div id=\"settings_re_captcha_tokens_error\" class=\"mailpoet_error_item mailpoet_error\">
            ";
        // line 254
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please fill the reCAPTCHA keys.");
        echo "
          </div>
        </div>
      </td>
    </tr>
    <!-- reinstall -->
    <tr>
      <th scope=\"row\">
        <label>";
        // line 262
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall from scratch");
        echo "</label>
        <p class=\"description\">
          ";
        // line 264
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to start from the beginning? This will completely delete MailPoet and reinstall it from scratch. Remember: you will lose all of your data!");
        echo "
        </p>
      </th>
      <td>
        <p>
          <a
            id=\"mailpoet_reinstall\"
            class=\"button\"
            href=\"javascript:;\">";
        // line 272
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall now...");
        echo "</a>
        </p>
      </td>
    </tr>
    <!-- logging -->
    <tr>
      <th scope=\"row\">
        <label>";
        // line 279
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Logging");
        echo "</label>
        <p class=\"description\">
          ";
        // line 281
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enables logging for diagnostics of plugin behavior.");
        echo "
      <td>
        <select
          name=\"logging\"
        >
          <option
            value=\"everything\"
            ";
        // line 288
        if (($this->getAttribute(($context["settings"] ?? null), "logging", array()) == "everything")) {
            // line 289
            echo "              selected
            ";
        }
        // line 291
        echo "          >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Everything", "In settings: \"Logging: Everything\"");
        echo "
          <option
            value=\"errors\"
            ";
        // line 294
        if ((($this->getAttribute(($context["settings"] ?? null), "logging", array()) != "nothing") && ($this->getAttribute(($context["settings"] ?? null), "logging", array()) != "everything"))) {
            // line 295
            echo "              selected
            ";
        }
        // line 297
        echo "          >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Errors only", "In settings: \"Logging: Errors only\"");
        echo "
          <option
            value=\"nothing\"
            ";
        // line 300
        if (($this->getAttribute(($context["settings"] ?? null), "logging", array()) == "nothing")) {
            // line 301
            echo "              selected
            ";
        }
        // line 303
        echo "          >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Nothing", "In settings: \"Logging: Nothing\"");
        echo "
        </select>
  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "settings/advanced.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 303,  510 => 301,  508 => 300,  501 => 297,  497 => 295,  495 => 294,  488 => 291,  484 => 289,  482 => 288,  472 => 281,  467 => 279,  457 => 272,  446 => 264,  441 => 262,  430 => 254,  422 => 249,  418 => 248,  408 => 241,  404 => 240,  393 => 233,  389 => 231,  387 => 230,  375 => 222,  371 => 220,  369 => 219,  356 => 209,  349 => 205,  343 => 202,  330 => 193,  326 => 191,  324 => 190,  312 => 182,  308 => 180,  306 => 179,  293 => 169,  286 => 165,  280 => 162,  267 => 153,  263 => 151,  261 => 150,  248 => 141,  244 => 139,  242 => 138,  228 => 127,  222 => 124,  214 => 118,  210 => 116,  207 => 113,  199 => 110,  196 => 109,  194 => 108,  187 => 104,  182 => 102,  167 => 90,  157 => 85,  152 => 83,  145 => 78,  142 => 77,  138 => 75,  136 => 74,  132 => 73,  122 => 65,  119 => 62,  115 => 60,  113 => 59,  109 => 58,  97 => 50,  93 => 48,  91 => 47,  87 => 46,  75 => 37,  69 => 34,  63 => 31,  50 => 21,  39 => 13,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/advanced.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\advanced.html");
    }
}
