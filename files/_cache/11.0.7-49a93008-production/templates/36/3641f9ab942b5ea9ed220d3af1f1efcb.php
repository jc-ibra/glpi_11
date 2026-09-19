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

/* pages/setup/calendar_holiday.html.twig */
class __TwigTemplate_505fe2122ab732c9e63bfaf86bdf4000 extends Template
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
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 35)->unwrap();
        // line 36
        yield "
<div class=\"asset mb-3\">
    <form name=\"asset_form\" method=\"post\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Calendar_Holiday"), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" data-submit-once>
        <div class=\"d-flex flex-wrap\">
            <div class=\"col-12 col-xxl-12 flex-column\">
                <div class=\"row flex-row\">
                    ";
        // line 42
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 42, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
                    ";
        // line 43
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 43, $this->getSourceContext())->macro_hidden(...["calendars_id", CoreExtension::getAttribute($this->env, $this->source, ($context["calendar"] ?? null), "getID", [], "method", false, false, false, 43)]);
        yield "
                    ";
        // line 44
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 44, $this->getSourceContext())->macro_dropdownField(...["Holiday", "holidays_id", 0, __("Add a close time"), ["used" =>         // line 45
($context["used"] ?? null), "display_emptychoice" => false, "entity" => CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["calendar"] ?? null), "getEntityID", [], "method", false, false, false, 47)]]);
        // line 48
        yield "
                </div>
                <div class=\"d-flex flex-row-reverse\">
                    ";
        // line 51
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 51, $this->getSourceContext())->macro_submit(...["add", _x("button", "Add")]);
        yield "
                </div>
            </div>
        </div>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/calendar_holiday.html.twig";
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
        return array (  77 => 51,  72 => 48,  70 => 47,  69 => 45,  68 => 44,  64 => 43,  60 => 42,  53 => 38,  49 => 36,  47 => 35,  45 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/calendar_holiday.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/calendar_holiday.html.twig");
    }
}
