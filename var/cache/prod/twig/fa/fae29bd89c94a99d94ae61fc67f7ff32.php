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
class __TwigTemplate_9036b4e958b9e350ddf7e1af56740eea extends Template
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
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["csv"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "csv/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 54,  91 => 30,  84 => 28,  80 => 22,  76 => 21,  69 => 19,  65 => 17,  61 => 16,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "csv/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\csv\\index.html.twig");
    }
}
