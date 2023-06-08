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

/* about/index.html.twig */
class __TwigTemplate_486f09a29778216415991303555edecd44390e1eb0e30b359620e906b3b91983 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- About-->
    <div id=\"about\" class=\"basic-1 bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"text-container first\">
                        <h2>Hi ich bin Rene</h2>
                        <p>
                            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 13, $this->source); })()), "text", [], "any", false, false, false, 13), "html", null, true);
        echo "
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class=\"col-lg-4\">
                    <div class=\"text-container second\" >
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lebenslaufitem"]) {
            // line 20
            echo "                        <div class=\"time\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslaufitem"], "datebegin", [], "any", false, false, false, 20), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslaufitem"], "dateend", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                        <h6>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslaufitem"], "firma", [], "any", false, false, false, 21), "html", null, true);
            echo "</h6>
                        <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslaufitem"], "info", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                        ";
            // line 26
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lebenslaufitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class=\"col-lg-4\">
                    <div class=\"text-container third\">
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["section2"]) || array_key_exists("section2", $context) ? $context["section2"] : (function () { throw new RuntimeError('Variable "section2" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lebenslauf2"]) {
            // line 33
            echo "                        <div class=\"time\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslauf2"], "datebegin", [], "any", false, false, false, 33), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslauf2"], "dateend", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
                        <h6>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslauf2"], "firma", [], "any", false, false, false, 34), "html", null, true);
            echo "</h6>
                        <p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lebenslauf2"], "info", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lebenslauf2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        ";
        // line 43
        echo "                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 43,  133 => 37,  125 => 35,  121 => 34,  114 => 33,  110 => 32,  104 => 28,  97 => 26,  93 => 22,  89 => 21,  82 => 20,  78 => 19,  69 => 13,  58 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}

    <!-- About-->
    <div id=\"about\" class=\"basic-1 bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"text-container first\">
                        <h2>Hi ich bin Rene</h2>
                        <p>
                            {{section.text}}
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class=\"col-lg-4\">
                    <div class=\"text-container second\" >
                        {% for lebenslaufitem in test %}
                        <div class=\"time\">{{lebenslaufitem.datebegin}} - {{lebenslaufitem.dateend}}</div>
                        <h6>{{lebenslaufitem.firma}}</h6>
                        <p>{{lebenslaufitem.info}}</p>
                        {# <div class=\"time\">2018 - 2019</div>
                        <h6>Lead Web Developer</h6>
                        <p>Beautiful project for a major digital agency</p> #}

                        {% endfor %}
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class=\"col-lg-4\">
                    <div class=\"text-container third\">
                        {% for lebenslauf2 in section2 %}
                        <div class=\"time\">{{lebenslauf2.datebegin}} - {{lebenslauf2.dateend}}</div>
                        <h6>{{lebenslauf2.firma}}</h6>
                        <p>{{lebenslauf2.info}}</p>
                        {% endfor %}
                        {# <div class=\"time\">2017 - 2018</div>
                        <h6>Senior Web Designer</h6>
                        <p>Inhouse web designer for ecommerce firm</p>
                        <div class=\"time\">2016 - 2017</div>
                        <h6>Junior Web Designer</h6>
                        <p>Junior web designer for small web agency</p> #}
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->


{% endblock %}
", "about/index.html.twig", "C:\\MAMP\\htdocs\\rene\\templates\\about\\index.html.twig");
    }
}
