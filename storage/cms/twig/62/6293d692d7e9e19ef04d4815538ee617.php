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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/rent.htm */
class __TwigTemplate_16efe4eecd0a98739c357e0cea820db6 extends Template
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
        // line 8
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "rent/text-section-img1.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "                    </div>

                    <div class=\"img-group__item\">
                        ";
        // line 12
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "rent/text-section-img2.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "                    </div>

                    <div class=\"img-group__item\">
                        ";
        // line 16
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "rent/text-section-img3.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "                    </div>

                </div>
            </div>
            <div class=\"img-group__col\">
                <div class=\"title-wrap\">

                    <h2 class=\"title\">
                        ";
        // line 25
        echo $this->env->getFilter('_')->getCallable()("АРЕНДА");
        echo "
                    </h2>
                    <h3 class=\"subtitle\">
                        ";
        // line 28
        echo $this->env->getFilter('_')->getCallable()("Вы можете также у нас арендовать туристические снаряжения");
        echo "
                    </h3>
                </div>
                <div class=\"icon-list\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 33
            echo "                    <div class=\"icon-list__item\">
                        <div class=\"icon-list__icon\"><img
                                src=\"";
            // line 35
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "icon", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35), 58, 58, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"
                                alt=\"\"></div>
                        <div class=\"icon-list__name\">";
            // line 37
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </div><a class=\"btn\" href=\"/rent\">";
        echo $this->env->getFilter('_')->getCallable()("Арендовать");
        echo " </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/rent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  116 => 37,  111 => 35,  107 => 33,  103 => 32,  96 => 28,  90 => 25,  80 => 17,  72 => 16,  67 => 13,  59 => 12,  54 => 9,  46 => 8,  37 => 1,);
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

                    <h2 class=\"title\">
                        {{'АРЕНДА'|_}}
                    </h2>
                    <h3 class=\"subtitle\">
                        {{'Вы можете также у нас арендовать туристические снаряжения'|_}}
                    </h3>
                </div>
                <div class=\"icon-list\">
                    {% for record in records %}
                    <div class=\"icon-list__item\">
                        <div class=\"icon-list__icon\"><img
                                src=\"{{ record.icon.path | resize(58, 58, { mode: 'crop', quality: '80', extension: 'webp'}) }}\"
                                alt=\"\"></div>
                        <div class=\"icon-list__name\">{{record.title}}</div>
                    </div>
                    {% endfor %}
                </div><a class=\"btn\" href=\"/rent\">{{'Арендовать'|_}} </a>
            </div>
        </div>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/rent.htm", "");
    }
}
