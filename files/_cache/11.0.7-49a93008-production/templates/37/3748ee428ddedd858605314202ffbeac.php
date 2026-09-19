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

/* pages/admin/helpdesk_home_config_add_tile_form.html.twig */
class __TwigTemplate_e545eebc8086b2b04d7e94c84e0276ce extends Template
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
<section class=\"container-narrow\" aria-labelledby=\"add-tile-header\">
    <form>
        ";
        // line 37
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 37, $this->getSourceContext())->macro_dropdownArrayField(...["_itemtype_tile", "",         // line 40
($context["possible_tiles_dropdown_values"] ?? null), _n("Type", "Types", 1), ["full_width" => true, "is_horizontal" => false, "display_emptychoice" => true, "add_data_attributes" => ["glpi-helpdesk-config-add-tile-type" => ""]]]);
        // line 48
        yield "

        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["possible_tiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tile"]) {
            // line 51
            yield "            <div
                class=\"d-none\"
                data-glpi-helpdesk-config-add-tile-form-for=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["tile"]), "html", null, true);
            yield "\"
            >
                ";
            // line 55
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["tile"], "getConfigFieldsTemplate", [], "method", false, false, false, 55), ["tile" => $context["tile"]], false);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tile'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />

        <div class=\"d-flex mt-4 mb-3\">
            <button
                type=\"button\"
                class=\"btn btn-primary ms-2 w-auto d-none align-items-center\"
                data-glpi-helpdesk-config-add-tile-submit
                aria-label=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add tile"), "html", null, true);
        yield "\"
            >
                <i
                    class=\"ti ti-plus me-1\"
                    data-glpi-helpdesk-config-add-tile-submit-plus-icon
                ></i>
                <i
                    class=\"ti ti-loader-2 fa-spin me-1 d-none\"
                    data-glpi-helpdesk-config-add-tile-submit-spinner-icon
                ></i>
                <span>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add tile"), "html", null, true);
        yield "</span>
            </button>
        </div>
    </form>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/helpdesk_home_config_add_tile_form.html.twig";
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
        return array (  107 => 76,  94 => 66,  84 => 59,  81 => 58,  72 => 55,  67 => 53,  63 => 51,  59 => 50,  55 => 48,  53 => 40,  52 => 37,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/helpdesk_home_config_add_tile_form.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/helpdesk_home_config_add_tile_form.html.twig");
    }
}
