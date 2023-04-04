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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/events.htm */
class __TwigTemplate_8d21a51b3824990983ff1a61e89257b1 extends Template
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
        echo "<div class=\"events\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap--indent\">
            <h2 class=\"title\">";
        // line 4
        echo $this->env->getFilter('_')->getCallable()("БЛОГ");
        echo "</h2>
        </div>
        <div class=\"swiper-container events-slider\">
            <div class=\"swiper-wrapper\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "                <div class=\"swiper-slide\">
                    <div class=\"block-tour__item block-tour__item--modify\">
                        <div class=\"block-tour__img\">
                            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 12), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 13
                echo "                            <img src=\"";
                echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 13), 800, 400, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
                                alt=\"\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                        </div>
                        <div class=\"block-tour__item-desc\">
                            <div>
                                <div class=\"block-tour__name\">";
            // line 19
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
                                <div class=\"block-tour__desc\">
                                    ";
            // line 21
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 21), "html", null, true);
            echo "
                                </div>
                            </div>
                            <div class=\"block-tour__item-desc-bottom\">
                                <a class=\"more\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 25), "html", null, true);
            echo "\">ПОДРОБНЕЕ</a>
                                <span>
                                    ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 27), "d M Y"), "html", null, true);
            echo "
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  94 => 27,  89 => 25,  82 => 21,  77 => 19,  72 => 16,  62 => 13,  58 => 12,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"events\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap--indent\">
            <h2 class=\"title\">{{'БЛОГ'|_}}</h2>
        </div>
        <div class=\"swiper-container events-slider\">
            <div class=\"swiper-wrapper\">
                {% for post in posts %}
                <div class=\"swiper-slide\">
                    <div class=\"block-tour__item block-tour__item--modify\">
                        <div class=\"block-tour__img\">
                            {% for img in post.featured_images|slice(0,1) %}
                            <img src=\"{{img.path | resize(800, 400, { mode: 'crop', quality: '80', extension: 'webp'})}}\"
                                alt=\"\">
                            {% endfor %}
                        </div>
                        <div class=\"block-tour__item-desc\">
                            <div>
                                <div class=\"block-tour__name\">{{post.title}}</div>
                                <div class=\"block-tour__desc\">
                                    {{post.excerpt}}
                                </div>
                            </div>
                            <div class=\"block-tour__item-desc-bottom\">
                                <a class=\"more\" href=\"{{post.url}}\">ПОДРОБНЕЕ</a>
                                <span>
                                    {{post.published_at | date ('d M Y')}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/events.htm", "");
    }
}
