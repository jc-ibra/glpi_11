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

/* pages/admin/form/itil_config_fields/itilactor.html.twig */
class __TwigTemplate_729cb42b21d5184ab14f7b322996fa36 extends Template
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
<div
    class=\"d-none\"
    data-glpi-itildestination-field-config-display-condition=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_VALUE"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 39
        $context["actors_dropdown"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Form\\Dropdown\\FormActorsDropdown::show", [CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["specific_value_extra_field"] ?? null), "values", [], "any", false, false, false, 41), ["multiple" => true, "allowed_types" => CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["specific_value_extra_field"] ?? null), "allowed_types", [], "any", false, false, false, 44), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["specific_value_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 45), "right_for_users" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["specific_value_extra_field"] ?? null), "dropdown_options", [], "any", false, false, false, 46), "right_for_users", [], "any", false, false, false, 46), "group_conditions" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["specific_value_extra_field"] ?? null), "dropdown_options", [], "any", false, false, false, 47), "group_conditions", [], "any", false, false, false, 47)]]);
        // line 50
        yield "
    ";
        // line 51
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 51, $this->getSourceContext())->macro_htmlField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 52),         // line 53
($context["actors_dropdown"] ?? null), "", ["field_class" => "", "no_label" => true, "wrapper_class" => "", "mb" => ""]]);
        // line 61
        yield "
</div>

<div
    class=\"d-none\"
    data-glpi-itildestination-field-config-display-condition=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_ANSWER"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 68
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 68, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["specific_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 69), "", CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["specific_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 71), "", Twig\Extension\CoreExtension::merge(        // line 73
($context["options"] ?? null), ["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "field_class" => "", "no_label" => true, "multiple" => true, "values" => CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["specific_answer_extra_field"] ?? null), "values", [], "any", false, false, false, 78), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["specific_answer_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 79), "mb" => ""])]);
        // line 82
        yield "
</div>

";
        // line 85
        $context["group_object_strategies"] = [        // line 86
($context["CONFIG_SPECIFIC_USER_OBJECT_ANSWER"] ?? null),         // line 87
($context["CONFIG_SPECIFIC_TECH_USER_OBJECT_ANSWER"] ?? null),         // line 88
($context["CONFIG_SPECIFIC_GROUP_OBJECT_ANSWER"] ?? null),         // line 89
($context["CONFIG_SPECIFIC_TECH_GROUP_OBJECT_ANSWER"] ?? null)];
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["group_object_strategies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 92
            yield "    <div
        class=\"d-none\"
        data-glpi-itildestination-field-config-display-condition=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["strategy"], "html", null, true);
            yield "\"
    >
        ";
            // line 96
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 96, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["object_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 97), "", CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["object_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 99), "", Twig\Extension\CoreExtension::merge(            // line 101
($context["options"] ?? null), ["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "field_class" => "", "no_label" => true, "multiple" => true, "values" => CoreExtension::getAttribute($this->env, $this->source,             // line 106
($context["object_answer_extra_field"] ?? null), "values", [], "any", false, false, false, 106), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["object_answer_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 107), "mb" => ""])]);
            // line 110
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/itil_config_fields/itilactor.html.twig";
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
        return array (  122 => 110,  120 => 107,  119 => 106,  118 => 101,  117 => 99,  116 => 97,  115 => 96,  110 => 94,  106 => 92,  102 => 91,  100 => 89,  99 => 88,  98 => 87,  97 => 86,  96 => 85,  91 => 82,  89 => 79,  88 => 78,  87 => 73,  86 => 71,  85 => 69,  84 => 68,  79 => 66,  72 => 61,  70 => 53,  69 => 52,  68 => 51,  65 => 50,  63 => 47,  62 => 46,  61 => 45,  60 => 44,  59 => 41,  58 => 40,  57 => 39,  52 => 37,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/itilactor.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/form/itil_config_fields/itilactor.html.twig");
    }
}
