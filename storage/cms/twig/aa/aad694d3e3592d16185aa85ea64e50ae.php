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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/pass-form.htm */
class __TwigTemplate_67c400404786d1531fabffd386f2eb8e extends Template
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
        echo "<div class=\"pass-form\"
          style=\"background-image:
          url('";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pass-form.webp");
        echo "')\">
          <div class=\"container\">
              <div class=\"title-wrap title-wrap--white\">
                  ";
        // line 6
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "pass-form-title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['class'] = "title"        ;
        $context['__cms_component_params']['tools'] = "line-break"        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "                  
              </div>
              <div class=\"pass-form__wrap\">
                  ";
        // line 10
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "pass-form-text.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "line-break"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "                  <a class=\"btn\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("form-pass");
        echo "\">";
        echo $this->env->getFilter('_')->getCallable()("Заполнить анкету");
        echo " </a>
              </div>
          </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/pass-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  60 => 10,  55 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pass-form\"
          style=\"background-image:
          url('{{ 'assets/images/pass-form.webp' | theme }}')\">
          <div class=\"container\">
              <div class=\"title-wrap title-wrap--white\">
                  {% component 'contenteditor' file=\"pass-form-title.htm\" fixture=\"h2\" class=\"title\" tools=\"line-break\" %}
                  
              </div>
              <div class=\"pass-form__wrap\">
                  {% component 'contenteditor' file=\"pass-form-text.htm\" fixture=\"p\" tools=\"line-break\" class=\"\" %}
                  <a class=\"btn\" href=\"{{ 'form-pass'|page }}\">{{'Заполнить анкету'|_}} </a>
              </div>
          </div>
      </div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/pass-form.htm", "");
    }
}
