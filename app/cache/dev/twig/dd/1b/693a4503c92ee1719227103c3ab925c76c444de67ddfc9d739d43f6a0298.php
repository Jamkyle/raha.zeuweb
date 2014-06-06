<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_dd1b693a4503c92ee1719227103c3ab925c76c444de67ddfc9d739d43f6a0298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 68,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 47,  160 => 44,  113 => 31,  81 => 15,  65 => 83,  129 => 59,  23 => 27,  97 => 47,  127 => 60,  110 => 22,  53 => 23,  100 => 23,  77 => 36,  20 => 11,  84 => 16,  155 => 66,  124 => 56,  153 => 35,  148 => 30,  137 => 37,  126 => 17,  114 => 15,  104 => 5,  90 => 20,  76 => 28,  70 => 20,  58 => 22,  34 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 3,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 49,  140 => 24,  132 => 61,  128 => 49,  107 => 52,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 83,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 76,  217 => 75,  208 => 72,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 17,  71 => 15,  67 => 25,  63 => 19,  59 => 13,  38 => 6,  94 => 39,  89 => 43,  85 => 32,  75 => 30,  68 => 14,  56 => 23,  87 => 29,  21 => 11,  26 => 14,  93 => 21,  88 => 31,  78 => 31,  46 => 8,  27 => 8,  44 => 18,  31 => 14,  28 => 44,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 45,  158 => 79,  156 => 41,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 34,  105 => 51,  91 => 44,  62 => 82,  49 => 13,  24 => 3,  25 => 12,  19 => 11,  79 => 37,  72 => 10,  69 => 9,  47 => 43,  40 => 20,  37 => 19,  22 => 2,  246 => 90,  157 => 56,  145 => 29,  139 => 63,  131 => 61,  123 => 59,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 24,  96 => 32,  83 => 29,  74 => 11,  66 => 29,  55 => 79,  52 => 43,  50 => 44,  43 => 11,  41 => 18,  35 => 15,  32 => 14,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 61,  187 => 60,  182 => 57,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 61,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 40,  109 => 53,  106 => 45,  103 => 50,  99 => 42,  95 => 22,  92 => 38,  86 => 17,  82 => 39,  80 => 30,  73 => 16,  64 => 28,  60 => 81,  57 => 80,  54 => 9,  51 => 22,  48 => 21,  45 => 28,  42 => 27,  39 => 17,  36 => 16,  33 => 11,  30 => 9,);
    }
}
