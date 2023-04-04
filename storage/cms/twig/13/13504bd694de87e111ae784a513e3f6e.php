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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/site/header.htm */
class __TwigTemplate_9babc69e302c992fc9d0f9950e74be8f extends Template
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
        echo "<!-- Nav -->
";
        // line 2
        $context['__placeholder_headerBefore_default_contents'] = null;        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('headerBefore', $context['__placeholder_headerBefore_default_contents']);
        unset($context['__placeholder_headerBefore_default_contents']);        // line 3
        echo "<header class=\"header\">
    <div class=\"container\">
        <div class=\"header__wrap\">
            <div class=\"logo\">
                <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                    <img
                        src=\"";
        // line 9
        echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "logoHeader", [], "any", false, false, false, 9), "path", [], "any", false, false, false, 9), 125, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
        echo "\" />

                </a>
            </div>
            <div class=\"header__left-col\">

                <div class=\"nav\">
                    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/menu-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "                    <div class=\"social\">
                        <ul>
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 19), "social", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                            <li>
                                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 21), "html", null, true);
            echo "\" target=\"_blank\">
                                    <i class=\"";
            // line 22
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 22), "html", null, true);
            echo "\"></i>
                                </a>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        </ul>
                    </div>
                </div>

                <div class=\"social\">
                    <ul>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 32), "social", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 34), "html", null, true);
            echo "\" target=\"_blank\">
                                <i class=\"";
            // line 35
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 35), "html", null, true);
            echo "\"></i>
                            </a>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </ul>
                </div>

                <div class=\"search search-js\">
                    <div class=\"search__icon\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <path
                                d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\"
                                fill=\"black\"></path>
                            <clippath id=\"clip0_77_1126\">
                                <rect width=\"24\" height=\"24\" fill=\"white\"></rect>
                            </clippath>
                        </svg>
                    </div>
                </div>


                ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/lang"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "
                





                <div class=\"hamburger\"><span></span></div>
            </div>
        </div>
    </div>
</header>


";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("search-form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "
";
        // line 73
        $context['__placeholder_headerAfter_default_contents'] = null;        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('headerAfter', $context['__placeholder_headerAfter_default_contents']);
        unset($context['__placeholder_headerAfter_default_contents']);    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 73,  164 => 72,  160 => 71,  144 => 57,  140 => 56,  121 => 39,  111 => 35,  107 => 34,  104 => 33,  100 => 32,  92 => 26,  82 => 22,  78 => 21,  75 => 20,  71 => 19,  67 => 17,  63 => 16,  53 => 9,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
{% placeholder headerBefore %}
<header class=\"header\">
    <div class=\"container\">
        <div class=\"header__wrap\">
            <div class=\"logo\">
                <a href=\"{{ 'home'|page }}\">
                    <img
                        src=\"{{ this.theme.logoHeader.path | resize(125, auto, { mode: 'crop', quality: '80', extension: 'webp'}) }}\" />

                </a>
            </div>
            <div class=\"header__left-col\">

                <div class=\"nav\">
                    {% partial  'site/menu-header' %}
                    <div class=\"social\">
                        <ul>
                            {% for item in this.theme.social %}
                            <li>
                                <a href=\"{{item.url}}\" target=\"_blank\">
                                    <i class=\"{{item.awesome_icon}}\"></i>
                                </a>
                            </li>
                            {%endfor%}
                        </ul>
                    </div>
                </div>

                <div class=\"social\">
                    <ul>
                        {% for item in this.theme.social %}
                        <li>
                            <a href=\"{{item.url}}\" target=\"_blank\">
                                <i class=\"{{item.awesome_icon}}\"></i>
                            </a>
                        </li>
                        {%endfor%}
                    </ul>
                </div>

                <div class=\"search search-js\">
                    <div class=\"search__icon\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <path
                                d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\"
                                fill=\"black\"></path>
                            <clippath id=\"clip0_77_1126\">
                                <rect width=\"24\" height=\"24\" fill=\"white\"></rect>
                            </clippath>
                        </svg>
                    </div>
                </div>


                {% partial  'site/lang' %}

                





                <div class=\"hamburger\"><span></span></div>
            </div>
        </div>
    </div>
</header>


{% partial 'search-form' %}

{% placeholder headerAfter %}", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/header.htm", "");
    }
}
