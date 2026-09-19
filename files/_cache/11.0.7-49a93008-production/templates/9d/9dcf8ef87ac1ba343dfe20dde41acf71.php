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

/* pages/admin/form/import/step2_preview.html.twig */
class __TwigTemplate_297e7d5d5dc9b818ebf87fef9b846d41 extends Template
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
        // line 33
        return "layout/page_without_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["container_size"] = "narrow";
        // line 33
        $this->parent = $this->load("layout/page_without_tabs.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import forms"), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    <form
        method=\"POST\"
        action=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("Form/Import/Execute"), "html", null, true);
        yield "\"
        data-submit-once
    >
        <div class=\"card\">
            <div class=\"card-header py-3 px-4\">
                <h3 class=\"card-title\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import preview"), "html", null, true);
        yield "</h3>
            </div>
            <table class=\"table table-card mb-0\">
                <thead>
                    <tr>
                        <th class=\"w-50 px-4\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form name"), "html", null, true);
        yield "</th>
                        <th class=\"w-25 px-4\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status"), "html", null, true);
        yield "</th>
                        <th class=\"w-25 px-4\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Action", "Actions", Session::getPluralNumber()), "html", null, true);
        yield "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 110
        yield "
                    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "getValidForms", [], "method", false, false, false, 111));
        foreach ($context['_seq'] as $context["form_id"] => $context["form_name"]) {
            // line 112
            yield "                        ";
            yield $this->getTemplateForMacro("macro_render_row", $context, 112, $this->getSourceContext())->macro_render_row(...[            // line 113
$context["form_id"],             // line 114
$context["form_name"], "ti-check text-success", [__("Ready to be imported")], false, true]);
            // line 119
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['form_id'], $context['form_name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "getInvalidForms", [], "method", false, false, false, 121));
        foreach ($context['_seq'] as $context["form_id"] => $context["form_name"]) {
            // line 122
            yield "                        ";
            yield $this->getTemplateForMacro("macro_render_row", $context, 122, $this->getSourceContext())->macro_render_row(...[            // line 123
$context["form_id"],             // line 124
$context["form_name"], "ti-x text-danger", [__("Can't be imported")], true, true]);
            // line 129
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['form_id'], $context['form_name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "getFormsWithFatalErrors", [], "method", false, false, false, 131));
        foreach ($context['_seq'] as $context["form_id"] => $context["details"]) {
            // line 132
            yield "                        ";
            yield $this->getTemplateForMacro("macro_render_row", $context, 132, $this->getSourceContext())->macro_render_row(...[            // line 133
$context["form_id"], CoreExtension::getAttribute($this->env, $this->source,             // line 134
$context["details"], "name", [], "any", false, false, false, 134), "ti-x text-danger", CoreExtension::getAttribute($this->env, $this->source,             // line 136
$context["details"], "errors", [], "any", false, false, false, 136), false, true]);
            // line 139
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['form_id'], $context['details'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "                </tbody>
            </table>
        </div>

        <div class=\"row mt-3\">
            <div class=\"col\">
                <div class=\"justify-content-end d-flex\">
                    <button type=\"submit\" href=\"#\" class=\"btn btn-primary\">
                        ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>

        <input type=\"hidden\" name=\"json\" value=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["json"] ?? null), "html", null, true);
        yield "\" />
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />

        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["preview"] ?? null), "getSkippedForms", [], "method", false, false, false, 158)));
        foreach ($context['_seq'] as $context["_key"] => $context["skipped_form_id"]) {
            // line 159
            yield "            <input type=\"hidden\" name=\"skipped_forms[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["skipped_form_id"], "html", null, true);
            yield "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['skipped_form_id'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["replacements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["replacement_data"]) {
            // line 163
            yield "            <input type=\"hidden\" name=\"replacements[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 163), "html", null, true);
            yield "][itemtype]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["replacement_data"], "itemtype", [], "any", false, false, false, 163), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"replacements[";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 164), "html", null, true);
            yield "][original_name]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["replacement_data"], "original_name", [], "any", false, false, false, 164), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"replacements[";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 165), "html", null, true);
            yield "][replacement_id]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["replacement_data"], "replacement_id", [], "any", false, false, false, 165), "html", null, true);
            yield "\"/>
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
        unset($context['_seq'], $context['_key'], $context['replacement_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "    </form>
";
        yield from [];
    }

    // line 60
    public function macro_render_row($form_id = null, $form_name = null, $status_icon = null, $messages = null, $show_resolve_issues_action = null, $show_remove_action = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form_id" => $form_id,
            "form_name" => $form_name,
            "status_icon" => $status_icon,
            "messages" => $messages,
            "show_resolve_issues_action" => $show_resolve_issues_action,
            "show_remove_action" => $show_remove_action,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 61
            yield "                        <tr>
                            <td class=\"w-50 px-4 align-middle\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_name"] ?? null), "html", null, true);
            yield "</td>
                            <td class=\"w-50 px-4 align-middle\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"ti ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_icon"] ?? null), "html", null, true);
            yield " me-2\"></i>
                                    <div>
                                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 68
                yield "                                            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                                    </div>
                                </div>
                            </td>
                            <td class=\"w-25 px-4 align-middle\">
                                ";
            // line 74
            if ((($context["show_resolve_issues_action"] ?? null) || ($context["show_remove_action"] ?? null))) {
                // line 75
                yield "                                    <div class=\"d-flex flex-row-reverse align-items-center gap-2\">
                                        ";
                // line 76
                if ((($tmp = ($context["show_remove_action"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 77
                    yield "                                            <button
                                                type=\"submit\"
                                                class=\"btn btn-link p-0 text-danger\"
                                                name=\"skipped_forms[]\"
                                                value=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
                    yield "\"
                                                formaction=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("Form/Import/Preview"), "html", null, true);
                    yield "\"
                                                title=\"";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove this form from the import list"), "html", null, true);
                    yield "\"
                                                aria-label=\"";
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove form"), "html", null, true);
                    yield "\"
                                            >
                                                <i class=\"ti ti-trash\"></i>
                                            </button>
                                        ";
                }
                // line 89
                yield "
                                        ";
                // line 90
                if ((($context["show_resolve_issues_action"] ?? null) && ($context["show_remove_action"] ?? null))) {
                    // line 91
                    yield "                                        <span class=\"vr\"></span>
                                        ";
                }
                // line 93
                yield "
                                        ";
                // line 94
                if ((($tmp = ($context["show_resolve_issues_action"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield "                                            <button
                                                type=\"submit\"
                                                class=\"btn btn-link p-0\"
                                                name=\"form_id\"
                                                value=\"";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
                    yield "\"
                                                formaction=\"";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("Form/Import/ResolveIssues"), "html", null, true);
                    yield "\"
                                            >
                                                ";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Resolve issues"), "html", null, true);
                    yield "
                                            </button>
                                        ";
                }
                // line 105
                yield "                                    </div>
                                ";
            }
            // line 107
            yield "                            </td>
                        </tr>
                    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/import/step2_preview.html.twig";
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
        return array (  386 => 107,  382 => 105,  376 => 102,  371 => 100,  367 => 99,  361 => 95,  359 => 94,  356 => 93,  352 => 91,  350 => 90,  347 => 89,  339 => 84,  335 => 83,  331 => 82,  327 => 81,  321 => 77,  319 => 76,  316 => 75,  314 => 74,  308 => 70,  299 => 68,  295 => 67,  290 => 65,  284 => 62,  281 => 61,  264 => 60,  258 => 167,  240 => 165,  234 => 164,  227 => 163,  210 => 162,  207 => 161,  198 => 159,  194 => 158,  189 => 156,  185 => 155,  176 => 149,  166 => 141,  159 => 139,  157 => 136,  156 => 134,  155 => 133,  153 => 132,  148 => 131,  141 => 129,  139 => 124,  138 => 123,  136 => 122,  131 => 121,  124 => 119,  122 => 114,  121 => 113,  119 => 112,  115 => 111,  112 => 110,  105 => 56,  101 => 55,  97 => 54,  89 => 49,  81 => 44,  77 => 42,  70 => 41,  62 => 38,  55 => 37,  50 => 33,  48 => 35,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/import/step2_preview.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/import/step2_preview.html.twig");
    }
}
