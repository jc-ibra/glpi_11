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

/* __string_template__02f91084c118b8bf726b6cd1323a81e1 */
class __TwigTemplate_6ed35ca9b1f5bd338a9266e80d69d38e extends Template
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
        // line 1
        yield "                <div id=\"viewaction";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rules_id"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"></div>
                ";
        // line 2
        if ((($tmp = ($context["can_add_new_action"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "                    <div class=\"center mt-1 mb-3\">
                        <button type=\"button\" name=\"add_action\" class=\"btn btn-primary\"><i class=\"ti ti-plus\"></i><span>";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_label"] ?? null), "html", null, true);
            yield "</span></button>
                        <script>
                            \$('button[name=\"add_action\"]').on('click', () => {
                                \$('#viewaction";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rules_id"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').load('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/viewsubitem.php"), "js"), "html", null, true);
            yield "', ";
            yield json_encode(($context["ajax_params"] ?? null));
            yield ");
                            });
                        </script>
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
        return "__string_template__02f91084c118b8bf726b6cd1323a81e1";
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
        return array (  59 => 7,  53 => 4,  50 => 3,  48 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__02f91084c118b8bf726b6cd1323a81e1", "");
    }
}
