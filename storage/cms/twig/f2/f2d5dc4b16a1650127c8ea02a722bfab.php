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

/* C:\work\OSPanel\domains\mongu\plugins/samuell/contenteditor/components/contenteditor/default.htm */
class __TwigTemplate_8b5328691835f30e5cc2777385381a0d extends Template
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
        echo "<";
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 1)) {
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 1), "html", null, true);
        } else {
            echo "div";
        }
        // line 2
        echo "    ";
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 2)) {
            echo "data-fixture data-ce-tag=\"p\"";
        } else {
            echo "data-editable";
        }
        // line 3
        echo "    data-component=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "file", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
    data-tools=\"";
        // line 5
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tools", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
    ";
        // line 6
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, false, 6)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, false, 6), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 7
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", [], "any", false, false, false, 7);
        echo "
</";
        // line 8
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 8)) {
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, false, 8), "html", null, true);
        } else {
            echo "div";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\plugins/samuell/contenteditor/components/contenteditor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  72 => 7,  64 => 6,  60 => 5,  56 => 4,  51 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}
    {% if __SELF__.fixture %}data-fixture data-ce-tag=\"p\"{% else %}data-editable{% endif %}
    data-component=\"{{ __SELF__ }}::onSave\"
    data-file=\"{{ __SELF__.file }}\"
    data-tools=\"{{ __SELF__.tools }}\"
    {% if __SELF__.class %}class=\"{{ __SELF__.class }}\"{% endif %}>
    {{ __SELF__.content|raw }}
</{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}>
", "C:\\work\\OSPanel\\domains\\mongu\\plugins/samuell/contenteditor/components/contenteditor/default.htm", "");
    }
}
