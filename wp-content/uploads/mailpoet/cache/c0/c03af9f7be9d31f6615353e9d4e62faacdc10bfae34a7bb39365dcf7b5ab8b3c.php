<?php

/* form/templates/toolbar/fields.hbs */
class __TwigTemplate_78bd7f40c75e3cc283980260b553e4afb50d5391349a00950a9992af674723dd extends Twig_Template
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
        echo "{{#each fields}}
  <li>
    <a class=\"mailpoet_form_field\"
      wysija_name=\"{{ name }}\"
      {{#if id }}wysija_id=\"{{ id }}\"{{/if}}
      wysija_unique=\"{{#if multiple}}0{{else}}1{{/if}}\"
      wysija_type=\"{{ type }}\"
      {{#if params}}wysija_params=\"{{ json_encode params }}\"{{/if}}>
      {{ name }}
    </a>

  {{#unless readonly}}
    <a class=\"mailpoet_form_field_edit settings\"
      title=\"";
        // line 14
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit field");
        echo "\"
      href=\"javascript:;\"
      data-id=\"{{ id }}\">
      <span class=\"dashicons dashicons-admin-generic\"></span>
    </a>
    <a class=\"mailpoet_form_field_delete delete\"
      title=\"";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Delete field");
        echo "\"
      href=\"javascript:;\"
      data-id=\"{{ id }}\">
      <span class=\"dashicons dashicons-dismiss\"></span>
    </a>
  {{/unless}}
  </li>
{{/each}}";
    }

    public function getTemplateName()
    {
        return "form/templates/toolbar/fields.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 20,  34 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/toolbar/fields.hbs", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\toolbar\\fields.hbs");
    }
}
