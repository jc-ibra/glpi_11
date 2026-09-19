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

/* pages/setup/calendarsegment.html.twig */
class __TwigTemplate_26930102c53c77c7491eef5936a45746 extends Template
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
            'fields' => [$this, 'block_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 35)->unwrap();
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "        ";
        $context["field_params"] = ["field_class" => "col-12 col-sm-4"];
        // line 41
        yield "        ";
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 41, $this->getSourceContext())->macro_hidden(...["calendars_id", ($context["calendars_id"] ?? null)]);
        yield "
        ";
        // line 42
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 42, $this->getSourceContext())->macro_dropdownArrayField(...["day", null, ($context["days_of_week"] ?? null), _n("Day", "Days", 1), ($context["field_params"] ?? null)]);
        yield "
        ";
        // line 43
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownHoursField", $context, 43, $this->getSourceContext())->macro_dropdownHoursField(...["begin", ($context["begin"] ?? null), __("Start"), ($context["field_params"] ?? null)]);
        yield "
        ";
        // line 44
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownHoursField", $context, 44, $this->getSourceContext())->macro_dropdownHoursField(...["end", ($context["end"] ?? null), __("End"), ($context["field_params"] ?? null)]);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/calendarsegment.html.twig";
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
        return array (  92 => 44,  88 => 43,  84 => 42,  79 => 41,  76 => 38,  64 => 37,  57 => 36,  52 => 33,  50 => 35,  48 => 34,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/calendarsegment.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/calendarsegment.html.twig");
    }
}
