<?php

/* settings/basics.html */
class __TwigTemplate_f3dec1553726e65550e2bdb7e3b7ea838e82bc733181f76bbfb5f6b782bcfa12 extends Twig_Template
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
        echo "<table class=\"form-table\">
  <tbody>
    <tr>
      <th scope=\"row\">
        <label for=\"settings[from_name]\">
          ";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Default sender");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 9
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("These email addresses will be selected by default for each new email.");
        echo "
        </p>
      </th>
      <td>
        <!-- default from name & email -->
        <p>
          <label for=\"settings[from_name]\">";
        // line 15
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("From");
        echo "</label>
          <input type=\"text\"
            id=\"settings[from_name]\"
            name=\"sender[name]\"
            value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sender", array()), "name", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name");
        echo "\" />
          <input type=\"email\"
            id=\"settings[from_email]\"
            name=\"sender[address]\"
            value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sender", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"from@mydomain.com\" />
        </p>
        <!-- default reply_to name & email -->
        <p>
          <label for=\"settings[reply_name]\">";
        // line 29
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reply-to");
        echo "</label>
          <input type=\"text\"
            id=\"settings[reply_name]\"
            name=\"reply_to[name]\"
            value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "reply_to", array()), "name", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 34
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name");
        echo "\" />
          <input type=\"email\"
            id=\"settings[reply_email]\"
            name=\"reply_to[address]\"
            value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "reply_to", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"reply_to@mydomain.com\" />
        </p>
      </td>
    </tr>
    <!-- email addresses receiving notifications -->
    <tr style=\"display:none\">
      <th scope=\"row\">
        <label for=\"settings[notification_email]\">
          ";
        // line 47
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email notifications");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 50
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("These email addresses will receive notifications (separate each address with a comma).");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[notification_email]\"
            name=\"notification[address]\"
            value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "notification", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"notification@mydomain.com\"
            class=\"regular-text\" />
        </p>
        <p>
          <label for=\"settings[notification_on_subscribe]\">
            <input type=\"checkbox\" id=\"settings[notification_on_subscribe]\"
            name=\"notification[on_subscribe]\"
            value=\"1\"
            ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "notification", array()), "on_subscribe", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            ";
        // line 68
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone subscribes");
        echo "
          </label>
        </p>
        <p>
          <label for=\"settings[notification_on_unsubscribe]\">
            <input type=\"checkbox\"
            id=\"settings[notification_on_unsubscribe]\"
            name=\"notification[on_unsubscribe]\"
            value=\"1\"
            ";
        // line 77
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "notification", array()), "on_unsubscribe", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            ";
        // line 78
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone unsubscribes");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- ability to subscribe in comments -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[subscribe_on_comment]\">
          ";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe in comments");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 90
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors that comment on a post can subscribe to your list via a checkbox.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            data-toggle=\"mailpoet_subscribe_on_comment\"
            type=\"checkbox\"
            value=\"1\"
            id=\"settings[subscribe_on_comment]\"
            name=\"subscribe[on_comment][enabled]\"
            ";
        // line 101
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_comment", array()), "enabled", array())) {
            echo "checked=\"checked\"";
        }
        // line 102
        echo "          />
        </p>
        <div id=\"mailpoet_subscribe_on_comment\">
          <p>
            <input
              type=\"text\"
              id=\"settings[subscribe_on_comment_label]\"
              name=\"subscribe[on_comment][label]\"
              class=\"regular-text\"
              ";
        // line 111
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_comment", array()), "label", array())) {
            // line 112
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_comment", array()), "label", array()), "html", null, true);
            echo "\"
              ";
        } else {
            // line 114
            echo "                value=\"";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, add me to your mailing list");
            echo "\"
              ";
        }
        // line 116
        echo "            />
          </p>
          <p>
            <label>";
        // line 119
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Users will be subscribed to these lists:");
        echo "</label>
          </p>
          <p>
            <select
              id=\"mailpoet_subscribe_on_comment_segments\"
              name=\"subscribe[on_comment][segments][]\"
              data-placeholder=\"";
        // line 125
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Choose a list");
        echo "\"
              multiple
            >
              ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 129
            echo "                <option
                  value=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\"
                  ";
            // line 131
            if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_comment", array()), "segments", array()))) {
                // line 132
                echo "                    selected=\"selected\"
                  ";
            }
            // line 134
            echo "                >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "            </select>
          </p>
        </div>
      </td>
    </tr>
    <!-- ability to subscribe when registering -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[subscribe_on_register]\">
          ";
        // line 145
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe in registration form");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Allow users who register as a WordPress user on your website to subscribe to a MailPoet list (in addition to the \"WordPress Users\" list).");
        echo "
        </p>
      </th>
      <td>
        ";
        // line 152
        if (($this->getAttribute(($context["flags"] ?? null), "registration_enabled", array()) == true)) {
            // line 153
            echo "          <p>
            <input
              data-toggle=\"mailpoet_subscribe_in_form\"
              type=\"checkbox\"
              value=\"1\"
              id=\"settings[subscribe_on_register]\"
              name=\"subscribe[on_register][enabled]\"
              ";
            // line 160
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_register", array()), "enabled", array())) {
                // line 161
                echo "                checked=\"checked\"
              ";
            }
            // line 163
            echo "            />
          </p>

          <div id=\"mailpoet_subscribe_in_form\">
            <p>
              <input
                type=\"text\"
                id=\"settings[subscribe_on_register_label]\"
                name=\"subscribe[on_register][label]\"
                class=\"regular-text\"
                ";
            // line 173
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_register", array()), "label", array())) {
                // line 174
                echo "                  value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_register", array()), "label", array()), "html", null, true);
                echo "\"
                ";
            } else {
                // line 176
                echo "                  value=\"";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, add me to your mailing list");
                echo "\"
                ";
            }
            // line 178
            echo "              />
            </p>
            <p>
              <label>";
            // line 181
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Users will be subscribed to these lists:");
            echo "</label>
            </p>
            <p>
              <select
                id=\"mailpoet_subscribe_on_register_segments\"
                name=\"subscribe[on_register][segments][]\"
                data-placeholder=\"";
            // line 187
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Choose a list");
            echo "\"
                multiple
              >
                ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 191
                echo "                  <option
                    value=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
                echo "\"
                    ";
                // line 193
                if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_register", array()), "segments", array()))) {
                    // line 194
                    echo "                      selected=\"selected\"
                    ";
                }
                // line 196
                echo "                  >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
                echo ")</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "              </select>
            </p>
          </div>
        ";
        } else {
            // line 202
            echo "          <p>
            <em>";
            // line 203
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Registration is disabled on this site.");
            echo "</em>
          </p>
        ";
        }
        // line 206
        echo "      </td>
    </tr>
    <!-- edit subscription-->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_manage_page\">
          ";
        // line 212
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage Subscription page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 215
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers click the \"Manage your subscription\" link, they will be directed to this page.");
        echo "
          <br />
          ";
        // line 217
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you want to use a custom Subscription page, simply paste this shortcode on to a WordPress page: [mailpoet_manage_subscription]");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            id=\"subscription_manage_page\"
            name=\"subscription[pages][manage]\"
          >
            ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 228
            echo "              <option
                value=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 230
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "manage", array());
            echo "\"
                ";
            // line 231
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscription", array()), "pages", array()), "manage", array()))) {
                // line 232
                echo "                  selected=\"selected\"
                ";
            }
            // line 234
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 240
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
          >";
        // line 241
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
        <p>
          <label>";
        // line 244
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribers can choose from these lists:");
        echo "</label>
        </p>
        <p>
          <select
            id=\"mailpoet_subscription_edit_segments\"
            name=\"subscription[segments][]\"
            data-placeholder=\"";
        // line 250
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 254
            echo "              <option
                value=\"";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\"
                ";
            // line 256
            if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscription", array()), "segments", array()))) {
                // line 257
                echo "                  selected=\"selected\"
                ";
            }
            // line 259
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- unsubscribe-->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_unsubscribe_page\">
          ";
        // line 269
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribe page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 272
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers click the \"Unsubscribe\" link, they will be directed to this page.");
        echo "
          <br />
          ";
        // line 274
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you want to use a custom Unsubscribe page, simply paste this shortcode on to a WordPress page: [mailpoet_manage text=\"Manage your subscription\"]");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            id=\"subscription_unsubscribe_page\"
            name=\"subscription[pages][unsubscribe]\"
          >
            ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 285
            echo "              <option
                value=\"";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 287
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "unsubscribe", array());
            echo "\"
                ";
            // line 288
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscription", array()), "pages", array()), "unsubscribe", array()))) {
                // line 289
                echo "                  selected=\"selected\"
                ";
            }
            // line 291
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 297
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
          >";
        // line 298
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
      </td>
    </tr>

    <!-- New subscriber emails notifications -->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_unsubscribe_page\">
          ";
        // line 307
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("New subscriber notifications");
        echo " <span id=\"new_subscriber_announcement\" class=\"new_subscriber_announcement\" />
        </label>
        <p class=\"description\">
          ";
        // line 310
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enter the email address that should receive notifications when someone subscribes.");
        echo "
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"subscriber_email_notification[enabled]\"
              value=\"1\"
              ";
        // line 318
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscriber_email_notification", array()), "enabled", array())) {
            // line 319
            echo "                checked
              ";
        }
        // line 321
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"subscriber_email_notification[enabled]\"
              value=\"\"
              ";
        // line 329
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscriber_email_notification", array()), "enabled", array())) {
            // line 330
            echo "                checked
              ";
        }
        // line 332
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
          <br>
          <input type=\"email\"
            id=\"subscriber_email_notification[address]\"
            name=\"subscriber_email_notification[address]\"
            value=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscriber_email_notification", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"me@mydomain.com\" />
          <br>
          <div id=\"settings_subscriber_email_notification_error\" class=\"mailpoet_error_item mailpoet_error\">
            ";
        // line 342
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please fill the email address.");
        echo "
          </div>
    <!-- shortcode: archive page  -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 348
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Archive page shortcode");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 351
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paste this shortcode on a page to display a list of past newsletters.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_shortcode_archives\"
            value=\"[mailpoet_archive]\"
            onClick=\"this.focus();this.select();\"
            readonly=\"readonly\"
          />
        </p>
        <p>
          <select
            id=\"mailpoet_shortcode_archives_list\"
            data-shortcode=\"mailpoet_archive\"
            data-output=\"mailpoet_shortcode_archives\"
            data-placeholder=\"";
        // line 370
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 374
            echo "              <option value=\"";
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
        // line 376
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- shortcode: total number of subscribers -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 384
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Shortcode to display total number of subscribers");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 387
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paste this shortcode on a post or page to display the total number of confirmed subscribers.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_shortcode_subscribers\"
            value=\"[mailpoet_subscribers_count]\"
            onClick=\"this.focus();this.select();\"
            readonly=\"readonly\"
          />
        </p>
        <p>
          <select
            id=\"mailpoet_shortcode_subscribers_count\"
            data-shortcode=\"mailpoet_subscribers_count\"
            data-output=\"mailpoet_shortcode_subscribers\"
            data-placeholder=\"";
        // line 406
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 410
            echo "              <option value=\"";
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
        // line 412
        echo "          </select>
        </p>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    // on dom loaded
    \$(function() {
      // select2 instances
      \$('#mailpoet_subscribe_on_comment_segments').select2();
      \$('#mailpoet_subscribe_on_register_segments').select2();
      \$('#mailpoet_subscription_edit_segments').select2();
      \$('#mailpoet_shortcode_archives_list').select2();
      \$('#mailpoet_shortcode_subscribers_count').select2();
      // fix lengthy placeholder from being cut off by select 2
      \$('.select2-search__field').each(function() {
        \$(this).css('width', (\$(this).attr('placeholder').length * 0.75) + 'em');
      });

      // shortcodes
      \$('#mailpoet_shortcode_archives_list, #mailpoet_shortcode_subscribers_count')
      .on('change', function() {
        var shortcode = \$(this).data('shortcode'),
          values = \$(this).val() || [];

        if (values.length > 0) {
          shortcode += ' segments=\"';
          shortcode += values.join(',');
          shortcode += '\"';
        }

        \$('#' + \$(this).data('output'))
          .val('[' + shortcode + ']');
      });
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "settings/basics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 412,  762 => 410,  758 => 409,  752 => 406,  730 => 387,  724 => 384,  714 => 376,  701 => 374,  697 => 373,  691 => 370,  669 => 351,  663 => 348,  654 => 342,  647 => 338,  637 => 332,  633 => 330,  631 => 329,  619 => 321,  615 => 319,  613 => 318,  602 => 310,  596 => 307,  584 => 298,  580 => 297,  574 => 293,  565 => 291,  561 => 289,  559 => 288,  555 => 287,  551 => 286,  548 => 285,  544 => 284,  531 => 274,  526 => 272,  520 => 269,  510 => 261,  499 => 259,  495 => 257,  493 => 256,  489 => 255,  486 => 254,  482 => 253,  476 => 250,  467 => 244,  461 => 241,  457 => 240,  451 => 236,  442 => 234,  438 => 232,  436 => 231,  432 => 230,  428 => 229,  425 => 228,  421 => 227,  408 => 217,  403 => 215,  397 => 212,  389 => 206,  383 => 203,  380 => 202,  374 => 198,  363 => 196,  359 => 194,  357 => 193,  353 => 192,  350 => 191,  346 => 190,  340 => 187,  331 => 181,  326 => 178,  320 => 176,  314 => 174,  312 => 173,  300 => 163,  296 => 161,  294 => 160,  285 => 153,  283 => 152,  276 => 148,  270 => 145,  259 => 136,  248 => 134,  244 => 132,  242 => 131,  238 => 130,  235 => 129,  231 => 128,  225 => 125,  216 => 119,  211 => 116,  205 => 114,  199 => 112,  197 => 111,  186 => 102,  182 => 101,  168 => 90,  162 => 87,  150 => 78,  144 => 77,  132 => 68,  126 => 67,  114 => 58,  103 => 50,  97 => 47,  85 => 38,  78 => 34,  74 => 33,  67 => 29,  59 => 24,  52 => 20,  48 => 19,  41 => 15,  32 => 9,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/basics.html", "F:\\phpStudy\\WWW\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\basics.html");
    }
}
