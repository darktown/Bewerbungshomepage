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

/* skills/index.html.twig */
class __TwigTemplate_a3a60a100a0b2ab2cdde270a9b20a58b91cfa65fdcf7f30df971cc228c904af9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skills/index.html.twig"));

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
        echo "  <!-- Details -->
\t<div id=\"skills\" class=\"split\">
\t\t<div class=\"area-1\">
\t\t</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class=\"area-2 bg-gray\">
            <div class=\"container\">    
                <div class=\"row\">
                    <div class=\"col-lg-12\">     
                        
                        <!-- Text Container -->
                        <div class=\"text-container\">
                            <h2>Why Work With Me</h2>
                           
                            
                            <div class=\"container\">
                                    <div class=\"row\">
                                    <div class=\"col-12\">
                                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 19
            echo "                                        <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "skill", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
                                        <div class=\"progress-outer\">
                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-success progress-bar-striped active\" style=\"width:";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "percent", [], "any", false, false, false, 22), "html", null, true);
            echo "%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);\"></div>
                                                <div class=\"progress-value\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "percent", [], "any", false, false, false, 23), "html", null, true);
            echo "%</div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                                    </div>
                                    
                                   ";
        // line 44
        echo "                                    </div>
                                </div>
                            <div class=\"icons-container\">
                            <h2> Eingesetzte Programme </h2>
                                <img src=\"images/details-icon-photoshop.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-illustrator.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-html.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-css.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-bootstrap.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-javascript.png\" alt=\"alternative\">
                            </div> <!-- end of icons-container -->
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
\t\t</div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "skills/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  97 => 27,  87 => 23,  83 => 22,  76 => 19,  72 => 18,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
  <!-- Details -->
\t<div id=\"skills\" class=\"split\">
\t\t<div class=\"area-1\">
\t\t</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class=\"area-2 bg-gray\">
            <div class=\"container\">    
                <div class=\"row\">
                    <div class=\"col-lg-12\">     
                        
                        <!-- Text Container -->
                        <div class=\"text-container\">
                            <h2>Why Work With Me</h2>
                           
                            
                            <div class=\"container\">
                                    <div class=\"row\">
                                    <div class=\"col-12\">
                                    {% for skill in skills %}
                                        <h5>{{skill.skill}}</h5>
                                        <div class=\"progress-outer\">
                                            <div class=\"progress\">
                                                <div class=\"progress-bar progress-bar-success progress-bar-striped active\" style=\"width:{{ skill.percent }}%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);\"></div>
                                                <div class=\"progress-value\">{{skill.percent}}%</div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                    </div>
                                    
                                   {#  
                                        <div class=\"col-md-3 col-sm-6 test\">
                                            <h4 class=\"text-center\">{{skill.skill}}</h4>

                                            <div class=\"progress {{ skill.color }}\">
                                                <span class=\"progress-left\" >
                                                    <span class=\"progress-bar\"></span>
                                                </span>
                                                <span class=\"progress-right\">
                                                    <span class=\"progress-bar\"></span>
                                                </span>
                                                <div class=\"progress-value\">30%</div>
                                            </div>
                                        </div>
                                     #}
                                    </div>
                                </div>
                            <div class=\"icons-container\">
                            <h2> Eingesetzte Programme </h2>
                                <img src=\"images/details-icon-photoshop.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-illustrator.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-html.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-css.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-bootstrap.png\" alt=\"alternative\">
                                <img src=\"images/details-icon-javascript.png\" alt=\"alternative\">
                            </div> <!-- end of icons-container -->
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
\t\t</div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->
 {% endblock %}
", "skills/index.html.twig", "C:\\MAMP\\htdocs\\rene\\templates\\skills\\index.html.twig");
    }
}
