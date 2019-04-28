<?php

/* form/templates/settings/field.hbs */
class __TwigTemplate_e6dc604798122cd3e449b27af61617a16e09244698b820e4134f74784fa796f3 extends Twig_Template
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
        echo "<form id=\"form_field_settings\" name=\"form_field_settings\" action=\"\" method=\"post\">
  {{#ifCond type 'in' 'submit'}}
    {{> _settings_label }}
  {{/ifCond}}

  {{#ifCond type '==' 'text'}}
    {{> _settings_label }}
    {{> _settings_label_within }}
    {{#ifCond id 'in' 'first_name,last_name' }}
      {{> _settings_required }}
    {{/ifCond}}
  {{/ifCond}}

  {{#ifCond type '==' 'textarea'}}
    {{> _settings_label }}
    {{> _settings_label_within }}

    <p class=\"clearfix\">
      <label>";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Number of lines:");
        echo "</label>
      <select name=\"params[lines]\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"
            {{#ifCond params.lines '==' ";
            // line 23
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "}}selected=\"selected\"{{/ifCond}}
          >";
            // line 24
            echo twig_escape_filter($this->env, sprintf($this->env->getExtension('MailPoet\Twig\I18n')->pluralize("1 line", "%d lines", $context["i"]), $context["i"]), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </select>
    </p>
  {{/ifCond}}

  {{#ifCond type 'in' 'checkbox,radio'}}
    {{> _settings_label }}
  {{/ifCond}}

  {{#ifCond type '==' 'segment'}}
    {{> _settings_label }}
    {{> _settings_segment_selection }}
  {{/ifCond}}

  {{#ifCond type '==' 'select'}}
    {{> _settings_label }}
    {{> _settings_label_within }}
  {{/ifCond}}

  {{#ifCond type '==' 'date'}}
    {{> _settings_label }}
    {{> _settings_date_default }}
    {{> _settings_date_format }}
  {{/ifCond}}

  {{#ifCond type '==' 'html'}}
    <textarea name=\"params[text]\">{{ params.text }}</textarea>
    <p class=\"clearfix\">
      <label>
        <input type=\"hidden\" name=\"params[nl2br]\" value=\"0\" />
        <input
          class=\"mailpoet_checkbox\"
          type=\"checkbox\"
          name=\"params[nl2br]\"
          {{#ifCond params.nl2br \">\" 0}}checked=\"checked\"{{/ifCond}}
          value=\"1\"
          />&nbsp;";
        // line 61
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Automatically add paragraphs");
        echo "
      </label>
    </p>
  {{/ifCond}}

  {{> _settings_submit }}
</form>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    \$(document).on('submit', '#form_field_settings', function(e) {
      // trigger callback
      MailPoet.Modal.success();
      return false;
    });
  });
<{{!}}/script>";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/field.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 61,  65 => 26,  57 => 24,  53 => 23,  48 => 22,  44 => 21,  39 => 19,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/field.hbs", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\settings\\field.hbs");
    }
}
