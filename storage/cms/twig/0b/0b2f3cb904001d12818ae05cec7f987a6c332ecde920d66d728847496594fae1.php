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

/* D:\www\octobercms/themes/demo/partials/header.htm */
class __TwigTemplate_f176bebc66a5660b1cbdc95126741a04d4d117d6857f6c958bd6d64920a1d3f6 extends \Twig\Template
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
        echo "<header class=\"header_b bg_s1\">
\t<h1 class=\"tx_k1\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "</h1>
\t<div id=\"navToggle\" class=\"fade\">
\t\t<button class=\"bd_sp1\">メニュー<span class=\"tx_p1\"></span></button>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\octobercms/themes/demo/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header_b bg_s1\">
\t<h1 class=\"tx_k1\">{{record.name}}</h1>
\t<div id=\"navToggle\" class=\"fade\">
\t\t<button class=\"bd_sp1\">メニュー<span class=\"tx_p1\"></span></button>
\t</div>
</header>", "D:\\www\\octobercms/themes/demo/partials/header.htm", "");
    }
}
