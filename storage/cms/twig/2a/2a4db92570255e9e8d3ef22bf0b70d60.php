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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/site/menu-header.htm */
class __TwigTemplate_8c11de90ca94b3f9461b3b68c5e3432d extends Template
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
        echo "<ul>
  
  <li class=\" ";
        // line 3
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "url", [], "any", false, false, false, 3) == "/")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
      ";
        // line 5
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 5) == "ru")) {
            echo " Главная ";
        } else {
            echo " Home ";
        }
        // line 6
        echo "    </a>
  </li>
  <li class=\"";
        // line 8
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "url", [], "any", false, false, false, 8) == "/tours")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours/index");
        echo "\">
      ";
        // line 10
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 10) == "ru")) {
            echo " Туры ";
        } else {
            echo " Tours ";
        }
        // line 11
        echo "    </a>
  </li>
  <li class=\"";
        // line 13
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13) == "/rent")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("rent");
        echo "\">
      ";
        // line 15
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 15) == "ru")) {
            echo " Аренда ";
        } else {
            echo " Rent ";
        }
        // line 16
        echo "    </a>
  </li>
  <li class=\"";
        // line 18
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "url", [], "any", false, false, false, 18) == "/blog")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/index");
        echo "\">
      ";
        // line 20
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 20) == "ru")) {
            echo " Блог ";
        } else {
            echo " Blog ";
        }
        // line 21
        echo "    </a>
  </li>
  <li class=\"";
        // line 23
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "url", [], "any", false, false, false, 23) == "/video/:page?") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "url", [], "any", false, false, false, 23) == "/photo/:page?"))) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"#\" style=\"pointer-events: none;\">
      ";
        // line 25
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 25) == "ru")) {
            echo " Медиа ";
        } else {
            echo " Media  ";
        }
        // line 26
        echo "    </a>
    <ul>
      <li>
        <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("video");
        echo "\">
          ";
        // line 30
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 30) == "ru")) {
            echo " Видео ";
        } else {
            echo " Video ";
        }
        // line 31
        echo "        </a>
      </li>
      <li>
        <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("photo");
        echo "\"> ";
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 34) == "ru")) {
            echo " Фото ";
        } else {
            echo " Photo ";
        }
        echo " </a>
      </li>
    </ul>
  </li>
  <li class=\"";
        // line 38
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "url", [], "any", false, false, false, 38) == "/contacts")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\"> ";
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 39) == "ru")) {
            echo " Контакты ";
        } else {
            echo " Contacts ";
        }
        echo " </a>
  </li>
  ";
        // line 41
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/menu-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 42,  196 => 41,  185 => 39,  177 => 38,  164 => 34,  159 => 31,  153 => 30,  149 => 29,  144 => 26,  138 => 25,  129 => 23,  125 => 21,  119 => 20,  115 => 19,  107 => 18,  103 => 16,  97 => 15,  93 => 14,  85 => 13,  81 => 11,  75 => 10,  71 => 9,  63 => 8,  59 => 6,  53 => 5,  49 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
  
  <li class=\" {% if this.page.url == '/' %} active {% else %} {% endif %}\">
    <a href=\"{{'home'| page}}\">
      {% if this.locale == 'ru' %} Главная {% else %} Home {% endif %}
    </a>
  </li>
  <li class=\"{% if this.page.url == '/tours' %} active {% else %} {% endif %}\">
    <a href=\"{{'tours/index'| page}}\">
      {% if this.locale == 'ru' %} Туры {% else %} Tours {% endif %}
    </a>
  </li>
  <li class=\"{% if this.page.url == '/rent' %} active {% else %} {% endif %}\">
    <a href=\"{{'rent'| page}}\">
      {% if this.locale == 'ru' %} Аренда {% else %} Rent {% endif %}
    </a>
  </li>
  <li class=\"{% if this.page.url == '/blog' %} active {% else %} {% endif %}\">
    <a href=\"{{'blog/index'| page}}\">
      {% if this.locale == 'ru' %} Блог {% else %} Blog {% endif %}
    </a>
  </li>
  <li class=\"{% if this.page.url == '/video/:page?' or this.page.url == '/photo/:page?' %} active {% else %} {% endif %}\">
    <a href=\"#\" style=\"pointer-events: none;\">
      {% if this.locale == 'ru' %} Медиа {% else %} Media  {% endif %}
    </a>
    <ul>
      <li>
        <a href=\"{{'video'| page}}\">
          {% if this.locale == 'ru' %} Видео {% else %} Video {% endif %}
        </a>
      </li>
      <li>
        <a href=\"{{'photo'| page}}\"> {% if this.locale == 'ru' %} Фото {% else %} Photo {% endif %} </a>
      </li>
    </ul>
  </li>
  <li class=\"{% if this.page.url == '/contacts' %} active {% else %} {% endif %}\">
    <a href=\"{{'contacts'| page}}\"> {% if this.locale == 'ru' %} Контакты {% else %} Contacts {% endif %} </a>
  </li>
  {% component 'staticMenu' %}
</ul>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/menu-header.htm", "");
    }
}
