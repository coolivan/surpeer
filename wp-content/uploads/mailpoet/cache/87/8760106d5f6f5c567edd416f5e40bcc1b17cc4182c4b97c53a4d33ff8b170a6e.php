<?php

/* form/editor.html */
class __TwigTemplate_a8ea7a8c2a53efde8327590b65a19d5f86d407af1949e03ed726474d8fae7607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "form/editor.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'templates' => array($this, 'block_templates'),
            'translations' => array($this, 'block_translations'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"title\">
  ";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Form");
        echo "
  <a class=\"page-title-action\" href=\"?page=mailpoet-forms#/\" data-automation-id=\"mailpoet_form_go_back\">";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Back");
        echo "</a>
</h1>
  <h2>
    <input
      type=\"text\"
      placeholder=\"";
        // line 11
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Click here to change the name");
        echo "\"
      id=\"mailpoet_form_name\"
      data-automation-id=\"mailpoet_form_name_input\"
      value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "name", array()), "html", null, true);
        echo "\"
    />
  </h2>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "  <div id=\"mailpoet_form_wrapper\" class=\"clearfix\">
    <!-- Form Editor Container -->
    <div id=\"mailpoet_form_container\">
      <!-- Form Editor -->
      <div id=\"mailpoet_form_editor\">
          <div id=\"mailpoet_form_body\"></div>
          <p id=\"block_placeholder\" class=\"block_placeholder\"></p>
      </div>

      <p class=\"submit\">
        <a
          id=\"mailpoet_form_save\"
          href=\"javascript:;\"
          class=\"button button-primary\"
          data-automation-id=\"save_form\"
        >";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save");
        echo "</a>
      </p>
    </div>

    <!-- Form Editor: Toolbar -->
    <div id=\"mailpoet_form_toolbar\" style=\"visibility:hidden;\">
      <div class=\"mailpoet_toolbar_section closed\" data-section=\"settings\">
        <a href=\"javascript:;\" class=\"mailpoet_toggle\"><br /></a>
        <h3>";
        // line 43
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Settings");
        echo "</h3>

        <div>
          <!-- Form settings -->
          <form id=\"mailpoet_form_settings\" action=\"\" method=\"POST\">
            <input
              type=\"hidden\"
              id=\"mailpoet_form_id\"
              value=\"";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["form"] ?? null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\"
            />
            <div id=\"mailpoet_settings_segment_selection\">
              <!-- Form settings: list selection -->
              <p>
                <strong>";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This form adds the subscribers to these lists:");
        echo "</strong>
              </p>
              <select
                id=\"mailpoet_form_segments\"
                name=\"segments\"
                data-placeholder=\"";
        // line 61
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please select a list");
        echo "\"
                multiple
                data-parsley-required-message=\"";
        // line 63
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please select a list.");
        echo "\"
                required
              >
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 67
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "              </select>
            </div>

            <div id=\"mailpoet_on_success\">
              <!-- Form settings: after submit -->
              <p>
                <label><strong>";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("After submit...");
        echo "</strong></label>
                <label>
                  <input class=\"mailpoet_radio\"
                    type=\"radio\"
                    name=\"on_success\"
                    value=\"message\"
                    ";
        // line 81
        if ((twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "settings", array()), "on_success", array())) || ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "settings", array()), "on_success", array()) == "message"))) {
            // line 82
            echo "                      checked=\"checked\"
                    ";
        }
        // line 84
        echo "                  />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show message");
        echo "
                </label>
                &nbsp;
                <label>
                  <input class=\"mailpoet_radio\"
                    type=\"radio\"
                    name=\"on_success\"
                    value=\"page\"
                    ";
        // line 92
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "settings", array()), "on_success", array()) == "page")) {
            // line 93
            echo "                      checked=\"checked\"
                    ";
        }
        // line 95
        echo "                  />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Go to Page");
        echo "
                </label>
              </p>
              <!-- default success message -->
              ";
        // line 99
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "settings", array()), "success_message", array())) {
            // line 100
            echo "                ";
            $context["success_message"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "settings", array()), "success_message", array());
            // line 101
            echo "              ";
        } else {
            // line 102
            echo "                ";
            $context["success_message"] = $this->env->getExtension('MailPoet\Twig\I18n')->translate("Check your inbox to confirm your subscription.");
            // line 103
            echo "              ";
        }
        // line 104
        echo "
              <p
                id=\"mailpoet_on_success_message\"
                class=\"mailpoet_on_success_option\"
              >
                <textarea name=\"success_message\">";
        // line 109
        echo twig_escape_filter($this->env, ($context["success_message"] ?? null), "html", null, true);
        echo "</textarea>
              </p>
              <p
                id=\"mailpoet_on_success_page\"
                class=\"mailpoet_on_success_option\"
              >
                <select name=\"success_page\">
                  ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 117
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"";
            // line 118
            if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "settings", array()), "success_page", array()) == $this->getAttribute($context["page"], "id", array()))) {
                // line 119
                echo " selected=\"selected\"";
            }
            // line 120
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                </select>
              </p>
            </div>
          </form>
        </div>
      </div>

      <!-- Toolbar: Shortcodes / Export -->
      <div class=\"mailpoet_toolbar_section closed\" data-section=\"shortcodes\">
        <a href=\"javascript:;\" class=\"mailpoet_toggle\"><br /></a>
        <h3>";
        // line 132
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Form Placement");
        echo "</h3>

        <div>
          <!-- Form export links -->
          <p>
            ";
        // line 137
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Add this form to your sidebar or footer on the [link]Widgets page[/link]."), "widgets.php", array("target" => "_blank"));
        // line 140
        echo "
          </p>
          <p>
            ";
        // line 143
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Copy and paste this [link]shortcode[/link] on to a post or page."), "javascript:;", array("class" => "mailpoet_form_export_toggle", "data-type" => "shortcode"));
        // line 146
        echo "
          </p>
          <p>
            ";
        // line 149
        echo sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("%sPHP%s and %siFrame%s versions are also available."), "<a href=\"javascript:;\" class=\"mailpoet_form_export_toggle\" data-type=\"php\">", "</a>", "<a href=\"javascript:;\" class=\"mailpoet_form_export_toggle\" data-type=\"iframe\">", "</a>");
        // line 157
        echo "
         </p>

          <!-- Form export -->
          <div id=\"mailpoet_form_export\"></div>
        </div>
      </div>

        <!-- Toolbar: Fields -->
      <div class=\"mailpoet_toolbar_section closed\" data-section=\"fields\">
        <a href=\"javascript:;\" class=\"mailpoet_toggle\"><br /></a>
        <h3>";
        // line 168
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Fields");
        echo "</h3>

        <div>
          <ul id=\"mailpoet_toolbar_fields\">
          </ul>
          <p class=\"mailpoet_align_center\">
            <a id=\"mailpoet_form_add_field\" class=\"button button-primary\" href=\"javascript:;\" style=\"width:100%;\">";
        // line 174
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add New Field");
        echo "</a>
          </p>
        </div>

      </div>

      <!-- Toolbar: Styles -->
      <div class=\"mailpoet_toolbar_section closed\" data-section=\"styles\">
        <a href=\"javascript:;\" class=\"mailpoet_toggle\"><br /></a>
        <h3>";
        // line 183
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Styles");
        echo "</h3>
        <div>
          <textarea id=\"mailpoet_form_styles\">";
        // line 185
        echo twig_escape_filter($this->env, ($context["styles"] ?? null), "html", null, true);
        echo "</textarea>
        <br />
        <p class=\"mailpoet_align_center\">
          <a
            id=\"mailpoet_form_preview\"
            href=\"javascript:;\"
            class=\"button button-primary\"
            style=\"width:100%;\"
          >";
        // line 193
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
      </div>
        </div>

      <p class=\"help\">
        ";
        // line 199
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Tip:</strong> read our [link]GDPR guide[/link] to make sure your form follows the privacy directive of the European Union."), "https://beta.docs.mailpoet.com/article/246-guide-to-conform-to-gdpr?utm_source=plugin&utm_medium=formeditor&utm_campaign=helpdocs", array("target" => "_blank", "id" => "mailpoet_helper_link"));
        // line 202
        echo "
      </p>

    <!-- End | Form Editor: Toolbar -->
    </div>

    <!-- Form Editor: History -->
    <div id=\"mailpoet_form_history\"></div>
  </div>

  ";
        // line 212
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("vendor.js", "lib/prototype.min.js", "lib/scriptaculous.min.js", "form_editor.js");
        // line 217
        echo "

  <script type=\"text/javascript\">
    var mailpoet_segments = ";
        // line 220
        echo json_encode(($context["segments"] ?? null));
        echo ";

    var mailpoet_default_fields = [
      {
        id: 'divider',
        name: \"";
        // line 225
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Divider");
        echo "\",
        type: 'divider',
        multiple: true,
        readonly: true
      },
      {
        id: \"first_name\",
        name: \"";
        // line 232
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("First name");
        echo "\",
        type: 'text',
        params: {
          label: \"";
        // line 235
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("First name");
        echo "\"
        },
        readonly: true
      },
      {
        id: \"last_name\",
        name: \"";
        // line 241
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Last name");
        echo "\",
        type: 'text',
        params: {
          label: \"";
        // line 244
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Last name");
        echo "\"
        },
        readonly: true
      },
      {
        id: \"segments\",
        name: \"";
        // line 250
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("List selection");
        echo "\",
        type: 'segment',
        params: {
          label: \"";
        // line 253
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select list(s):");
        echo "\"
        },
        readonly: true
      },
      {
        id: 'html',
        name: \"";
        // line 259
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom text or HTML");
        echo "\",
        type: 'html',
        params: {
            text: \"";
        // line 262
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe to our newsletter and join [mailpoet_subscribers_count] other subscribers.");
        echo "\"
        },
        multiple: true,
        readonly: true
      }
    ];

    jQuery(function(\$) {
      function mailpoet_form_toggle_segments() {
        // hide list selection if a list widget has been dragged into the editor
        \$('mailpoet_settings_segment_selection')[
          (WysijaForm.hasSegmentSelection())
          ? 'hide' : 'show'
        ]();
      }

      function mailpoet_form_fields() {
        // form editor: default fields
        var template = Handlebars.compile(\$('#form_template_fields').html());

        return MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'customFields',
          action: 'getAll',
        }).done(function(response) {
          // render toolbar
          jQuery('#mailpoet_toolbar_fields').html(template({
            fields: \$.merge(
              \$.merge([], mailpoet_default_fields),
              response.data
            )
          }));

          setTimeout(function() {
            WysijaForm.init();
          }, 1);
        });
      }
      window.mailpoet_form_fields = mailpoet_form_fields;

      // enable code mirror editor on styles textarea
      MailPoet.CodeEditor = CodeMirror.fromTextArea(
        document.getElementById('mailpoet_form_styles'),
        {
          lineNumbers: true,
          tabMode: \"indent\",
          matchBrackets: true,
          theme: 'neo',
          mode: 'css'
        }
      );

      // toolbar sections
      \$(document).on(
        'click',
        '.mailpoet_toolbar_section.closed',
        mailpoet_toolbar_tab
      );

      function mailpoet_toolbar_tab(tab, callback) {
        var section = null;

        if(\$.type(tab) === 'string') {
          section = \$('.mailpoet_toolbar_section[data-section=\"'+tab+'\"]');
        } else {
          section = \$(this);
        }

        var current_section = \$('.mailpoet_toolbar_section:not(.closed)');

        if(current_section.data('section') === section.data('section')) {
          if(callback !== undefined && \$.type(callback) === 'function') {
            callback();
          }
        } else {
          // close currently opened section
          \$('.mailpoet_toolbar_section:not(.closed)').addClass('closed');

          // open selected section after a mini delay
          setTimeout(function() {
            \$(section).removeClass('closed');
            if(callback !== undefined && \$.type(callback) === 'function') {
              setTimeout(function() {
                callback();
              }, 151);
            }
          }.bind(this), 150);
        }
        return false;
      }

      // toolbar: open default section
      mailpoet_toolbar_tab('settings');

      // form: edit name (in place editor)
      \$('#mailpoet_form_edit_name').on('click', function() {
        mailpoet_edit_form_name();
        return false;
      });

      \$('#mailpoet_form_name_input').on('keypress', function(e) {
        if(e.which === 13) {
          mailpoet_edit_form_name();
          return false;
        }
      });

      function mailpoet_edit_form_name() {
        var is_editing = \$('#mailpoet_form_name')
          .data('mailpoet_editing') || false;

        if(!is_editing) {
          // set input value and show
          \$('#mailpoet_form_name_input')
            .val(\$('#mailpoet_form_name').text())
            .show();

          // set editing mode
          \$('#mailpoet_form_name').data('mailpoet_editing', true);

          // hide form name
          \$('#mailpoet_form_name').hide();

          // focus on text input
          \$('#mailpoet_form_name_input').focus();

          // set edit name label
          \$('#mailpoet_form_edit_name').html(\"";
        // line 389
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save");
        echo "\");
        } else {
          var current_value = \$('#mailpoet_form_name').html(),
            new_value = \$('#mailpoet_form_name_input').val();

          // hide text input
          \$('#mailpoet_form_name_input').hide();

          // set value
          \$('#mailpoet_form_name').text(new_value);

          // set editing mode
          \$('#mailpoet_form_name').data('mailpoet_editing', false);

          // show form name
          \$('#mailpoet_form_name').show();

          // set edit name label
          \$('#mailpoet_form_edit_name').text(\"";
        // line 407
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit name");
        echo "\");

          // save change if necessary
          if(new_value !== '' && current_value !== new_value) {
            MailPoet.Ajax.post({
              api_version: window.mailpoet_api_version,
              endpoint: 'forms',
              action: 'save',
              data:  {
                id: \$('#mailpoet_form_id').val(),
                name: new_value
              }
            }).done(function(response) {
              MailPoet.Notice.success(
                \"";
        // line 421
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The form name was successfully updated!"), "js"), "html", null, true);
        echo "\"
              );
            }).fail(function(response) {
              if (response.errors.length > 0) {
                MailPoet.Notice.error(
                  response.errors.map(function(error) { return error.message; }),
                  { scroll: true }
                );
              }
            });
          }
        }
      }

      // on dom loaded
      \$(function() {
        // load form
        WysijaForm.load(";
        // line 438
        echo json_encode(($context["form"] ?? null));
        echo ");

        // save form
        \$('#mailpoet_form_save').on('click', function() {
          mailpoet_form_save();
          mailpoet_form_export();
          return false;
        });

        // edit name
        \$('#mailpoet_form_name').on('keyup', function(e) {
          if(e.which === 13) {
            \$('#mailpoet_form_save').trigger('click');
            this.blur();
          }
        });

        // preview form
        \$(document).on('click', '#mailpoet_form_preview', function() {
          mailpoet_form_preview();
          return false;
        });

        function mailpoet_form_preview() {
          MailPoet.Ajax.post({
            api_version: window.mailpoet_api_version,
            endpoint: 'forms',
            action: 'previewEditor',
            data: WysijaForm.save()
          }).done(function(response) {
            MailPoet.Modal.popup({
              title: \"";
        // line 469
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Form preview");
        echo "\",
              template: \$('#mailpoet_form_preview_template').html(),
              data: response.data
            });
          }).fail(function(response) {
            if (response.errors.length > 0) {
              MailPoet.Notice.error(
                response.errors.map(function(error) { return error.message; }),
                { scroll: true }
              );
            }
          });
        }

        function mailpoet_form_save(callback) {
          var form = WysijaForm.save();
          form.id = \$('#mailpoet_form_id').val();

          // reset error messages
          \$('#mailpoet_form_settings').parsley().reset();

          // validate segments to subscribe to
          if(WysijaForm.hasSegmentSelection()) {
            // validate segment selection in form
            if(WysijaForm.isSegmentSelectionValid() === false) {
              return false;
            }
          }

          // check if the form is valid
          if(\$('#mailpoet_form_settings').parsley().isValid() === false) {
            // refresh settings and trigger validation
            mailpoet_toolbar_tab('settings', function() {
              \$('#mailpoet_form_settings').parsley().validate();
            });
          } else {
            // save form
            MailPoet.Ajax.post({
              api_version: window.mailpoet_api_version,
              endpoint: 'forms',
              action: 'saveEditor',
              data: form
            }).done(function(response) {
              if(callback !== false) {
                var message = null;

                if(response.meta.is_widget === true) {
                  message = \"";
        // line 516
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Saved! The changes are now active in your widget."), "js"), "html", null, true);
        echo "\";
                } else {
                  message = \"";
        // line 518
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("Saved! Add this form to %1\$sa widget%2\$s."), "<a href='widgets.php' target='_blank'>", "</a>"), "js"), "html", null, true);
        echo "\";
                }

                if(message !== null) {
                  MailPoet.Notice.hide();
                  MailPoet.Notice.success(message, {
                    scroll: true,
                    static: (response.meta.is_widget === false)
                  });
                }

                MailPoet.trackEvent('Forms > Add New', {
                  'MailPoet Free version': window.mailpoet_version
                });

                // if there is a callback, call it!
                if(callback !== undefined) {
                  callback();
                }
              }
            }).fail(function(response) {
              if (response.errors.length > 0) {
                MailPoet.Notice.error(
                  response.errors.map(function(error) { return error.message; }),
                  { scroll: true }
                );
              }
            });
          }
        }
        window.mailpoet_form_save = mailpoet_form_save;

        // toolbar: on success toggle
        \$(document).on('change', 'input[name=\"on_success\"]', toggleOnSuccessOptions);
        toggleOnSuccessOptions();

        function toggleOnSuccessOptions() {
          // hide all options
          \$('.mailpoet_on_success_option').hide();

          // display selected option
          var value = \$('input[name=\"on_success\"]:checked').val();
          \$('#mailpoet_on_success_'+value).show();
        }

        function mailpoet_form_export() {
          var template = Handlebars.compile(\$('#form_template_exports').html());
          MailPoet.Ajax.post({
            api_version: window.mailpoet_api_version,
            endpoint: 'forms',
            action: 'exportsEditor',
            data: {
              id: \$('#mailpoet_form_id').val()
            }
          }).done(function(response) {
            \$('#mailpoet_form_export').html(template({ exports: response.data }));
          }).fail(function(response) {
            if (response.errors.length > 0) {
              MailPoet.Notice.error(
                response.errors.map(function(error) { return error.message; }),
                { scroll: true }
              );
            }
          });
        }
        mailpoet_form_export();

        \$(document).on('click', '.mailpoet_form_export_toggle', function() {
          var type = \$(this).data('type');
          \$('.mailpoet_form_export_output').hide();
          \$('#mailpoet_form_export_' + type).show();
          MailPoet.trackEvent('Forms > Embed', {
            'Embed type': type,
            'MailPoet Free version': window.mailpoet_version
          });
          return false;
        });

        // add new field
        \$(document).on('click', '#mailpoet_form_add_field', function() {
          // open popup
          MailPoet.Modal.popup({
            title: \"";
        // line 600
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add new field");
        echo "\",
            template: \$('#form_template_field_form').html()
          });

          return false;
        });

        // edit field
        \$(document).on('click', '.mailpoet_form_field_edit', function() {
          var id = \$(this).data('id');

          MailPoet.Ajax.post({
            api_version: window.mailpoet_api_version,
            endpoint: 'customFields',
            action: 'get',
            data: {
              id: id
            }
          }).done(function(response) {
            MailPoet.Modal.popup({
              title: \"";
        // line 620
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit field");
        echo "\",
              template: \$('#form_template_field_form').html(),
              data: response.data
            });
          }).fail(function(response) {
            if (response.errors.length > 0) {
              MailPoet.Notice.error(
                response.errors.map(function(error) { return error.message; }),
                { scroll: true }
              );
            }
          });
        });

        // delete field
        \$(document).on('click', '.mailpoet_form_field_delete', function() {
          var id = \$(this).data('id');
          var item = \$(this).parent();
          var name = \$(this).siblings('.mailpoet_form_field').attr('wysija_name');
          var type = \$(this).siblings('.mailpoet_form_field').attr('wysija_type');

          if(window.confirm(
            \"";
        // line 642
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This field will be deleted for all your subscribers. Are you sure?");
        echo "\"
          )) {
            MailPoet.Ajax.post({
              api_version: window.mailpoet_api_version,
              endpoint: 'customFields',
              action: 'delete',
              data: {
                id: id
              }
            }).done(function(response) {
              item.remove();

              WysijaForm.removeBlock(id, function() {
                mailpoet_form_save(false);
              });

              mailpoet_form_fields();
              MailPoet.Notice.success(
                \"";
        // line 660
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Removed custom field %\$1s"), "js"), "html", null, true);
        echo "\".replace('%\$1s', '\"' + name + '\"')
              );

              MailPoet.trackEvent('Forms > Delete custom field', {
                'Field type': type,
                'MailPoet Free version': window.mailpoet_version
              });

            });
          }
        });

        // undo button
        \$(document).on('click', '#mailpoet_form_undo', function() {
          // pop last element off the history
          WysijaHistory.dequeue();

          return false;
        });

        // get form fields
        mailpoet_form_fields();

        // toolbar: segment selection
        var selected_segments = ";
        // line 684
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "settings", array()), "segments", array()));
        echo ";

        //  enable select2 for segment selection
        var select2 = \$('#mailpoet_form_segments').select2({
          width:'100%',
          templateResult: function(item) {
            if(item.element && item.element.selected) {
              return null;
            } else {
              return item.text;
            }
          }
        });

        var hasRemoved = false;
        select2.on('select2:unselecting', function(e) {
          hasRemoved = true;
        });
        select2.on('select2:opening', function(e) {
          if(hasRemoved === true) {
            hasRemoved = false;
            e.preventDefault();
          }
        });

        // set selected values
        \$('#mailpoet_form_segments')
          .val(";
        // line 711
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "settings", array()), "segments", array()));
        echo ")
          .trigger('change');
      });
    });
  </script>
";
    }

    // line 718
    public function block_templates($context, array $blocks = array())
    {
        // line 719
        echo "  <!-- toolbar templates -->
  ";
        // line 720
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_fields", "form/templates/toolbar/fields.hbs");
        echo "
  ";
        // line 721
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_exports", "form/templates/toolbar/exports.hbs");
        echo "

  <!-- block templates -->
  ";
        // line 724
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_block", "form/templates/blocks/container.hbs");
        echo "
  ";
        // line 725
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_divider", "form/templates/blocks/divider.hbs");
        echo "
  ";
        // line 726
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_text", "form/templates/blocks/text.hbs");
        echo "
  ";
        // line 727
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_submit", "form/templates/blocks/submit.hbs");
        echo "
  ";
        // line 728
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_segment", "form/templates/blocks/segment.hbs");
        echo "
  ";
        // line 729
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_radio", "form/templates/blocks/radio.hbs");
        echo "
  ";
        // line 730
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_select", "form/templates/blocks/select.hbs");
        echo "
  ";
        // line 731
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_checkbox", "form/templates/blocks/checkbox.hbs");
        echo "
  ";
        // line 732
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_textarea", "form/templates/blocks/textarea.hbs");
        echo "
  ";
        // line 733
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "form_template_html", "form/templates/blocks/html.hbs");
        echo "

  <!-- custom field settings and templates -->
  ";
        // line 736
        $this->loadTemplate("form/custom_fields.html", "form/editor.html", 736)->display($context);
        // line 737
        echo "
  <!-- form preview -->
  ";
        // line 739
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "mailpoet_form_preview_template", "form/templates/preview.hbs");
        // line 741
        echo "
";
    }

    // line 744
    public function block_translations($context, array $blocks = array())
    {
        // line 745
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("editFieldSettings" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit field settings")));
        // line 747
        echo "
";
    }

    public function getTemplateName()
    {
        return "form/editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1011 => 747,  1008 => 745,  1005 => 744,  1000 => 741,  998 => 739,  994 => 737,  992 => 736,  986 => 733,  982 => 732,  978 => 731,  974 => 730,  970 => 729,  966 => 728,  962 => 727,  958 => 726,  954 => 725,  950 => 724,  944 => 721,  940 => 720,  937 => 719,  934 => 718,  924 => 711,  894 => 684,  867 => 660,  846 => 642,  821 => 620,  798 => 600,  713 => 518,  708 => 516,  658 => 469,  624 => 438,  604 => 421,  587 => 407,  566 => 389,  436 => 262,  430 => 259,  421 => 253,  415 => 250,  406 => 244,  400 => 241,  391 => 235,  385 => 232,  375 => 225,  367 => 220,  362 => 217,  360 => 212,  348 => 202,  346 => 199,  337 => 193,  326 => 185,  321 => 183,  309 => 174,  300 => 168,  287 => 157,  285 => 149,  280 => 146,  278 => 143,  273 => 140,  271 => 137,  263 => 132,  251 => 122,  242 => 120,  239 => 119,  237 => 118,  233 => 117,  229 => 116,  219 => 109,  212 => 104,  209 => 103,  206 => 102,  203 => 101,  200 => 100,  198 => 99,  190 => 95,  186 => 93,  184 => 92,  172 => 84,  168 => 82,  166 => 81,  157 => 75,  149 => 69,  136 => 67,  132 => 66,  126 => 63,  121 => 61,  113 => 56,  105 => 51,  94 => 43,  83 => 35,  66 => 20,  63 => 19,  55 => 14,  49 => 11,  41 => 6,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/editor.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\form\\editor.html");
    }
}
