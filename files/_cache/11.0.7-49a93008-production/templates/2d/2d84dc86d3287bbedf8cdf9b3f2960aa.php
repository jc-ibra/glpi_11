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

/* pages/admin/form/form_destination_actions.html.twig */
class __TwigTemplate_7caba6a397d8d71ec899e4365038ba1b extends Template
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
<div class=\"d-flex flex-row-reverse align-items-center justify-content-between\">
    <div class=\"d-flex flex-row-reverse\">
        <button
            class=\"btn btn-primary ms-2\"
            name=\"update\"
            type=\"submit\"
            aria-label=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update item"), "html", null, true);
        yield "\"
            formaction=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(Twig\Extension\CoreExtension::sprintf("/Form/%d/Destination/%d/Update", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getID", [], "method", false, false, false, 40))), "html", null, true);
        yield "\"
            formmethod=\"post\"
        >
            <i class=\"ti ti-device-floppy me-2\"></i>
            ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update item"), "html", null, true);
        yield "
        </button>
        ";
        // line 46
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "canPurgeItem", [], "method", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "            <button
                class=\"btn btn-ghost-danger\"
                name=\"purge\"
                type=\"submit\"
                formaction=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(Twig\Extension\CoreExtension::sprintf("/Form/%d/Destination/%d/Purge", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 51), CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getID", [], "method", false, false, false, 51))), "html", null, true);
            yield "\"
                formmethod=\"post\"
            >
                <i class=\"ti ti-trash me-2\"></i>
                ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 58
        yield "        <button
            class=\"btn btn-ghost-secondary me-1\"
            name=\"duplicate\"
            type=\"submit\"
            formaction=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(Twig\Extension\CoreExtension::sprintf("/Form/%d/Destination/Add", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 62))), "html", null, true);
        yield "\"
            formmethod=\"post\"
        >
            <i class=\"ti ti-copy me-2\"></i>
            ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate"), "html", null, true);
        yield "
        </button>
    </div>
    <div>
        <button
            title=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure creation conditions"), "html", null, true);
        yield "\"
            data-bs-toggle=\"dropdown\"
            data-bs-auto-close=\"outside\"
            class=\"relative btn btn-outline-secondary btn-sm px-2\"
            data-bs-placement=\"top\"
            type=\"button\"
        >
            ";
        // line 78
        $context["selected_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getConfiguredCreationStrategy", [], "method", false, false, false, 78);
        // line 79
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Glpi\Form\Condition\CreationStrategy::cases());
        foreach ($context['_seq'] as $context["_key"] => $context["strategy"]) {
            // line 80
            yield "                ";
            $context["is_visible"] = (($context["selected_strategy"] ?? null) == $context["strategy"]);
            // line 81
            yield "                ";
            $context["display_class"] = (((($tmp = ($context["is_visible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : ("d-none"));
            // line 82
            yield "                <div
                    class=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["display_class"] ?? null), "html", null, true);
            yield " align-items-center\"
                    data-glpi-editor-condition-badge=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "value", [], "any", false, false, false, 84), "html", null, true);
            yield "\"
                >
                    <i class=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getIcon", [], "method", false, false, false, 86), "html", null, true);
            yield " me-1\"></i>
                    <span>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["strategy"], "getLabel", [], "method", false, false, false, 87), "html", null, true);
            yield "</span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['strategy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "
            ";
        // line 91
        $context["conditions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["destination"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 91);
        // line 92
        yield "            <span
                class=\"badge text-bg-secondary ms-1\"
                data-glpi-editor-conditions-count-badge
                role=\"status\"
                aria-label=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditions count"), "html", null, true);
        yield "\"
            >
                ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["conditions"] ?? null)), "html", null, true);
        yield "
            </span>
        </button>
        <div
            class=\"dropdown-menu dropdown-menu-end dropdown-menu-card animate__animated animate__zoomIn\"
            data-select2-dont-use-as-parent
        >
            <div class=\"card visibility-dropdown-card\" data-glpi-form-editor-on-click=\"stop-propagation\">
                <div class=\"card-body\">
                    <h3 class=\"card-title d-flex align-items-center\">
                        <i class=\"ti ti-circuit-changeover me-2\"></i>
                        ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Conditions"), "html", null, true);
        yield "
                    </h3>

                    ";
        // line 112
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/destination_visibility_conditions_configuration.html.twig", ["destination" =>         // line 115
($context["destination"] ?? null), "form" =>         // line 116
($context["form"] ?? null)], false);
        // line 119
        yield "
                </div>
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
        return "pages/admin/form/form_destination_actions.html.twig";
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
        return array (  197 => 119,  195 => 116,  194 => 115,  193 => 112,  187 => 109,  173 => 98,  168 => 96,  162 => 92,  160 => 91,  157 => 90,  148 => 87,  144 => 86,  139 => 84,  135 => 83,  132 => 82,  129 => 81,  126 => 80,  121 => 79,  119 => 78,  109 => 71,  101 => 66,  94 => 62,  88 => 58,  82 => 55,  75 => 51,  69 => 47,  67 => 46,  62 => 44,  55 => 40,  51 => 39,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_destination_actions.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/form/form_destination_actions.html.twig");
    }
}
