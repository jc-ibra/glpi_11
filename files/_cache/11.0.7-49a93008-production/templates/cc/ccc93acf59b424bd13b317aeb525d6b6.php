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

/* pages/setup/mailcollector/setup_form.html.twig */
class __TwigTemplate_5a3db0b2dc421d197e18cd7c35a23162 extends Template
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

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 37
        $context["params"] = Twig\Extension\CoreExtension::merge(($context["params"] ?? null), ["addbuttons" => ["get_mails" => ["text" => _x("button", "Get email tickets now"), "add_attribs" => ["data-block-on-unsaved" => "true"]]], "formoptions" => "data-track-changes=\"true\""]);
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        if ((($tmp = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["errors"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "    <div class=\"alert alert-danger\">
        ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), _n("Error", "Errors", Session::getPluralNumber()), (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["errors"] ?? null) : null)), "html", null, true);
            // line 55
            yield "
    </div>
";
        }
        // line 58
        yield "
    ";
        // line 59
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 59, $this->getSourceContext())->macro_textField(...["name", (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["name"] ?? null) : null), __("Name"), ["helper" => __("If the name is a valid email address, it will be automatically added to blacklisted senders.")]]);
        // line 65
        yield "

    ";
        // line 67
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 67, $this->getSourceContext())->macro_textareaField(...["comment", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["comment"] ?? null) : null), __("Comments")]);
        // line 71
        yield "

    ";
        // line 73
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 73, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["is_active"] ?? null) : null), __("Active")]);
        // line 77
        yield "

    ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 79, $this->getSourceContext())->macro_nullField(...[]);
        yield "

    ";
        // line 81
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 81, $this->getSourceContext())->macro_smallTitle(...[__("Server configuration")]);
        yield "

    ";
        // line 83
        $context["host"] = (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["host"] ?? null) : null);
        // line 84
        yield "    ";
        $context["connect_opts"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::parseMailServerConnectString", [        // line 86
($context["host"] ?? null)]);
        // line 88
        yield "
    ";
        // line 89
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/setup/mailcollector/server_config_fields.html.twig", ["connect_opts" =>         // line 90
($context["connect_opts"] ?? null), "connect_string" =>         // line 91
($context["host"] ?? null), "protocol_choices" =>         // line 92
($context["protocol_choices"] ?? null)]);
        // line 93
        yield "

    ";
        // line 95
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 95, $this->getSourceContext())->macro_smallTitle(...[__("Authentication")]);
        yield "

    ";
        // line 97
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 97, $this->getSourceContext())->macro_textField(...["login", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["login"] ?? null) : null), __("Login")]);
        // line 101
        yield "

    ";
        // line 103
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 103, $this->getSourceContext())->macro_nullField(...[]);
        yield "

    ";
        // line 105
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 105, $this->getSourceContext())->macro_passwordField(...["passwd", "", __("Password"), ["clearable" =>  !CoreExtension::getAttribute($this->env, $this->source,         // line 109
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 109), "additional_attributes" => ["autocomplete" => "new-password"]]]);
        // line 114
        yield "

    ";
        // line 116
        if (((($_v7 = ($context["connect_opts"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["type"] ?? null) : null) != "pop")) {
            // line 117
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 117, $this->getSourceContext())->macro_smallTitle(...[__("Folders setup")]);
            yield "
        ";
            // line 118
            $context["get_imap_folder_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 119
                yield "            <div class=\"btn btn-outline-secondary get-imap-folder cursor-pointer";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " disabled";
                }
                yield "\"
                 ";
                // line 120
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "style=\"pointer-events: none;\"";
                }
                yield ">
                <i class=\"ti ti-list\"></i>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            yield "        ";
            // line 125
            yield "        <div class=\"alert alert-warning";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " d-none";
            }
            yield "\" id=\"server-changed-warning\">
            <i class=\"ti ti-info-circle\"></i>
            ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Server configuration has changed. Please save the collector before browsing folders."), "html", null, true);
            yield "
        </div>
        ";
            // line 129
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 129, $this->getSourceContext())->macro_textField(...["server_mailbox", (($_v8 =             // line 131
($context["connect_opts"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["mailbox"] ?? null) : null), __("Incoming mail folder (optional, often INBOX)"), ["add_field_html" =>             // line 133
($context["get_imap_folder_btn"] ?? null), "input_class" => "col-xxl-7 d-flex"]]);
            // line 136
            yield "
        ";
            // line 137
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 137, $this->getSourceContext())->macro_textField(...["accepted", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,             // line 139
($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["accepted"] ?? null) : null), __("Accepted mail archive folder (optional)"), ["add_field_html" =>             // line 141
($context["get_imap_folder_btn"] ?? null), "input_class" => "col-xxl-7 d-flex"]]);
            // line 144
            yield "
        ";
            // line 145
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 145, $this->getSourceContext())->macro_textField(...["refused", (($_v10 = CoreExtension::getAttribute($this->env, $this->source,             // line 147
($context["item"] ?? null), "fields", [], "any", false, false, false, 147)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["refused"] ?? null) : null), __("Refused mail archive folder (optional)"), ["add_field_html" =>             // line 149
($context["get_imap_folder_btn"] ?? null), "input_class" => "col-xxl-7 d-flex"]]);
            // line 152
            yield "
    ";
        }
        // line 154
        yield "
    ";
        // line 155
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 155, $this->getSourceContext())->macro_smallTitle(...[__("Collection options")]);
        yield "
    ";
        // line 156
        $context["max_filesize_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 157
            yield "        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("MailCollector::showMaxFilesize", ["filesize_max", (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["filesize_max"] ?? null) : null)]);
            // line 158
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 159, $this->getSourceContext())->macro_htmlField(...["",         // line 161
($context["max_filesize_dropdown"] ?? null), __("Maximum size of each file imported by the mails receiver"),         // line 163
($context["field_options"] ?? null)]);
        // line 164
        yield "
    ";
        // line 165
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 165, $this->getSourceContext())->macro_dropdownYesNo(...["use_mail_date", (($_v12 = CoreExtension::getAttribute($this->env, $this->source,         // line 167
($context["item"] ?? null), "fields", [], "any", false, false, false, 167)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["use_mail_date"] ?? null) : null), __("Use mail date, instead of collect one")]);
        // line 169
        yield "
    ";
        // line 170
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 170, $this->getSourceContext())->macro_dropdownArrayField(...["requester_field", (($_v13 = CoreExtension::getAttribute($this->env, $this->source,         // line 172
($context["item"] ?? null), "fields", [], "any", false, false, false, 172)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["requester_field"] ?? null) : null), [Twig\Extension\CoreExtension::constant("MailCollector::REQUESTER_FIELD_FROM") => __("No"), Twig\Extension\CoreExtension::constant("MailCollector::REQUESTER_FIELD_REPLY_TO") => __("Yes")], __("Use Reply-To as requester (when available)")]);
        // line 177
        yield "
    ";
        // line 178
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 178, $this->getSourceContext())->macro_dropdownYesNo(...["add_to_to_observer", (($_v14 = CoreExtension::getAttribute($this->env, $this->source,         // line 180
($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["add_to_to_observer"] ?? null) : null), __("Add TO users as observer")]);
        // line 182
        yield "
    ";
        // line 183
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 183, $this->getSourceContext())->macro_dropdownYesNo(...["add_cc_to_observer", (($_v15 = CoreExtension::getAttribute($this->env, $this->source,         // line 185
($context["item"] ?? null), "fields", [], "any", false, false, false, 185)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["add_cc_to_observer"] ?? null) : null), __("Add CC users as observer")]);
        // line 187
        yield "
    ";
        // line 188
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 188, $this->getSourceContext())->macro_dropdownYesNo(...["collect_only_unread", (($_v16 = CoreExtension::getAttribute($this->env, $this->source,         // line 190
($context["item"] ?? null), "fields", [], "any", false, false, false, 190)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["collect_only_unread"] ?? null) : null), __("Collect only unread mail")]);
        // line 192
        yield "

    ";
        // line 194
        $context["create_user_helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 195
            yield "        ";
            if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("is_users_auto_add")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 196
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If you use this option, and this collector is likely to receive requests from users authenticating via LDAP, we advise you to activate the option \"Automatically add users from an external authentication source\", in the Authentication settings in order to avoid the generation of duplicate users."), "html", null, true);
                yield "
        ";
            }
            // line 198
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 199
        yield "
    ";
        // line 200
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 200, $this->getSourceContext())->macro_dropdownYesNo(...["create_user_from_email", (($_v17 = CoreExtension::getAttribute($this->env, $this->source,         // line 202
($context["item"] ?? null), "fields", [], "any", false, false, false, 202)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["create_user_from_email"] ?? null) : null), __("Automatically create user from email"), ["helper" => Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::trim(        // line 204
($context["create_user_helper"] ?? null)), null)]]);
        // line 206
        yield "

    ";
        // line 208
        if (((($_v18 = ($context["connect_opts"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["type"] ?? null) : null) != "pop")) {
            // line 209
            yield "        <script>
            \$(function() {
                // Track all fields used to establish the IMAP connection
                const connectionFields = [
                    // Server configuration
                    'mail_server', 'server_port', 'server_type', 'server_ssl',
                    'server_tls', 'server_cert', 'server_rsh', 'server_secure', 'server_debug',
                    // Authentication
                    'login', 'passwd'
                ];
                const form = \$('.get-imap-folder').closest('form');
            ";
            // line 220
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 220)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 221
                yield "                // New collector: always disabled until first save
                ";
            } else {
                // line 223
                yield "                const savedValues = {};
                connectionFields.forEach(function(name) {
                    const field = form.find('[name=\"' + name + '\"]');
                    if (field.length) {
                        savedValues[name] = field.val();
                    }
                });

                function checkConnectionChanged() {
                    let changed = false;
                    connectionFields.forEach(function(name) {
                        const field = form.find('[name=\"' + name + '\"]');
                        if (field.length && field.val() !== savedValues[name]) {
                            changed = true;
                        }
                    });
                    const warning = \$('#server-changed-warning');
                    const buttons = form.find('.get-imap-folder');
                    if (changed) {
                        warning.removeClass('d-none');
                        buttons.addClass('disabled').css('pointer-events', 'none');
                    } else {
                        warning.addClass('d-none');
                        buttons.removeClass('disabled').css('pointer-events', '');
                    }
                }

                form.on(
                    'change input',
                    connectionFields.map(n => '[name=\"' + n + '\"]').join(', '),
                    checkConnectionChanged
                );
                ";
            }
            // line 256
            yield "
            \$(document).on('click', '.get-imap-folder', function() {
                const input = \$(this).prev('input');

                const data = {
                    action: 'getFoldersList',
                    id: '";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 262), "id", [], "array", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default((($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 262)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["id"] ?? null) : null), 0)) : (0)), "js"), "html", null, true);
            yield "',
                        input_id: input.attr('id')
                    };

                    glpi_ajax_dialog({
                        title: __('Select a folder'),
                        url: '";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/mailcollector.php"), "html", null, true);
            yield "',
                        params: data,
                        id: input.attr('id') + '_modal'
                    });
                });

                \$(document).on('click', '.select_folder li', function(event) {
                    event.stopPropagation();

                    const li       = \$(this);
                    const input_id = li.data('input-id');
                    const folder   = li.children('.folder-name').data('globalname');

                    \$('#'+input_id).val(folder);

                    const modalEl = \$('#'+input_id+'_modal')[0];
                    const modal = bootstrap.Modal.getInstance(modalEl);
                    modal.hide();
                })
            });
        </script>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/mailcollector/setup_form.html.twig";
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
        return array (  371 => 268,  362 => 262,  354 => 256,  319 => 223,  315 => 221,  313 => 220,  300 => 209,  298 => 208,  294 => 206,  292 => 204,  291 => 202,  290 => 200,  287 => 199,  283 => 198,  277 => 196,  274 => 195,  272 => 194,  268 => 192,  266 => 190,  265 => 188,  262 => 187,  260 => 185,  259 => 183,  256 => 182,  254 => 180,  253 => 178,  250 => 177,  248 => 172,  247 => 170,  244 => 169,  242 => 167,  241 => 165,  238 => 164,  236 => 163,  235 => 161,  233 => 159,  229 => 158,  226 => 157,  224 => 156,  220 => 155,  217 => 154,  213 => 152,  211 => 149,  210 => 147,  209 => 145,  206 => 144,  204 => 141,  203 => 139,  202 => 137,  199 => 136,  197 => 133,  196 => 131,  195 => 129,  190 => 127,  182 => 125,  180 => 124,  170 => 120,  163 => 119,  161 => 118,  156 => 117,  154 => 116,  150 => 114,  148 => 109,  147 => 105,  142 => 103,  138 => 101,  136 => 99,  135 => 97,  130 => 95,  126 => 93,  124 => 92,  123 => 91,  122 => 90,  121 => 89,  118 => 88,  116 => 86,  114 => 84,  112 => 83,  107 => 81,  102 => 79,  98 => 77,  96 => 75,  95 => 73,  91 => 71,  89 => 69,  88 => 67,  84 => 65,  82 => 61,  81 => 59,  78 => 58,  73 => 55,  71 => 54,  70 => 52,  67 => 51,  65 => 50,  58 => 49,  53 => 33,  51 => 37,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/mailcollector/setup_form.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/mailcollector/setup_form.html.twig");
    }
}
