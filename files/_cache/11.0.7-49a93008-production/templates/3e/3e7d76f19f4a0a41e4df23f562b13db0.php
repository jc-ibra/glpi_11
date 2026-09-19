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

/* __string_template__cf39396e77a9c5bf904d6796eb9aceb4 */
class __TwigTemplate_c29d670e2ab7a932129dff6bab5b0af2 extends Template
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
        yield "                    ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                    <div class=\"mb-3\">
                        <form method=\"post\" action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Itil_Project"), "html", null, true);
        yield "\">
                            <input type=\"hidden\" name=\"projects_id\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ID"] ?? null), "html", null, true);
        yield "\"/>
                            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\"/>
                            <div class=\"d-flex\">
                                ";
        // line 7
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 7, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...["items_id", null, ["add_field_class" => "d-inline", "no_label" => true, "itemtypes" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("itil_types"), "used" =>         // line 11
($context["used"] ?? null), "entity_restrict" =>         // line 12
($context["entity_restrict"] ?? null)]]);
        // line 13
        yield "
                                <div>
                                    <button class=\"btn btn-primary ms-3\" type=\"submit\" name=\"add\" value=\"\"><i class=\"ti ti-link\"></i><span>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_msg"] ?? null), "html", null, true);
        yield "</span></button>
                                </div>
                            </div>
                        </form>
                    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__cf39396e77a9c5bf904d6796eb9aceb4";
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
        return array (  69 => 15,  65 => 13,  63 => 12,  62 => 11,  61 => 7,  56 => 5,  52 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__cf39396e77a9c5bf904d6796eb9aceb4", "");
    }
}
