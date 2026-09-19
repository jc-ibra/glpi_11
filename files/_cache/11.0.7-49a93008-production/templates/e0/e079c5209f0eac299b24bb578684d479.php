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

/* pages/admin/form/form_editor.html.twig */
class __TwigTemplate_8822ad8ab76b66be1e53a656c1563440 extends Template
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
        yield "
<form
    id=\"main-form\"
    data-testid=\"form-editor-container\"
    data-glpi-form-editor-container
    class=\"
        form-editor-container
        d-flex
        flex-column
        ";
        // line 56
        yield "        mt-n2
        mb-n2
        ";
        // line 58
        if ((($tmp =  !($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "            form-editor-readonly
        ";
        }
        // line 61
        yield "    \"
    method=\"POST\"
    action=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 63), "html", null, true);
        yield "\"
    data-ajax-submit ";
        // line 65
        yield "    data-ajax-submit-itemtype=\"Glpi\\Form\\Form\" ";
        // line 66
        yield "    data-track-changes=\"true\"
>

    ";
        // line 70
        yield "    ";
        // line 71
        yield "    ";
        // line 72
        yield "    <div data-glpi-form-editor class=\"form-editor row flex-reverse\">

        <div class=\"designer col-12\">
            <div class=\"row h-full\">
                <div class=\"d-flex\">
                    <div
                        class=\"flex-grow-1 d-flex px-4 py-3 me-6\"
                        data-glpi-form-editor-form
                        data-glpi-form-editor-active-form
                        data-testid=\"form-editor-left-panel\"
                    >
                        <div class=\"flex-grow-1\">
                            <section
                                data-glpi-form-editor-form-details
                                data-glpi-form-editor-on-click=\"set-active\"
                                aria-label=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form details"), "html", null, true);
        yield "\"
                            >
                                ";
        // line 89
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["invalid_questions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        <div class=\"alert-icon\">
                                            <i class=\"ti ti-exclamation-circle\"></i>
                                        </div>
                                        <div>
                                            <h4 class=\"alert-heading\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("These questions have an unknown type and will be deleted the next time this form is saved:"), "html", null, true);
            yield "</h4>
                                            <div class=\"alert-description\">
                                                <ul class=\"alert-list\">
                                                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["invalid_questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["invalid_question"]) {
                // line 99
                yield "                                                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["invalid_question"], "fields", [], "any", false, false, false, 99)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), "html", null, true);
                yield "</li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invalid_question'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 106
        yield "
                                ";
        // line 108
        yield "                                <div class=\"card form-details\">
                                    <div
                                        class=\"card-status-start bg-primary\"
                                        data-glpi-form-editor-active-form-status-indicator
                                    ></div>
                                    <div class=\"card-body\">

                                        ";
        // line 116
        yield "                                        <div class=\"d-flex\">
                                            ";
        // line 118
        yield "                                            <input
                                                title=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form name"), "html", null, true);
        yield "\"
                                                type=\"text\"
                                                class=\"form-control content-editable-h1\"
                                                name=\"name\"
                                                value=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
        yield "\"
                                                data-glpi-form-editor-form-details-name
                                                maxlength=\"255\"
                                            >

                                            ";
        // line 129
        yield "                                            <label class=\"form-check form-switch ms-3\" style=\"margin-top: 2px\">
                                                <input type=\"hidden\" value=\"0\" name=\"is_active\">
                                                <input
                                                    class=\"form-check-input\"
                                                    name=\"is_active\"
                                                    type=\"checkbox\"
                                                    value=\"1\"
                                                    ";
        // line 136
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 136), "is_active", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked ";
        }
        // line 137
        yield "                                                >
                                                <span class=\"form-check-label\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Active"), "html", null, true);
        yield "</span>
                                            </label>
                                        </div>

                                        ";
        // line 143
        yield "                                        <div class=\"content-editable-tinymce\" data-glpi-form-editor-header-description>
                                            ";
        // line 144
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 144, $this->getSourceContext())->macro_textareaField(...["header", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 146
($context["item"] ?? null), "fields", [], "any", false, false, false, 146), "header", [], "any", false, false, false, 146), __("Header"), Twig\Extension\CoreExtension::merge(        // line 148
($context["base_field_options"] ?? null), ["enable_richtext" => true, "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "mb" => "mb-0", "aria_label" => __("Form description"), "placeholder" => __("Add a description to your form..."), "init" => false, "init_on_demand" => true])]);
        // line 160
        yield "
                                        </div>
                                    </div>
                                </div>
                            </section>

                            ";
        // line 167
        yield "                            <div data-glpi-form-editor-blocks>
                                ";
        // line 168
        $context["number_of_sections"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getSections", [], "method", false, false, false, 168));
        // line 169
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getSections", [], "method", false, false, false, 169));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 170
            yield "                                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_section.html.twig", ["form" =>             // line 171
($context["item"] ?? null), "section" =>             // line 172
$context["section"], "question_types_manager" =>             // line 173
($context["question_types_manager"] ?? null), "section_index" => CoreExtension::getAttribute($this->env, $this->source,             // line 174
$context["loop"], "index", [], "any", false, false, false, 174), "can_update" =>             // line 175
($context["can_update"] ?? null), "show_section_form" => (            // line 176
($context["number_of_sections"] ?? null) > 1), "number_of_sections" =>             // line 177
($context["number_of_sections"] ?? null), "allow_unauthenticated_access" =>             // line 178
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 180
            yield "
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
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "                            </div>
                        </div>

                        <div class=\"mb-3\" data-glpi-form-editor-form-extra-details>
                            ";
        // line 186
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 187
($context["can_update"] ?? null), "form" =>         // line 188
($context["item"] ?? null), "vertical_layout" => true, "extra_class" => "mt-2"], false);
        // line 191
        yield "
                        </div>
                    </div>

                    <section class=\"col-12 col-lg-4 mt-0 p-0 rounded-0 card-footer border-start border-top-0 ms-auto\">
                        <section
                            id=\"glpi-form-properties-accordion\"
                            class=\"accordion open accordion-flush h-full\"
                            aria-label=\"Form properties accordion\"
                        >
                            <section class=\"accordion-item\">
                                <div class=\"accordion-header\" id=\"heading-item-properties\">
                                    <button
                                        class=\"accordion-button\"
                                        type=\"button\"
                                        ";
        // line 207
        yield "                                        ";
        // line 211
        yield "                                        aria-label=\"Properties\"
                                    >
                                        <i class=\"ti ti-alert-circle item-icon\"></i>
                                        <span class=\"item-title\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form properties"), "html", null, true);
        yield "</span>
                                    </button>
                                </div>
                                <section id=\"item-properties\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading-item-properties\" data-bs-parent=\"#glpi-form-properties-accordion\">
                                    <div class=\"accordion-body d-flex flex-column\">
                                        <script>
                                            function renderLayoutTemplateResult(data) {
                                                const icons = ";
        // line 221
        yield json_encode(Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\RenderLayout::STEP_BY_STEP, "cases", [], "any", false, false, false, 221), function ($__case__) use ($context, $macros) { $context["case"] = $__case__; return [CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "value", [], "any", false, false, false, 221) => CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "getIcon", [], "method", false, false, false, 221)]; }), function ($__carry__, $__item__) use ($context, $macros) { $context["carry"] = $__carry__; $context["item"] = $__item__; return Twig\Extension\CoreExtension::merge(($context["carry"] ?? null), ($context["item"] ?? null)); }, []));
        yield ";

                                                return \$(`<span class=\"w-full d-flex align-items-center gap-2\" title=\"\${_.escape(data.text)}\"\"><i class=\"\${_.escape(icons[data.id])}\"></i>\${_.escape(data.text)}</span>`);
                                            }

                                            function renderLayoutTemplateSelection(data) {
                                                return renderLayoutTemplateResult(data).addClass('flex-row-reverse');
                                            }
                                        </script>

                                        ";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

                                        ";
        // line 233
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 233, $this->getSourceContext())->macro_dropdownArrayField(...["render_layout", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 235
($context["item"] ?? null), "fields", [], "any", false, false, false, 235), "render_layout", [], "any", false, false, false, 235), Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\RenderLayout::STEP_BY_STEP, "cases", [], "any", false, false, false, 236),         // line 236
function ($__case__) use ($context, $macros) { $context["case"] = $__case__; return [CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "value", [], "any", false, false, false, 236) => CoreExtension::getAttribute($this->env, $this->source, ($context["case"] ?? null), "getLabel", [], "method", false, false, false, 236)]; }), function ($__carry__, $__item__) use ($context, $macros) { $context["carry"] = $__carry__; $context["item"] = $__item__; return Twig\Extension\CoreExtension::merge(($context["carry"] ?? null), ($context["item"] ?? null)); }, []), __("Render layout"), ["is_horizontal" => false, "full_width" => true, "templateSelection" => "renderLayoutTemplateSelection", "templateResult" => "renderLayoutTemplateResult", "add_field_attribs" => ["data-fix-dropdown-flex" => ""]]]);
        // line 247
        yield "

                                        ";
        // line 249
        $context["visibility_dropdown_field"] = Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/submit_button_conditional_visibility_dropdown.html.twig", ["item" =>         // line 250
($context["item"] ?? null)], false);
        // line 252
        yield "
                                        ";
        // line 253
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 253, $this->getSourceContext())->macro_field(...["",         // line 255
($context["visibility_dropdown_field"] ?? null), __("Conditional visibility for submit button"), ["is_horizontal" => false, "full_width" => true, "add_field_attribs" => ["data-glpi-form-editor-submit-button-conditional-visibility-field" => ""]]]);
        // line 264
        yield "

                                        ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

                                    </div>
                                </section>
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class=\"
        editor-footer
        justify-content-end
        d-flex
        flex-row-reverse
        py-2
        px-3
        ";
        // line 287
        yield "        ms-n2
        me-n2
    \">
        ";
        // line 290
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 290), "is_draft", [], "any", false, false, false, 290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 291
            yield "            ";
            // line 292
            yield "            <button
                class=\"btn btn-primary\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "\"
                aria-label=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "\"
            >
                <i class=\"ti ti-plus me-1\"></i>
                <span class=\"d-block add-label\">";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
            </button>
        ";
        } elseif ((($tmp =         // line 303
($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 304
            yield "            ";
            // line 305
            yield "            <button
                class=\"btn btn-primary\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
            yield "\"
                aria-label=\"";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
            yield "\"
            >
                <i class=\"ti ti-device-floppy me-1\"></i>
                <span class=\"d-block save-label\">";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
            yield "</span>
            </button>
        ";
        }
        // line 317
        yield "
        ";
        // line 319
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDelete", [], "method", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 320
            yield "            <button
                class=\"
                    btn
                    btn-ghost-secondary
                    me-2
                    ";
            // line 325
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 325), "is_deleted", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                \"
                type=\"submit\"
                name=\"restore\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash-off me-1\"></i>";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Restore"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 334
        yield "
        ";
        // line 336
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canPurge", [], "method", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 337
            yield "            <button
                class=\"btn btn-ghost-danger me-2 ";
            // line 338
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 338), "is_deleted", [], "any", false, false, false, 338)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\"
                type=\"submit\"
                name=\"purge\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash me-1\"></i>";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 346
        yield "
        ";
        // line 348
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDelete", [], "method", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 349
            yield "            ";
            // line 350
            yield "            <button
                class=\"
                    btn
                    btn-ghost-warning
                    me-2
                    ";
            // line 355
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 355), "is_deleted", [], "any", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                    ";
            // line 356
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 356), "is_draft", [], "any", false, false, false, 356)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "
                \"
                type=\"submit\"
                name=\"delete\"
                form=\"main-form\"
            >
                <i class=\"ti ti-trash me-1\"></i>";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Put in trashbin"), "html", null, true);
            yield "
            </button>
        ";
        }
        // line 365
        yield "
        ";
        // line 367
        yield "        <div class=\"me-auto\" data-glpi-form-editor-preview-actions>
            <a
                href=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/Form/Render/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 369), "id", [], "any", false, false, false, 369))), "html", null, true);
        yield "\"
                target=\"_blank\"
                class=\"btn btn-secondary\"
                type=\"button\"
                name=\"preview\"
                form=\"main-form\"
                title=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
        yield "\"
                data-glpi-form-editor-preview-action
            >
                <i class=\"ti ti-eye me-1\"></i>
                <span class=\"d-none d-xl-block\">";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
        yield "</span>
            </a>
            <button
                class=\"btn btn-secondary d-none\"
                type=\"submit\"
                name=\"update\"
                form=\"main-form\"
                title=\"";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and preview"), "html", null, true);
        yield "\"
                data-glpi-form-editor-on-click=\"queue-preview\"
                data-glpi-form-editor-save-and-preview-action
                data-glpi-form-editor-preview-url=\"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/Form/Render/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 389), "id", [], "any", false, false, false, 389))), "html", null, true);
        yield "\"
            >
                <i class=\"ti ti-eye me-1\"></i>
                <span class=\"d-none d-xl-block\">";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and preview"), "html", null, true);
        yield "</span>
            </button>
        </div>
    </div>

    ";
        // line 398
        yield "    <input type=\"hidden\" name=\"id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 398), "id", [], "any", false, false, false, 398), "html", null, true);
        yield "\">

    ";
        // line 401
        yield "    <input type=\"hidden\" name=\"uuid\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 401), "uuid", [], "any", false, false, false, 401), "html", null, true);
        yield "\">

    ";
        // line 404
        yield "    <input type=\"hidden\" name=\"_delete_missing_questions\" value=\"1\">
    <input type=\"hidden\" name=\"_delete_missing_sections\" value=\"1\">
    <input type=\"hidden\" name=\"_delete_missing_comments\" value=\"1\">

    ";
        // line 409
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 409), "is_draft", [], "any", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 410
            yield "        <input type=\"hidden\" name=\"is_draft\" value=\"0\">
    ";
        }
        // line 412
        yield "
    ";
        // line 414
        yield "
    ";
        // line 416
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/move_section_modal.html.twig");
        yield "

    ";
        // line 419
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/item_has_conditions_for_deletion_modal.html.twig");
        yield "
    ";
        // line 420
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/item_has_conditions_for_new_question_type_modal.html.twig");
        yield "
    ";
        // line 421
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/section_element_has_conditions_for_deletion_modal.html.twig");
        yield "

    ";
        // line 424
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/delete_non_empty_section_modal.html.twig");
        yield "
</form>

";
        // line 427
        if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 428
            yield "    ";
            // line 429
            yield "    <div data-glpi-form-editor-templates class=\"d-none\">

        ";
            // line 432
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 432));
            foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
                // line 433
                yield "            <div data-glpi-form-editor-question-template=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "html", null, true);
                yield "\">
                ";
                // line 435
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_question.html.twig", ["form" =>                 // line 436
($context["item"] ?? null), "question_types_manager" =>                 // line 437
($context["question_types_manager"] ?? null), "question_type" =>                 // line 438
$context["question_type"], "question" => null, "section" => null, "can_update" => true, "allow_unauthenticated_access" =>                 // line 442
($context["allow_unauthenticated_access"] ?? null)], false);
                // line 443
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 446
            yield "
        ";
            // line 448
            yield "        <div data-glpi-form-editor-comment-template>
            ";
            // line 449
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_comment.html.twig", ["form" =>             // line 450
($context["item"] ?? null), "section" => null, "can_update" => true], false);
            // line 453
            yield "
        </div>

        ";
            // line 457
            yield "        <div data-glpi-form-editor-section-template>
            ";
            // line 458
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_section.html.twig", ["form" =>             // line 459
($context["item"] ?? null), "section" => null, "can_update" => true, "show_section_form" => true, "number_of_sections" => 0, "allow_unauthenticated_access" =>             // line 464
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 465
            yield "
        </div>

        ";
            // line 469
            yield "        <div data-glpi-form-editor-horizontal-block-template>
            ";
            // line 470
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block.html.twig", ["blocks" => null, "can_update" => true, "form" =>             // line 473
($context["item"] ?? null), "allow_unauthenticated_access" =>             // line 474
($context["allow_unauthenticated_access"] ?? null)], false);
            // line 475
            yield "
        </div>

        ";
            // line 479
            yield "        <div data-glpi-form-editor-horizontal-block-placeholder-template>
            ";
            // line 480
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_horizontal_block_placeholder.html.twig", ["can_update" => true, "form" =>             // line 482
($context["item"] ?? null)], false);
            // line 483
            yield "
        </div>

        ";
            // line 487
            yield "        <select data-glpi-form-editor-question-types-values>
            ";
            // line 488
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 488));
            foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
                // line 489
                yield "                ";
                $context["parent_category"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source,                 // line 490
$context["question_type"], "getCategory", [], "method", false, false, false, 490)], "method", false, false, false, 489);
                // line 492
                yield "                <option
                    data-glpi-form-editor-question-type=\"";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parent_category"] ?? null), "html", null, true);
                yield "\"
                    value=\"";
                // line 494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "html", null, true);
                yield "\"
                >
                    ";
                // line 496
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getName", [], "method", false, false, false, 496), "html", null, true);
                yield "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 499
            yield "        </select>

    </div>
";
        }
        // line 503
        yield "
<script defer type=\"module\">
(async () => {
    const modules = await Promise.all([
        import(\"/js/modules/Forms/EditorController.js\"),
        import(\"/js/modules/Forms/EditorConvertedExtractedDefaultValue.js\"),
        import(\"/js/modules/Forms/EditorConvertedExtractedSelectableDefaultValue.js\")
    ]);
    const GlpiFormEditorController = modules[0].GlpiFormEditorController;
    const EditorConvertedExtractedDefaultValue = modules[1].GlpiFormEditorConvertedExtractedDefaultValue;
    const EditorConvertedExtractedSelectableDefaultValue = modules[2].GlpiFormEditorConvertedExtractedSelectableDefaultValue;

    const container_selector = \"[data-glpi-form-editor-container]\";
    const controller = new GlpiFormEditorController(
        container_selector,
        ";
        // line 518
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 518), "is_draft", [], "any", false, false, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ",
        \"";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getDefaultTypeClass", [], "method", false, false, false, 519), "js"), "html", null, true);
        yield "\",
        \"[data-glpi-form-editor-templates]\",
        ";
        // line 521
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getDestinations", [], "method", false, false, false, 521), function ($__destination__) use ($context, $macros) { $context["destination"] = $__destination__; return ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 522
($context["destination"] ?? null), "fields", [], "any", false, false, false, 522), "id", [], "any", false, false, false, 522), "name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 523
($context["destination"] ?? null), "fields", [], "any", false, false, false, 523), "name", [], "any", false, false, false, 523), "conditions" => CoreExtension::getAttribute($this->env, $this->source,         // line 524
($context["destination"] ?? null), "getConfiguredConditionsData", [], "method", false, false, false, 524)]; }));
        // line 525
        yield ",
        ";
        // line 526
        yield (((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
        yield ", // is_readonly
    );

    // Temporary solution, would be better to import it directly where it is needed but the current
    // design doesn't allow it.
    \$(container_selector).data('EditorConvertedExtractedDefaultValue', EditorConvertedExtractedDefaultValue);
    \$(container_selector).data('EditorConvertedExtractedSelectableDefaultValue', EditorConvertedExtractedSelectableDefaultValue);

    ";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypes", [], "method", false, false, false, 534));
        foreach ($context['_seq'] as $context["_key"] => $context["question_type"]) {
            // line 535
            yield "        controller.registerQuestionTypeOptions(
            '";
            // line 536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "js"), "html", null, true);
            yield "',
            ";
            // line 537
            yield CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getFormEditorJsOptions", [], "method", false, false, false, 537);
            yield "
        );

        ";
            // line 540
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypes", [], "method", false, false, false, 540))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 541
                yield "            controller.registerQuestionSubTypesOptions(
                '";
                // line 542
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class($context["question_type"]), "js"), "html", null, true);
                yield "',
                {
                    'subtypes'        : ";
                // line 544
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypes", [], "method", false, false, false, 544));
                yield ",
                    'default_value'   : '";
                // line 545
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeDefaultValue", [null], "method", false, false, false, 545), "js"), "html", null, true);
                yield "',
                    'field_name'      : '";
                // line 546
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeFieldName", [], "method", false, false, false, 546), "js"), "html", null, true);
                yield "',
                    'field_aria_label': '";
                // line 547
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question_type"], "getSubTypeFieldAriaLabel", [], "method", false, false, false, 547), "js"), "html", null, true);
                yield "',
                }
            )
        ";
            }
            // line 551
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question_type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 552
        yield "
    \$(container_selector).data('controller', controller);
    \$(container_selector).addClass(\"initialized\");
    \$(container_selector).trigger(\"initialized\");
})();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_editor.html.twig";
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
        return array (  848 => 552,  842 => 551,  835 => 547,  831 => 546,  827 => 545,  823 => 544,  818 => 542,  815 => 541,  813 => 540,  807 => 537,  803 => 536,  800 => 535,  796 => 534,  785 => 526,  782 => 525,  780 => 524,  779 => 523,  778 => 522,  777 => 521,  772 => 519,  768 => 518,  751 => 503,  745 => 499,  736 => 496,  731 => 494,  727 => 493,  724 => 492,  722 => 490,  720 => 489,  716 => 488,  713 => 487,  708 => 483,  706 => 482,  705 => 480,  702 => 479,  697 => 475,  695 => 474,  694 => 473,  693 => 470,  690 => 469,  685 => 465,  683 => 464,  682 => 459,  681 => 458,  678 => 457,  673 => 453,  671 => 450,  670 => 449,  667 => 448,  664 => 446,  656 => 443,  654 => 442,  653 => 438,  652 => 437,  651 => 436,  649 => 435,  644 => 433,  639 => 432,  635 => 429,  633 => 428,  631 => 427,  624 => 424,  619 => 421,  615 => 420,  610 => 419,  604 => 416,  601 => 414,  598 => 412,  594 => 410,  591 => 409,  585 => 404,  579 => 401,  573 => 398,  565 => 392,  559 => 389,  553 => 386,  543 => 379,  536 => 375,  527 => 369,  523 => 367,  520 => 365,  514 => 362,  505 => 356,  501 => 355,  494 => 350,  492 => 349,  489 => 348,  486 => 346,  480 => 343,  472 => 338,  469 => 337,  466 => 336,  463 => 334,  457 => 331,  448 => 325,  441 => 320,  438 => 319,  435 => 317,  429 => 314,  423 => 311,  419 => 310,  412 => 305,  410 => 304,  408 => 303,  403 => 301,  397 => 298,  393 => 297,  386 => 292,  384 => 291,  382 => 290,  377 => 287,  355 => 266,  351 => 264,  349 => 255,  348 => 253,  345 => 252,  343 => 250,  342 => 249,  338 => 247,  336 => 236,  335 => 235,  334 => 233,  329 => 231,  316 => 221,  306 => 214,  301 => 211,  299 => 207,  282 => 191,  280 => 188,  279 => 187,  278 => 186,  272 => 182,  257 => 180,  255 => 178,  254 => 177,  253 => 176,  252 => 175,  251 => 174,  250 => 173,  249 => 172,  248 => 171,  246 => 170,  228 => 169,  226 => 168,  223 => 167,  215 => 160,  213 => 148,  212 => 146,  211 => 144,  208 => 143,  201 => 138,  198 => 137,  194 => 136,  185 => 129,  177 => 123,  170 => 119,  167 => 118,  164 => 116,  155 => 108,  152 => 106,  145 => 101,  136 => 99,  132 => 98,  126 => 95,  119 => 90,  117 => 89,  112 => 87,  95 => 72,  93 => 71,  91 => 70,  86 => 66,  84 => 65,  80 => 63,  76 => 61,  72 => 59,  70 => 58,  66 => 56,  55 => 45,  53 => 40,  50 => 39,  48 => 38,  45 => 37,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_editor.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/form_editor.html.twig");
    }
}
