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

/* pages/admin/form/move_section_modal.html.twig */
class __TwigTemplate_6cc8b78679ad4f15b1b692c05a143694 extends Template
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
        // line 34
        yield "<div
    data-glpi-form-editor-move-section-modal
    class=\"modal modal-blur fade\"
    aria-modal=\"true\"
    role=\"dialog\"
    aria-label=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reorganize sections"), "html", null, true);
        yield "\"
>
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reorganize sections"), "html", null, true);
        yield "</h3>
                <button
                    type=\"button\"
                    class=\"btn-close\"
                    data-bs-dismiss=\"modal\"
                    aria-label=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"
                ></button>
            </div>

            ";
        // line 54
        yield "            <div
                class=\"list-group list-group-flush\"
                data-glpi-form-editor-move-section-modal-items
            ></div>

            <div class=\"modal-footer\">
                <button
                    type=\"button\"
                    data-glpi-form-editor-on-click=\"reorder-sections\"
                    class=\"btn btn-primary\"
                >
                    ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </div>

    ";
        // line 72
        yield "    <div
        data-glpi-form-editor-move-section-modal-item-template
        data-glpi-draggable-item
    >
        <section
            class=\"list-group-item cursor-grab\"
            data-glpi-form-editor-move-section-modal-item-section-key=\"null\"
        >
            <div class=\"row align-items-center\" data-glpi-form-editor-section-handle>
                <div class=\"col-auto\">
                    <i
                        class=\"ti ti-grip-vertical\"
                        style=\"opacity: 0.6;\"
                    ></i>
                </div>
                <div
                    class=\"col text-truncate\"
                    data-glpi-form-editor-move-section-modal-item-section-name
                >
                </div>
            </div>
        </section>
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
        return "pages/admin/form/move_section_modal.html.twig";
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
        return array (  97 => 72,  88 => 65,  75 => 54,  68 => 49,  60 => 44,  52 => 39,  45 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/move_section_modal.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/move_section_modal.html.twig");
    }
}
