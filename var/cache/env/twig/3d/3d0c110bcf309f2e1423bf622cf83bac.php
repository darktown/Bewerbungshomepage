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

/* /nav_bar/index.html.twig */
class __TwigTemplate_c3c692b2c563ff42d9e8f84aae4fa222 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nav_bar/index.html.twig"));

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
          <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal_pro\" class=\"nav-link page-scroll test\" > Projekte </a>
        </li>
        <li class=\"nav-item\">
          <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"nav-link page-scroll test\" > Impressum </a>
        </li>
        ";
        // line 42
        echo "      </ul>
      ";
        // line 43
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "/nav_bar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 43,  83 => 42,  55 => 12,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg fixed-top navbar-dark\">
  <div class=\"container\">
    <!-- Image Logo -->
    <a class=\"navbar-brand logo-image\" href=\"{{ path('home') }}\"
      ><img src=\"images/logo.svg\" alt=\"alternative\"
    /></a>

    <!-- Text Logo - Use this if you don't have a graphic logo  -->
    <!-- <a class=\"navbar-brand logo-text page-scroll\" href=\"index.html\">Mark</a> -->
    {# TODO: Link zum Adminmenu #}
    <button
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
          <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal_pro\" class=\"nav-link page-scroll test\" > Projekte </a>
        </li>
        <li class=\"nav-item\">
          <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"nav-link page-scroll test\" > Impressum </a>
        </li>
        {# <li class=\"nav-item\">
          <a class=\"nav-link page-scroll test\" href=\"\">Contact</a>
        
        </li> #}
      </ul>
      {{ render(controller(\"App\\\\Controller\\\\SocialController::social\")) }}
    </div>
    <!-- end of navbar-collapse -->
  </div>
  <!-- end of container -->
</nav>
<!-- end of navbar -->
<!-- end of navigation -->
", "/nav_bar/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\nav_bar\\index.html.twig");
    }
}
