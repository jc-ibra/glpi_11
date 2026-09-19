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

/* pages/setup/notification/translation.html.twig */
class __TwigTemplate_87dd426fd6182b9ec3b5c7531604028a extends Template
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
        // line 35
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 35)->unwrap();
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "   ";
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 38, $this->getSourceContext())->macro_hidden(...["notificationtemplates_id", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)]);
        yield "
   ";
        // line 39
        $context["template_link"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 40
            yield "      <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("NotificationTemplate") . "?id=") . (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null)), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["name"] ?? null) : null), "html", null, true);
            yield "</a>
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 42, $this->getSourceContext())->macro_htmlField(...["", ($context["template_link"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("NotificationTemplate", 1)]);
        yield "

   ";
        // line 44
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::createIframeModalWindow", [("tags" . ($context["rand"] ?? null)), ($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/notification.tags.php?sub_type=") . (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["template"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["itemtype"] ?? null) : null))]);
        // line 45
        yield "   ";
        $context["show_tags"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 46
            yield "      <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#tags";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">
         ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show list of available tags"), "html", null, true);
            yield "
      </button>
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 50, $this->getSourceContext())->macro_htmlField(...["", ($context["show_tags"] ?? null), ""]);
        yield "

   ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 52, $this->getSourceContext())->macro_htmlField(...["", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showLanguages", ["language", ["value" => (($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["language"] ?? null) : null), "used" =>         // line 54
($context["used_languages"] ?? null), "display_emptychoice" => true, "emptylabel" => __("Default translation"), "display" => false]]), __("Language"), ["full_width" => true]]);
        // line 60
        yield "

   ";
        // line 62
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 62, $this->getSourceContext())->macro_nullField(...[]);
        yield "
   ";
        // line 63
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 63, $this->getSourceContext())->macro_textField(...["subject", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["subject"] ?? null) : null), __("Subject"), ["full_width" => true]]);
        // line 65
        yield "

   ";
        // line 67
        $context["text_content_label"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 68
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email text body"), "html", null, true);
            yield "
      <br>
      ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("(leave the field empty for a generation from HTML)"), "html", null, true);
            yield "
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 72, $this->getSourceContext())->macro_textareaField(...["content_text", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["content_text"] ?? null) : null), ($context["text_content_label"] ?? null), ["full_width" => true, "rows" => 15]]);
        // line 75
        yield "

   ";
        // line 77
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 77, $this->getSourceContext())->macro_textareaField(...["content_html", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["content_html"] ?? null) : null)), __("Email HTML body"), ["full_width" => true, "rows" => 15, "enable_richtext" => true, "id" => ("content" .         // line 81
($context["rand"] ?? null))]]);
        // line 82
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/notification/translation.html.twig";
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
        return array (  150 => 82,  148 => 81,  147 => 77,  143 => 75,  140 => 72,  134 => 70,  128 => 68,  126 => 67,  122 => 65,  120 => 63,  116 => 62,  112 => 60,  110 => 54,  109 => 53,  108 => 52,  102 => 50,  95 => 47,  90 => 46,  87 => 45,  85 => 44,  79 => 42,  70 => 40,  68 => 39,  63 => 38,  56 => 37,  51 => 33,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/notification/translation.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/notification/translation.html.twig");
    }
}
