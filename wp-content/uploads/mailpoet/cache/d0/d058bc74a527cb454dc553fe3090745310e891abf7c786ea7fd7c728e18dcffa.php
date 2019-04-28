<?php

/* form/templates/settings/date_types.hbs */
class __TwigTemplate_89c0ca100aaad96c7240027255d9099e0fde96fa17a2ce5a4194041a11d209d2 extends Twig_Template
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
        echo "<p class=\"clearfix\">
  <label>";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Type of date");
        echo "</label>
  <select name=\"params[date_type]\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["date_types"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 5
            echo "      <option
        {{#ifCond params.date_type \"==\" \"";
            // line 6
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"}}
          selected=\"selected\"
        {{/ifCond}}
        data-format=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["date_formats"] ?? null), $context["type"], array(), "array"), 0, array(), "array"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
      >";
            // line 10
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </select>
  <input type=\"hidden\" name=\"params[date_format]\" value=\"\" />
</p>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    \$('select[name=\"params[date_type]\"]').on('change', function() {
      // set default date format depending on date type
      \$('input[name=\"params[date_format]\"]')
        .val(\$(this)
        .find('option:selected')
        .data('format'));
    });
    // set default format
    \$('select[name=\"params[date_type]\"]').trigger('change');
  });
<{{!}}/script>";
    }

    public function getTemplateName()
    {
        return "form/templates/settings/date_types.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  46 => 10,  40 => 9,  34 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/date_types.hbs", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\settings\\date_types.hbs");
    }
}
