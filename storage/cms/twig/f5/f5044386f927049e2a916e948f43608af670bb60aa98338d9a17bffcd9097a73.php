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

/* D:\www\octobercms/themes/demo/layouts/access.htm */
class __TwigTemplate_e23868f69b2bada40f425749aabdfb218cbbfadd9c42415eb0ff9570af11a902 extends \Twig\Template
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
\t<title>アクセスマップ 大阪/日本橋デリヘル 阪崎屋</title>
\t<meta name=\"format-detection\" content=\"telephone=no,address=no,email=no\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
\t<link rel=\"canonical\" href=\"https://www.sakazakiya.net/access/\">
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/access/style.css");
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
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("desc"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "<script type=\"text/javascript\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/common/js/scrollreveal.min.js");
        echo "\"></script>
<script>
  window.sr = ScrollReveal();
  sr.reveal('.animate', { easing: 'ease', duration: 800, distance: '0px', opacity: 0, scale:0.8, viewFactor:0.2, mobile:true, reset:false });
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\octobercms/themes/demo/layouts/access.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 51,  140 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  115 => 38,  108 => 34,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  37 => 1,);
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
\t<title>アクセスマップ 大阪/日本橋デリヘル 阪崎屋</title>
\t<meta name=\"format-detection\" content=\"telephone=no,address=no,email=no\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
\t<link rel=\"canonical\" href=\"https://www.sakazakiya.net/access/\">
\t<link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:300\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"{{ 'assets/css/normalize.css'|theme }}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/bt.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/all.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/color.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/common_beautiful.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/css/animate.css'|theme}}\" rel=\"stylesheet\">
\t<link href=\"{{'assets/access/style.css'|theme}}\" rel=\"stylesheet\">
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
{% partial 'footer' %}
<script type=\"text/javascript\" src=\"{{'assets/common/js/scrollreveal.min.js'|theme}}\"></script>
<script>
  window.sr = ScrollReveal();
  sr.reveal('.animate', { easing: 'ease', duration: 800, distance: '0px', opacity: 0, scale:0.8, viewFactor:0.2, mobile:true, reset:false });
</script>
</body>
</html>", "D:\\www\\octobercms/themes/demo/layouts/access.htm", "");
    }
}
