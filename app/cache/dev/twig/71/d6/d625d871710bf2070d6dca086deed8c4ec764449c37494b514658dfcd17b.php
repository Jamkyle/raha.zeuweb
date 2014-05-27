<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_71d6d625d871710bf2070d6dca086deed8c4ec764449c37494b514658dfcd17b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "EDIT"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "edit", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 18
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 20
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 22
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 23
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "</a>";
    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  563 => 188,  560 => 187,  558 => 186,  553 => 184,  549 => 182,  543 => 179,  537 => 176,  532 => 174,  528 => 173,  525 => 172,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  501 => 161,  491 => 157,  487 => 156,  460 => 143,  455 => 141,  449 => 138,  442 => 134,  439 => 133,  436 => 132,  433 => 130,  426 => 126,  420 => 123,  415 => 121,  411 => 120,  405 => 118,  403 => 117,  380 => 107,  366 => 106,  354 => 101,  331 => 96,  325 => 94,  308 => 86,  304 => 85,  272 => 81,  267 => 78,  249 => 74,  216 => 70,  155 => 52,  146 => 49,  124 => 31,  188 => 83,  181 => 61,  161 => 54,  320 => 92,  317 => 91,  311 => 87,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 93,  237 => 86,  232 => 84,  222 => 81,  191 => 69,  153 => 56,  150 => 65,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  635 => 365,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 185,  548 => 313,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 294,  510 => 293,  504 => 292,  500 => 291,  495 => 158,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  452 => 268,  434 => 256,  421 => 244,  417 => 243,  400 => 116,  385 => 225,  361 => 207,  344 => 193,  339 => 191,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  215 => 78,  186 => 82,  152 => 51,  114 => 71,  104 => 67,  358 => 103,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 120,  301 => 117,  299 => 112,  293 => 109,  289 => 82,  281 => 105,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 83,  225 => 87,  213 => 69,  211 => 81,  197 => 70,  174 => 59,  148 => 64,  134 => 59,  270 => 157,  253 => 95,  233 => 71,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 66,  192 => 85,  185 => 68,  180 => 56,  175 => 77,  172 => 51,  167 => 57,  165 => 72,  160 => 70,  137 => 46,  113 => 41,  100 => 36,  81 => 25,  65 => 30,  129 => 57,  34 => 16,  77 => 58,  20 => 11,  23 => 18,  97 => 63,  127 => 32,  110 => 48,  90 => 20,  84 => 39,  76 => 28,  53 => 10,  126 => 42,  58 => 22,  480 => 162,  474 => 150,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 147,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 115,  393 => 112,  387 => 110,  384 => 109,  381 => 120,  379 => 119,  374 => 217,  368 => 112,  365 => 141,  362 => 110,  360 => 104,  355 => 106,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 160,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 69,  177 => 54,  169 => 74,  140 => 47,  132 => 58,  128 => 49,  107 => 52,  61 => 25,  273 => 96,  269 => 100,  254 => 147,  243 => 89,  240 => 72,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  119 => 28,  102 => 38,  71 => 19,  67 => 27,  63 => 19,  59 => 23,  38 => 17,  94 => 69,  89 => 40,  85 => 34,  75 => 30,  68 => 31,  56 => 24,  87 => 33,  21 => 12,  26 => 14,  93 => 34,  88 => 60,  78 => 24,  46 => 35,  27 => 8,  44 => 18,  31 => 15,  28 => 14,  201 => 72,  196 => 68,  183 => 82,  171 => 63,  166 => 100,  163 => 45,  158 => 53,  156 => 68,  151 => 63,  142 => 61,  138 => 36,  136 => 56,  121 => 53,  117 => 51,  105 => 27,  91 => 34,  62 => 29,  49 => 21,  24 => 13,  25 => 12,  19 => 11,  79 => 37,  72 => 10,  69 => 50,  47 => 19,  40 => 20,  37 => 19,  22 => 12,  246 => 99,  157 => 56,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 36,  115 => 50,  111 => 78,  108 => 48,  101 => 49,  98 => 44,  96 => 31,  83 => 25,  74 => 34,  66 => 29,  55 => 22,  52 => 17,  50 => 20,  43 => 19,  41 => 18,  35 => 17,  32 => 16,  29 => 15,  209 => 82,  203 => 122,  199 => 67,  193 => 73,  189 => 65,  187 => 60,  182 => 80,  176 => 77,  173 => 65,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 51,  147 => 90,  144 => 62,  141 => 48,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 40,  106 => 45,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 17,  82 => 33,  80 => 30,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 11,  30 => 15,);
    }
}
