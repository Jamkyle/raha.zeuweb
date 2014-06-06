<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_a1a1c9b7aac4b78acc3a621b66a35a09799e187342fcb8709b480a1f4859e2cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  77 => 11,  20 => 1,  84 => 13,  155 => 66,  124 => 56,  153 => 35,  148 => 30,  137 => 23,  126 => 17,  114 => 15,  104 => 5,  90 => 35,  76 => 23,  70 => 20,  58 => 15,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 24,  132 => 61,  128 => 49,  107 => 36,  61 => 8,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 39,  71 => 15,  67 => 15,  63 => 17,  59 => 15,  38 => 6,  94 => 34,  89 => 30,  85 => 21,  75 => 17,  68 => 14,  56 => 13,  87 => 29,  21 => 2,  26 => 3,  93 => 31,  88 => 6,  78 => 17,  46 => 7,  27 => 4,  44 => 6,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 51,  105 => 40,  91 => 22,  62 => 12,  49 => 19,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 21,  69 => 25,  47 => 7,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 29,  139 => 65,  131 => 51,  123 => 47,  120 => 16,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 32,  83 => 29,  74 => 16,  66 => 18,  55 => 21,  52 => 10,  50 => 11,  43 => 7,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 61,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 40,  109 => 43,  106 => 46,  103 => 32,  99 => 42,  95 => 37,  92 => 38,  86 => 28,  82 => 27,  80 => 25,  73 => 18,  64 => 13,  60 => 14,  57 => 12,  54 => 9,  51 => 11,  48 => 9,  45 => 11,  42 => 10,  39 => 9,  36 => 6,  33 => 4,  30 => 4,);
    }
}
