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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/popular-tours.htm */
class __TwigTemplate_b56a475c5d76ea1e456d5c7de2b16830 extends Template
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
        echo "<div class=\"popular\">
     <div class=\"container\">
         <div class=\"title-wrap title-wrap--indent\">
             <h2 class=\"title\">ПОПУЛЯРНЫЕ МЕСТА</h2>
         </div>
         <div class=\"popular__wrap\">
             ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tours"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "

             ";
            // line 10
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_popular", [], "any", false, false, false, 10) == 1)) {
                // line 11
                echo "             <a class=\"popular__item\" href=\"/tours/t/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 11), "slug", [], "any", false, false, false, 11), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 11), "html", null, true);
                echo "\"><img
                     src=\"";
                // line 12
                echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 12), "path", [], "any", false, false, false, 12), 510, 300, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
                     alt=\"\">
                 <div class=\"popular__desc\">
                     <div class=\"popular__name\">";
                // line 15
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15), "html", null, true);
                echo ", высота ";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 15), "html", null, true);
                echo "</div>
                     <div class=\"popular__place\">";
                // line 16
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "place", [], "any", false, false, false, 16), "html", null, true);
                echo "</div>
                 </div>
             </a>
             ";
            }
            // line 20
            echo "             ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "


            


         </div>
     </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/popular-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  87 => 21,  82 => 20,  75 => 16,  69 => 15,  63 => 12,  56 => 11,  54 => 10,  50 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"popular\">
     <div class=\"container\">
         <div class=\"title-wrap title-wrap--indent\">
             <h2 class=\"title\">ПОПУЛЯРНЫЕ МЕСТА</h2>
         </div>
         <div class=\"popular__wrap\">
             {% for item in tours %}


             {% if item.is_popular == 1 %}
             <a class=\"popular__item\" href=\"/tours/t/{{item.category.slug}}/{{item.slug}}\"><img
                     src=\"{{item.preview.path | resize(510, 300, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                     alt=\"\">
                 <div class=\"popular__desc\">
                     <div class=\"popular__name\">{{item.title}}, высота {{item.height}}</div>
                     <div class=\"popular__place\">{{item.place}}</div>
                 </div>
             </a>
             {% endif %}
             {% else %}
             {% endfor %}



            


         </div>
     </div>
 </div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/popular-tours.htm", "");
    }
}
