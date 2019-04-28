<?php

/* deactivationSurvey/css.html */
class __TwigTemplate_bfed43202645307196a3f22ceba32f685379be57bfff7b229a1f86a9677dc83c extends Twig_Template
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
        echo "<style type=\"text/css\">
  .mailpoet-deactivate-survey-modal {
    display: none;
    table-layout: fixed;
    position: fixed;
    z-index: 9999;
    width: 100%;
    height: 100%;
    text-align: center;
    font-size: 14px;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
  }
  .mailpoet-deactivate-survey-wrap {
    display: table-cell;
    vertical-align: middle;
  }

  .mailpoet-deactivate-survey {
    background-color: #f1f1f1;
    border: 0 solid #ccc;
    border-radius: 3px;
    margin: 0 auto;
    padding: 12px;
    width: 340px;
    direction: ltr;
  }

  .mailpoet-deactivate-survey a.button {
    white-space: normal;
    height: auto;
  }
</style>
";
    }

    public function getTemplateName()
    {
        return "deactivationSurvey/css.html";
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
        return new Twig_Source("", "deactivationSurvey/css.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\deactivationSurvey\\css.html");
    }
}
