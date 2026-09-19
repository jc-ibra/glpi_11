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

/* pages/setup/externallink.html.twig */
class __TwigTemplate_3dbef8dee4b5550a3908fb0ad83bf1af extends Template
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
            'form_fields' => [$this, 'block_form_fields'],
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
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 37, $this->getSourceContext())->macro_textField(...["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name"), ["full_width" => true]]);
        // line 39
        yield "
    ";
        // line 40
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 40, $this->getSourceContext())->macro_dropdownItemTypes(...["itemtypes", null, _n("Type", "Types", Session::getPluralNumber()), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("link_types"), "multiple" => true, "values" => CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["item"] ?? null), "getLinkedItemtypes", [], "any", false, false, false, 43), "full_width" => true]]);
        // line 45
        yield "
    ";
        // line 46
        yield $macros["fields"]->getTemplateForMacro("macro_codeField", $context, 46, $this->getSourceContext())->macro_codeField(...["link", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["link"] ?? null) : null), __("Link or filename"), ["single_line" => true, "language" => "twig", "completions" => ((        // line 49
array_key_exists("tag_options", $context)) ? (Twig\Extension\CoreExtension::default(($context["tag_options"] ?? null), [])) : ([])), "full_width" => true]]);
        // line 51
        yield "
    ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 52, $this->getSourceContext())->macro_dropdownYesNo(...["open_window", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["open_window"] ?? null) : null), __("Open in a new window"), ["full_width" => true]]);
        // line 54
        yield "
    ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_codeField", $context, 55, $this->getSourceContext())->macro_codeField(...["data", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["data"] ?? null) : null), __("File content"), ["language" => "twig", "completions" => ((        // line 57
array_key_exists("tag_options", $context)) ? (Twig\Extension\CoreExtension::default(($context["tag_options"] ?? null), [])) : ([])), "full_width" => true, "height" => "300px"]]);
        // line 60
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/externallink.html.twig";
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
        return array (  87 => 60,  85 => 57,  84 => 55,  81 => 54,  79 => 52,  76 => 51,  74 => 49,  73 => 46,  70 => 45,  68 => 43,  67 => 40,  64 => 39,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/externallink.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/externallink.html.twig");
    }
}
