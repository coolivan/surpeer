<?php

/* form/templates/blocks/date_years.hbs */
class __TwigTemplate_ecf9dbb655ba5d761690c5e3c293aa6e8124badba9241ccb9250608b23187124 extends Twig_Template
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
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 2
        $context["minYear"] = (($context["currentYear"] ?? null) - 100);
        // line 3
        echo "
<select id=\"{{ id }}_years\">
  <option value=\"\">";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Year");
        echo "</option>
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["minYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 7
            echo "    <option
      ";
            // line 8
            if ((($context["currentYear"] ?? null) == $context["year"])) {
                // line 9
                echo "      {{#if params.is_default_today}}selected=\"selected\"{{/if}}
      ";
            }
            // line 11
            echo "    >";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/date_years.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  44 => 11,  40 => 9,  38 => 8,  35 => 7,  31 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/date_years.hbs", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\blocks\\date_years.hbs");
    }
}
