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

/* __string_template__4f60eba2ee660b7fa5b2542a77530333 */
class __TwigTemplate_deaa87b68c5e01f62dae6cfe8f5c7f4a extends Template
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
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->load("generic_show_form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 5, $this->getSourceContext())->macro_dropdownField(...["Calendar", "calendars_id", (((($tmp = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 5)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["use_ticket_calendar"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ( -1) : ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 5)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["calendars_id"] ?? null) : null))), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Calendar", 1), ["emptylabel" =>         // line 6
($context["empty_label"] ?? null), "toadd" => [(-1) =>         // line 8
($context["toadd_label"] ?? null)]]]);
        // line 10
        yield "
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__4f60eba2ee660b7fa5b2542a77530333";
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
        return array (  66 => 10,  64 => 8,  63 => 6,  61 => 5,  54 => 4,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__4f60eba2ee660b7fa5b2542a77530333", "");
    }
}
