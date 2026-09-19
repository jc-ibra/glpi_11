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

/* pages/admin/user.substitute.html.twig */
class __TwigTemplate_8d2dcbaf78137e936c4d39dc0d256d12 extends Template
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
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 35), "id", [], "array", true, true, false, 35) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null)) : ( -1));
        // line 36
        yield "
<div class=\"asset\">

";
        // line 39
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "   <form name=\"asset_form\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 40), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-submit-once>
";
        }
        // line 42
        yield "
   <div id=\"mainformtable\">

      ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]))]), "html", null, true);
        yield "

      <div class=\"card-body d-flex flex-wrap\">
         <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
               <div class=\"row flex-row align-items-start flex-grow-1\">
                  <div class=\"row flex-row\">
                     <input type=\"hidden\" name=\"users_id\" value=";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "html", null, true);
        yield " />

                     <div class=\"row col-12 col-sm-12 mb-4\">
                        <div class=\"alert alert-info\" style=\"margin: 0 auto; max-width: 900px\">
                           <span>
                              <i class=\"ti ti-info-circle\"></i>&nbsp;";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Substitutes are users who can approve or refuse tickets on your behalf."), "html", null, true);
        yield "
                           </span>
                        </div>
                     </div>

                     ";
        // line 62
        yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 62, $this->getSourceContext())->macro_datetimeField(...["substitution_start_date", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["user"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["substitution_start_date"] ?? null) : null), __("Start date ")]);
        // line 66
        yield "

                     ";
        // line 68
        yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 68, $this->getSourceContext())->macro_datetimeField(...["substitution_end_date", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["user"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["substitution_end_date"] ?? null) : null), __("End date ")]);
        // line 72
        yield "

                     ";
        // line 74
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 74, $this->getSourceContext())->macro_dropdownField(...["User", "substitutes", [], __("Approval substitutes"), ["multiple" => "multiple", "used" => [(($_v5 = CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["user"] ?? null), "fields", [], "any", false, false, false, 81)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["id"] ?? null) : null)], "value" =>         // line 82
($context["substitutes"] ?? null), "right" => ["validate_request", "validate_incident"]]]);
        // line 88
        yield "

                     ";
        // line 90
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 90, $this->getSourceContext())->macro_nullField(...[]);
        yield "

                     ";
        // line 92
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["delegators"] ?? null)) > 0)) {
            // line 93
            yield "                        <div class=\"row col-12 col-sm-12 mb-4 mt-5\">
                           <div class=\"alert alert-info\" style=\"margin: 0 auto; max-width: 900px\">
                              <span>
                                 <i class=\"ti ti-info-circle\"></i>&nbsp;";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delegators are users who gave you the right to approve or refuse tickets on their behalf."), "html", null, true);
            yield "
                              </span>
                           </div>
                        </div>

                        <div>
                           <div class=\"card\">
                              <div class=\"table-responsive\">
                                 <table class=\"table card-table table-hover table-striped\">
                                 <thead>
                                    <tr>
                                       <th style=\"width: 33%;\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "html", null, true);
            yield "</th>
                                       <th style=\"width: 33%;\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Substitution start date"), "html", null, true);
            yield "</th>
                                       <th style=\"width: 33%;\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Substitution end date"), "html", null, true);
            yield "</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["delegators"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["delegator"]) {
                // line 114
                yield "                                    ";
                $context["delegator"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", $context["delegator"]);
                // line 115
                yield "                                    <tr>
                                       <td valign=\"top\">";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["delegator"], "getFriendlyName", [], "method", false, false, false, 116), "html", null, true);
                yield "</td>
                                       <td valign=\"top\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["delegator"], "fields", [], "any", false, false, false, 117)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["substitution_start_date"] ?? null) : null), "html", null, true);
                yield "</td>
                                       <td valign=\"top\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = CoreExtension::getAttribute($this->env, $this->source, $context["delegator"], "fields", [], "any", false, false, false, 118)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["substitution_end_date"] ?? null) : null), "html", null, true);
                yield "</td>
                                    </tr>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['delegator'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "                                 </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     ";
        }
        // line 127
        yield "
                  </div> ";
        // line 129
        yield "               </div> ";
        // line 130
        yield "            </div> ";
        // line 131
        yield "         </div>
      </div> ";
        // line 133
        yield "
      <div class=\"row\">
         ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]))]), "html", null, true);
        yield "
      </div>

   ";
        // line 138
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "         <div class=\"card-body mx-n2 mb-4 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
            <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
               <i class=\"ti ti-device-floppy\"></i>
               <span>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
            </button>
         </div>

         <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
      </div> ";
            // line 148
            yield "   </form> ";
            // line 149
            yield "   ";
        }
        // line 150
        yield "</div> ";
        // line 151
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user.substitute.html.twig";
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
        return array (  239 => 151,  237 => 150,  234 => 149,  232 => 148,  228 => 146,  221 => 142,  216 => 139,  214 => 138,  208 => 135,  204 => 133,  201 => 131,  199 => 130,  197 => 129,  194 => 127,  186 => 121,  177 => 118,  173 => 117,  169 => 116,  166 => 115,  163 => 114,  159 => 113,  152 => 109,  148 => 108,  144 => 107,  130 => 96,  125 => 93,  123 => 92,  118 => 90,  114 => 88,  112 => 82,  111 => 81,  110 => 74,  106 => 72,  104 => 70,  103 => 68,  99 => 66,  97 => 64,  96 => 62,  88 => 57,  80 => 52,  70 => 45,  65 => 42,  59 => 40,  57 => 39,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user.substitute.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/user.substitute.html.twig");
    }
}
