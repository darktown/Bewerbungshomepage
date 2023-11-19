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

/* projekte/index.html.twig */
class __TwigTemplate_3437bb436f6b77e53ac903bdccd385ac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projekte/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"modal fade \" id=\"myModal_pro\">
            <div class=\"modal-dialog modal-xl\">
              <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\">
                  <h4 class=\"modal-title\">Projekte</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\">
                <div class=\"row\">
                  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pro"]) || array_key_exists("pro", $context) ? $context["pro"] : (function () { throw new RuntimeError('Variable "pro" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projekte"]) {
            // line 18
            echo "                    <div class=\"col-sm-4\">
                        <div class=\"card h-100\" >
                                <img src=\"images/prg/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projekte"], "image", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projekte"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</h5>
                                    <p class=\"card-text\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["projekte"], "beschreibung", [], "any", false, false, false, 23);
            echo "</p>
                                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                   
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projekte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " 
                </div>
                </div>
            

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>

              </div>
            </div>
          </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "projekte/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  90 => 23,  86 => 22,  81 => 20,  77 => 18,  73 => 17,  58 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}
<div class=\"modal fade \" id=\"myModal_pro\">
            <div class=\"modal-dialog modal-xl\">
              <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\">
                  <h4 class=\"modal-title\">Projekte</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\">
                <div class=\"row\">
                  {% for projekte in pro %}
                    <div class=\"col-sm-4\">
                        <div class=\"card h-100\" >
                                <img src=\"images/prg/{{ projekte.image }}\" class=\"card-img-top\" alt=\"...\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{projekte.name}}</h5>
                                    <p class=\"card-text\">{{projekte.beschreibung | raw}}</p>
                                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                   
                  {% endfor %} 
                </div>
                </div>
            

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>

              </div>
            </div>
          </div>
{% endblock %}
", "projekte/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\projekte\\index.html.twig");
    }
}
