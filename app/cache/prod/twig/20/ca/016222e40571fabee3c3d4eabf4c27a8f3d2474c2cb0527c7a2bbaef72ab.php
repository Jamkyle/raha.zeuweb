<?php

/* ::base.html.twig */
class __TwigTemplate_20ca016222e40571fabee3c3d4eabf4c27a8f3d2474c2cb0527c7a2bbaef72ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'carousel' => array($this, 'block_carousel'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <header>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Raha</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pinanobootstrap3/css/bootstrap.min.css"), "html", null, true);
        echo "\"/ >
        <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </header>
    <body>
        ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('carousel', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pinanobootstrap3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
             <script type=\"text/javascript\">
            !function (\$) {
            var \$window = \$(window)

            \$(document).ready(function() {
            \$('.carousel').carousel();
            });
            } (window.jQuery)
        </script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $this->env->loadTemplate("::head.html.twig")->display($context);
    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $this->env->loadTemplate("::nav.html.twig")->display($context);
    }

    // line 15
    public function block_carousel($context, array $blocks = array())
    {
        $this->env->loadTemplate("::carousel.html.twig")->display($context);
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 17,  113 => 16,  107 => 15,  101 => 14,  95 => 13,  90 => 9,  85 => 5,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  53 => 14,  51 => 13,  44 => 10,  42 => 9,  36 => 6,  32 => 5,  26 => 1,  38 => 4,  35 => 3,  29 => 2,);
    }
}
