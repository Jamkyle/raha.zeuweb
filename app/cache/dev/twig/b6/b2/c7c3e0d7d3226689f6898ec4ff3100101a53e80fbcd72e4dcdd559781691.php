<?php

/* SonataMediaBundle:Provider:view_image.html.twig */
class __TwigTemplate_b6b2c7c3e0d7d3226689f6898ec4ff3100101a53e80fbcd72e4dcdd559781691 extends Twig_Template
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
        return "SonataMediaBundle:Provider:view_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  43 => 17,  19 => 11,  162 => 35,  157 => 30,  154 => 29,  149 => 24,  146 => 23,  141 => 20,  135 => 17,  129 => 16,  123 => 15,  118 => 10,  113 => 5,  95 => 37,  92 => 36,  90 => 35,  78 => 26,  76 => 23,  72 => 21,  70 => 20,  66 => 18,  63 => 17,  58 => 15,  50 => 11,  42 => 7,  38 => 15,  34 => 14,  108 => 47,  101 => 43,  93 => 38,  85 => 32,  83 => 29,  79 => 29,  77 => 28,  68 => 22,  60 => 16,  57 => 16,  53 => 14,  51 => 13,  48 => 10,  46 => 11,  41 => 9,  35 => 8,  31 => 6,  28 => 1,);
    }
}
