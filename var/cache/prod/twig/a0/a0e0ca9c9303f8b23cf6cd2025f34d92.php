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
class __TwigTemplate_5571e86e76458a1a26bb10fcd03b9239 extends Template
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
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
  <div class=\"social-container\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "social/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  64 => 9,  59 => 7,  56 => 6,  52 => 5,  48 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "social/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\social\\index.html.twig");
    }
}
