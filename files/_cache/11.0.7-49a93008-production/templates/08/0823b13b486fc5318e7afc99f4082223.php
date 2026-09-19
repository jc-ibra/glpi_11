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

/* pages/admin/rules/engine_preview_criteria.html.twig */
class __TwigTemplate_a961ad793ebcc5953a8e94bebcaab00a extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["input"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "   <div class=\"card\">
      <div class=\"card-header\">
         <h3 class=\"card-title\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Criterion", "Criteria", Session::getPluralNumber()), "html", null, true);
            yield "</h3>
      </div>
      <div class=\"card-body d-flex flex-wrap\">
         <form name=\"testrule_form\" id=\"testrulesengine_form\" method=\"post\" action=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "any", false, false, false, 42), "html", null, true);
            yield "\">
            <div class=\"col-12 col-xxl12 flex-column\">
               <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                  <div class=\"row flex-row align-items-start flex-grow-1\">
                     <div class=\"row flex-row\">
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["input"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["criterion"]) {
                // line 48
                yield "                           ";
                $context["field_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 49
                    yield "                              ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["rule"] ?? null), "displayCriteriaSelectPattern"], [$context["criterion"], $context["criterion"], Twig\Extension\CoreExtension::constant("Rule::PATTERN_IS"), ((CoreExtension::getAttribute($this->env, $this->source, ($context["values"] ?? null), $context["criterion"], [], "array", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["values"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["criterion"]] ?? null) : null), "")) : (""))]);
                    // line 50
                    yield "                           ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 51
                yield "                           ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 51, $this->getSourceContext())->macro_htmlField(...[                // line 52
$context["criterion"],                 // line 53
($context["field_content"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 54
($context["criteria"] ?? null), $context["criterion"], [], "array", true, true, false, 54)) ? ((($_v1 = (($_v2 = ($context["criteria"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["criterion"]] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null)) : ($context["criterion"]))]);
                // line 55
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['criterion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["rule"] ?? null), "showSpecificCriteriasForPreview"], [($context["_request"] ?? null)]);
            // line 58
            yield "                     </div>
                  </div>
               </div>
            </div>
            ";
            // line 62
            yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 62, $this->getSourceContext())->macro_submit(...["test_all_rules", _x("button", "Test"), 1]);
            yield "
            ";
            // line 63
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 63, $this->getSourceContext())->macro_hidden(...["sub_type", ($context["rule_classname"] ?? null)]);
            yield "
            ";
            // line 64
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 64, $this->getSourceContext())->macro_hidden(...["condition", ($context["condition"] ?? null)]);
            yield "
            ";
            // line 65
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 65, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
            yield "
         </form>
      </div>
   </div>
";
        } else {
            // line 70
            yield "   <div class=\"alert alert-danger\">
      <span>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No element to be tested"), "html", null, true);
            yield "</span>
   </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/rules/engine_preview_criteria.html.twig";
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
        return array (  131 => 71,  128 => 70,  120 => 65,  116 => 64,  112 => 63,  108 => 62,  102 => 58,  99 => 57,  92 => 55,  90 => 54,  89 => 53,  88 => 52,  86 => 51,  82 => 50,  79 => 49,  76 => 48,  72 => 47,  64 => 42,  58 => 39,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/rules/engine_preview_criteria.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/rules/engine_preview_criteria.html.twig");
    }
}
