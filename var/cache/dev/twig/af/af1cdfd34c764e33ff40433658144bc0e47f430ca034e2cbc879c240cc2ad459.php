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
class __TwigTemplate_25af4d7e3258bc773758dff0057435bc19ac849333e7c659baa5509a4c65f8fe extends Template
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
        echo "<!-- Details -->
<div id=\"skills\" class=\"split\">
  <div class=\"area-1\"></div>
  <!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
  <div class=\"area-2 bg-gray\">
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 18
            echo "                  <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "skill", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                  <div class=\"progress-outer\">
                    <div class=\"progress\">
                      <div
                        class=\"progress-bar progress-bar-success progress-bar-striped active\"
                        style=\"width:";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 24
$context["skill"], "percent", [], "any", false, false, false, 24), "html", null, true);
            // line 25
            echo "%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);\"
                      ></div>
                      <div class=\"progress-value\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "percent", [], "any", false, false, false, 27), "html", null, true);
            echo "%</div>
                    </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>
              </div>
            </div>
            <div class=\"icons-container\">
              <h2>Eingesetzte Programme</h2>
              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment("programm");
        echo "
            </div>
            <!-- end of icons-container -->
          </div>
          <!-- end of text-container -->
          <!-- end of text container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of area-2 -->
</div>
<!-- end of split -->
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
        return array (  108 => 36,  101 => 31,  91 => 27,  87 => 25,  85 => 24,  84 => 23,  75 => 18,  71 => 17,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<!-- Details -->
<div id=\"skills\" class=\"split\">
  <div class=\"area-1\"></div>
  <!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
  <div class=\"area-2 bg-gray\">
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
                  <h5>{{ skill.skill }}</h5>
                  <div class=\"progress-outer\">
                    <div class=\"progress\">
                      <div
                        class=\"progress-bar progress-bar-success progress-bar-striped active\"
                        style=\"width:{{
                          skill.percent
                        }}%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);\"
                      ></div>
                      <div class=\"progress-value\">{{ skill.percent }}%</div>
                    </div>
                  </div>
                  {% endfor %}
                </div>
              </div>
            </div>
            <div class=\"icons-container\">
              <h2>Eingesetzte Programme</h2>
              {{ render(\"programm\") }}
            </div>
            <!-- end of icons-container -->
          </div>
          <!-- end of text-container -->
          <!-- end of text container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of area-2 -->
</div>
<!-- end of split -->
<!-- end of details -->
{% endblock %}
", "skills/index.html.twig", "/www/htdocs/w0182f8e/test.rene-marzulla.eu/templates/skills/index.html.twig");
    }
}
