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

/* pages/tools/item_project.html.twig */
class __TwigTemplate_f66fd670767f823871025468d9122744 extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Item_Project"), "html", null, true);
            yield "\">
    <div class=\"d-flex\">
        <div class=\"col-auto\">
        ";
            // line 40
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 40, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
            yield "
        ";
            // line 41
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Project")) {
                // line 42
                yield "            ";
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 42, $this->getSourceContext())->macro_hidden(...["projects_id", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 42)]);
                yield "
            ";
                // line 43
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 43, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...["items_id", "", ["field_class" => "d-flex", "width" => "auto", "mb" => "", "no_label" => true, "itemtypes" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("project_asset_types"), "used" =>                 // line 49
($context["used"] ?? null), "entity" => CoreExtension::getAttribute($this->env, $this->source,                 // line 50
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50), "entity_sons" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 51
($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))]]);
                // line 52
                yield "
        ";
            } else {
                // line 54
                yield "            ";
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 54, $this->getSourceContext())->macro_hidden(...["items_id", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 54)]);
                yield "
            ";
                // line 55
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 55, $this->getSourceContext())->macro_hidden(...["itemtype", get_class(($context["item"] ?? null))]);
                yield "
            ";
                // line 56
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Project", ["entity" => CoreExtension::getAttribute($this->env, $this->source,                 // line 57
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 57), "used" =>                 // line 58
($context["used"] ?? null)]);
                // line 59
                yield "
        ";
            }
            // line 61
            yield "        </div>
        <div class=\"col-auto\">
            ";
            // line 63
            yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 63, $this->getSourceContext())->macro_submit(...["add", _x("button", "Add"), 1, ["class" => "btn btn-primary ms-1", "icon" => "ti ti-link"]]);
            yield "
        </div>
    </div>
    </form>
";
        }
        // line 68
        yield "
";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/datatable.html.twig", ($context["datatable_params"] ?? null), false);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tools/item_project.html.twig";
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
        return array (  113 => 69,  110 => 68,  102 => 63,  98 => 61,  94 => 59,  92 => 58,  91 => 57,  90 => 56,  86 => 55,  81 => 54,  77 => 52,  75 => 51,  74 => 50,  73 => 49,  72 => 43,  67 => 42,  65 => 41,  61 => 40,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/item_project.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/tools/item_project.html.twig");
    }
}
