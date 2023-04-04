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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/site/lang.htm */
class __TwigTemplate_68abe68297eb2000238d5f7571ec9bea extends Template
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
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "url", [], "any", false, false, false, 1) == "/search-result")) {
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 2
($context["this"] ?? null), "page", [], "any", false, false, false, 2), "url", [], "any", false, false, false, 2) == "/tours/t/:cat_slug/:tour_slug")) {
            // line 3
            echo "

<div class=\"lang\">
  ";
            // line 6
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 6) == "ru")) {
                // line 7
                echo "  <div class=\"lang__item active\"><a href=\"/ru/tours/t/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 7), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "slug", [], "any", false, false, false, 7), "html", null, true);
                echo "\"> <span>Ru</span></a></div>
    <div class=\"lang__item\"><a href=\"/en/tours/t/";
                // line 8
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 8), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "slug", [], "any", false, false, false, 8), "html", null, true);
                echo "\"> <span>En </span></a></div>
  ";
            } else {
                // line 10
                echo "  <div class=\"lang__item\"><a href=\"/ru/tours/t/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 10), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "slug", [], "any", false, false, false, 10), "html", null, true);
                echo "\"> <span>Ru</span></a></div>
    <div class=\"lang__item active\"><a href=\"/en/tours/t/";
                // line 11
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 11), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "slug", [], "any", false, false, false, 11), "html", null, true);
                echo "\"> <span>En </span></a></div>
  ";
            }
            // line 13
            echo "</div>


";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 16
($context["this"] ?? null), "page", [], "any", false, false, false, 16), "url", [], "any", false, false, false, 16) == "/tours/c/:cat_slug")) {
            // line 17
            echo "

<div class=\"lang\">
  ";
            // line 20
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 20) == "ru")) {
                // line 21
                echo "  <div class=\"lang__item active\"><a href=\"/ru/tours/c/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 21), "html", null, true);
                echo "\"> <span>Ru </span></a></div>
  <div class=\"lang__item\"><a href=\"/en/tours/c/";
                // line 22
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 22), "html", null, true);
                echo "\"> <span>En </span></a></div>
  ";
            } else {
                // line 24
                echo "    <div class=\"lang__item\"><a href=\"/ru/tours/c/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 24), "html", null, true);
                echo "\"> <span>Ru </span></a></div>
  <div class=\"lang__item active\"><a href=\"/en/tours/c/";
                // line 25
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 25), "html", null, true);
                echo "\"> <span>En </span></a></div>
  ";
            }
            // line 27
            echo "</div>

";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 29
($context["this"] ?? null), "page", [], "any", false, false, false, 29), "url", [], "any", false, false, false, 29) == "/post/:slug")) {
            // line 30
            echo "

<div class=\"lang\">
  ";
            // line 33
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 33) == "ru")) {
                // line 34
                echo "  <div class=\"lang__item active\"><a href=\"/ru/post/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 34), "html", null, true);
                echo "\"> <span>Ru </span></a></div>
  <div class=\"lang__item\"><a href=\"/en/post/";
                // line 35
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 35), "html", null, true);
                echo "\"> <span>En </span></a></div>
  ";
            } else {
                // line 37
                echo "  <div class=\"lang__item\"><a href=\"/ru/post/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 37), "html", null, true);
                echo "\"> <span>Ru </span></a></div>
  <div class=\"lang__item active\"><a href=\"/en/post/";
                // line 38
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 38), "html", null, true);
                echo "\"> <span>En </span></a></div>
  ";
            }
            // line 40
            echo "</div>

";
        } else {
            // line 43
            echo "

<div class=\"lang\">
  ";
            // line 46
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 46) == "ru")) {
                // line 47
                echo "  <div class=\"lang__item active\"><a href=\"/ru";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 47), "url", [], "any", false, false, false, 47), "html", null, true);
                echo "\"> <span>Ru </span></a></div>
    <div class=\"lang__item\"><a href=\"/en";
                // line 48
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 48), "url", [], "any", false, false, false, 48), "html", null, true);
                echo "\"> <span>En </span></a></div>
  ";
            } else {
                // line 50
                echo "  <div class=\"lang__item\"><a href=\"/ru";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "url", [], "any", false, false, false, 50), "html", null, true);
                echo "\"> <span>Ru </span></a></div>
    <div class=\"lang__item active\"><a href=\"/en";
                // line 51
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 51), "url", [], "any", false, false, false, 51), "html", null, true);
                echo "\"> <span>En </span></a></div>
  ";
            }
            // line 53
            echo "</div>


";
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/lang.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 53,  170 => 51,  165 => 50,  160 => 48,  155 => 47,  153 => 46,  148 => 43,  143 => 40,  138 => 38,  133 => 37,  128 => 35,  123 => 34,  121 => 33,  116 => 30,  114 => 29,  110 => 27,  105 => 25,  100 => 24,  95 => 22,  90 => 21,  88 => 20,  83 => 17,  81 => 16,  76 => 13,  69 => 11,  62 => 10,  55 => 8,  48 => 7,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.page.url == '/search-result' %}
{% elseif this.page.url == '/tours/t/:cat_slug/:tour_slug' %}


<div class=\"lang\">
  {%if this.locale == 'ru' %}
  <div class=\"lang__item active\"><a href=\"/ru/tours/t/{{category.slug}}/{{tour.slug}}\"> <span>Ru</span></a></div>
    <div class=\"lang__item\"><a href=\"/en/tours/t/{{category.slug}}/{{tour.slug}}\"> <span>En </span></a></div>
  {% else %}
  <div class=\"lang__item\"><a href=\"/ru/tours/t/{{category.slug}}/{{tour.slug}}\"> <span>Ru</span></a></div>
    <div class=\"lang__item active\"><a href=\"/en/tours/t/{{category.slug}}/{{tour.slug}}\"> <span>En </span></a></div>
  {% endif %}
</div>


{% elseif this.page.url == '/tours/c/:cat_slug' %}


<div class=\"lang\">
  {%if this.locale == 'ru' %}
  <div class=\"lang__item active\"><a href=\"/ru/tours/c/{{category.slug}}\"> <span>Ru </span></a></div>
  <div class=\"lang__item\"><a href=\"/en/tours/c/{{category.slug}}\"> <span>En </span></a></div>
  {% else %}
    <div class=\"lang__item\"><a href=\"/ru/tours/c/{{category.slug}}\"> <span>Ru </span></a></div>
  <div class=\"lang__item active\"><a href=\"/en/tours/c/{{category.slug}}\"> <span>En </span></a></div>
  {% endif %}
</div>

{% elseif this.page.url == '/post/:slug' %}


<div class=\"lang\">
  {%if this.locale == 'ru' %}
  <div class=\"lang__item active\"><a href=\"/ru/post/{{post.slug}}\"> <span>Ru </span></a></div>
  <div class=\"lang__item\"><a href=\"/en/post/{{post.slug}}\"> <span>En </span></a></div>
  {% else %}
  <div class=\"lang__item\"><a href=\"/ru/post/{{post.slug}}\"> <span>Ru </span></a></div>
  <div class=\"lang__item active\"><a href=\"/en/post/{{post.slug}}\"> <span>En </span></a></div>
  {% endif %}
</div>

{% else %}


<div class=\"lang\">
  {%if this.locale == 'ru' %}
  <div class=\"lang__item active\"><a href=\"/ru{{ this.page.url }}\"> <span>Ru </span></a></div>
    <div class=\"lang__item\"><a href=\"/en{{ this.page.url }}\"> <span>En </span></a></div>
  {% else %}
  <div class=\"lang__item\"><a href=\"/ru{{ this.page.url }}\"> <span>Ru </span></a></div>
    <div class=\"lang__item active\"><a href=\"/en{{ this.page.url }}\"> <span>En </span></a></div>
  {% endif %}
</div>


{% endif %}", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/lang.htm", "");
    }
}
