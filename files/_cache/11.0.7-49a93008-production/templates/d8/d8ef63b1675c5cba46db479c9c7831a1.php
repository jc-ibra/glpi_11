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

/* pages/admin/form/import/step4_execute.html.twig */
class __TwigTemplate_93e8bdfecfe2f1f266b4f95ad5dd1d83 extends Template
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
            'content_title' => [$this, 'block_content_title'],
            'content_body' => [$this, 'block_content_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "layout/page_without_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["container_size"] = "narrow";
        // line 33
        $this->parent = $this->load("layout/page_without_tabs.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import forms"), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    <div class=\"card\">
        <div class=\"card-header py-3 px-4\">
            <h3 class=\"card-title\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import results"), "html", null, true);
        yield "</h3>
        </div>
        <table class=\"table table-card mb-0\">
            <thead>
                <tr>
                    <th class=\"w-70 px-4\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Form\\Form"), "html", null, true);
        yield "</th>
                    <th class=\"w-30 px-4\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["results"] ?? null), "getImportedForms", [], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 55
            yield "                    <tr>
                        <td class=\"w-70 px-4\">";
            // line 56
            yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink($context["form"]);
            yield "</td>
                        <td class=\"w-30 px-4\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"ti ti-check text-success me-2\"></i>
                                <span>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Imported"), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['form'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["results"] ?? null), "getFailedFormImports", [], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["forms_name"] => $context["error"]) {
            // line 66
            yield "                    <tr>
                        <td class=\"w-70 px-4\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["forms_name"], "html", null, true);
            yield "</td>
                        <td class=\"w-30 px-4\">
                        <div class=\"d-flex align-items-center\">
                                <i class=\"ti ti-x text-danger me-2\"></i>
                                <span>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not imported"), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['forms_name'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "            </tbody>
        </table>
    </div>

    <div class=\"row mt-3\">
        <div class=\"col\">
            <div class=\"justify-content-end d-flex\">
                <a href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Form/Import"), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                    ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import another file"), "html", null, true);
        yield "
                </a>
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
        return "pages/admin/form/import/step4_execute.html.twig";
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
        return array (  164 => 84,  160 => 83,  151 => 76,  140 => 71,  133 => 67,  130 => 66,  125 => 65,  114 => 60,  107 => 56,  104 => 55,  100 => 54,  93 => 50,  89 => 49,  81 => 44,  77 => 42,  70 => 41,  62 => 38,  55 => 37,  50 => 33,  48 => 35,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/import/step4_execute.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/import/step4_execute.html.twig");
    }
}
