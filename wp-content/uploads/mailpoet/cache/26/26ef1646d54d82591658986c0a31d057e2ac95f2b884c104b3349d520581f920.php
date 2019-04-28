<?php

/* settings/signup.html */
class __TwigTemplate_03f443d88a4b9dfd58dd845bc2b4dfa70ff756b19aa8af5452237fe1c4c256b1 extends Twig_Template
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
    <!-- enable sign-up confirmation -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable sign-up confirmation");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you enable this option, your subscribers will first receive a confirmation email after they subscribe. Once they confirm their subscription (via this email), they will be marked as 'confirmed' and will begin to receive your email newsletters.");
        echo "
          <a href=\"http://docs.mailpoet.com/article/128-why-you-should-use-signup-confirmation-double-opt-in\" target=\"_blank\">";
        // line 11
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more about Double Opt-in confirmation.");
        echo "</a>
        </p>
      </th>
      <td>
        <p
          id=\"mailpoet_signup_confirmation_notice\"
          ";
        // line 17
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "mailpoet")) {
            echo "style=\"display:none;\"";
        }
        // line 18
        echo "        >";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign-up confirmation is mandatory when using the MailPoet Sending Service.");
        // line 20
        echo "</p>
        <p
          id=\"mailpoet_signup_confirmation_input\"
          ";
        // line 23
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "mailpoet")) {
            echo "style=\"display:none;\"";
        }
        // line 24
        echo "        >
          <label>
            <input
              type=\"radio\"
              class=\"mailpoet_signup_confirmation\"
              name=\"signup_confirmation[enabled]\"
              value=\"1\"
              ";
        // line 31
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "enabled", array())) {
            // line 32
            echo "                checked=\"checked\"
              ";
        }
        // line 34
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              class=\"mailpoet_signup_confirmation\"
              name=\"signup_confirmation[enabled]\"
              value=\"\"
              ";
        // line 43
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "enabled", array())) {
            // line 44
            echo "                checked=\"checked\"
              ";
        }
        // line 46
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
  </tbody>
</table>
<table id=\"mailpoet_signup_options\" class=\"form-table\">
  <tbody>
    <!-- sign-up confirmation: from name & email -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[signup_confirmation_from_name]\">
          ";
        // line 59
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("From");
        echo "
        </label>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            id=\"settings[signup_confirmation_from_name]\"
            name=\"signup_confirmation[from][name]\"
            value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "from", array()), "name", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 69
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name");
        echo "\"
          />
          <input type=\"email\"
            id=\"settings[signup_confirmation_from_email]\"
            name=\"signup_confirmation[from][address]\"
            value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "from", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"confirmation@mydomain.com\"
            size=\"28\"
          />
        </p>
      </td>
    </tr>
    <!-- sign-up confirmation: reply_to name & email -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[signup_confirmation_reply_name]\">
          ";
        // line 85
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reply-to");
        echo "
        </label>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            id=\"settings[signup_confirmation_reply_name]\"
            name=\"signup_confirmation[reply_to][name]\"
            value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "reply_to", array()), "name", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 95
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name");
        echo "\"
            />
          <input type=\"email\"
            id=\"settings[signup_confirmation_reply_email]\"
            name=\"signup_confirmation[reply_to][address]\"
            value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "reply_to", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"confirmation@mydomain.com\"
            size=\"28\"
            />
        </p>
      </td>
    </tr>
    <!-- confirmation email: title -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[signup_confirmation_email_subject]\">
        ";
        // line 111
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email subject");
        echo "
        </label>
      </th>
      <td>
        <input
          size=\"52\"
          type=\"text\"
          id=\"settings[signup_confirmation_email_subject]\"
          name=\"signup_confirmation[subject]\"
          ";
        // line 120
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "subject", array())) {
            // line 121
            echo "            value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "subject", array()), "html", null, true);
            echo "\"
          ";
        }
        // line 123
        echo "        />
      </td>
    </tr>
    <!-- confirmation email: body -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[signup_confirmation_email_body]\">
          ";
        // line 130
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email content");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 133
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Don't forget to include:<br /><br />[activation_link]Confirm your subscription.[/activation_link]<br /><br />Optional: [lists_to_confirm].");
        echo "
        </p>
      </th>
      <td>
        <textarea
          cols=\"50\"
          rows=\"15\"
          id=\"settings[signup_confirmation_email_body]\"
          name=\"signup_confirmation[body]\"
        >";
        // line 142
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "body", array())) {
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "signup_confirmation", array()), "body", array()), "html", null, true);
        }
        // line 144
        echo "</textarea>
      </td>
    </tr>
    <!-- sign-up confirmation: confirmation page -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 151
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Confirmation page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 154
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When subscribers click on the activation link, they will be redirected to this page.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            name=\"subscription[pages][confirmation]\"
          >
            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 164
            echo "              <option
                value=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 166
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "confirm", array());
            echo "\"
                ";
            // line 167
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscription", array()), "pages", array()), "confirmation", array()))) {
                // line 168
                echo "                  selected=\"selected\"
                ";
            }
            // line 170
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 176
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
          >";
        // line 177
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    // om dom loaded
    \$(function() {
      // double optin toggling
      toggleSignupOptions();

      \$('.mailpoet_signup_confirmation').on('click', function() {
        var result = false;

        if(~~(\$(this).val()) === 1) {
          result = confirm(\"";
        // line 195
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribers will need to activate their subscription via email in order to receive your newsletters. This is highly recommended!"), "js"), "html", null, true);
        echo "\");
        } else {
          result = confirm(\"";
        // line 197
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("New subscribers will be automatically confirmed, without having to confirm their subscription. This is not recommended!"), "js"), "html", null, true);
        echo "\");
        }
        // if the user confirmed changing the sign-up confirmation (yes/no)
        if(result === true) {
          // toggle signup options depending on the currently selected value
          toggleSignupOptions();
        }
        return result;
      });

      function toggleSignupOptions() {
        var is_enabled =
          (~~(\$('.mailpoet_signup_confirmation:checked').val()) === 1);
        \$('#mailpoet_signup_options')[(is_enabled) ? 'show' : 'hide']();
      }
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "settings/signup.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 197,  330 => 195,  309 => 177,  305 => 176,  299 => 172,  290 => 170,  286 => 168,  284 => 167,  280 => 166,  276 => 165,  273 => 164,  269 => 163,  257 => 154,  251 => 151,  242 => 144,  239 => 143,  237 => 142,  225 => 133,  219 => 130,  210 => 123,  204 => 121,  202 => 120,  190 => 111,  176 => 100,  168 => 95,  164 => 94,  152 => 85,  138 => 74,  130 => 69,  126 => 68,  114 => 59,  97 => 46,  93 => 44,  91 => 43,  78 => 34,  74 => 32,  72 => 31,  63 => 24,  59 => 23,  54 => 20,  52 => 19,  50 => 18,  46 => 17,  37 => 11,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/signup.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\signup.html");
    }
}
