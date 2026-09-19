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

/* __string_template__ce24faaa9ed7fa2eed28eb726ae4525c */
class __TwigTemplate_daecaa57f4c0a79b870767d0c414c3e1 extends Template
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
        // line 1
        yield "                ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("AuthMail"), "html", null, true);
        yield "\" data-submit-once>
                    <div class=\"text-center d-flex flex-column\">
                        <div>
                            <h1 class=\"fs-2\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>
                        </div>
                        ";
        // line 7
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 7, $this->getSourceContext())->macro_textField(...["imap_login", "", ($context["login"] ?? null), ["full_width" => true, "additional_attributes" => ["autocomplete" => "username"]]]);
        // line 12
        yield "
                        ";
        // line 13
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 13, $this->getSourceContext())->macro_passwordField(...["imap_password", "", ($context["password"] ?? null), ["full_width" => true, "clearable" => false, "additional_attributes" => ["autocomplete" => "password"]]]);
        // line 19
        yield "
                        ";
        // line 20
        yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 20, $this->getSourceContext())->macro_hiddenField(...["imap_string", ($context["connect_string"] ?? null)]);
        yield "
                        <div>
                            ";
        // line 22
        yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 22, $this->getSourceContext())->macro_csrfField(...[]);
        yield "
                            <button type=\"submit\" name=\"test\" class=\"btn btn-primary\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["test"] ?? null), "html", null, true);
        yield "</button>
                        </div>
                    </div>
                </form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__ce24faaa9ed7fa2eed28eb726ae4525c";
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
        return array (  76 => 23,  72 => 22,  67 => 20,  64 => 19,  62 => 13,  59 => 12,  57 => 7,  52 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__ce24faaa9ed7fa2eed28eb726ae4525c", "");
    }
}
