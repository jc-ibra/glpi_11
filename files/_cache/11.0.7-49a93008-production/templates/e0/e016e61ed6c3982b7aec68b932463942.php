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

/* __string_template__dafed3af9032baf56625709dfcb58fa0 */
class __TwigTemplate_40dfbbe587379d04590dc545473df615 extends Template
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
        // line 1
        yield "            ";
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 1)->unwrap();
        // line 2
        yield "            ";
        yield $macros["inputs"]->getTemplateForMacro("macro_date", $context, 2, $this->getSourceContext())->macro_date(...[CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 2), ($context["default_value"] ?? null), ["enableTime" => (        // line 3
($context["input_type"] ?? null) != "date"), "noCalendar" => (        // line 4
($context["input_type"] ?? null) == "time"), "container_addclass" => "w-50", "input_addclass" => "is-flatpicker"]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__dafed3af9032baf56625709dfcb58fa0";
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
        return array (  48 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__dafed3af9032baf56625709dfcb58fa0", "");
    }
}
