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

/* __string_template__f6954161ea94740ddbce0640c557e619 */
class __TwigTemplate_ae002f15a1537a03ca2c61fc2e744308 extends Template
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
        yield "                <div id=\"showLa";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["instID"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"></div>
                <script>
                    function viewAddEditLa";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["instID"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(item_id = -1) {
                        \$('#showLa";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["instID"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').load(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc"), "html", null, true);
        yield "/ajax/viewsubitem.php\", {
                            type: \"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["la"] ?? null), "getType", [], "method", false, false, false, 5), "html", null, true);
        yield "\",
                            parenttype: \"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["slm"] ?? null), "getType", [], "method", false, false, false, 6), "html", null, true);
        yield "\",
                            ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["slm"] ?? null), "getForeignKeyField", [], "method", false, false, false, 7), "html", null, true);
        yield ": ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["instID"] ?? null), "html", null, true);
        yield ",
                            id: item_id,
                        });
                    }
                    \$(() => {
                        \$('#levelagreement";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["instID"] ?? null), "html", null, true);
        yield "').on('click', 'tbody tr', function () {
                            viewAddEditLa";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["instID"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(\$(this).data('id'));
                        });
                    });
                </script>
                <div class=\"text-center mb-3\">
                    <button name=\"new_la\" type=\"button\" class=\"btn btn-primary\" onclick=\"viewAddEditLa";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["instID"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "();\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_msg"] ?? null), "html", null, true);
        yield "</button>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__f6954161ea94740ddbce0640c557e619";
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
        return array (  92 => 18,  83 => 13,  79 => 12,  69 => 7,  65 => 6,  61 => 5,  54 => 4,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__f6954161ea94740ddbce0640c557e619", "");
    }
}
