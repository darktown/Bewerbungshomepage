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

/* @FMElfinder/Elfinder/helper/_tinymce5.html.twig */
class __TwigTemplate_600454202d31d8b02c58a409a9e15569f2d4c59541a637e234e97962850da823 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/helper/_tinymce5.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
(function() {
    const mceElf = new tinymceElfinder({
        // connector URL (Use elFinder Demo site's connector for this demo)
        url: \"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("elfinder", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 5, $this->source); })())]), "html", null, true);
        echo "\",
        nodeId: 'elfinder'
    });
})();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/_tinymce5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
(function() {
    const mceElf = new tinymceElfinder({
        // connector URL (Use elFinder Demo site's connector for this demo)
        url: \"{{ url('elfinder', {'instance': instance}) }}\",
        nodeId: 'elfinder'
    });
})();
</script>
", "@FMElfinder/Elfinder/helper/_tinymce5.html.twig", "C:\\MAMP\\htdocs\\rene\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Resources\\views\\Elfinder\\helper\\_tinymce5.html.twig");
    }
}
