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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/form.htm */
class __TwigTemplate_c0625917796b47f60b203ee72b076d71 extends Template
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
        echo "<div class=\"detail__form\">
    <form data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">
        ";
        // line 3
        echo $this->env->getFunction('form_token')->getCallable()("token");
        echo "

        <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
        <div class=\"detail__title\">";
        // line 6
        echo $this->env->getFilter('_')->getCallable()("Бронировать");
        echo "</div>
        <div class=\"booking__item booking__item--date\">
            <div class=\"booking__item-icon\"> <i class=\"icon-colendar\"></i></div>
            <div>
                <div class=\"booking__item-title\">";
        // line 10
        echo $this->env->getFilter('_')->getCallable()("Дата");
        echo " </div>
                <div class=\"booking__date-wrap\">
                    <input id=\"from\" type=\"text\" autocomplete=\"off\" name=\"Дата\">
                </div>
            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user\"></i>
            </div>
            <div>
                <div class=\"booking__item-title\">
                    ";
        // line 22
        echo $this->env->getFilter('_')->getCallable()("Гости");
        echo "
                </div>
                <div class=\"person-count\">
                    <input type=\"number\" value=\"2\" min=\"1\" name=\"Количество персон\" /><span>";
        // line 25
        echo $this->env->getFilter('_')->getCallable()("персоны");
        echo "</span>
                </div>
            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user\"></i>
            </div>
            <div>
                <label for=\"name\" class=\"booking__item-title\">
                    ";
        // line 35
        echo $this->env->getFilter('_')->getCallable()("Имя");
        echo "
                </label>
                <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"Иванов Сергей\">

            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user\"></i>
            </div>
            <div>
                <label for=\"email\" class=\"booking__item-title\">
                    ";
        // line 47
        echo $this->env->getFilter('_')->getCallable()("email");
        echo "
                </label>
                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"email@gmail.com\">

            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-phone\"></i>
            </div>
            <div>
                <label for=\"phone\" class=\"booking__item-title\">
                    ";
        // line 59
        echo $this->env->getFilter('_')->getCallable()("Номер телефона");
        echo "
                </label>
                <input type=\"text\" id=\"phone\" name=\"Телефон\" placeholder=\"+996 999 999 999\">

            </div>
        </div>
        <input type=\"hidden\" name=\"Категория\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 65), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"Название тура\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "title", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"Продолжительность тура\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "duration", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"Сложность тура\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "difficulty", [], "any", false, false, false, 68), "html", null, true);
        echo "\">
        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn\">";
        // line 69
        echo $this->env->getFilter('_')->getCallable()("Бронировать");
        echo "</button>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 69,  145 => 68,  141 => 67,  137 => 66,  133 => 65,  124 => 59,  109 => 47,  94 => 35,  81 => 25,  75 => 22,  60 => 10,  53 => 6,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"detail__form\">
    <form data-request=\"{{ genericForm }}::onFormSubmit\">
        {{ form_token() }}

        <div id=\"{{ genericForm }}_forms_flash\"></div>
        <div class=\"detail__title\">{{ 'Бронировать'|_ }}</div>
        <div class=\"booking__item booking__item--date\">
            <div class=\"booking__item-icon\"> <i class=\"icon-colendar\"></i></div>
            <div>
                <div class=\"booking__item-title\">{{'Дата'|_}} </div>
                <div class=\"booking__date-wrap\">
                    <input id=\"from\" type=\"text\" autocomplete=\"off\" name=\"Дата\">
                </div>
            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user\"></i>
            </div>
            <div>
                <div class=\"booking__item-title\">
                    {{ 'Гости'|_ }}
                </div>
                <div class=\"person-count\">
                    <input type=\"number\" value=\"2\" min=\"1\" name=\"Количество персон\" /><span>{{ 'персоны'|_ }}</span>
                </div>
            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user\"></i>
            </div>
            <div>
                <label for=\"name\" class=\"booking__item-title\">
                    {{ 'Имя'|_ }}
                </label>
                <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"Иванов Сергей\">

            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user\"></i>
            </div>
            <div>
                <label for=\"email\" class=\"booking__item-title\">
                    {{ 'email'|_ }}
                </label>
                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"email@gmail.com\">

            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-phone\"></i>
            </div>
            <div>
                <label for=\"phone\" class=\"booking__item-title\">
                    {{ 'Номер телефона'|_ }}
                </label>
                <input type=\"text\" id=\"phone\" name=\"Телефон\" placeholder=\"+996 999 999 999\">

            </div>
        </div>
        <input type=\"hidden\" name=\"Категория\" value=\"{{category.title}}\">
        <input type=\"hidden\" name=\"Название тура\" value=\"{{tour.title}}\">
        <input type=\"hidden\" name=\"Продолжительность тура\" value=\"{{tour.duration}}\">
        <input type=\"hidden\" name=\"Сложность тура\" value=\"{{tour.difficulty}}\">
        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn\">{{ 'Бронировать'|_ }}</button>
    </form>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/form.htm", "");
    }
}
