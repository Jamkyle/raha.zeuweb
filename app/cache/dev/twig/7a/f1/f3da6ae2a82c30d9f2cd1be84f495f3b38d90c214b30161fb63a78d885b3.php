<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_7af1f3da6ae2a82c30d9f2cd1be84f495f3b38d90c214b30161fb63a78d885b3 extends Twig_Template
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

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "description");
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 27,  97 => 41,  127 => 60,  110 => 22,  124 => 56,  84 => 32,  20 => 11,  77 => 27,  100 => 26,  81 => 28,  53 => 11,  146 => 23,  129 => 16,  118 => 45,  113 => 5,  90 => 32,  76 => 28,  70 => 20,  58 => 22,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 61,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 17,  71 => 15,  67 => 25,  63 => 19,  59 => 13,  38 => 6,  94 => 39,  89 => 20,  85 => 32,  75 => 30,  68 => 14,  56 => 23,  87 => 30,  21 => 11,  26 => 13,  93 => 38,  88 => 31,  78 => 31,  46 => 8,  27 => 13,  44 => 19,  31 => 14,  28 => 44,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 28,  62 => 12,  49 => 13,  24 => 3,  25 => 12,  19 => 11,  79 => 29,  72 => 29,  69 => 28,  47 => 8,  40 => 6,  37 => 16,  22 => 2,  246 => 90,  157 => 70,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 25,  98 => 24,  96 => 31,  83 => 31,  74 => 24,  66 => 18,  55 => 15,  52 => 20,  50 => 11,  43 => 11,  41 => 18,  35 => 5,  32 => 12,  29 => 14,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 35,  154 => 29,  149 => 65,  147 => 58,  144 => 49,  141 => 60,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 45,  103 => 32,  99 => 42,  95 => 37,  92 => 38,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 23,  57 => 12,  54 => 9,  51 => 22,  48 => 21,  45 => 8,  42 => 18,  39 => 13,  36 => 17,  33 => 11,  30 => 3,);
    }
}
