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

/* pages/management/database.html.twig */
class __TwigTemplate_5756b6a6221ceae7dac88448946760de extends Template
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
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 38, $this->getSourceContext())->macro_textField(...["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name")]);
        yield "
    ";
        // line 39
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 39, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_active"] ?? null) : null), __("Active")]);
        yield "

    ";
        // line 41
        $context["db_inst_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v2 = ($context["_request"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["databaseinstances_id"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "            ";
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink(($context["database_instance"] ?? null));
                yield "
            ";
                // line 44
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 44, $this->getSourceContext())->macro_hidden(...["databaseinstances_id", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["databaseinstances_id"] ?? null) : null)]);
                yield "
        ";
            } else {
                // line 46
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 46, $this->getSourceContext())->macro_dropdownField(...["DatabaseInstance", "databaseinstances_id", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["databaseinstances_id"] ?? null) : null), null, ["no_label" => true, "mb" => ""]]);
                // line 49
                yield "
        ";
            }
            // line 51
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 52, $this->getSourceContext())->macro_htmlField(...["", ($context["db_inst_field"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("DatabaseInstance")]);
        yield "
    ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 53, $this->getSourceContext())->macro_numberField(...["size", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["size"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Size"), __("Mio"))]);
        yield "

    ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 55, $this->getSourceContext())->macro_dropdownYesNo(...["is_onbackup", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["is_onbackup"] ?? null) : null), __("Has backup")]);
        yield "
    ";
        // line 56
        yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 56, $this->getSourceContext())->macro_datetimeField(...["date_lastbackup", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["date_lastbackup"] ?? null) : null), __("Last backup date"), ["clearable" => true]]);
        // line 58
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/management/database.html.twig";
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
        return array (  115 => 58,  113 => 56,  109 => 55,  104 => 53,  99 => 52,  95 => 51,  91 => 49,  88 => 46,  83 => 44,  78 => 43,  75 => 42,  73 => 41,  68 => 39,  63 => 38,  56 => 37,  51 => 33,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/management/database.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/management/database.html.twig");
    }
}
