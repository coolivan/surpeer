<?php

/* settings/templates/sending_frequency.hbs */
class __TwigTemplate_e8569c39afa92bbd463ca8ddd5ff245b2e96c7fb985336f05a290b86c47a0e1b extends Twig_Template
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
        echo "{{#unless only_daily}}
  <!-- number of emails & frequency  -->
  ";
        // line 3
        echo twig_escape_filter($this->env, sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("%1\$s emails"), "{{ emails }}"), "html", null, true);
        // line 6
        echo " {{ format_time interval }}.
{{/unless}}

<!--  number of emails per day -->
";
        // line 10
        echo sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("That's <strong>%1\$s emails</strong> per day"), "{{ daily_emails }}");
        // line 14
        echo "

{{#ifCond emails_per_second \">\" \"1\"}}
  <br /><br />
  <span style=\"color: #d54e21;\">
    ";
        // line 19
        echo sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("That's %1\$s emails per second. <strong>We highly recommend to send 1 email per second, at the absolute maximum.</strong> MailPoet needs at least one second to process and send a single email (on most hosts.) <strong>Alternatively, send with MailPoet, which can be up to 50 times faster.</strong>"), "{{ emails_per_second }}");
        // line 23
        echo "
  </span>
{{/ifCond}}";
    }

    public function getTemplateName()
    {
        return "settings/templates/sending_frequency.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 23,  40 => 19,  33 => 14,  31 => 10,  25 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/templates/sending_frequency.hbs", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\templates\\sending_frequency.hbs");
    }
}
