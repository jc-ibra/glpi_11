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

/* components/illustration/icon_picker_modal.html.twig */
class __TwigTemplate_fd9399318c0dea8b76a8e73dadc21301 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        $context["upload_an_icon_pane_id"] = ("upload-an-icon-pane-" . ($context["rand"] ?? null));
        // line 35
        $context["pick_an_icon_pane_id"] = ("pick-an-icon-pane-" . ($context["rand"] ?? null));
        // line 36
        yield "
<div
    id=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
    class=\"modal modal-lg modal-blur fade\"
    data-testid=\"illustration-picker-modal\"

    ";
        // line 43
        yield "    ";
        if ((($tmp =  !($context["backdrop"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        data-bs-backdrop=\"false\"
    ";
        }
        // line 46
        yield ">
    <div class=\"modal-dialog rounded\">
        <div class=\"modal-content\">
            <div class=\"px-4 pt-2\" role=\"tablist\">
                <div class=\"nav nav-underline\">
                    <div class=\"nav-item\">
                        <a
                            class=\"nav-link pointer active\"
                            role=\"tab\"
                            id=\"pick-an-icon-";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pick_an_icon_pane_id"] ?? null), "html", null, true);
        yield "\"
                            aria-controls=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pick_an_icon_pane_id"] ?? null), "html", null, true);
        yield "\"
                            aria-selected=\"true\"
                        >
                            <div class=\"d-flex align-items-center\">
                                <i class=\"ti ti-photo-scan fa-lg me-2\"></i>
                                ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pick an illustration"), "html", null, true);
        yield "
                            </div>
                        </a>
                    </div>
                    <div class=\"nav-item\">
                        <a
                            class=\"nav-link pointer\"
                            role=\"tab\"
                            id=\"upload-an-icon-";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["upload_an_icon_pane_id"] ?? null), "html", null, true);
        yield "\"
                            aria-controls=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["upload_an_icon_pane_id"] ?? null), "html", null, true);
        yield "\"
                            aria-selected=\"false\"
                        >
                            <div class=\"d-flex align-items-center\">
                                <i class=\"ti ti-file-upload fa-lg me-2\"></i>
                                ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload your own illustration"), "html", null, true);
        yield "
                            </div>
                        </a>
                    </div>
                    <button
                        type=\"button\"
                        class=\"btn-close ms-auto align-self-center\"
                        data-bs-dismiss=\"modal\"
                        aria-label=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"
                    ></button>
                </div>
            </div>
            <div class=\"modal-body tab-content\">
                <div id=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pick_an_icon_pane_id"] ?? null), "html", null, true);
        yield "\" class=\"tab-pane fade active show\" role=\"tabpanel\">
                    <div class=\"input-icon mb-3\">
                        <span class=\"input-icon-addon\">
                            <i
                                class=\"ti ti-search\"
                                data-glpi-icon-picker-filter-default-icon
                            ></i>
                            <span class=\"spinner-border spinner-border d-none\" role=\"status\" aria-hidden=\"true\" data-glpi-icon-picker-filter-loading-icon></span>
                        </span>
                        <input
                            type=\"text\"
                            value=\"\"
                            class=\"form-control\"
                            placeholder=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "html", null, true);
        yield "\"
                            aria-label=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "html", null, true);
        yield "\"
                            data-glpi-icon-picker-filter
                        />
                    </div>

                    ";
        // line 112
        yield "                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/illustration/icon_picker_search_results.html.twig", ["filter" => "", "page" => 1, "page_size" => 30], false);
        // line 116
        yield "
                </div>
                <div id=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["upload_an_icon_pane_id"] ?? null), "html", null, true);
        yield "\" class=\"tab-pane fade\" role=\"tabpanel\">
                    ";
        // line 119
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["name" => "custom_icon", "onlyimages" => true]]);
        // line 125
        yield "                    <div class=\"d-flex justify-content-end w-100 mt-3\">
                        <button
                            type=\"button\"
                            class=\"btn btn-primary\"
                            data-glpi-icon-picker-use-custom-file
                        >
                            ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use selected file"), "html", null, true);
        yield "
                        </button>
                    </div>
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
        return "components/illustration/icon_picker_modal.html.twig";
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
        return array (  193 => 131,  185 => 125,  183 => 119,  179 => 118,  175 => 116,  172 => 112,  164 => 106,  160 => 105,  144 => 92,  136 => 87,  125 => 79,  117 => 74,  113 => 73,  108 => 71,  97 => 63,  89 => 58,  85 => 57,  80 => 55,  69 => 46,  65 => 44,  62 => 43,  55 => 38,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/illustration/icon_picker_modal.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/components/illustration/icon_picker_modal.html.twig");
    }
}
