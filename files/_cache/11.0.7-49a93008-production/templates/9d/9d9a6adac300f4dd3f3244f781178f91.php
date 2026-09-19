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

/* pages/admin/form/form_comment.html.twig */
class __TwigTemplate_0ea34082ef2a1745cc880d18e3d29afb extends Template
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
        // line 37
        yield "
";
        // line 38
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 38)->unwrap();
        // line 39
        yield "
";
        // line 40
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "no_label" => true];
        // line 45
        $context["comment"] = ((array_key_exists("comment", $context)) ? (Twig\Extension\CoreExtension::default(($context["comment"] ?? null), null)) : (null));
        // line 46
        yield "
<section
    role=\"option\"
    class=\"d-flex\"
    data-glpi-form-editor-block
    data-glpi-form-editor-comment
    data-glpi-form-editor-condition-type=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\Type::QUESTION, "COMMENT", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
        yield "\"
    data-glpi-draggable-item
    aria-label=\"";
        // line 54
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New comment"), "html", null, true)));
        yield "\"
>
    <section
        data-glpi-form-editor-on-click=\"set-active\"
        data-glpi-form-editor-comment-details
        class=\"card flex-grow-1\"
        aria-label=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Comment details"), "html", null, true);
        yield "\"
    >
        <div
            class=\"card-status-start bg-primary\"
            data-glpi-form-editor-active-comment-status-indicator
        ></div>
        <div class=\"card-body\">
            <div class=\"d-flex\">
                <i
                    class=\"glpi-form-editor-question-handle ti ti-grip-horizontal cursor-grab ms-auto me-auto mt-n3 mb-n2\"
                    data-glpi-form-editor-question-handle
                    draggable=\"true\"
                    data-glpi-form-editor-state-action
                ></i>
            </div>
            ";
        // line 76
        yield "            <div class=\"d-flex mt-n1 mb-3 align-items-center\">
                <input
                    class=\"form-control content-editable-h2 mb-0\"
                    type=\"text\"
                    name=\"name\"
                    value=\"";
        // line 81
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true)) : (""));
        yield "\"
                    placeholder=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New comment"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Comment title"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-dynamic-input
                    data-glpi-form-editor-comment-details-name
                    maxlength=\"255\"
                />

                <div class=\"ms-auto\"></div>

                ";
        // line 92
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_visibility_dropdown.html.twig", ["item" =>         // line 93
($context["comment"] ?? null), "type" => "Glpi\\Form\\Comment"], false);
        // line 95
        yield "

                ";
        // line 98
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-copy ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate comment"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"duplicate-comment\"
                    data-glpi-form-editor-comment-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 110
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-trash ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"delete-comment\"
                    data-glpi-form-editor-comment-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 123
        yield "                <div class=\"dropdown ms-3 cursor-pointer d-flex align-items-center\">
                    <i
                        class=\"ti ti-dots-vertical show\"
                        data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\"
                        role=\"button\"
                        title=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("More actions"), "html", null, true);
        yield "\"
                        aria-label=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("More actions"), "html", null, true);
        yield "\"
                        data-glpi-form-editor-state-action
                    ></i>
                    <ul class=\"dropdown-menu\" data-bs-popper=\"none\">
                        <li>
                            <button
                                type=\"button\"
                                class=\"dropdown-item\"
                                aria-label=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "\"
                                data-glpi-form-editor-on-click=\"show-visibility-dropdown\"
                            >
                                <i class=\"ti ti-eye-cog me-2\"></i>
                                <span>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            ";
        // line 150
        yield "            <div
                class=\"content-editable-tinymce\"
                data-glpi-form-editor-comment-description
                ";
        // line 154
        yield "                ";
        yield ((((null === ($context["comment"] ?? null)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 154), "description", [], "any", false, false, false, 154)) == 0))) ? ("data-glpi-form-editor-active-comment-extra-details") : (""));
        yield "
            >
                ";
        // line 156
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 156, $this->getSourceContext())->macro_textareaField(...["description", (((($tmp =  !(null ===         // line 158
($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 158), "description", [], "any", false, false, false, 158)) : ("")), __("Description"), Twig\Extension\CoreExtension::merge(        // line 160
($context["base_field_options"] ?? null), ["placeholder" => __("Add a description"), "aria_label" => __("Comment description"), "enable_richtext" => true, "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "init" => false, "init_on_demand" => (((($tmp =  !(null ===         // line 169
($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "mb" => "mb-0"])]);
        // line 172
        yield "
            </div>
        </div>

        ";
        // line 177
        yield "        <input
            type=\"hidden\"
            name=\"uuid\"
            value=\"";
        // line 180
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 180), "uuid", [], "any", false, false, false, 180), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"forms_sections_uuid\"
            value=\"";
        // line 185
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 185), "uuid", [], "any", false, false, false, 185), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"vertical_rank\"
            value=\"";
        // line 190
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 190), "vertical_rank", [], "any", false, false, false, 190), "html", null, true)) : (0));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"horizontal_rank\"
            value=\"";
        // line 195
        yield (((($tmp =  !(null === ($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["comment"] ?? null), "fields", [], "any", false, false, false, 195), "horizontal_rank", [], "any", false, false, false, 195), "html", null, true)) : (0));
        yield "\"
        />
    </section>

    <div data-glpi-form-editor-comment-extra-details>
        ";
        // line 200
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 201
($context["can_update"] ?? null), "form" =>         // line 202
($context["form"] ?? null), "vertical_layout" => true], false);
        // line 204
        yield "
    </div>
    <div data-glpi-form-editor-question-drag-merge></div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_comment.html.twig";
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
        return array (  270 => 204,  268 => 202,  267 => 201,  266 => 200,  258 => 195,  250 => 190,  242 => 185,  234 => 180,  229 => 177,  223 => 172,  221 => 169,  220 => 160,  219 => 158,  218 => 156,  212 => 154,  207 => 150,  197 => 142,  190 => 138,  179 => 130,  175 => 129,  167 => 123,  158 => 116,  154 => 115,  147 => 110,  138 => 103,  131 => 98,  127 => 95,  125 => 93,  123 => 92,  112 => 83,  108 => 82,  104 => 81,  97 => 76,  79 => 60,  70 => 54,  65 => 52,  57 => 46,  55 => 45,  53 => 40,  50 => 39,  48 => 38,  45 => 37,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_comment.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/form_comment.html.twig");
    }
}
