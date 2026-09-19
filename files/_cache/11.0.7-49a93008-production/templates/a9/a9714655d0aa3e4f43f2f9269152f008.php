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

/* @fields/status_overrides.html.twig */
class __TwigTemplate_d35630b7ab749100dd28365111f558cb extends Template
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
        // line 28
        yield "
";
        // line 29
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 31
        yield "
<div id=\"container";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"asset\">

   <div class='alert alert-primary d-flex align-items-center' role='alert'>
      <i class='fas fa-info-circle fa-xl'></i>
      <span class='ms-2'>
         ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Here you can redefine the following options :"), "html", null, true);
        yield "
         <ul>
            <li><i>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mandatory"), "html", null, true);
        yield " </i></li>
            <li><i>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Read-only"), "html", null, true);
        yield " </i></li>
         </ul>
         ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("for each field, depending on the states of the element attached to the container."), "html", null, true);
        yield "
      </span>
   </div>

   ";
        // line 46
        if ((($tmp = ($context["has_fields"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "      <div class=\"d-flex align-items-start mb-3\">
         <button class=\"btn btn-primary me-2\"
                 type=\"button\"
                 name=\"switch_add\"
                 data-container-id=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "\">
            <i class=\"far fa-plus\"></i>
            <span>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add new status override", "fields"), "html", null, true);
            yield "</span>
         </button>
      </div>
   ";
        }
        // line 57
        yield "
   ";
        // line 58
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 58, $this->getSourceContext())->macro_largeTitle(...[__("Status overrides", "fields"), "", false]);
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <table class=\"table\">
                     <thead>
                        <tr>
                           <th>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item type"), "html", null, true);
        yield "</th>
                           <th>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Field"), "html", null, true);
        yield "</th>
                           <th>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status"), "html", null, true);
        yield "</th>
                           <th>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mandatory"), "html", null, true);
        yield "</th>
                           <th>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Read only"), "html", null, true);
        yield "</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        ";
        // line 76
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["overrides"] ?? null)) > 0)) {
            // line 77
            yield "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["overrides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
                // line 78
                yield "                              <tr>
                                 <td>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["override"], "itemtype", [], "any", false, false, false, 79), "html", null, true);
                yield "</td>
                                 <td>";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["override"], "field_name", [], "any", false, false, false, 80), "html", null, true);
                yield "</td>
                                 <td>";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["override"], "status_names", [], "any", false, false, false, 81), ", "), "html", null, true);
                yield "</td>
                                 <td>";
                // line 82
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["override"], "mandatory", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "html", null, true)));
                yield "</td>
                                 <td>";
                // line 83
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["override"], "is_readonly", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "html", null, true)));
                yield "</td>
                                 <td>
                                    <form class=\"d-inline\" method=\"post\" action=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsStatusOverride"), "html", null, true);
                yield "\">
                                       <input type=\"hidden\" name=\"id\" value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["override"], "id", [], "any", false, false, false, 86), "html", null, true);
                yield "\" />
                                       <input type=\"hidden\" name=\"container_id\" value=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
                yield "\" />
                                       <button type=\"button\" class=\"btn btn-sm btn-primary\" name=\"edit\"
                                               title=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Edit"), "html", null, true);
                yield "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-pencil\"></i>
                                       </button>
                                       <button type=\"submit\" class=\"btn btn-sm btn-danger\" name=\"delete\"
                                               title=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                yield "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-trash\"></i>
                                       </button>
                                       <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
                                    </form>
                                 </td>
                              </tr>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['override'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "                        ";
        } else {
            // line 104
            yield "                           <tr>
                              <td colspan=\"6\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No item found", "fields"), "html", null, true);
            yield "</td>
                           </tr>
                        ";
        }
        // line 108
        yield "                     </tbody>
                  </table>
               </div> ";
        // line 111
        yield "            </div> ";
        // line 112
        yield "         </div> ";
        // line 113
        yield "      </div>
   </div> ";
        // line 115
        yield "   <script>
      \$(document).ready(() => {
         \$('#container";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', 'button[name=\"edit\"]', (e) => {
            const button = \$(e.currentTarget);
            const row = button.closest('tr');
            const id = row.find('input[name=\"id\"]').val();
            const container_id = row.find('input[name=\"container_id\"]').val();

            glpi_ajax_dialog(
               {
                  title: __('Edit status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/plugins/fields/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_edit_form',
                     id: id,
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });

         \$('#container";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', 'button[name=\"switch_add\"]', (e) => {
            const button = \$(e.currentTarget);
            const container_id = button.attr('data-container-id');

            glpi_ajax_dialog(
               {
                  title: __('Add new status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/plugins/fields/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_add_form',
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });
      });
   </script>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fields/status_overrides.html.twig";
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
        return array (  261 => 138,  237 => 117,  233 => 115,  230 => 113,  228 => 112,  226 => 111,  222 => 108,  216 => 105,  213 => 104,  210 => 103,  199 => 98,  192 => 94,  184 => 89,  179 => 87,  175 => 86,  171 => 85,  166 => 83,  162 => 82,  158 => 81,  154 => 80,  150 => 79,  147 => 78,  142 => 77,  140 => 76,  132 => 71,  128 => 70,  124 => 69,  120 => 68,  116 => 67,  104 => 58,  101 => 57,  94 => 53,  89 => 51,  83 => 47,  81 => 46,  74 => 42,  69 => 40,  65 => 39,  60 => 37,  52 => 32,  49 => 31,  47 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fields/status_overrides.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/marketplace/fields/templates/status_overrides.html.twig");
    }
}
