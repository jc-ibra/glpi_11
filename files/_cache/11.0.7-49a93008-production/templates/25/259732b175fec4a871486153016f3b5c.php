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

/* pages/admin/rules/action.html.twig */
class __TwigTemplate_2476efa432e1954f35473ec662672eb4 extends Template
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
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $context["no_header"] = true;
        // line 36
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 36)->unwrap();
        // line 37
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 37)->unwrap();
        // line 34
        $this->parent = $this->load("generic_show_form.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "    ";
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "        ";
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 41, $this->getSourceContext())->macro_hidden(...[CoreExtension::getAttribute($this->env, $this->source, ($context["rule"] ?? null), "getRuleIdField", [], "any", false, false, false, 41), (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["rules_id_field"] ?? null)] ?? null) : null)]);
        yield "
        ";
        // line 42
        $context["action_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 43
            yield "            <div class=\"d-flex\">
                ";
            // line 44
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["rule"] ?? null), "dropdownActions"], [["value" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 45
($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["field"] ?? null) : null), "used" =>             // line 46
($context["used_actions"] ?? null), "rand" =>             // line 47
($context["rand"] ?? null)]]);
            // line 49
            yield "                <span id=\"action_span\" class=\"d-flex\"></span>
            </div>
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "        ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 52, $this->getSourceContext())->macro_htmlField(...["", ($context["action_dropdown"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(get_class(($context["item"] ?? null))), ["full_width" => true]]);
        // line 54
        yield "
        ";
        // line 55
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Ajax", "updateItemOnSelectEvent"], [("dropdown_field" .         // line 56
($context["rand"] ?? null)), "action_span", ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/ruleaction.php"), ["field" => "__VALUE__", "sub_type" => get_class(        // line 61
($context["rule"] ?? null)), "ruleactions_id" => CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["item"] ?? null), "getID", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["rule"] ?? null), "getRuleIdField", [], "any", false, false, false, 63) => (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["rules_id_field"] ?? null)] ?? null) : null)]]);
        // line 66
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 66), "field", [], "array", true, true, false, 66) &&  !Twig\Extension\CoreExtension::testEmpty((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["field"] ?? null) : null)))) {
            // line 67
            yield "            <script type=\"text/javascript\">
                \$(() => {
                    ";
            // line 69
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Ajax", "updateItemJsCode"], ["action_span", ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/ruleaction.php"), ["field" => (($_v4 = CoreExtension::getAttribute($this->env, $this->source,             // line 73
($context["item"] ?? null), "fields", [], "any", false, false, false, 73)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["field"] ?? null) : null), "action_type" => (($_v5 = CoreExtension::getAttribute($this->env, $this->source,             // line 74
($context["item"] ?? null), "fields", [], "any", false, false, false, 74)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["action_type"] ?? null) : null), "value" => (($_v6 = CoreExtension::getAttribute($this->env, $this->source,             // line 75
($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["value"] ?? null) : null), "sub_type" => get_class(            // line 76
($context["rule"] ?? null)), "ruleactions_id" => CoreExtension::getAttribute($this->env, $this->source,             // line 77
($context["item"] ?? null), "getID", [], "any", false, false, false, 77), CoreExtension::getAttribute($this->env, $this->source,             // line 78
($context["rule"] ?? null), "getRuleIdField", [], "any", false, false, false, 78) => (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["rules_id_field"] ?? null)] ?? null) : null)]]);
            // line 81
            yield "                });
            </script>
        ";
        }
        // line 84
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/rules/action.html.twig";
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
        return array (  131 => 84,  126 => 81,  124 => 78,  123 => 77,  122 => 76,  121 => 75,  120 => 74,  119 => 73,  118 => 69,  114 => 67,  111 => 66,  109 => 63,  108 => 62,  107 => 61,  106 => 56,  105 => 55,  102 => 54,  99 => 52,  93 => 49,  91 => 47,  90 => 46,  89 => 45,  88 => 44,  85 => 43,  83 => 42,  78 => 41,  66 => 40,  59 => 39,  54 => 34,  52 => 37,  50 => 36,  48 => 33,  41 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/rules/action.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/rules/action.html.twig");
    }
}
