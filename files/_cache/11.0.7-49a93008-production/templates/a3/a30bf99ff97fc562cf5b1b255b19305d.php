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

/* pages/admin/form/form_section.html.twig */
class __TwigTemplate_15da8cc5b5eae978d7b61648d84317e4 extends Template
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
        // line 40
        yield "
";
        // line 41
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 41)->unwrap();
        // line 42
        yield "
";
        // line 44
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "no_label" => true];
        // line 49
        $context["section_index"] = ((array_key_exists("section_index", $context)) ? (Twig\Extension\CoreExtension::default(($context["section_index"] ?? null), 1)) : (1));
        // line 50
        yield "
<section
    data-glpi-form-editor-section
    data-glpi-form-editor-condition-type=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\Type::QUESTION, "SECTION", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "html", null, true);
        yield "\"
    class=\"mt-4\"
    aria-label=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form section"), "html", null, true);
        yield "\"
>
    <div
        class=\"bg-primary text-primary-fg p-1 rounded-top ";
        // line 58
        yield (((($tmp = ($context["show_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\"
        style=\"width: fit-content; max-width: 50%;\"
        data-glpi-form-editor-section-details
    >
        ";
        // line 63
        yield "        <input
            title=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Section name"), "html", null, true);
        yield "\"
            type=\"text\"
            class=\"form-control content-editable-h2 mb-0\"
            style=\"max-width: 100%;\"
            name=\"name\"
            value=\"";
        // line 69
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true)) : (""));
        yield "\"
            placeholder=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New section"), "html", null, true);
        yield "\"
            data-glpi-form-editor-section-details-name
            data-glpi-form-editor-dynamic-input
            maxlength=\"255\"
        />
    </div>

    <div class=\"d-flex align-items-end\">
        <section
            aria-label=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Section details"), "html", null, true);
        yield "\"
            data-glpi-form-editor-section-details
            data-glpi-form-editor-on-click=\"set-active\"
            class=\"flex-grow-1 ";
        // line 82
        yield (((($tmp = ($context["show_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\"
        >
            <div
                class=\"card\"
                style=\"border-top-left-radius:0;\"
            >
                <div
                    class=\"card-status-start bg-primary\"
                    data-glpi-form-editor-active-section-status-indicator
                ></div>
                <div class=\"card-body\">
                    ";
        // line 94
        yield "                    <div class=\"d-flex\">
                        ";
        // line 96
        yield "                        <div
                            class=\"content-editable-tinymce me-auto flex-grow-1\"
                            data-glpi-form-editor-section-description
                        >
                            ";
        // line 100
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 100, $this->getSourceContext())->macro_textareaField(...["description", (((($tmp =  !(null ===         // line 102
($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 102), "description", [], "any", false, false, false, 102)) : ("")), __("Header"), Twig\Extension\CoreExtension::merge(        // line 104
($context["base_field_options"] ?? null), ["enable_richtext" => true, "placeholder" => __("Add a description to this section"), "aria_label" => __("Section description"), "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "init" => false, "init_on_demand" => (((($tmp =  !(null ===         // line 113
($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "mb" => "mb-0"])]);
        // line 116
        yield "
                        </div>
                        <div class=\"d-flex align-items-start flex-grow-1\">
                            ";
        // line 120
        yield "                            <span
                                class=\"badge bg-secondary-lt\"
                                data-glpi-form-editor-section-block-badge
                                data-testid=\"section-block-badge\"
                            >
                                ";
        // line 125
        $context["count_blocks"] = (((($tmp = ($context["section"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "getBlocks", [], "method", false, false, false, 125))) : (1));
        // line 126
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_n("%d element", "%d elements", ($context["count_blocks"] ?? null)), ($context["count_blocks"] ?? null)), "html", null, true);
        yield "
                            </span>

                            <div class=\"ms-auto\"></div>

                            ";
        // line 132
        yield "                            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_visibility_dropdown.html.twig", ["item" =>         // line 133
($context["section"] ?? null), "type" => "Glpi\\Form\\Section"], false);
        // line 135
        yield "

                            ";
        // line 138
        yield "                            <i
                                role=\"button\"
                                class=\"ti ti-selector ms-3 cursor-pointer\"
                                data-bs-toggle=\"tooltip\"
                                data-bs-placement=\"top\"
                                title=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Collapse section"), "html", null, true);
        yield "\"
                                data-glpi-form-editor-on-click=\"collapse-section\"
                            ></i>

                            ";
        // line 148
        yield "                            <div class=\"dropdown ms-3 cursor-pointer d-flex align-items-center\">
                                <i
                                    class=\"ti ti-dots-vertical show\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-expanded=\"false\"
                                    role=\"button\"
                                    title=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("More actions"), "html", null, true);
        yield "\"
                                    aria-label=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("More actions"), "html", null, true);
        yield "\"
                                    data-glpi-form-editor-state-action
                                ></i>
                                <ul class=\"dropdown-menu\" data-bs-popper=\"none\">
                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item\"
                                            data-glpi-form-editor-on-click=\"duplicate-section\"
                                        >
                                            <i class=\"ti ti-copy me-2\"></i>
                                            <span>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate section"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item\"
                                            data-bs-toggle=\"modal\"
                                            data-bs-target=\"[data-glpi-form-editor-move-section-modal]\"
                                            data-glpi-form-editor-on-click=\"build-move-section-modal-content\"
                                        >
                                            <i class=\"ti ti-arrows-move-vertical me-2\"></i>
                                            <span>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move section"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item ";
        // line 184
        yield (((($context["section_index"] ?? null) == 1)) ? ("d-none") : (""));
        yield "\"
                                            aria-label=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Merge with previous section"), "html", null, true);
        yield "\"
                                            data-glpi-form-editor-on-click=\"merge-with-previous-section\"
                                        >
                                            <i class=\"ti ti-arrow-merge me-2\"></i>
                                            <span>";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Merge with previous section"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>

                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item\"
                                            data-glpi-form-editor-on-click=\"delete-section\"
                                        >
                                            <i class=\"ti ti-trash me-2\"></i>
                                            <span>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete section"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>

                                    <li>
                                        <button
                                            type=\"button\"
                                            class=\"dropdown-item\"
                                            aria-label=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "\"
                                            data-glpi-form-editor-on-click=\"show-visibility-dropdown\"
                                        >
                                            <i class=\"ti ti-eye-cog me-2\"></i>
                                            <span>";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <input
                        type=\"hidden\"
                        name=\"uuid\"
                        value=\"";
        // line 223
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 223), "uuid", [], "any", false, false, false, 223), "html", null, true)) : (""));
        yield "\"
                    />
                    <input
                        type=\"hidden\"
                        name=\"forms_forms_id\"
                        value=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 228), "id", [], "any", false, false, false, 228), "html", null, true);
        yield "\"
                    />
                    <input
                        type=\"hidden\"
                        name=\"rank\"
                        value=\"";
        // line 233
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 233), "rank", [], "any", false, false, false, 233), "html", null, true)) : (0));
        yield "\"
                    />
                </div>
            </div>
        </section>

        <div class=\"mb-2\" data-glpi-form-editor-section-extra-details>
            ";
        // line 240
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 241
($context["can_update"] ?? null), "form" =>         // line 242
($context["form"] ?? null), "vertical_layout" => true], false);
        // line 244
        yield "
        </div>
    </div>

    <div data-glpi-form-editor-section-blocks class=\"mt-3\">
    ";
        // line 249
        if ((($tmp = ($context["section"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 250
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "getBlocks", [], "method", false, false, false, 250));
            foreach ($context['_seq'] as $context["_key"] => $context["form_group_blocks"]) {
                // line 251
                yield "            ";
                if (is_iterable($context["form_group_blocks"])) {
                    // line 252
                    yield "                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block.html.twig", ["blocks" =>                     // line 253
$context["form_group_blocks"], "can_update" =>                     // line 254
($context["can_update"] ?? null), "form" =>                     // line 255
($context["form"] ?? null), "allow_unauthenticated_access" =>                     // line 256
($context["allow_unauthenticated_access"] ?? null)], false);
                    // line 257
                    yield "
            ";
                } else {
                    // line 259
                    yield "                ";
                    $context["form_block"] = $context["form_group_blocks"];
                    // line 260
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form_block"] ?? null), "displayBlockForEditor", [($context["can_update"] ?? null), ($context["allow_unauthenticated_access"] ?? null)], "method", false, false, false, 260), "html", null, true);
                    yield "
            ";
                }
                // line 262
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['form_group_blocks'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            yield "    ";
        }
        // line 264
        yield "    </div>

</section>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_section.html.twig";
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
        return array (  369 => 264,  366 => 263,  360 => 262,  354 => 260,  351 => 259,  347 => 257,  345 => 256,  344 => 255,  343 => 254,  342 => 253,  340 => 252,  337 => 251,  332 => 250,  330 => 249,  323 => 244,  321 => 242,  320 => 241,  319 => 240,  309 => 233,  301 => 228,  293 => 223,  279 => 212,  272 => 208,  261 => 200,  247 => 189,  240 => 185,  236 => 184,  227 => 178,  212 => 166,  198 => 155,  194 => 154,  186 => 148,  179 => 143,  172 => 138,  168 => 135,  166 => 133,  164 => 132,  155 => 126,  153 => 125,  146 => 120,  141 => 116,  139 => 113,  138 => 104,  137 => 102,  136 => 100,  130 => 96,  127 => 94,  113 => 82,  107 => 79,  95 => 70,  91 => 69,  83 => 64,  80 => 63,  73 => 58,  67 => 55,  62 => 53,  57 => 50,  55 => 49,  53 => 44,  50 => 42,  48 => 41,  45 => 40,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_section.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/form_section.html.twig");
    }
}
