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

/* pages/admin/form/itil_config_fields/slm.html.twig */
class __TwigTemplate_c157aa447756dcb081eef1a4f6323d0d extends Template
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
        // line 36
        yield "<div data-glpi-itildestination-field-config-display-condition=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_VALUE"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 37
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 37, $this->getSourceContext())->macro_dropdownField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["specific_value_extra_field"] ?? null), "slm_class", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["specific_value_extra_field"] ?? null), "input_name", [], "any", false, false, false, 39), CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["specific_value_extra_field"] ?? null), "value", [], "any", false, false, false, 40), "", Twig\Extension\CoreExtension::merge(        // line 42
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["specific_value_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 47), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["specific_value_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 48), "condition" => ["type" => CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["specific_value_extra_field"] ?? null), "type", [], "any", false, false, false, 50)]])]);
        // line 53
        yield "
</div>

";
        // line 57
        yield "<div data-glpi-itildestination-field-config-display-condition=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_SPECIFIC_DATE_ANSWER"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 59
        yield "    ";
        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())]);
        // line 60
        yield "
    ";
        // line 61
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 61, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["specific_date_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["specific_date_answer_extra_field"] ?? null), "value", [], "any", false, false, false, 63), CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["specific_date_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 64), "", Twig\Extension\CoreExtension::merge(        // line 66
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["specific_date_answer_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 71), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["specific_date_answer_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 72)])]);
        // line 74
        yield "
</div>

";
        // line 78
        yield "<div data-glpi-itildestination-field-config-display-condition=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_COMPUTED_DATE_FROM_FORM_SUBMISSION"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 80
        yield "    ";
        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())]);
        // line 81
        yield "
    <div class=\"d-flex w-full\" data-glpi-itildestination-field-slm-computed-strategy-config>
        ";
        // line 83
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 83, $this->getSourceContext())->macro_dropdownNumberField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 84
($context["time_offset_extra_field"] ?? null), "input_name", [], "any", false, false, false, 84), CoreExtension::getAttribute($this->env, $this->source,         // line 85
($context["time_offset_extra_field"] ?? null), "value", [], "any", false, false, false, 85), "", Twig\Extension\CoreExtension::merge(        // line 87
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "min" => CoreExtension::getAttribute($this->env, $this->source,         // line 91
($context["time_offset_extra_field"] ?? null), "min", [], "any", false, false, false, 91), "max" => CoreExtension::getAttribute($this->env, $this->source,         // line 92
($context["time_offset_extra_field"] ?? null), "max", [], "any", false, false, false, 92), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 93
($context["time_offset_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 93)])]);
        // line 95
        yield "
        ";
        // line 96
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 96, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 97
($context["time_definition_extra_field"] ?? null), "input_name", [], "any", false, false, false, 97), CoreExtension::getAttribute($this->env, $this->source,         // line 98
($context["time_definition_extra_field"] ?? null), "value", [], "any", false, false, false, 98), CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["time_definition_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 99), "", Twig\Extension\CoreExtension::merge(        // line 101
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 105
($context["time_definition_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 105)])]);
        // line 107
        yield "
    </div>
</div>

";
        // line 112
        yield "<div data-glpi-itildestination-field-config-display-condition=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CONFIG_COMPUTED_DATE_FROM_SPECIFIC_DATE_ANSWER"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 114
        yield "    ";
        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())]);
        // line 115
        yield "
    ";
        // line 116
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 116, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 117
($context["specific_date_answer_extra_field"] ?? null), "input_name", [], "any", false, false, false, 117), CoreExtension::getAttribute($this->env, $this->source,         // line 118
($context["specific_date_answer_extra_field"] ?? null), "value", [], "any", false, false, false, 118), CoreExtension::getAttribute($this->env, $this->source,         // line 119
($context["specific_date_answer_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 119), "", Twig\Extension\CoreExtension::merge(        // line 121
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "display_emptychoice" => true, "emptylabel" => CoreExtension::getAttribute($this->env, $this->source,         // line 126
($context["specific_date_answer_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 126), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["specific_date_answer_extra_field"] ?? null), "empty_label", [], "any", false, false, false, 127)])]);
        // line 129
        yield "
    <div class=\"d-flex w-full\" data-glpi-itildestination-field-slm-computed-strategy-config>
        ";
        // line 131
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 131, $this->getSourceContext())->macro_dropdownNumberField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 132
($context["time_offset_extra_field"] ?? null), "input_name", [], "any", false, false, false, 132), CoreExtension::getAttribute($this->env, $this->source,         // line 133
($context["time_offset_extra_field"] ?? null), "value", [], "any", false, false, false, 133), "", Twig\Extension\CoreExtension::merge(        // line 135
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "min" => CoreExtension::getAttribute($this->env, $this->source,         // line 139
($context["time_offset_extra_field"] ?? null), "min", [], "any", false, false, false, 139), "max" => CoreExtension::getAttribute($this->env, $this->source,         // line 140
($context["time_offset_extra_field"] ?? null), "max", [], "any", false, false, false, 140), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 141
($context["time_offset_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 141)])]);
        // line 143
        yield "
        ";
        // line 144
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 144, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 145
($context["time_definition_extra_field"] ?? null), "input_name", [], "any", false, false, false, 145), CoreExtension::getAttribute($this->env, $this->source,         // line 146
($context["time_definition_extra_field"] ?? null), "value", [], "any", false, false, false, 146), CoreExtension::getAttribute($this->env, $this->source,         // line 147
($context["time_definition_extra_field"] ?? null), "possible_values", [], "any", false, false, false, 147), "", Twig\Extension\CoreExtension::merge(        // line 149
($context["options"] ?? null), ["field_class" => "", "mb" => "", "no_label" => true, "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 153
($context["time_definition_extra_field"] ?? null), "aria_label", [], "any", false, false, false, 153)])]);
        // line 155
        yield "
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/itil_config_fields/slm.html.twig";
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
        return array (  170 => 155,  168 => 153,  167 => 149,  166 => 147,  165 => 146,  164 => 145,  163 => 144,  160 => 143,  158 => 141,  157 => 140,  156 => 139,  155 => 135,  154 => 133,  153 => 132,  152 => 131,  148 => 129,  146 => 127,  145 => 126,  144 => 121,  143 => 119,  142 => 118,  141 => 117,  140 => 116,  137 => 115,  134 => 114,  129 => 112,  123 => 107,  121 => 105,  120 => 101,  119 => 99,  118 => 98,  117 => 97,  116 => 96,  113 => 95,  111 => 93,  110 => 92,  109 => 91,  108 => 87,  107 => 85,  106 => 84,  105 => 83,  101 => 81,  98 => 80,  93 => 78,  88 => 74,  86 => 72,  85 => 71,  84 => 66,  83 => 64,  82 => 63,  81 => 62,  80 => 61,  77 => 60,  74 => 59,  69 => 57,  64 => 53,  62 => 50,  61 => 48,  60 => 47,  59 => 42,  58 => 40,  57 => 39,  56 => 38,  55 => 37,  50 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/itil_config_fields/slm.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/form/itil_config_fields/slm.html.twig");
    }
}
