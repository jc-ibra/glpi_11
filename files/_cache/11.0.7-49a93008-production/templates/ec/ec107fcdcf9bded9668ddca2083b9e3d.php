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

/* pages/admin/rules/engine_preview_results.html.twig */
class __TwigTemplate_ce1b9c4fdf1245a8e241ecaf12eda9d3 extends Template
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
<div class=\"card\">
   <div class=\"card-header\">
      <h3 class=\"card-title\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Result details"), "html", null, true);
        yield "</h3>
   </div>
   <div class=\"card-body\">
      <table class=\"table\">
         <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 41
            yield "               <tr>
                  <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["result"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), "html", null, true);
            yield "</td>
                  <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["result"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["result"] ?? null) : null), "html", null, true);
            yield "</td>
               </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "         </tbody>
      </table>
      <table class=\"table mt-4\">
         <thead>
            <tr>
               <th colspan=\"2\" class=\"center\">
                  <h4>
                     <span>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Rule results"), "html", null, true);
        yield "</span>
                     <br>
                     <span class=\"text-";
        // line 55
        yield (((($tmp = ($context["global_result_raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("danger"));
        yield "\">
                        ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Validation", "Validations", 1), "html", null, true);
        yield ": ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["global_result"] ?? null), "html", null, true);
        yield "
                     </span>
                  </h4>
               </th>
            </tr>
         </thead>
         <tbody>
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["result_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result_action"]) {
            // line 64
            yield "               <tr>
                  <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["result_action"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["name"] ?? null) : null), "html", null, true);
            yield "</td>
                  <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["result_action"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["value"] ?? null) : null), "html", null, true);
            yield "</td>
               </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['result_action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "         </tbody>
      </table>
   </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/rules/engine_preview_results.html.twig";
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
        return array (  125 => 69,  116 => 66,  112 => 65,  109 => 64,  105 => 63,  93 => 56,  89 => 55,  84 => 53,  75 => 46,  66 => 43,  62 => 42,  59 => 41,  55 => 40,  47 => 35,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/rules/engine_preview_results.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/rules/engine_preview_results.html.twig");
    }
}
