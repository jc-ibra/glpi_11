<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pages/setup/notification/mailing_setting.html.twig */
class __TwigTemplate_4b7c142230a66a98adfe014ca21dc88d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        if (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("notifications_mailing") == 1)) {
            // line 36
            yield "    ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 37
            yield "    ";
            $context["field_options"] = ["field_class" => "col-12 col-xxl-6 col-sm-6", "rand" =>             // line 39
($context["rand"] ?? null)];
            // line 41
            yield "
    <form action=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("NotificationMailingSetting"), "html", null, true);
            yield "\" method=\"post\">
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
        <input type=\"hidden\" name=\"id\" value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["config_id"] ?? null), "html", null, true);
            yield "\" />

        <div class=\"row\">
            ";
            // line 47
            yield $macros["fields"]->getTemplateForMacro("macro_emailField", $context, 47, $this->getSourceContext())->macro_emailField(...["admin_email", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("admin_email"), __("Administrator email address"),             // line 51
($context["field_options"] ?? null)]);
            // line 52
            yield "

            ";
            // line 54
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 54, $this->getSourceContext())->macro_textField(...["admin_email_name", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("admin_email_name"), __("Administrator name"),             // line 58
($context["field_options"] ?? null)]);
            // line 59
            yield "

            ";
            // line 61
            yield $macros["fields"]->getTemplateForMacro("macro_emailField", $context, 61, $this->getSourceContext())->macro_emailField(...["from_email", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("from_email"), __("Email sender address"), Twig\Extension\CoreExtension::merge(            // line 65
($context["field_options"] ?? null), ["helper" => ((__("Address to use in from for sent emails.") . "
") . __("If not set, main or entity administrator email address will be used."))])]);
            // line 68
            yield "

            ";
            // line 70
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 70, $this->getSourceContext())->macro_textField(...["from_email_name", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("from_email_name"), __("Email sender name"), Twig\Extension\CoreExtension::merge(            // line 74
($context["field_options"] ?? null), ["helper" => ((__("Name to use in from for sent emails.") . "
") . __("If not set, main or entity administrator email name will be used."))])]);
            // line 77
            yield "

            ";
            // line 79
            yield $macros["fields"]->getTemplateForMacro("macro_emailField", $context, 79, $this->getSourceContext())->macro_emailField(...["replyto_email", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("replyto_email"), __("Reply-To address"), Twig\Extension\CoreExtension::merge(            // line 83
($context["field_options"] ?? null), ["helper" => ((__("Optionnal reply to address.") . "
") . __("If not set, main or entity administrator email address will be used."))])]);
            // line 86
            yield "

            ";
            // line 88
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 88, $this->getSourceContext())->macro_textField(...["replyto_email_name", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("replyto_email_name"), __("Reply-To name"), Twig\Extension\CoreExtension::merge(            // line 92
($context["field_options"] ?? null), ["helper" => ((__("Optionnal reply to name.") . "
") . __("If not set, main or entity administrator name will be used."))])]);
            // line 95
            yield "

            ";
            // line 97
            yield $macros["fields"]->getTemplateForMacro("macro_emailField", $context, 97, $this->getSourceContext())->macro_emailField(...["noreply_email", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("noreply_email"), __("No-Reply address"), Twig\Extension\CoreExtension::merge(            // line 101
($context["field_options"] ?? null), ["helper" => ((__("Optionnal No-Reply address.") . "
") . __("If set, it will be used for notifications that doesnʼt expect a reply."))])]);
            // line 104
            yield "

            ";
            // line 106
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 106, $this->getSourceContext())->macro_textField(...["noreply_email_name", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("noreply_email_name"), __("No-Reply name"), Twig\Extension\CoreExtension::merge(            // line 110
($context["field_options"] ?? null), ["helper" => ((__("Optionnal No-Reply name.") . "
") . __("If not set, main or entity administrator name will be used."))])]);
            // line 113
            yield "

            ";
            // line 115
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 115, $this->getSourceContext())->macro_dropdownArrayField(...["attach_ticket_documents_to_mail", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("attach_ticket_documents_to_mail"),             // line 118
($context["attach_documents_values"] ?? null), __("Add documents into ticket notifications"),             // line 120
($context["field_options"] ?? null)]);
            // line 121
            yield "

            ";
            // line 123
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 123, $this->getSourceContext())->macro_dropdownYesNo(...["attach_ticket_documents_to_mail", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("attach_ticket_documents_to_mail"), __("Add documents into ticket notifications"),             // line 127
($context["field_options"] ?? null)]);
            // line 128
            yield "

            ";
            // line 130
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 130, $this->getSourceContext())->macro_nullField(...[]);
            yield "

            ";
            // line 132
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 132, $this->getSourceContext())->macro_textareaField(...["mailing_signature", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("mailing_signature"), __("Email signature"),             // line 136
($context["field_options"] ?? null)]);
            // line 137
            yield "

            ";
            // line 139
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 139, $this->getSourceContext())->macro_nullField(...[]);
            yield "

            ";
            // line 141
            $context["extra_options"] = [];
            // line 142
            yield "            ";
            if ((($tmp =  !($context["is_mail_function_available"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 143
                yield "                ";
                $context["extra_options"] = ["helper" => ((__("The PHP mail function is unknown or is not activated on your system.") . "
") . __("The use of a SMTP is needed."))];
                // line 146
                yield "            ";
            }
            // line 147
            yield "            ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 147, $this->getSourceContext())->macro_dropdownArrayField(...["smtp_mode", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_mode"),             // line 150
($context["mail_methods"] ?? null), __("Way of sending emails"), Twig\Extension\CoreExtension::merge(            // line 152
($context["field_options"] ?? null), ($context["extra_options"] ?? null))]);
            // line 153
            yield "
            <script type=\"text/javascript\">
                \$(function() {
                    \$('[name=smtp_mode]').on('change', function() {
                        const value = \$(this).find('option:selected').val();
                        const is_mail  = value === '";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("MAIL_MAIL"), "html", null, true);
            yield "';
                        const is_oauth = value === '";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("MAIL_SMTPOAUTH"), "html", null, true);
            yield "';

                        \$('#smtp_config').toggle(!is_mail);

                        // show/hide elements not related to Oauth
                        \$('#dropdown_smtp_check_certificate";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').closest('.form-field').toggle(!is_oauth);
                        \$('#smtp_passwd_";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').closest('.form-field').toggle(!is_oauth);
                        \$('#smtp_username_";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').closest('.form-field').toggle(!is_oauth);

                        // show/hide elements related to Oauth
                        \$('#oauth_redirect_alert_";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').toggleClass('d-none', !is_oauth);
                        \$('#_smtp_oauth_callback_url_";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').closest('.form-field').toggle(is_oauth);
                        \$('#dropdown_smtp_oauth_provider";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').closest('.form-field').toggle(is_oauth);
                        \$('#smtp_oauth_client_id_";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').closest('.form-field').toggle(is_oauth);
                        \$('#smtp_oauth_client_secret_";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').closest('.form-field').toggle(is_oauth);
                        \$('#_force_redirect_to_smtp_oauth_";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').closest('.form-field').toggle(is_oauth);
                        \$('[name=smtp_oauth_provider]').trigger('change'); // refresh additional params using dedicated method
                    });
                    \$('[name=smtp_mode]').trigger('change');
                });
            </script>

            ";
            // line 181
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 181, $this->getSourceContext())->macro_nullField(...[]);
            yield "

            ";
            // line 183
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 183, $this->getSourceContext())->macro_numberField(...["smtp_max_retries", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_max_retries"), __("Max. delivery retries"),             // line 187
($context["field_options"] ?? null)]);
            // line 188
            yield "

            ";
            // line 190
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 190, $this->getSourceContext())->macro_numberField(...["smtp_retry_time", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_retry_time"), __("Try to deliver again in (minutes)"), Twig\Extension\CoreExtension::merge(            // line 194
($context["field_options"] ?? null), ["min" => 0, "max" => 60, "step" => 1])]);
            // line 199
            yield "
        </div>

        <div class=\"row\" id=\"smtp_config\">
            <div class=\"hr-text\">
                <i class=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("AuthMail"), "html", null, true);
            yield "\"></i>
                <span>";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AuthMail"), "html", null, true);
            yield "</span>
            </div>

            <div id=\"oauth_redirect_alert_";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"d-flex alert alert-info mx-2\">
                <i class=\"ti ti-info-circle fs-2x alert-icon\"></i>
                ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Once the form has been validated, you will be redirected to your supplierʼs authentication page if necessary."), "html", null, true);
            yield "
            </div>

            ";
            // line 213
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 213, $this->getSourceContext())->macro_dropdownArrayField(...["smtp_oauth_provider", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_oauth_provider"),             // line 216
($context["providers_values"] ?? null), __("Oauth provider"), Twig\Extension\CoreExtension::merge(            // line 218
($context["field_options"] ?? null), ["display_emptychoice" => true])]);
            // line 219
            yield "

            ";
            // line 221
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 221, $this->getSourceContext())->macro_textField(...["_smtp_oauth_callback_url", ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("url_base") . "/front/smtp_oauth2_callback.php"), _x("oauth", "Callback URL"), Twig\Extension\CoreExtension::merge(            // line 225
($context["field_options"] ?? null), ["helper" => _x("oauth", "This is the callback URL that you will have to declare in your provider application."), "is_copyable" => true, "readonly" => true])]);
            // line 230
            yield "

            ";
            // line 232
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 232, $this->getSourceContext())->macro_textField(...["smtp_oauth_client_id", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_oauth_client_id"), _x("oauth", "Client ID"),             // line 236
($context["field_options"] ?? null)]);
            // line 237
            yield "

            ";
            // line 239
            yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 239, $this->getSourceContext())->macro_passwordField(...["smtp_oauth_client_secret", "", _x("oauth", "Client secret"), Twig\Extension\CoreExtension::merge(            // line 243
($context["field_options"] ?? null), ["clearable" => false, "additional_attributes" => ["autocomplete" => "new-password"]])]);
            // line 249
            yield "

            ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["supported_providers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["provider_class"]) {
                // line 252
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(($context["provider_class"] . "::getAdditionalParameters")));
                foreach ($context['_seq'] as $context["_key"] => $context["param_specs"]) {
                    // line 253
                    yield "                    ";
                    $context["extra_options"] = ["additional_attributes" => ["data-oauth_additional_parameter" => "true", "data-oauth_provider" =>                     // line 256
$context["provider_class"]]];
                    // line 259
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["param_specs"], "helper", [], "any", true, true, false, 259)) {
                        // line 260
                        yield "                        ";
                        $context["extra_options"] = Twig\Extension\CoreExtension::merge(($context["extra_options"] ?? null), ["helper" => (($_v0 =                         // line 261
$context["param_specs"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["helper"] ?? null) : null)]);
                        // line 263
                        yield "                    ";
                    }
                    // line 264
                    yield "
                    ";
                    // line 265
                    yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 265, $this->getSourceContext())->macro_textField(...[(("smtp_oauth_options[" . (($_v1 =                     // line 266
$context["param_specs"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["key"] ?? null) : null)) . "]"), ((($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_oauth_provider") ==                     // line 267
$context["provider_class"])) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["provider_options"] ?? null), (($_v2 = $context["param_specs"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["key"] ?? null) : null), [], "array", true, true, false, 267) &&  !(null === (($_v3 = ($context["provider_options"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[(($_v4 = $context["param_specs"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["key"] ?? null) : null)] ?? null) : null)))) ? ((($_v5 = ($context["provider_options"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[(($_v6 = $context["param_specs"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["key"] ?? null) : null)] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, $context["param_specs"], "default", [], "array", true, true, false, 267) &&  !(null === (($_v7 = $context["param_specs"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["default"] ?? null) : null)))) ? ((($_v8 = $context["param_specs"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["default"] ?? null) : null)) : (""))))) : ("")), (($_v9 =                     // line 268
$context["param_specs"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["label"] ?? null) : null), Twig\Extension\CoreExtension::merge(                    // line 269
($context["field_options"] ?? null), ($context["extra_options"] ?? null))]);
                    // line 270
                    yield "

                    ";
                    // line 273
                    yield "                    <div class=\"w-100\"></div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['param_specs'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 275
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['provider_class'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            yield "            <script type='text/javascript'>
                \$(function() {
                    \$('[name=smtp_oauth_provider]').on('change', function() {
                        const value = \$(this).find('option:selected').val();
                        \$(this.closest('form')).find('[data-oauth_additional_parameter=\"true\"]').each(
                            function (key, field) {
                                const row = \$(field).closest('.form-field');
                                const matches_current_provider = value === \$(field).attr('data-oauth_provider');
                                row.toggle(matches_current_provider);
                                row.find('input, select').prop('disabled', !matches_current_provider);
                            }
                        );

                    });
                    \$('[name=smtp_oauth_provider]').trigger('change');
                });
            </script>

            ";
            // line 294
            if (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_oauth_refresh_token") != "")) {
                // line 295
                yield "                ";
                yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 295, $this->getSourceContext())->macro_checkboxField(...["_force_redirect_to_smtp_oauth", "", _x("oauth", "Force OAuth authentication refresh"), Twig\Extension\CoreExtension::merge(                // line 299
($context["field_options"] ?? null), ["helper" => _x("oauth", "You can use this option to force redirection to the OAuth authentication process. This will trigger generation of a new OAuth token.")])]);
                // line 302
                yield "

                ";
                // line 305
                yield "                <div class=\"w-100\"></div>
            ";
            }
            // line 307
            yield "
            ";
            // line 308
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 308, $this->getSourceContext())->macro_dropdownYesNo(...["smtp_check_certificate", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_check_certificate"), __("Check certificate"),             // line 312
($context["field_options"] ?? null)]);
            // line 313
            yield "

            ";
            // line 316
            yield "            <div class=\"w-100\"></div>

            ";
            // line 318
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 318, $this->getSourceContext())->macro_textField(...["smtp_host", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_host"), __("SMTP host"),             // line 322
($context["field_options"] ?? null)]);
            // line 323
            yield "

            ";
            // line 325
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 325, $this->getSourceContext())->macro_numberField(...["smtp_port", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_port"), _n("Port", "Ports", 1),             // line 329
($context["field_options"] ?? null)]);
            // line 330
            yield "

            ";
            // line 332
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 332, $this->getSourceContext())->macro_textField(...["smtp_username", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_username"), __("SMTP login (optional)"),             // line 336
($context["field_options"] ?? null)]);
            // line 337
            yield "

            ";
            // line 339
            yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 339, $this->getSourceContext())->macro_passwordField(...["smtp_passwd", "", __("SMTP password (optional)"), Twig\Extension\CoreExtension::merge(            // line 343
($context["field_options"] ?? null), ["additional_attributes" => ["autocomplete" => "new-password"]])]);
            // line 348
            yield "

            ";
            // line 350
            yield $macros["fields"]->getTemplateForMacro("macro_emailField", $context, 350, $this->getSourceContext())->macro_emailField(...["smtp_sender", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("smtp_sender"), __("Email sender"), Twig\Extension\CoreExtension::merge(            // line 354
($context["field_options"] ?? null), ["helper" => ((__("May be required for some mails providers.") . "
") . __("If not set, main administrator email will be used."))])]);
            // line 357
            yield "
        </div>

        <div class=\"card-footer mx-n2 mb-4 d-flex flex-row-reverse align-items-start flex-wrap\">
            <button type=\"submit\" name=\"update\" value=\"1\" class=\"btn btn-primary\">
                <i class=\"ti ti-device-floppy\"></i>
                <span>";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
            </button>
            <button type=\"button\" id=\"test-email-btn\" class=\"btn btn-outline-secondary me-2\" name=\"test_smtp_send\" value=\"1\">
                ";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Send a test email to the administrator"), "html", null, true);
            yield "
            </button>

            <div class=\"modal fade\" id=\"mailTestLogModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mailTestLogModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"mailTestLogModalLabel\">";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email sending test result"), "html", null, true);
            yield "</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body\">

                        </div>
                    </div>
                </div>
            </div>

            <script>
                \$('#test-email-btn').on('click', function () {
                    const \$modal = \$('#mailTestLogModal');

                    \$.ajax({
                        url: CFG_GLPI.root_doc + '/ajax/notificationmailingsettings.php',
                        method: 'POST',
                        data: {
                            'test_smtp_send': 1
                        }
                    }).done(function (data) {
                        const successText = data.success ? __('Success') : __('Error');
                        const successClass = data.success ? 'bg-success' : 'bg-danger';
                        const errorSection = data.error ? `<div><h4>\${__('Error')}</h4><pre style=\"white-space: pre-wrap;\">\${data.error}</pre></div>` : '';
                        const debugSection = data.debug ? `<div><h4>\${__('Logs')}</h4><pre style=\"white-space: pre-wrap;\">\${data.debug}</pre></div>` : '';

                        const modalBodyContent = `
                            <div>
                                <span class=\"badge mb-3 \${successClass}\">\${successText}</span>
                            </div>
                            \${errorSection}
                            \${debugSection}
                        `;

                        \$modal.find('.modal-body').html(modalBodyContent);
                        \$modal.modal('show');
                    });
                });
            </script>
        </div>
    </form>
";
        } else {
            // line 415
            yield "    <div class=\"row\">
        <div class=\"col\">
            <div class=\"alert alert-info\">
                <i class=\"ti ti-info-circle fs-2x alert-icon\"></i>
                ";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notifications are disabled."), "html", null, true);
            yield "
                <a href=\"";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc"), "html", null, true);
            yield "/front/setup.notification.php\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("See configuration"), "html", null, true);
            yield "</a>
            </div>
        </div>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/notification/mailing_setting.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  530 => 420,  526 => 419,  520 => 415,  475 => 373,  465 => 366,  459 => 363,  451 => 357,  448 => 354,  447 => 350,  443 => 348,  441 => 343,  440 => 339,  436 => 337,  434 => 336,  433 => 332,  429 => 330,  427 => 329,  426 => 325,  422 => 323,  420 => 322,  419 => 318,  415 => 316,  411 => 313,  409 => 312,  408 => 308,  405 => 307,  401 => 305,  397 => 302,  395 => 299,  393 => 295,  391 => 294,  371 => 276,  365 => 275,  358 => 273,  354 => 270,  352 => 269,  351 => 268,  350 => 267,  349 => 266,  348 => 265,  345 => 264,  342 => 263,  340 => 261,  338 => 260,  335 => 259,  333 => 256,  331 => 253,  326 => 252,  322 => 251,  318 => 249,  316 => 243,  315 => 239,  311 => 237,  309 => 236,  308 => 232,  304 => 230,  302 => 225,  301 => 221,  297 => 219,  295 => 218,  294 => 216,  293 => 213,  287 => 210,  282 => 208,  276 => 205,  272 => 204,  265 => 199,  263 => 194,  262 => 190,  258 => 188,  256 => 187,  255 => 183,  250 => 181,  240 => 174,  236 => 173,  232 => 172,  228 => 171,  224 => 170,  220 => 169,  214 => 166,  210 => 165,  206 => 164,  198 => 159,  194 => 158,  187 => 153,  185 => 152,  184 => 150,  182 => 147,  179 => 146,  175 => 143,  172 => 142,  170 => 141,  165 => 139,  161 => 137,  159 => 136,  158 => 132,  153 => 130,  149 => 128,  147 => 127,  146 => 123,  142 => 121,  140 => 120,  139 => 118,  138 => 115,  134 => 113,  131 => 110,  130 => 106,  126 => 104,  123 => 101,  122 => 97,  118 => 95,  115 => 92,  114 => 88,  110 => 86,  107 => 83,  106 => 79,  102 => 77,  99 => 74,  98 => 70,  94 => 68,  91 => 65,  90 => 61,  86 => 59,  84 => 58,  83 => 54,  79 => 52,  77 => 51,  76 => 47,  70 => 44,  66 => 43,  62 => 42,  59 => 41,  57 => 39,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/notification/mailing_setting.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/notification/mailing_setting.html.twig");
    }
}
