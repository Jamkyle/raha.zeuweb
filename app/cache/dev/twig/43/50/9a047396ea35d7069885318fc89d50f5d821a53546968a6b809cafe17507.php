<?php

/* RahaHomeBundle:Comment:new.html.twig */
class __TwigTemplate_43509a047396ea35d7069885318fc89d50f5d821a53546968a6b809cafe17507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Ajouter Commentaire a ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "article"), "titre"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
</ul>
";
    }

    public function getTemplateName()
    {
        return "RahaHomeBundle:Comment:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  24 => 3,  77 => 11,  61 => 8,  44 => 4,  26 => 3,  20 => 1,  55 => 21,  51 => 20,  45 => 19,  38 => 15,  28 => 13,  22 => 12,  19 => 11,  109 => 43,  102 => 39,  94 => 34,  86 => 28,  84 => 13,  80 => 25,  78 => 24,  71 => 20,  66 => 18,  63 => 23,  59 => 22,  57 => 14,  54 => 13,  52 => 6,  47 => 10,  41 => 9,  37 => 7,  34 => 14,  29 => 2,);
    }
}
