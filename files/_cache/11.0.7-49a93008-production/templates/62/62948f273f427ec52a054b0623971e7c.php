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

/* @fields/forms/tab_container.html.twig */
class __TwigTemplate_44fac53aed2051bb42945cc1f2521cd7 extends Template
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
        // line 28
        yield "
<div class=\"card-body d-flex flex-wrap\">
    <div class=\"col-12 col-xxl-12 flex-column\">
        <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\" style=\"min-width: 0;\">
                <div class=\"row flex-row\">

                    ";
        // line 35
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                        <form method='POST' class='mt-5' action='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/plugins/fields/front/container.form.php"), "html", null, true);
            yield " '>
                            <input type=\"hidden\" name=\"plugin_fields_containers_id\" value=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["c_id"] ?? null), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 38), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 39), "html", null, true);
            yield "\">
                    ";
        }
        // line 41
        yield "
                    ";
        // line 42
        yield ($context["html_fields"] ?? null);
        yield "

                    ";
        // line 44
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
                            <div class=\"card-body mt-3 mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
                                <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update_fields_values\" value=\"1\">
                                    <i class=\"ti ti-device-floppy\"></i>
                                    <span>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
                                </button>
                            </div>
                        </form>
                    ";
        }
        // line 54
        yield "                </div>
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
        return "@fields/forms/tab_container.html.twig";
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
        return array (  97 => 54,  89 => 49,  81 => 45,  79 => 44,  74 => 42,  71 => 41,  66 => 39,  62 => 38,  58 => 37,  53 => 36,  51 => 35,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fields/forms/tab_container.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/marketplace/fields/templates/forms/tab_container.html.twig");
    }
}
