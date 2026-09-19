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

/* pages/admin/entity/custom_ui.html.twig */
class __TwigTemplate_15b2f89eb784c7f5ba9ed0e1c8506d4e extends Template
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
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "        ";
        $context["css_code"] = (((($tmp =  !(null === ($context["inherited_css"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["inherited_css"] ?? null)) : ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["custom_css_code"] ?? null) : null)));
        // line 40
        yield "        ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 40, $this->getSourceContext())->macro_dropdownArrayField(...["enable_custom_css", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["enable_custom_css"] ?? null) : null), ($context["enable_css_options"] ?? null), __("Enable CSS customization"), ["add_field_html" =>         // line 41
($context["enable_css_inheritance_label"] ?? null)]]);
        // line 42
        yield "
        ";
        // line 43
        $context["inherited_value"] = ($context["enabled_css_inherited_value"] ?? null);
        // line 44
        yield "        ";
        $context["show_editor"] = (((null === ($context["inherited_value"] ?? null)) || (($context["inherited_value"] ?? null) == 1)) && ((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["enable_custom_css"] ?? null) : null) != 0));
        // line 45
        yield "        <div id=\"custom_css_container\" class=\"custom_css_container ";
        yield (((($tmp = ($context["show_editor"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\" style=\"height: 400px\"></div>
        <div class=\"alert alert-info ";
        // line 46
        yield ((((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["enable_custom_css"] ?? null) : null) == 0)) ? ("") : ("d-none"));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Custom CSS is disabled"), "html", null, true);
        yield "</div>
        <script>
            const refreshCustomCSSEditor = () => {
                if (window.monaco !== undefined) {
                    window.monaco.editor.getEditors().forEach((editor) => {
                        if (editor._domElement.className.includes('custom_css_container')) {
                            editor.dispose();
                        }
                    })
                }
                \$(function() {
                    window.GLPI.Monaco.createEditor('custom_css_container', 'css', `";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["css_code"] ?? null), "js"), "html", null, true);
        yield "`, [], {
                        _force_default_lang: true,
                        readOnly: ";
        // line 59
        yield (((($tmp =  !(null === ($context["inherited_css"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
        yield "
                    }).then((editor) => {
                        editor.editor.layout();
                    });
                });
            };
            \$(() => {
                refreshCustomCSSEditor();
                \$('select[name=\"enable_custom_css\"]').on('change', (e) => {
                    const val = \$(e.target).val();
                    if (val === '1') {
                        \$('.alert-info').addClass('d-none');
                        \$('#custom_css_container').removeClass('d-none');
                    } else if (val === '-2') {
                        \$('.alert-info').addClass('d-none');
                        if (";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("inherited_value", $context)) ? (Twig\Extension\CoreExtension::default(($context["inherited_value"] ?? null), 0)) : (0)), "html", null, true);
        yield " === 0) {
                            \$('#custom_css_container').addClass('d-none');
                        } else {
                            \$('#custom_css_container').removeClass('d-none');
                        }
                    } else {
                        \$('.alert-info').removeClass('d-none');
                        \$('#custom_css_container').addClass('d-none');
                    }
                    refreshCustomCSSEditor();
                });
                \$('#custom_css_container').closest('form').on('formdata', (e) => {
                    const editors = window.monaco.editor.getEditors().filter((editor) => {
                        return editor._domElement.classList.contains('custom_css_container');
                    });
                    if (editors.length) {
                        e.originalEvent.formData.delete('custom_css_code');
                        e.originalEvent.formData.append('custom_css_code', editors[0].getValue());
                    }
                });
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
        return "pages/admin/entity/custom_ui.html.twig";
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
        return array (  135 => 74,  117 => 59,  112 => 57,  96 => 46,  91 => 45,  88 => 44,  86 => 43,  83 => 42,  81 => 41,  79 => 40,  76 => 39,  64 => 38,  57 => 37,  52 => 33,  50 => 35,  48 => 34,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/entity/custom_ui.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/entity/custom_ui.html.twig");
    }
}
