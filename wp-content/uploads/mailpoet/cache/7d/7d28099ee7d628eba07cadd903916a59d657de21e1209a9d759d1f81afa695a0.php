<?php

/* form/templates/settings/date_formats.hbs */
class __TwigTemplate_1a6b1cba1be028c0295a281b4a23f3927c245f4c2cd71f0b2ee3b5dedb5c520c extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["date_formats"] ?? null));
        foreach ($context['_seq'] as $context["date_type"] => $context["formats"]) {
            // line 2
            echo "  {{#ifCond params.date_type \"===\" \"";
            echo twig_escape_filter($this->env, $context["date_type"], "html", null, true);
            echo "\"}}
    ";
            // line 3
            if ((twig_length_filter($this->env, $context["formats"]) == 1)) {
                // line 4
                echo "      <!-- display format as hidden value -->
      <input type=\"hidden\" name=\"params[date_format]\" value=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["formats"], 0, array(), "array"), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 7
                echo "      <!-- display label -->
      <p class=\"clearfix\">
        <label>";
                // line 9
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Order");
                echo "</label>
        <!-- display all possible date formats -->
        <select name=\"params[date_format]\">
          ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["formats"]);
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 13
                    echo "            <option
              {{#ifCond params.date_format \"===\" \"";
                    // line 14
                    echo twig_escape_filter($this->env, $context["format"], "html", null, true);
                    echo "\"}}
                selected=\"selected\"
              {{/ifCond}}
              value=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $context["format"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["format"], "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        </select>
      </p>
    ";
            }
            // line 22
            echo "  {{/ifCond}}
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date_type'], $context['formats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form/templates/settings/date_formats.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  71 => 19,  61 => 17,  55 => 14,  52 => 13,  48 => 12,  42 => 9,  38 => 7,  33 => 5,  30 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/settings/date_formats.hbs", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\settings\\date_formats.hbs");
    }
}
