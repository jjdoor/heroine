<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\www\octobercms/themes/demo/partials/desc.htm */
class __TwigTemplate_7830d852e26e1404d07788de063988f83cc91045b15078670305e35d133a7bff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"topimg\"><h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</h2></div>
<section id=\"hinfo\" class=\"tx_q1 bg_q1\">
\t<p class=\"hopen\"><span class=\"bd_q1\"></span>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "open_hour", [], "any", false, false, false, 3), "html", null, true);
        echo "</p><br>
\t<p class=\"htel\"><span class=\"bd_q1\"></span><a href=\"tel:";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tel", [], "any", false, false, false, 4), "html", null, true);
        echo "\" class=\"tx_q1\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tel", [], "any", false, false, false, 4), "html", null, true);
        echo "</a></p>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\octobercms/themes/demo/partials/desc.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"topimg\"><h2>{{record.name}}</h2></div>
<section id=\"hinfo\" class=\"tx_q1 bg_q1\">
\t<p class=\"hopen\"><span class=\"bd_q1\"></span>{{record.open_hour}}</p><br>
\t<p class=\"htel\"><span class=\"bd_q1\"></span><a href=\"tel:{{record.tel}}\" class=\"tx_q1\">{{record.tel}}</a></p>
</section>", "D:\\www\\octobercms/themes/demo/partials/desc.htm", "");
    }
}
