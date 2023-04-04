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

/* C:\work\OSPanel\domains\mongu\plugins/samuell/contenteditor/components/contenteditor/scripts.htm */
class __TwigTemplate_96dbdae1757d6e0de64c5887d4c64941 extends Template
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
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->startBlock('scripts'        );
        // line 2
        echo "    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "palettes", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 6
            echo "            new ContentTools.Style('";
            echo twig_escape_filter($this->env, ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 6)) ? (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 6)) : (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, false, 6))), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, false, 6), "html", null, true);
            echo "', ";
            echo json_encode(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["style"], "allowed_tags", [], "any", false, false, false, 6));
            echo "),
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ]);
    editor.toolbox().tools([
                                [
                                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "buttons", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 12
            echo "                                    '";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "',
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
";
        // line 1
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->endBlock(true        );
        // line 24
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->startBlock('styles'        );
        // line 25
        echo "    <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
";
        // line 24
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\plugins/samuell/contenteditor/components/contenteditor/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  94 => 25,  92 => 24,  90 => 1,  79 => 14,  70 => 12,  66 => 11,  61 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        {% for style in __SELF__.palettes %}
            new ContentTools.Style('{{ style.name ? style.name : style.class }}', '{{ style.class }}', {{ style.allowed_tags|json_encode()|raw }}),
        {% endfor %}
    ]);
    editor.toolbox().tools([
                                [
                                {% for value in __SELF__.buttons %}
                                    '{{ value }}',
                                {% endfor %}
                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
{% endput %}
{% put styles  %}
    <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
{% endput %}
", "C:\\work\\OSPanel\\domains\\mongu\\plugins/samuell/contenteditor/components/contenteditor/scripts.htm", "");
    }
}
