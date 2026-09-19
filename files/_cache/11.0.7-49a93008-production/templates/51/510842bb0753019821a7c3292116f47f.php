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

/* pages/admin/form/form_translations.html.twig */
class __TwigTemplate_2f22fe171f71336951cbef87435ff7e8 extends Template
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
<section aria-label=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Form translation", "Form translations", Session::getPluralNumber()), "html", null, true);
        yield "\">
    <div class=\"mb-2\">
        <button
            type=\"button\"
            class=\"btn btn-primary\"
            data-bs-toggle=\"modal\"
            data-bs-target=\"#addLanguageModal\"
            aria-label=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add language"), "html", null, true);
        yield "\"
        >
            <i class=\"ti ti-plus me-1\"></i>
            ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add language"), "html", null, true);
        yield "
        </button>
    </div>

    <div class=\"card rounded\">
        ";
        // line 50
        yield from $this->load("components/datatable.html.twig", 50)->unwrap()->yield(CoreExtension::toArray(["datatable_id" => "glpi-form-translations-languages", "container_class" => "rounded", "columns" => ["language" => __("Language"), "translated" => __("Translated"), "translations_to_do" => __("Translations to do"), "translations_to_review" => __("Obsolete translations")], "formatters" => ["language" => "raw_html", "translated" => "progress"], "entries" => Twig\Extension\CoreExtension::map($this->env,         // line 63
($context["translations"] ?? null), function ($__translation__) use ($context, $macros) { $context["translation"] = $__translation__; return ["language" => Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_translation.html.twig", ["form" =>         // line 65
($context["item"] ?? null), "can_update" => true, "form_translation" =>         // line 67
($context["translation"] ?? null)]), "translated" => CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["translation"] ?? null), "getTranslatedPercentage", [], "method", false, false, false, 69), "translations_to_do" => CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["translation"] ?? null), "getTranslationsToDo", [], "method", false, false, false, 70), "translations_to_review" => CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["translation"] ?? null), "getTranslationsToReview", [], "method", false, false, false, 71)]; }), "total_number" => 1, "nofilter" => true]));
        // line 76
        yield "    </div>

    ";
        // line 79
        yield "    <div class=\"modal fade\" id=\"addLanguageModal\" tabindex=\"-1\" aria-labelledby=\"addLanguageModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form
                    action=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(Twig\Extension\CoreExtension::replace("/Form/Translation/{form_id}/Add", ["{form_id}" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getId", [], "method", false, false, false, 83)])), "html", null, true);
        yield "\"
                    method=\"POST\"
                    data-glpi-form-translations-add-language-container=\"\"
                >
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addLanguageModalLabel\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add language"), "html", null, true);
        yield "</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
                        ";
        // line 93
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 93, $this->getSourceContext())->macro_dropdownArrayField(...["language", __("Select language to translate"),         // line 96
($context["available_languages"] ?? null), "", ["display_emptychoice" => true, "emptylabel" => __("Select language to translate"), "aria_label" => __("Select language to translate"), "no_label" => true, "full_width" => true, "mb" => ""]]);
        // line 106
        yield "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                            ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "html", null, true);
        yield "
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary\" data-glpi-form-translations-add-language-button=\"\">
                            ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
        yield "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    \$(function() {
        // Check if we need to open a translation modal on page load
        // First check URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const openTranslation = urlParams.get('open_translation');

        if (openTranslation) {
            // Open the modal for the specified language
            \$(`#form-translation-modal-\${openTranslation}`).modal('show');
        }
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_translations.html.twig";
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
        return array (  129 => 113,  123 => 110,  117 => 106,  115 => 96,  114 => 93,  110 => 92,  104 => 89,  100 => 88,  92 => 83,  86 => 79,  82 => 76,  80 => 71,  79 => 70,  78 => 69,  77 => 67,  76 => 65,  75 => 63,  74 => 50,  66 => 45,  60 => 42,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_translations.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/form/form_translations.html.twig");
    }
}
