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

/* __string_template__6d5406ef26ffc4903498afe3de563592 */
class __TwigTemplate_42aa0f0c8f6bd4973c2d617895bec75c extends Template
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
        yield "                ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                ";
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 2)->unwrap();
        // line 3
        yield "                <div>
                    ";
        // line 4
        if ((($tmp =  !(null === ($context["task_order_label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "                        <div class=\"alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["task_order_label"] ?? null), "html", null, true);
            yield "</div>
                    ";
        }
        // line 7
        yield "                    <form name=\"itiltemplatehidden_form";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_url"] ?? null), "html", null, true);
        yield "\" data-submit-once>
                        ";
        // line 8
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 8, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
                        ";
        // line 9
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 9, $this->getSourceContext())->macro_hidden(...[($context["items_id_field"] ?? null), ($context["id"] ?? null)]);
        yield "
                        <div class=\"d-flex justify-content-center flex-wrap\">
                            ";
        // line 11
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 11, $this->getSourceContext())->macro_dropdownArrayField(...["num", 0, ($context["fields"] ?? null), null, ["no_label" => true, "used" =>         // line 13
($context["used"] ?? null), "required" => true, "add_field_attribs" => ["aria-label" =>         // line 16
($context["itemtype_name"] ?? null)], "rand" =>         // line 18
($context["rand"] ?? null)]]);
        // line 19
        yield "
                            ";
        // line 20
        yield ($context["extra_form_html"] ?? null);
        yield "
                            ";
        // line 21
        if ((($tmp = ($context["show_submit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                                <div class=\"ms-2\">";
            yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 22, $this->getSourceContext())->macro_submit(...["add", _x("button", "Add")]);
            yield "</div>
                            ";
        }
        // line 24
        yield "                        </div>
                    </form>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__6d5406ef26ffc4903498afe3de563592";
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
        return array (  95 => 24,  89 => 22,  87 => 21,  83 => 20,  80 => 19,  78 => 18,  77 => 16,  76 => 13,  75 => 11,  70 => 9,  66 => 8,  59 => 7,  53 => 5,  51 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__6d5406ef26ffc4903498afe3de563592", "");
    }
}
