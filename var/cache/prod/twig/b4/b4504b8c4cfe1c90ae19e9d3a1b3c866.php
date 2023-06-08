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
class __TwigTemplate_3c855e6ef15a9e6059fa0e4d114c67ff extends Template
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
        echo "\"></script> <!-- Custom scripts -->
";
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
        return array (  97 => 41,  93 => 40,  89 => 39,  85 => 38,  64 => 20,  60 => 19,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\footer\\index.html.twig");
    }
}
