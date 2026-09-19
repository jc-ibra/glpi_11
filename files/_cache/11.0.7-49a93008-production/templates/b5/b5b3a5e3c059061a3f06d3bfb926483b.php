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

/* pages/management/softwarelicense.html.twig */
class __TwigTemplate_c236dcd406c264dee3c3c94ecd15f8f6 extends Template
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
            'more_fields' => [$this, 'block_more_fields'],
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
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "

   ";
        // line 40
        if (((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null) > 0)) {
            // line 41
            yield "
      <input type=\"hidden\" name=\"softwares_id\" value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["softwares_id"] ?? null) : null), "html", null, true);
            yield "\" />

      ";
            // line 44
            $context["software_link"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 45
                yield "         ";
                if (((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["softwares_id"] ?? null) : null) > 0)) {
                    // line 46
                    yield "            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Software::getFormURLWithID", [(($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["softwares_id"] ?? null) : null)]), "html", null, true);
                    yield "\">
            ";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::getDropdownName", ["glpi_softwares", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["softwares_id"] ?? null) : null)]), "html", null, true);
                    yield " </a>
         ";
                } else {
                    // line 49
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not linked to any software"), "html", null, true);
                    yield "
         ";
                }
                // line 51
                yield "      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            yield "
      ";
            // line 53
            yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 53, $this->getSourceContext())->macro_field(...["software",             // line 55
($context["software_link"] ?? null), _n("Software", "Software", Session::getPluralNumber()), ["width" => "100%", "height" => "100%", "input_class" => "d-flex col-xxl-7 field-container align-items-center"]]);
            // line 62
            yield "

   ";
        } else {
            // line 65
            yield "
      ";
            // line 66
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 66, $this->getSourceContext())->macro_dropdownField(...["Software", "softwares_id", (($_v5 = CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["softwares_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Software"), ["entity" => (($_v6 = CoreExtension::getAttribute($this->env, $this->source,             // line 72
($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["entities_id"] ?? null) : null), "condition" => ["is_template" => 0, "is_deleted" => 0], "on_change" => "this.form.submit()"]]);
            // line 79
            yield "

   ";
        }
        // line 82
        yield "


   ";
        // line 85
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 85, $this->getSourceContext())->macro_nullField(...[]);
        yield "

   ";
        // line 87
        yield from $this->yieldParentBlock("form_fields", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        yield "   ";
        $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 92
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [["name" => "softwareversions_id_use", "softwares_id" => (($_v7 = CoreExtension::getAttribute($this->env, $this->source,             // line 94
($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["softwares_id"] ?? null) : null), "value" => (($_v8 = CoreExtension::getAttribute($this->env, $this->source,             // line 95
($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["softwareversions_id_use"] ?? null) : null), "width" => "100%"]]);
            // line 98
            yield "   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 99, $this->getSourceContext())->macro_field(...["softwareversions_id_use", ($context["field"] ?? null), __("Version in use")]);
        yield "

   ";
        // line 101
        $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 102
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [["name" => "softwareversions_id_buy", "softwares_id" => (($_v9 = CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["item"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["softwares_id"] ?? null) : null), "value" => (($_v10 = CoreExtension::getAttribute($this->env, $this->source,             // line 105
($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["softwareversions_id_buy"] ?? null) : null), "width" => "100%"]]);
            // line 108
            yield "   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 109, $this->getSourceContext())->macro_field(...["softwareversions_id_buy", ($context["field"] ?? null), __("Purchase version")]);
        yield "

   ";
        // line 111
        $context["validity_msg"] = null;
        // line 112
        yield "   ";
        if (((($context["item_type"] ?? null) == "SoftwareLicense") &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 112))) {
            // line 113
            yield "      ";
            $context["validity_msg"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 114
                yield "         <div class=\"d-flex justify-content-around pt-2\">
            ";
                // line 115
                yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/management/license_progressbar.html.twig", ["total" => (($_v11 = CoreExtension::getAttribute($this->env, $this->source,                 // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["number"] ?? null) : null), "licences_assigned" =>                 // line 117
($context["licences_assigned"] ?? null)], false);
                // line 118
                yield "
         </div>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 121
            yield "   ";
        }
        // line 122
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 122, $this->getSourceContext())->macro_dropdownNumberField(...["number", (($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["number"] ?? null) : null), _x("quantity", "Number"), Twig\Extension\CoreExtension::merge(["min" => 1, "max" => 10000, "step" => 1, "toadd" => ["-1" => __("Unlimited")]], (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ([]) : (["add_field_html" => ($context["validity_msg"] ?? null)])))]);
        yield "

   ";
        // line 129
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 129, $this->getSourceContext())->macro_dropdownYesNo(...["allow_overquota", (($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["allow_overquota"] ?? null) : null), __("Allow Over-Quota")]);
        yield "

   ";
        // line 131
        yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 131, $this->getSourceContext())->macro_datetimeField(...["expire", (($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["expire"] ?? null) : null), __("Expiration"), ["helper" => __("On search engine, use \"Expiration contains NULL\" to search licenses with no expiration date")]]);
        // line 133
        yield "

   ";
        // line 135
        if (((($_v15 = ($context["params"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["withtemplate"] ?? null) : null) == 1)) {
            // line 136
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 136, $this->getSourceContext())->macro_hiddenField(...["withtemplate", "1"]);
            yield "
   ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/management/softwarelicense.html.twig";
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
        return array (  229 => 136,  227 => 135,  223 => 133,  221 => 131,  216 => 129,  211 => 127,  209 => 122,  206 => 121,  200 => 118,  198 => 117,  197 => 116,  196 => 115,  193 => 114,  190 => 113,  187 => 112,  185 => 111,  179 => 109,  175 => 108,  173 => 105,  172 => 104,  170 => 102,  168 => 101,  162 => 99,  158 => 98,  156 => 95,  155 => 94,  153 => 92,  150 => 91,  143 => 90,  136 => 87,  131 => 85,  126 => 82,  121 => 79,  119 => 72,  118 => 69,  117 => 66,  114 => 65,  109 => 62,  107 => 55,  106 => 53,  103 => 52,  99 => 51,  93 => 49,  88 => 47,  83 => 46,  80 => 45,  78 => 44,  73 => 42,  70 => 41,  68 => 40,  64 => 38,  57 => 37,  52 => 33,  50 => 35,  48 => 34,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/management/softwarelicense.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/management/softwarelicense.html.twig");
    }
}
