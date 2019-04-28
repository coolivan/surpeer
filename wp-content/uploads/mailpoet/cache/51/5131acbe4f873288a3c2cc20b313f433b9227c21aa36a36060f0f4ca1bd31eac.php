<?php

/* form/custom_fields.html */
class __TwigTemplate_844210fb2a428e6a5c99f287590b82485a0e4fd0b288f03b17ee853d1f9cefa1 extends Twig_Template
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
        echo "<!-- date settings and block templates -->
";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_date_years", "form/templates/blocks/date_years.hbs", "_settings_date_years");
        // line 5
        echo "
";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_date_months", "form/templates/blocks/date_months.hbs", "_settings_date_months");
        // line 9
        echo "
";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_date_days", "form/templates/blocks/date_days.hbs", "_settings_date_days");
        // line 13
        echo "
";
        // line 14
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_date", "form/templates/blocks/date.hbs");
        echo "

<!-- field settings -->
";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_field_settings", "form/templates/settings/field.hbs");
        echo "

";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_label", "form/templates/settings/label.hbs", "_settings_label");
        // line 22
        echo "
";
        // line 23
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_label_within", "form/templates/settings/label_within.hbs", "_settings_label_within");
        // line 26
        echo "
";
        // line 27
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_required", "form/templates/settings/required.hbs", "_settings_required");
        // line 30
        echo "
";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_validate", "form/templates/settings/validate.hbs", "_settings_validate");
        // line 34
        echo "
";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_values", "form/templates/settings/values.hbs", "_settings_values");
        // line 38
        echo "
";
        // line 39
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_date_default", "form/templates/settings/date_default.hbs", "_settings_date_default");
        // line 42
        echo "
";
        // line 43
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_submit", "form/templates/settings/submit.hbs", "_settings_submit");
        // line 46
        echo "

";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_values_item", "form/templates/settings/values_item.hbs");
        // line 49
        echo "
";
        // line 50
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_date_format", "form/templates/settings/date_formats.hbs", "_settings_date_format");
        // line 54
        echo "
";
        // line 55
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_date_type", "form/templates/settings/date_types.hbs", "_settings_date_type");
        // line 59
        echo "
";
        // line 60
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_segment_selection_item", "form/templates/settings/segment_selection_item.hbs");
        // line 62
        echo "
";
        // line 63
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "field_settings_segment_selection", "form/templates/settings/segment_selection.hbs", "_settings_segment_selection");
        // line 66
        echo "

<!-- custom field: new -->
";
        // line 69
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_field_form", "form/templates/settings/field_form.hbs");
        // line 71
        echo "

<!-- field settings depending on field type -->
<script id=\"form_template_field_text\" type=\"text/x-handlebars-template\">
  {{> _settings_required }}
  {{> _settings_validate }}
</script>

<script id=\"form_template_field_textarea\" type=\"text/x-handlebars-template\">
  {{> _settings_required }}
  {{> _settings_validate }}
</script>

<script id=\"form_template_field_radio\" type=\"text/x-handlebars-template\">
  {{> _settings_values }}
  {{> _settings_required }}
</script>

<script id=\"form_template_field_checkbox\" type=\"text/x-handlebars-template\">
  {{> _settings_values }}
  {{> _settings_required }}
</script>

<script id=\"form_template_field_select\" type=\"text/x-handlebars-template\">
  {{> _settings_values }}
  {{> _settings_required }}
</script>

<script id=\"form_template_field_date\" type=\"text/x-handlebars-template\">
  {{> _settings_required }}
  {{> _settings_date_type }}
</script>";
    }

    public function getTemplateName()
    {
        return "form/custom_fields.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 71,  111 => 69,  106 => 66,  104 => 63,  101 => 62,  99 => 60,  96 => 59,  94 => 55,  91 => 54,  89 => 50,  86 => 49,  84 => 48,  80 => 46,  78 => 43,  75 => 42,  73 => 39,  70 => 38,  68 => 35,  65 => 34,  63 => 31,  60 => 30,  58 => 27,  55 => 26,  53 => 23,  50 => 22,  48 => 19,  43 => 17,  37 => 14,  34 => 13,  32 => 10,  29 => 9,  27 => 6,  24 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/custom_fields.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\custom_fields.html");
    }
}
