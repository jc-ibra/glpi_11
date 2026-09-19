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

/* pages/setup/mailcollector/folder_list.html.twig */
class __TwigTemplate_c127603bba346b1a40dc7dfaf35d3eef extends Template
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
        // line 44
        yield "
";
        // line 45
        if ((($tmp = ($context["connected"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "   <ul class=\"select_folder\">
      ";
            // line 47
            $context["has_folders"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["folders"] ?? null)) > 0);
            // line 48
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["folders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 49
                yield "         ";
                yield $this->getTemplateForMacro("macro_display_folder", $context, 49, $this->getSourceContext())->macro_display_folder(...[$context["folder"], ($context["input_id"] ?? null)]);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['folder'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "      ";
            if (( !($context["has_folders"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["server_mailbox"] ?? null) : null)))) {
                // line 52
                yield "         <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("No child found for folder '%s'."), (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["server_mailbox"] ?? null) : null)), "html", null, true);
                yield "</li>
      ";
            }
            // line 54
            yield "   </ul>
";
        } else {
            // line 56
            yield "   <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An error occurred trying to connect to collector."), "html", null, true);
            yield "</div>
";
        }
        yield from [];
    }

    // line 33
    public function macro_display_folder($folder = null, $input_id = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "folder" => $folder,
            "input_id" => $input_id,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   <li class=\"cursor-pointer\" data-input-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_id"] ?? null), "html", null, true);
            yield "\">
      <i class=\"ti ti-folder\"></i>
      <span class=\"folder-name\" data-globalname=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["folder"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["global_name"] ?? null) : null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["folder"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["local_name"] ?? null) : null), "html", null, true);
            yield "</span>
      <ul>
         ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v4 = ($context["folder"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["children"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["subfolder"]) {
                // line 39
                yield "            ";
                yield $this->getTemplateForMacro("macro_display_folder", $context, 39, $this->getSourceContext())->macro_display_folder(...[$context["subfolder"], ($context["input_id"] ?? null)]);
                yield "
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subfolder'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "      </ul>
   </li>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/mailcollector/folder_list.html.twig";
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
        return array (  130 => 41,  121 => 39,  117 => 38,  110 => 36,  104 => 34,  91 => 33,  82 => 56,  78 => 54,  72 => 52,  69 => 51,  60 => 49,  55 => 48,  53 => 47,  50 => 46,  48 => 45,  45 => 44,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/mailcollector/folder_list.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/mailcollector/folder_list.html.twig");
    }
}
