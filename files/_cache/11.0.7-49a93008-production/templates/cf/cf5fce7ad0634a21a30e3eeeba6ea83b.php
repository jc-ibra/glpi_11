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

/* pages/tools/rss_form.html.twig */
class __TwigTemplate_16c487e9ca4881ff2cb98c51b97521e8 extends Template
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
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 38, $this->getSourceContext())->macro_textField(...["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name")]);
            yield "
    ";
        }
        // line 40
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 40, $this->getSourceContext())->macro_textField(...["url", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["url"] ?? null) : null), __("URL"), ["full_width" => true]]);
        // line 42
        yield "

    ";
        // line 44
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 44, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user"] ?? null), "html"), __("By")]);
        yield "
    ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 45, $this->getSourceContext())->macro_nullField(...[]);
        yield "

    ";
        // line 47
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 47, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_active"] ?? null) : null), __("Active")]);
        yield "
    ";
        // line 48
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 48, $this->getSourceContext())->macro_dropdownTimestampField(...["refresh_rate", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["refresh_rate"] ?? null) : null), __("Refresh rate"), ["min" => Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP"), "max" => Twig\Extension\CoreExtension::constant("DAY_TIMESTAMP"), "step" => Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP"), "display_emptychoice" => false, "toadd" => [(5 * Twig\Extension\CoreExtension::constant("MINUTE_TIMESTAMP")), (15 * Twig\Extension\CoreExtension::constant("MINUTE_TIMESTAMP")), (30 * Twig\Extension\CoreExtension::constant("MINUTE_TIMESTAMP")), (45 * Twig\Extension\CoreExtension::constant("MINUTE_TIMESTAMP"))]]]);
        // line 59
        yield "

    ";
        // line 61
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 61, $this->getSourceContext())->macro_dropdownNumberField(...["max_items", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["max_items"] ?? null) : null), __("Number of items displayed")]);
        yield "
    ";
        // line 62
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 62, $this->getSourceContext())->macro_textareaField(...["comment", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["comment"] ?? null) : null), __("Comments")]);
        yield "

    ";
        // line 64
        $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 65
            yield "        ";
            if (((($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["have_error"] ?? null) : null) &&  !Toolbox::isUrlSafe((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["url"] ?? null) : null)))) {
                // line 66
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("URL \"%s\" is not allowed by your administrator."), (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["url"] ?? null) : null)), "html", null, true);
                yield "
        ";
            } else {
                // line 68
                yield "            ";
                yield (((($tmp = (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["have_error"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "html", null, true)));
                yield "
        ";
            }
            // line 70
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 71, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_field"] ?? null), "html"), __("Error retrieving RSS feed")]);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tools/rss_form.html.twig";
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
        return array (  126 => 71,  122 => 70,  116 => 68,  110 => 66,  107 => 65,  105 => 64,  100 => 62,  96 => 61,  92 => 59,  90 => 48,  86 => 47,  81 => 45,  77 => 44,  73 => 42,  70 => 40,  64 => 38,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/rss_form.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/tools/rss_form.html.twig");
    }
}
