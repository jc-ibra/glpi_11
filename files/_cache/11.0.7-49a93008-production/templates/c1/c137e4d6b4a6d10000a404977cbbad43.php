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

/* pages/admin/form/import/step3_resolve_issues.html.twig */
class __TwigTemplate_0637ed2f7ef3566d94dee9c403b3a933 extends Template
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
            'content_title' => [$this, 'block_content_title'],
            'content_body' => [$this, 'block_content_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 35
        return "layout/page_without_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 37
        $context["container_size"] = "narrow";
        // line 35
        $this->parent = $this->load("layout/page_without_tabs.html.twig", 35);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import forms"), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "    <form method=\"POST\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("Form/Import/Preview"), "html", null, true);
        yield "\">
        <div class=\"card\">
            <div class=\"card-header py-3 px-4\">
                <h3 class=\"card-title\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Resolve issues"), "html", null, true);
        yield "</h3>
            </div>
            <table class=\"table table-card mb-0\">
                <thead>
                    <tr>
                        <th class=\"w-30 px-4\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Itemtype"), "html", null, true);
        yield "</th>
                        <th class=\"w-20 px-4\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Original value"), "html", null, true);
        yield "</th>
                        <th class=\"w-50 px-4\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replacement value"), "html", null, true);
        yield "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 58
        $context["existing_replacements"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["replacements"] ?? null));
        // line 59
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["issues"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["issue"]) {
            // line 60
            yield "                        ";
            $context["original_name"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "default_name", [], "any", true, true, false, 60) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "default_name", [], "any", false, false, false, 60)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "default_name", [], "any", false, false, false, 60)) : (CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "name", [], "any", false, false, false, 60)));
            // line 61
            yield "                        ";
            $context["replacement_index"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 61) + ($context["existing_replacements"] ?? null));
            // line 62
            yield "                        <tr>
                            <td class=\"px-4 align-middle\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"me-2 ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "itemtype", [], "any", false, false, false, 65)), "html", null, true);
            yield "\"></i>
                                    <span>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "itemtype", [], "any", false, false, false, 66)), "html", null, true);
            yield "</span>
                                </div>
                            </td>
                            <td class=\"px-4 align-middle\">
                                <span>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["original_name"] ?? null), "html", null, true);
            yield "</span>
                            </td>
                            <td class=\"px-4\">
                                <input type=\"hidden\" name=\"replacements[";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["replacement_index"] ?? null), "html", null, true);
            yield "][itemtype]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "itemtype", [], "any", false, false, false, 73), "html", null, true);
            yield "\"/>
                                <input type=\"hidden\" name=\"replacements[";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["replacement_index"] ?? null), "html", null, true);
            yield "][original_name]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["original_name"] ?? null), "html", null, true);
            yield "\"/>
                                ";
            // line 75
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 75, $this->getSourceContext())->macro_dropdownField(...[CoreExtension::getAttribute($this->env, $this->source,             // line 76
$context["issue"], "itemtype", [], "any", false, false, false, 76), (("replacements[" .             // line 77
($context["replacement_index"] ?? null)) . "][replacement_id]"), ((CoreExtension::getAttribute($this->env, $this->source,             // line 78
$context["issue"], "replacement_id", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "replacement_id", [], "any", false, false, false, 78), (((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "itemtype", [], "any", false, false, false, 78) == "Entity")) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) : (0)))) : ((((CoreExtension::getAttribute($this->env, $this->source, $context["issue"], "itemtype", [], "any", false, false, false, 78) == "Entity")) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) : (0)))), "", ["field_class" => "col-12", "aria_label" => Twig\Extension\CoreExtension::sprintf(__("Replacement value for '%s'"),             // line 82
($context["original_name"] ?? null)), "no_label" => true, "right" => "all", "mb" => ""]]);
            // line 87
            yield "
                            </td>
                        </tr>
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
        unset($context['_seq'], $context['_key'], $context['issue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                </tbody>
            </table>
        </div>

        <div class=\"row mt-3\">
            <div class=\"col\">
                <div class=\"justify-content-end d-flex\">
                    <button type=\"submit\" href=\"#\" class=\"btn btn-primary\">
                        ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview import"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>

        <input type=\"hidden\" name=\"json\" value=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["json"] ?? null), "html", null, true);
        yield "\"/>
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\"/>

        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["skipped_forms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["skipped_form"]) {
            // line 109
            yield "            <input type=\"hidden\" name=\"skipped_forms[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["skipped_form"], "html", null, true);
            yield "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['skipped_form'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "
        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["replacements"] ?? null));
        foreach ($context['_seq'] as $context["itemtype"] => $context["replacements_for_itemtype"]) {
            // line 113
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["replacements_for_itemtype"]);
            foreach ($context['_seq'] as $context["original_name"] => $context["items_id"]) {
                // line 114
                yield "                <input type=\"hidden\" name=\"replacements[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["itemtype"], "html", null, true);
                yield "][";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["original_name"], "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["items_id"], "html", null, true);
                yield "\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['original_name'], $context['items_id'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['itemtype'], $context['replacements_for_itemtype'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/import/step3_resolve_issues.html.twig";
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
        return array (  264 => 117,  258 => 116,  245 => 114,  240 => 113,  236 => 112,  233 => 111,  224 => 109,  220 => 108,  215 => 106,  211 => 105,  202 => 99,  192 => 91,  175 => 87,  173 => 82,  172 => 78,  171 => 77,  170 => 76,  169 => 75,  163 => 74,  157 => 73,  151 => 70,  144 => 66,  140 => 65,  135 => 62,  132 => 61,  129 => 60,  111 => 59,  109 => 58,  102 => 54,  98 => 53,  94 => 52,  86 => 47,  79 => 44,  72 => 43,  64 => 40,  57 => 39,  52 => 35,  50 => 37,  48 => 33,  41 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/import/step3_resolve_issues.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/import/step3_resolve_issues.html.twig");
    }
}
