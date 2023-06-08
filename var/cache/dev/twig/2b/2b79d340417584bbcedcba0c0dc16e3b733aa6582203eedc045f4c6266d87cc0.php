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

/* /nav_bar_imprint/index.html.twig */
class __TwigTemplate_5b9ab7deb9f4abe740f13709b3a514504f9f73590a6a8ce071c035946a47071f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav_bar_imprint/index.html.twig"));

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
                ";
        // line 14
        echo "            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link page-scroll test\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Back <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SocialController::social"));
        echo "
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/nav_bar_imprint/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  65 => 20,  57 => 14,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("   
    
   
   <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg fixed-top navbar-dark\">
        <div class=\"container\">
            
            <!-- Image Logo -->
            <a class=\"navbar-brand logo-image\" href=\"{{ path('home') }}\"><img src=\"images/logo.svg\" alt=\"alternative\"></a>  

            <!-- Text Logo - Use this if you don't have a graphic logo  -->
            <!-- <a class=\"navbar-brand logo-text page-scroll\" href=\"index.html\">Mark</a> -->
                {# TODO: Link zum Adminmenu   #}
            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link page-scroll test\" href=\"{{ path('home') }}\">Back <span class=\"sr-only\">(current)</span></a>
                    </li>
                </ul>
                {{render(controller('App\\\\Controller\\\\SocialController::social'))}}
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
", "/nav_bar_imprint/index.html.twig", "C:\\MAMP\\htdocs\\rene\\templates\\nav_bar_imprint\\index.html.twig");
    }
}
