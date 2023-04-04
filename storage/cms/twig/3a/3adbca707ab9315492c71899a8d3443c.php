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

/* C:\work\OSPanel\domains\mongu\themes/cbt-karakol/partials/GA4-body.htm */
class __TwigTemplate_33a54608399350fd052b6fa6f3206a93 extends Template
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
        echo "<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-W2Z7BJV\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/GA4-body.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-W2Z7BJV\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->", "C:\\work\\OSPanel\\domains\\mongu\\themes/cbt-karakol/partials/GA4-body.htm", "");
    }
}
