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
class __TwigTemplate_3fecdd36e395b3d34928fbb0b02771af extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "social/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
", "social/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\social\\index.html.twig");
    }
}
