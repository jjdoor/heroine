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

/* D:\www\octobercms/themes/demo/pages/index.htm */
class __TwigTemplate_39959032039e2ab6f63463b1bec89faf8832369db0c3f225568ee09ebd7de615 extends \Twig\Template
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
        $context["members"] = ($context["members"] ?? null);
        // line 2
        echo "<main id=\"sb-site\" class=\"main_content\">
  <div id=\"cnt\">
    <div class=\"toppage_box bg_j1\">
      <div id=\"rss\" class=\"bounceInLeft wow\" data-wow-delay=\".1s\">
        <div id=\"rss_l\" class=\"title title_r bg_f2 sd_a bd_a tx_e1\"><em title=\"SHOP BLOG\" class=\"font1 tx_d1\">SHOP BLOG</em><br>
          店舗ブログ</div>
        <div id=\"rss_r\" class=\"bd_h bg_v1\"> <a href=\"https://sakazakiya0704.blog.fc2.com/blog-entry-1.html\" target=\"_blank\" class=\"bd_e tx_u1\"><em>2020/01/10(金)16:20</em><span class=\"tx_v1\">民族衣装の私、ミラ</span></a> </div>
      </div>
    </div>
    <div class=\"toppage_box bg_j1\">
      <div id=\"schedule\" class=\"bounceInLeft wow\" data-wow-delay=\".1s\">
        <h2 class=\"title bg_f2 sd_a bd_a tx_e1\"><em title=\"TODAY’S SCHEDULE\" class=\"font1 tx_d1\">TODAY’S SCHEDULE</em><br>
          本日の出勤</h2>
        <div class=\"sche_in bd_h bg_v1\">
          <ul id=\"bxslider_sche\">
\t\t    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["members"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 18
            echo "            <li class=\"slide bg_com\">
              \t<div class=\"img\">
\t\t\t  \t\t<a href=\"https://www.sakazakiya.net/prof/prof61/\" class=\"fade\"> <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "album", [], "any", false, false, false, 20), "path", [], "any", false, false, false, 20), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\"> </a>
\t\t\t\t\t";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["member"], "is_new", [], "any", false, false, false, 21)) {
                // line 22
                echo "\t\t\t\t\t<span class=\"icon bg_m1\">NEWFACE</span>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t</div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof61/\">松月(小潔)</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            <li class=\"slide bg_com\">
              <div class=\"img\"> <a href=\"https://www.sakazakiya.net/prof/prof86/\" class=\"fade\"> <img src=\"https://www.sakazakiya.net/prof/86/top.jpg?t=1580454756\" alt=\"淼淼\"> </a> <span class=\"icon bg_m1\">NEWFACE</span> </div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof86/\">淼淼</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
            <li class=\"slide bg_com\">
              <div class=\"img\"> <a href=\"https://www.sakazakiya.net/prof/prof85/\" class=\"fade\"> <img src=\"https://www.sakazakiya.net/prof/85/top.jpg?t=1580454756\" alt=\"詩思(しし)\"> </a> <span class=\"icon bg_m1\">NEWFACE</span> </div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof85/\">詩思(しし)</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
            <li class=\"slide bg_com\">
              <div class=\"img\"> <a href=\"https://www.sakazakiya.net/prof/prof66/\" class=\"fade\"> <img src=\"https://www.sakazakiya.net/prof/66/top.jpg?t=1580454756\" alt=\"小小\"> </a> <span class=\"icon bg_m1\">NEWFACE</span> </div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof66/\">小小</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
            <li class=\"slide bg_com\">
              <div class=\"img\"> <a href=\"https://www.sakazakiya.net/prof/prof83/\" class=\"fade\"> <img src=\"https://www.sakazakiya.net/prof/83/top.jpg?t=1580454756\" alt=\"香織\"> </a> </div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof83/\">香織</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id=\"shopinfo_bg\" class=\"toppage_box bg_j1\">
      <div id=\"shopinfo\" class=\"bd_h bg_v1 bounceInUp wow\" data-wow-delay=\".1s\">
        <h3 class=\"tx_w1\">大阪/日本橋デリヘル 阪崎屋</h3>
        <ul>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">業種</div>
              <div class=\"sibox_r\">デリヘル</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">住所</div>
              <div class=\"sibox_r\">大阪/日本橋[<a href=\"https://www.sakazakiya.net/access/\">アクセスマップ</a>]</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">発エリア</div>
              <div class=\"sibox_r\">大阪/日本橋</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">出張範囲</div>
              <div class=\"sibox_r\">大阪市内　大阪市外要相談</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">営業時間</div>
              <div class=\"sibox_r\">14:00～翌3:00</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">定休日</div>
              <div class=\"sibox_r\">年中無休</div>
            </div>
          </li>
        </ul>
        <div class=\"sibt\"> <a href=\"tel:07040867105\" class=\"stel tx_u1 bg_i1 bd_e\"> <span></span> <em class=\"tx_v1\">070-4086-7105</em><br>
          お店への電話はこちら </a> <a href=\"https://line.me/ti/p/jUprR4aPLj\" target=\"_blank\" class=\"sline tx_u1 bg_i1 bd_e\"> <span></span> <em class=\"tx_v1\">sakazakiya</em><br>
          <i>LINEでのお問い合わせはこちら</i> </a> </div>
      </div>
    </div>
  </div>
  <div id=\"page-top\">
    <div class=\"spft\"> <a href=\"tel:07040867105\" class=\"spft_in bg_d2 spfttel1\">
      <p class=\"ftel\"><span class=\"bd_q1\"></span><em>お店に電話する</em><br>
        070-4086-7105</p>
      </a> <a href=\"#\" data-scroll class=\"spft_in bg_e2\">
      <p class=\"fup\"><em>PAGE UP</em></p>
      </a> </div>
  </div>
</main>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\octobercms/themes/demo/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  76 => 24,  72 => 22,  70 => 21,  64 => 20,  60 => 18,  56 => 17,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set members = members %}
<main id=\"sb-site\" class=\"main_content\">
  <div id=\"cnt\">
    <div class=\"toppage_box bg_j1\">
      <div id=\"rss\" class=\"bounceInLeft wow\" data-wow-delay=\".1s\">
        <div id=\"rss_l\" class=\"title title_r bg_f2 sd_a bd_a tx_e1\"><em title=\"SHOP BLOG\" class=\"font1 tx_d1\">SHOP BLOG</em><br>
          店舗ブログ</div>
        <div id=\"rss_r\" class=\"bd_h bg_v1\"> <a href=\"https://sakazakiya0704.blog.fc2.com/blog-entry-1.html\" target=\"_blank\" class=\"bd_e tx_u1\"><em>2020/01/10(金)16:20</em><span class=\"tx_v1\">民族衣装の私、ミラ</span></a> </div>
      </div>
    </div>
    <div class=\"toppage_box bg_j1\">
      <div id=\"schedule\" class=\"bounceInLeft wow\" data-wow-delay=\".1s\">
        <h2 class=\"title bg_f2 sd_a bd_a tx_e1\"><em title=\"TODAY’S SCHEDULE\" class=\"font1 tx_d1\">TODAY’S SCHEDULE</em><br>
          本日の出勤</h2>
        <div class=\"sche_in bd_h bg_v1\">
          <ul id=\"bxslider_sche\">
\t\t    {% for member in members %}
            <li class=\"slide bg_com\">
              \t<div class=\"img\">
\t\t\t  \t\t<a href=\"https://www.sakazakiya.net/prof/prof61/\" class=\"fade\"> <img src=\"{{member.album.path}}\" alt=\"{{member.name}}\"> </a>
\t\t\t\t\t{% if member.is_new %}
\t\t\t\t\t<span class=\"icon bg_m1\">NEWFACE</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof61/\">松月(小潔)</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
\t\t\t{% endfor %}
            <li class=\"slide bg_com\">
              <div class=\"img\"> <a href=\"https://www.sakazakiya.net/prof/prof86/\" class=\"fade\"> <img src=\"https://www.sakazakiya.net/prof/86/top.jpg?t=1580454756\" alt=\"淼淼\"> </a> <span class=\"icon bg_m1\">NEWFACE</span> </div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof86/\">淼淼</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
            <li class=\"slide bg_com\">
              <div class=\"img\"> <a href=\"https://www.sakazakiya.net/prof/prof85/\" class=\"fade\"> <img src=\"https://www.sakazakiya.net/prof/85/top.jpg?t=1580454756\" alt=\"詩思(しし)\"> </a> <span class=\"icon bg_m1\">NEWFACE</span> </div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof85/\">詩思(しし)</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
            <li class=\"slide bg_com\">
              <div class=\"img\"> <a href=\"https://www.sakazakiya.net/prof/prof66/\" class=\"fade\"> <img src=\"https://www.sakazakiya.net/prof/66/top.jpg?t=1580454756\" alt=\"小小\"> </a> <span class=\"icon bg_m1\">NEWFACE</span> </div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof66/\">小小</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
            <li class=\"slide bg_com\">
              <div class=\"img\"> <a href=\"https://www.sakazakiya.net/prof/prof83/\" class=\"fade\"> <img src=\"https://www.sakazakiya.net/prof/83/top.jpg?t=1580454756\" alt=\"香織\"> </a> </div>
              <div class=\"txt\"> <a href=\"https://www.sakazakiya.net/prof/prof83/\">香織</a><br>
              </div>
              <p class=\"s_on bg_v1\">14:00～03:00</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id=\"shopinfo_bg\" class=\"toppage_box bg_j1\">
      <div id=\"shopinfo\" class=\"bd_h bg_v1 bounceInUp wow\" data-wow-delay=\".1s\">
        <h3 class=\"tx_w1\">大阪/日本橋デリヘル 阪崎屋</h3>
        <ul>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">業種</div>
              <div class=\"sibox_r\">デリヘル</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">住所</div>
              <div class=\"sibox_r\">大阪/日本橋[<a href=\"https://www.sakazakiya.net/access/\">アクセスマップ</a>]</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">発エリア</div>
              <div class=\"sibox_r\">大阪/日本橋</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">出張範囲</div>
              <div class=\"sibox_r\">大阪市内　大阪市外要相談</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">営業時間</div>
              <div class=\"sibox_r\">14:00～翌3:00</div>
            </div>
          </li>
          <li class=\"bd_e\">
            <div class=\"sibox\">
              <div class=\"sibox_l tx_w1\">定休日</div>
              <div class=\"sibox_r\">年中無休</div>
            </div>
          </li>
        </ul>
        <div class=\"sibt\"> <a href=\"tel:07040867105\" class=\"stel tx_u1 bg_i1 bd_e\"> <span></span> <em class=\"tx_v1\">070-4086-7105</em><br>
          お店への電話はこちら </a> <a href=\"https://line.me/ti/p/jUprR4aPLj\" target=\"_blank\" class=\"sline tx_u1 bg_i1 bd_e\"> <span></span> <em class=\"tx_v1\">sakazakiya</em><br>
          <i>LINEでのお問い合わせはこちら</i> </a> </div>
      </div>
    </div>
  </div>
  <div id=\"page-top\">
    <div class=\"spft\"> <a href=\"tel:07040867105\" class=\"spft_in bg_d2 spfttel1\">
      <p class=\"ftel\"><span class=\"bd_q1\"></span><em>お店に電話する</em><br>
        070-4086-7105</p>
      </a> <a href=\"#\" data-scroll class=\"spft_in bg_e2\">
      <p class=\"fup\"><em>PAGE UP</em></p>
      </a> </div>
  </div>
</main>", "D:\\www\\octobercms/themes/demo/pages/index.htm", "");
    }
}
