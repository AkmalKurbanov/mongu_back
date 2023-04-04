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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/search-form.htm */
class __TwigTemplate_613efc85173c4a677a7dfcd91c3fc6c9 extends Template
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
        echo "<div class=\"search-form\">
<form action=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchInput"] ?? null), "searchPage", [], "any", false, false, false, 2));
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"";
        // line 5
        echo "Что Вы ищите";
        echo "?\"
                   value=\"";
        // line 6
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchInput"] ?? null), "query", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
                   autocomplete=\"off\"
                   
            >
            <button class=\"ss-search-form__submit\" type=\"submit\">";
        // line 10
        echo $this->env->getFilter('_')->getCallable()("Поиск");
        echo "</button>
        </div>
        <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div> 
    </div>
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/search-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"search-form\">
<form action=\"{{ searchInput.searchPage | page }}?q={{ query | url_encode(true) }}\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"{{'Что Вы ищите'}}?\"
                   value=\"{{ searchInput.query }}\"
                   autocomplete=\"off\"
                   
            >
            <button class=\"ss-search-form__submit\" type=\"submit\">{{'Поиск'|_}}</button>
        </div>
        <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div> 
    </div>
</form>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/search-form.htm", "");
    }
}
