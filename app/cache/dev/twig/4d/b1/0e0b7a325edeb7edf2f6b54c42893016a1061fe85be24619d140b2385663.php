<?php

/* ::nav.html.twig */
class __TwigTemplate_4db10e0b7a325edeb7edf2f6b54c42893016a1061fe85be24619d140b2385663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<nav class=\"navbar navbar-default\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\">TheRahaSite</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">

        <li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("raha_home_homepage");
        echo "\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("raha_about");
        echo "\">About</a></li>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("raha_contact");
        echo "\">Contact</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Page<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">Article</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>
";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  43 => 17,  38 => 15,  34 => 14,  19 => 1,);
    }
}
