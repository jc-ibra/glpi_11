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

/* pages/admin/form/access_control.html.twig */
class __TwigTemplate_0789ff327345824b03998e5790bc69cd extends Template
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
        // line 36
        yield "
<div class=\"py-2 px-3\">
    <div class=\"col-12 col-lg-6\">
        <form
            method=\"POST\"
            action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/form/access_control.form.php"), "html", null, true);
        yield "\"
            data-track-changes=\"true\"
            data-submit-once=\"true\"
        >
            ";
        // line 46
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["warnings"] ?? null)) > 0)) {
            // line 47
            yield "                <div class=\"mb-5\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["warnings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 49
                yield "                        <div
                            class=\"alert alert-warning d-flex align-items-center\"
                            role=\"alert\"
                        >
                            <i class=\"ti ti-alert-triangle me-2\"></i>
                            ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["warning"], "html", null, true);
                yield "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['warning'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                </div>
            ";
        }
        // line 59
        yield "
            ";
        // line 61
        yield "            ";
        // line 62
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["access_controls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["access_control"]) {
            // line 63
            yield "                ";
            $context["strategy"] = CoreExtension::getAttribute($this->env, $this->source, $context["access_control"], "getStrategy", [], "method", false, false, false, 63);
            // line 64
            yield "                ";
            $context["config"] = CoreExtension::getAttribute($this->env, $this->source, $context["access_control"], "getConfig", [], "method", false, false, false, 64);
            // line 65
            yield "
                <section
                    class=\"mb-5\"
                    data-glpi-access-control-form
                    aria-label=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["strategy"] ?? null), "getLabel", [], "method", false, false, false, 69), "html", null, true);
            yield "\"
                >
                    <h3 class=\"d-flex align-items-center\">
                        <i class=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["strategy"] ?? null), "getIcon", [], "method", false, false, false, 72), "html", null, true);
            yield " me-2\"></i>
                        ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["strategy"] ?? null), "getLabel", [], "method", false, false, false, 73), "html", null, true);
            yield "
                        <label class=\"form-check mb-0 ms-auto form-switch\">
                            <input
                                type=\"hidden\"
                                value=\"0\"
                                name=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["access_control"], "getNormalizedInputName", ["is_active"], "method", false, false, false, 78), "html", null, true);
            yield "\"
                            >
                            <input
                                aria-label=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Active"), "html", null, true);
            yield "\"
                                data-glpi-toggle-control
                                class=\"form-check-input\"
                                type=\"checkbox\"
                                name=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["access_control"], "getNormalizedInputName", ["is_active"], "method", false, false, false, 85), "html", null, true);
            yield "\"
                                value=\"1\"
                                ";
            // line 87
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["access_control"], "fields", [], "any", false, false, false, 87), "is_active", [], "any", false, false, false, 87) == true)) ? ("checked") : (""));
            yield "
                            >
                        </label>
                    </h3>
                    <div
                        style=\"";
            // line 92
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["access_control"], "fields", [], "any", false, false, false, 92), "is_active", [], "any", false, false, false, 92) == false)) ? ("opacity: 0.5") : (""));
            yield "\"
                        ";
            // line 94
            yield "                        data-glpi-toggle-control-target
                    >
                        ";
            // line 97
            yield "                        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["strategy"] ?? null), "renderConfigForm", [$context["access_control"]], "method", false, false, false, 97);
            yield "
                    </div>
                </section>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['access_control'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "
            ";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "canUpdate", [], "method", false, false, false, 102) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "canUpdateItem", [], "method", false, false, false, 102))) {
            // line 103
            yield "                ";
            // line 104
            yield "                <div class=\"d-flex flex-row-reverse\">
                    ";
            // line 106
            yield "                    <button
                        data-glpi-submit-id=\"access-controls\"
                        type=\"submit\"
                        class=\"btn btn-primary\"
                        name=\"update\"
                    >
                        <i class=\"ti ti-device-floppy me-2\"></i>
                        ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save changes"), "html", null, true);
            yield "
                    </button>
                </div>
            ";
        }
        // line 117
        yield "
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118), "html", null, true);
        yield "\"/>
            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
        </form>
    </div>
</div>

<script>
    // Toggle disabled state
    \$(\"[data-glpi-toggle-control]\").on(\"change\", function() {
        \$(this).closest(\"section[data-glpi-access-control-form]\")
            .find(\"[data-glpi-toggle-control-target]\")
            .css(\"opacity\", this.checked ? 1 : 0.5)
        ;
    });

    // Toggle state if any input is modified
    \$(\"section[data-glpi-access-control-form] :input\").on(\"change\", function(e) {
        // Do not trigger on this is_active checkbox itself
        if (\$(this).data(\"glpi-toggle-control\") !== undefined) {
            return;
        }

        \$(this).closest(\"section\")
            .find(\"[data-glpi-toggle-control]\")
            .prop(\"checked\", true)
            .trigger(\"change\")
        ;
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/access_control.html.twig";
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
        return array (  207 => 119,  203 => 118,  200 => 117,  193 => 113,  184 => 106,  181 => 104,  179 => 103,  177 => 102,  174 => 101,  163 => 97,  159 => 94,  155 => 92,  147 => 87,  142 => 85,  135 => 81,  129 => 78,  121 => 73,  117 => 72,  111 => 69,  105 => 65,  102 => 64,  99 => 63,  94 => 62,  92 => 61,  89 => 59,  85 => 57,  76 => 54,  69 => 49,  65 => 48,  62 => 47,  59 => 46,  52 => 41,  45 => 36,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/access_control.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/access_control.html.twig");
    }
}
