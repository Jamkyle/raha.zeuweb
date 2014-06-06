<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_26eaf0f5d8fb58c55aa60f445419bc6a08fc52ee07265611e79de97ae1c2a99a extends Twig_Template
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
        // line 1
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  775 => 485,  727 => 476,  706 => 473,  702 => 472,  698 => 471,  690 => 469,  686 => 468,  677 => 465,  634 => 456,  567 => 414,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  334 => 141,  328 => 139,  357 => 123,  672 => 345,  664 => 342,  651 => 337,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  591 => 309,  552 => 293,  541 => 290,  533 => 284,  519 => 278,  505 => 270,  489 => 262,  483 => 258,  465 => 249,  438 => 236,  397 => 213,  383 => 207,  367 => 339,  353 => 328,  297 => 104,  205 => 108,  462 => 202,  446 => 197,  441 => 196,  431 => 189,  394 => 168,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 492,  807 => 491,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 486,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  757 => 221,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  713 => 209,  688 => 202,  682 => 467,  679 => 466,  673 => 198,  668 => 344,  665 => 196,  663 => 195,  660 => 464,  657 => 193,  647 => 336,  632 => 187,  629 => 454,  626 => 325,  610 => 181,  603 => 179,  600 => 178,  588 => 308,  570 => 164,  561 => 161,  554 => 224,  522 => 406,  479 => 256,  471 => 253,  451 => 120,  418 => 224,  373 => 156,  370 => 101,  356 => 126,  624 => 224,  620 => 451,  612 => 220,  601 => 446,  594 => 176,  585 => 307,  580 => 207,  574 => 205,  572 => 204,  566 => 203,  559 => 296,  551 => 221,  545 => 291,  526 => 190,  507 => 156,  497 => 267,  485 => 124,  463 => 248,  447 => 113,  424 => 114,  412 => 222,  410 => 221,  406 => 111,  404 => 90,  401 => 172,  391 => 163,  376 => 205,  369 => 148,  359 => 144,  333 => 132,  329 => 188,  326 => 138,  318 => 111,  261 => 50,  195 => 54,  306 => 286,  303 => 106,  292 => 91,  287 => 77,  280 => 87,  178 => 59,  12 => 36,  118 => 49,  778 => 267,  763 => 244,  760 => 222,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  700 => 205,  653 => 218,  650 => 192,  644 => 335,  633 => 209,  616 => 182,  599 => 215,  595 => 205,  587 => 203,  584 => 173,  581 => 305,  578 => 200,  573 => 198,  546 => 175,  534 => 162,  531 => 283,  521 => 182,  513 => 230,  499 => 268,  475 => 169,  473 => 254,  468 => 128,  454 => 244,  448 => 240,  445 => 152,  429 => 188,  422 => 226,  399 => 139,  396 => 138,  348 => 140,  345 => 147,  340 => 145,  330 => 103,  307 => 128,  300 => 105,  291 => 102,  286 => 112,  190 => 76,  321 => 135,  295 => 178,  274 => 110,  242 => 81,  236 => 42,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 489,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 479,  746 => 478,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 475,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 470,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 462,  643 => 120,  640 => 334,  638 => 210,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 310,  576 => 199,  564 => 162,  557 => 295,  550 => 187,  547 => 93,  527 => 408,  515 => 276,  512 => 84,  509 => 272,  503 => 81,  496 => 172,  493 => 143,  478 => 74,  467 => 72,  456 => 68,  450 => 114,  428 => 230,  414 => 144,  408 => 176,  390 => 136,  388 => 42,  377 => 129,  371 => 156,  363 => 153,  350 => 327,  342 => 137,  335 => 134,  332 => 116,  316 => 16,  313 => 183,  290 => 119,  276 => 111,  266 => 366,  263 => 95,  255 => 101,  245 => 83,  207 => 75,  194 => 68,  200 => 72,  184 => 63,  170 => 84,  563 => 298,  560 => 191,  558 => 160,  553 => 188,  549 => 411,  543 => 174,  537 => 159,  532 => 410,  528 => 160,  525 => 280,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 154,  491 => 157,  487 => 156,  460 => 123,  455 => 115,  449 => 198,  442 => 151,  439 => 195,  436 => 235,  433 => 149,  426 => 58,  420 => 146,  415 => 180,  411 => 143,  405 => 108,  403 => 48,  380 => 158,  366 => 150,  354 => 101,  331 => 140,  325 => 129,  308 => 287,  304 => 181,  272 => 91,  267 => 101,  249 => 74,  216 => 79,  146 => 34,  188 => 90,  181 => 65,  161 => 63,  320 => 127,  317 => 185,  311 => 83,  288 => 118,  284 => 76,  279 => 77,  275 => 105,  256 => 96,  250 => 44,  237 => 71,  232 => 88,  222 => 83,  191 => 67,  150 => 55,  692 => 399,  683 => 223,  678 => 133,  676 => 199,  666 => 222,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 189,  635 => 188,  631 => 327,  625 => 453,  615 => 354,  607 => 180,  597 => 177,  590 => 204,  583 => 334,  579 => 332,  577 => 303,  575 => 328,  569 => 300,  565 => 324,  555 => 200,  548 => 292,  540 => 160,  536 => 194,  529 => 409,  524 => 90,  516 => 294,  510 => 178,  504 => 155,  500 => 291,  495 => 158,  490 => 142,  486 => 286,  482 => 136,  470 => 121,  464 => 125,  459 => 246,  452 => 268,  434 => 118,  421 => 90,  417 => 145,  400 => 214,  385 => 159,  361 => 152,  344 => 119,  339 => 191,  324 => 113,  310 => 83,  302 => 125,  296 => 121,  282 => 161,  259 => 103,  244 => 43,  231 => 83,  226 => 84,  215 => 280,  186 => 51,  152 => 46,  358 => 151,  351 => 120,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 124,  315 => 131,  301 => 80,  299 => 8,  293 => 120,  289 => 113,  281 => 114,  277 => 136,  271 => 94,  265 => 105,  262 => 98,  260 => 363,  257 => 103,  251 => 101,  248 => 97,  239 => 64,  228 => 75,  225 => 67,  213 => 78,  211 => 68,  197 => 69,  174 => 65,  134 => 39,  270 => 102,  253 => 100,  233 => 87,  212 => 78,  210 => 77,  206 => 67,  202 => 94,  198 => 64,  192 => 53,  185 => 74,  180 => 49,  175 => 58,  172 => 57,  167 => 76,  165 => 83,  160 => 57,  113 => 40,  81 => 23,  65 => 22,  129 => 64,  23 => 4,  97 => 52,  127 => 35,  110 => 45,  53 => 17,  100 => 36,  77 => 25,  20 => 1,  84 => 27,  155 => 47,  124 => 62,  153 => 77,  148 => 69,  137 => 65,  126 => 63,  114 => 59,  104 => 37,  90 => 37,  76 => 28,  70 => 26,  58 => 18,  34 => 5,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 57,  413 => 241,  409 => 132,  407 => 238,  402 => 215,  398 => 88,  393 => 211,  387 => 164,  384 => 106,  381 => 105,  379 => 104,  374 => 128,  368 => 126,  365 => 197,  362 => 148,  360 => 128,  355 => 329,  341 => 118,  337 => 90,  322 => 93,  314 => 88,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 373,  264 => 74,  258 => 94,  252 => 68,  247 => 75,  241 => 93,  229 => 87,  220 => 81,  214 => 63,  177 => 43,  169 => 78,  140 => 58,  132 => 65,  128 => 60,  107 => 52,  61 => 23,  273 => 174,  269 => 107,  254 => 46,  243 => 92,  240 => 72,  238 => 312,  235 => 89,  230 => 62,  227 => 86,  224 => 81,  221 => 73,  219 => 101,  217 => 64,  208 => 76,  204 => 57,  179 => 98,  159 => 90,  143 => 51,  135 => 51,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 25,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 106,  196 => 92,  183 => 58,  171 => 81,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 30,  138 => 69,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 44,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 39,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 58,  203 => 73,  199 => 93,  193 => 62,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 55,  162 => 59,  154 => 60,  149 => 73,  147 => 75,  144 => 42,  141 => 73,  133 => 69,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 34,  99 => 23,  95 => 39,  92 => 28,  86 => 45,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
