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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/pages/rent.htm */
class __TwigTemplate_957784e4541194b919e19d19a63c7945 extends Template
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
        echo "<div class=\"img-group img-group--right\">
    <div class=\"container\">
        <div class=\"img-group__wrap\">
            <div class=\"img-group__col\">
                <div class=\"img-group__images\">


                    <div class=\"img-group__item\">
                        ";
        // line 9
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "rent/text-section-img1.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "                    </div>

                    <div class=\"img-group__item\">
                        ";
        // line 13
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "rent/text-section-img2.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "                    </div>

                    <div class=\"img-group__item\">
                        ";
        // line 17
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "rent/text-section-img3.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "                    </div>


                </div>
            </div>
            <div class=\"img-group__col\">
                <div class=\"title-wrap\">
                    <h2 class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 27
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "rent/text-section-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = "text-fz27"        ;
        $context['__cms_component_params']['tools'] = "line-break"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
<div class=\"rent gr-bg\">
    <div class=\"container\">
        <div class=\"title-wrap\">
            <h2 class=\"title\">";
        // line 35
        echo $this->env->getFilter('_')->getCallable()("ТОВАРЫ В ПРОКАТ");
        echo "</h2>


            ";
        // line 38
        $context["records"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["priceList"] ?? null), "records", [], "any", false, false, false, 38);
        // line 39
        echo "            ";
        $context["displayColumn"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["priceList"] ?? null), "displayColumn", [], "any", false, false, false, 39);
        // line 40
        echo "            ";
        $context["noRecordsMessage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["priceList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 40);
        // line 41
        echo "            ";
        $context["detailsPage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["priceList"] ?? null), "detailsPage", [], "any", false, false, false, 41);
        // line 42
        echo "            ";
        $context["detailsKeyColumn"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["priceList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 42);
        // line 43
        echo "            ";
        $context["detailsUrlParameter"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["priceList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 43);
        // line 44
        echo "

            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 47
            echo "            <a class=\"price\" data-fancybox data-type=\"iframe\" data-src=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "price_list", [], "any", false, false, false, 47), "path", [], "any", false, false, false, 47), "html", null, true);
            echo "\" href=\"javascript:;\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"16\" viewBox=\"0 0 18 16\" fill=\"none\">
                    <path
                        d=\"M3.384 2.066C3.384 2.534 3.216 2.936 2.88 3.272C2.556 3.596 2.16 3.758 1.692 3.758C1.224 3.758 0.822 3.596 0.486 3.272C0.162 2.936 0 2.534 0 2.066C0 1.598 0.162 1.202 0.486 0.877999C0.822 0.553999 1.224 0.391999 1.692 0.391999C2.16 0.391999 2.556 0.559999 2.88 0.895999C3.216 1.22 3.384 1.61 3.384 2.066ZM1.692 6.008C1.224 6.008 0.822 6.176 0.486 6.512C0.162 6.836 0 7.232 0 7.7C0 8.168 0.162 8.57 0.486 8.906C0.822 9.23 1.224 9.392 1.692 9.392C2.16 9.392 2.556 9.23 2.88 8.906C3.216 8.57 3.384 8.168 3.384 7.7C3.384 7.232 3.216 6.836 2.88 6.512C2.556 6.176 2.16 6.008 1.692 6.008ZM1.692 11.642C1.224 11.642 0.822 11.81 0.486 12.146C0.162 12.47 0 12.86 0 13.316C0 13.772 0.162 14.168 0.486 14.504C0.822 14.84 1.224 15.008 1.692 15.008C2.16 15.008 2.556 14.84 2.88 14.504C3.216 14.18 3.384 13.784 3.384 13.316C3.384 12.848 3.216 12.452 2.88 12.128C2.556 11.804 2.16 11.642 1.692 11.642ZM18 2.642V1.508C18 1.388 17.958 1.292 17.874 1.22C17.802 1.136 17.706 1.094 17.586 1.094H4.914C4.806 1.094 4.71 1.136 4.626 1.22C4.542 1.292 4.5 1.388 4.5 1.508V2.642C4.5 2.762 4.542 2.864 4.626 2.948C4.71 3.02 4.806 3.056 4.914 3.056H17.586C17.706 3.056 17.802 3.02 17.874 2.948C17.958 2.864 18 2.762 18 2.642ZM18 8.258V7.142C18 7.022 17.958 6.92 17.874 6.836C17.802 6.752 17.706 6.71 17.586 6.71H4.914C4.806 6.71 4.71 6.752 4.626 6.836C4.542 6.92 4.5 7.022 4.5 7.142V8.258C4.5 8.378 4.542 8.48 4.626 8.564C4.71 8.648 4.806 8.69 4.914 8.69H17.586C17.706 8.69 17.802 8.648 17.874 8.564C17.958 8.48 18 8.378 18 8.258ZM18 13.892V12.758C18 12.638 17.958 12.542 17.874 12.47C17.802 12.386 17.706 12.344 17.586 12.344H4.914C4.806 12.344 4.71 12.386 4.626 12.47C4.542 12.542 4.5 12.638 4.5 12.758V13.892C4.5 14.012 4.542 14.108 4.626 14.18C4.71 14.264 4.806 14.306 4.914 14.306H17.586C17.706 14.306 17.802 14.264 17.874 14.18C17.958 14.108 18 14.012 18 13.892Z\"
                        fill=\"black\"></path>
                </svg>";
            // line 52
            echo $this->env->getFilter('_')->getCallable()("Посмотреть прайс");
            echo "
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
        <div class=\"icon-list\">

            ";
        // line 58
        $context["records"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["rent"] ?? null), "records", [], "any", false, false, false, 58);
        // line 59
        echo "            ";
        $context["displayColumn"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["rent"] ?? null), "displayColumn", [], "any", false, false, false, 59);
        // line 60
        echo "            ";
        $context["noRecordsMessage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["rent"] ?? null), "noRecordsMessage", [], "any", false, false, false, 60);
        // line 61
        echo "            ";
        $context["detailsPage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["rent"] ?? null), "detailsPage", [], "any", false, false, false, 61);
        // line 62
        echo "            ";
        $context["detailsKeyColumn"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["rent"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 62);
        // line 63
        echo "            ";
        $context["detailsUrlParameter"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["rent"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 63);
        // line 64
        echo "


            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 68
            echo "            <div class=\"icon-list__item\">
                <div class=\"icon-list__icon\"><img
                        src=\"";
            // line 70
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "icon", [], "any", false, false, false, 70), "path", [], "any", false, false, false, 70), 58, 58, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"
                        alt=\"\"></div>
                <div class=\"icon-list__name\">";
            // line 72
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 72), "html", null, true);
            echo "</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
        </div>
        <p class=\"text-fz20\"> ";
        // line 77
        echo $this->env->getFilter('_')->getCallable()("А также имеются в продаже карты");
        echo "</p><a class=\"btn\"
            href=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("form-rent");
        echo "\">";
        echo $this->env->getFilter('_')->getCallable()("Арендовать");
        echo "</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/pages/rent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 78,  214 => 77,  210 => 75,  201 => 72,  196 => 70,  192 => 68,  188 => 67,  183 => 64,  180 => 63,  177 => 62,  174 => 61,  171 => 60,  168 => 59,  166 => 58,  161 => 55,  152 => 52,  143 => 47,  139 => 46,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  118 => 38,  112 => 35,  103 => 28,  95 => 27,  90 => 25,  81 => 18,  73 => 17,  68 => 14,  60 => 13,  55 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"img-group img-group--right\">
    <div class=\"container\">
        <div class=\"img-group__wrap\">
            <div class=\"img-group__col\">
                <div class=\"img-group__images\">


                    <div class=\"img-group__item\">
                        {% component 'contenteditor' file=\"rent/text-section-img1.htm\"  class=\"\" fixture=\"\" tools=\"image,remove\" %}
                    </div>

                    <div class=\"img-group__item\">
                        {% component 'contenteditor' file=\"rent/text-section-img2.htm\"  class=\"\" fixture=\"\" tools=\"image,remove\" %}
                    </div>

                    <div class=\"img-group__item\">
                        {% component 'contenteditor' file=\"rent/text-section-img3.htm\"  class=\"\" fixture=\"\" tools=\"image,remove\" %}
                    </div>


                </div>
            </div>
            <div class=\"img-group__col\">
                <div class=\"title-wrap\">
                    <h2 class=\"title\">{{this.page.title}}</h2>
                </div>
                {% component 'contenteditor' file=\"rent/text-section-text.htm\" fixture=\"p\" class=\"text-fz27\" tools=\"line-break\" %}
            </div>
        </div>
    </div>
</div>
<div class=\"rent gr-bg\">
    <div class=\"container\">
        <div class=\"title-wrap\">
            <h2 class=\"title\">{{'ТОВАРЫ В ПРОКАТ'|_}}</h2>


            {% set records = priceList.records %}
            {% set displayColumn = priceList.displayColumn %}
            {% set noRecordsMessage = priceList.noRecordsMessage %}
            {% set detailsPage = priceList.detailsPage %}
            {% set detailsKeyColumn = priceList.detailsKeyColumn %}
            {% set detailsUrlParameter = priceList.detailsUrlParameter %}


            {% for record in records %}
            <a class=\"price\" data-fancybox data-type=\"iframe\" data-src=\"{{record.price_list.path}}\" href=\"javascript:;\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"16\" viewBox=\"0 0 18 16\" fill=\"none\">
                    <path
                        d=\"M3.384 2.066C3.384 2.534 3.216 2.936 2.88 3.272C2.556 3.596 2.16 3.758 1.692 3.758C1.224 3.758 0.822 3.596 0.486 3.272C0.162 2.936 0 2.534 0 2.066C0 1.598 0.162 1.202 0.486 0.877999C0.822 0.553999 1.224 0.391999 1.692 0.391999C2.16 0.391999 2.556 0.559999 2.88 0.895999C3.216 1.22 3.384 1.61 3.384 2.066ZM1.692 6.008C1.224 6.008 0.822 6.176 0.486 6.512C0.162 6.836 0 7.232 0 7.7C0 8.168 0.162 8.57 0.486 8.906C0.822 9.23 1.224 9.392 1.692 9.392C2.16 9.392 2.556 9.23 2.88 8.906C3.216 8.57 3.384 8.168 3.384 7.7C3.384 7.232 3.216 6.836 2.88 6.512C2.556 6.176 2.16 6.008 1.692 6.008ZM1.692 11.642C1.224 11.642 0.822 11.81 0.486 12.146C0.162 12.47 0 12.86 0 13.316C0 13.772 0.162 14.168 0.486 14.504C0.822 14.84 1.224 15.008 1.692 15.008C2.16 15.008 2.556 14.84 2.88 14.504C3.216 14.18 3.384 13.784 3.384 13.316C3.384 12.848 3.216 12.452 2.88 12.128C2.556 11.804 2.16 11.642 1.692 11.642ZM18 2.642V1.508C18 1.388 17.958 1.292 17.874 1.22C17.802 1.136 17.706 1.094 17.586 1.094H4.914C4.806 1.094 4.71 1.136 4.626 1.22C4.542 1.292 4.5 1.388 4.5 1.508V2.642C4.5 2.762 4.542 2.864 4.626 2.948C4.71 3.02 4.806 3.056 4.914 3.056H17.586C17.706 3.056 17.802 3.02 17.874 2.948C17.958 2.864 18 2.762 18 2.642ZM18 8.258V7.142C18 7.022 17.958 6.92 17.874 6.836C17.802 6.752 17.706 6.71 17.586 6.71H4.914C4.806 6.71 4.71 6.752 4.626 6.836C4.542 6.92 4.5 7.022 4.5 7.142V8.258C4.5 8.378 4.542 8.48 4.626 8.564C4.71 8.648 4.806 8.69 4.914 8.69H17.586C17.706 8.69 17.802 8.648 17.874 8.564C17.958 8.48 18 8.378 18 8.258ZM18 13.892V12.758C18 12.638 17.958 12.542 17.874 12.47C17.802 12.386 17.706 12.344 17.586 12.344H4.914C4.806 12.344 4.71 12.386 4.626 12.47C4.542 12.542 4.5 12.638 4.5 12.758V13.892C4.5 14.012 4.542 14.108 4.626 14.18C4.71 14.264 4.806 14.306 4.914 14.306H17.586C17.706 14.306 17.802 14.264 17.874 14.18C17.958 14.108 18 14.012 18 13.892Z\"
                        fill=\"black\"></path>
                </svg>{{'Посмотреть прайс'|_}}
            </a>
            {% endfor %}
        </div>
        <div class=\"icon-list\">

            {% set records = rent.records %}
            {% set displayColumn = rent.displayColumn %}
            {% set noRecordsMessage = rent.noRecordsMessage %}
            {% set detailsPage = rent.detailsPage %}
            {% set detailsKeyColumn = rent.detailsKeyColumn %}
            {% set detailsUrlParameter = rent.detailsUrlParameter %}



            {% for record in records %}
            <div class=\"icon-list__item\">
                <div class=\"icon-list__icon\"><img
                        src=\"{{ record.icon.path | resize(58, 58, { mode: 'crop', quality: '80', extension: 'webp'}) }}\"
                        alt=\"\"></div>
                <div class=\"icon-list__name\">{{record.title}}</div>
            </div>
            {% endfor %}

        </div>
        <p class=\"text-fz20\"> {{'А также имеются в продаже карты'|_}}</p><a class=\"btn\"
            href=\"{{ 'form-rent'|page }}\">{{'Арендовать'|_}}</a>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/pages/rent.htm", "");
    }
}
