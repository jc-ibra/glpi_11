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

/* pages/admin/logs_list.html.twig */
class __TwigTemplate_94bb420dc2791e801be6d3bbf7931271 extends Template
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
<div class=\"container px-4\">
    <div class=\"row mb-2\">
        <div class=\"col-12 col-xxl-6\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <a href=\"event.php\">
                        <i class=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Event::getIcon"), "html", null, true);
        yield " me-1\" aria-hidden=\"true\"></i>
                        <span>
                            ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Event", Session::getPluralNumber()), "html", null, true);
        yield "
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 col-xxl-6\">
            <div class=\"card\">
                <div class=\"card-header justify-content-between\">
                    <span class=\"fs-3\" role=\"heading\" aria-level=\"1\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Log files"), "html", null, true);
        yield "</span>

                    <div class=\"d-inline-flex\">
                        ";
        // line 57
        $context["sort_controls"] = [["key" => "filepath", "icon" => "ti ti-alphabet-latin", "label" => __("Sort by file path")], ["key" => "size", "icon" => "ti ti-file", "label" => __("Sort by size")], ["key" => "datemod", "icon" => "ti ti-clock", "label" => __("Sort by date")]];
        // line 72
        yield "
                        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sort_controls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_control"]) {
            // line 74
            yield "                            ";
            $context["active_order"] = ((($_v0 = $context["sort_control"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["key"] ?? null) : null) == ($context["order"] ?? null));
            // line 75
            yield "                            ";
            $context["curr_sort"] = "asc";
            // line 76
            yield "                            ";
            $context["next_sort"] = "asc";
            // line 77
            yield "                            ";
            if ((($tmp = ($context["active_order"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                                ";
                $context["curr_sort"] = ($context["sort"] ?? null);
                // line 79
                yield "                                ";
                if ((($context["sort"] ?? null) == "asc")) {
                    // line 80
                    yield "                                    ";
                    $context["next_sort"] = "desc";
                    // line 81
                    yield "                                ";
                }
                // line 82
                yield "                            ";
            }
            // line 83
            yield "
                            <a href=\"?order=";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["sort_control"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["key"] ?? null) : null), "html", null, true);
            yield "&amp;sort=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["next_sort"] ?? null), "html", null, true);
            yield "\"
                               class=\"btn ";
            // line 85
            yield (((($tmp = ($context["active_order"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-secondary") : ("btn-ghost-secondary"));
            yield " btn-sm me-1\"
                               title=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["sort_control"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["label"] ?? null) : null), "html", null, true);
            yield "\"
                               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                                <i class=\"ti ti-sort-";
            // line 88
            yield (((($context["curr_sort"] ?? null) == "asc")) ? ("ascending") : ("descending"));
            yield "\"></i>
                                <i class=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["sort_control"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["icon"] ?? null) : null), "html", null, true);
            yield "\"></i>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sort_control'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "                    </div>
                </div>
                <div class=\"list-group list-group-flush\">
                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 96
            yield "                        <span class=\"list-group-item list-group-item-action d-flex justify-content-between\" data-testid=\"log-list-item\">
                            <a class=\"text-truncate\"
                               href=\"logviewer.php?filepath=";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((($_v4 = $context["log"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["filepath"] ?? null) : null)), "html", null, true);
            yield "\">
                                <i class=\"ti ti-file me-1\" aria-hidden=\"true\"></i>
                                <span>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["log"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["filepath"] ?? null) : null), "html", null, true);
            yield "</span>
                            </a>
                            <span class=\"d-inline-flex\">
                                <span class=\"badge badge-outline bg-transparent fw-normal border-azure me-1\"
                                      title=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("file size"), "html", null, true);
            yield "\">
                                    ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedSize((($_v6 = $context["log"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["size"] ?? null) : null)), "html", null, true);
            yield "
                                </span>
                                <span class=\"badge badge-outline bg-transparent fw-normal border-blue\"
                                      title=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("date of last modification"), "html", null, true);
            yield "\">
                                    ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v7 = $context["log"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["datemod"] ?? null) : null)), "html", null, true);
            yield "
                                </span>

                                ";
            // line 112
            if ((($context["can_clear"] ?? null) || ($context["can_delete"] ?? null))) {
                // line 113
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/logviewer.php"), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"filepath\" value=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["log"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["filepath"] ?? null) : null), "html", null, true);
                yield "\">
                                        ";
                // line 115
                yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 115, $this->getSourceContext())->macro_csrfField(...[]);
                yield "
                                        <div>
                                            <button class=\"btn btn-sm ms-1 btn-ghost-secondary\"
                                            data-bs-toggle=\"dropdown\"
                                            title=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File actions"), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File actions"), "html", null, true);
                yield "\">
                                                <i class=\"fas ti ti-dots-vertical\" aria-hidden=\"true\"></i>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                <li>
                                                    <a href=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/logviewer.php"), "html", null, true);
                yield "?action=download_log_file&amp;filepath=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((($_v9 = $context["log"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["filepath"] ?? null) : null)), "html", null, true);
                yield "\"
                                                       class=\"dropdown-item\">
                                                        <i class=\"ti ti-file-download\" aria-hidden=\"true\"></i>
                                                        <span>";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Download file"), "html", null, true);
                yield "</span>
                                                    </a>
                                                </li>
                                                ";
                // line 130
                if ((($tmp = ($context["can_clear"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 131
                    yield "                                                    <li>
                                                        <button type=\"submit\" name=\"action\" value=\"empty\"
                                                                     class=\"dropdown-item\"
                                                                     title=\"";
                    // line 134
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty file"), "html", null, true);
                    yield "\"
                                                                     onclick=\"return confirm('";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to clear this file?"), "js"), "html", null, true);
                    yield "')\"
                                                                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                                                            <i class=\"ti ti-file-off\" aria-hidden=\"true\"></i>
                                                            <span>";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty file"), "html", null, true);
                    yield "</span>
                                                        </button>
                                                    </li>
                                                ";
                }
                // line 142
                yield "                                                ";
                if ((($tmp = ($context["can_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 143
                    yield "                                                    <li>
                                                        <button type=\"submit\" name=\"action\" value=\"delete\"
                                                                     class=\"dropdown-item\"
                                                                     title=\"";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty file"), "html", null, true);
                    yield "\"
                                                                     onclick=\"return confirm('";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this file?"), "js"), "html", null, true);
                    yield "')\"
                                                                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                                                            <i class=\"ti ti-trash-x\" aria-hidden=\"true\"></i>
                                                            <span>";
                    // line 150
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete file"), "html", null, true);
                    yield "</span>
                                                        </button>
                                                    </li>
                                                ";
                }
                // line 154
                yield "                                            </ul>
                                        </div>
                                    </form>
                                ";
            }
            // line 158
            yield "                            </span>
                        </span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "                </div>
            </div>
        </div>
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
        return "pages/admin/logs_list.html.twig";
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
        return array (  298 => 161,  290 => 158,  284 => 154,  277 => 150,  271 => 147,  267 => 146,  262 => 143,  259 => 142,  252 => 138,  246 => 135,  242 => 134,  237 => 131,  235 => 130,  229 => 127,  221 => 124,  211 => 119,  204 => 115,  200 => 114,  195 => 113,  193 => 112,  187 => 109,  183 => 108,  177 => 105,  173 => 104,  166 => 100,  161 => 98,  157 => 96,  153 => 95,  148 => 92,  139 => 89,  135 => 88,  130 => 86,  126 => 85,  120 => 84,  117 => 83,  114 => 82,  111 => 81,  108 => 80,  105 => 79,  102 => 78,  99 => 77,  96 => 76,  93 => 75,  90 => 74,  86 => 73,  83 => 72,  81 => 57,  75 => 54,  61 => 43,  56 => 41,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/logs_list.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/logs_list.html.twig");
    }
}
