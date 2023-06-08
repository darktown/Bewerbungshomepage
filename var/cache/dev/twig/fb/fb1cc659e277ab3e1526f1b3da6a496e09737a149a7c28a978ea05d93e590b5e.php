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

/* csv/index.html.twig */
class __TwigTemplate_22a757c058b2b9ae011790f201da14d47d04f8896b3278ce52354f415e58474c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "csv/index.html.twig"));

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
        echo "
<!-- About-->
<div id=\"about\" class=\"basic-1 bg-gray\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"text-container first\">
          <h2>Lebenslauf</h2>
        </div>
        <!-- end of text-container -->
      </div>
      <!-- end of col -->
      <div class=\"col-lg-8\">
        <div class=\"text-container second\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["csv"]) || array_key_exists("csv", $context) ? $context["csv"] : (function () { throw new RuntimeError('Variable "csv" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lebenslaufitem"]) {
            // line 17
            echo "          <div class=\"sec col-lg-6\">
            <div class=\"time\">
              ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslaufitem"], "datebegin", [], "any", false, false, false, 19), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslaufitem"], "dateend", [], "any", false, false, false, 19), "html", null, true);
            echo "
            </div>
            <h6>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslaufitem"], "firma", [], "any", false, false, false, 21), "html", null, true);
            echo "</h6>
            <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslaufitem"], "info", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
            ";
            // line 28
            echo "          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lebenslaufitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>
        <!-- end of text-container -->
      </div>
      <!-- end of col -->
      ";
        // line 54
        echo "
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of basic-1 -->
<!-- end of about -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "csv/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  100 => 30,  93 => 28,  89 => 22,  85 => 21,  78 => 19,  74 => 17,  70 => 16,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

<!-- About-->
<div id=\"about\" class=\"basic-1 bg-gray\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"text-container first\">
          <h2>Lebenslauf</h2>
        </div>
        <!-- end of text-container -->
      </div>
      <!-- end of col -->
      <div class=\"col-lg-8\">
        <div class=\"text-container second\">
          {% for lebenslaufitem in csv %}
          <div class=\"sec col-lg-6\">
            <div class=\"time\">
              {{ lebenslaufitem.datebegin }} - {{ lebenslaufitem.dateend }}
            </div>
            <h6>{{ lebenslaufitem.firma }}</h6>
            <p>{{ lebenslaufitem.info }}</p>
            {#
            <div class=\"time\">2018 - 2019</div>
            <h6>Lead Web Developer</h6>
            <p>Beautiful project for a major digital agency</p>
            #}
          </div>
          {% endfor %}
        </div>
        <!-- end of text-container -->
      </div>
      <!-- end of col -->
      {#
      <div class=\"col-lg-4\">
        <div class=\"text-container third\">
          {% for lebenslauf2 in csv2 %}
          <div class=\"time\">
            {{ lebenslauf2.datebegin }} - {{ lebenslauf2.dateend }}
          </div>
          <h6>{{ lebenslauf2.firma }}</h6>
          <p>{{ lebenslauf2.info }}</p>
          {% endfor %} {#
          <div class=\"time\">2017 - 2018</div>
          <h6>Senior Web Designer</h6>
          <p>Inhouse web designer for ecommerce firm</p>
          <div class=\"time\">2016 - 2017</div>
          <h6>Junior Web Designer</h6>
          <p>Junior web designer for small web agency</p>
        </div>
        <!-- end of text-container -->
      </div>
      #}

      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of basic-1 -->
<!-- end of about -->

{% endblock %}
", "csv/index.html.twig", "/www/htdocs/w0182f8e/test.rene-marzulla.eu/templates/csv/index.html.twig");
    }
}
