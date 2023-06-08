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
class __TwigTemplate_38155800d9f62f0226619c0f2da79c91 extends Template
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
        $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "skills/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  92 => 31,  82 => 27,  78 => 25,  76 => 24,  75 => 23,  66 => 18,  62 => 17,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "skills/index.html.twig", "C:\\wamp64\\www\\rene\\templates\\skills\\index.html.twig");
    }
}
