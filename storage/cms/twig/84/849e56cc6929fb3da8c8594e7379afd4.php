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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/site/footer.htm */
class __TwigTemplate_4f9d44aac91b3d9a0a5ecee6c5929615 extends Template
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
        echo "<footer class=\"footer\">
    <div class=\"footer__top\">
        <div class=\"container\">
            <div class=\"footer__wrap\">

                <div class=\"footer__col\">
                    <div class=\"logo\">
                        <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                            <img
                                src=\"";
        // line 10
        echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "logoFooter", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), 185, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
        echo "\">
                        </a>
                    </div>
                </div>
                <div class=\"footer__col\">
                    <div class=\"nav\">
                        ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/menu-footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "                    </div>
                </div>
                <div class=\"footer__col\">
                    <h3 class=\"footer__title\">";
        // line 20
        echo $this->env->getFilter('_')->getCallable()("Мы в соц. сетях");
        echo "</h3>
                    <div class=\"social social--white\">
                        <ul>
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 23), "social", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "                            <li>
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 25), "html", null, true);
            echo "\" target=\"_blank\">
                                    <i class=\"";
            // line 26
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 26), "html", null, true);
            echo "\"></i>
                                </a>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </ul>
                    </div>
                </div>
                <div class=\"footer__col\">
                    <h3 class=\"footer__title\">";
        // line 34
        echo $this->env->getFilter('_')->getCallable()("Контакты");
        echo "</h3>
                    <div class=\"list-contacts\">
                        <ul>
                            <li><span><i class=\"icon-marker\"></i></span>
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 38), "addressRepeater", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                                <div>
                                    ";
            // line 40
            echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "address", [], "any", false, false, false, 40);
            echo "
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </li>

                            <li>
                                <span><i class=\"icon-envelope\"></i></span>
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 47), "emailRepeater", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "                                <div>
                                    <a href=\"tel:";
            // line 49
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</a>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </li>

                            <li>
                                <span>
                                    <i class=\"icon-phone\"></i>
                                </span>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 58), "phoneRepeater", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "                                <div>
                                    <a href=\"tel:";
            // line 60
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 60), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 60), "html", null, true);
            echo "
                                        <span class=\"messenger\">
                                            <i class=\"";
            // line 62
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 62), "html", null, true);
            echo "\"></i>
                                        </span>
                                    </a>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer__bottom\">
        <p>© Copyright ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
        echo " ";
        echo $this->env->getFilter('_')->getCallable()("все права защищены");
        echo " </p>
    </div>

</footer>

<script src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scripts.min.js");
        echo "\"></script>

";
        // line 82
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 82) == "ru")) {
            // line 83
            echo "<script>

/* Russian (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Andrew Stromnov (stromnov@gmail.com). */
( function( factory ) {
\t\"use strict\";

\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
} )( function( datepicker ) {
\"use strict\";



datepicker.regional.ru = {
    closeText: \"Закрыть\",
\tprevText: \"Пред\",
\tnextText: \"След\",
\tcurrentText: \"Сегодня\",
\tmonthNames: [ \"Январь\", \"Февраль\", \"Март\", \"Апрель\", \"Май\", \"Июнь\",
\t\"Июль\", \"Август\", \"Сентябрь\", \"Октябрь\", \"Ноябрь\", \"Декабрь\" ],
\tmonthNamesShort: [ \"Янв\", \"Фев\", \"Мар\", \"Апр\", \"Май\", \"Июн\",
\t\"Июл\", \"Авг\", \"Сен\", \"Окт\", \"Ноя\", \"Дек\" ],
\tdayNames: [ \"воскресенье\", \"понедельник\", \"вторник\", \"среда\", \"четверг\", \"пятница\", \"суббота\" ],
\tdayNamesShort: [ \"вск\", \"пнд\", \"втр\", \"срд\", \"чтв\", \"птн\", \"сбт\" ],
\tdayNamesMin: [ \"Вс\", \"Пн\", \"Вт\", \"Ср\", \"Чт\", \"Пт\", \"Сб\" ],
\tweekHeader: \"Нед\",
\tdateFormat: \"dd.M.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ru );

return datepicker.regional.ru;

} );



</script>
";
        } else {
        }
        // line 133
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework-bundle'.($_minify ? '.min' : '').'.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework-extras.css">'.PHP_EOL;
        unset($_minify);
        // line 134
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('js');
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 134,  263 => 133,  211 => 83,  209 => 82,  204 => 80,  192 => 75,  182 => 67,  171 => 62,  164 => 60,  161 => 59,  157 => 58,  149 => 52,  138 => 49,  135 => 48,  131 => 47,  125 => 43,  116 => 40,  113 => 39,  109 => 38,  102 => 34,  96 => 30,  86 => 26,  82 => 25,  79 => 24,  75 => 23,  69 => 20,  64 => 17,  60 => 16,  51 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"footer__top\">
        <div class=\"container\">
            <div class=\"footer__wrap\">

                <div class=\"footer__col\">
                    <div class=\"logo\">
                        <a href=\"{{ 'home'|page }}\">
                            <img
                                src=\"{{ this.theme.logoFooter.path | resize(185, auto, { mode: 'crop', quality: '80', extension: 'webp'}) }}\">
                        </a>
                    </div>
                </div>
                <div class=\"footer__col\">
                    <div class=\"nav\">
                        {% partial 'site/menu-footer' %}
                    </div>
                </div>
                <div class=\"footer__col\">
                    <h3 class=\"footer__title\">{{ 'Мы в соц. сетях'|_ }}</h3>
                    <div class=\"social social--white\">
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
                <div class=\"footer__col\">
                    <h3 class=\"footer__title\">{{ 'Контакты'|_ }}</h3>
                    <div class=\"list-contacts\">
                        <ul>
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
    </div>
    <div class=\"footer__bottom\">
        <p>© Copyright {{ 'now' | date('Y') }} {{this.theme.name}} {{ 'все права защищены'|_ }} </p>
    </div>

</footer>

<script src=\"{{ 'assets/scripts.min.js'|theme }}\"></script>

{% if this.locale == 'ru' %}
<script>

/* Russian (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Andrew Stromnov (stromnov@gmail.com). */
( function( factory ) {
\t\"use strict\";

\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
} )( function( datepicker ) {
\"use strict\";



datepicker.regional.ru = {
    closeText: \"Закрыть\",
\tprevText: \"Пред\",
\tnextText: \"След\",
\tcurrentText: \"Сегодня\",
\tmonthNames: [ \"Январь\", \"Февраль\", \"Март\", \"Апрель\", \"Май\", \"Июнь\",
\t\"Июль\", \"Август\", \"Сентябрь\", \"Октябрь\", \"Ноябрь\", \"Декабрь\" ],
\tmonthNamesShort: [ \"Янв\", \"Фев\", \"Мар\", \"Апр\", \"Май\", \"Июн\",
\t\"Июл\", \"Авг\", \"Сен\", \"Окт\", \"Ноя\", \"Дек\" ],
\tdayNames: [ \"воскресенье\", \"понедельник\", \"вторник\", \"среда\", \"четверг\", \"пятница\", \"суббота\" ],
\tdayNamesShort: [ \"вск\", \"пнд\", \"втр\", \"срд\", \"чтв\", \"птн\", \"сбт\" ],
\tdayNamesMin: [ \"Вс\", \"Пн\", \"Вт\", \"Ср\", \"Чт\", \"Пт\", \"Сб\" ],
\tweekHeader: \"Нед\",
\tdateFormat: \"dd.M.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ru );

return datepicker.regional.ru;

} );



</script>
{%else %}
{%endif %}
{% framework extras turbo %}
{% scripts %}", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/site/footer.htm", "");
    }
}
