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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/site/hero.htm */
class __TwigTemplate_62b621a549392486573eb9388dd15d43 extends Template
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
        echo "<div class=\"hero\">
    <div class=\"hero-mobile-bg\">
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/hero-mobile-bg.webp");
        echo "\"
            alt=\"\">

    </div>
    <header class=\"header header--transparent\">
        <div class=\"container\">
            <div class=\"header__wrap\">
                <div class=\"logo\">
                    <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                        <img src=\"";
        // line 12
        echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "logoHeaderMain", [], "any", false, false, false, 12), "path", [], "any", false, false, false, 12), 125, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
        echo "\">
                    </a>
                </div>
                <div class=\" header__left-col\">

                    <div class=\"nav\">
                        ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/menu-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "                        <div class=\"social\">
                            <ul>
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "social", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "                                <li>
                                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo "\" target=\"_blank\">
                                        <i class=\"";
            // line 24
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 24), "html", null, true);
            echo "\"></i>
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"social social--white\">
                        <ul>
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 33), "social", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                            <li>
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 35), "html", null, true);
            echo "\" target=\"_blank\">
                                    <i class=\"";
            // line 36
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 36), "html", null, true);
            echo "\"></i>
                                </a>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </ul>
                    </div>
                    <div class=\"search search-js\">
                        <div class=\"search__icon\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\">
                                <path
                                    d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\"
                                    fill=\"#fff\"></path>
                                <clippath id=\"clip0_77_1126\">
                                    <rect width=\"24\" height=\"24\"></rect>
                                </clippath>
                            </svg>
                        </div>
                    </div>


                    ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/lang"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "
                    ";
        // line 74
        echo "                    <div class=\"hamburger\"> <span></span></div>
                </div>
            </div>
        </div>
    </header>

    ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("search-form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "

    <div class=\"swiper-container hero-js\">
        <div class=\"swiper-wrapper\">

            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 86), "heroSlider", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "            <div class=\"swiper-slide\">
                <div class=\"hero__item\"
                    style=\"background-image: url('";
            // line 89
            echo $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "heroSlide", [], "any", false, false, false, 89)), 1920, 1000, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "')\">
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </div>
    </div>
    <div class=\"container\">
        <div class=\"hero__title\">";
        // line 96
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 96), "mainTitle", [], "any", false, false, false, 96);
        echo "</div>

        <div class=\"booking\">
            <h2 class=\"booking__title\">";
        // line 99
        echo $this->env->getFilter('_')->getCallable()("Бронирование");
        echo "</h2>
            <div class=\"booking__wrap\">
                <div class=\"booking__col\">



                    <div class=\"booking__item-wrap\">
                        <div class=\"booking__item booking__item--date\">
                            <div class=\"booking__item-icon\"> <i class=\"icon-colendar\"></i></div>
                            <div>
                                <div class=\"booking__item-title\">";
        // line 109
        echo $this->env->getFilter('_')->getCallable()("Дата");
        echo " </div>
                                <div class=\"booking__date-wrap\">
                                    <span>
                                        <input id=\"start-date\" type=\"text\" autocomplete=\"off\" name=\"from\">
                                    </span>
                                    /
                                    <span>
                                        <input id=\"end-date\" type=\"text\" autocomplete=\"off\" name=\"to\" disabled>
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class=\"booking__item\">
                            <div class=\"booking__item-icon\"> <i class=\"icon-user\"></i></div>
                            <div>
                                <div class=\"booking__item-title\">";
        // line 125
        echo $this->env->getFilter('_')->getCallable()("Гости");
        echo " </div>
                                <div class=\"person-count\">
                                    <input type=\"number\" value=\"2\" min=\"1\"><span>";
        // line 127
        echo $this->env->getFilter('_')->getCallable()("персоны");
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <button class=\"btn booking-js\" disabled>";
        // line 131
        echo $this->env->getFilter('_')->getCallable()("Бронировать");
        echo "</button>
                    </div>




                </div>
                <div class=\"booking__col\">
                    <div class=\"booking__subtitle\">";
        // line 139
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 139), "subTitle", [], "any", false, false, false, 139);
        echo "</div>
                </div>
            </div>
        </div>

        ";
        // line 144
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("recomend-tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 145
        echo "

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 145,  259 => 144,  251 => 139,  240 => 131,  233 => 127,  228 => 125,  209 => 109,  196 => 99,  190 => 96,  185 => 93,  175 => 89,  171 => 87,  167 => 86,  160 => 81,  156 => 80,  148 => 74,  145 => 58,  141 => 57,  122 => 40,  112 => 36,  108 => 35,  105 => 34,  101 => 33,  94 => 28,  84 => 24,  80 => 23,  77 => 22,  73 => 21,  69 => 19,  65 => 18,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero\">
    <div class=\"hero-mobile-bg\">
        <img src=\"{{ 'assets/images/hero-mobile-bg.webp'|theme }}\"
            alt=\"\">

    </div>
    <header class=\"header header--transparent\">
        <div class=\"container\">
            <div class=\"header__wrap\">
                <div class=\"logo\">
                    <a href=\"{{ 'home'|page }}\">
                        <img src=\"{{ this.theme.logoHeaderMain.path | resize(125, auto, { mode: 'crop', quality: '80', extension: 'webp'}) }}\">
                    </a>
                </div>
                <div class=\" header__left-col\">

                    <div class=\"nav\">
                        {% partial  'site/menu-header' %}
                        <div class=\"social\">
                            <ul>
                                {% for item in this.theme.social %}
                                <li>
                                    <a href=\"{{item.url}}\" target=\"_blank\">
                                        <i class=\"{{item.awesome_icon}}\"></i>
                                    </a>
                                </li>
                                {%endfor%}
                            </ul>
                        </div>
                    </div>
                    <div class=\"social social--white\">
                        <ul>
                            {% for item in this.theme.social %}
                            <li>
                                <a href=\"{{item.url}}\" target=\"_blank\">
                                    <i class=\"{{item.awesome_icon}}\"></i>
                                </a>
                            </li>
                            {%endfor%}
                        </ul>
                    </div>
                    <div class=\"search search-js\">
                        <div class=\"search__icon\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\">
                                <path
                                    d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\"
                                    fill=\"#fff\"></path>
                                <clippath id=\"clip0_77_1126\">
                                    <rect width=\"24\" height=\"24\"></rect>
                                </clippath>
                            </svg>
                        </div>
                    </div>


                    {% partial  'site/lang' %}

                    {# <div class=\"lang main-page-lang\">


                        <div class=\"lang\">
                            <div class=\"lang__selected\" data-lang=\"{{this.site.locale}}\">{{this.site.locale}}</div>
                            <div class=\"lang__dropdown\">
                                <div class=\"lang__item\"><a href=\"/ru{{ this.page.url }}\" data-lang=\"ru\">ru</a>
                                </div>
                                <div class=\"lang__item\"><a href=\"/en{{ this.page.url }}\" data-lang=\"en\">en</a>
                                </div>
                            </div>
                        </div>


                    </div> #}
                    <div class=\"hamburger\"> <span></span></div>
                </div>
            </div>
        </div>
    </header>

    {% partial 'search-form' %}


    <div class=\"swiper-container hero-js\">
        <div class=\"swiper-wrapper\">

            {% for item in this.theme.heroSlider %}
            <div class=\"swiper-slide\">
                <div class=\"hero__item\"
                    style=\"background-image: url('{{item.heroSlide | media | resize(1920, 1000, { mode: 'crop', quality: '80', extension: 'webp' })}}')\">
                </div>
            </div>
            {%endfor%}
        </div>
    </div>
    <div class=\"container\">
        <div class=\"hero__title\">{{this.theme.mainTitle | raw}}</div>

        <div class=\"booking\">
            <h2 class=\"booking__title\">{{'Бронирование'|_}}</h2>
            <div class=\"booking__wrap\">
                <div class=\"booking__col\">



                    <div class=\"booking__item-wrap\">
                        <div class=\"booking__item booking__item--date\">
                            <div class=\"booking__item-icon\"> <i class=\"icon-colendar\"></i></div>
                            <div>
                                <div class=\"booking__item-title\">{{'Дата'|_}} </div>
                                <div class=\"booking__date-wrap\">
                                    <span>
                                        <input id=\"start-date\" type=\"text\" autocomplete=\"off\" name=\"from\">
                                    </span>
                                    /
                                    <span>
                                        <input id=\"end-date\" type=\"text\" autocomplete=\"off\" name=\"to\" disabled>
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class=\"booking__item\">
                            <div class=\"booking__item-icon\"> <i class=\"icon-user\"></i></div>
                            <div>
                                <div class=\"booking__item-title\">{{'Гости'|_}} </div>
                                <div class=\"person-count\">
                                    <input type=\"number\" value=\"2\" min=\"1\"><span>{{'персоны'|_}}</span>
                                </div>
                            </div>
                        </div>
                        <button class=\"btn booking-js\" disabled>{{'Бронировать'|_}}</button>
                    </div>




                </div>
                <div class=\"booking__col\">
                    <div class=\"booking__subtitle\">{{this.theme.subTitle | raw}}</div>
                </div>
            </div>
        </div>

        {% partial 'recomend-tours' %}


    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/hero.htm", "");
    }
}
