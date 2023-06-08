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

/* nav_bar_imprint/index.html.twig */
class __TwigTemplate_29597fa61ec51143c70ea3589d584660 extends Template
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
        echo "   
    
   
   <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg fixed-top navbar-dark\">
        <div class=\"container\">
            
            <!-- Image Logo -->
            <a class=\"navbar-brand logo-image\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"images/logo.svg\" alt=\"alternative\"></a>  
            <!-- Text Logo - Use this if you don't have a graphic logo  -->
            <!-- <a class=\"navbar-brand logo-text page-scroll\" href=\"index.html\">Mark</a> -->
            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link page-scroll test\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Back <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SocialController::social"));
        echo "
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
";
    }

    public function getTemplateName()
    {
        return "nav_bar_imprint/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  59 => 18,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav_bar_imprint/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\nav_bar_imprint\\index.html.twig");
    }
}
