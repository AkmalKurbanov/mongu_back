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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/site/booking-popup.htm */
class __TwigTemplate_e3b9db3de0dc111e222e7472f80b4378 extends Template
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
        echo "<div class=\"booking-popup\">
    <div class=\"booking-popup__window\">
        <div class=\"booking-popup__window-close\">&#x2715</div>
        <h2>";
        // line 4
        echo $this->env->getFilter('_')->getCallable()("БРОНИРОВАНИЕ");
        echo " </h2>
        <div class=\"booking-popup__total-info\">
            <div class=\"booking-popup__info-item\">
                <div class=\"booking-popup__total-item-title\">Количество человек</div>
                <div class=\"booking-popup__total-item-value person-count-js\">10 человек</div>
            </div>
            <div class=\"booking-popup__info-item booking-popup__info-item--date\">
                <div class=\"booking-popup__date-wrap\">
                    <div class=\"booking-popup__total-item-title\">";
        // line 12
        echo $this->env->getFilter('_')->getCallable()("Дата с");
        echo "</div>
                    <div class=\"booking-popup__total-item-value date-from-js\">07.12.22</div>
                </div>
                <div class=\"booking-popup__date-wrap\">
                    <div class=\"booking-popup__total-item-title\">";
        // line 16
        echo $this->env->getFilter('_')->getCallable()("по");
        echo "</div>
                    <div class=\"booking-popup__total-item-value date-to-js\">10.12.22</div>
                </div>
            </div>
        </div>


        <form data-request=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

            ";
        // line 25
        echo $this->env->getFunction('form_token')->getCallable()("token");
        echo "

            <div id=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
            <br>
            <div class=\"input-wrap\">
                <input class=\"booking-popup__person-value\" type=\"hidden\" name=\"Количество человек\" value=\"\">
                <input class=\"booking-popup__date-from-value\" type=\"hidden\" name=\"Дата с\" value=\"\">
                <input class=\"booking-popup__date-to-value\" type=\"hidden\" name=\"Дата по\" value=\"\">
                <div class=\"input\">
                    <label for=\"name\">";
        // line 34
        echo "Ф.И.О гостя";
        echo "</label>
                    <input id=\"name\" type=\"text\" name=\"Имя\">
                </div>
                <div class=\"input\">
                    <label for=\"email\">Email</label>
                    <input id=\"email\" type=\"text\" name=\"email\">
                </div>
                <div class=\"input\">
                    <label for=\"phone\">";
        // line 42
        echo $this->env->getFilter('_')->getCallable()("Номер телефона");
        echo " </label>
                    <input id=\"phone\" type=\"text\" name=\"Номер телефона\">
                </div>
                <div class=\"booking-popup__btn-wrap\">
                    <div class=\"btn btn--red booking-popup__cancel\">";
        // line 46
        echo $this->env->getFilter('_')->getCallable()("Отмена");
        echo " </div>
                    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">";
        // line 47
        echo $this->env->getFilter('_')->getCallable()("Забронировать");
        echo "</button>
                </div>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/booking-popup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  108 => 46,  101 => 42,  90 => 34,  80 => 27,  75 => 25,  70 => 23,  60 => 16,  53 => 12,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"booking-popup\">
    <div class=\"booking-popup__window\">
        <div class=\"booking-popup__window-close\">&#x2715</div>
        <h2>{{'БРОНИРОВАНИЕ'|_}} </h2>
        <div class=\"booking-popup__total-info\">
            <div class=\"booking-popup__info-item\">
                <div class=\"booking-popup__total-item-title\">Количество человек</div>
                <div class=\"booking-popup__total-item-value person-count-js\">10 человек</div>
            </div>
            <div class=\"booking-popup__info-item booking-popup__info-item--date\">
                <div class=\"booking-popup__date-wrap\">
                    <div class=\"booking-popup__total-item-title\">{{'Дата с'|_}}</div>
                    <div class=\"booking-popup__total-item-value date-from-js\">07.12.22</div>
                </div>
                <div class=\"booking-popup__date-wrap\">
                    <div class=\"booking-popup__total-item-title\">{{'по'|_}}</div>
                    <div class=\"booking-popup__total-item-value date-to-js\">10.12.22</div>
                </div>
            </div>
        </div>


        <form data-request=\"{{ genericForm }}::onFormSubmit\">

            {{ form_token() }}

            <div id=\"{{ genericForm }}_forms_flash\"></div>
            <br>
            <div class=\"input-wrap\">
                <input class=\"booking-popup__person-value\" type=\"hidden\" name=\"Количество человек\" value=\"\">
                <input class=\"booking-popup__date-from-value\" type=\"hidden\" name=\"Дата с\" value=\"\">
                <input class=\"booking-popup__date-to-value\" type=\"hidden\" name=\"Дата по\" value=\"\">
                <div class=\"input\">
                    <label for=\"name\">{{'Ф.И.О гостя'}}</label>
                    <input id=\"name\" type=\"text\" name=\"Имя\">
                </div>
                <div class=\"input\">
                    <label for=\"email\">Email</label>
                    <input id=\"email\" type=\"text\" name=\"email\">
                </div>
                <div class=\"input\">
                    <label for=\"phone\">{{'Номер телефона'|_}} </label>
                    <input id=\"phone\" type=\"text\" name=\"Номер телефона\">
                </div>
                <div class=\"booking-popup__btn-wrap\">
                    <div class=\"btn btn--red booking-popup__cancel\">{{'Отмена'|_}} </div>
                    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">{{'Забронировать'|_}}</button>
                </div>
            </div>
        </form>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/booking-popup.htm", "");
    }
}
