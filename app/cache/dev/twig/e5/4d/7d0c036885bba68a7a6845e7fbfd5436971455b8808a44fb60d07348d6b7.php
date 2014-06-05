<?php

/* RahaHomeBundle:Comment:edit.html.twig */
class __TwigTemplate_e54d7d0c036885bba68a7a6845e7fbfd5436971455b8808a44fb60d07348d6b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Comment edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("comment");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "RahaHomeBundle:Comment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  100 => 36,  81 => 28,  53 => 14,  146 => 23,  129 => 16,  118 => 45,  113 => 5,  90 => 31,  76 => 26,  70 => 20,  58 => 15,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 17,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 32,  75 => 17,  68 => 22,  56 => 22,  87 => 30,  21 => 2,  26 => 6,  93 => 38,  88 => 6,  78 => 26,  46 => 11,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 29,  72 => 25,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 70,  145 => 46,  139 => 45,  131 => 52,  123 => 15,  120 => 40,  115 => 43,  111 => 37,  108 => 47,  101 => 43,  98 => 31,  96 => 31,  83 => 31,  74 => 14,  66 => 18,  55 => 15,  52 => 21,  50 => 11,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 35,  154 => 29,  149 => 65,  147 => 58,  144 => 49,  141 => 60,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 39,  103 => 32,  99 => 31,  95 => 37,  92 => 36,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 17,  57 => 16,  54 => 10,  51 => 13,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
