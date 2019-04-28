<?php

/* settings/premium.html */
class __TwigTemplate_7b92c4a79c70530b1b5eed32e9ceec2600b6e880b6f718c21718c88cef6d51c8 extends Twig_Template
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
    <!-- premium key -->
    <tr>
      <th scope=\"row\">
        <label for=\"mailpoet_premium_key\">
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activation Key");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This key is used to validate your free or paid subscription. Paying customers will enjoy automatic upgrades of their Premium plugin and access to faster support.");
        echo "
        </p>
      </th>
      <td>
        <div>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_premium_key\"
            name=\"premium[premium_key]\"
            value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "premium", array(), "any", false, true), "premium_key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "premium", array(), "any", false, true), "premium_key", array()), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "mailpoet_api_key", array()))) : ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "mailpoet_api_key", array()))), "html", null, true);
        echo "\"
          />
          <a
            id=\"mailpoet_premium_key_verify\"
            class=\"button-secondary\"
          >";
        // line 25
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Verify");
        echo "</a>
        </div>
        <div
          class=\"mailpoet_premium_key_valid mailpoet_success_item mailpoet_success";
        // line 28
        if (( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "premium", array()), "premium_key", array()) ||  !($context["premium_key_valid"] ?? null))) {
            echo " mailpoet_hidden";
        }
        echo "\"
        >
          ";
        // line 30
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your Premium key has been successfully validated.");
        echo "
        </div>
        <div
          class=\"mailpoet_premium_key_invalid mailpoet_error_item mailpoet_error";
        // line 33
        if (( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "premium", array()), "premium_key", array()) || ($context["premium_key_valid"] ?? null))) {
            echo " mailpoet_hidden";
        }
        echo "\"
        >
          ";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your key is not valid for the Premium plugin.");
        echo "
        </div>
        <div
          class=\"mailpoet_mss_key_valid mailpoet_success_item mailpoet_success";
        // line 38
        if (( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "mailpoet_api_key", array()) ||  !($context["mss_key_valid"] ?? null))) {
            echo " mailpoet_hidden";
        }
        echo "\"
        >
          ";
        // line 40
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your MailPoet Sending Service key has been successfully validated.");
        echo "
        </div>
        <div
          class=\"mailpoet_mss_key_invalid mailpoet_error_item mailpoet_error";
        // line 43
        if (( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "mailpoet_api_key", array()) || ($context["mss_key_valid"] ?? null))) {
            echo " mailpoet_hidden";
        }
        echo "\"
        >
          ";
        // line 45
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your key is not valid for the MailPoet Sending Service.");
        echo "
        </div>
        <div
          class=\"mailpoet_premium_download mailpoet_spaced_block\"
          ";
        // line 49
        if ((($context["premium_plugin_installed"] ?? null) ||  !($context["premium_key_valid"] ?? null))) {
            // line 50
            echo "            style=\"display: none;\"
          ";
        }
        // line 52
        echo "        >
          <a
            class=\"mailpoet_premium_install_link button-primary\"
            href=\"";
        // line 55
        echo twig_escape_filter($this->env, (((isset($context["premium_install_url"]) || array_key_exists("premium_install_url", $context))) ? (_twig_default_filter(($context["premium_install_url"] ?? null), "#")) : ("#")), "html", null, true);
        echo "\"
          >";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Install Premium now.");
        echo "
          </a>
          <span>
            ";
        // line 59
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("[link]Read guide[/link] on how to install Premium."), "http://beta.docs.mailpoet.com/article/194-instructions-to-install-the-premium-plugin", array("target" => "_blank"));
        // line 62
        echo "
           </span>
        </div>
        <div
          class=\"mailpoet_premium_activate mailpoet_spaced_block\"
          ";
        // line 67
        if ((( !($context["premium_plugin_installed"] ?? null) || ($context["premium_plugin_active"] ?? null)) ||  !($context["premium_key_valid"] ?? null))) {
            // line 68
            echo "            style=\"display: none;\"
          ";
        }
        // line 70
        echo "        >
          <span>";
        // line 71
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You need to activate the MailPoet Premium plugin.");
        echo "</span>
          <a
            class=\"mailpoet_premium_activate_link button-primary\"
            href=\"";
        // line 74
        echo twig_escape_filter($this->env, (((isset($context["premium_activate_url"]) || array_key_exists("premium_activate_url", $context))) ? (_twig_default_filter(($context["premium_activate_url"] ?? null), "#")) : ("#")), "html", null, true);
        echo "\"
          >";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate Premium.");
        echo "</a>
        </div>
        <div
          class=\"mailpoet_mss_activate_notice mailpoet_spaced_block\"
          ";
        // line 79
        if ((($context["mss_active"] ?? null) ||  !($context["mss_key_valid"] ?? null))) {
            // line 80
            echo "            style=\"display: none;\"
          ";
        }
        // line 82
        echo "        >
          <span>
            ";
        // line 84
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Don't forget to activate the MailPoet Sending Service in the [link]Send with...[/link] tab above."), "#mta");
        // line 87
        echo "
          </span>
        </div>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    \$(function() {
      // verifying license key
      \$('#mailpoet_premium_key_verify').on('click', function () {
        // get license key
        var key = \$('#mailpoet_premium_key').val();

        if(key.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 106
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please specify a license key before validating it."), "js"), "html", null, true);
        echo "',
            { scroll: true }
          );
        }

        MailPoet.Modal.loading(true);

        var promise1 = verifyMailPoetPremiumKey(key);
        var promise2 = verifyMailPoetSendingServiceKey(key);

        // wait until both requests are completed before hiding the loading modal
        promise1.always(function() {
          promise2.always(function() {
            MailPoet.Modal.loading(false);
          });
        });
      });

      function verifyMailPoetPremiumKey(key) {
        \$('.mailpoet_premium_key_valid, .mailpoet_premium_key_invalid').addClass('mailpoet_hidden');
        \$('.mailpoet_premium_download, .mailpoet_premium_activate').hide();

        return MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'services',
          action: 'checkPremiumKey',
          data: {
            key: key
          }
        }).done(function(response) {
          // Hide server error notices
          \$('.mailpoet_notice_server').hide();
          \$('.mailpoet_premium_key_valid').text(response.data.message);
          \$('.mailpoet_premium_key_valid').removeClass('mailpoet_hidden');
          if (!response.meta.premium_plugin_installed) {
            \$('.mailpoet_premium_install_link')
              .attr('href', response.meta.premium_install_url || '#');
            \$('.mailpoet_premium_download').show();
          } else if (!response.meta.premium_plugin_active) {
            \$('.mailpoet_premium_activate_link')
              .attr('href', response.meta.premium_activate_url || '#');
            \$('.mailpoet_premium_activate').show();
          }
          MailPoet.trackEvent(
            'User has validated a Premium key',
            {
              'MailPoet Free version': window.mailpoet_version,
              'Premium plugin is active': response.meta.premium_plugin_active
            }
          );
        }).fail(function(response) {
          if (response.errors.length > 0) {
            \$('.mailpoet_premium_key_invalid').text(
              response.errors.map(function(error) { return error.message; }).join(' ')
            );
            \$('.mailpoet_premium_key_invalid').removeClass('mailpoet_hidden');
          }
          MailPoet.trackEvent(
            'User has failed to validate a Premium key',
            {
              'MailPoet Free version': window.mailpoet_version,
              'Premium plugin is active': !!window.mailpoet_premium_version
            }
          );
        });
      }

      function verifyMailPoetSendingServiceKey(key) {
        \$('.mailpoet_mss_key_valid, .mailpoet_mss_key_invalid').addClass('mailpoet_hidden');
        \$('.mailpoet_mss_activate_notice').hide();

        return MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'services',
          action: 'checkMSSKey',
          data: {
            key: key
          }
        }).done(function(response) {
          // Hide server error notices
          \$('.mailpoet_notice_server').hide();
          \$('.mailpoet_mss_key_valid').text(response.data.message);
          \$('.mailpoet_mss_key_valid').removeClass('mailpoet_hidden');
          updateMSSActivationUI();
        }).fail(function(response) {
          if (response.errors.length > 0) {
            \$('.mailpoet_mss_key_invalid').text(
              response.errors.map(function(error) { return error.message; }).join(' ')
            );
            \$('.mailpoet_mss_key_invalid').removeClass('mailpoet_hidden');
            updateMSSActivationUI();
          }
        });
      }

      \$('.mailpoet_premium_install_link').on('click', function() {
        MailPoet.trackEvent(
          'User has installed the Premium plugin from Settings',
          {'MailPoet Free version': window.mailpoet_version}
        );
      });

      \$('.mailpoet_premium_activate_link').on('click', function() {
        MailPoet.trackEvent(
          'User has activated the Premium plugin from Settings',
          {'MailPoet Free version': window.mailpoet_version}
        );
      });

    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "settings/premium.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 106,  181 => 87,  179 => 84,  175 => 82,  171 => 80,  169 => 79,  162 => 75,  158 => 74,  152 => 71,  149 => 70,  145 => 68,  143 => 67,  136 => 62,  134 => 59,  128 => 56,  124 => 55,  119 => 52,  115 => 50,  113 => 49,  106 => 45,  99 => 43,  93 => 40,  86 => 38,  80 => 35,  73 => 33,  67 => 30,  60 => 28,  54 => 25,  46 => 20,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/premium.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\premium.html");
    }
}
