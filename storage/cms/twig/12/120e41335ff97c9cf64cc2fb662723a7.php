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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/about.htm */
class __TwigTemplate_e21d26713da049fe9fa4aaf78624f2d6 extends Template
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
        echo "<div class=\"img-group gr-bg\">
    <div class=\"container\">
        <div class=\"img-group__wrap\">
            <div class=\"img-group__col\">
                <div class=\"img-group__images\">
                    <div class=\"img-group__item\">
                        ";
        // line 7
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/text-section-img1.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "                    </div>
                    <div class=\"img-group__item\">
                        ";
        // line 10
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/text-section-img2.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "                    </div>
                    <div class=\"img-group__item\">
                        ";
        // line 13
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/text-section-img3.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "                    </div>
                </div>
            </div>
            <div class=\"img-group__col\">
                <div class=\"title-wrap\">
                    ";
        // line 19
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/text-section-title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['class'] = "title"        ;
        $context['__cms_component_params']['tools'] = "line-break"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "                    ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/text-section-subtitle.htm"        ;
        $context['__cms_component_params']['fixture'] = "h3"        ;
        $context['__cms_component_params']['class'] = "subtitle"        ;
        $context['__cms_component_params']['tools'] = "line-break"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "                </div>
                <div class=\"img-group__desc\">
                    ";
        // line 23
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/text-section-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = "text-fz20"        ;
        $context['__cms_component_params']['tools'] = "line-break"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "                    ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/text-section-btn.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['tools'] = "link"        ;
        $context['__cms_component_params']['class'] = "btn"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 25,  113 => 24,  105 => 23,  101 => 21,  92 => 20,  84 => 19,  77 => 14,  69 => 13,  65 => 11,  57 => 10,  53 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"img-group gr-bg\">
    <div class=\"container\">
        <div class=\"img-group__wrap\">
            <div class=\"img-group__col\">
                <div class=\"img-group__images\">
                    <div class=\"img-group__item\">
                        {% component 'contenteditor' file=\"about/text-section-img1.htm\"  class=\"\" fixture=\"\" tools=\"image,remove\" %}
                    </div>
                    <div class=\"img-group__item\">
                        {% component 'contenteditor' file=\"about/text-section-img2.htm\"  class=\"\" fixture=\"\" tools=\"image,remove\" %}
                    </div>
                    <div class=\"img-group__item\">
                        {% component 'contenteditor' file=\"about/text-section-img3.htm\"  class=\"\" fixture=\"\" tools=\"image,remove\" %}
                    </div>
                </div>
            </div>
            <div class=\"img-group__col\">
                <div class=\"title-wrap\">
                    {% component 'contenteditor' file=\"about/text-section-title.htm\" fixture=\"h2\" class=\"title\" tools=\"line-break\" %}
                    {% component 'contenteditor' file=\"about/text-section-subtitle.htm\" fixture=\"h3\" class=\"subtitle\" tools=\"line-break\" %}
                </div>
                <div class=\"img-group__desc\">
                    {% component 'contenteditor' file=\"about/text-section-text.htm\" fixture=\"p\" class=\"text-fz20\" tools=\"line-break\" %}
                    {% component 'contenteditor' file=\"about/text-section-btn.htm\" fixture=\"div\"  tools=\"link\" class=\"btn\"  %}
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/about.htm", "");
    }
}
