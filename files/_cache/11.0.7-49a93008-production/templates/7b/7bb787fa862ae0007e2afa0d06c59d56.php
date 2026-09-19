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

/* pages/admin/rules/preview_criteria.html.twig */
class __TwigTemplate_37a93f463928477325b3103b9ca09cb4 extends Template
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
<form method=\"post\" action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
        yield "\">
    <div class=\"card mb-3\">
        <div class=\"card-header\">
            <div class=\"card-title\">
                ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Criterion", "Criteria", Session::getPluralNumber()), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"card-body d-flex flex-wrap\">
            ";
        // line 43
        $context["type_match"] = ((((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["match"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Rule::AND_MATCHING"))) ? (__("AND")) : (__("OR")));
        // line 44
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["criterias"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["criterion"]) {
            // line 45
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 45, $this->getSourceContext())->macro_htmlField(...["", (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type_match"] ?? null)))), "", ["no_label" => true, "field_class" => "col-2 align-self-center text-end pe-5", "input_class" => "col-12", "mb" => "mb-2"]]);
            // line 50
            yield "
                ";
            // line 51
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 52
                yield "                    ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["item"] ?? null), "displayCriteriaSelectPattern"], [(($_v1 = CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["criterion"], "fields", [], "any", false, false, false, 53)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["criteria"] ?? null) : null), (($_v2 = CoreExtension::getAttribute($this->env, $this->source,                 // line 54
$context["criterion"], "fields", [], "any", false, false, false, 54)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["criteria"] ?? null) : null), (($_v3 = CoreExtension::getAttribute($this->env, $this->source,                 // line 55
$context["criterion"], "fields", [], "any", false, false, false, 55)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["condition"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 56
($context["_post"] ?? null), (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["criterion"], "fields", [], "any", false, false, false, 56)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["criteria"] ?? null) : null), [], "array", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default((($_v5 = ($context["_post"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[(($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["criterion"], "fields", [], "any", false, false, false, 56)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["criteria"] ?? null) : null)] ?? null) : null), "")) : ("")), true]);
                // line 59
                yield "                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 60, $this->getSourceContext())->macro_htmlField(...["", ($context["field"] ?? null), (($_v7 = ($context["criteria_names"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[(($_v8 = CoreExtension::getAttribute($this->env, $this->source, $context["criterion"], "fields", [], "any", false, false, false, 60)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["criteria"] ?? null) : null)] ?? null) : null), ["field_class" => "col-10", "label_class" => "col-5", "input_class" => "col-7"]]);
            // line 64
            yield "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['criterion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "            ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["item"] ?? null), "showSpecificCriteriasForPreview"], [($context["_post"] ?? null)]);
        // line 67
        yield "        </div>
        <div class=\"card-footer d-flex flex-row-reverse\">
            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\"/>
            <input type=\"hidden\" name=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rules_id_field"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rules_id"] ?? null), "html", null, true);
        yield "\"/>
            <input type=\"hidden\" name=\"sub_type\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 71), "html", null, true);
        yield "\"/>
            <button type=\"submit\" name=\"test_rule\" class=\"btn btn-primary\">
                ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Test"), "html", null, true);
        yield "
            </button>
        </div>
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/rules/preview_criteria.html.twig";
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
        return array (  143 => 73,  138 => 71,  132 => 70,  128 => 69,  124 => 67,  121 => 66,  106 => 64,  103 => 60,  99 => 59,  97 => 56,  96 => 55,  95 => 54,  94 => 53,  92 => 52,  90 => 51,  87 => 50,  84 => 45,  66 => 44,  64 => 43,  57 => 39,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/rules/preview_criteria.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/rules/preview_criteria.html.twig");
    }
}
