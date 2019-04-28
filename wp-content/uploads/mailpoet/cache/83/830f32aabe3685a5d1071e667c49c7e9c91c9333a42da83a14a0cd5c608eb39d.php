<?php

/* form/templates/settings/segment_selection_item.hbs */
class __TwigTemplate_433fda5139c542c17a14f2976c7a7acc537f33bc8dd9a57a24d8904315dd3d6e extends Twig_Template
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
        echo "{{#each segments}}
<li data-segment=\"{{ id }}\">
  <label>
    <input class=\"mailpoet_segment_id\" type=\"hidden\" value=\"{{ id }}\" />
    <input class=\"mailpoet_is_checked\" type=\"checkbox\" value=\"1\"
      {{#ifCond is_checked '>' 0}}checked=\"checked\"{{/ifCond}} />
    <input class=\"mailpoet_segment_name\" type=\"hidden\" value=\"{{ name }}\" />
    {{ name }}
  </label>
  <a class=\"remove\" href=\"javascript:;\">";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Remove");
        echo "</a>
  <a class=\"handle\" href=\"javascript:;\">";
        // line 11
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Move");
        echo "</a>
</li>
{{/each}}";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/segment_selection_item.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/segment_selection_item.hbs", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\settings\\segment_selection_item.hbs");
    }
}
