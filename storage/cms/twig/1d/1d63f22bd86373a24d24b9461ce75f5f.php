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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/pages/contacts.htm */
class __TwigTemplate_997d7d24d53d03a19fbb47214ff6db41 extends Template
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
        echo "<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo $this->env->getFilter('_')->getCallable()("Главная");
        echo "</a></li>
            <li>";
        // line 5
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"contacts\">
    <div class=\"container\">
        <div class=\"contacts__wrap\">
            <div class=\"contacts__col\">
                <div id=\"map\">
                <iframe src=\"";
        // line 14
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "map", [], "any", false, false, false, 14), "html", null, true);
        echo "\"></iframe>
                </div>
                <br>
                <br>

                <form data-request=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

                    ";
        // line 21
        echo $this->env->getFunction('form_token')->getCallable()("token");
        echo "


                    <div class=\"input-wrap\">
                        <div class=\"input\">
                            <label for=\"name\">";
        // line 26
        echo $this->env->getFilter('_')->getCallable()("Имя");
        echo "</label>
                            <input type=\"text\" id=\"name\" name=\"Имя\">
                        </div>
                        <div class=\"input\">
                            <label for=\"phone\">";
        // line 30
        echo $this->env->getFilter('_')->getCallable()("Номер телефона");
        echo "</label>
                            <input type=\"text\" id=\"phone\" name=\"Телефон\">
                        </div>
                        <div class=\"input\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" id=\"email\" name=\"email\">
                        </div>
                        <div class=\"input\">
                            <label for=\"message\">";
        // line 38
        echo $this->env->getFilter('_')->getCallable()("Сообщение");
        echo "</label>
                            <textarea name=\"Сообщение\" id=\"messgase\"
                                style=\"width: 100%;min-height: 45px;border:none; outline: none; padding-left: 10px; padding-top: 10px;resize: vertical;\"></textarea>
                        </div>
                    </div>
                    <div id=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

                    <div class=\"booking-form__btn\">
                        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn\">";
        // line 46
        echo $this->env->getFilter('_')->getCallable()("Отправить");
        echo "</button>
                        <p>";
        // line 47
        echo $this->env->getFilter('_')->getCallable()("Оставте заявку и <br> наш специалист <br> свяжется с Вами");
        echo "</p>
                    </div>

                </form>

            </div>
            <div class=\"contacts__col\">
                <div class=\"title-wrap\">
                    <h2 class=\"title\">";
        // line 55
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 55), "title", [], "any", false, false, false, 55), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"list-contacts list-contacts--dark\">
                    <ul>
                        <li>
                            <span><i class=\"icon-user\"></i></span>
                            <div>
                                <p>";
        // line 62
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 62), "contactPerson", [], "any", false, false, false, 62), "html", null, true);
        echo "</p>
                            </div>
                        </li>
                        <li><span><i class=\"icon-marker\"></i></span>
                            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 66), "addressRepeater", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 67
            echo "                            <div>
                                ";
            // line 68
            echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "address", [], "any", false, false, false, 68);
            echo "
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </li>

                        <li>
                            <span><i class=\"icon-envelope\"></i></span>
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 75), "emailRepeater", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 76
            echo "                            <div>
                                <a href=\"tel:";
            // line 77
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 77), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                        </li>

                        <li>
                            <span>
                                <i class=\"icon-phone\"></i>
                            </span>
                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 86), "phoneRepeater", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "                            <div>
                                <a href=\"tel:";
            // line 88
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 88), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 88), "html", null, true);
            echo "
                                    <span class=\"messenger\">
                                        <i class=\"";
            // line 90
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 90), "html", null, true);
            echo "\"></i>
                                    </span>
                                </a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                        </li>
                    </ul>

                </div>





            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/pages/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 95,  207 => 90,  200 => 88,  197 => 87,  193 => 86,  185 => 80,  174 => 77,  171 => 76,  167 => 75,  161 => 71,  152 => 68,  149 => 67,  145 => 66,  138 => 62,  128 => 55,  117 => 47,  113 => 46,  107 => 43,  99 => 38,  88 => 30,  81 => 26,  73 => 21,  68 => 19,  60 => 14,  48 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">{{'Главная'|_}}</a></li>
            <li>{{this.page.title}}</li>
        </ul>
    </div>
</div>
<div class=\"contacts\">
    <div class=\"container\">
        <div class=\"contacts__wrap\">
            <div class=\"contacts__col\">
                <div id=\"map\">
                <iframe src=\"{{this.theme.map}}\"></iframe>
                </div>
                <br>
                <br>

                <form data-request=\"{{ genericForm }}::onFormSubmit\">

                    {{ form_token() }}


                    <div class=\"input-wrap\">
                        <div class=\"input\">
                            <label for=\"name\">{{'Имя'|_}}</label>
                            <input type=\"text\" id=\"name\" name=\"Имя\">
                        </div>
                        <div class=\"input\">
                            <label for=\"phone\">{{'Номер телефона'|_}}</label>
                            <input type=\"text\" id=\"phone\" name=\"Телефон\">
                        </div>
                        <div class=\"input\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" id=\"email\" name=\"email\">
                        </div>
                        <div class=\"input\">
                            <label for=\"message\">{{'Сообщение'|_}}</label>
                            <textarea name=\"Сообщение\" id=\"messgase\"
                                style=\"width: 100%;min-height: 45px;border:none; outline: none; padding-left: 10px; padding-top: 10px;resize: vertical;\"></textarea>
                        </div>
                    </div>
                    <div id=\"{{ genericForm }}_forms_flash\"></div>

                    <div class=\"booking-form__btn\">
                        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn\">{{'Отправить'|_}}</button>
                        <p>{{'Оставте заявку и <br> наш специалист <br> свяжется с Вами'|_}}</p>
                    </div>

                </form>

            </div>
            <div class=\"contacts__col\">
                <div class=\"title-wrap\">
                    <h2 class=\"title\">{{this.page.title}}</h2>
                </div>
                <div class=\"list-contacts list-contacts--dark\">
                    <ul>
                        <li>
                            <span><i class=\"icon-user\"></i></span>
                            <div>
                                <p>{{this.theme.contactPerson}}</p>
                            </div>
                        </li>
                        <li><span><i class=\"icon-marker\"></i></span>
                            {% for item in this.theme.addressRepeater %}
                            <div>
                                {{item.address|raw}}
                            </div>
                            {%endfor%}
                        </li>

                        <li>
                            <span><i class=\"icon-envelope\"></i></span>
                            {% for item in this.theme.emailRepeater %}
                            <div>
                                <a href=\"tel:{{item.email}}\">{{item.email}}</a>
                            </div>
                            {%endfor%}
                        </li>

                        <li>
                            <span>
                                <i class=\"icon-phone\"></i>
                            </span>
                            {% for item in this.theme.phoneRepeater %}
                            <div>
                                <a href=\"tel:{{item.phone}}\">{{item.phone}}
                                    <span class=\"messenger\">
                                        <i class=\"{{item.awesome_icon}}\"></i>
                                    </span>
                                </a>
                            </div>
                            {%endfor%}
                        </li>
                    </ul>

                </div>





            </div>
        </div>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/pages/contacts.htm", "");
    }
}
