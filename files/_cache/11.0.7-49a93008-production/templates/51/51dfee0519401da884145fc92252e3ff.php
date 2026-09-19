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

/* __string_template__57545d70bf9f96e863e4c6f12a2678ab */
class __TwigTemplate_0226380870c5405211fd7cafa501709f extends Template
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
        yield "        ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "
        <div data-glpi-form-editor-preview-dropdown>
            ";
        // line 4
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 4, $this->getSourceContext())->macro_dropdownArrayField(...["default_value", Twig\Extension\CoreExtension::first($this->env->getCharset(),         // line 6
($context["checked_values"] ?? null)),         // line 7
($context["values"] ?? null), "", ["init" =>         // line 10
($context["init"] ?? null), "no_label" => true, "multiple" => false, "disabled" =>         // line 13
($context["is_multiple_dropdown"] ?? null), "display_emptychoice" => true, "field_class" => ("single-preview-dropdown col-12" . (((($tmp =         // line 15
($context["is_multiple_dropdown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" d-none") : (""))), "mb" => "", "aria_label" =>         // line 17
($context["default_option_label"] ?? null)]]);
        // line 19
        yield "
            ";
        // line 20
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 20, $this->getSourceContext())->macro_dropdownArrayField(...["default_value", "",         // line 23
($context["values"] ?? null), "", ["init" =>         // line 26
($context["init"] ?? null), "no_label" => true, "multiple" => true, "disabled" =>  !        // line 29
($context["is_multiple_dropdown"] ?? null), "values" =>         // line 30
($context["checked_values"] ?? null), "field_class" => ("multiple-preview-dropdown col-12" . (((($tmp =  !        // line 31
($context["is_multiple_dropdown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" d-none") : (""))), "mb" => "", "aria_label" =>         // line 33
($context["default_options_label"] ?? null)]]);
        // line 35
        yield "
        </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__57545d70bf9f96e863e4c6f12a2678ab";
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
        return array (  68 => 35,  66 => 33,  65 => 31,  64 => 30,  63 => 29,  62 => 26,  61 => 23,  60 => 20,  57 => 19,  55 => 17,  54 => 15,  53 => 13,  52 => 10,  51 => 7,  50 => 6,  49 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__57545d70bf9f96e863e4c6f12a2678ab", "");
    }
}
