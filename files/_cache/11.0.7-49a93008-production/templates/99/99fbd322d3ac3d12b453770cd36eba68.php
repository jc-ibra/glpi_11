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

/* pages/admin/form/conditional_visibility_editor.html.twig */
class __TwigTemplate_813d19918e472f2c1e5bea1215ab8aef extends Template
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
        $context["last_condition_is_filled"] = false;
        // line 34
        yield "
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["defined_conditions"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 36
            yield "    ";
            $context["condition_is_filled"] = (CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemUuid", [], "method", false, false, false, 36) != "");
            // line 37
            yield "    ";
            $context["last_condition_is_filled"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37) && ($context["condition_is_filled"] ?? null));
            // line 38
            yield "
    <div
        class=\"row mt-3\"
        data-glpi-conditions-editor-condition
        data-glpi-conditions-editor-condition-index=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 42), "html", null, true);
            yield "\"
        data-testid=\"visibility-condition\"
    >
        <div class=\"col-12\">
            <div class=\"d-flex align-items-center\">
                ";
            // line 47
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                    <span class=\"me-2 logic-operator-selector\">
                        ";
                // line 49
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [(("_conditions[" . CoreExtension::getAttribute($this->env, $this->source,                 // line 50
$context["loop"], "index0", [], "any", false, false, false, 50)) . "][logic_operator]"), CoreExtension::getAttribute($this->env, $this->source,                 // line 51
($context["manager"] ?? null), "getLogicOperatorDropdownValues", [], "method", false, false, false, 51), ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["condition"], "getLogicOperator", [], "method", false, false, false, 53), "value", [], "any", false, false, false, 53), "aria_label" => __("Logic operator"), "add_data_attributes" => ["glpi-conditions-editor-logic-operator" => ""]]]);
                // line 59
                yield "                    </span>
                ";
            }
            // line 61
            yield "
                <span class=\"me-2 question-selector\">
                    ";
            // line 63
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [(("_conditions[" . CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["loop"], "index0", [], "any", false, false, false, 64)) . "][item]"),             // line 65
($context["items_values"] ?? null), ["value" => CoreExtension::getAttribute($this->env, $this->source,             // line 67
$context["condition"], "getItemDropdownKey", [], "method", false, false, false, 67), "aria_label" => _n("Item", "Items", 1), "add_data_attributes" => ["glpi-conditions-editor-item" => ""], "display_emptychoice" => true, "emptylabel" => __("Select an item...")]]);
            // line 76
            yield "                </span>

                ";
            // line 78
            if ((($tmp = ($context["condition_is_filled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "                    <input
                        type=\"hidden\"
                        value=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemUuid", [], "method", false, false, false, 81), "html", null, true);
                yield "\"
                        name=\"_conditions[";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 82), "html", null, true);
                yield "][item_uuid]\"
                        data-glpi-conditions-editor-item-uuid
                    />
                    <input
                        type=\"hidden\"
                        value=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemType", [], "method", false, false, false, 87), "value", [], "any", false, false, false, 87), "html", null, true);
                yield "\"
                        name=\"_conditions[";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 88), "html", null, true);
                yield "][item_type]\"
                        data-glpi-conditions-editor-item-type
                    />

                    <span class=\"me-2 value-operator-selector\">
                        ";
                // line 93
                $context["value_op"] = "";
                // line 94
                yield "                        ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValueOperator", [], "method", false, false, false, 94))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield "                            ";
                    $context["value_op"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValueOperator", [], "method", false, false, false, 95), "value", [], "any", false, false, false, 95);
                    // line 96
                    yield "                        ";
                }
                // line 97
                yield "                        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [(("_conditions[" . CoreExtension::getAttribute($this->env, $this->source,                 // line 98
$context["loop"], "index0", [], "any", false, false, false, 98)) . "][value_operator]"), CoreExtension::getAttribute($this->env, $this->source,                 // line 99
($context["manager"] ?? null), "getValueOperatorDropdownValues", [CoreExtension::getAttribute($this->env, $this->source,                 // line 100
$context["condition"], "getItemUuid", [], "method", false, false, false, 100)], "method", false, false, false, 99), ["value" =>                 // line 103
($context["value_op"] ?? null), "aria_label" => __("Value operator"), "add_data_attributes" => ["glpi-conditions-editor-value-operator" => ""]]]);
                // line 110
                yield "                    </span>

                    ";
                // line 113
                yield "                    ";
                $context["handler"] = CoreExtension::getAttribute($this->env, $this->source, ($context["manager"] ?? null), "getHandlerForCondition", [$context["condition"]], "method", false, false, false, 113);
                // line 114
                yield "
                    ";
                // line 115
                if ((($tmp =  !(null === ($context["handler"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 116
                    yield "                        ";
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["handler"] ?? null), "getTemplate", [], "method", false, false, false, 116))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 117
                        yield "                            ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source,                         // line 118
($context["handler"] ?? null), "getTemplate", [], "method", false, false, false, 118), Twig\Extension\CoreExtension::merge(["input_value" => CoreExtension::getAttribute($this->env, $this->source,                         // line 120
$context["condition"], "getValue", [], "method", false, false, false, 120), "input_name" => (("_conditions[" . CoreExtension::getAttribute($this->env, $this->source,                         // line 121
$context["loop"], "index0", [], "any", false, false, false, 121)) . "][value]"), "input_label" => __("Value")], CoreExtension::getAttribute($this->env, $this->source,                         // line 123
($context["handler"] ?? null), "getTemplateParameters", [$context["condition"]], "method", false, false, false, 123)), false);
                        // line 125
                        yield "
                        ";
                    }
                    // line 127
                    yield "                    ";
                }
                // line 128
                yield "                ";
            }
            // line 129
            yield "
                ";
            // line 130
            if ((($context["condition_is_filled"] ?? null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 130) > 0))) {
                // line 131
                yield "                    <i
                        role=\"button\"
                        aria-label=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete criteria"), "html", null, true);
                yield "\"
                        class=\"ti ti-trash text-danger cursor-pointer ms-auto\"
                        data-glpi-condition-editor-delete-condition
                    ></i>
                ";
            }
            // line 138
            yield "            </div>
        </div>
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "
";
        // line 143
        if ((($tmp = ($context["last_condition_is_filled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "    <button
        data-glpi-condition-editor-add-condition
        type=\"button\"
        class=\"d-flex align-items-center btn btn-sm btn-ghost-secondary mt-3\"
        aria-label=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add another criteria"), "html", null, true);
            yield "\"
    >
        <i class=\"ti ti-plus me-1\"></i>
        <span>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add another criteria"), "html", null, true);
            yield "</span>
    </button>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/conditional_visibility_editor.html.twig";
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
        return array (  245 => 151,  239 => 148,  233 => 144,  231 => 143,  228 => 142,  211 => 138,  203 => 133,  199 => 131,  197 => 130,  194 => 129,  191 => 128,  188 => 127,  184 => 125,  182 => 123,  181 => 121,  180 => 120,  179 => 118,  177 => 117,  174 => 116,  172 => 115,  169 => 114,  166 => 113,  162 => 110,  160 => 103,  159 => 100,  158 => 99,  157 => 98,  155 => 97,  152 => 96,  149 => 95,  146 => 94,  144 => 93,  136 => 88,  132 => 87,  124 => 82,  120 => 81,  116 => 79,  114 => 78,  110 => 76,  108 => 67,  107 => 65,  106 => 64,  105 => 63,  101 => 61,  97 => 59,  95 => 53,  94 => 51,  93 => 50,  92 => 49,  89 => 48,  87 => 47,  79 => 42,  73 => 38,  70 => 37,  67 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/conditional_visibility_editor.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/form/conditional_visibility_editor.html.twig");
    }
}
