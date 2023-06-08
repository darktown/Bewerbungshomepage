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

/* base.html.twig */
class __TwigTemplate_0435dd1bb8dc6ba814179965b337b925a24643043c591009025b88eee04d0f2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
       ";
        // line 4
        $this->loadTemplate("/header/index.html.twig", "base.html.twig", 4)->display($context);
        echo " 
    </head>
    <body>
        ";
        // line 7
        if (array_key_exists("impressum", $context)) {
            echo " 
        ";
            // line 8
            $this->loadTemplate("/nav_bar_imprint/index.html.twig", "base.html.twig", 8)->display($context);
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "        ";
            $this->loadTemplate("/nav_bar/index.html.twig", "base.html.twig", 10)->display($context);
            // line 11
            echo "        ";
        }
        // line 12
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->loadTemplate("/footer/index.html.twig", "base.html.twig", 15)->display($context);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  82 => 12,  73 => 16,  70 => 15,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  52 => 7,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
       {% include \"/header/index.html.twig\" %} 
    </head>
    <body>
        {% if impressum is defined %} 
        {% include \"/nav_bar_imprint/index.html.twig\" %}
            {% else %}
        {% include \"/nav_bar/index.html.twig\" %}
        {% endif %}
        {% block body %}
        
        {% endblock %}
        {% include \"/footer/index.html.twig\" %}
    </body>
</html>
", "base.html.twig", "C:\\MAMP\\htdocs\\rene\\templates\\base.html.twig");
    }
}
