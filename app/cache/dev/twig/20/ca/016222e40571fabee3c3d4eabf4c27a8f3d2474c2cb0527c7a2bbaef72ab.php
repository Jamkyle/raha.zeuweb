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
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - TheRahaSite</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pinanobootstrap3/css/bootstrap.min.css"), "html", null, true);
        echo "\"/ >
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/raha.css"), "html", null, true);
        echo "\"/ >
        <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <section class=\"container\">
        ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('nav', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('carousel', $context, $blocks);
        // line 18
        echo "            <section class=\"main-col\">
           
                ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 23
        $this->displayBlock('sidebar', $context, $blocks);
        // line 24
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "            </div>
            
            
            ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "            <script src=\"//code.jquery.com/jquery.min.js\"></script>
            <script src=\"";
        // line 35
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
        </section>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $this->env->loadTemplate("::head.html.twig")->display($context);
    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $this->env->loadTemplate("::nav.html.twig")->display($context);
    }

    // line 17
    public function block_carousel($context, array $blocks = array())
    {
        $this->env->loadTemplate("::carousel.html.twig")->display($context);
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "                  Copyright - Raha
                ";
    }

    // line 33
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
        return array (  159 => 33,  154 => 28,  151 => 27,  146 => 23,  141 => 20,  135 => 17,  129 => 16,  123 => 15,  118 => 10,  113 => 5,  95 => 35,  92 => 34,  90 => 33,  85 => 30,  83 => 27,  78 => 24,  76 => 23,  72 => 21,  70 => 20,  66 => 18,  63 => 17,  60 => 16,  58 => 15,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
