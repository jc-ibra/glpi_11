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

/* pages/admin/helpdesk_home_config_for_entity.html.twig */
class __TwigTemplate_843da3ca7be479238b57dd07e132f4dd extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["is_root_entity"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getID", [], "method", false, false, false, 36) == 0);
        // line 37
        yield "
<div class=\"container-xl ms-0 mt-3\">
    <h2 class=\"fs-2 mb-2\">
        ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Custom illustrations"), "html", null, true);
        yield "
    </h2>

    ";
        // line 43
        if ((($tmp = ($context["is_root_entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        ";
            $context["scene_options"] = [Twig\Extension\CoreExtension::constant("Entity::SCENE_DEFAULT") => __("Default illustration"), Twig\Extension\CoreExtension::constant("Entity::SCENE_CUSTOM") => __("Custom illustration")];
            // line 48
            yield "    ";
        } else {
            // line 49
            yield "        ";
            $context["scene_options"] = [Twig\Extension\CoreExtension::constant("Entity::SCENE_DEFAULT") => __("Default illustration"), Twig\Extension\CoreExtension::constant("Entity::SCENE_CUSTOM") => __("Custom illustration"), Twig\Extension\CoreExtension::constant("Entity::SCENE_INHERIT") => __("Inherited from parent entity")];
            // line 54
            yield "    ";
        }
        // line 55
        yield "
    <form method=\"POST\" action=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getFormURL", [], "method", false, false, false, 56), "html", null, true);
        yield "\">
        <div class=\"row mb-3\">
            ";
        // line 58
        $context["sides"] = [["id" => "left_side", "label" => __("Left side"), "dropdown_label" => __("Left side configuration"), "field" => "custom_helpdesk_home_scene_left", "config" => CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["entity"] ?? null), "getSceneConfigForDropdown", ["custom_helpdesk_home_scene_left"], "method", false, false, false, 64), "default" => Twig\Extension\CoreExtension::constant("Entity::DEFAULT_LEFT_SCENE")], ["id" => "right_side", "label" => __("Right side"), "dropdown_label" => __("Right side configuration"), "field" => "custom_helpdesk_home_scene_right", "config" => CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["entity"] ?? null), "getSceneConfigForDropdown", ["custom_helpdesk_home_scene_right"], "method", false, false, false, 74), "default" => Twig\Extension\CoreExtension::constant("Entity::DEFAULT_RIGHT_SCENE")]];
        // line 80
        yield "
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["side"]) {
            // line 82
            yield "                <section
                    class=\"col-6\"
                    aria-labelledby=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["side"], "id", [], "any", false, false, false, 84) . "heading"), "html", null, true);
            yield "\"
                >
                    <h3
                        id=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["side"], "id", [], "any", false, false, false, 87) . "heading"), "html", null, true);
            yield "\"
                        class=\"mb-2 mt-1\"
                    >";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["side"], "label", [], "any", false, false, false, 89), "html", null, true);
            yield "</h3>

                    ";
            // line 92
            yield "                    <div class=\"mb-2\">
                        ";
            // line 93
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [CoreExtension::getAttribute($this->env, $this->source,             // line 94
$context["side"], "field", [], "any", false, false, false, 94),             // line 95
($context["scene_options"] ?? null), ["value" => CoreExtension::getAttribute($this->env, $this->source,             // line 97
$context["side"], "config", [], "any", false, false, false, 97), "width" => "100%", "aria_label" => CoreExtension::getAttribute($this->env, $this->source,             // line 99
$context["side"], "dropdown_label", [], "any", false, false, false, 99)]]);
            // line 102
            yield "                    </div>

                    ";
            // line 105
            yield "                    <section
                        class=\"";
            // line 106
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["side"], "config", [], "any", false, false, false, 106) == "default")) ? ("") : ("d-none"));
            yield "\"
                        data-glpi-parent-dropdown=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["side"], "field", [], "any", false, false, false, 107), "html", null, true);
            yield "\"
                        data-glpi-parent-dropdown-condition=\"default\"
                        aria-label=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default illustration preview"), "html", null, true);
            yield "\"
                    >
                        ";
            // line 111
            yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderScene(CoreExtension::getAttribute($this->env, $this->source, $context["side"], "default", [], "any", false, false, false, 111), 400);
            yield "
                    </section>

                    ";
            // line 115
            yield "                    <section
                        class=\"";
            // line 116
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["side"], "config", [], "any", false, false, false, 116) == "custom")) ? ("") : ("d-none"));
            yield "\"
                        data-glpi-parent-dropdown=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["side"], "field", [], "any", false, false, false, 117), "html", null, true);
            yield "\"
                        data-glpi-parent-dropdown-condition=\"custom\"
                        aria-label=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Custom illustration preview and selection"), "html", null, true);
            yield "\"
                    >
                        ";
            // line 121
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["side"], "config", [], "any", false, false, false, 121) == "custom") &&  !Twig\Extension\CoreExtension::testEmpty((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 121)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["side"], "field", [], "any", false, false, false, 121)] ?? null) : null)))) {
                // line 122
                yield "                            ";
                yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderScene((Twig\Extension\CoreExtension::constant("Glpi\\UI\\IllustrationManager::CUSTOM_SCENE_PREFIX") . (($_v1 = CoreExtension::getAttribute($this->env, $this->source,                 // line 125
($context["entity"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["side"], "field", [], "any", false, false, false, 125)] ?? null) : null)), 400);
                // line 127
                yield "
                        ";
            }
            // line 129
            yield "
                        ";
            // line 130
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["name" => CoreExtension::getAttribute($this->env, $this->source,             // line 132
$context["side"], "field", [], "any", false, false, false, 132), "onlyimages" => true]]);
            // line 136
            yield "                        <div class=\"form-text text-muted\">
                            ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Recommended size: %s"), "550x390px"), "html", null, true);
            yield "
                        </div>
                    </section>

                    ";
            // line 141
            if ((($tmp =  !($context["is_root_entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "                        ";
                // line 143
                yield "                        <section
                            class=\"";
                // line 144
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["side"], "config", [], "any", false, false, false, 144) == "inherit")) ? ("") : ("d-none"));
                yield "\"
                            data-glpi-parent-dropdown=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["side"], "field", [], "any", false, false, false, 145), "html", null, true);
                yield "\"
                            data-glpi-parent-dropdown-condition=\"inherit\"
                            aria-label=\"";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inherited illustration preview"), "html", null, true);
                yield "\"
                        >
                            <div class=\"d-flex flex-column text-muted mb-2\">
                                <span>
                                    ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The following illustration from the parent entity will be used:"), "html", null, true);
                yield "
                                </span>
                            </div>

                            <div>
                                ";
                // line 156
                yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderScene(CoreExtension::getAttribute($this->env, $this->source,                 // line 157
($context["entity"] ?? null), "getHelpdeskSceneId", [CoreExtension::getAttribute($this->env, $this->source, $context["side"], "field", [], "any", false, false, false, 157)], "method", false, false, false, 157), 400);
                // line 159
                yield "
                            </div>
                        </section>
                    ";
            }
            // line 163
            yield "                </section>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['side'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "        </div>

        ";
        // line 168
        yield "        <div class=\"d-flex mb-1\">
            <button
                class=\"btn btn-primary ms-auto\"
                name=\"update\"
                aria-label=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save custom illustrations settings"), "html", null, true);
        yield "\"
            >
                <i class=\"ti ti-upload me-2\"></i>
                ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save custom illustrations settings"), "html", null, true);
        yield "
            </button>
        </div>

        <input type=\"hidden\" name=\"id\" value=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getID", [], "method", false, false, false, 179), "html", null, true);
        yield "\">
        ";
        // line 180
        yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 180, $this->getSourceContext())->macro_csrfField(...[]);
        yield "
    </form>
</div>

<div class=\"container-xl ms-0 mt-3 mb-5\">
    <h2 class=\"fs-2 mb-2\">
        ";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("General"), "html", null, true);
        yield "
    </h2>

    <form method=\"POST\" action=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getFormURL", [], "method", false, false, false, 189), "html", null, true);
        yield "\">
        <div class=\"row mb-3\">
            <div class=\"col-6\">
                ";
        // line 192
        if ((($tmp = ($context["is_root_entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "                    ";
            $context["title_options"] = [Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_DEFAULT") => __("Default value"), Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_CUSTOM") => __("Custom value")];
            // line 197
            yield "                ";
        } else {
            // line 198
            yield "                    ";
            $context["title_options"] = [Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_DEFAULT") => __("Default value"), Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_CUSTOM") => __("Custom value"), Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_INHERIT") => __("Inherited from parent entity")];
            // line 203
            yield "                ";
        }
        // line 204
        yield "
                ";
        // line 205
        $context["title_config"] = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getHelpdeskHomeTitleConfigForDropdown", [], "method", false, false, false, 205);
        // line 206
        yield "
                <h3 class=\"mb-2 mt-1\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Main title"), "html", null, true);
        yield "</h3>
                <div class=\"mb-2\">
                    ";
        // line 209
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", ["custom_helpdesk_home_title",         // line 211
($context["title_options"] ?? null), ["value" =>         // line 213
($context["title_config"] ?? null), "width" => "100%", "aria_label" => __("Main title")]]);
        // line 218
        yield "                </div>

                ";
        // line 221
        yield "                <section
                    class=\"";
        // line 222
        yield (((($context["title_config"] ?? null) == Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_DEFAULT"))) ? ("") : ("d-none"));
        yield "\"
                    data-glpi-parent-dropdown=\"custom_helpdesk_home_title\"
                    data-glpi-parent-dropdown-condition=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_DEFAULT"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default title preview"), "html", null, true);
        yield "\"
                >
                    ";
        // line 227
        yield $macros["inputs"]->getTemplateForMacro("macro_text", $context, 227, $this->getSourceContext())->macro_text(...["_preview", CoreExtension::getAttribute($this->env, $this->source,         // line 229
($context["entity"] ?? null), "getDefaultHelpdeskHomeTitle", [], "method", false, false, false, 229), ["disabled" => true]]);
        // line 231
        yield "
                </section>

                ";
        // line 235
        yield "                <section
                    class=\"";
        // line 236
        yield (((($context["title_config"] ?? null) == Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_CUSTOM"))) ? ("") : ("d-none"));
        yield "\"
                    data-glpi-parent-dropdown=\"custom_helpdesk_home_title\"
                    data-glpi-parent-dropdown-condition=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_CUSTOM"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Custom title value"), "html", null, true);
        yield "\"
                >
                    ";
        // line 241
        yield $macros["inputs"]->getTemplateForMacro("macro_text", $context, 241, $this->getSourceContext())->macro_text(...["_custom_helpdesk_home_title", CoreExtension::getAttribute($this->env, $this->source,         // line 243
($context["entity"] ?? null), "getHelpdeskHomeTitle", [], "method", false, false, false, 243), ["additional_attributes" => ["placeholder" => __("Enter a custom title...")]]]);
        // line 249
        yield "
                </section>

                ";
        // line 253
        yield "                <section
                    class=\"";
        // line 254
        yield (((($context["title_config"] ?? null) == Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_INHERIT"))) ? ("") : ("d-none"));
        yield "\"
                    data-glpi-parent-dropdown=\"custom_helpdesk_home_title\"
                    data-glpi-parent-dropdown-condition=\"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Entity::HELPDESK_TITLE_INHERIT"), "html", null, true);
        yield "\"
                    aria-label=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inherited title preview"), "html", null, true);
        yield "\"
                >
                    ";
        // line 259
        yield $macros["inputs"]->getTemplateForMacro("macro_text", $context, 259, $this->getSourceContext())->macro_text(...["_preview", CoreExtension::getAttribute($this->env, $this->source,         // line 261
($context["entity"] ?? null), "getHelpdeskHomeTitle", [], "method", false, false, false, 261), ["disabled" => true]]);
        // line 263
        yield "
                </section>
            </div>

            <div class=\"col-6\">
                ";
        // line 268
        if ((($tmp = ($context["is_root_entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 269
            yield "                    ";
            $context["search_bar_options"] = [1 => __("Enabled"), 0 => __("Disabled")];
            // line 273
            yield "                ";
        } else {
            // line 274
            yield "                    ";
            $context["search_bar_options_config"] = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isHelpdeskSearchBarEnabled", [], "method", false, false, false, 274);
            // line 275
            yield "                    ";
            $context["search_bar_options"] = [1 => __("Enabled"), 0 => __("Disabled"), Twig\Extension\CoreExtension::constant("Entity::CONFIG_PARENT") => Twig\Extension\CoreExtension::sprintf(__("Inherited from parent entity (%1\$s)"), (((($tmp =             // line 278
($context["search_bar_options_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Enabled")) : (__("Disabled"))))];
            // line 280
            yield "                ";
        }
        // line 281
        yield "
                <h3 class=\"mb-2 mt-1\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search bar"), "html", null, true);
        yield "</h3>
                <div class=\"mb-2\">
                    ";
        // line 284
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", ["enable_helpdesk_home_search_bar",         // line 286
($context["search_bar_options"] ?? null), ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 288
($context["entity"] ?? null), "fields", [], "any", false, false, false, 288), "enable_helpdesk_home_search_bar", [], "any", false, false, false, 288), "width" => "100%", "aria_label" => __("Search bar")]]);
        // line 293
        yield "                </div>
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-6\">
                ";
        // line 299
        if ((($tmp = ($context["is_root_entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 300
            yield "                    ";
            $context["service_catalog_options"] = [1 => __("Enabled"), 0 => __("Disabled")];
            // line 304
            yield "                ";
        } else {
            // line 305
            yield "                    ";
            $context["service_catalog_config"] = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isServiceCatalogEnabled", [], "method", false, false, false, 305);
            // line 306
            yield "                    ";
            $context["service_catalog_options"] = [1 => __("Enabled"), 0 => __("Disabled"), Twig\Extension\CoreExtension::constant("Entity::CONFIG_PARENT") => Twig\Extension\CoreExtension::sprintf(__("Inherited from parent entity (%1\$s)"), (((($tmp =             // line 309
($context["service_catalog_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Enabled")) : (__("Disabled"))))];
            // line 311
            yield "                ";
        }
        // line 312
        yield "
                <h3 class=\"mb-2 mt-1\">";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Service catalog"), "html", null, true);
        yield "</h3>
                <div class=\"mb-2\">
                    ";
        // line 315
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", ["enable_helpdesk_service_catalog",         // line 317
($context["service_catalog_options"] ?? null), ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 319
($context["entity"] ?? null), "fields", [], "any", false, false, false, 319), "enable_helpdesk_service_catalog", [], "any", false, false, false, 319), "width" => "100%", "aria_label" => __("Service catalog")]]);
        // line 324
        yield "                </div>
            </div>

            <div class=\"col-6\">
                ";
        // line 328
        if ((($tmp = ($context["is_root_entity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 329
            yield "                    ";
            $context["expand_categories_options"] = [1 => __("Enabled"), 0 => __("Disabled")];
            // line 333
            yield "                ";
        } else {
            // line 334
            yield "                    ";
            $context["expand_categories_config"] = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "shouldExpandCategoriesInServiceCatalog", [], "method", false, false, false, 334);
            // line 335
            yield "                    ";
            $context["expand_categories_options"] = [1 => __("Enabled"), 0 => __("Disabled"), Twig\Extension\CoreExtension::constant("Entity::CONFIG_PARENT") => Twig\Extension\CoreExtension::sprintf(__("Inherited from parent entity (%1\$s)"), (((($tmp =             // line 338
($context["expand_categories_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Enabled")) : (__("Disabled"))))];
            // line 340
            yield "                ";
        }
        // line 341
        yield "
                <h3 class=\"mb-2 mt-1\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expand categories in the service catalog"), "html", null, true);
        yield "</h3>
                <div class=\"mb-2\">
                    ";
        // line 344
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", ["expand_service_catalog",         // line 346
($context["expand_categories_options"] ?? null), ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 348
($context["entity"] ?? null), "fields", [], "any", false, false, false, 348), "expand_service_catalog", [], "any", false, false, false, 348), "width" => "100%", "aria_label" => __("Expand categories in the service catalog")]]);
        // line 353
        yield "                </div>
            </div>
        </div>

        ";
        // line 358
        yield "        <div class=\"d-flex mb-1\">
            <button
                class=\"btn btn-primary ms-auto\"
                name=\"update\"
                aria-label=\"";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save general settings"), "html", null, true);
        yield "\"
            >
                <i class=\"ti ti-upload me-2\"></i>
                ";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save general settings"), "html", null, true);
        yield "
            </button>
        </div>

        <input type=\"hidden\" name=\"id\" value=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getID", [], "method", false, false, false, 369), "html", null, true);
        yield "\">
        ";
        // line 370
        yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 370, $this->getSourceContext())->macro_csrfField(...[]);
        yield "

    </form>
</div>

<script>
    import(\"/js/modules/DynamicDropdownController.js\")
        .then((module) => new module.DynamicDropdownController())
    ;
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/helpdesk_home_config_for_entity.html.twig";
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
        return array (  537 => 370,  533 => 369,  526 => 365,  520 => 362,  514 => 358,  508 => 353,  506 => 348,  505 => 346,  504 => 344,  499 => 342,  496 => 341,  493 => 340,  491 => 338,  489 => 335,  486 => 334,  483 => 333,  480 => 329,  478 => 328,  472 => 324,  470 => 319,  469 => 317,  468 => 315,  463 => 313,  460 => 312,  457 => 311,  455 => 309,  453 => 306,  450 => 305,  447 => 304,  444 => 300,  442 => 299,  434 => 293,  432 => 288,  431 => 286,  430 => 284,  425 => 282,  422 => 281,  419 => 280,  417 => 278,  415 => 275,  412 => 274,  409 => 273,  406 => 269,  404 => 268,  397 => 263,  395 => 261,  394 => 259,  389 => 257,  385 => 256,  380 => 254,  377 => 253,  372 => 249,  370 => 243,  369 => 241,  364 => 239,  360 => 238,  355 => 236,  352 => 235,  347 => 231,  345 => 229,  344 => 227,  339 => 225,  335 => 224,  330 => 222,  327 => 221,  323 => 218,  321 => 213,  320 => 211,  319 => 209,  314 => 207,  311 => 206,  309 => 205,  306 => 204,  303 => 203,  300 => 198,  297 => 197,  294 => 193,  292 => 192,  286 => 189,  280 => 186,  271 => 180,  267 => 179,  260 => 175,  254 => 172,  248 => 168,  244 => 165,  237 => 163,  231 => 159,  229 => 157,  228 => 156,  220 => 151,  213 => 147,  208 => 145,  204 => 144,  201 => 143,  199 => 142,  197 => 141,  190 => 137,  187 => 136,  185 => 132,  184 => 130,  181 => 129,  177 => 127,  175 => 125,  173 => 122,  171 => 121,  166 => 119,  161 => 117,  157 => 116,  154 => 115,  148 => 111,  143 => 109,  138 => 107,  134 => 106,  131 => 105,  127 => 102,  125 => 99,  124 => 97,  123 => 95,  122 => 94,  121 => 93,  118 => 92,  113 => 89,  108 => 87,  102 => 84,  98 => 82,  94 => 81,  91 => 80,  89 => 74,  88 => 64,  87 => 58,  82 => 56,  79 => 55,  76 => 54,  73 => 49,  70 => 48,  67 => 44,  65 => 43,  59 => 40,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/helpdesk_home_config_for_entity.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/helpdesk_home_config_for_entity.html.twig");
    }
}
