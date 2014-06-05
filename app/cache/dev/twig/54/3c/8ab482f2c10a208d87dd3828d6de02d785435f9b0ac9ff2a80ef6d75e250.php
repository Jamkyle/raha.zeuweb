<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_543c8ab482f2c10a208d87dd3828d6de02d785435f9b0ac9ff2a80ef6d75e250 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  57 => 27,  54 => 26,  33 => 16,  27 => 14,  24 => 13,  22 => 12,  19 => 11,  59 => 26,  56 => 25,  48 => 21,  45 => 20,  42 => 19,  36 => 16,  31 => 15,  28 => 14,  101 => 42,  92 => 40,  83 => 37,  76 => 34,  70 => 32,  68 => 30,  63 => 29,  55 => 25,  50 => 25,  43 => 21,  38 => 18,  35 => 16,  29 => 14,);
    }
}
