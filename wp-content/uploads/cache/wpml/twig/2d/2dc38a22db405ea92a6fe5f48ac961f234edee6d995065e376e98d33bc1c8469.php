<?php

/* tooltip.twig */
class __TwigTemplate_9eff6edf95ed8eb3d2b7abf3c50d1d94f59ee986658c93f7edb3ec168cbcc56c extends Twig_Template
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
        echo "<a href=\"#\" class=\"js-wpml-ls-tooltip-open wpml-ls-tooltip-open otgs-ico-help\" data-content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "text", array()), "html_attr");
        echo "\" data-link-text=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "link", array()), "text", array()), "html_attr");
        echo "\" data-link-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "link", array()), "url", array()), "html_attr");
        echo "\" data-link-target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "link", array()), "target", array()), "html_attr");
        echo "\"></a>";
    }

    public function getTemplateName()
    {
        return "tooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tooltip.twig", "F:\\phpStudy\\PHPTutorial\\WWW\\surpeer\\wp-content\\plugins\\sitepress-multilingual-cms\\templates\\language-switcher-admin-ui\\tooltip.twig");
    }
}
