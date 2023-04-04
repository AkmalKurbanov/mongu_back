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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/layouts/default.htm */
class __TwigTemplate_e8d30a4d670b341adae3daeee3fa8a6a extends Template
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
        echo "<!DOCTYPE html>
<html>

<head>
    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("GA4-head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("seo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "</head>

<body class=\"";
        // line 10
        echo twig_escape_filter($this->env, ("page-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)), "html", null, true);
        echo "\">
    
    ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("GA4-body"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "
    <div class=\"wrapper\">
        <div class=\"content\">
           
            ";
        // line 17
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "url", [], "any", false, false, false, 17) == "/")) {
            // line 18
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/hero"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "
            ";
        } else {
            // line 21
            echo "            <!-- Header -->
            ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/header"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "
            ";
        }
        // line 25
        echo "

            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 29
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction();
        // line 30
        echo "\t\t\t\t\t\t\t\t
            </section>
        </div>
        <!-- Footer -->
        ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "    </div>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  112 => 34,  106 => 30,  104 => 29,  98 => 25,  94 => 23,  90 => 22,  87 => 21,  83 => 19,  78 => 18,  76 => 17,  70 => 13,  66 => 12,  61 => 10,  57 => 8,  52 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    {% partial 'GA4-head' %}
    {% partial 'site/meta' %}
    {% component 'seo' %}
</head>

<body class=\"{{ 'page-'~this.page.id }}\">
    
    {% partial 'GA4-body' %}

    <div class=\"wrapper\">
        <div class=\"content\">
           
            {% if this.page.url == '/' %}
            {% partial 'site/hero' %}

            {% else %}
            <!-- Header -->
            {% partial 'site/header' %}

            {% endif %}


            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
\t\t\t\t\t\t\t\t
            </section>
        </div>
        <!-- Footer -->
        {% partial 'site/footer' %}
    </div>

</body>

</html>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/layouts/default.htm", "");
    }
}
