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

/* C:\work\OSPanel\domains\mongu\plugins/cbt/tours/components/tourscomponent/page_category.htm */
class __TwigTemplate_cd6b0d8028f6bcf538e00e0d4888c129 extends Template
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
        echo "<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo $this->env->getFilter('_')->getCallable()("Главная");
        echo "</a></li>
            <li>
                <a href=\"/";
        // line 6
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 6), "html", null, true);
        echo "/tours\">";
        echo $this->env->getFilter('_')->getCallable()("Туры");
        echo "</a>
            </li>
            <li>";
        // line 8
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"tours\">
    <div class=\"container\">

        <div class=\"title-wrap\">
            <h2 class=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h2>
        </div>

        <div class=\"tours__category\">
            <div class=\"swiper-container tours-js\">
                <div class=\"swiper-wrapper\">

                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "
                    ";
            // line 25
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 25) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 25))) {
                // line 26
                echo "                    ";
            } else {
                // line 27
                echo "
                    <div class=\"swiper-slide\">
                        <a class=\"tours__category-item\" href=\"/";
                // line 29
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 29), "html", null, true);
                echo "/tours/c/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
                            <div class=\"tours__category-icon\">
                                <img src=\"";
                // line 31
                echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "iconDark", [], "any", false, false, false, 31), "path", [], "any", false, false, false, 31), 300, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
                                    alt=\"\">
                            </div>
                            <div class=\"tours__category-name\">";
                // line 34
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 34), "html", null, true);
                echo "</div>
                        </a>
                    </div>
                    ";
            }
            // line 38
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>
            </div>
        </div>

        <div class=\"tours__wrap\">

            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "            ";
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_active", [], "any", false, false, false, 46) == 1)) {
                // line 47
                echo "            <div class=\"tours__item\">
                <a class=\"tours__item-img\" href=\"/";
                // line 48
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 48), "html", null, true);
                echo "/tours/t/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 48), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 48), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 49
                echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 49), "path", [], "any", false, false, false, 49), 540, 300, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
                        alt=\"\">
                </a>
                <div class=\"tours__item-info\"><a class=\"tours__item-name\"
                        href=\"/";
                // line 53
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 53), "html", null, true);
                echo "/tours/t/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 53), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 53), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 53), "html", null, true);
                echo "</a>
                    <div class=\"tours__item-desc\">";
                // line 54
                echo $this->env->getFunction('str_limit')->getCallable()("limit", Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "desc", [], "any", false, false, false, 54), 120);
                echo "</div>
                </div>
            </div>
            ";
            } else {
                // line 58
                echo "
            ";
            }
            // line 60
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\plugins/cbt/tours/components/tourscomponent/page_category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 61,  173 => 60,  169 => 58,  162 => 54,  152 => 53,  145 => 49,  137 => 48,  134 => 47,  131 => 46,  127 => 45,  119 => 39,  113 => 38,  106 => 34,  100 => 31,  93 => 29,  89 => 27,  86 => 26,  84 => 25,  81 => 24,  77 => 23,  67 => 16,  56 => 8,  49 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">{{'Главная'|_}}</a></li>
            <li>
                <a href=\"/{{this.locale}}/tours\">{{'Туры'|_}}</a>
            </li>
            <li>{{category.title}}</li>
        </ul>
    </div>
</div>
<div class=\"tours\">
    <div class=\"container\">

        <div class=\"title-wrap\">
            <h2 class=\"title\">{{category.title}}</h2>
        </div>

        <div class=\"tours__category\">
            <div class=\"swiper-container tours-js\">
                <div class=\"swiper-wrapper\">

                    {% for item in categories %}

                    {% if item.slug == category.slug %}
                    {% else %}

                    <div class=\"swiper-slide\">
                        <a class=\"tours__category-item\" href=\"/{{this.locale}}/tours/c/{{item.slug}}\">
                            <div class=\"tours__category-icon\">
                                <img src=\"{{item.iconDark.path | resize(300, false, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                                    alt=\"\">
                            </div>
                            <div class=\"tours__category-name\">{{item.title}}</div>
                        </a>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>

        <div class=\"tours__wrap\">

            {% for item in tours %}
            {%if item.is_active == 1%}
            <div class=\"tours__item\">
                <a class=\"tours__item-img\" href=\"/{{this.locale}}/tours/t/{{ category.slug}}/{{item.slug}}\">
                    <img src=\"{{ item.preview.path | resize(540, 300, { mode: 'crop', quality: '80', extension: 'webp' }) }}\"
                        alt=\"\">
                </a>
                <div class=\"tours__item-info\"><a class=\"tours__item-name\"
                        href=\"/{{this.locale}}/tours/t/{{ category.slug}}/{{item.slug}}\">{{item.title}}</a>
                    <div class=\"tours__item-desc\">{{ str_limit(item.desc , 120) | raw }}</div>
                </div>
            </div>
            {% else %}

            {% endif %}
            {% endfor %}
        </div>

    </div>
</div>
", "C:\\work\\OSPanel\\domains\\mongu\\plugins/cbt/tours/components/tourscomponent/page_category.htm", "");
    }
}
