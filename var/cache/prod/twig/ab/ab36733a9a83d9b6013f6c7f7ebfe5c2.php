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

/* nav_bar/index.html.twig */
class __TwigTemplate_00623e56894dfd9b514fb8e33d66b16a extends Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg fixed-top navbar-dark\">
  <div class=\"container\">
    <!-- Image Logo -->
    <a class=\"navbar-brand logo-image\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"
      ><img src=\"images/logo.svg\" alt=\"alternative\"
    /></a>

    <!-- Text Logo - Use this if you don't have a graphic logo  -->
    <!-- <a class=\"navbar-brand logo-text page-scroll\" href=\"index.html\">Mark</a> -->
    ";
        // line 12
        echo "    <button
      class=\"navbar-toggler p-0 border-0\"
      type=\"button\"
      data-toggle=\"offcanvas\"
    >
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link page-scroll test\" href=\"#header\"
            >Home <span class=\"sr-only\">(current)</span></a
          >
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link page-scroll test\" href=\"#about\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link page-scroll test\" href=\"#skills\">Skills</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"nav-link page-scroll test\" > Impressum </a>
        </li>
        ";
        // line 39
        echo "      </ul>
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SocialController::social"));
        echo "
    </div>
    <!-- end of navbar-collapse -->
  </div>
  <!-- end of container -->
</nav>
<!-- end of navbar -->
<!-- end of navigation -->
";
    }

    public function getTemplateName()
    {
        return "nav_bar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  77 => 39,  52 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav_bar/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\nav_bar\\index.html.twig");
    }
}
