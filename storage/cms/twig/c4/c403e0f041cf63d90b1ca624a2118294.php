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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/pages/tours/index.htm */
class __TwigTemplate_045b5c638942c6dbf12e6b08521f0e7e extends Template
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
            <li>";
        // line 5
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"kind\" style=\"padding: 30px 0;\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap\">
            <h2 class=\"title\">";
        // line 12
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"nav\">
            <div class=\"swiper-button-prev nav-btn\"> </div>
            <div class=\"swiper-button-next nav-btn\"> </div>
        </div>
        <div class=\"swiper-container kind-slider\">
            <div class=\"swiper-wrapper\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                <div class=\"swiper-slide\"><a class=\"kind__item shine-ef\" href=\"/";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 21), "html", null, true);
            echo "/tours/c/";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                        <div class=\"kind__img\">
                            <img src=\"";
            // line 23
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 23), "path", [], "any", false, false, false, 23), 300, 450, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"
                                alt=\"\">
                        </div>
                        <div class=\"kind__item-desc\">
                            <div class=\"kind__icon\">
                                <img src=\"";
            // line 28
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 28), "path", [], "any", false, false, false, 28), 300, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"
                                    alt=\"\"></div>
                            <div class=\"kind__name\">";
            // line 30
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/pages/tours/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  94 => 30,  89 => 28,  81 => 23,  73 => 21,  69 => 20,  58 => 12,  48 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">{{'Главная'|_}}</a></li>
            <li>{{this.page.title}}</li>
        </ul>
    </div>
</div>
<div class=\"kind\" style=\"padding: 30px 0;\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap\">
            <h2 class=\"title\">{{this.page.title}}</h2>
        </div>
        <div class=\"nav\">
            <div class=\"swiper-button-prev nav-btn\"> </div>
            <div class=\"swiper-button-next nav-btn\"> </div>
        </div>
        <div class=\"swiper-container kind-slider\">
            <div class=\"swiper-wrapper\">
                {% for item in categories %}
                <div class=\"swiper-slide\"><a class=\"kind__item shine-ef\" href=\"/{{this.locale}}/tours/c/{{item.slug}}\">
                        <div class=\"kind__img\">
                            <img src=\"{{item.img.path | resize(300, 450, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                                alt=\"\">
                        </div>
                        <div class=\"kind__item-desc\">
                            <div class=\"kind__icon\">
                                <img src=\"{{item.icon.path | resize(300, false, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                                    alt=\"\"></div>
                            <div class=\"kind__name\">{{item.title}}</div>
                        </div>
                    </a>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/pages/tours/index.htm", "");
    }
}
