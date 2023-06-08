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

/* head/index.html.twig */
class __TwigTemplate_72fef319b1df737d7da826a0610bcd1606b5ecf3f9ea8f12884dc44858c4caf2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "head/index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "  <!-- Header -->
  <header id=\"header\" class=\"header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"text-container\">
            <div id=\"carouselExampleControls\"
              class=\"carousel slide\"
              data-ride=\"carousel\">
              <div class=\"carousel-inner\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headinfo"]) || array_key_exists("headinfo", $context) ? $context["headinfo"] : (function () { throw new RuntimeError('Variable "headinfo" does not exist.', 12, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["head"]) {
            // line 13
            echo "                <!-- ifabfrage ob index = 0 ist, wenn ja wird beim ersten aufruf active beim ersten item gesetzt  -->
                  <div ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 14) == 0)) {
                echo " class=\"carousel-item active\" ";
            } else {
                echo " class=\"carousel-item\" ";
            }
            echo ">
                    <h1 class=\"h1-head\">
                      ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["head"], "text", [], "any", false, false, false, 16), "html", null, true);
            echo "
                    </h1>
                    <a class=\"btn-solid-lg page-scroll\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["head"], "link", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                      ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["head"], "linktext", [], "any", false, false, false, 19), "html", null, true);
            echo "
                    </a>
                    <a class=\"btn-outline-lg page-scroll\" href=\"#contact\">
                      <i class=\"fas fa-user\"></i>Contact Me
                    </a>
                  </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['head'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "              </div>
            </div>
          </div> <!-- end of text-container -->
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </header> <!-- end of header -->
  <!-- end of header -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "head/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 26,  104 => 19,  100 => 18,  95 => 16,  86 => 14,  83 => 13,  66 => 12,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
  <!-- Header -->
  <header id=\"header\" class=\"header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"text-container\">
            <div id=\"carouselExampleControls\"
              class=\"carousel slide\"
              data-ride=\"carousel\">
              <div class=\"carousel-inner\">
                {% for head in headinfo %}
                <!-- ifabfrage ob index = 0 ist, wenn ja wird beim ersten aufruf active beim ersten item gesetzt  -->
                  <div {% if loop.index0 == 0 %} class=\"carousel-item active\" {% else %} class=\"carousel-item\" {% endif %}>
                    <h1 class=\"h1-head\">
                      {{ head.text }}
                    </h1>
                    <a class=\"btn-solid-lg page-scroll\" href=\"{{ head.link }}\">
                      {{ head.linktext }}
                    </a>
                    <a class=\"btn-outline-lg page-scroll\" href=\"#contact\">
                      <i class=\"fas fa-user\"></i>Contact Me
                    </a>
                  </div>
                {% endfor %}
              </div>
            </div>
          </div> <!-- end of text-container -->
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </header> <!-- end of header -->
  <!-- end of header -->
{% endblock %}
", "head/index.html.twig", "/www/htdocs/w0182f8e/test.rene-marzulla.eu/templates/head/index.html.twig");
    }
}
