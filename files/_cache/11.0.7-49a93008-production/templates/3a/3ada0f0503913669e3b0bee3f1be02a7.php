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

/* __string_template__4ce4dddffaed1bd4425c58216be35347 */
class __TwigTemplate_6ff66c12ef738f53a48bb18664b7cebf extends Template
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
        // line 1
        yield "        ";
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 2
        yield "
        ";
        // line 60
        yield "
        <template>
            ";
        // line 62
        yield $this->getTemplateForMacro("macro_addOption", $context, 62, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), false, "", ($context["translations"] ?? null), null, null, true, true, ($context["hide_default_value_input"] ?? null), ($context["extra_input_attributes"] ?? null)]);
        yield "
        </template>

        <div class=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selectable_question_options_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["selectable_question_options_class"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"default_value[]\" value=\"\">
            <div
                data-glpi-form-editor-selectable-question-options=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                ";
        // line 69
        yield (((($tmp = ($context["hide_container_when_unfocused"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("data-glpi-form-editor-question-extra-details") : (""));
        yield "
            >
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["values"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 72
            yield "                    ";
            yield $this->getTemplateForMacro("macro_addOption", $context, 72, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "checked", [], "any", false, false, false, 72), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 72), ($context["translations"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["value"], "uuid", [], "any", false, false, false, 72), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 72), false, false, ($context["hide_default_value_input"] ?? null), ($context["extra_input_attributes"] ?? null)]);
            yield "
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
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "            </div>

            ";
        // line 76
        yield $this->getTemplateForMacro("macro_addOption", $context, 76, $this->getSourceContext())->macro_addOption(...[($context["input_type"] ?? null), false, "", ($context["translations"] ?? null), null, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["values"] ?? null)), true, true, ($context["hide_default_value_input"] ?? null), ($context["extra_input_attributes"] ?? null)]);
        yield "
        </div>

        <script>
            // TODO: avoid this, the script should probably run in a dedicated method that the framework can call at
            // the right time.
            \$(\"[data-glpi-form-editor-container]\").on('initialized', () => {
                            import(\"/js/modules/Forms/QuestionSelectable.js\").then((m) => {
                ";
        // line 84
        if ((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                    const container = \$('div[data-glpi-form-editor-selectable-question-options=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"]');
                    container.data(
                        'manager',
                        new m.GlpiFormQuestionTypeSelectable('";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container)
                    );
                ";
        } else {
            // line 91
            yield "                    \$(document).on('glpi-form-editor-question-type-changed', function(e, question, type) {
                        if (type === '";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["question_type"] ?? null), "js"), "html", null, true);
            yield "') {
                            const container = question.find('div[data-glpi-form-editor-selectable-question-options]');
                            container.data(
                                'manager',
                                new m.GlpiFormQuestionTypeSelectable('";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container, true)
                            );
                        }
                    });

                    \$(document).on('glpi-form-editor-question-duplicated', function(e, question, new_question) {
                        const question_type = question.find('input[data-glpi-form-editor-original-name=\"type\"]').val();
                        if (question_type === '";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["question_type"] ?? null), "js"), "html", null, true);
            yield "') {
                            const container = new_question.find('div[data-glpi-form-editor-selectable-question-options]');
                            container.data(
                                'manager',
                                new m.GlpiFormQuestionTypeSelectable('";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "js"), "html", null, true);
            yield "', container, true)
                            );
                        }
                    });
                ";
        }
        // line 112
        yield "
                // The module above will trigger some input changes, we need
                // to reset the global unsaved form state after this.
                window.setHasUnsavedChanges(false);
            });
            });
        </script>";
        yield from [];
    }

    // line 3
    public function macro_addOption($input_type = null, $checked = null, $value = null, $translations = null, $uuid = null, $order = null, $extra_details = false, $disabled = false, $hide_default_value_input = false, $extra_input_attributes = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "input_type" => $input_type,
            "checked" => $checked,
            "value" => $value,
            "translations" => $translations,
            "uuid" => $uuid,
            "order" => $order,
            "extra_details" => $extra_details,
            "disabled" => $disabled,
            "hide_default_value_input" => $hide_default_value_input,
            "extra_input_attributes" => $extra_input_attributes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "            ";
            if ((null === ($context["uuid"] ?? null))) {
                // line 5
                yield "                ";
                $context["uuid"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                // line 6
                yield "            ";
            }
            // line 7
            yield "
            <div
                class=\"d-flex gap-1 align-items-center mb-2\"
                data-glpi-form-selectable-question-option
                ";
            // line 11
            yield (((($tmp = ($context["extra_details"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("data-glpi-form-editor-question-extra-details") : (""));
            yield "
            >
                <i
                    role=\"button\"
                    aria-label=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "move_option", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-handle
                    class=\"ti ti-grip-horizontal cursor-grab ms-auto me-1\"
                    style=\"";
            // line 19
            yield (((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("visibility: hidden;") : (""));
            yield "\"
                    draggable=\"true\"
                ></i>
                <input
                    type=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "html", null, true);
            yield "\"
                    name=\"default_value[]\"
                    value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uuid"] ?? null), "html", null, true);
            yield "\"
                    class=\"form-check-input ";
            // line 26
            yield (((($tmp = ($context["hide_default_value_input"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\"
                    aria-label=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "default_option", [], "any", false, false, false, 27), "html", null, true);
            yield "\"
                    ";
            // line 28
            yield (((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield "
                    ";
            // line 29
            yield (((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
                    ";
            // line 30
            yield Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, ($context["extra_input_attributes"] ?? null), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return ((($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] ?? null)) . "=\"") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null))) . "\""); }), " ");
            yield "
                >
                <input
                    data-glpi-form-editor-specific-question-extra-data
                    type=\"text\"
                    class=\"flex-grow-1 w-full\"
                    style=\"border: none transparent; outline: none; box-shadow: none;\"
                    name=\"options[";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uuid"] ?? null), "html", null, true);
            yield "]\"
                    value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
                    placeholder=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "enter_option", [], "any", false, false, false, 39), "html", null, true);
            yield "\"
                    aria-label=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "selectable_option", [], "any", false, false, false, 40), "html", null, true);
            yield "\"
                >
                <input
                    type=\"hidden\"
                    name=\"options_order[";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["uuid"] ?? null), "html", null, true);
            yield "]\"
                    value=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["order"] ?? null), "html", null, true);
            yield "\"
                    data-glpi-form-editor-specific-question-extra-data
                    data-glpi-form-editor-question-option-order
                >
                <button
                    type=\"button\"
                    class=\"btn btn-sm btn-icon btn-ghost-secondary ";
            // line 51
            yield (((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
            yield "\"
                    aria-label=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), "remove_option", [], "any", false, false, false, 52), "html", null, true);
            yield "\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-question-option-remove
                >
                    <i class=\"ti ti-x\"></i>
                </button>
            </div>
        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__4ce4dddffaed1bd4425c58216be35347";
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
        return array (  311 => 52,  307 => 51,  298 => 45,  294 => 44,  287 => 40,  283 => 39,  279 => 38,  275 => 37,  265 => 30,  261 => 29,  257 => 28,  253 => 27,  249 => 26,  245 => 25,  240 => 23,  233 => 19,  226 => 15,  219 => 11,  213 => 7,  210 => 6,  207 => 5,  204 => 4,  183 => 3,  172 => 112,  164 => 107,  157 => 103,  147 => 96,  140 => 92,  137 => 91,  131 => 88,  124 => 85,  122 => 84,  111 => 76,  107 => 74,  90 => 72,  73 => 71,  68 => 69,  64 => 68,  58 => 65,  52 => 62,  48 => 60,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__4ce4dddffaed1bd4425c58216be35347", "");
    }
}
