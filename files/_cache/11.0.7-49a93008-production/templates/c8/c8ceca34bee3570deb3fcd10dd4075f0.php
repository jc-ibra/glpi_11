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

/* pages/admin/form/conditional_validation_dropdown.html.twig */
class __TwigTemplate_07e99af55581d9a4757fa80ea1d538d6 extends Template
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
            'conditions_editor' => [$this, 'block_conditions_editor'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "pages/admin/form/condition_configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        if ((null === ($context["item"] ?? null))) {
            // line 37
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\ValidationStrategy::NO_VALIDATION, "NO_VALIDATION", [], "any", false, false, false, 37);
        } else {
            // line 39
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfiguredValidationStrategy", [], "method", false, false, false, 39);
        }
        // line 33
        $this->parent = $this->load("pages/admin/form/condition_configuration.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_conditions_editor(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "    <div
        data-glpi-form-editor-validation-dropdown-container
        data-glpi-form-editor-question-extra-details
        data-testid=\"validation-dropdown-container\"

        ";
        // line 48
        $context["hide"] = (($context["question_strategy"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\ValidationStrategy::NO_VALIDATION, "NO_VALIDATION", [], "any", false, false, false, 48));
        // line 49
        yield "        class=\"btn-group ms-1 ";
        yield (((($tmp = ($context["hide"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
        yield "\"
    >
        ";
        // line 52
        yield "        ";
        $context["strategies"] = "Glpi\\Form\\Condition\\ValidationStrategy";
        // line 53
        yield "        ";
        $context["selected_strategy"] = ($context["question_strategy"] ?? null);
        // line 54
        yield "        ";
        $context["strategy_input_name"] = "validation_strategy";
        // line 55
        yield "        ";
        $context["conditions"] = (((($tmp =  !(null === ($context["item"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfiguredValidationConditionsData", [], "method", false, false, false, 55)) : ([]));
        // line 56
        yield "
        <button
            title=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure validation"), "html", null, true);
        yield "\"
            data-bs-toggle=\"dropdown\"
            data-bs-auto-close=\"outside\"
            class=\"btn btn-outline-secondary btn-sm px-2\"
            data-bs-placement=\"top\"
            type=\"button\"
            data-glpi-form-editor-validation-dropdown
        >
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Glpi\Form\Condition\ValidationStrategy::cases());
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 67
            yield "                ";
            $context["is_visible"] = (($context["question_strategy"] ?? null) == $context["strategy"]);
            // line 68
            yield "                ";
            $context["display_class"] = (((($tmp = ($context["is_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : ("d-none"));
            // line 69
            yield "                <div
                    class=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["display_class"] ?? null), "html", null, true);
            yield " align-items-center\"
                    data-glpi-editor-validation-badge=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 71), "html", null, true);
            yield "\"
                >
                    <i class=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getIcon", [], "method", false, false, false, 73), "html", null, true);
            yield " me-1\"></i>
                    <span>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 74), "html", null, true);
            yield "</span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "
            <span
                class=\"badge text-bg-secondary ms-1\"
                data-glpi-editor-validation-conditions-count-badge
                role=\"status\"
                aria-label=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditions count"), "html", null, true);
        yield "\"
            >
                ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["conditions"] ?? null)), "html", null, true);
        yield "
            </span>
        </button>
        <div
            class=\"dropdown-menu dropdown-menu-end dropdown-menu-card animate__animated animate__zoomIn\"
        >
            <div class=\"card validation-dropdown-card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title d-flex align-items-center\">
                        <i class=\"ti ti-circuit-changeover me-2\"></i>
                        ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditional validation"), "html", null, true);
        yield "
                    </h3>

                    ";
        // line 97
        yield from $this->yieldParentBlock("conditions_editor", $context, $blocks);
        yield "
                </div>
            </div>
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
        return "pages/admin/form/conditional_validation_dropdown.html.twig";
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
        return array (  175 => 97,  169 => 94,  156 => 84,  151 => 82,  144 => 77,  135 => 74,  131 => 73,  126 => 71,  122 => 70,  119 => 69,  116 => 68,  113 => 67,  109 => 66,  98 => 58,  94 => 56,  91 => 55,  88 => 54,  85 => 53,  82 => 52,  76 => 49,  74 => 48,  67 => 43,  60 => 42,  55 => 33,  52 => 39,  49 => 37,  47 => 36,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/conditional_validation_dropdown.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/conditional_validation_dropdown.html.twig");
    }
}
