<?php

/* RahaHomeBundle:Default:index.html.twig */
class __TwigTemplate_5108af58958fda649bb295a3847c07da14ac0134ae56c8c831e5d83caf64bac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RahaHomeBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RahaHomeBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue sur ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    Blog homepage
    
";
    }

    public function getTemplateName()
    {
        return "RahaHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,);
    }
}
