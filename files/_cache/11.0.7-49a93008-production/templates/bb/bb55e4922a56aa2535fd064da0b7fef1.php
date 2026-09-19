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

/* pages/setup/levelagreement_level.html.twig */
class __TwigTemplate_1e6174c87586f2fa74c5e1430df698f3 extends Template
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
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 37, $this->getSourceContext())->macro_textField(...["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name")]);
        yield "
    ";
        // line 38
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 38, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_active"] ?? null) : null), __("Active")]);
        yield "

    ";
        // line 40
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 41, $this->getSourceContext())->macro_htmlField(...["", CoreExtension::getAttribute($this->env, $this->source, ($context["la"] ?? null), "getLink", [], "method", false, false, false, 41), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["parent_class"] ?? null), 1)]);
            yield "
    ";
        }
        // line 43
        yield "    ";
        $context["execution_time_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 44
            yield "        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["item"] ?? null), "dropdownExecutionTime"], ["execution_time", ["max_time" => CoreExtension::getAttribute($this->env, $this->source,             // line 45
($context["la"] ?? null), "getTime", [], "method", false, false, false, 45), "used" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([            // line 46
($context["item"] ?? null), "getAlreadyUsedExecutionTime"], [(($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["la"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null)]), "value" => (($_v3 = CoreExtension::getAttribute($this->env, $this->source,             // line 47
($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["execution_time"] ?? null) : null), "type" => (($_v4 = CoreExtension::getAttribute($this->env, $this->source,             // line 48
($context["la"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["type"] ?? null) : null)]]);
            // line 50
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 51, $this->getSourceContext())->macro_htmlField(...["", ($context["execution_time_dropdown"] ?? null), __("Execution")]);
        yield "

    ";
        // line 53
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 54, $this->getSourceContext())->macro_dropdownArrayField(...["match", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["match"] ?? null) : null), ($context["operators"] ?? null), __("Logical operator")]);
            yield "
    ";
        } else {
            // line 56
            yield "        ";
            // line 57
            yield "        <input type=\"hidden\" name=\"match\" value=\"AND\">
    ";
        }
        // line 59
        yield "    <input type=\"hidden\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["la"] ?? null), "getForeignKeyField", [], "method", false, false, false, 59), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["la"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["id"] ?? null) : null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"entities_id\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["la"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["entities_id"] ?? null) : null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"is_recursive\" value=\"";
        // line 61
        yield (((($tmp = (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["la"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["is_recursive"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
        yield "\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/levelagreement_level.html.twig";
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
        return array (  124 => 61,  120 => 60,  113 => 59,  109 => 57,  107 => 56,  101 => 54,  99 => 53,  93 => 51,  89 => 50,  87 => 48,  86 => 47,  85 => 46,  84 => 45,  82 => 44,  79 => 43,  73 => 41,  71 => 40,  66 => 38,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/levelagreement_level.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/levelagreement_level.html.twig");
    }
}
