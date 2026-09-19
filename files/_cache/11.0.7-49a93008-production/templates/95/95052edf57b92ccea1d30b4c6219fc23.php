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

/* __string_template__e7099204f14c17c3a02265b5f600ad7a */
class __TwigTemplate_30afc06c2dd094dda565f8d87dc05783 extends Template
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
        yield "            <input type=\"hidden\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 1), "html", null, true);
        yield "[]\" value=\"\">
            ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["values"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 3
            yield "                <label class=\"form-check ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mb-0") : (""));
            yield "\">
                    <input
                        type=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_type"] ?? null), "html", null, true);
            yield "\"
                        name=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 6), "html", null, true);
            yield "[]\"
                        value=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "uuid", [], "any", false, false, false, 7), "html", null, true);
            yield "\"
                        class=\"form-check-input\" ";
            // line 8
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["value"], "checked", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield "
                    >
                    <span class=\"form-check-label\">
                        ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\I18nExtension']->translateFormItemKey(            // line 12
($context["question"] ?? null), Twig\Extension\CoreExtension::sprintf("%s-%s", Twig\Extension\CoreExtension::constant("Glpi\\Form\\QuestionType\\AbstractQuestionTypeSelectable::TRANSLATION_KEY_OPTION"), CoreExtension::getAttribute($this->env, $this->source,             // line 15
$context["value"], "uuid", [], "any", false, false, false, 15))), "html", null, true);
            // line 17
            yield "
                    </span>
                </label>
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
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__e7099204f14c17c3a02265b5f600ad7a";
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
        return array (  92 => 17,  90 => 15,  89 => 12,  88 => 11,  82 => 8,  78 => 7,  74 => 6,  70 => 5,  64 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__e7099204f14c17c3a02265b5f600ad7a", "");
    }
}
