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

/* @fields/fields.html.twig */
class __TwigTemplate_2e919aa296c7e9e15b208431b2902846 extends Template
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
        // line 28
        yield "
";
        // line 29
        $macros["͜macros"] = $this->macros["͜macros"] = $this->load("components/form/fields_macros.html.twig", 29)->unwrap();
        // line 30
        yield "
";
        // line 31
        $context["in_itilobject"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonITILObject") && ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 31)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["type"] ?? null) : null) == "dom"));
        // line 32
        $context["in_projecttask"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "ProjectTask") && ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 32)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["type"] ?? null) : null) == "dom"));
        // line 33
        $context["in_form_builder"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Glpi\\Form\\Form");
        // line 34
        $context["already_wrapped"] = (($context["in_itilobject"] ?? null) || ($context["in_form_builder"] ?? null));
        // line 35
        $context["dropdown_item"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDropdown") && ((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["type"] ?? null) : null) == "dom"));
        // line 36
        yield "
";
        // line 37
        $context["textarea_display_options"] = ["in_itilobject" => ["field_class" => "col-12", "label_class" => "col-2 col-xxl-5", "input_class" => "col-10 col-xxl-7", "is_horizontal" => true, "align_label_right" => true], "in_projecttask" => ["field_class" => "col-12", "label_class" => "col-2", "input_class" => "col-10", "is_horizontal" => true, "align_label_right" => true], "in_form_builder" => ["field_class" => "col-12", "label_class" => "form-label", "input_class" => "w-100", "is_horizontal" => false, "align_label_right" => false], "default" => ["field_class" => "col-12 col-sm-6", "label_class" => "col-xxl-5", "input_class" => "col-xxl-7", "is_horizontal" => true, "align_label_right" => true]];
        // line 67
        yield "
";
        // line 68
        $context["current_textarea_options"] = (($_v3 = ($context["textarea_display_options"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[(((($tmp =         // line 69
($context["in_itilobject"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("in_itilobject") : ((((($tmp = ($context["in_projecttask"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("in_projecttask") : ((((($tmp = ($context["in_form_builder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("in_form_builder") : ("default"))))))] ?? null) : null);
        // line 71
        yield "
";
        // line 72
        if (( !($context["already_wrapped"] ?? null) &&  !($context["dropdown_item"] ?? null))) {
            // line 73
            yield "
";
            // line 74
            $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 74) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "User"))) ? ("col-xxl-12") : ("col-xxl-9"));
            // line 75
            yield "    <div class=\"col-12  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield " flex-column\">
        <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
                <div class=\"row flex-row\">
                    ";
            // line 79
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 79) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "User"))) {
                // line 80
                yield "                        <div>
                    ";
            }
        }
        // line 83
        yield "
";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 85
            yield "
    ";
            // line 86
            $context["type"] = (($_v4 = $context["field"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["type"] ?? null) : null);
            // line 87
            yield "    ";
            $context["name"] = (($_v5 = $context["field"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["name"] ?? null) : null);
            // line 88
            yield "    ";
            $context["label"] = (($_v6 = $context["field"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["label"] ?? null) : null);
            // line 89
            yield "    ";
            $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 89), ($context["name"] ?? null), [], "array", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 89)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["name"] ?? null)] ?? null) : null), (($_v8 = $context["field"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["value"] ?? null) : null))) : ((($_v9 = $context["field"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["value"] ?? null) : null)));
            // line 90
            yield "    ";
            $context["readonly"] = (($_v10 = $context["field"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["is_readonly"] ?? null) : null);
            // line 91
            yield "    ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 92
            yield "
    ";
            // line 93
            $context["field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["readonly" => (            // line 94
($context["readonly"] ?? null) ||  !($context["canedit"] ?? null)), "required" => (($_v11 =             // line 95
$context["field"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["mandatory"] ?? null) : null), "full_width" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 96
($context["field_options"] ?? null), "full_width", [], "any", true, true, false, 96) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "full_width", [], "any", false, false, false, 96)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "full_width", [], "any", false, false, false, 96)) : (($context["already_wrapped"] ?? null)))]);
            // line 98
            yield "
    ";
            // line 99
            $context["input_name"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "input_name", [], "any", true, true, false, 99) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "input_name", [], "any", false, false, false, 99)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "input_name", [], "any", false, false, false, 99)) : (($context["name"] ?? null)));
            // line 100
            yield "
    ";
            // line 101
            if ((($context["type"] ?? null) == "header")) {
                // line 102
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_largeTitle", $context, 102, $this->getSourceContext())->macro_largeTitle(...[($context["label"] ?? null)]);
                yield "

    ";
            } elseif ((            // line 104
($context["type"] ?? null) == "text")) {
                // line 105
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_textField", $context, 105, $this->getSourceContext())->macro_textField(...[($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)]);
                yield "

    ";
            } elseif ((            // line 107
($context["type"] ?? null) == "number")) {
                // line 108
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_numberField", $context, 108, $this->getSourceContext())->macro_numberField(...[($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["step" => "any", "min" => ""])]);
                yield "

    ";
            } elseif ((            // line 110
($context["type"] ?? null) == "url")) {
                // line 111
                yield "            ";
                $context["ext_link"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 112
                    yield "            ";
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 113
                        yield "                <a target=\"_blank\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                        yield "\">
                    <i class=\"ti ti-external-link\"></i>
                    ";
                        // line 115
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("show", "fields"), "html", null, true);
                        yield "
                </a>
            ";
                    }
                    // line 118
                    yield "            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 119
                yield "            ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_textField", $context, 119, $this->getSourceContext())->macro_textField(...[($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["type" => "url", "add_field_html" =>                 // line 121
($context["ext_link"] ?? null)])]);
                // line 122
                yield "

    ";
            } elseif ((            // line 124
($context["type"] ?? null) == "textarea")) {
                // line 125
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_textareaField", $context, 125, $this->getSourceContext())->macro_textareaField(...[($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ($context["current_textarea_options"] ?? null))]);
                yield "

    ";
            } elseif ((            // line 127
($context["type"] ?? null) == "richtext")) {
                // line 128
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_textareaField", $context, 128, $this->getSourceContext())->macro_textareaField(...[($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ($context["current_textarea_options"] ?? null)), ["enable_richtext" => true])]);
                // line 130
                yield "

    ";
            } elseif ((            // line 132
($context["type"] ?? null) == "yesno")) {
                // line 133
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_dropdownYesNo", $context, 133, $this->getSourceContext())->macro_dropdownYesNo(...[($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)]);
                yield "

    ";
            } elseif ((            // line 135
($context["type"] ?? null) == "date")) {
                // line 136
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_dateField", $context, 136, $this->getSourceContext())->macro_dateField(...[($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)]);
                yield "

    ";
            } elseif ((            // line 138
($context["type"] ?? null) == "datetime")) {
                // line 139
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_datetimeField", $context, 139, $this->getSourceContext())->macro_datetimeField(...[($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)]);
                yield "

    ";
            } elseif ((            // line 141
($context["type"] ?? null) == "dropdown")) {
                // line 142
                yield "        ";
                $context["dropdown_options"] = ["entity" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 142)];
                // line 143
                yield "        ";
                if ((($tmp = (($_v12 = $context["field"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["multiple"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 144
                    yield "            ";
                    $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["multiple" => true]);
                    // line 145
                    yield "        ";
                }
                // line 146
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 147
                    yield "            ";
                    $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["entity_sons" => true]);
                    // line 148
                    yield "        ";
                }
                // line 149
                yield "        ";
                if (CoreExtension::inFilter("dropdowns_id", ($context["name"] ?? null))) {
                    // line 150
                    yield "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [($context["name"] ?? null)]);
                    // line 151
                    yield "        ";
                } else {
                    // line 152
                    yield "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsDropdown::getClassname", [($context["name"] ?? null)]);
                    // line 153
                    yield "        ";
                }
                // line 154
                yield "        ";
                if ((($context["input_name"] ?? null) == ($context["name"] ?? null))) {
                    // line 155
                    yield "            ";
                    $context["name_fk"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getForeignKeyFieldForItemType", [($context["dropdown_itemtype"] ?? null)]);
                    // line 156
                    yield "        ";
                }
                // line 157
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_dropdownField", $context, 157, $this->getSourceContext())->macro_dropdownField(...[($context["dropdown_itemtype"] ?? null), (((array_key_exists("name_fk", $context) &&  !(null === $context["name_fk"]))) ? ($context["name_fk"]) : (($context["input_name"] ?? null))), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ((array_key_exists("dropdown_options", $context)) ? (Twig\Extension\CoreExtension::default(($context["dropdown_options"] ?? null), [])) : ([])))]);
                yield "

    ";
            } elseif (CoreExtension::matches("/^dropdown-.+/i",             // line 159
($context["type"] ?? null))) {
                // line 160
                yield "        ";
                $context["dropdown_options"] = ["entity" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 160)];
                // line 161
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "dropdown_condition", [], "array", true, true, false, 161) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v13 = $context["field"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["dropdown_condition"] ?? null) : null)))) {
                    // line 162
                    yield "            ";
                    $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["condition" => (($_v14 = $context["field"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["dropdown_condition"] ?? null) : null)]);
                    // line 163
                    yield "        ";
                }
                // line 164
                yield "        ";
                if (((($_v15 = $context["field"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["dropdown_class"] ?? null) : null) == "User")) {
                    // line 165
                    yield "            ";
                    $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["entity" =>  -1, "right" => "all"]);
                    // line 166
                    yield "        ";
                } elseif ((((($_v16 = $context["field"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["dropdown_class"] ?? null) : null) == "Entity") || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 166))) {
                    // line 167
                    yield "            ";
                    $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["entity_sons" => true]);
                    // line 168
                    yield "        ";
                }
                // line 169
                yield "        ";
                if ((($tmp = (($_v17 = $context["field"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["multiple"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 170
                    yield "            ";
                    $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["multiple" => true]);
                    // line 171
                    yield "        ";
                }
                // line 172
                yield "        ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_dropdownField", $context, 172, $this->getSourceContext())->macro_dropdownField(...[(($_v18 = $context["field"]) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["dropdown_class"] ?? null) : null), ($context["input_name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ((array_key_exists("dropdown_options", $context)) ? (Twig\Extension\CoreExtension::default(($context["dropdown_options"] ?? null), [])) : ([])))]);
                yield "

    ";
            } elseif ((            // line 174
($context["type"] ?? null) == "glpi_item")) {
                // line 175
                yield "        ";
                if ((($tmp =  !($context["massiveaction"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 176
                    yield "
            ";
                    // line 177
                    if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Glpi\\Form\\Form")) {
                        // line 178
                        yield "                ";
                        $context["itemtype_input_name"] = (($context["input_name"] ?? null) . "[itemtype]");
                        // line 179
                        yield "                ";
                        $context["items_id_input_name"] = (($context["input_name"] ?? null) . "[items_id]");
                        // line 180
                        yield "            ";
                    } else {
                        // line 181
                        yield "                ";
                        $context["itemtype_input_name"] = ("itemtype_" . ($context["name"] ?? null));
                        // line 182
                        yield "                ";
                        $context["items_id_input_name"] = ("items_id_" . ($context["name"] ?? null));
                        // line 183
                        yield "            ";
                    }
                    // line 184
                    yield "
            ";
                    // line 185
                    if (((($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 185)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["type"] ?? null) : null) == "tab")) {
                        // line 186
                        yield "                ";
                        // line 187
                        yield "                <div class=\"w-100\"></div>
            ";
                    }
                    // line 189
                    yield "
            ";
                    // line 190
                    $context["items_id_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 191
                        yield "                ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [(("dropdown_" .                         // line 193
($context["itemtype_input_name"] ?? null)) . ($context["rand"] ?? null)), ("results_items_id" .                         // line 194
($context["rand"] ?? null)), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownAllItems.php"), ["idtable" => "__VALUE__", "name" =>                         // line 198
($context["items_id_input_name"] ?? null), "entity_restrict" => CoreExtension::getAttribute($this->env, $this->source,                         // line 199
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 199), "dom_name" =>                         // line 200
($context["items_id_input_name"] ?? null), "display_emptychoice" => false, "action" => "get_items_from_itemtype", "dom_rand" =>                         // line 203
($context["rand"] ?? null), "width" => "100%"]]);
                        // line 207
                        yield "
                <span id='results_items_id";
                        // line 208
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                        yield "' class='col-lg-14'>
                    ";
                        // line 209
                        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 209), "")) : ("")) != "")) {
                            // line 210
                            yield "                        ";
                            yield $macros["͜macros"]->getTemplateForMacro("macro_dropdownField", $context, 210, $this->getSourceContext())->macro_dropdownField(...[CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 210), ($context["items_id_input_name"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "items_id", [], "any", true, true, false, 210)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "items_id", [], "any", false, false, false, 210), "")) : ("")), " ", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["entity" => (((((CoreExtension::getAttribute($this->env, $this->source,                             // line 211
($context["value"] ?? null), "itemtype", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 211), "")) : ("")) == "User")) ? ( -1) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 211))), "rand" =>                             // line 212
($context["rand"] ?? null), "right" => "all", "displaywith" => ["otherserial", "serial"], "display_emptychoice" => false, "no_label" => true, "full_width" => true])]);
                            // line 218
                            yield "
                    ";
                        }
                        // line 220
                        yield "                </span>
            ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 222
                    yield "
            ";
                    // line 223
                    yield $macros["͜macros"]->getTemplateForMacro("macro_dropdownArrayField", $context, 223, $this->getSourceContext())->macro_dropdownArrayField(...[($context["itemtype_input_name"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", true, true, false, 223)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 223), "")) : ("")), (($_v20 = $context["field"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["allowed_values"] ?? null) : null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["rand" =>                     // line 224
($context["rand"] ?? null), "display_emptychoice" => true, "add_field_class" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 226
($context["field_options"] ?? null), "add_field_class", [], "any", true, true, false, 226)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "add_field_class", [], "any", false, false, false, 226), "")) : ("")) . " glpi-fields-plugin-glpi-item-field"), "add_field_html" =>                     // line 227
($context["items_id_dropdown"] ?? null)])]);
                    // line 228
                    yield "
        ";
                }
                // line 230
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "
";
        // line 233
        if (( !($context["already_wrapped"] ?? null) &&  !($context["dropdown_item"] ?? null))) {
            // line 234
            yield "
                    ";
            // line 235
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 235) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "User"))) {
                // line 236
                yield "                        </div>
                    ";
            }
            // line 238
            yield "                </div>
            </div>
        </div>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@fields/fields.html.twig";
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
        return array (  442 => 238,  438 => 236,  436 => 235,  433 => 234,  431 => 233,  428 => 232,  421 => 230,  417 => 228,  415 => 227,  414 => 226,  413 => 224,  412 => 223,  409 => 222,  404 => 220,  400 => 218,  398 => 212,  397 => 211,  395 => 210,  393 => 209,  389 => 208,  386 => 207,  384 => 203,  383 => 200,  382 => 199,  381 => 198,  380 => 194,  379 => 193,  377 => 191,  375 => 190,  372 => 189,  368 => 187,  366 => 186,  364 => 185,  361 => 184,  358 => 183,  355 => 182,  352 => 181,  349 => 180,  346 => 179,  343 => 178,  341 => 177,  338 => 176,  335 => 175,  333 => 174,  327 => 172,  324 => 171,  321 => 170,  318 => 169,  315 => 168,  312 => 167,  309 => 166,  306 => 165,  303 => 164,  300 => 163,  297 => 162,  294 => 161,  291 => 160,  289 => 159,  283 => 157,  280 => 156,  277 => 155,  274 => 154,  271 => 153,  268 => 152,  265 => 151,  262 => 150,  259 => 149,  256 => 148,  253 => 147,  250 => 146,  247 => 145,  244 => 144,  241 => 143,  238 => 142,  236 => 141,  230 => 139,  228 => 138,  222 => 136,  220 => 135,  214 => 133,  212 => 132,  208 => 130,  205 => 128,  203 => 127,  197 => 125,  195 => 124,  191 => 122,  189 => 121,  187 => 119,  183 => 118,  177 => 115,  171 => 113,  168 => 112,  165 => 111,  163 => 110,  157 => 108,  155 => 107,  149 => 105,  147 => 104,  141 => 102,  139 => 101,  136 => 100,  134 => 99,  131 => 98,  129 => 96,  128 => 95,  127 => 94,  126 => 93,  123 => 92,  120 => 91,  117 => 90,  114 => 89,  111 => 88,  108 => 87,  106 => 86,  103 => 85,  99 => 84,  96 => 83,  91 => 80,  89 => 79,  81 => 75,  79 => 74,  76 => 73,  74 => 72,  71 => 71,  69 => 69,  68 => 68,  65 => 67,  63 => 37,  60 => 36,  58 => 35,  56 => 34,  54 => 33,  52 => 32,  50 => 31,  47 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@fields/fields.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/marketplace/fields/templates/fields.html.twig");
    }
}
