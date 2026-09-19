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

/* pages/admin/form/question_type/item/administration_template.html.twig */
class __TwigTemplate_4bbfbf117df68458086ca210ef038d82 extends Template
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
";
        // line 35
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        yield "
<div class=\"input-group\">
    ";
        // line 39
        yield "    ";
        $context["dropdown_options"] = ["init" =>         // line 40
($context["init"] ?? null), "no_label" => true, "right" => "all", "width" => "100%", "mb" => "", "comments" => false, "addicon" => false, "aria_label" =>         // line 47
($context["aria_label"] ?? null), "nochecklimit" => true, "display_emptychoice" => false, "toadd" => ["-1" => Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE")]];
        // line 54
        yield "
    ";
        // line 56
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["displaywith"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "        ";
            $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["displaywith" => ($context["displaywith"] ?? null)]);
            // line 58
            yield "    ";
        }
        // line 59
        yield "
    ";
        // line 60
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 60, $this->getSourceContext())->macro_dropdownField(...[((        // line 61
array_key_exists("default_itemtype", $context)) ? (Twig\Extension\CoreExtension::default(($context["default_itemtype"] ?? null), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["itemtypes"] ?? null))))) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["itemtypes"] ?? null))))), "default_value",         // line 63
($context["default_items_id"] ?? null), "",         // line 65
($context["dropdown_options"] ?? null)]);
        // line 66
        yield "
    ";
        // line 67
        yield ($context["advanced_config"] ?? null);
        yield "
</div>

";
        // line 70
        if ((($context["question"] ?? null) == null)) {
            // line 71
            yield "    <script>
        import(\"/js/modules/Forms/QuestionItem.js\").then((m) => {
            new m.GlpiFormQuestionTypeItem(";
            // line 73
            yield json_encode(($context["question_type"] ?? null));
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE"), "js"), "html", null, true);
            yield "');
        });
    </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/question_type/item/administration_template.html.twig";
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
        return array (  96 => 73,  92 => 71,  90 => 70,  84 => 67,  81 => 66,  79 => 65,  78 => 63,  77 => 61,  76 => 60,  73 => 59,  70 => 58,  67 => 57,  64 => 56,  61 => 54,  59 => 47,  58 => 40,  56 => 39,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/question_type/item/administration_template.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/question_type/item/administration_template.html.twig");
    }
}
