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

/* D:\www\octobercms/themes/demo/partials/index_footer.htm */
class __TwigTemplate_63925fdc9c53c7d3ebc447bc76462130e58bcff494fc0295b7d661839a6f9ada extends \Twig\Template
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
        echo "<footer>
  <h2 class=\"s_title bg_f2 sd_a bd_a tx_e1\"><em title=\"SITE MENU\" class=\"font1 tx_d1\">SITE MENU</em><br>
    サイトメニュー</h2>
  <div id=\"textlink\" class=\"tx_g2\"><a href=\"https://www.sakazakiya.net/top/\" title=\"トップページ\" class=\"tx_g1\">トップページ</a><span>│</span><a href=\"https://www.sakazakiya.net/staff/\" title=\"在籍一覧\" class=\"tx_g1\">在籍一覧<i>(7名)</i></a><span>│</span><a href=\"https://www.sakazakiya.net/schedule/\" title=\"スケジュール\" class=\"tx_g1\">スケジュール</a><span>│</span><a href=\"https://www.sakazakiya.net/system/\" title=\"料金システム\" class=\"tx_g1\">料金システム</a><span>│</span><a href=\"https://www.sakazakiya.net/access/\" title=\"アクセスマップ\" class=\"tx_g1\">アクセスマップ</a><span>│</span><a href=\"https://www.girlsheaven-job.net/osaka/ma-49/sa-470/sakazakiya/?of=y\" target=\"_blank\" title=\"求人\" class=\"tx_g1\">求人</a><span>│</span><a href=\"https://www.sakazakiya.net/link/\" title=\"リンク\" class=\"tx_g1\">リンク</a></div>
  <div id=\"footer\">
    <div id=\"up\"><a href=\"#\" data-scroll class=\"font1 tx_f1 bd_n\">PAGE UP</a></div>
    <div id=\"finfo\" class=\"tx_i1\">
      <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "address", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
      <p><em class=\"tx_h1\">OPEN.</em>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "open_hour", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
      <p><em class=\"tx_h1\">TEL.</em>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "tel", [], "any", false, false, false, 10), "html", null, true);
        echo "}</p>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\octobercms/themes/demo/partials/index_footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  52 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
  <h2 class=\"s_title bg_f2 sd_a bd_a tx_e1\"><em title=\"SITE MENU\" class=\"font1 tx_d1\">SITE MENU</em><br>
    サイトメニュー</h2>
  <div id=\"textlink\" class=\"tx_g2\"><a href=\"https://www.sakazakiya.net/top/\" title=\"トップページ\" class=\"tx_g1\">トップページ</a><span>│</span><a href=\"https://www.sakazakiya.net/staff/\" title=\"在籍一覧\" class=\"tx_g1\">在籍一覧<i>(7名)</i></a><span>│</span><a href=\"https://www.sakazakiya.net/schedule/\" title=\"スケジュール\" class=\"tx_g1\">スケジュール</a><span>│</span><a href=\"https://www.sakazakiya.net/system/\" title=\"料金システム\" class=\"tx_g1\">料金システム</a><span>│</span><a href=\"https://www.sakazakiya.net/access/\" title=\"アクセスマップ\" class=\"tx_g1\">アクセスマップ</a><span>│</span><a href=\"https://www.girlsheaven-job.net/osaka/ma-49/sa-470/sakazakiya/?of=y\" target=\"_blank\" title=\"求人\" class=\"tx_g1\">求人</a><span>│</span><a href=\"https://www.sakazakiya.net/link/\" title=\"リンク\" class=\"tx_g1\">リンク</a></div>
  <div id=\"footer\">
    <div id=\"up\"><a href=\"#\" data-scroll class=\"font1 tx_f1 bd_n\">PAGE UP</a></div>
    <div id=\"finfo\" class=\"tx_i1\">
      <h2>{{record.address}} {{record.name}}</h2>
      <p><em class=\"tx_h1\">OPEN.</em>{{record.open_hour}}</p>
      <p><em class=\"tx_h1\">TEL.</em>{{record.tel}}}</p>
    </div>
  </div>
</footer>", "D:\\www\\octobercms/themes/demo/partials/index_footer.htm", "");
    }
}
