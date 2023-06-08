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
class __TwigTemplate_c9f181102bffc19f6530067704dc6b57 extends Template
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
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "text", [], "any", false, false, false, 13), "html", null, true);
        echo "
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class=\"col-lg-4\">
                    <div class=\"text-container second\" >
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["section2"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  124 => 37,  116 => 35,  112 => 34,  105 => 33,  101 => 32,  95 => 28,  88 => 26,  84 => 22,  80 => 21,  73 => 20,  69 => 19,  60 => 13,  49 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\about\\index.html.twig");
    }
}
