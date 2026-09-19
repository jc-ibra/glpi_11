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

/* pages/admin/form/form_destination_commonitil_config.html.twig */
class __TwigTemplate_29db3437f07dbc6040cc92c7e4002e4b extends Template
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
        // line 287
        yield "
<div class=\"overflow-x-hidden row d-flex mx-n4 border-top\">
    <div class=\"col-12 col-lg-8 order-last order-lg-first pt-2 pe-2 pe-lg-4 d-flex flex-column\">
        <div class=\"timeline-item mb-3 ITILContent ps-4\">
            <div class=\"row\">
                <div class=\"col-12 col-sm\">
                    <div class=\"mt-2 timeline-content left card\">
                        <div class=\"card-body\">
                            <div class=\"read-only-content\">
                                <div class=\"card-title card-header mx-n3 mt-n3\">
                                    ";
        // line 297
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-titlefield"], "method", false, false, false, 297);
        // line 298
        yield "                                    ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 298, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                                </div>
                                <div class=\"rich_text_container\">
                                    ";
        // line 301
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-contentfield"], "method", false, false, false, 301);
        // line 302
        yield "                                    ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 302, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"timeline-item mb-3 ITILFollowup ps-4\">
            <div class=\"row\">
                <div class=\"col-12 col-sm\">
                    <div class=\"mt-2 timeline-content left card\">
                        <div class=\"card-body\">
                            ";
        // line 316
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-itilfollowupfield"], "method", false, false, false, 316);
        // line 317
        yield "                            ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 317, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"timeline-item mb-3 ITILTask todo ps-4\">
            <div class=\"row\">
                <div class=\"col-12 col-sm\">
                    <div class=\"mt-2 timeline-content left card\">
                        <div class=\"card-body\">
                            ";
        // line 329
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-itiltaskfield"], "method", false, false, false, 329);
        // line 330
        yield "                            ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 330, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"timeline-item mb-3 ITILValidation todo ps-4\">
            <div class=\"row\">
                <div class=\"col-12 col-sm\">
                    <div class=\"mt-2 timeline-content left card\">
                        <div class=\"card-body\">
                            ";
        // line 342
        $context["field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldByKey", ["glpi-form-destination-commonitilfield-validationfield"], "method", false, false, false, 342);
        // line 343
        yield "                            ";
        yield $this->getTemplateForMacro("macro_field_config_section", $context, 343, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), ($context["field"] ?? null), ($context["form"] ?? null), ($context["config"] ?? null), false]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-12 col-lg-4 mt-0 p-0 rounded-0 card-footer border-start border-top-0\">
        ";
        // line 351
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 352
        yield "
        <section
            id=\"glpi-itil-destinations-accordion-";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
            class=\"accordion open accordion-flush\"
            aria-label=\"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Destination fields accordion"), "html", null, true);
        yield "\"
        >
            ";
        // line 358
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getConfigurableFieldsGroupedByCategory", [], "method", false, false, false, 358));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 359
            yield "                ";
            $context["already_rendered_config"] = ["glpi-form-destination-commonitilfield-titlefield", "glpi-form-destination-commonitilfield-contentfield", "glpi-form-destination-commonitilfield-itilfollowupfield", "glpi-form-destination-commonitilfield-itiltaskfield", "glpi-form-destination-commonitilfield-validationfield"];
            // line 366
            yield "                ";
            $context["fields"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "fields", [], "any", false, false, false, 366), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 366), ($context["already_rendered_config"] ?? null)); });
            // line 367
            yield "
                ";
            // line 368
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["fields"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 369
                yield "                    <section class=\"accordion-item border-bottom\">
                        <div class=\"accordion-header\" id=\"heading-item-";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 370), "html", null, true);
                yield "\">
                            <button
                                class=\"accordion-button collapsed\"
                                type=\"button\"
                                data-bs-toggle=\"collapse\"
                                data-bs-target=\"#item-";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 375), "html", null, true);
                yield "\"
                                aria-expanded=\"true\"
                                aria-controls=\"item-";
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 377), "html", null, true);
                yield "\"
                                aria-label=\"";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 378), "html", null, true);
                yield "\"
                            >
                                <i class=\"";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 380), "html", null, true);
                yield " item-icon\"></i>
                                <span class=\"item-title\">";
                // line 381
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 381), "html", null, true);
                yield "</span>
                            </button>
                        </div>
                        <section
                            id=\"item-";
                // line 385
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 385), "html", null, true);
                yield "\"
                            class=\"accordion-collapse collapse\"
                            aria-labelledby=\"heading-item-";
                // line 387
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 387), "html", null, true);
                yield "\"
                            data-bs-parent=\"#glpi-itil-destinations-accordion-";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\"
                        >
                            <div class=\"accordion-body d-flex flex-column space-y-3\">
                                ";
                // line 391
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 392
                    yield "                                    ";
                    yield $this->getTemplateForMacro("macro_field_config_section", $context, 392, $this->getSourceContext())->macro_field_config_section(...[($context["item"] ?? null), ($context["destination"] ?? null), $context["field"], ($context["form"] ?? null), ($context["config"] ?? null)]);
                    yield "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 394
                yield "                            </div>
                        </section>
                    </section>
                ";
            }
            // line 398
            yield "            ";
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
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        yield "        </section>
    </div>
    <div class=\"itil-footer card-footer p-0 border-top p-2 ps-4 pe-4\">
        ";
        // line 402
        if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 403
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/form/form_destination_actions.html.twig", ["form" =>             // line 404
($context["form"] ?? null), "destination" =>             // line 405
($context["destination"] ?? null)], false);
            // line 406
            yield "
        ";
        }
        // line 408
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 38
    public function macro_field_config_section($item = null, $destination = null, $field = null, $form = null, $config = null, $show_label = true, $extra_options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "destination" => $destination,
            "field" => $field,
            "form" => $form,
            "config" => $config,
            "show_label" => $show_label,
            "extra_options" => $extra_options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    ";
            $macros["fields"] = $this->load("components/form/fields_macros.html.twig", 39)->unwrap();
            // line 40
            yield "
    ";
            // line 41
            $context["config_field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getConfig", [($context["form"] ?? null), ($context["config"] ?? null)], "method", false, false, false, 41);
            // line 42
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "supportAutoConfiguration", [], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "        ";
                $context["use_auto_configuration"] = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isAutoConfigurated", [($context["config"] ?? null)], "method", false, false, false, 43);
                // line 44
                yield "        ";
                $context["auto_configuration_checkbox"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 45
                    yield "            <div class=\"ms-auto row g-2 me-2 mb-2\">
                <label class=\"col form-check form-switch mb-0\">
                    <input
                        name=\"";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getAutoConfigKey", [], "method", false, false, false, 48)], "method", false, false, false, 48), "html", null, true);
                    yield "\"
                        type=\"hidden\"
                        value=\"0\"
                        data-glpi-itildestination-toggle-do-not-disable
                    >
                    <input
                        name=\"";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getAutoConfigKey", [], "method", false, false, false, 54)], "method", false, false, false, 54), "html", null, true);
                    yield "\"
                        class=\"form-check-input\"
                        type=\"checkbox\"
                        value=\"1\"
                        ";
                    // line 58
                    yield (((($tmp = ($context["use_auto_configuration"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
                    yield "
                        data-glpi-itildestination-toggle-auto-config
                        data-glpi-itildestination-toggle-do-not-disable
                    >
                    <span class=\"form-check-label\">";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Auto config"), "html", null, true);
                    yield "</span>
                </label>
                <span class=\"col-auto form-help align-self-center\"
                    data-bs-toggle=\"popover\"
                    data-bs-trigger=\"hover\"
                    data-bs-placement=\"top\"
                    data-bs-html=\"true\"
                    data-bs-content=\"";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The auto configuration option allows dynamically configuring the content of the created object based on the different fields of the form."), "html", null, true);
                    yield "\">
                    ?
                </span>
            </div>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 74
                yield "
        ";
                // line 75
                $context["extra_options"] = Twig\Extension\CoreExtension::merge(($context["extra_options"] ?? null), ["disabled" =>                 // line 76
($context["use_auto_configuration"] ?? null)]);
                // line 78
                yield "    ";
            }
            // line 79
            yield "
    ";
            // line 80
            $context["field_container_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 81
            yield "    ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 82
            yield "    <section data-glpi-itildestination-field=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field_container_rand"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getLabel", [], "method", false, false, false, 82) . " configuration"), "html", null, true);
            yield "\">
        ";
            // line 83
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["config_field"] ?? null), "Glpi\\Form\\Destination\\ConfigFieldWithStrategiesInterface")) {
                // line 84
                yield "            ";
                $context["label_for"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [(("dropdown_" . Twig\Extension\CoreExtension::sprintf("%s[%s][]", CoreExtension::getAttribute($this->env, $this->source,                 // line 86
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 86)], "method", false, false, false, 86), CoreExtension::getAttribute($this->env, $this->source,                 // line 87
($context["config_field"] ?? null), "getStrategiesInputName", [], "method", false, false, false, 87))) .                 // line 88
($context["rand"] ?? null))]);
                // line 90
                yield "        ";
            } elseif ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["config_field"] ?? null), "Glpi\\Form\\Destination\\CommonITILField\\SimpleValueConfig")) {
                // line 91
                yield "            ";
                $context["label_for"] = Twig\Extension\CoreExtension::sprintf("%s[%s]_%s", CoreExtension::getAttribute($this->env, $this->source,                 // line 92
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 92)], "method", false, false, false, 92), Twig\Extension\CoreExtension::constant("Glpi\\Form\\Destination\\CommonITILField\\SimpleValueConfig::VALUE"),                 // line 94
($context["rand"] ?? null));
                // line 96
                yield "        ";
            }
            // line 97
            yield "
        <div class=\"d-flex align-items-center\">
            ";
            // line 99
            if ((($tmp = ($context["show_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "                <label
                    class=\"form-label\"
                    for=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("label_for", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_for"] ?? null), "")) : ("")), "html", null, true);
                yield "\"
                >
                    ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getLabel", [], "method", false, false, false, 104), "html", null, true);
                yield "
                </label>
            ";
            }
            // line 107
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "supportAutoConfiguration", [], "method", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["auto_configuration_checkbox"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 110
            yield "        </div>
        <section data-glpi-itildestination-field-configs>
            ";
            // line 112
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["config_field"] ?? null), "Glpi\\Form\\Destination\\ConfigFieldWithStrategiesInterface")) {
                // line 113
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["config_field"] ?? null), "getStrategies", [], "method", false, false, false, 113));
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
                foreach ($context['_seq'] as $context["index"] => $context["strategy"]) {
                    // line 114
                    yield "                    ";
                    // line 115
                    yield "                    ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 116
                        yield "                        ";
                        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                        // line 117
                        yield "                    ";
                    }
                    // line 118
                    yield "
                    <section
                        ";
                    // line 120
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 121
                        yield "                            class=\"mb-2\"
                        ";
                    }
                    // line 123
                    yield "                        data-glpi-itildestination-field-config
                    >
                        <div data-glpi-itildestination-field-config-content>
                            ";
                    // line 126
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 126, $this->getSourceContext())->macro_dropdownArrayField(...[Twig\Extension\CoreExtension::sprintf("%s[%s][]", CoreExtension::getAttribute($this->env, $this->source,                     // line 128
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 128)], "method", false, false, false, 128), CoreExtension::getAttribute($this->env, $this->source,                     // line 129
($context["config_field"] ?? null), "getStrategiesInputName", [], "method", false, false, false, 129)), CoreExtension::getAttribute($this->env, $this->source,                     // line 131
$context["strategy"], "value", [], "any", false, false, false, 131), CoreExtension::getAttribute($this->env, $this->source,                     // line 132
($context["field"] ?? null), "getStrategiesForDropdown", [], "method", false, false, false, 132), "", Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "field_class" => "", "no_label" => true, "mb" => "", "rand" =>                     // line 139
($context["rand"] ?? null), "aria_label" => __("Select strategy..."), "add_data_attributes" => ["glpi-itildestination-strategy-select" => "", "testid" => "strategy-dropdown"]],                     // line 145
($context["extra_options"] ?? null))]);
                    // line 146
                    yield "
                            ";
                    // line 147
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "renderConfigForm", [                    // line 148
($context["form"] ?? null),                     // line 149
($context["destination"] ?? null),                     // line 150
($context["config_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                     // line 151
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 151)], "method", false, false, false, 151), Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "rand" =>                     // line 154
($context["rand"] ?? null)],                     // line 155
($context["extra_options"] ?? null)),                     // line 156
$context["index"]], "method", false, false, false, 147);
                    // line 157
                    yield "
                        </div>
                        ";
                    // line 159
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 160
                        yield "                            <button
                                type=\"button\"
                                class=\"btn btn-icon btn-outline\"
                                title=\"";
                        // line 163
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
                        yield "\"
                                aria-label=\"";
                        // line 164
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
                        yield "\"
                                data-glpi-itildestination-remove-field-config
                            >
                                <i class=\"ti ti-x\"></i>
                            </button>
                        ";
                    }
                    // line 170
                    yield "                    </section>
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
                unset($context['_seq'], $context['index'], $context['strategy'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 173
                    yield "                    <button
                        type=\"button\"
                        class=\"btn btn-outline\"
                        aria-label=\"";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Combine with another option"), "html", null, true);
                    yield "\"
                        data-glpi-itildestination-add-field-config
                    >
                        <i class=\"ti ti-plus me-2\"></i>
                        ";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Combine with another option"), "html", null, true);
                    yield "
                    </button>
                ";
                }
                // line 183
                yield "            ";
            } else {
                // line 184
                yield "                ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "renderConfigForm", [                // line 185
($context["form"] ?? null),                 // line 186
($context["destination"] ?? null),                 // line 187
($context["config_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                 // line 188
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 188)], "method", false, false, false, 188), Twig\Extension\CoreExtension::merge(["is_horizontal" => true, "rand" =>                 // line 191
($context["rand"] ?? null)],                 // line 192
($context["extra_options"] ?? null))], "method", false, false, false, 184);
                // line 193
                yield "

                ";
                // line 195
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 196
                    yield "                    <button
                        type=\"button\"
                        class=\"btn btn-outline\"
                        aria-label=\"";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Combine with another option"), "html", null, true);
                    yield "\"
                        data-glpi-itildestination-add-field-config
                    >
                        <i class=\"ti ti-plus me-2\"></i>
                        ";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Combine with another option"), "html", null, true);
                    yield "
                    </button>
                ";
                }
                // line 206
                yield "            ";
            }
            // line 207
            yield "        </section>

        ";
            // line 209
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "canHaveMultipleStrategies", [], "method", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 210
                yield "            <template data-glpi-itildestination-field-config-template>
                ";
                // line 211
                if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["config_field"] ?? null), "Glpi\\Form\\Destination\\ConfigFieldWithStrategiesInterface")) {
                    // line 212
                    yield "                    <section
                        class=\"mb-2\"
                        data-glpi-itildestination-field-config
                    >
                        <div data-glpi-itildestination-field-config-content>
                            ";
                    // line 217
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 217, $this->getSourceContext())->macro_dropdownArrayField(...[Twig\Extension\CoreExtension::sprintf("%s[%s][]", CoreExtension::getAttribute($this->env, $this->source,                     // line 219
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 219)], "method", false, false, false, 219), CoreExtension::getAttribute($this->env, $this->source,                     // line 220
($context["config_field"] ?? null), "getStrategiesInputName", [], "method", false, false, false, 220)), "", CoreExtension::getAttribute($this->env, $this->source,                     // line 223
($context["field"] ?? null), "getStrategiesForDropdown", [], "method", false, false, false, 223), "", Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "field_class" => "", "no_label" => true, "mb" => "", "display_emptychoice" => true, "init" => false, "aria_label" => __("Select strategy..."), "add_data_attributes" => ["glpi-itildestination-strategy-select" => "", "testid" => "strategy-dropdown"]],                     // line 237
($context["extra_options"] ?? null))]);
                    // line 238
                    yield "
                            ";
                    // line 239
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "renderConfigForm", [                    // line 240
($context["form"] ?? null),                     // line 241
($context["destination"] ?? null),                     // line 242
($context["config_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                     // line 243
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 243)], "method", false, false, false, 243), Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "init" => false],                     // line 247
($context["extra_options"] ?? null)), "__INDEX__"], "method", false, false, false, 239);
                    // line 249
                    yield "
                        </div>
                        <button
                            type=\"button\"
                            class=\"btn btn-icon btn-outline\"
                            title=\"";
                    // line 254
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
                    yield "\"
                            aria-label=\"";
                    // line 255
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove strategy"), "html", null, true);
                    yield "\"
                            data-glpi-itildestination-remove-field-config
                        >
                            <i class=\"ti ti-x\"></i>
                        </button>
                    </section>
                ";
                } else {
                    // line 262
                    yield "                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "renderConfigForm", [                    // line 263
($context["form"] ?? null),                     // line 264
($context["destination"] ?? null),                     // line 265
($context["config_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                     // line 266
($context["item"] ?? null), "formatConfigInputName", [CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getKey", [], "method", false, false, false, 266)], "method", false, false, false, 266), Twig\Extension\CoreExtension::merge(["is_horizontal" => false, "init" => false],                     // line 270
($context["extra_options"] ?? null)), "__INDEX__"], "method", false, false, false, 262);
                    // line 272
                    yield "
                ";
                }
                // line 274
                yield "            </template>
        ";
            }
            // line 276
            yield "    </section>

    <script>
        import(\"/js/modules/Forms/FieldDestinationMultipleConfig.js\").then((m) => {
            new m.GlpiFormFieldDestinationMultipleConfig(
                \$('[data-glpi-itildestination-field=\"";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field_container_rand"] ?? null), "html", null, true);
            yield "\"]'),
                ";
            // line 282
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "getReusableStrategies", [], "method", false, false, false, 282));
            yield "
            );
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/form_destination_commonitil_config.html.twig";
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
        return array (  706 => 282,  702 => 281,  695 => 276,  691 => 274,  687 => 272,  685 => 270,  684 => 266,  683 => 265,  682 => 264,  681 => 263,  679 => 262,  669 => 255,  665 => 254,  658 => 249,  656 => 247,  655 => 243,  654 => 242,  653 => 241,  652 => 240,  651 => 239,  648 => 238,  646 => 237,  645 => 223,  644 => 220,  643 => 219,  642 => 217,  635 => 212,  633 => 211,  630 => 210,  628 => 209,  624 => 207,  621 => 206,  615 => 203,  608 => 199,  603 => 196,  601 => 195,  597 => 193,  595 => 192,  594 => 191,  593 => 188,  592 => 187,  591 => 186,  590 => 185,  588 => 184,  585 => 183,  579 => 180,  572 => 176,  567 => 173,  564 => 172,  549 => 170,  540 => 164,  536 => 163,  531 => 160,  529 => 159,  525 => 157,  523 => 156,  522 => 155,  521 => 154,  520 => 151,  519 => 150,  518 => 149,  517 => 148,  516 => 147,  513 => 146,  511 => 145,  510 => 139,  509 => 132,  508 => 131,  507 => 129,  506 => 128,  505 => 126,  500 => 123,  496 => 121,  494 => 120,  490 => 118,  487 => 117,  484 => 116,  481 => 115,  479 => 114,  461 => 113,  459 => 112,  455 => 110,  449 => 108,  446 => 107,  440 => 104,  435 => 102,  431 => 100,  429 => 99,  425 => 97,  422 => 96,  420 => 94,  419 => 92,  417 => 91,  414 => 90,  412 => 88,  411 => 87,  410 => 86,  408 => 84,  406 => 83,  399 => 82,  396 => 81,  394 => 80,  391 => 79,  388 => 78,  386 => 76,  385 => 75,  382 => 74,  373 => 69,  363 => 62,  356 => 58,  349 => 54,  340 => 48,  335 => 45,  332 => 44,  329 => 43,  326 => 42,  324 => 41,  321 => 40,  318 => 39,  300 => 38,  293 => 408,  289 => 406,  287 => 405,  286 => 404,  284 => 403,  282 => 402,  277 => 399,  263 => 398,  257 => 394,  248 => 392,  244 => 391,  238 => 388,  232 => 387,  225 => 385,  218 => 381,  214 => 380,  209 => 378,  203 => 377,  196 => 375,  186 => 370,  183 => 369,  181 => 368,  178 => 367,  175 => 366,  172 => 359,  155 => 358,  150 => 356,  145 => 354,  141 => 352,  139 => 351,  127 => 343,  125 => 342,  109 => 330,  107 => 329,  91 => 317,  89 => 316,  71 => 302,  69 => 301,  62 => 298,  60 => 297,  48 => 287,  45 => 37,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/form_destination_commonitil_config.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/admin/form/form_destination_commonitil_config.html.twig");
    }
}
