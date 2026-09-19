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

/* pages/admin/form/submit_button_conditional_visibility_dropdown.html.twig */
class __TwigTemplate_11b2dd5d845fdfd5b26f97bb7401e38d extends Template
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
            $context["submit_button_strategy"] = CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\VisibilityStrategy::ALWAYS_VISIBLE, "ALWAYS_VISIBLE", [], "any", false, false, false, 37);
        } else {
            // line 39
            $context["submit_button_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfiguredVisibilityStrategy", [], "method", false, false, false, 39);
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
        data-glpi-form-editor-visibility-dropdown-container
        class=\"btn-group pe-0\"
    >
        <button
            title=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "\"
            data-bs-toggle=\"dropdown\"
            data-bs-auto-close=\"outside\"
            class=\"dropdown-toggle btn btn-outline-secondary px-2\"
            data-bs-placement=\"top\"
            type=\"button\"
            data-glpi-form-editor-visibility-dropdown
        >
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Glpi\Form\Condition\VisibilityStrategy::cases());
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 57
            yield "                ";
            $context["is_visible"] = (($context["submit_button_strategy"] ?? null) == $context["strategy"]);
            // line 58
            yield "                ";
            $context["display_class"] = (((($tmp = ($context["is_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : ("d-none"));
            // line 59
            yield "                <div
                    class=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["display_class"] ?? null), "html", null, true);
            yield " align-items-center\"
                    data-glpi-editor-visibility-badge=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 61), "html", null, true);
            yield "\"
                    data-testid=\"active-visibility-setting\"
                >
                    <i class=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getIcon", [], "method", false, false, false, 64), "html", null, true);
            yield " me-1\"></i>
                    <span>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 65), "html", null, true);
            yield "</span>
                    <span
                        class=\"badge text-bg-secondary ms-1\"
                        data-glpi-editor-visibility-conditions-count-badge
                        role=\"status\"
                        aria-label=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditions count"), "html", null, true);
            yield "\"
                    >
                        ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 72)), "html", null, true);
            yield "
                    </span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "        </button>
        <div
            class=\"dropdown-menu dropdown-menu-end dropdown-menu-card animate__animated animate__zoomIn\"
        >
            <div class=\"card visibility-dropdown-card\" data-glpi-form-editor-on-click=\"stop-propagation\">
                <div class=\"card-body\">
                    <h3 class=\"card-title d-flex align-items-center\">
                        <i class=\"ti ti-circuit-changeover me-2\"></i>
                        ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditional visibility"), "html", null, true);
        yield "
                    </h3>

                    ";
        // line 88
        yield "                    ";
        $context["strategies"] = "Glpi\\Form\\Condition\\VisibilityStrategy";
        // line 89
        yield "                    ";
        $context["selected_strategy"] = ($context["submit_button_strategy"] ?? null);
        // line 90
        yield "                    ";
        $context["strategy_input_name"] = "submit_button_visibility_strategy";
        // line 91
        yield "                    ";
        $context["conditions"] = (((($tmp =  !(null === ($context["item"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 91)) : ([]));
        // line 92
        yield "                    ";
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
        return "pages/admin/form/submit_button_conditional_visibility_dropdown.html.twig";
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
        return array (  163 => 92,  160 => 91,  157 => 90,  154 => 89,  151 => 88,  145 => 84,  135 => 76,  125 => 72,  120 => 70,  112 => 65,  108 => 64,  102 => 61,  98 => 60,  95 => 59,  92 => 58,  89 => 57,  85 => 56,  74 => 48,  67 => 43,  60 => 42,  55 => 33,  52 => 39,  49 => 37,  47 => 36,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/submit_button_conditional_visibility_dropdown.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/submit_button_conditional_visibility_dropdown.html.twig");
    }
}
