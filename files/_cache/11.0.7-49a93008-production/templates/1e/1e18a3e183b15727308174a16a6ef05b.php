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

/* components/illustration/custom_icon.html.twig */
class __TwigTemplate_64fdbf1b439e064cc71bf06792783b7e extends Template
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
<img
    ";
        // line 34
        if ((($context["url"] ?? null) && Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["url"] ?? null)))) {
            // line 35
            yield "        src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(($context["url"] ?? null)), "html", null, true);
            yield "\"
    ";
        }
        // line 37
        yield "    width=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["width"] ?? null), "html", null, true);
        yield "\"
    height=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["height"] ?? null), "html", null, true);
        yield "\"
    class=\"align-self-start max-width-unset\"
/>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/illustration/custom_icon.html.twig";
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
        return array (  59 => 38,  54 => 37,  48 => 35,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/illustration/custom_icon.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/components/illustration/custom_icon.html.twig");
    }
}
