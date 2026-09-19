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

/* components/form/pending_reason_is_default.html.twig */
class __TwigTemplate_eed6937eb44552ce0b8565a0712fa21e extends Template
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
        if ((($tmp = ($context["show_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <span id=\"is_default_warning\" class=\"text-warning d-none\">
        ";
            // line 35
            yield ($context["tooltip"] ?? null);
            yield "
    </span>
";
        }
        // line 38
        yield "
<script>
    \$('select[name=\"is_default\"]').on(\"change\", function () {
        if (\$(this).val() == 1) {
            \$(\"#is_default_warning\").removeClass(\"d-none\");
            \$('select[name=\"is_pending_per_default\"]').prop(\"disabled\", false);
        } else {
            \$(\"#is_default_warning\").addClass(\"d-none\");
            \$('select[name=\"is_pending_per_default\"]').prop(\"disabled\", true);
            \$('select[name=\"is_pending_per_default\"]').trigger('setValue', 0);
        }
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
        return "components/form/pending_reason_is_default.html.twig";
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
        return array (  56 => 38,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/pending_reason_is_default.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/components/form/pending_reason_is_default.html.twig");
    }
}
