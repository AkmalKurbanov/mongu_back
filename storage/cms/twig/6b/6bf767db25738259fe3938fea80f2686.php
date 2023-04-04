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

/* C:\work\OSPanel\domains\mongu\plugins/cbt/tours/components/tourscomponent/page_tour.htm */
class __TwigTemplate_166753c0c184b6ac7ac3fc41b82d9807 extends Template
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
            <li><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours/index");
        echo "\">";
        echo $this->env->getFilter('_')->getCallable()("Туры");
        echo "</a></li>
            <li><a href=\"/";
        // line 6
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 6), "html", null, true);
        echo "/tours/c/";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 6), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</a></li>
            <li>";
        // line 7
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"detail\">
    <div class=\"container\">
        <div class=\"gallery-container\">
            <div class=\"swiper-container gallery-main\">
                <div class=\"swiper-wrapper\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "gallery", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 17
            echo "                    <div class=\"swiper-slide\"
                        style=\"background-image:url('";
            // line 18
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 18), 1250, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "')\">
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </div>
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
            </div>
            <div class=\"swiper-container gallery-thumbs\">
                <div class=\"swiper-wrapper\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "gallery", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 28
            echo "                    <div class=\"swiper-slide\"
                        style=\"background-image:url('";
            // line 29
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 29), 250, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "')\">
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </div>
            </div>
        </div>
        <div class=\"title-wrap\">
            <h2 class=\"title\">";
        // line 36
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "title", [], "any", false, false, false, 36), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"desc-text\">
            <div class=\"desc-text__wrap\">
                <div class=\"desc-text__col\">
                    ";
        // line 41
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "desc", [], "any", false, false, false, 41);
        echo "
                    <div class=\"accordion\">
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "detail_desc", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["acc"]) {
            // line 44
            echo "                        <div class=\"accordion__item\">
                            <div class=\"accordion__title\">
                                ";
            // line 46
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["acc"], "acc_title", [], "any", false, false, false, 46), "html", null, true);
            echo "<i class=\"icon-right\"></i>
                            </div>
                            <div class=\"accordion__desc-wrap\">
                                <div class=\"accordion__desc\">
                                    <p>";
            // line 50
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["acc"], "acc_desc", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"accordion__desc-img\">
                                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["acc"], "acc_gallery", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["galleryDay"]) {
                // line 54
                echo "
                                    <a href=\"";
                // line 55
                echo $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["galleryDay"], "img", [], "any", false, false, false, 55)), 1300, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
                                        data-fancybox=\"\">
                                        <img src=\"";
                // line 57
                echo $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["galleryDay"], "img", [], "any", false, false, false, 57)), 300, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
                                            alt=\"\" />
                                    </a>

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryDay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </div>
                </div>
                <div class=\"desc-text__col\">
                    <div class=\"detail__desc\">
                        <div class=\"detail__desc-wrap\">
                            <div class=\"detail__title\">";
        // line 71
        echo $this->env->getFilter('_')->getCallable()("Краткое описание");
        echo "</div>
                            <ul>
                                <li>
                                    <span>";
        // line 74
        echo $this->env->getFilter('_')->getCallable()("Продолжительность");
        echo ":</span> ";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "duration", [], "any", false, false, false, 74), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <span>";
        // line 77
        echo $this->env->getFilter('_')->getCallable()("Уровень сложности");
        echo ":</span> ";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "difficulty", [], "any", false, false, false, 77), "html", null, true);
        echo "
                                </li>
                                <li><span>";
        // line 79
        echo $this->env->getFilter('_')->getCallable()("Лучший сезон");
        echo ":</span> ";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "season", [], "any", false, false, false, 79), "html", null, true);
        echo "</li>
                                <li>
                                    <span>";
        // line 81
        echo $this->env->getFilter('_')->getCallable()("Достопримечательности");
        echo ":</span> ";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "attraction", [], "any", false, false, false, 81), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <span>";
        // line 84
        echo $this->env->getFilter('_')->getCallable()("Требования");
        echo ":</span> ";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "requirement", [], "any", false, false, false, 84), "html", null, true);
        echo "
                                </li>
                            </ul>
                        </div>
                        ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\plugins/cbt/tours/components/tourscomponent/page_tour.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 89,  238 => 88,  229 => 84,  221 => 81,  214 => 79,  207 => 77,  199 => 74,  193 => 71,  186 => 66,  177 => 62,  166 => 57,  161 => 55,  158 => 54,  154 => 53,  148 => 50,  141 => 46,  137 => 44,  133 => 43,  128 => 41,  120 => 36,  114 => 32,  105 => 29,  102 => 28,  98 => 27,  90 => 21,  81 => 18,  78 => 17,  74 => 16,  62 => 7,  54 => 6,  48 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">{{ 'Главная'|_ }}</a></li>
            <li><a href=\"{{'tours/index'|page}}\">{{ 'Туры'|_ }}</a></li>
            <li><a href=\"/{{this.locale}}/tours/c/{{category.slug}}\">{{category.title}}</a></li>
            <li>{{tour.title}}</li>
        </ul>
    </div>
</div>
<div class=\"detail\">
    <div class=\"container\">
        <div class=\"gallery-container\">
            <div class=\"swiper-container gallery-main\">
                <div class=\"swiper-wrapper\">
                    {% for image in tour.gallery %}
                    <div class=\"swiper-slide\"
                        style=\"background-image:url('{{ image.path | resize(1250, auto, { mode: 'crop', quality: '80', extension: 'webp' }) }}')\">
                    </div>
                    {% endfor %}
                </div>
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
            </div>
            <div class=\"swiper-container gallery-thumbs\">
                <div class=\"swiper-wrapper\">
                    {% for image in tour.gallery %}
                    <div class=\"swiper-slide\"
                        style=\"background-image:url('{{ image.path | resize(250, auto, { mode: 'crop', quality: '80', extension: 'webp' }) }}')\">
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"title-wrap\">
            <h2 class=\"title\">{{tour.title}}</h2>
        </div>
        <div class=\"desc-text\">
            <div class=\"desc-text__wrap\">
                <div class=\"desc-text__col\">
                    {{tour.desc|raw}}
                    <div class=\"accordion\">
                        {% for acc in tour.detail_desc %}
                        <div class=\"accordion__item\">
                            <div class=\"accordion__title\">
                                {{acc.acc_title}}<i class=\"icon-right\"></i>
                            </div>
                            <div class=\"accordion__desc-wrap\">
                                <div class=\"accordion__desc\">
                                    <p>{{acc.acc_desc}}</p>
                                </div>
                                <div class=\"accordion__desc-img\">
                                    {% for galleryDay in acc.acc_gallery %}

                                    <a href=\"{{galleryDay.img | media | resize(1300, auto, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                                        data-fancybox=\"\">
                                        <img src=\"{{galleryDay.img | media | resize(300, auto, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                                            alt=\"\" />
                                    </a>

                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"desc-text__col\">
                    <div class=\"detail__desc\">
                        <div class=\"detail__desc-wrap\">
                            <div class=\"detail__title\">{{ 'Краткое описание'|_ }}</div>
                            <ul>
                                <li>
                                    <span>{{ 'Продолжительность'|_ }}:</span> {{tour.duration}}
                                </li>
                                <li>
                                    <span>{{ 'Уровень сложности'|_ }}:</span> {{tour.difficulty}}
                                </li>
                                <li><span>{{ 'Лучший сезон'|_ }}:</span> {{tour.season}}</li>
                                <li>
                                    <span>{{ 'Достопримечательности'|_ }}:</span> {{tour.attraction}}
                                </li>
                                <li>
                                    <span>{{ 'Требования'|_ }}:</span> {{tour.requirement}}
                                </li>
                            </ul>
                        </div>
                        {% partial 'form' %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "C:\\work\\OSPanel\\domains\\mongu\\plugins/cbt/tours/components/tourscomponent/page_tour.htm", "");
    }
}
