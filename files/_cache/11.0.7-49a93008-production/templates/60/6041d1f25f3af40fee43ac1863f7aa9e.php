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

/* pages/admin/external_page_tile_config_fields.html.twig */
class __TwigTemplate_5600f809a970388398cc0b91fff5ac04 extends Template
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
";
        // line 35
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 35, $this->getSourceContext())->macro_textField(...["title", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["tile"] ?? null), "fields", [], "any", false, true, false, 35), "title", [], "array", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["tile"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["title"] ?? null) : null), "")) : ("")), __("Title"), ["full_width" => true, "is_horizontal" => false, "maxlength" => 255]]);
        // line 39
        yield "

";
        // line 41
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 41, $this->getSourceContext())->macro_textareaField(...["description", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["tile"] ?? null), "fields", [], "any", false, true, false, 43), "description", [], "array", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["tile"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["description"] ?? null) : null), "")) : ("")), __("Description"), ["full_width" => true, "is_horizontal" => false, "enable_richtext" => true, "plugins_to_remove" => ["link", "autolink"]]]);
        // line 50
        yield "

";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_illustrationField", $context, 52, $this->getSourceContext())->macro_illustrationField(...["illustration", CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["tile"] ?? null), "getIllustration", [], "method", false, false, false, 54), __("Illustration"), ["is_horizontal" => false, "full_width" => true, "backdrop" => false, "extra_css_classes" => "illustration-selector-extra-margin"]]);
        // line 62
        yield "

";
        // line 64
        yield $macros["fields"]->getTemplateForMacro("macro_urlField", $context, 64, $this->getSourceContext())->macro_urlField(...["url", CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["tile"] ?? null), "getTileUrl", [], "method", false, false, false, 66), __("Target url"), ["full_width" => true, "is_horizontal" => false]]);
        // line 72
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/external_page_tile_config_fields.html.twig";
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
        return array (  73 => 72,  71 => 66,  70 => 64,  66 => 62,  64 => 54,  63 => 52,  59 => 50,  57 => 43,  56 => 41,  52 => 39,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/external_page_tile_config_fields.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/external_page_tile_config_fields.html.twig");
    }
}
