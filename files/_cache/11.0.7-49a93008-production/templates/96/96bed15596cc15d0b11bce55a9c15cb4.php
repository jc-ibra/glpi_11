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

/* pages/setup/ldap/form.html.twig */
class __TwigTemplate_0407803d61ca3e6e825442fdb2893637 extends Template
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
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "        ";
            $context["preconfig_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 39
                yield "            ";
                $context["form_url"] = ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("AuthLDAP") . "?preconfig=");
                // line 40
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["form_url"] ?? null) . "AD"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Active Directory"), "html", null, true);
                yield "</a>
            /
            <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["form_url"] ?? null) . "OpenLDAP"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("OpenLDAP"), "html", null, true);
                yield "</a>
            /
            <a href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["form_url"] ?? null) . "default"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default values"), "html", null, true);
                yield "</a>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 46, $this->getSourceContext())->macro_htmlField(...["", ($context["preconfig_field"] ?? null), __("Preconfiguration")]);
            yield "
        ";
            // line 47
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 47, $this->getSourceContext())->macro_nullField(...[]);
            yield "
    ";
        }
        // line 49
        yield "
    ";
        // line 50
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 50, $this->getSourceContext())->macro_textField(...["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name")]);
        yield "
    ";
        // line 51
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 51, $this->getSourceContext())->macro_nullField(...[]);
        yield "

    ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 53, $this->getSourceContext())->macro_dropdownYesNo(...["is_default", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_default"] ?? null) : null), __("Default server")]);
        yield "
    ";
        // line 54
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 54, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_active"] ?? null) : null), __("Active")]);
        yield "
    ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 55, $this->getSourceContext())->macro_textField(...["host", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["host"] ?? null) : null), __("Server")]);
        yield "
    ";
        // line 56
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 56, $this->getSourceContext())->macro_numberField(...["port", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["port"] ?? null) : null), __("Port (default=389)"), ["min" => 1, "max" => 65535]]);
        yield "
    ";
        // line 57
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 57, $this->getSourceContext())->macro_textareaField(...["comment", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["comment"] ?? null) : null), __("Comments")]);
        yield "
    ";
        // line 58
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 58, $this->getSourceContext())->macro_nullField(...[]);
        yield "

    ";
        // line 60
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 60, $this->getSourceContext())->macro_textareaField(...["condition", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["condition"] ?? null) : null), __("Connection filter"), ["full_width" => true, "label_class" => "col-xxl-2", "input_class" => "col-xxl-10"]]);
        // line 64
        yield "
    ";
        // line 65
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 65, $this->getSourceContext())->macro_textField(...["basedn", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["basedn"] ?? null) : null), __("BaseDN"), ["full_width" => true, "label_class" => "col-xxl-2", "input_class" => "col-xxl-10"]]);
        // line 69
        yield "

    ";
        // line 71
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 71, $this->getSourceContext())->macro_dropdownYesNo(...["use_bind", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["use_bind"] ?? null) : null), __("Use bind"), ["helper" => __("Indicates whether a simple bind operation should be used during connection to LDAP server. Disabling this behaviour can be required when LDAPS bind is used.")]]);
        // line 73
        yield "
    ";
        // line 74
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 74, $this->getSourceContext())->macro_nullField(...[]);
        yield "
    <script>
        \$(() => {
            \$('select[name=\"use_bind\"]').on('change', (e) => {
                const bind_fields = \$('.bind_field');
                if (\$(e.target).val() === '1') {
                    bind_fields.removeClass('d-none');
                } else {
                    bind_fields.addClass('d-none');
                }
            });
        });
    </script>

    ";
        // line 88
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 88, $this->getSourceContext())->macro_textField(...["rootdn", (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 88)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["rootdn"] ?? null) : null), __("RootDN (for non anonymous binds)"), ["full_width" => true, "label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "add_field_class" => ("bind_field" . ((((($_v10 = CoreExtension::getAttribute($this->env, $this->source,         // line 92
($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["use_bind"] ?? null) : null) == "1")) ? ("") : (" d-none")))]]);
        // line 93
        yield "
    ";
        // line 94
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 94, $this->getSourceContext())->macro_passwordField(...["rootdn_passwd", "", __("Password (for non-anonymous binds)"), ["full_width" => true, "label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "add_field_class" => ("bind_field" . ((((($_v11 = CoreExtension::getAttribute($this->env, $this->source,         // line 98
($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["use_bind"] ?? null) : null) == "1")) ? ("") : (" d-none"))), "clearable" => true]]);
        // line 100
        yield "

    ";
        // line 102
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 102, $this->getSourceContext())->macro_textField(...["login_field", (($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["login_field"] ?? null) : null), __("Login field")]);
        yield "
    ";
        // line 103
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 103, $this->getSourceContext())->macro_textField(...["sync_field", (($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["sync_field"] ?? null) : null), __("Synchronization field"), ["helper" => __("Synchronization field cannot be changed once in use."), "disabled" => (CoreExtension::getAttribute($this->env, $this->source,         // line 105
($context["item"] ?? null), "isSyncFieldEnabled", [], "method", false, false, false, 105) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isSyncFieldUsed", [], "method", false, false, false, 105))]]);
        // line 106
        yield "

    ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hidden_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 109
            yield "        <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["f"], "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[$context["f"]] ?? null) : null), "html", null, true);
            yield "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/ldap/form.html.twig";
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
        return array (  201 => 109,  197 => 108,  193 => 106,  191 => 105,  190 => 103,  186 => 102,  182 => 100,  180 => 98,  179 => 94,  176 => 93,  174 => 92,  173 => 88,  156 => 74,  153 => 73,  151 => 71,  147 => 69,  145 => 65,  142 => 64,  140 => 60,  135 => 58,  131 => 57,  127 => 56,  123 => 55,  119 => 54,  115 => 53,  110 => 51,  106 => 50,  103 => 49,  98 => 47,  93 => 46,  85 => 44,  78 => 42,  70 => 40,  67 => 39,  64 => 38,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/ldap/form.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/ldap/form.html.twig");
    }
}
