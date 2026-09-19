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

/* pages/setup/authentication/other_ext_setup.html.twig */
class __TwigTemplate_73193ab05ac05f2148346b35ce189ba9 extends Template
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
<div class=\"asset card\">
   <form name=\"cas\" action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/auth.others.php"), "html", null, true);
        yield "\" method=\"post\">
      <div class=\"card-body d-flex flex-wrap px-0\">
         <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
               <div class=\"row flex-row align-items-start flex-grow-1 mx-0\">
                  <div class=\"row flex-row mx-0\">
                     ";
        // line 43
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 43, $this->getSourceContext())->macro_smallTitle(...[__("CAS authentication")]);
        yield "
                     ";
        // line 44
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["cas_host"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                        <div class=\"alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("authentication", "Enabled"), "html", null, true);
            yield "</div>
                     ";
        }
        // line 47
        yield "                     ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 47, $this->getSourceContext())->macro_textField(...["cas_host", (($_v1 = ($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["cas_host"] ?? null) : null), __("CAS Host")]);
        yield "
                     ";
        // line 48
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 48, $this->getSourceContext())->macro_htmlField(...["", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Auth::dropdownCasVersion", [(($_v2 = ($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["cas_version"] ?? null) : null), ["display" => false]]), __("CAS Version")]);
        // line 50
        yield "
                     ";
        // line 51
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 51, $this->getSourceContext())->macro_textField(...["cas_port", (($_v3 = ($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["cas_port"] ?? null) : null), _n("Port", "Ports", 1)]);
        yield "
                     ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 52, $this->getSourceContext())->macro_textField(...["cas_uri", (($_v4 = ($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["cas_uri"] ?? null) : null), __("Root directory (optional)")]);
        yield "
                     ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 53, $this->getSourceContext())->macro_textField(...["cas_logout", (($_v5 = ($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["cas_logout"] ?? null) : null), __("Log out fallback URL")]);
        yield "

                     ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 55, $this->getSourceContext())->macro_smallTitle(...[__("x509 certificate authentication")]);
        yield "
                     ";
        // line 56
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v6 = ($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["x509_email_field"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                        <div class=\"alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("authentication", "Enabled"), "html", null, true);
            yield "</div>
                     ";
        }
        // line 59
        yield "                     ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 59, $this->getSourceContext())->macro_textField(...["x509_email_field", (($_v7 =         // line 61
($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["x509_email_field"] ?? null) : null), __("Email attribute for x509 authentication")]);
        // line 63
        yield "
                     ";
        // line 64
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 64, $this->getSourceContext())->macro_textField(...["x509_ou_restrict", (($_v8 =         // line 66
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["x509_ou_restrict"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("Restrict %s field for x509 authentication (separator \$)"), "OU")]);
        // line 68
        yield "
                     ";
        // line 69
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 69, $this->getSourceContext())->macro_textField(...["x509_cn_restrict", (($_v9 =         // line 71
($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["x509_cn_restrict"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("Restrict %s field for x509 authentication (separator \$)"), "CN")]);
        // line 73
        yield "
                     ";
        // line 74
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 74, $this->getSourceContext())->macro_textField(...["x509_o_restrict", (($_v10 =         // line 76
($context["config"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["x509_o_restrict"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("Restrict %s field for x509 authentication (separator \$)"), "O")]);
        // line 78
        yield "

                     ";
        // line 80
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 80, $this->getSourceContext())->macro_smallTitle(...[__("Other authentication sent in the HTTP request")]);
        yield "
                     ";
        // line 81
        if (( !Twig\Extension\CoreExtension::testEmpty((($_v11 = ($context["config"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["ssovariables_id"] ?? null) : null)) && ((($_v12 = ($context["config"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["ssovariables_id"] ?? null) : null) != 0))) {
            // line 82
            yield "                        <div class=\"alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("authentication", "Enabled"), "html", null, true);
            yield "</div>
                     ";
        }
        // line 84
        yield "                     ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 84, $this->getSourceContext())->macro_dropdownField(...["SsoVariable", "ssovariables_id", (($_v13 = ($context["config"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["ssovariables_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SsoVariable", 1)]);
        yield "
                     ";
        // line 85
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 85, $this->getSourceContext())->macro_textField(...["ssologout_url", (($_v14 = ($context["config"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["ssologout_url"] ?? null) : null), __("SSO logout url")]);
        yield "
                     ";
        // line 86
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 86, $this->getSourceContext())->macro_dropdownYesNo(...["existing_auth_server_field_clean_domain", (($_v15 =         // line 88
($context["config"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["existing_auth_server_field_clean_domain"] ?? null) : null), __("Remove the domain of logins like login@domain")]);
        // line 90
        yield "
                     ";
        // line 91
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 91, $this->getSourceContext())->macro_textField(...["realname_ssofield", (($_v16 = ($context["config"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["realname_ssofield"] ?? null) : null), __("Surname")]);
        yield "
                     ";
        // line 92
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 92, $this->getSourceContext())->macro_textField(...["firstname_ssofield", (($_v17 = ($context["config"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["firstname_ssofield"] ?? null) : null), __("First name")]);
        yield "
                     ";
        // line 93
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 93, $this->getSourceContext())->macro_textField(...["comment_ssofield", (($_v18 = ($context["config"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["comment_ssofield"] ?? null) : null), __("Comments")]);
        yield "
                     ";
        // line 94
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 94, $this->getSourceContext())->macro_textField(...["registration_number_ssofield", (($_v19 =         // line 96
($context["config"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["registration_number_ssofield"] ?? null) : null), _x("user", "Administrative number")]);
        // line 98
        yield "
                     ";
        // line 99
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 99, $this->getSourceContext())->macro_textField(...["email1_ssofield", (($_v20 = ($context["config"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["email1_ssofield"] ?? null) : null), _n("Email", "Emails", 1)]);
        yield "
                     ";
        // line 100
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 100, $this->getSourceContext())->macro_textField(...["email2_ssofield", (($_v21 =         // line 102
($context["config"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["email2_ssofield"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s %2\$s"), _n("Email", "Emails", 1), "2")]);
        // line 104
        yield "
                     ";
        // line 105
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 105, $this->getSourceContext())->macro_textField(...["email3_ssofield", (($_v22 =         // line 107
($context["config"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["email3_ssofield"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s %2\$s"), _n("Email", "Emails", 1), "3")]);
        // line 109
        yield "
                     ";
        // line 110
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 110, $this->getSourceContext())->macro_textField(...["email4_ssofield", (($_v23 =         // line 112
($context["config"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["email4_ssofield"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s %2\$s"), _n("Email", "Emails", 1), "4")]);
        // line 114
        yield "
                     ";
        // line 115
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 115, $this->getSourceContext())->macro_textField(...["phone_ssofield", (($_v24 = ($context["config"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["phone_ssofield"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone", 1)]);
        yield "
                     ";
        // line 116
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 116, $this->getSourceContext())->macro_textField(...["phone2_ssofield", (($_v25 =         // line 118
($context["config"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["phone2_ssofield"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s %2\$s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone", 1), "2")]);
        // line 120
        yield "
                     ";
        // line 121
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 121, $this->getSourceContext())->macro_textField(...["mobile_ssofield", (($_v26 = ($context["config"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["mobile_ssofield"] ?? null) : null), __("Mobile phone")]);
        yield "
                     ";
        // line 122
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 122, $this->getSourceContext())->macro_textField(...["title_ssofield", (($_v27 = ($context["config"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["title_ssofield"] ?? null) : null), _x("person", "Title")]);
        yield "
                     ";
        // line 123
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 123, $this->getSourceContext())->macro_textField(...["category_ssofield", (($_v28 = ($context["config"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["category_ssofield"] ?? null) : null), _n("Category", "Categories", 1)]);
        yield "
                     ";
        // line 124
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 124, $this->getSourceContext())->macro_textField(...["language_ssofield", (($_v29 = ($context["config"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["language_ssofield"] ?? null) : null), __("Language")]);
        yield "

                     <div class=\"right\">
                        ";
        // line 127
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 127, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
                        ";
        // line 128
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 128, $this->getSourceContext())->macro_submit(...["update", __("Save"), 1, ["icon" => "ti ti-device-floppy"]]);
        // line 130
        yield "
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/authentication/other_ext_setup.html.twig";
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
        return array (  236 => 130,  234 => 128,  230 => 127,  224 => 124,  220 => 123,  216 => 122,  212 => 121,  209 => 120,  207 => 118,  206 => 116,  202 => 115,  199 => 114,  197 => 112,  196 => 110,  193 => 109,  191 => 107,  190 => 105,  187 => 104,  185 => 102,  184 => 100,  180 => 99,  177 => 98,  175 => 96,  174 => 94,  170 => 93,  166 => 92,  162 => 91,  159 => 90,  157 => 88,  156 => 86,  152 => 85,  147 => 84,  141 => 82,  139 => 81,  135 => 80,  131 => 78,  129 => 76,  128 => 74,  125 => 73,  123 => 71,  122 => 69,  119 => 68,  117 => 66,  116 => 64,  113 => 63,  111 => 61,  109 => 59,  103 => 57,  101 => 56,  97 => 55,  92 => 53,  88 => 52,  84 => 51,  81 => 50,  79 => 48,  74 => 47,  68 => 45,  66 => 44,  62 => 43,  53 => 37,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/authentication/other_ext_setup.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/authentication/other_ext_setup.html.twig");
    }
}
