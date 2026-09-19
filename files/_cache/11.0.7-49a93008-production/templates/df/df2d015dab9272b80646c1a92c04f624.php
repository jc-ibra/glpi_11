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

/* pages/admin/profile/assistance_simple.html.twig */
class __TwigTemplate_cb22a19c4915774ec16f357b0ba4a424 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "pages/admin/profile/base_tab.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 36
        $context["is_root_entity_active"] = Session::haveAccessToEntity(0);
        // line 33
        $this->parent = $this->load("pages/admin/profile/base_tab.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 39, $this->getSourceContext())->macro_smallTitle(...[__("ITIL Templates")]);
        yield "
    ";
        // line 40
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 40, $this->getSourceContext())->macro_dropdownField(...["TicketTemplate", "tickettemplates_id", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["tickettemplates_id"] ?? null) : null), __("Default ticket template"), ["full_width" => true, "entity" => 0, "condition" => Twig\Extension\CoreExtension::merge([], (((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["is_recursive" => 1]) : ([]))), "addicon" =>         // line 44
($context["is_root_entity_active"] ?? null)]]);
        // line 45
        yield "

    ";
        // line 47
        yield $this->getTemplateForMacro("macro_displayRightsMatrix", $context, 47, $this->getSourceContext())->macro_displayRightsMatrix(...[($context["item"] ?? null), "helpdesk", "tracking", "general", __("Assistance")]);
        yield "

    ";
        // line 49
        if (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications") == "0")) {
            // line 50
            yield "        ";
            $context["activation_msg"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 51
                yield "            <span class=\"alert alert-warning\">
                ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notifications must be enabled to activate mentions."), "html", null, true);
                yield "
            </span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 55, $this->getSourceContext())->macro_htmlField(...["use_mentions", ($context["activation_msg"] ?? null), __("Mentions configuration"), ["full_width" => true]]);
            yield "
    ";
        } else {
            // line 57
            yield "        ";
            $context["user_mention_helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 58
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enables or disables the ability to mention users within the application."), "html", null, true);
                yield "
            ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((__("Disabled") . ": ") . __("User mentions are disabled for this profile.")), "html", null, true);
                yield "
            ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((__("Full") . ": ") . __("Displays all users. Mentioned users will be added as observers if they are not already actors.")), "html", null, true);
                yield "
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 62, $this->getSourceContext())->macro_dropdownArrayField(...["use_mentions", (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 64
($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["use_mentions"] ?? null) : null), [Twig\Extension\CoreExtension::constant("Glpi\\RichText\\UserMention::USER_MENTION_DISABLED") => __("Disabled"), Twig\Extension\CoreExtension::constant("Glpi\\RichText\\UserMention::USER_MENTION_FULL") => __("Full")], __("Mentions configuration"), ["helper" =>             // line 70
($context["user_mention_helper"] ?? null)]]);
            // line 71
            yield "
    ";
        }
        // line 73
        yield "
    ";
        // line 74
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 74, $this->getSourceContext())->macro_smallTitle(...[__("Association")]);
        yield "
    ";
        // line 75
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 75, $this->getSourceContext())->macro_checkboxField(...["_show_group_hardware", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["show_group_hardware"] ?? null) : null), __("See hardware of my groups"), ["full_width" => true]]);
        // line 77
        yield "

    ";
        // line 79
        $context["helpdesk_hardware_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 80
            yield "        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getLinearRightChoice", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getHelpdeskHardwareTypes", [true]), ["field" => "helpdesk_hardware", "value" => (($_v3 = CoreExtension::getAttribute($this->env, $this->source,             // line 84
($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["helpdesk_hardware"] ?? null) : null)]]);
            // line 87
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 88, $this->getSourceContext())->macro_htmlField(...["helpdesk_hardware", ($context["helpdesk_hardware_field"] ?? null), __("Link with items for the creation of tickets"), ["full_width" => true]]);
        // line 90
        yield "

    ";
        // line 92
        $context["associable_types_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 93
            yield "        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::dropdownHelpdeskItemtypes", [["values" => (($_v4 = CoreExtension::getAttribute($this->env, $this->source,             // line 94
($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["helpdesk_item_type"] ?? null) : null)]]);
            // line 96
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 97, $this->getSourceContext())->macro_htmlField(...["helpdesk_item_type", ($context["associable_types_field"] ?? null), __("Associable items to tickets, changes and problems"), ["full_width" => true]]);
        // line 99
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/profile/assistance_simple.html.twig";
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
        return array (  171 => 99,  168 => 97,  164 => 96,  162 => 94,  160 => 93,  158 => 92,  154 => 90,  151 => 88,  147 => 87,  145 => 84,  143 => 80,  141 => 79,  137 => 77,  135 => 75,  131 => 74,  128 => 73,  124 => 71,  122 => 70,  121 => 64,  119 => 62,  113 => 60,  109 => 59,  104 => 58,  101 => 57,  95 => 55,  88 => 52,  85 => 51,  82 => 50,  80 => 49,  75 => 47,  71 => 45,  69 => 44,  68 => 40,  63 => 39,  56 => 38,  51 => 33,  49 => 36,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/profile/assistance_simple.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/profile/assistance_simple.html.twig");
    }
}
