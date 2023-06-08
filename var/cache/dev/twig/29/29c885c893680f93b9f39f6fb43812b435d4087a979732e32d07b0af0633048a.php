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

/* social/index.html.twig */
class __TwigTemplate_03f5113daeff6c04cd691fbb3132a7ccb512be52b5c85f8f65015fc7ef7e224b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "social/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
  <div class=\"social-container\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socials"]) || array_key_exists("socials", $context) ? $context["socials"] : (function () { throw new RuntimeError('Variable "socials" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 6
            echo "    <span class=\"fa-stack\">
      <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
        <i class=\"fas fa-circle fa-stack-2x\"></i>
        <i class=\" ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 9), "html", null, true);
            echo " fa-stack-1x\"></i>
      </a>
    </span>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "social/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  73 => 9,  68 => 7,  65 => 6,  61 => 5,  57 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}

  <div class=\"social-container\">
  {% for social in socials %}
    <span class=\"fa-stack\">
      <a href=\"{{ social.link }}\">
        <i class=\"fas fa-circle fa-stack-2x\"></i>
        <i class=\" {{ social.icon }} fa-stack-1x\"></i>
      </a>
    </span>
  {% endfor %}
  </div>
{% endblock %}
", "social/index.html.twig", "/www/htdocs/w0182f8e/test.rene-marzulla.eu/templates/social/index.html.twig");
    }
}
