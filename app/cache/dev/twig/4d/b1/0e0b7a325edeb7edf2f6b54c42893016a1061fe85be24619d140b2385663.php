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
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#raha-navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">TheRahaSite</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"raha-navbar-collapse\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("raha_home_homepage");
        echo "\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("raha_about");
        echo "\">About</a></li>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("raha_contact");
        echo "\">Contact</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Page<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 26
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
        return array (  55 => 26,  48 => 22,  43 => 20,  39 => 19,  19 => 1,);
    }
}
