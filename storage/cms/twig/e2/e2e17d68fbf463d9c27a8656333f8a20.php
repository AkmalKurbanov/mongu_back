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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/recomend-tours.htm */
class __TwigTemplate_b9a8d01a1da011db4c10f1c84c1e52f9 extends Template
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
        echo "<div style=\"background-color: #fff; z-index:9; position: relative;\">


</div>
<div class=\"block-tour\">
    <div class=\"swiper-container block-tour-slider\">
        <div class=\"swiper-wrapper\">




            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tours"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "
            
            ";
            // line 15
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_recomend", [], "any", false, false, false, 15) == 1)) {
                // line 16
                echo "            <div class=\"swiper-slide\">

                
                <a class=\"block-tour__item\" href=\"/tours/t/";
                // line 19
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 19), "slug", [], "any", false, false, false, 19), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
                    <div class=\"block-tour__img\">
                        <img src=\"";
                // line 21
                echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 21), "path", [], "any", false, false, false, 21), 300, 150, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
                            alt=\"\">
                    </div>
                    <div class=\"block-tour__item-desc\">
                        <div class=\"block-tour__name\">";
                // line 25
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "categories", [], "any", false, false, false, 25), "html", null, true);
                echo "</div>
                        <div class=\"block-tour__desc\">";
                // line 26
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "duration", [], "any", false, false, false, 26), "html", null, true);
                echo "</div>
                    </div>
                </a>
            </div>
            ";
            }
            // line 31
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/recomend-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  99 => 32,  94 => 31,  86 => 26,  80 => 25,  73 => 21,  66 => 19,  61 => 16,  59 => 15,  55 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"background-color: #fff; z-index:9; position: relative;\">


</div>
<div class=\"block-tour\">
    <div class=\"swiper-container block-tour-slider\">
        <div class=\"swiper-wrapper\">




            {% for item in tours %}

            
            {% if item.is_recomend == 1 %}
            <div class=\"swiper-slide\">

                
                <a class=\"block-tour__item\" href=\"/tours/t/{{item.category.slug}}/{{item.slug}}\">
                    <div class=\"block-tour__img\">
                        <img src=\"{{item.preview.path | resize(300, 150, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                            alt=\"\">
                    </div>
                    <div class=\"block-tour__item-desc\">
                        <div class=\"block-tour__name\">{{ item.title }} {{item.categories}}</div>
                        <div class=\"block-tour__desc\">{{ item.duration }}</div>
                    </div>
                </a>
            </div>
            {% endif %}
            {% else %}
            {% endfor %}
        </div>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/recomend-tours.htm", "");
    }
}
