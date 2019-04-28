<?php

/* form/templates/blocks/date_months.hbs */
class __TwigTemplate_e4cd5a2885e244f8595f6fca322bbada805f9fb035fb668e81f834b910c7d7cb extends Twig_Template
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
        $context["currentMonth"] = twig_date_format_filter($this->env, "now", "n");
        // line 2
        echo "<select id=\"{{ id }}_months\">
  <option value=\"\">";
        // line 3
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Month");
        echo "</option>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 5
            echo "    <option
      ";
            // line 6
            if ((($context["currentMonth"] ?? null) == $context["month"])) {
                // line 7
                echo "      {{#if params.is_default_today}}selected=\"selected\"{{/if}}
      ";
            }
            // line 9
            echo "    >
    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["month_names"] ?? null), ($context["month"] - 1), array(), "array"), "html", null, true);
            echo "
    </option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/date_months.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  44 => 10,  41 => 9,  37 => 7,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/date_months.hbs", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\blocks\\date_months.hbs");
    }
}
