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

/* pages/admin/form/condition_configuration.html.twig */
class __TwigTemplate_cf8b328997af9be1ae269e10b46732f9 extends Template
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
            'conditions_editor' => [$this, 'block_conditions_editor'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 34
        $context["strategies"] = null;
        // line 35
        yield "
";
        // line 37
        $context["selected_strategy"] = null;
        // line 38
        $context["strategy_input_name"] = null;
        // line 39
        yield "
";
        // line 41
        $context["conditions"] = null;
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('conditions_editor', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_conditions_editor(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "    <div data-glpi-conditions-editor-container data-testid=\"conditions-container\">
        <div class=\"btn-group\" role=\"group\">

            ";
        // line 48
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::enumCases(($context["strategies"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 49
            yield "                ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 50
            yield "                <input
                    id=\"strategy_";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                    type=\"radio\"
                    class=\"btn-check\"
                    name=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["strategy_input_name"] ?? null), "html", null, true);
            yield "\"
                    value=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 55), "html", null, true);
            yield "\"
                    autocomplete=\"off\"
                    data-glpi-conditions-editor-strategy
                    ";
            // line 58
            if ((($context["selected_strategy"] ?? null) == $context["strategy"])) {
                // line 59
                yield "                        checked
                        data-glpi-editor-refresh-checked
                    ";
            }
            // line 62
            yield "                    ";
            // line 63
            yield "                    data-glpi-conditions-editor-disabled
                    data-glpi-conditions-editor-enable-on-ready
                >
                <label
                    for=\"strategy_";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                    class=\"btn btn-outline-secondary\"
                    aria-label=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 69), "html", null, true);
            yield "\"
                    data-testid=\"strategy-label-";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 70), "html", null, true);
            yield "\"
                >
                    <i class=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getIcon", [], "method", false, false, false, 72), "html", null, true);
            yield " me-2\"></i>
                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 73), "html", null, true);
            yield "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "        </div>

        ";
        // line 78
        $context["is_visible"] = CoreExtension::getAttribute($this->env, $this->source, ($context["selected_strategy"] ?? null), "showEditor", [], "method", false, false, false, 78);
        // line 79
        yield "        ";
        $context["visibility_class"] = (((($tmp = ($context["is_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        // line 80
        yield "        <div
            class=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["visibility_class"] ?? null), "html", null, true);
        yield " mt-4\"
            data-glpi-conditions-editor
            data-testid=\"conditions-editor\"
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::enumCases(($context["strategies"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 85
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "showEditor", [], "method", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "                    data-glpi-conditions-editor-display-for-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 86), "html", null, true);
                yield "
                ";
            }
            // line 88
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "        >
            ";
        // line 91
        yield "            <div class=\"card-body placeholder-glow\">
                <div class=\"placeholder col-12 mb-2\"></div>
                <div class=\"placeholder col-12 mb-2\"></div>
                <div class=\"placeholder col-12 mb-2\"></div>
                <div class=\"placeholder col-12 mb-2\"></div>
                <div class=\"placeholder col-12 mb-2\"></div>
            </div>
            ";
        // line 99
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["conditions"] ?? null));
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
            // line 100
            yield "                ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemUuid", [], "method", false, false, false, 100))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "                    <div data-glpi-conditions-editor-condition>
                        ";
                // line 102
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 103
                    yield "                            <input
                                type=\"hidden\"
                                name=\"_conditions[";
                    // line 105
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 105), "html", null, true);
                    yield "][logic_operator]\"
                                value=\"";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getLogicOperator", [], "method", false, false, false, 106), "value", [], "any", false, false, false, 106), "html", null, true);
                    yield "\"
                                data-glpi-conditions-editor-logic-operator
                            />
                        ";
                }
                // line 110
                yield "                        <input
                            type=\"hidden\"
                            name=\"_conditions[";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 112), "html", null, true);
                yield "][item]\"
                            value=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemDropdownKey", [], "method", false, false, false, 113), "html", null, true);
                yield "\"
                            data-glpi-conditions-editor-item
                        />
                        <input
                            type=\"hidden\"
                            name=\"_conditions[";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 118), "html", null, true);
                yield "][item_uuid]\"
                            value=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemUuid", [], "method", false, false, false, 119), "html", null, true);
                yield "\"
                            data-glpi-conditions-editor-item-uuid
                        />
                        <input
                            type=\"hidden\"
                            name=\"_conditions[";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 124), "html", null, true);
                yield "][item_type]\"
                            value=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getItemType", [], "method", false, false, false, 125), "value", [], "any", false, false, false, 125), "html", null, true);
                yield "\"
                            data-glpi-conditions-editor-item-type
                        />
                        <input
                            type=\"hidden\"
                            name=\"_conditions[";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 130), "html", null, true);
                yield "][value_operator]\"
                            value=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValueOperator", [], "method", false, false, false, 131), "value", [], "any", false, false, false, 131), "html", null, true);
                yield "\"
                            data-glpi-conditions-editor-value-operator
                        />
                        ";
                // line 134
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValue", [], "method", false, false, false, 134))) {
                    // line 135
                    yield "                            ";
                    $context["original_loop_index"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 135);
                    // line 136
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValue", [], "method", false, false, false, 136));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 137
                        yield "                                <input
                                    type=\"hidden\"
                                    name=\"_conditions[";
                        // line 139
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["original_loop_index"] ?? null), "html", null, true);
                        yield "][value][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "]\"
                                    value=\"";
                        // line 140
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\"
                                    data-glpi-conditions-editor-value
                                />
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 144
                    yield "                        ";
                } else {
                    // line 145
                    yield "                            <input
                                type=\"hidden\"
                                name=\"_conditions[";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 147), "html", null, true);
                    yield "][value]\"
                                value=\"";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "getValue", [], "method", false, false, false, 148), "html", null, true);
                    yield "\"
                                data-glpi-conditions-editor-value
                            />
                        ";
                }
                // line 152
                yield "                    </div>
                ";
            }
            // line 154
            yield "            ";
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
        // line 155
        yield "        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/condition_configuration.html.twig";
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
        return array (  354 => 155,  340 => 154,  336 => 152,  329 => 148,  325 => 147,  321 => 145,  318 => 144,  308 => 140,  302 => 139,  298 => 137,  293 => 136,  290 => 135,  288 => 134,  282 => 131,  278 => 130,  270 => 125,  266 => 124,  258 => 119,  254 => 118,  246 => 113,  242 => 112,  238 => 110,  231 => 106,  227 => 105,  223 => 103,  221 => 102,  218 => 101,  215 => 100,  197 => 99,  188 => 91,  185 => 89,  179 => 88,  173 => 86,  170 => 85,  166 => 84,  160 => 81,  157 => 80,  154 => 79,  152 => 78,  148 => 76,  139 => 73,  135 => 72,  130 => 70,  126 => 69,  121 => 67,  115 => 63,  113 => 62,  108 => 59,  106 => 58,  100 => 55,  96 => 54,  90 => 51,  87 => 50,  84 => 49,  79 => 48,  74 => 44,  63 => 43,  60 => 42,  58 => 41,  55 => 39,  53 => 38,  51 => 37,  48 => 35,  46 => 34,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/condition_configuration.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/condition_configuration.html.twig");
    }
}
