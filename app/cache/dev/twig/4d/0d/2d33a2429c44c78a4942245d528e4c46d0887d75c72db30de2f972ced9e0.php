<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_4d0d2d33a2429c44c78a4942245d528e4c46d0887d75c72db30de2f972ced9e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h1>

        ";
        // line 25
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements")) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 28
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx")), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx"))), "SonataAdminBundle");
            // line 29
            echo "        ";
        }
        // line 30
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters"))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                <div style=\"display: none\">
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 43
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-th-list\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 50
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 224,  620 => 223,  612 => 220,  601 => 216,  594 => 212,  585 => 209,  580 => 207,  574 => 205,  572 => 204,  566 => 203,  559 => 201,  551 => 199,  545 => 198,  526 => 190,  507 => 165,  497 => 156,  485 => 124,  463 => 117,  447 => 113,  424 => 91,  412 => 126,  410 => 113,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  376 => 153,  369 => 148,  359 => 144,  333 => 132,  329 => 130,  326 => 129,  318 => 86,  261 => 73,  195 => 54,  306 => 95,  303 => 94,  292 => 91,  287 => 77,  280 => 87,  178 => 48,  12 => 36,  118 => 46,  778 => 251,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  653 => 218,  650 => 217,  644 => 213,  633 => 209,  616 => 207,  599 => 215,  595 => 205,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  573 => 198,  546 => 166,  534 => 162,  531 => 161,  521 => 182,  513 => 179,  499 => 173,  475 => 169,  473 => 168,  468 => 160,  454 => 156,  448 => 153,  445 => 152,  429 => 148,  422 => 147,  399 => 139,  396 => 138,  348 => 118,  345 => 116,  340 => 136,  330 => 103,  307 => 82,  300 => 93,  291 => 99,  286 => 98,  190 => 49,  321 => 100,  295 => 100,  274 => 135,  242 => 82,  236 => 109,  70 => 29,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 211,  638 => 210,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 193,  557 => 96,  550 => 187,  547 => 93,  527 => 91,  515 => 180,  512 => 84,  509 => 83,  503 => 81,  496 => 172,  493 => 155,  478 => 74,  467 => 72,  456 => 68,  450 => 114,  428 => 59,  414 => 144,  408 => 142,  390 => 136,  388 => 42,  377 => 129,  371 => 35,  363 => 32,  350 => 26,  342 => 23,  335 => 133,  332 => 20,  316 => 16,  313 => 84,  290 => 90,  276 => 395,  266 => 366,  263 => 365,  255 => 353,  245 => 83,  207 => 58,  194 => 52,  200 => 54,  184 => 48,  170 => 79,  563 => 202,  560 => 191,  558 => 190,  553 => 188,  549 => 182,  543 => 179,  537 => 176,  532 => 192,  528 => 160,  525 => 172,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 163,  491 => 157,  487 => 156,  460 => 143,  455 => 115,  449 => 138,  442 => 151,  439 => 150,  436 => 132,  433 => 149,  426 => 58,  420 => 146,  415 => 127,  411 => 143,  405 => 141,  403 => 48,  380 => 130,  366 => 125,  354 => 142,  331 => 96,  325 => 94,  308 => 13,  304 => 103,  272 => 91,  267 => 78,  249 => 74,  216 => 100,  155 => 52,  146 => 34,  124 => 51,  188 => 48,  181 => 232,  161 => 57,  320 => 87,  317 => 107,  311 => 14,  288 => 4,  284 => 76,  279 => 104,  275 => 86,  256 => 79,  250 => 341,  237 => 71,  232 => 78,  222 => 66,  191 => 246,  153 => 72,  150 => 34,  692 => 399,  683 => 223,  678 => 133,  676 => 385,  666 => 222,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 368,  635 => 226,  631 => 364,  625 => 361,  615 => 354,  607 => 218,  597 => 342,  590 => 204,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  555 => 200,  548 => 313,  540 => 164,  536 => 194,  529 => 191,  524 => 90,  516 => 294,  510 => 178,  504 => 164,  500 => 291,  495 => 158,  490 => 154,  486 => 286,  482 => 285,  470 => 121,  464 => 71,  459 => 116,  452 => 268,  434 => 256,  421 => 90,  417 => 145,  400 => 47,  385 => 159,  361 => 124,  344 => 24,  339 => 191,  324 => 110,  310 => 83,  302 => 79,  296 => 167,  282 => 161,  259 => 87,  244 => 140,  231 => 69,  226 => 131,  215 => 280,  186 => 51,  152 => 36,  114 => 174,  104 => 34,  358 => 123,  351 => 141,  347 => 140,  343 => 115,  338 => 113,  327 => 102,  323 => 88,  319 => 124,  315 => 98,  301 => 144,  299 => 8,  293 => 6,  289 => 140,  281 => 75,  277 => 136,  271 => 374,  265 => 130,  262 => 81,  260 => 363,  257 => 103,  251 => 101,  248 => 116,  239 => 64,  228 => 83,  225 => 67,  213 => 69,  211 => 81,  197 => 90,  174 => 42,  148 => 49,  134 => 182,  270 => 84,  253 => 78,  233 => 304,  212 => 60,  210 => 59,  206 => 57,  202 => 55,  198 => 55,  192 => 53,  185 => 61,  180 => 49,  175 => 47,  172 => 51,  167 => 56,  165 => 77,  160 => 39,  137 => 29,  113 => 39,  100 => 81,  81 => 20,  65 => 25,  129 => 180,  34 => 13,  77 => 32,  20 => 11,  23 => 11,  97 => 56,  127 => 52,  110 => 172,  90 => 39,  84 => 32,  76 => 35,  53 => 27,  126 => 179,  58 => 22,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 57,  413 => 241,  409 => 132,  407 => 238,  402 => 140,  398 => 88,  393 => 168,  387 => 110,  384 => 109,  381 => 157,  379 => 154,  374 => 128,  368 => 126,  365 => 141,  362 => 110,  360 => 104,  355 => 122,  341 => 131,  337 => 22,  322 => 93,  314 => 88,  312 => 97,  309 => 148,  305 => 115,  298 => 101,  294 => 90,  285 => 3,  283 => 97,  278 => 95,  268 => 373,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 42,  128 => 47,  107 => 38,  61 => 26,  273 => 85,  269 => 133,  254 => 147,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  221 => 79,  219 => 101,  217 => 64,  208 => 124,  204 => 57,  179 => 44,  159 => 196,  143 => 33,  135 => 51,  119 => 108,  102 => 37,  71 => 30,  67 => 28,  63 => 28,  59 => 25,  38 => 21,  94 => 41,  89 => 17,  85 => 32,  75 => 30,  68 => 28,  56 => 23,  87 => 28,  21 => 11,  26 => 12,  93 => 35,  88 => 37,  78 => 21,  46 => 8,  27 => 14,  44 => 18,  31 => 15,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 44,  166 => 209,  163 => 40,  158 => 55,  156 => 38,  151 => 52,  142 => 30,  138 => 49,  136 => 58,  121 => 50,  117 => 175,  105 => 44,  91 => 37,  62 => 24,  49 => 22,  24 => 12,  25 => 13,  19 => 11,  79 => 35,  72 => 29,  69 => 31,  47 => 25,  40 => 17,  37 => 18,  22 => 12,  246 => 67,  157 => 56,  145 => 54,  139 => 59,  131 => 181,  123 => 48,  120 => 176,  115 => 47,  111 => 46,  108 => 171,  101 => 43,  98 => 41,  96 => 18,  83 => 15,  74 => 29,  66 => 17,  55 => 25,  52 => 24,  50 => 23,  43 => 19,  41 => 23,  35 => 20,  32 => 19,  29 => 14,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 85,  176 => 58,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 52,  144 => 26,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 48,  112 => 105,  109 => 46,  106 => 104,  103 => 43,  99 => 23,  95 => 19,  92 => 38,  86 => 35,  82 => 34,  80 => 14,  73 => 30,  64 => 19,  60 => 15,  57 => 26,  54 => 23,  51 => 22,  48 => 21,  45 => 20,  42 => 19,  39 => 21,  36 => 16,  33 => 16,  30 => 13,);
    }
}