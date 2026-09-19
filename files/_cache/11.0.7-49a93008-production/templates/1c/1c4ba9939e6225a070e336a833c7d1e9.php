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

/* pages/admin/form/access_control/allow_list.html.twig */
class __TwigTemplate_0aef4ff5079b2d08b41da9b75bd27b71 extends Template
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
        // line 36
        yield "
";
        // line 38
        yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Form\\AccessControl\\ControlType\\AllowListDropdown::show", [CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["access_control"] ?? null), "getNormalizedInputName", ["_allow_list_dropdown"], "method", false, false, false, 41), ["users_id" => CoreExtension::getAttribute($this->env, $this->source,         // line 43
($context["config"] ?? null), "getUserIds", [], "method", false, false, false, 43), "groups_id" => CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["config"] ?? null), "getGroupIds", [], "method", false, false, false, 44), "profiles_id" => CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["config"] ?? null), "getProfileIds", [], "method", false, false, false, 45)], ["aria_label" =>         // line 47
($context["label"] ?? null)]]);
        // line 49
        yield "

";
        // line 52
        yield "<div class=\"mt-2\">
    <a href=\"\" data-glpi-dropdown-count-preview></a>
</div>

<script>
    // Each time the dropdown is modified, populate the helper link
    const \$select = \$(\"select[name='_access_control[";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["access_control"] ?? null), "getId", [], "method", false, false, false, 58), "html", null, true);
        yield "][_allow_list_dropdown][]']\")
    \$select.on('change', async function() {
        const response = await \$.get(
            \"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Form/AllowListDropdown/CountUsers"), "html", null, true);
        yield "\",
            {
                values: \$(this).val()
            }
        );

        \$('[data-glpi-dropdown-count-preview]')
            .attr('href', response.link ?? null)
            .html(\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("There are %d user(s) matching these criteria."), "js"), "html", null, true);
        yield "\"
            .replace(\"%d\", response.count))
        ;
    });

    // Make sure this doens't trigger the \"unsaved changes\" detection if the form
    // was not actually changed when this code is reached.
    let restore_unsaved_form_status = hasUnsavedChanges() == false;
    \$select.trigger('change');
    if (restore_unsaved_form_status) {
        setHasUnsavedChanges(false);
    }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/form/access_control/allow_list.html.twig";
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
        return array (  84 => 69,  73 => 61,  67 => 58,  59 => 52,  55 => 49,  53 => 47,  52 => 45,  51 => 44,  50 => 43,  49 => 41,  48 => 38,  45 => 36,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/access_control/allow_list.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/access_control/allow_list.html.twig");
    }
}
