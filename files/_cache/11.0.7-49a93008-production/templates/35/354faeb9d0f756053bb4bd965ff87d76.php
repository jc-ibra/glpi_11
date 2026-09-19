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

/* pages/admin/rules/criteria.html.twig */
class __TwigTemplate_2ddb6c3f4bc62cf2e8f3a8cd28a0cc59 extends Template
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
        $context["criteria_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 43
            yield "            <div class=\"d-flex\">
                <div>
                    ";
            // line 45
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["rule"] ?? null), "dropdownCriteria"], [["value" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 46
($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["criteria"] ?? null) : null), "rand" =>             // line 47
($context["rand"] ?? null)]]);
            // line 49
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["rule"] ?? null), "specific_parameters", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "                        ";
                $context["param_itemtype"] = (get_class(($context["rule"] ?? null)) . "Parameter");
                // line 51
                yield "                        <button type=\"button\" class=\"btn btn-ghost-secondary btn-sm\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a criterion"), "html", null, true);
                yield "\"
                                data-bs-toggle=\"modal\" data-bs-target=\"#addcriterion";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\">
                            <i class=\"ti ti-plus\"></i>
                        </button>
                        ";
                // line 55
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::createIframeModalWindow", [("addcriterion" .                 // line 56
($context["rand"] ?? null)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(                // line 57
($context["param_itemtype"] ?? null)), ["reloadonclose" => true]]);
                // line 62
                yield "                    ";
            }
            // line 63
            yield "                </div>
                <span id=\"criteria_span\" class=\"d-flex\"></span>
            </div>
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        yield "        ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 67, $this->getSourceContext())->macro_htmlField(...["", ($context["criteria_dropdown"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(get_class(($context["item"] ?? null))), ["full_width" => true]]);
        // line 69
        yield "
        ";
        // line 70
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Ajax", "updateItemOnSelectEvent"], [("dropdown_criteria" .         // line 71
($context["rand"] ?? null)), "criteria_span", ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/rulecriteria.php"), ["criteria" => "__VALUE__", "sub_type" => get_class(        // line 76
($context["rule"] ?? null)), "rand" =>         // line 77
($context["rand"] ?? null)]]);
        // line 80
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 80), "criteria", [], "array", true, true, false, 80) &&  !Twig\Extension\CoreExtension::testEmpty((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["criteria"] ?? null) : null)))) {
            // line 81
            yield "            <script type=\"text/javascript\">
                \$(() => {
                    ";
            // line 83
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Ajax", "updateItemJsCode"], ["criteria_span", ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/rulecriteria.php"), ["criteria" => (($_v3 = CoreExtension::getAttribute($this->env, $this->source,             // line 87
($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["criteria"] ?? null) : null), "condition" => (($_v4 = CoreExtension::getAttribute($this->env, $this->source,             // line 88
($context["item"] ?? null), "fields", [], "any", false, false, false, 88)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["condition"] ?? null) : null), "pattern" => (($_v5 = CoreExtension::getAttribute($this->env, $this->source,             // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["pattern"] ?? null) : null), "sub_type" => get_class(            // line 90
($context["rule"] ?? null)), "rand" =>             // line 91
($context["rand"] ?? null)]]);
            // line 94
            yield "                });
            </script>
        ";
        }
        // line 97
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/rules/criteria.html.twig";
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
        return array (  154 => 97,  149 => 94,  147 => 91,  146 => 90,  145 => 89,  144 => 88,  143 => 87,  142 => 83,  138 => 81,  135 => 80,  133 => 77,  132 => 76,  131 => 71,  130 => 70,  127 => 69,  124 => 67,  117 => 63,  114 => 62,  112 => 57,  111 => 56,  110 => 55,  104 => 52,  99 => 51,  96 => 50,  93 => 49,  91 => 47,  90 => 46,  89 => 45,  85 => 43,  83 => 42,  78 => 41,  66 => 40,  59 => 39,  54 => 34,  52 => 37,  50 => 36,  48 => 33,  41 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/rules/criteria.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/rules/criteria.html.twig");
    }
}
