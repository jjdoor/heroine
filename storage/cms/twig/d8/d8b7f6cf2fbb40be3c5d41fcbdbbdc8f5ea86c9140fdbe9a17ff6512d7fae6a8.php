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

/* D:\www\octobercms/themes/demo/layouts/system.htm */
class __TwigTemplate_a35a4e133d7d318b8e4445578a261d7332d70e98afb1f9e0dc6f0b04b7b1edd6 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ja\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"author\" content=\"https://web.fucolle.com\">
\t<meta name=\"Keywords\" content=\"デリヘル,中華,大阪,日本橋,風俗,アジアン,莞式,秘伝,美女\">
\t<meta name=\"Description\" content=\"大阪日本橋発・超厳選華流美女の秘伝サービスはこちら！\">
\t<title>料金システム 大阪/日本橋デリヘル 阪崎屋</title>
\t<meta name=\"format-detection\" content=\"telephone=no,address=no,email=no\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=gmap bd_e bounceIn wow1.0\">
\t<link rel=\"canonical\" href=\"https://www.sakazakiya.net/system/\">
\t<link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:300\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/normalize.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bt.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/all.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/color.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/common_beautiful.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/system/style.css");
        echo "\" rel=\"stylesheet\">
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/jq1.11.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/to-top.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/sp_menu.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/menu_fix.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/jquery.lazyload.min.js");
        echo "\"></script>
    <script>
    \$(function () {
        \$('.lazy').lazyload({
        effect: 'fadeIn',
        effectspeed: 500,
        threshold : 10
        });
    });
    </script>
\t<script type=\"text/javascript\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/smooth-scroll.js");
        echo "\"></script>
    <script>
        smoothScroll.init() ;
    </script>
\t<script type=\"text/javascript\" src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/wow.min.js");
        echo "\"></script>
    <script>
        new WOW().init();
    </script>
<script type=\"application/ld+json\">
{\"@type\":\"Organization\",\"name\":\"\\u5927\\u962a\\/\\u65e5\\u672c\\u6a4b\\u30c7\\u30ea\\u30d8\\u30eb \\u962a\\u5d0e\\u5c4b\",\"url\":\"https:\\/\\/www.sakazakiya.net\\/\",\"telephone\":\"070-4086-7105\",\"address\":\"\\u5927\\u962a\\/\\u65e5\\u672c\\u6a4b\"}</script></head>
<body class=\"bgimg_a bg_i1 tx_u1\" id=\"companion_body\">


";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("desc"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "

";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 53
        echo "<footer>
\t<h2 class=\"s_title bg_f2 sd_a bd_a tx_e1\"><em title=\"SITE MENU\" class=\"font1 tx_d1\">SITE MENU</em><br>サイトメニュー</h2>
\t<div id=\"textlink\" class=\"tx_g2\"><a href=\"https://www.sakazakiya.net/top/\" title=\"トップページ\" class=\"tx_g1\">トップページ</a><span>│</span><a href=\"https://www.sakazakiya.net/staff/\" title=\"在籍一覧\" class=\"tx_g1\">在籍一覧<i>(7名)</i></a><span>│</span><a href=\"https://www.sakazakiya.net/schedule/\" title=\"スケジュール\" class=\"tx_g1\">スケジュール</a><span>│</span><a href=\"https://www.sakazakiya.net/system/\" title=\"料金システム\" class=\"tx_g1\">料金システム</a><span>│</span><a href=\"https://www.sakazakiya.net/access/\" title=\"アクセスマップ\" class=\"tx_g1\">アクセスマップ</a><span>│</span><a href=\"https://www.girlsheaven-job.net/osaka/ma-49/sa-470/sakazakiya/?of=y\" target=\"_blank\" title=\"求人\" class=\"tx_g1\">求人</a><span>│</span><a href=\"https://www.sakazakiya.net/link/\" title=\"リンク\" class=\"tx_g1\">リンク</a></div>
\t<div id=\"footer\">
\t\t<div id=\"up\"><a href=\"#\" data-scroll class=\"font1 tx_f1 bd_n\">PAGE UP</a></div>
\t\t<div id=\"finfo\" class=\"tx_i1\">
\t\t\t<h2>大阪/日本橋デリヘル 阪崎屋</h2>
\t\t\t<p><em class=\"tx_h1\">OPEN.</em>14:00～翌3:00</p>
      \t\t<p><em class=\"tx_h1\">TEL.</em>070-4086-7105</p>
\t\t\t<div id=\"ad\">
\t\t\t\t<span class=\"tx_h1\">Powered by</span> <a href=\"https://web.fucolle.com/\" target=\"_blank\" class=\"tx_i1\">風俗店ホームページ制作屋さん</a><br><em>　</em><span class=\"tx_h1\">Designed by</span> <a href=\"https://hp.fucolle.com/\" target=\"_blank\" class=\"tx_i1\">デリヘル無料ホームページ制作</a>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"copy\" class=\"font1 tx_j1\">
\t\t\tCopyright &#169; 2019 FUCOLLE.COM All Rights Reserved.<br>
\t\t\tIt Supports It to the <a href=\"https://delijob.fucolle.com/\" title=\"デリヘルでバイト！\" target=\"_blank\" class=\"tx_j1\">JOB</a> &amp; <a href=\"https://away.fucolle.com/\" title=\"風俗出稼ぎねっと\" target=\"_blank\" class=\"tx_j1\">AWAY</a>.<br>
\t\t</div>
\t</div>
</footer>
<script type=\"text/javascript\" src=\"https://www.sakazakiya.net/common/js/scrollreveal.min.js\"></script>
<script>
  window.sr = ScrollReveal();
  sr.reveal('.animate', { easing: 'ease', duration: 800, distance: '0px', opacity: 0, scale:0.8, viewFactor:0.2, mobile:true, reset:false });
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\octobercms/themes/demo/layouts/system.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  143 => 52,  139 => 50,  135 => 49,  131 => 48,  127 => 47,  115 => 38,  108 => 34,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ja\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"author\" content=\"https://web.fucolle.com\">
\t<meta name=\"Keywords\" content=\"デリヘル,中華,大阪,日本橋,風俗,アジアン,莞式,秘伝,美女\">
\t<meta name=\"Description\" content=\"大阪日本橋発・超厳選華流美女の秘伝サービスはこちら！\">
\t<title>料金システム 大阪/日本橋デリヘル 阪崎屋</title>
\t<meta name=\"format-detection\" content=\"telephone=no,address=no,email=no\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=gmap bd_e bounceIn wow1.0\">
\t<link rel=\"canonical\" href=\"https://www.sakazakiya.net/system/\">
\t<link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:300\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"{{ 'assets/css/normalize.css'|theme }}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/bt.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/all.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/color.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/common_beautiful.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/animate.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/system/style.css'|theme}}\" rel=\"stylesheet\">
\t<script type=\"text/javascript\" src=\"{{'assets/common/js/jq1.11.js'|theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/common/js/to-top.js'|theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/common/js/sp_menu.js'|theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/common/js/menu_fix.js'|theme}}\"></script>
\t<script type=\"text/javascript\" src=\"{{'assets/common/js/jquery.lazyload.min.js'|theme}}\"></script>
    <script>
    \$(function () {
        \$('.lazy').lazyload({
        effect: 'fadeIn',
        effectspeed: 500,
        threshold : 10
        });
    });
    </script>
\t<script type=\"text/javascript\" src=\"{{'assets/common/js/smooth-scroll.js'|theme}}\"></script>
    <script>
        smoothScroll.init() ;
    </script>
\t<script type=\"text/javascript\" src=\"{{'assets/common/js/wow.min.js'|theme}}\"></script>
    <script>
        new WOW().init();
    </script>
<script type=\"application/ld+json\">
{\"@type\":\"Organization\",\"name\":\"\\u5927\\u962a\\/\\u65e5\\u672c\\u6a4b\\u30c7\\u30ea\\u30d8\\u30eb \\u962a\\u5d0e\\u5c4b\",\"url\":\"https:\\/\\/www.sakazakiya.net\\/\",\"telephone\":\"070-4086-7105\",\"address\":\"\\u5927\\u962a\\/\\u65e5\\u672c\\u6a4b\"}</script></head>
<body class=\"bgimg_a bg_i1 tx_u1\" id=\"companion_body\">


{% partial 'header' %}
{% partial 'menu' %}
{% partial 'desc' %}


{% page %}
<footer>
\t<h2 class=\"s_title bg_f2 sd_a bd_a tx_e1\"><em title=\"SITE MENU\" class=\"font1 tx_d1\">SITE MENU</em><br>サイトメニュー</h2>
\t<div id=\"textlink\" class=\"tx_g2\"><a href=\"https://www.sakazakiya.net/top/\" title=\"トップページ\" class=\"tx_g1\">トップページ</a><span>│</span><a href=\"https://www.sakazakiya.net/staff/\" title=\"在籍一覧\" class=\"tx_g1\">在籍一覧<i>(7名)</i></a><span>│</span><a href=\"https://www.sakazakiya.net/schedule/\" title=\"スケジュール\" class=\"tx_g1\">スケジュール</a><span>│</span><a href=\"https://www.sakazakiya.net/system/\" title=\"料金システム\" class=\"tx_g1\">料金システム</a><span>│</span><a href=\"https://www.sakazakiya.net/access/\" title=\"アクセスマップ\" class=\"tx_g1\">アクセスマップ</a><span>│</span><a href=\"https://www.girlsheaven-job.net/osaka/ma-49/sa-470/sakazakiya/?of=y\" target=\"_blank\" title=\"求人\" class=\"tx_g1\">求人</a><span>│</span><a href=\"https://www.sakazakiya.net/link/\" title=\"リンク\" class=\"tx_g1\">リンク</a></div>
\t<div id=\"footer\">
\t\t<div id=\"up\"><a href=\"#\" data-scroll class=\"font1 tx_f1 bd_n\">PAGE UP</a></div>
\t\t<div id=\"finfo\" class=\"tx_i1\">
\t\t\t<h2>大阪/日本橋デリヘル 阪崎屋</h2>
\t\t\t<p><em class=\"tx_h1\">OPEN.</em>14:00～翌3:00</p>
      \t\t<p><em class=\"tx_h1\">TEL.</em>070-4086-7105</p>
\t\t\t<div id=\"ad\">
\t\t\t\t<span class=\"tx_h1\">Powered by</span> <a href=\"https://web.fucolle.com/\" target=\"_blank\" class=\"tx_i1\">風俗店ホームページ制作屋さん</a><br><em>　</em><span class=\"tx_h1\">Designed by</span> <a href=\"https://hp.fucolle.com/\" target=\"_blank\" class=\"tx_i1\">デリヘル無料ホームページ制作</a>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"copy\" class=\"font1 tx_j1\">
\t\t\tCopyright &#169; 2019 FUCOLLE.COM All Rights Reserved.<br>
\t\t\tIt Supports It to the <a href=\"https://delijob.fucolle.com/\" title=\"デリヘルでバイト！\" target=\"_blank\" class=\"tx_j1\">JOB</a> &amp; <a href=\"https://away.fucolle.com/\" title=\"風俗出稼ぎねっと\" target=\"_blank\" class=\"tx_j1\">AWAY</a>.<br>
\t\t</div>
\t</div>
</footer>
<script type=\"text/javascript\" src=\"https://www.sakazakiya.net/common/js/scrollreveal.min.js\"></script>
<script>
  window.sr = ScrollReveal();
  sr.reveal('.animate', { easing: 'ease', duration: 800, distance: '0px', opacity: 0, scale:0.8, viewFactor:0.2, mobile:true, reset:false });
</script>
</body>
</html>", "D:\\www\\octobercms/themes/demo/layouts/system.htm", "");
    }
}
