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

/* pages/admin/form/question_type/actors_admin.html.twig */
class __TwigTemplate_4b8f211e0b82ecc0580bce81c31ce8e7 extends Template
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
        yield "
";
        // line 35
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        yield "
";
        // line 37
        $context["actors_dropdown"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Form\\Dropdown\\FormActorsDropdown::show", ["default_value",         // line 39
($context["values"] ?? null), ["form_id" =>         // line 41
($context["form_id"] ?? null), "multiple" => false, "init" =>         // line 43
($context["init"] ?? null), "allowed_types" =>         // line 44
($context["allowed_types"] ?? null), "right_for_users" =>         // line 45
($context["right_for_users"] ?? null), "group_conditions" =>         // line 46
($context["group_conditions"] ?? null), "aria_label" => __("Select an actor..."), "specific_tags" => (((($tmp =         // line 48
($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["disabled" => "disabled"]) : ([]))]]);
        // line 53
        $context["actors_dropdown_multiple"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Form\\Dropdown\\FormActorsDropdown::show", ["default_value",         // line 55
($context["values"] ?? null), ["form_id" =>         // line 57
($context["form_id"] ?? null), "multiple" => true, "init" =>         // line 59
($context["init"] ?? null), "allowed_types" =>         // line 60
($context["allowed_types"] ?? null), "right_for_users" =>         // line 61
($context["right_for_users"] ?? null), "group_conditions" =>         // line 62
($context["group_conditions"] ?? null), "aria_label" => __("Select an actor..."), "specific_tags" => (((($tmp =  !        // line 64
($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["disabled" => "disabled"]) : ([]))]]);
        // line 69
        yield "
<div class=\"d-flex align-items-center\">
    ";
        // line 71
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 71, $this->getSourceContext())->macro_htmlField(...["default_value",         // line 73
($context["actors_dropdown"] ?? null), "", ["disabled" =>         // line 76
($context["is_multiple_actors"] ?? null), "no_label" => true, "mb" => "", "wrapper_class" => "", "field_class" => Twig\Extension\CoreExtension::join(["actors-dropdown", "col-12", "col-sm-6", (((($tmp =  !        // line 84
($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"))], " ")]]);
        // line 87
        yield "
    ";
        // line 88
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 88, $this->getSourceContext())->macro_htmlField(...["default_value",         // line 90
($context["actors_dropdown_multiple"] ?? null), "", ["no_label" => true, "wrapper_class" => "", "mb" => "", "field_class" => Twig\Extension\CoreExtension::join(["actors-dropdown", "col-12", "col-sm-6", (((($tmp =         // line 100
($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"))], " ")]]);
        // line 103
        yield "

    <i
        id=\"actors_settings_dropdown_";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
        class=\"ms-2 ti ti-settings pointer\"
        data-glpi-form-editor-question-extra-details
        data-bs-auto-close=\"outside\"
        role=\"button\"
        data-bs-toggle=\"dropdown\"
        aria-label=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show more settings"), "html", null, true);
        yield "\"
    ></i>
    <div
        class=\"dropdown-menu dropdown-menu-card\"
        aria-labelledby=\"actors_settings_dropdown_";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
    >
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"mb-3\">
                    <div class=\"form-label\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Allowed types"), "html", null, true);
        yield "</div>
                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["allowed_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 123
            yield "                        <label class=\"form-check form-check-inline mb-0\">
                            <input
                                type=\"hidden\"
                                name=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["enabled_types_field"] ?? null), "html", null, true);
            yield "[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "]\"
                                value=\"0\"
                                data-glpi-form-editor-specific-question-extra-data
                            >
                            <input
                                class=\"form-check-input\"
                                type=\"checkbox\"
                                name=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["enabled_types_field"] ?? null), "html", null, true);
            yield "[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "]\"
                                value=\"1\"
                                data-glpi-form-editor-specific-question-extra-data
                                ";
            // line 136
            if (CoreExtension::inFilter($context["type"], ($context["enabled_types"] ?? null))) {
                // line 137
                yield "                                    checked
                                ";
            }
            // line 139
            yield "                            >
                            <span class=\"form-check-label\">
                                <i class=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon($context["type"]), "html", null, true);
            yield "\"></i>
                                ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName($context["type"], 2), "html", null, true);
            yield "
                            </span>
                        </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "                </div>
                <div>
                    <div class=\"form-label\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Format"), "html", null, true);
        yield "</div>
                    <div id=\"is_multiple_actors_";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"d-flex gap-2\">
                        <label class=\"form-check form-switch mb-0\">
                            <input type=\"hidden\" name=\"is_multiple_actors\" value=\"0\"
                            data-glpi-form-editor-specific-question-extra-data>
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"is_multiple_actors\"
                                value=\"1\" ";
        // line 154
        yield (((($tmp = ($context["is_multiple_actors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                                onchange=\"handleMultipleActorsCheckbox_";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(this)\"
                                data-glpi-form-editor-specific-question-extra-data>
                            <span class=\"form-check-label\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Allow multiple actors"), "html", null, true);
        yield "</span>
                        </label>
                    </div>

                    <script>
                        function handleMultipleActorsCheckbox_";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(input) {
                            const is_checked = \$(input).is(':checked');
                            const selects = \$(input).closest('section[data-glpi-form-editor-question]')
                                .find('div .actors-dropdown');

                            ";
        // line 168
        yield "                            selects.toggleClass('d-none').find('select').prop('disabled', is_checked)
                                .filter('[multiple]').prop('disabled', !is_checked);

                            ";
        // line 172
        yield "                            selects.find('input[type=\"hidden\"]').prop('disabled', !is_checked);
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/question_type/actors_admin.html.twig";
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
        return array (  221 => 172,  216 => 168,  208 => 162,  200 => 157,  195 => 155,  191 => 154,  183 => 149,  179 => 148,  175 => 146,  165 => 142,  161 => 141,  157 => 139,  153 => 137,  151 => 136,  143 => 133,  131 => 126,  126 => 123,  122 => 122,  118 => 121,  110 => 116,  103 => 112,  94 => 106,  89 => 103,  87 => 100,  86 => 90,  85 => 88,  82 => 87,  80 => 84,  79 => 76,  78 => 73,  77 => 71,  73 => 69,  71 => 64,  70 => 62,  69 => 61,  68 => 60,  67 => 59,  66 => 57,  65 => 55,  64 => 53,  62 => 48,  61 => 46,  60 => 45,  59 => 44,  58 => 43,  57 => 41,  56 => 39,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/question_type/actors_admin.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/question_type/actors_admin.html.twig");
    }
}
