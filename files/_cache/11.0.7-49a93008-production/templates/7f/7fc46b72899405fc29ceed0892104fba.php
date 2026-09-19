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

/* pages/admin/form/form_question.html.twig */
class __TwigTemplate_fdea1cd9e7f6cebb70194cae718b478d extends Template
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
        // line 43
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "no_label" => true];
        // line 48
        yield "
<section
    role=\"option\"
    class=\"d-flex\"
    data-glpi-form-editor-block
    data-glpi-form-editor-question
    data-glpi-form-editor-condition-type=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\Type::QUESTION, "QUESTION", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "html", null, true);
        yield "\"
    data-glpi-draggable-item
    aria-label=\"";
        // line 56
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New question"), "html", null, true)));
        yield "\"
>
    <section
        data-glpi-form-editor-on-click=\"set-active\"
        data-glpi-form-editor-question-details
        data-glpi-form-editor-allow-anonymous=\"";
        // line 61
        yield ((( !($context["allow_unauthenticated_access"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "isAllowedForUnauthenticatedAccess", [], "method", false, false, false, 61))) ? (1) : (0));
        yield "\"
        class=\"card flex-grow-1\"
        aria-label=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Question details"), "html", null, true);
        yield "\"
    >
        <div
            class=\"card-status-start bg-primary\"
            data-glpi-form-editor-active-question-status-indicator
        ></div>
        <div class=\"card-body\">
            <div class=\"d-flex\">
                <i
                    class=\"glpi-form-editor-question-handle ti ti-grip-horizontal cursor-grab ms-auto me-auto mt-n3 mb-n2\"
                    data-glpi-form-editor-question-handle
                    draggable=\"true\"
                    data-glpi-form-editor-state-action
                    aria-label=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move question"), "html", null, true);
        yield "\"
                ></i>
            </div>
            ";
        // line 80
        yield "            <div class=\"d-flex mt-n1 align-items-center\">
                <i
                    class=\"ti ti-alert-triangle text-warning me-2 ";
        // line 82
        yield (((($context["allow_unauthenticated_access"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "isAllowedForUnauthenticatedAccess", [], "method", false, false, false, 82))) ? ("") : ("d-none"));
        yield "\"
                    data-glpi-form-editor-blacklisted-question-type-warning
                    data-bs-toggle=\"popover\"
                    data-bs-trigger=\"hover\"
                    data-bs-placement=\"top\"
                    data-bs-html=\"true\"
                    data-bs-content=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The current access policy allows unauthenticated access to this form, but this question type will be hidden to unauthenticated users."), "html", null, true);
        yield "\"
                ></i>
                <input
                    title=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Question name"), "html", null, true);
        yield "\"
                    class=\"form-control content-editable-h2 mb-0\"
                    type=\"text\"
                    name=\"name\"
                    value=\"";
        // line 95
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true)) : (""));
        yield "\"
                    placeholder=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New question"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-dynamic-input
                    data-glpi-form-editor-question-details-name
                    maxlength=\"255\"
                />

                ";
        // line 102
        if ((null === ($context["question"] ?? null))) {
            // line 103
            yield "                    ";
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, Glpi\Form\Condition\VisibilityStrategy::ALWAYS_VISIBLE, "ALWAYS_VISIBLE", [], "any", false, false, false, 103);
            // line 104
            yield "                ";
        } else {
            // line 105
            yield "                    ";
            $context["question_strategy"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "getConfiguredVisibilityStrategy", [], "method", false, false, false, 105);
            // line 106
            yield "                ";
        }
        // line 107
        yield "
                <div class=\"ms-auto\"></div>

                ";
        // line 111
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_validation_dropdown.html.twig", ["item" =>         // line 112
($context["question"] ?? null), "type" => "Glpi\\Form\\Question"], false);
        // line 114
        yield "

                ";
        // line 117
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/conditional_visibility_dropdown.html.twig", ["item" =>         // line 118
($context["question"] ?? null), "type" => "Glpi\\Form\\Question"], false);
        // line 120
        yield "

                ";
        // line 123
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-copy ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate question"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"duplicate-question\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 135
        yield "                <i
                    role=\"button\"
                    class=\"ti ti-trash ms-3 cursor-pointer\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    title=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
        yield "\"
                    data-glpi-form-editor-on-click=\"delete-question\"
                    data-glpi-form-editor-question-extra-details
                    data-glpi-form-editor-state-action
                ></i>

                ";
        // line 148
        yield "                <div class=\"dropdown ms-3 cursor-pointer d-flex align-items-center\">
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
                                aria-label=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "\"
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"show-visibility-dropdown\"
                            >
                                <i class=\"ti ti-eye-cog me-2\"></i>
                                <span>";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure visibility"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                        <li>
                            <button
                                aria-label=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure validation"), "html", null, true);
        yield "\"
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"show-validation-dropdown\"
                            >
                                <i class=\"ti ti-checks me-2\"></i>
                                <span>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure validation"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                        <li>
                            <button
                                type=\"button\"
                                class=\"dropdown-item\"
                                data-glpi-form-editor-on-click=\"copy-uuid\"
                            >
                                <i class=\"ti ti-id-badge me-2\"></i>
                                <span>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy uuid"), "html", null, true);
        yield "</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            ";
        // line 196
        yield "            <div
                class=\"content-editable-tinymce mt-2\"
                data-glpi-form-editor-question-description
                ";
        // line 200
        yield "                ";
        yield ((((null === ($context["question"] ?? null)) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 200), "description", [], "any", false, false, false, 200)) == 0))) ? ("data-glpi-form-editor-question-extra-details") : (""));
        yield "
            >
                ";
        // line 202
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 202, $this->getSourceContext())->macro_textareaField(...["description", (((($tmp =  !(null ===         // line 204
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 204), "description", [], "any", false, false, false, 204)) : ("")), __("Description"), Twig\Extension\CoreExtension::merge(        // line 206
($context["base_field_options"] ?? null), ["placeholder" => __("Add a description"), "aria_label" => __("Question description"), "enable_richtext" => true, "add_body_classes" => ["content-editable-tinymce-editor", "text-muted"], "editor_height" => "0", "rows" => 1, "toolbar_location" => "bottom", "init" => false, "init_on_demand" => (((($tmp =  !(null ===         // line 215
($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (false)), "mb" => "mb-0"])]);
        // line 218
        yield "
            </div>

            ";
        // line 222
        yield "            <div
                class=\"mt-2 ms-1\"
                data-glpi-form-editor-question-type-specific
            >
                ";
        // line 226
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "renderAdministrationTemplate", [($context["question"] ?? null)], "method", false, false, false, 226);
        yield "
            </div>

            <div
                class=\"d-flex flex-wrap align-items-center gap-2 mt-2 ms-1\"
                data-glpi-form-editor-question-extra-details
                data-fix-dropdown-flex
            >
                ";
        // line 235
        yield "                ";
        $context["base_attributes"] = (((null === ($context["question"] ?? null))) ? ([]) : (["glpi-loaded" => "false"]));
        // line 236
        yield "
                <div class=\"question-type-dropdown-group\">
                    ";
        // line 238
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 238, $this->getSourceContext())->macro_dropdownArrayField(...["_type_category", CoreExtension::getAttribute($this->env, $this->source,         // line 240
($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 240)], "method", false, false, false, 240), CoreExtension::getAttribute($this->env, $this->source,         // line 241
($context["question_types_manager"] ?? null), "getCategoriesDropdownValues", [], "method", false, false, false, 241), "", ["init" => false, "no_label" => true, "mb" => "", "field_class" => "", "class" => "form-select form-select-sm", "width" => "auto", "dropdownCssClass" => "question-type-dropdown-group-dropdown-select", "aria_label" => __("Question type"), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-type-category"],         // line 254
($context["base_attributes"] ?? null)), "templateSelection" => CoreExtension::getAttribute($this->env, $this->source,         // line 255
($context["question_types_manager"] ?? null), "getTemplateSelectionForCategories", [], "method", false, false, false, 255), "templateResult" => CoreExtension::getAttribute($this->env, $this->source,         // line 256
($context["question_types_manager"] ?? null), "getTemplateResultForCategories", [], "method", false, false, false, 256)]]);
        // line 258
        yield "

                    ";
        // line 260
        $context["types"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getQuestionTypesDropdownValuesForCategory", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 260)], "method", false, false, false, 260);
        // line 261
        yield "
                    ";
        // line 262
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 262, $this->getSourceContext())->macro_dropdownArrayField(...["type", get_class(        // line 264
($context["question_type"] ?? null)),         // line 265
($context["types"] ?? null), CoreExtension::getAttribute($this->env, $this->source,         // line 266
($context["question_type"] ?? null), "getName", [], "method", false, false, false, 266), ["init" => false, "no_label" => true, "mb" => "", "field_class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 271
($context["types"] ?? null)) == 1)) ? (" d-none") : ("")), "class" => "form-select form-select-sm", "width" => "auto", "aria_label" => __("Question sub type"), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-type", "glpi-form-editor-question-type-selector" => ""],         // line 279
($context["base_attributes"] ?? null)), "templateSelection" => CoreExtension::getAttribute($this->env, $this->source,         // line 280
($context["question_types_manager"] ?? null), "getTemplateSelectionForQuestionTypes", [], "method", false, false, false, 280), "templateResult" => CoreExtension::getAttribute($this->env, $this->source,         // line 281
($context["question_types_manager"] ?? null), "getTemplateResultForQuestionTypes", [], "method", false, false, false, 281)]]);
        // line 283
        yield "

                    ";
        // line 285
        $context["sub_types"] = CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getSubTypes", [], "method", false, false, false, 285);
        // line 286
        yield "                    ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 286, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 287
($context["question_type"] ?? null), "getSubTypeFieldName", [], "method", false, false, false, 287), CoreExtension::getAttribute($this->env, $this->source,         // line 288
($context["question_type"] ?? null), "getSubTypeDefaultValue", [($context["question"] ?? null)], "method", false, false, false, 288), CoreExtension::getAttribute($this->env, $this->source,         // line 289
($context["question_type"] ?? null), "getSubTypes", [], "method", false, false, false, 289), "", ["init" => false, "no_label" => true, "mb" => "", "field_class" => ((Twig\Extension\CoreExtension::testEmpty(        // line 295
($context["sub_types"] ?? null))) ? (" d-none") : ("")), "class" => "form-select form-select-sm", "width" => "auto", "disabled" => Twig\Extension\CoreExtension::testEmpty(        // line 298
($context["sub_types"] ?? null)), "aria_label" => CoreExtension::getAttribute($this->env, $this->source,         // line 299
($context["question_type"] ?? null), "getSubTypeFieldAriaLabel", [], "method", false, false, false, 299), "add_data_attributes" => Twig\Extension\CoreExtension::merge(["glpi-form-editor-on-change" => "change-question-sub-type", "glpi-form-editor-question-sub-type-selector" => "", "glpi-form-editor-specific-question-extra-data" => ""],         // line 304
($context["base_attributes"] ?? null))]]);
        // line 306
        yield "
                </div>

                ";
        // line 310
        yield "                <div class=\"ms-auto\" data-glpi-form-editor-specific-question-options data-glpi-form-editor-question-extra-details>
                    ";
        // line 311
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "renderAdministrationOptionsTemplate", [($context["question"] ?? null)], "method", false, false, false, 311);
        yield "
                </div>

                <label class=\"form-check form-switch ms-2 mb-0 cursor-pointer\">
                    <input type=\"hidden\" value=\"0\" name=\"is_mandatory\">
                    <input
                        class=\"form-check-input\"
                        name=\"is_mandatory\"
                        type=\"checkbox\"
                        value=\"1\"
                        ";
        // line 321
        yield ((( !(null === ($context["question"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 321), "is_mandatory", [], "any", false, false, false, 321))) ? ("checked") : (""));
        yield "
                    >
                    <span class=\"form-check-label\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mandatory"), "html", null, true);
        yield "</span>
                </label>
            </div>
        </div>

        ";
        // line 329
        yield "        <input
            type=\"hidden\"
            name=\"uuid\"
            value=\"";
        // line 332
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 332), "uuid", [], "any", false, false, false, 332), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"forms_sections_uuid\"
            value=\"";
        // line 337
        yield (((($tmp =  !(null === ($context["section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["section"] ?? null), "fields", [], "any", false, false, false, 337), "uuid", [], "any", false, false, false, 337), "html", null, true)) : (""));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"vertical_rank\"
            value=\"";
        // line 342
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 342), "vertical_rank", [], "any", false, false, false, 342), "html", null, true)) : (0));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"horizontal_rank\"
            value=\"";
        // line 347
        yield (((($tmp =  !(null === ($context["question"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["question"] ?? null), "fields", [], "any", false, false, false, 347), "horizontal_rank", [], "any", false, false, false, 347), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape( -1, "html", null, true)));
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"category\"
            value=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["question_types_manager"] ?? null), "getCategoryKey", [CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "getCategory", [], "method", false, false, false, 352)], "method", false, false, false, 352), "html", null, true);
        yield "\"
        />
        <input
            type=\"hidden\"
            name=\"type\"
            value=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("class", ($context["question_type"] ?? null)), "html", null, true);
        yield "\"
        />
    </section>

    <div data-glpi-form-editor-question-extra-details>
        ";
        // line 362
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_toolbar.html.twig", ["can_update" =>         // line 363
($context["can_update"] ?? null), "form" =>         // line 364
($context["form"] ?? null), "vertical_layout" => true], false);
        // line 366
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
        return "pages/admin/form/form_question.html.twig";
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
        return array (  460 => 366,  458 => 364,  457 => 363,  456 => 362,  448 => 357,  440 => 352,  432 => 347,  424 => 342,  416 => 337,  408 => 332,  403 => 329,  395 => 323,  390 => 321,  377 => 311,  374 => 310,  369 => 306,  367 => 304,  366 => 299,  365 => 298,  364 => 295,  363 => 289,  362 => 288,  361 => 287,  359 => 286,  357 => 285,  353 => 283,  351 => 281,  350 => 280,  349 => 279,  348 => 271,  347 => 266,  346 => 265,  345 => 264,  344 => 262,  341 => 261,  339 => 260,  335 => 258,  333 => 256,  332 => 255,  331 => 254,  330 => 241,  329 => 240,  328 => 238,  324 => 236,  321 => 235,  310 => 226,  304 => 222,  299 => 218,  297 => 215,  296 => 206,  295 => 204,  294 => 202,  288 => 200,  283 => 196,  273 => 188,  260 => 178,  251 => 172,  243 => 167,  234 => 161,  225 => 155,  221 => 154,  213 => 148,  204 => 141,  200 => 140,  193 => 135,  184 => 128,  177 => 123,  173 => 120,  171 => 118,  169 => 117,  165 => 114,  163 => 112,  161 => 111,  156 => 107,  153 => 106,  150 => 105,  147 => 104,  144 => 103,  142 => 102,  133 => 96,  129 => 95,  122 => 91,  116 => 88,  107 => 82,  103 => 80,  97 => 76,  81 => 63,  76 => 61,  68 => 56,  63 => 54,  55 => 48,  53 => 43,  50 => 42,  48 => 41,  45 => 40,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_question.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/form_question.html.twig");
    }
}
