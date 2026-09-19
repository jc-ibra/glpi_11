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

/* pages/admin/form/service_catalog_tab.html.twig */
class __TwigTemplate_1192edcedf2a19c0c9f2206c61208f26 extends Template
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
<form method=\"POST\" action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 35), "html", null, true);
        yield "\" data-submit-once>
    <div class=\"py-2 px-3 container-narrow ms-0\">
        <h2 class=\"d-flex align-items-center\">
            <i class=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
        yield " me-2\"></i>
            ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Service catalog configuration"), "html", null, true);
        yield "
            ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["show_in_service_catalog"], "method", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                <label class=\"form-check mb-0 ms-auto form-switch\">
                    <input type=\"hidden\" value=\"0\" name=\"show_in_service_catalog\">
                    <input aria-label=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(" Active"), "html", null, true);
            yield "\" class=\"form-check-input\" type=\"checkbox\"
                        name=\"show_in_service_catalog\" value=\"1\"
                        onchange=\"\$('[data-service-catalog-config]').css({'opacity': this.checked ? 1 : 0.5, 'pointer-events': this.checked ? 'auto' : 'none'})\"
                        ";
            // line 46
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46), "show_in_service_catalog", [], "any", false, false, false, 46) == true)) ? ("checked") : (""));
            yield "
                    >
                </label>
            ";
        }
        // line 50
        yield "        </h2>
        <section data-service-catalog-config
            style=\"";
        // line 52
        yield (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 52), "show_in_service_catalog", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52), "show_in_service_catalog", [], "any", false, false, false, 52), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("opacity: 0.5; pointer-events: none;"));
        yield "\"
        >
            <div class=\"row\">
                <div class=\"col-lg-10 col-12\">
                    ";
        // line 56
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 56, $this->getSourceContext())->macro_textareaField(...["description", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["item"] ?? null), "fields", [], "any", false, false, false, 58), "description", [], "any", false, false, false, 58), __("Description"), ["is_horizontal" => false, "full_width" => true, "enable_richtext" => true, "enable_images" => false]]);
        // line 66
        yield "
                </div>

                <div class=\"col-lg-2 col-12\">
                    ";
        // line 70
        yield $macros["fields"]->getTemplateForMacro("macro_illustrationField", $context, 70, $this->getSourceContext())->macro_illustrationField(...["illustration", CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["item"] ?? null), "getServiceCatalogItemIllustration", [], "method", false, false, false, 72), __("Illustration"), ["is_horizontal" => false, "full_width" => true, "extra_css_classes" => "illustration-selector-extra-margin"]]);
        // line 79
        yield "
                </div>
            </div>

            ";
        // line 83
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 83, $this->getSourceContext())->macro_dropdownField(...["Glpi\\Form\\Category", "forms_categories_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 86
($context["item"] ?? null), "fields", [], "any", false, false, false, 86), "forms_categories_id", [], "any", false, false, false, 86), _n("Category", "Categories", 1), ["is_horizontal" => false, "full_width" => true]]);
        // line 92
        yield "

            <label class=\"col-form-label form-check form-switch mb-2\">
                <input type=\"hidden\" name=\"is_pinned\" value=\"0\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"is_pinned\" value=\"1\" ";
        // line 96
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 96), "is_pinned", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield ">
                <span class=\"form-check-label\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pin to top of the service catalog"), "html", null, true);
        yield "</span>
            </label>
        </section>

        ";
        // line 102
        yield "        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 103), "html", null, true);
        yield "\" />

        ";
        // line 106
        yield "        <div class=\"d-flex mt-4\">
            <button type=\"submit\" name=\"update\" class=\"btn btn-primary ms-auto\">
                <i class=\"ti ti-device-floppy me-1 \"></i>
                ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save changes"), "html", null, true);
        yield "
            </button>
        </div>
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/service_catalog_tab.html.twig";
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
        return array (  147 => 109,  142 => 106,  137 => 103,  132 => 102,  125 => 97,  121 => 96,  115 => 92,  113 => 86,  112 => 83,  106 => 79,  104 => 72,  103 => 70,  97 => 66,  95 => 58,  94 => 56,  87 => 52,  83 => 50,  76 => 46,  70 => 43,  66 => 41,  64 => 40,  60 => 39,  56 => 38,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/service_catalog_tab.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/service_catalog_tab.html.twig");
    }
}
