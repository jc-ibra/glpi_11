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

/* /pages/admin/form/condition_handler_templates/input.html.twig */
class __TwigTemplate_7b567ece158c2b070cfb61b5a2c8a77b extends Template
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
<input
    class=\"me-2 form-control value-selector flex-grow-1 min-width-200\"
    value=\"";
        // line 35
        yield ((is_array(($context["input_value"] ?? null))) ? ("") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_value"] ?? null), "html", null, true)));
        yield "\"
    name=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_name"] ?? null), "html", null, true);
        yield "\"
    placeholder=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("placeholder", $context)) ? (Twig\Extension\CoreExtension::default(($context["placeholder"] ?? null), __("Enter a value..."))) : (__("Enter a value..."))), "html", null, true);
        yield "\"
    data-glpi-conditions-editor-value
    aria-label=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_label"] ?? null), "html", null, true);
        yield "\"
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((array_key_exists("attributes", $context) &&  !(null === $context["attributes"]))) ? ($context["attributes"]) : ([])));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 41
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "/>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/pages/admin/form/condition_handler_templates/input.html.twig";
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
        return array (  79 => 43,  68 => 41,  64 => 40,  60 => 39,  55 => 37,  51 => 36,  47 => 35,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "/pages/admin/form/condition_handler_templates/input.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/form/condition_handler_templates/input.html.twig");
    }
}
