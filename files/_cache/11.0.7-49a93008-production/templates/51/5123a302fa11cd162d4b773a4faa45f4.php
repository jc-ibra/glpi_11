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

/* pages/admin/form/access_control/direct_access.html.twig */
class __TwigTemplate_6a50ae4c8af2c1b2dc735b0aa997d169 extends Template
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
        yield "<div class=\"d-flex w-100 mb-3\">
    <div
        class=\"input-icon cursor-pointer flex-grow-1\"
        data-glpi-clipboard-text=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
        yield "\"
        data-bs-toggle=\"tooltip\"
        data-bs-placement=\"top\"
        title=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Click to copy to clipboard"), "html", null, true);
        yield "\"
    >
        <input
            type=\"text\"
            class=\"form-control cursor-pointer rounded-end-0 border-end-0\"
            readonly=\"\"
            value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
        yield "\"
            aria-label=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Direct access URL"), "html", null, true);
        yield "\"
            data-glpi-direct-access-refresh-url
        >
        <span class=\"input-icon-addon\">
            <i class=\"ti ti-files\"></i>
        </span>
    </div>
    <i
        class=\"ti ti-refresh btn h-auto rounded-start-0\"
        data-bs-toggle=\"tooltip\"
        data-bs-placement=\"top\"
        title=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Click to change the token"), "html", null, true);
        yield "\"
        data-glpi-direct-access-refresh-token
    ></i>
</div>

";
        // line 68
        yield "<label class=\"form-check form-switch\">
    <input
        class=\"form-check-input\"
        name=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["access_control"] ?? null), "getNormalizedInputName", ["_allow_unauthenticated"], "method", false, false, false, 71), "html", null, true);
        yield "\"
        type=\"hidden\"
        value=\"0\"
    >
    <input
        class=\"form-check-input\"
        name=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["access_control"] ?? null), "getNormalizedInputName", ["_allow_unauthenticated"], "method", false, false, false, 77), "html", null, true);
        yield "\"
        type=\"checkbox\"
        value=\"1\"
        ";
        // line 80
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "allowUnauthenticated", [], "method", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
    >
    <span class=\"form-check-label\">
        <i class=\"ti ti-lock-open\"></i>
        ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Allow unauthenticated users"), "html", null, true);
        yield "
        <span class=\"form-help\"
            data-bs-toggle=\"popover\"
            data-bs-placement=\"top\"
            data-bs-html=\"true\"
            data-bs-content=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Users without accounts will be able to answer anonymously to this form. Authenticated users will not see this form."), "html", null, true);
        yield "\">
            ?
        </span>
    </span>
</label>

<input
    type=\"hidden\"
    name=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["access_control"] ?? null), "getNormalizedInputName", ["_token"], "method", false, false, false, 97), "html", null, true);
        yield "\"
    value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "getToken", [], "method", false, false, false, 98), "html", null, true);
        yield "\"
    data-glpi-direct-access-token-input
>

<script>
    (() => {
        const refresh_button = document.querySelector('[data-glpi-direct-access-refresh-token]');
        const input = document.querySelector('[data-glpi-direct-access-token-input]');
        const preview = document.querySelector('[data-glpi-direct-access-refresh-url]');

        refresh_button.addEventListener('click', () => {
            const message = __(\"Are you sure? Any users using the old link will no longer be able to access the form.\");
            if (!confirm(message)) {
                return;
            }

            // Quick copy of Toolbox::getRandomString()
            const keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            let token = '';
            for (let i = 0; i <= 40; i++) {
                token += keyspace[Math.floor(Math.random() * keyspace.length)];
            }

            input.value = token;

            let url = new URL(preview.value);
            url.searchParams.set(\"token\", token);
            preview.value = url;
        });
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
        return "pages/admin/form/access_control/direct_access.html.twig";
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
        return array (  144 => 98,  140 => 97,  129 => 89,  121 => 84,  114 => 80,  108 => 77,  99 => 71,  94 => 68,  86 => 62,  72 => 51,  68 => 50,  59 => 44,  53 => 41,  48 => 38,  45 => 36,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/form/access_control/direct_access.html.twig", "/Users/carlosperez/Documents/Dev/php/glpi_11/templates/pages/admin/form/access_control/direct_access.html.twig");
    }
}
