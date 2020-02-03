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

/* D:\www\octobercms/themes/demo/layouts/index.htm */
class __TwigTemplate_795411a6255fdb1cbec0da42b6597dbd594da242cc158e4e67c215e5c4b0be7c extends \Twig\Template
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
<meta charset=\"UTF-8\">
<meta name=\"Keywords\" content=\"デリヘル,中華,大阪,日本橋,風俗,アジアン,莞式,秘伝,美女\">
<meta name=\"Description\" content=\"大阪日本橋発・超厳選華流美女の秘伝サービスはこちら！\">
<title>トップページ 大阪/日本橋デリヘル 阪崎屋</title>
<meta name=\"format-detection\" content=\"telephone=no,address=no,email=no\">
<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
<link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:300\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/normalize.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bt.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/all.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/color.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/common_beautiful.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/top/sp_jquery.bxslider.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/top/style.css");
        echo "\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/jq1.11.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/to-top.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/sp_menu.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/menu_fix.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
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
<script type=\"text/javascript\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/smooth-scroll.js");
        echo "\"></script>
<script>
        smoothScroll.init() ;
    </script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/wow.min.js");
        echo "\"></script>
<script>
        new WOW().init();
    </script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/top/jquery.bxslider.js");
        echo "\"></script>
<script>
        \$(function() {
            var sliderType;
            var breakpoint = 650;
            var spOption = {
                auto: false,
                pager: false,
                controls: true,
                minSlides: 3,
                maxSlides: 3,
                moveSlides: 3,
                slideWidth: 102,
                slideMargin: 3
            }
            var pcOption = {
                auto: false,
                pager: false,
                controls: true,
                minSlides: 5,
                maxSlides: 5,
                moveSlides: 1,
                slideWidth: 190,
                slideMargin: 20
            }
            var slider = \$('#bxslider_sche').bxSlider();
            \$(window).on('load resize', function() {
                sliderSet();
            });
            function sliderSet() {
                var windowWidth = \$(window).width();
                if (windowWidth <= breakpoint && sliderType != 'sp') {
                    slider.reloadSlider(spOption);
                    sliderType = 'sp';
                } else if (windowWidth > breakpoint && sliderType != 'pc') {
                    slider.reloadSlider(pcOption);
                    sliderType = 'pc';
                }
            }
        });
    </script>
<script type=\"application/ld+json\">
{\"@type\":\"Organization\",\"name\":\"\\u5927\\u962a\\/\\u65e5\\u672c\\u6a4b\\u30c7\\u30ea\\u30d8\\u30eb \\u962a\\u5d0e\\u5c4b\",\"url\":\"https:\\/\\/www.sakazakiya.net\\/\",\"telephone\":\"070-4086-7105\",\"address\":\"\\u5927\\u962a\\/\\u65e5\\u672c\\u6a4b\"}</script>
</head>
<body class=\"bgimg_a bg_i1 tx_u1\" id=\"toppage_body\">
<header class=\"header_b bg_s1\">
  <h1 class=\"tx_k1\">大阪/日本橋デリヘル 阪崎屋</h1>
  <div id=\"navToggle\" class=\"fade\">
    <button class=\"bd_sp1\">メニュー<span class=\"tx_p1\"></span></button>
  </div>
</header>
<nav class=\"bg_u1 bd_u1 in_u1\">
  <ul>
    <li><a href=\"https://www.sakazakiya.net/top/\" title=\"トップページ\" class=\"tx_o1 bd_n1\"><em><span title=\"TOP PAGE\" class=\"font1 tx_n1\">TOP PAGE</span></em><br>
      トップページ</a></li>
    <li><a href=\"https://www.sakazakiya.net/staff/\" title=\"在籍一覧\" class=\"tx_o1 bd_n1\"><em><span title=\"CAST\" class=\"font1 tx_n1\">CAST</span></em><br>
      在籍一覧<i>(7名)</i></a></li>
    <li><a href=\"https://www.sakazakiya.net/schedule/\" title=\"スケジュール\" class=\"tx_o1 bd_n1\"><em><span title=\"SCHEDULE\" class=\"font1 tx_n1\">SCHEDULE</span></em><br>
      スケジュール</a></li>
    <li><a href=\"https://www.sakazakiya.net/system/\" title=\"料金システム\" class=\"tx_o1 bd_n1\"><em><span title=\"SYSTEM\" class=\"font1 tx_n1\">SYSTEM</span></em><br>
      料金システム</a></li>
    <li><a href=\"https://www.sakazakiya.net/access/\" title=\"アクセスマップ\" class=\"tx_o1 bd_n1\"><em><span title=\"ACCESS\" class=\"font1 tx_n1\">ACCESS</span></em><br>
      アクセスマップ</a></li>
    <li><a href=\"https://www.girlsheaven-job.net/osaka/ma-49/sa-470/sakazakiya/?of=y\" target=\"_blank\" title=\"求人\" class=\"tx_o1 bd_n1\"><em><span title=\"RECRUIT\" class=\"font1 tx_n1\">RECRUIT</span></em><br>
      求人</a></li>
  </ul>
</nav>
<div id=\"topimg\">
  <h2>大阪/日本橋デリヘル 阪崎屋</h2>
</div>
<section id=\"hinfo\" class=\"tx_q1 bg_q1\">
  <p class=\"hopen\"><span class=\"bd_q1\"></span>14:00～翌3:00</p>
  <br>
  <p class=\"htel\"><span class=\"bd_q1\"></span><a href=\"tel:07040867105\" class=\"tx_q1\">070-4086-7105</a></p>
</section>
<!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 119
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 120
        echo "        </section>
<footer>
  <h2 class=\"s_title bg_f2 sd_a bd_a tx_e1\"><em title=\"SITE MENU\" class=\"font1 tx_d1\">SITE MENU</em><br>
    サイトメニュー</h2>
  <div id=\"textlink\" class=\"tx_g2\"><a href=\"https://www.sakazakiya.net/top/\" title=\"トップページ\" class=\"tx_g1\">トップページ</a><span>│</span><a href=\"https://www.sakazakiya.net/staff/\" title=\"在籍一覧\" class=\"tx_g1\">在籍一覧<i>(7名)</i></a><span>│</span><a href=\"https://www.sakazakiya.net/schedule/\" title=\"スケジュール\" class=\"tx_g1\">スケジュール</a><span>│</span><a href=\"https://www.sakazakiya.net/system/\" title=\"料金システム\" class=\"tx_g1\">料金システム</a><span>│</span><a href=\"https://www.sakazakiya.net/access/\" title=\"アクセスマップ\" class=\"tx_g1\">アクセスマップ</a><span>│</span><a href=\"https://www.girlsheaven-job.net/osaka/ma-49/sa-470/sakazakiya/?of=y\" target=\"_blank\" title=\"求人\" class=\"tx_g1\">求人</a><span>│</span><a href=\"https://www.sakazakiya.net/link/\" title=\"リンク\" class=\"tx_g1\">リンク</a></div>
  <div id=\"footer\">
    <div id=\"up\"><a href=\"#\" data-scroll class=\"font1 tx_f1 bd_n\">PAGE UP</a></div>
    <div id=\"finfo\" class=\"tx_i1\">
      <h2>大阪/日本橋デリヘル 阪崎屋</h2>
      <p><em class=\"tx_h1\">OPEN.</em>14:00～翌3:00</p>
      <p><em class=\"tx_h1\">TEL.</em>070-4086-7105</p>
      <div id=\"ad\"> <span class=\"tx_h1\">Powered by</span> <a href=\"https://web.fucolle.com/\" target=\"_blank\" class=\"tx_i1\">風俗店ホームページ制作屋さん</a><br>
        <em>　</em><span class=\"tx_h1\">Designed by</span> <a href=\"https://hp.fucolle.com/\" target=\"_blank\" class=\"tx_i1\">デリヘル無料ホームページ制作</a> </div>
    </div>
    <div id=\"copy\" class=\"font1 tx_j1\"> Copyright &#169; 2019 FUCOLLE.COM All Rights Reserved.<br>
      It Supports It to the <a href=\"https://delijob.fucolle.com/\" title=\"デリヘルでバイト！\" target=\"_blank\" class=\"tx_j1\">JOB</a> &amp; <a href=\"https://away.fucolle.com/\" title=\"風俗出稼ぎねっと\" target=\"_blank\" class=\"tx_j1\">AWAY</a>.<br>
    </div>
  </div>
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
        return "D:\\www\\octobercms/themes/demo/layouts/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 120,  208 => 119,  128 => 42,  121 => 38,  114 => 34,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ja\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"Keywords\" content=\"デリヘル,中華,大阪,日本橋,風俗,アジアン,莞式,秘伝,美女\">
<meta name=\"Description\" content=\"大阪日本橋発・超厳選華流美女の秘伝サービスはこちら！\">
<title>トップページ 大阪/日本橋デリヘル 阪崎屋</title>
<meta name=\"format-detection\" content=\"telephone=no,address=no,email=no\">
<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
<link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:300\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ 'assets/css/normalize.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{'assets/css/bt.css'|theme}}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{'assets/css/all.css'|theme}}\" rel=\"stylesheet\">
<link href=\"{{'assets/css/color.css'|theme}}\" rel=\"stylesheet\">
<link href=\"{{'assets/css/common_beautiful.css'|theme}}\" rel=\"stylesheet\">
<link href=\"{{'assets/css/animate.css'|theme}}\" rel=\"stylesheet\">
<link href=\"{{'assets/top/sp_jquery.bxslider.css'|theme}}\" rel=\"stylesheet\">
<link href=\"{{'assets/top/style.css'|theme}}\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"{{'assets/common/js/jq1.11.js'|theme}}\"></script>
<script type=\"text/javascript\" src=\"{{'assets/common/js/to-top.js'|theme}}\"></script>
<script type=\"text/javascript\" src=\"{{'assets/common/js/sp_menu.js'|theme}}\"></script>
<script type=\"text/javascript\" src=\"{{'assets/common/js/menu_fix.js'|theme}}\"></script>
<script type=\"text/javascript\" src=\"{{'assets/common/js/jquery.lazyload.min.js'|theme}}\"></script>
<script>
    \$(function () {
        \$('.lazy').lazyload({
        effect: 'fadeIn',
        effectspeed: 500,
        threshold : 10
        });
    });
    </script>
<script type=\"text/javascript\" src=\"{{'assets/common/js/smooth-scroll.js'|theme}}\"></script>
<script>
        smoothScroll.init() ;
    </script>
<script type=\"text/javascript\" src=\"{{'assets/common/js/wow.min.js'|theme}}\"></script>
<script>
        new WOW().init();
    </script>
<script type=\"text/javascript\" src=\"{{'assets/top/jquery.bxslider.js'|theme}}\"></script>
<script>
        \$(function() {
            var sliderType;
            var breakpoint = 650;
            var spOption = {
                auto: false,
                pager: false,
                controls: true,
                minSlides: 3,
                maxSlides: 3,
                moveSlides: 3,
                slideWidth: 102,
                slideMargin: 3
            }
            var pcOption = {
                auto: false,
                pager: false,
                controls: true,
                minSlides: 5,
                maxSlides: 5,
                moveSlides: 1,
                slideWidth: 190,
                slideMargin: 20
            }
            var slider = \$('#bxslider_sche').bxSlider();
            \$(window).on('load resize', function() {
                sliderSet();
            });
            function sliderSet() {
                var windowWidth = \$(window).width();
                if (windowWidth <= breakpoint && sliderType != 'sp') {
                    slider.reloadSlider(spOption);
                    sliderType = 'sp';
                } else if (windowWidth > breakpoint && sliderType != 'pc') {
                    slider.reloadSlider(pcOption);
                    sliderType = 'pc';
                }
            }
        });
    </script>
<script type=\"application/ld+json\">
{\"@type\":\"Organization\",\"name\":\"\\u5927\\u962a\\/\\u65e5\\u672c\\u6a4b\\u30c7\\u30ea\\u30d8\\u30eb \\u962a\\u5d0e\\u5c4b\",\"url\":\"https:\\/\\/www.sakazakiya.net\\/\",\"telephone\":\"070-4086-7105\",\"address\":\"\\u5927\\u962a\\/\\u65e5\\u672c\\u6a4b\"}</script>
</head>
<body class=\"bgimg_a bg_i1 tx_u1\" id=\"toppage_body\">
<header class=\"header_b bg_s1\">
  <h1 class=\"tx_k1\">大阪/日本橋デリヘル 阪崎屋</h1>
  <div id=\"navToggle\" class=\"fade\">
    <button class=\"bd_sp1\">メニュー<span class=\"tx_p1\"></span></button>
  </div>
</header>
<nav class=\"bg_u1 bd_u1 in_u1\">
  <ul>
    <li><a href=\"https://www.sakazakiya.net/top/\" title=\"トップページ\" class=\"tx_o1 bd_n1\"><em><span title=\"TOP PAGE\" class=\"font1 tx_n1\">TOP PAGE</span></em><br>
      トップページ</a></li>
    <li><a href=\"https://www.sakazakiya.net/staff/\" title=\"在籍一覧\" class=\"tx_o1 bd_n1\"><em><span title=\"CAST\" class=\"font1 tx_n1\">CAST</span></em><br>
      在籍一覧<i>(7名)</i></a></li>
    <li><a href=\"https://www.sakazakiya.net/schedule/\" title=\"スケジュール\" class=\"tx_o1 bd_n1\"><em><span title=\"SCHEDULE\" class=\"font1 tx_n1\">SCHEDULE</span></em><br>
      スケジュール</a></li>
    <li><a href=\"https://www.sakazakiya.net/system/\" title=\"料金システム\" class=\"tx_o1 bd_n1\"><em><span title=\"SYSTEM\" class=\"font1 tx_n1\">SYSTEM</span></em><br>
      料金システム</a></li>
    <li><a href=\"https://www.sakazakiya.net/access/\" title=\"アクセスマップ\" class=\"tx_o1 bd_n1\"><em><span title=\"ACCESS\" class=\"font1 tx_n1\">ACCESS</span></em><br>
      アクセスマップ</a></li>
    <li><a href=\"https://www.girlsheaven-job.net/osaka/ma-49/sa-470/sakazakiya/?of=y\" target=\"_blank\" title=\"求人\" class=\"tx_o1 bd_n1\"><em><span title=\"RECRUIT\" class=\"font1 tx_n1\">RECRUIT</span></em><br>
      求人</a></li>
  </ul>
</nav>
<div id=\"topimg\">
  <h2>大阪/日本橋デリヘル 阪崎屋</h2>
</div>
<section id=\"hinfo\" class=\"tx_q1 bg_q1\">
  <p class=\"hopen\"><span class=\"bd_q1\"></span>14:00～翌3:00</p>
  <br>
  <p class=\"htel\"><span class=\"bd_q1\"></span><a href=\"tel:07040867105\" class=\"tx_q1\">070-4086-7105</a></p>
</section>
<!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>
<footer>
  <h2 class=\"s_title bg_f2 sd_a bd_a tx_e1\"><em title=\"SITE MENU\" class=\"font1 tx_d1\">SITE MENU</em><br>
    サイトメニュー</h2>
  <div id=\"textlink\" class=\"tx_g2\"><a href=\"https://www.sakazakiya.net/top/\" title=\"トップページ\" class=\"tx_g1\">トップページ</a><span>│</span><a href=\"https://www.sakazakiya.net/staff/\" title=\"在籍一覧\" class=\"tx_g1\">在籍一覧<i>(7名)</i></a><span>│</span><a href=\"https://www.sakazakiya.net/schedule/\" title=\"スケジュール\" class=\"tx_g1\">スケジュール</a><span>│</span><a href=\"https://www.sakazakiya.net/system/\" title=\"料金システム\" class=\"tx_g1\">料金システム</a><span>│</span><a href=\"https://www.sakazakiya.net/access/\" title=\"アクセスマップ\" class=\"tx_g1\">アクセスマップ</a><span>│</span><a href=\"https://www.girlsheaven-job.net/osaka/ma-49/sa-470/sakazakiya/?of=y\" target=\"_blank\" title=\"求人\" class=\"tx_g1\">求人</a><span>│</span><a href=\"https://www.sakazakiya.net/link/\" title=\"リンク\" class=\"tx_g1\">リンク</a></div>
  <div id=\"footer\">
    <div id=\"up\"><a href=\"#\" data-scroll class=\"font1 tx_f1 bd_n\">PAGE UP</a></div>
    <div id=\"finfo\" class=\"tx_i1\">
      <h2>大阪/日本橋デリヘル 阪崎屋</h2>
      <p><em class=\"tx_h1\">OPEN.</em>14:00～翌3:00</p>
      <p><em class=\"tx_h1\">TEL.</em>070-4086-7105</p>
      <div id=\"ad\"> <span class=\"tx_h1\">Powered by</span> <a href=\"https://web.fucolle.com/\" target=\"_blank\" class=\"tx_i1\">風俗店ホームページ制作屋さん</a><br>
        <em>　</em><span class=\"tx_h1\">Designed by</span> <a href=\"https://hp.fucolle.com/\" target=\"_blank\" class=\"tx_i1\">デリヘル無料ホームページ制作</a> </div>
    </div>
    <div id=\"copy\" class=\"font1 tx_j1\"> Copyright &#169; 2019 FUCOLLE.COM All Rights Reserved.<br>
      It Supports It to the <a href=\"https://delijob.fucolle.com/\" title=\"デリヘルでバイト！\" target=\"_blank\" class=\"tx_j1\">JOB</a> &amp; <a href=\"https://away.fucolle.com/\" title=\"風俗出稼ぎねっと\" target=\"_blank\" class=\"tx_j1\">AWAY</a>.<br>
    </div>
  </div>
</footer>
<script type=\"text/javascript\" src=\"https://www.sakazakiya.net/common/js/scrollreveal.min.js\"></script>
<script>
  window.sr = ScrollReveal();
  sr.reveal('.animate', { easing: 'ease', duration: 800, distance: '0px', opacity: 0, scale:0.8, viewFactor:0.2, mobile:true, reset:false });
</script>
</body>
</html>", "D:\\www\\octobercms/themes/demo/layouts/index.htm", "");
    }
}
