<?php

/* SonataMediaBundle:Provider:thumbnail.html.twig */
class __TwigTemplate_77c9e4230ea44d96d7f08c8c902c26228ccc5a4d06fc972fb4592be7b0e62bfb extends Twig_Template
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
<img ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " />
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  55 => 26,  43 => 20,  39 => 19,  19 => 11,  153 => 35,  148 => 30,  145 => 29,  140 => 24,  137 => 23,  132 => 20,  126 => 17,  120 => 16,  114 => 15,  109 => 10,  104 => 5,  95 => 37,  92 => 36,  90 => 35,  83 => 29,  76 => 23,  72 => 21,  70 => 20,  66 => 18,  63 => 17,  60 => 16,  58 => 15,  50 => 11,  48 => 22,  42 => 7,  34 => 5,  28 => 1,  100 => 26,  91 => 22,  85 => 32,  78 => 26,  74 => 16,  71 => 15,  68 => 14,  64 => 13,  62 => 12,  54 => 9,  47 => 7,  44 => 6,  38 => 6,  35 => 4,  29 => 2,);
    }
}
