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

/* components/illustration/icon_picker_search_results.html.twig */
class __TwigTemplate_dca94f9da58b649b8779994f0b68463e extends Template
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
        $context["total_pages"] = Twig\Extension\CoreExtension::round(($this->env->getFunction('countIcons')->getCallable()(($context["filter"] ?? null)) / ($context["page_size"] ?? null)), 0, "ceil");
        // line 34
        $context["icon_ids"] = $this->env->getFunction('searchIcons')->getCallable()(($context["filter"] ?? null), ($context["page"] ?? null), ($context["page_size"] ?? null));
        // line 35
        yield "
<div
    data-glpi-icon-picker-body
    ";
        // line 40
        yield "    data-glpi-icon-picker-page-size=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_size"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 42
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon_ids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        <div class=\"row g-3 mb-4 align-items-start\">
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["icon_ids"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["icon_id"]) {
                // line 45
                yield "                <div class=\"col-4 col-sm-3 col-lg-2\" data-bs-dismiss=\"modal\" data-glpi-icon-picker-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon_id"], "html", null, true);
                yield "\">
                    <div class=\"card border-secondary-hover cursor-pointer rounded\">
                        <div class=\"card-body h-100 aspect-ratio-1\">
                            ";
                // line 48
                yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration($context["icon_id"]);
                yield "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['icon_id'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "        </div>

        ";
            // line 55
            if ((($context["total_pages"] ?? null) > 1)) {
                // line 56
                yield "            <div class=\"d-flex align-items-center\">
                <span class=\"text-secondary ms-auto me-3\">
                    ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Page %s of %s"), ($context["page"] ?? null), ($context["total_pages"] ?? null)), "html", null, true);
                yield "
                </span>

                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["total_pages"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 62
                    yield "                    ";
                    // line 67
                    yield "                    ";
                    if (CoreExtension::inFilter($context["i"], [1, (($context["page"] ?? null) - 1), ($context["page"] ?? null), (($context["page"] ?? null) + 1), ($context["total_pages"] ?? null)])) {
                        // line 68
                        yield "                        <button
                            class=\"btn me-1 ";
                        // line 69
                        yield ((($context["i"] == ($context["page"] ?? null))) ? ("active") : (""));
                        yield "\"
                            type=\"button\"
                            aria-label=\"";
                        // line 71
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Go to page %s"), $context["i"]), "html", null, true);
                        yield "\"
                            data-glpi-icon-picker-go-to-page=\"";
                        // line 72
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "\"
                        >
                            <span class=\"btn-text\" data-glpi-icon-picker-pagination-text>";
                        // line 74
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "</span>
                        </button>
                    ";
                    }
                    // line 77
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                yield "            </div>
        ";
            }
            // line 80
            yield "    ";
        } else {
            // line 81
            yield "        <div class=\"empty\">
            <p class=\"empty-title\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No results found"), "html", null, true);
            yield "</p>
            <p class=\"empty-subtitle text-secondary\">
                ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Try different keywords or filters."), "html", null, true);
            yield "
            </p>
        </div>
    ";
        }
        // line 88
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/illustration/icon_picker_search_results.html.twig";
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
        return array (  163 => 88,  156 => 84,  151 => 82,  148 => 81,  145 => 80,  141 => 78,  135 => 77,  129 => 74,  124 => 72,  120 => 71,  115 => 69,  112 => 68,  109 => 67,  107 => 62,  103 => 61,  97 => 58,  93 => 56,  91 => 55,  87 => 53,  76 => 48,  69 => 45,  65 => 44,  62 => 43,  60 => 42,  54 => 40,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/illustration/icon_picker_search_results.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/components/illustration/icon_picker_search_results.html.twig");
    }
}
