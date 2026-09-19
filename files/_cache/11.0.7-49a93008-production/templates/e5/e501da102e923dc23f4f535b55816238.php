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

/* pages/setup/notification/group_notifications.html.twig */
class __TwigTemplate_2091a583f26081fbb24abd4331d985f8 extends Template
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
<table class=\"table table-borderless\">
   ";
        // line 34
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["notifications"] ?? null)) > 0)) {
            // line 35
            yield "      <thead>
         <tr>
            <th>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "html", null, true);
            yield "</th>
            <th>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity", 1), "html", null, true);
            yield "</th>
            <th>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Active"), "html", null, true);
            yield "</th>
            <th>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Type", "Types", 1), "html", null, true);
            yield "</th>
            <th>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notification method"), "html", null, true);
            yield "</th>
            <th>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("NotificationEvent", 1), "html", null, true);
            yield "</th>
            <th>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("NotificationTemplate", 1), "html", null, true);
            yield "</th>
         </tr>
      </thead>
      <tbody>
         ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["notifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 48
                yield "            ";
                $context["itemtype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "fields", [], "any", false, true, false, 48), "itemtype", [], "array", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "fields", [], "any", false, false, false, 48)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["itemtype"] ?? null) : null), "")) : (""));
                // line 49
                yield "            <tr>
               <td>";
                // line 50
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink($context["notification"]);
                yield "</td>
               <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "getEntityID", [], "method", false, false, false, 51)), "html", null, true);
                yield "</td>
               <td>";
                // line 52
                yield (((($tmp = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "fields", [], "any", false, false, false, 52)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_active"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "html", null, true)));
                yield "</td>
               <td>
                  ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
                yield "
               </td>
               <td>
                  ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Notification_NotificationTemplate::getMode", [(($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "fields", [], "any", false, false, false, 57)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["mode"] ?? null) : null)]), "html", null, true);
                yield "
               </td>
               <td>
                  ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("NotificationEvent::getEventName", [($context["itemtype"] ?? null), (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "fields", [], "any", false, false, false, 60)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["event"] ?? null) : null)]), "html", null, true);
                yield "
               </td>
               <td>
                  ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("NotificationTemplate", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "fields", [], "any", false, false, false, 63)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["notificationtemplates_id"] ?? null) : null)), "html", null, true);
                yield "
               </td>
            </tr>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "      </tbody>
   ";
        } else {
            // line 69
            yield "      <tbody>
         <tr><td class=\"b center\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No results found"), "html", null, true);
            yield "</td></tr>
      </tbody>
   ";
        }
        // line 73
        yield "</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/notification/group_notifications.html.twig";
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
        return array (  147 => 73,  141 => 70,  138 => 69,  134 => 67,  124 => 63,  118 => 60,  112 => 57,  106 => 54,  101 => 52,  97 => 51,  93 => 50,  90 => 49,  87 => 48,  83 => 47,  76 => 43,  72 => 42,  68 => 41,  64 => 40,  60 => 39,  56 => 38,  52 => 37,  48 => 35,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/notification/group_notifications.html.twig", "/home/t7x4o9pmpeuw/public_html/helpdesk.trantortechnologies.mx/templates/pages/setup/notification/group_notifications.html.twig");
    }
}
