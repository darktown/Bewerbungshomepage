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
class __TwigTemplate_110680356f280ad6c6fc75dd3746095c extends Template
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
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        
        ";
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
        return array (  80 => 13,  76 => 12,  70 => 16,  67 => 15,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  53 => 8,  49 => 7,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\rene\\templates\\base.html.twig");
    }
}
