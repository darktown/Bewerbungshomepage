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

/* header/index.html.twig */
class __TwigTemplate_cebf25e6cdedf44b6e0fe516b2bd22866517ab45f857264152cc91a8d2afa1fd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

        // line 1
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <!-- SEO Meta Tags -->
    <meta name=\"description\" content=\"Your description\">
    <meta name=\"author\" content=\"Your name\">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
\t<meta property=\"og:site_name\" content=\"\" /> <!-- website name -->
\t<meta property=\"og:site\" content=\"\" /> <!-- website link -->
\t<meta property=\"og:title\" content=\"\"/> <!-- title shown in the actual shared post -->
\t<meta property=\"og:description\" content=\"\" /> <!-- description shown in the actual shared post -->
\t<meta property=\"og:image\" content=\"\" /> <!-- image link, make sure it's jpg -->
\t<meta property=\"og:url\" content=\"\" /> <!-- where do you want your post to link to -->
\t<meta name=\"twitter:card\" content=\"summary_large_image\"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Rene´s Page</title>
    
    <!-- Styles -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t
\t<!-- Favicon  -->
    <link rel=\"icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  72 => 25,  68 => 24,  64 => 23,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <!-- SEO Meta Tags -->
    <meta name=\"description\" content=\"Your description\">
    <meta name=\"author\" content=\"Your name\">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
\t<meta property=\"og:site_name\" content=\"\" /> <!-- website name -->
\t<meta property=\"og:site\" content=\"\" /> <!-- website link -->
\t<meta property=\"og:title\" content=\"\"/> <!-- title shown in the actual shared post -->
\t<meta property=\"og:description\" content=\"\" /> <!-- description shown in the actual shared post -->
\t<meta property=\"og:image\" content=\"\" /> <!-- image link, make sure it's jpg -->
\t<meta property=\"og:url\" content=\"\" /> <!-- where do you want your post to link to -->
\t<meta name=\"twitter:card\" content=\"summary_large_image\"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Rene´s Page</title>
    
    <!-- Styles -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap\" rel=\"stylesheet\">
    <link href=\"{{asset('css/bootstrap.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('css/fontawesome-all.css')}}\" rel=\"stylesheet\">
\t<link href=\"{{asset('css/styles.css')}}\" rel=\"stylesheet\">
\t
\t<!-- Favicon  -->
    <link rel=\"icon\" href=\"{{asset('images/favicon.png')}}\">", "header/index.html.twig", "C:\\MAMP\\htdocs\\rene\\templates\\header\\index.html.twig");
    }
}
