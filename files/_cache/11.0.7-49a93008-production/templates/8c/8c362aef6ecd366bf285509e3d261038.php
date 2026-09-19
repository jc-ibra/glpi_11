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

/* pages/setup/notification/translation_debug.html.twig */
class __TwigTemplate_df5371010a464a836e140278b8d8e107 extends Template
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
<div class=\"asset\">
    ";
        // line 36
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 36, $this->getSourceContext())->macro_largeTitle(...[__("Preview")]);
        yield "

    ";
        // line 38
        if ((($tmp = ($context["can_preview"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "        <div class=\"d-flex\">
            ";
            // line 40
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 40, $this->getSourceContext())->macro_dropdownField(...[(($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["template"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["itemtype"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey((($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["template"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["itemtype"] ?? null) : null)), Session::getSavedOption("NotificationTemplateTranslation", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey((($_v2 = CoreExtension::getAttribute($this->env, $this->source,             // line 43
($context["template"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["itemtype"] ?? null) : null)), 0), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v3 = CoreExtension::getAttribute($this->env, $this->source,             // line 44
($context["template"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["itemtype"] ?? null) : null)), ["field_class" => "col-6", "on_change" => (("reloadTab(\"" . $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey((($_v4 = CoreExtension::getAttribute($this->env, $this->source,             // line 47
($context["template"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["itemtype"] ?? null) : null))) . "=\"+this.value)")]]);
            // line 49
            yield "

            ";
            // line 51
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 51, $this->getSourceContext())->macro_htmlField(...["", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("NotificationEvent::dropdownEvents", [(($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["itemtype"] ?? null) : null), ["value" => Session::getSavedOption("NotificationTemplateTranslation", ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey((($_v6 = CoreExtension::getAttribute($this->env, $this->source,             // line 52
($context["template"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["itemtype"] ?? null) : null)) . "_event"), ""), "on_change" => (("reloadTab(\"" . $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey((($_v7 = CoreExtension::getAttribute($this->env, $this->source,             // line 53
($context["template"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["itemtype"] ?? null) : null))) . "_event=\"+this.value)"), "display" => false]]), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("NotificationEvent", 1), ["field_class" => "col-6"]]);
            // line 57
            yield "
        </div>
    ";
        } else {
            // line 60
            yield "        <div class=\"alert alert-info d-flex align-items-center m-0\" role=\"alert\">
            <i class=\"ti ti-info-circle me-1\"></i>
            ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("The preview is not available for the notifications related to %s."), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["itemtype"] ?? null) : null), Session::getPluralNumber())), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 65
        yield "
    ";
        // line 66
        if ((($tmp =  !(null === ($context["data"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "        <table class=\"table table-borderless\">
            <tbody>
                <tr>
                    <th colspan=\"2\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Subject"), "html", null, true);
            yield "</th>
                </tr>
                <tr>
                    <td colspan=\"2\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["data"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["subject"] ?? null) : null), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <th>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email text body"), "html", null, true);
            yield "</th>
                    <th>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email HTML body"), "html", null, true);
            yield "</th>
                </tr>
                <tr>
                    <td>";
            // line 80
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["data"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["content_text"] ?? null) : null), "html", null, true));
            yield "</td>
                    <td>";
            // line 81
            yield (($_v11 = ($context["data"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["content_html"] ?? null) : null);
            yield "</td>
                </tr>
            </tbody>
        </table>
    ";
        }
        // line 86
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/notification/translation_debug.html.twig";
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
        return array (  135 => 86,  127 => 81,  123 => 80,  117 => 77,  113 => 76,  107 => 73,  101 => 70,  96 => 67,  94 => 66,  91 => 65,  85 => 62,  81 => 60,  76 => 57,  74 => 53,  73 => 52,  72 => 51,  68 => 49,  66 => 47,  65 => 44,  64 => 43,  63 => 42,  62 => 41,  61 => 40,  58 => 39,  56 => 38,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/notification/translation_debug.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/notification/translation_debug.html.twig");
    }
}
