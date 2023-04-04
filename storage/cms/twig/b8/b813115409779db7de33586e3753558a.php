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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/kind-tours.htm */
class __TwigTemplate_e096229e126eb7b2e1d0b608cc76284f extends Template
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
        echo "<div class=\"kind\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap\">
            <h2 class=\"title\">ВИДЫ ТУРОВ</h2>
        </div>
        <div class=\"nav\">
            <div class=\"swiper-button-prev nav-btn\"> </div>
            <div class=\"swiper-button-next nav-btn\"> </div>
        </div>
        <div class=\"swiper-container kind-slider\">
            <div class=\"swiper-wrapper\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, ($context["parent_id"] ?? null), "html", null, true);
            echo "
                <div class=\"swiper-slide\"><a class=\"kind__item shine-ef\"
                        href=\"/";
            // line 15
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 15), "html", null, true);
            echo "/tours/c/";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
                        <div class=\"kind__img\">
                            <img src=\"";
            // line 17
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17), 300, 450, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"
                                alt=\"\">
                        </div>
                        <div class=\"kind__item-desc\">
                            <div class=\"kind__icon\">
                                <img src=\"";
            // line 22
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22), 300, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"
                                    alt=\"\"></div>
                            <div class=\"kind__name\">";
            // line 24
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/kind-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  80 => 24,  75 => 22,  67 => 17,  60 => 15,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kind\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap\">
            <h2 class=\"title\">ВИДЫ ТУРОВ</h2>
        </div>
        <div class=\"nav\">
            <div class=\"swiper-button-prev nav-btn\"> </div>
            <div class=\"swiper-button-next nav-btn\"> </div>
        </div>
        <div class=\"swiper-container kind-slider\">
            <div class=\"swiper-wrapper\">
                {% for item in categories %}
                {{parent_id}}
                <div class=\"swiper-slide\"><a class=\"kind__item shine-ef\"
                        href=\"/{{this.locale}}/tours/c/{{item.slug}}\">
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
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/kind-tours.htm", "");
    }
}
