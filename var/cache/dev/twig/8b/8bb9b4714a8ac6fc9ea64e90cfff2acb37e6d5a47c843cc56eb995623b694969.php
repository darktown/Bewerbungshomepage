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

/* footer/index.html.twig */
class __TwigTemplate_86f374a29048b0d7958bab132371c135b6065431ab225dcaae96310113f63d62 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/index.html.twig"));

        // line 1
        echo "       <!-- Footer -->
    <div class=\"footer bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SocialController::social"));
        echo "
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class=\"copyright bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p class=\"p-small\">Copyright © <a class=\"no-line\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Rene Pirzkall</a> | 
                    <a class=\"no-line\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impressum");
        echo "\">Impressum</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p class=\"p-small\">Distributed By <a class=\"no-line\" href=\"https://themewagon.com/\">Themewagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
        
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap framework -->
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script> <!-- Custom scripts -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  96 => 40,  92 => 39,  88 => 38,  67 => 20,  63 => 19,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("       <!-- Footer -->
    <div class=\"footer bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                {{render(controller('App\\\\Controller\\\\SocialController::social'))}}
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class=\"copyright bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p class=\"p-small\">Copyright © <a class=\"no-line\" href=\"{{ path('home') }}\">Rene Pirzkall</a> | 
                    <a class=\"no-line\" href=\"{{path('impressum')}}\">Impressum</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p class=\"p-small\">Distributed By <a class=\"no-line\" href=\"https://themewagon.com/\">Themewagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
        
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    
    <script src=\"{{asset('js/jquery.min.js')}}\"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src=\"{{asset('js/bootstrap.min.js')}}\"></script> <!-- Bootstrap framework -->
    <script src=\"{{asset('js/jquery.easing.min.js')}}\"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src=\"{{asset('js/scripts.js')}}\"></script> <!-- Custom scripts -->", "footer/index.html.twig", "C:\\MAMP\\htdocs\\rene\\templates\\footer\\index.html.twig");
    }
}
