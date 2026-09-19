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

/* pages/admin/form/import/step1_index.html.twig */
class __TwigTemplate_d2d2879441700192332e8a7fd1291e31 extends Template
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
        yield "    <form
        method=\"POST\"
        action=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("Form/Import/Preview"), "html", null, true);
        yield "\"
        enctype=\"multipart/form-data\"
    >
        <div class=\"card\">
            <div class=\"card-body py-3 px-3\">
            <h3 id=\"select-files\" class=\"card-title mb-3 mt-0\">
                ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select your file"), "html", null, true);
        yield "
            </h3>
                <input
                    accept=\".json\"
                    aria-labelledby=\"select-files\"
                    class=\"form-control\"
                    type=\"file\"
                    name=\"import_file\"
                    required
                >
            </div>
        </div>

        <div class=\"row mt-3\">
            <div class=\"col\">
                <div class=\"justify-content-end d-flex\">
                    <button type=\"submit\" href=\"#\" class=\"btn btn-primary\">
                        ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview import"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>

        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/import/step1_index.html.twig";
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
        return array (  119 => 73,  110 => 67,  90 => 50,  81 => 44,  77 => 42,  70 => 41,  62 => 38,  55 => 37,  50 => 33,  48 => 35,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/import/step1_index.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/import/step1_index.html.twig");
    }
}
