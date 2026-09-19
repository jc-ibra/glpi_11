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

/* __string_template__6a9c829c8e3dec785a0f6ff2a6978ce6 */
class __TwigTemplate_1893a6e7826a53e22fcf75e9f487eace extends Template
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
        yield "            ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "
            ";
        // line 3
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 3, $this->getSourceContext())->macro_textareaField(...[        // line 4
($context["input_name"] ?? null),         // line 5
($context["value"] ?? null), "", Twig\Extension\CoreExtension::merge(        // line 7
($context["options"] ?? null), ["field_class" => "", "no_label" => true, "aria_label" => __("Title"), "enable_richtext" => true, "enable_images" => false, "enable_form_tags" => true, "form_tags_form_id" =>         // line 14
($context["form_id"] ?? null), "toolbar" => false, "editor_height" => 0, "statusbar" => false, "mb" => ""])]);
        // line 20
        yield "

            <script>
                tinymce.on('AddEditor', (e) => {
                    if (e.editor.id === '";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["input_name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 24)), "html", null, true);
        yield "') {
                        e.editor.on('keydown', (e) => {
                            if (e.keyCode === 13) {
                                e.preventDefault();
                            }
                        });
                    }
                });
            </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__6a9c829c8e3dec785a0f6ff2a6978ce6";
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
        return array (  60 => 24,  54 => 20,  52 => 14,  51 => 7,  50 => 5,  49 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__6a9c829c8e3dec785a0f6ff2a6978ce6", "");
    }
}
