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

/* C:\work\OSPanel\domains\mongu\plugins/samuell/contenteditor/components/contenteditor/render.htm */
class __TwigTemplate_8bd638b2ed3a55640400c33f0837f319 extends Template
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
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 1)) {
            echo "<";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 1), "html", null, true);
            echo " ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, false, 1)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, false, 1), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 2
        echo "    ";
        echo ($context["content"] ?? null);
        echo "
";
        // line 3
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 3)) {
            echo "</";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 3), "html", null, true);
            echo ">";
        }
        // line 4
        echo "
";
        // line 5
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "renderCount", [], "any", false, false, false, 5) == 1)) {
            // line 6
            echo "    ";
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->startBlock('styles'            );
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    ";
            // line 6
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\plugins/samuell/contenteditor/components/contenteditor/render.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 6,  68 => 7,  65 => 6,  63 => 5,  60 => 4,  54 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.fixture %}<{{ __SELF__.fixture }} {% if __SELF__.class %}class=\"{{ __SELF__.class }}\"{% endif %}>{% endif %}
    {{ content|raw }}
{% if __SELF__.fixture %}</{{ __SELF__.fixture }}>{% endif %}

{% if __SELF__.renderCount == 1 %}
    {% put styles  %}
        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    {% endput %}
{% endif %}
", "C:\\work\\OSPanel\\domains\\mongu\\plugins/samuell/contenteditor/components/contenteditor/render.htm", "");
    }
}
