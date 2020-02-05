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

";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 90
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("desc"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 91
        echo "
<!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 94
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 95
        echo "        </section>

";
        // line 97
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("index_footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 98
        echo "
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
        return array (  204 => 98,  200 => 97,  196 => 95,  194 => 94,  189 => 91,  185 => 90,  181 => 89,  177 => 88,  128 => 42,  121 => 38,  114 => 34,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  37 => 1,);
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

{% partial 'header' %}
{% partial 'menu' %}
{% partial 'desc' %}

<!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

{% partial 'index_footer' %}

<script type=\"text/javascript\" src=\"https://www.sakazakiya.net/common/js/scrollreveal.min.js\"></script>
<script>
  window.sr = ScrollReveal();
  sr.reveal('.animate', { easing: 'ease', duration: 800, distance: '0px', opacity: 0, scale:0.8, viewFactor:0.2, mobile:true, reset:false });
</script>
</body>
</html>", "D:\\www\\octobercms/themes/demo/layouts/index.htm", "");
    }
}
