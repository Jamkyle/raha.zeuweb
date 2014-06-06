<?php

/* SonataMediaBundle:MediaAdmin:edit.html.twig */
class __TwigTemplate_42f64e012a19bb1760568752547112c9dcc682743f1aea96a87f6558f2b3f8af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'sonata_media_show_reference' => array($this, 'block_sonata_media_show_reference'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        button.btn.btn-sm.btn-default.pixlr-link {
            margin-bottom: 0;
        }
    </style>
";
    }

    // line 23
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"row\">
        ";
        // line 26
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id")) {
            // line 27
            echo "            <div class=\"col-md-6\">
                ";
            // line 28
            $this->displayBlock('sonata_media_show_reference', $context, $blocks);
            // line 103
            echo "            </div>
        ";
        }
        // line 105
        echo "
        <div class=\"col-md-6\">
            ";
        // line 108
        echo "            ";
        $this->displayParentBlock("sonata_admin_content", $context, $blocks);
        echo "
        </div>
    </div>

    ";
        // line 112
        if (($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pixlr") && $this->getAttribute($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pixlr"), "isEditable", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 113
            echo "        <div class=\"modal fade\" id=\"pixlr-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\" id=\"pixlr-modal-body\">
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.closeModal = function() {
                jQuery('#pixlr-modal').modal('hide');
            }

            jQuery('button.pixlr-link').on('click', function(e) {
                e.preventDefault();
                var url = jQuery(this).attr('data-href');
                jQuery(\"#pixlr-modal-body\").html('<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" allowtransparency=\"true\" src=\"'+url+'\"></iframe>');
            });

            Admin.setup_list_modal(jQuery('#pixlr-modal'));
        </script>
    ";
        }
        // line 140
        echo "

";
    }

    // line 28
    public function block_sonata_media_show_reference($context, array $blocks = array())
    {
        // line 29
        echo "                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.media_preview", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>
                            ";
        // line 32
        if (($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pixlr") && $this->getAttribute($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pixlr"), "isEditable", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 33
            echo "                                <div class=\"box-tools pull-right\">
                                    <button class=\"btn btn-sm btn-default pixlr-link\"
                                            data-href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_pixlr_open_editor", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "html", null, true);
            echo "\"
                                            data-toggle=\"modal\"
                                            data-target=\"#pixlr-modal\"
                                            >
                                        <i class=\"fa fa-pencil-square-o\"></i> ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                    </button>
                                </div>
                            ";
        }
        // line 43
        echo "
                        </div>
                        <div class=\"box-body table-responsive\">

                            <center> <!-- yeah, center is still awesome ;) -->
                                ";
        // line 48
        echo $this->env->getExtension('sonata_media')->media((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "reference", array("width" => null, "height" => null, "class" => "img-responsive img-rounded"));
        // line 49
        echo "                            </center>

                            <table class=\"table\">
                                <tr>
                                    <th>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.size", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 54
        echo $this->env->getExtension('sonata_intl_number')->formatDecimal($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width"));
        echo "px x ";
        echo $this->env->getExtension('sonata_intl_number')->formatDecimal($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height"));
        echo "px
                                        ";
        // line 55
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "size") > 0)) {
            echo "(";
            echo $this->env->getExtension('sonata_intl_number')->formatDecimal($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "size"));
            echo "o)";
        }
        echo "</td>
                                <tr>
                                <tr>
                                    <th>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.content_type", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contenttype"), "html", null, true);
        echo "</td>
                                <tr>
                                <tr>
                                    <th>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cdn", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 64
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "cdnisflushable")) {
            // line 65
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to_be_flushed", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                        ";
        } else {
            // line 67
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.flushed_at", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                            ";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "cdnflushat")), "html", null, true);
            echo "
                                        ";
        }
        // line 70
        echo "                                    </td>
                                <tr>
                                <tr>
                                    <th><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.protected_download_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</a></th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "html", null, true);
        echo "\" />
                                        <span class=\"label label-warning\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.protected_download_url_notice", array(), "SonataMediaBundle"), "html", null, true);
        echo "</span> ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pool"), "downloadSecurity", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "description");
        echo "
                                    </td>
                                <tr>
                                <tr>
                                    <th>
                                        <a href=\"";
        // line 81
        echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "reference");
        echo "\" target=\"_blank\">reference</a>
                                    </th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
        // line 84
        echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "reference");
        echo "\" />
                                    </td>
                                </tr>

                                ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pool"), "formatNamesByContext", array(0 => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "context")), "method"));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 89
            echo "                                    <tr>
                                        <th>
                                            <a href=\"";
            // line 91
            echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a>
                                        </th>
                                        <td>
                                            <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
            // line 94
            echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            echo "\" />
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </table>
                        </div>

                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  757 => 221,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  713 => 209,  688 => 202,  682 => 201,  679 => 200,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  647 => 191,  632 => 187,  629 => 186,  626 => 184,  610 => 181,  603 => 179,  600 => 178,  588 => 175,  570 => 164,  561 => 161,  554 => 224,  522 => 156,  479 => 135,  471 => 129,  451 => 120,  418 => 112,  373 => 102,  370 => 101,  356 => 126,  624 => 224,  620 => 223,  612 => 220,  601 => 216,  594 => 176,  585 => 209,  580 => 207,  574 => 205,  572 => 204,  566 => 203,  559 => 201,  551 => 221,  545 => 198,  526 => 190,  507 => 156,  497 => 156,  485 => 124,  463 => 117,  447 => 113,  424 => 114,  412 => 126,  410 => 110,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  376 => 103,  369 => 148,  359 => 144,  333 => 132,  329 => 130,  326 => 86,  318 => 86,  261 => 50,  195 => 54,  306 => 95,  303 => 94,  292 => 91,  287 => 77,  280 => 87,  178 => 48,  12 => 36,  118 => 16,  778 => 267,  763 => 244,  760 => 222,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  700 => 205,  653 => 218,  650 => 192,  644 => 190,  633 => 209,  616 => 182,  599 => 215,  595 => 205,  587 => 203,  584 => 173,  581 => 201,  578 => 200,  573 => 198,  546 => 175,  534 => 162,  531 => 225,  521 => 182,  513 => 230,  499 => 173,  475 => 169,  473 => 168,  468 => 128,  454 => 121,  448 => 119,  445 => 152,  429 => 148,  422 => 147,  399 => 139,  396 => 138,  348 => 118,  345 => 116,  340 => 91,  330 => 103,  307 => 82,  300 => 93,  291 => 80,  286 => 98,  190 => 49,  321 => 100,  295 => 100,  274 => 53,  242 => 81,  236 => 42,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 218,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 211,  638 => 210,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  527 => 91,  515 => 305,  512 => 84,  509 => 228,  503 => 81,  496 => 172,  493 => 143,  478 => 74,  467 => 72,  456 => 68,  450 => 114,  428 => 116,  414 => 144,  408 => 109,  390 => 136,  388 => 42,  377 => 129,  371 => 35,  363 => 32,  350 => 26,  342 => 23,  335 => 133,  332 => 88,  316 => 16,  313 => 84,  290 => 90,  276 => 395,  266 => 366,  263 => 91,  255 => 88,  245 => 83,  207 => 33,  194 => 57,  200 => 65,  184 => 55,  170 => 79,  563 => 202,  560 => 191,  558 => 160,  553 => 188,  549 => 182,  543 => 174,  537 => 159,  532 => 192,  528 => 160,  525 => 157,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 154,  491 => 157,  487 => 156,  460 => 123,  455 => 115,  449 => 138,  442 => 151,  439 => 150,  436 => 132,  433 => 149,  426 => 58,  420 => 146,  415 => 127,  411 => 143,  405 => 108,  403 => 48,  380 => 130,  366 => 150,  354 => 101,  331 => 96,  325 => 94,  308 => 13,  304 => 81,  272 => 91,  267 => 78,  249 => 74,  216 => 70,  146 => 34,  188 => 25,  181 => 232,  161 => 75,  320 => 84,  317 => 107,  311 => 83,  288 => 79,  284 => 76,  279 => 77,  275 => 86,  256 => 79,  250 => 44,  237 => 71,  232 => 76,  222 => 66,  191 => 26,  150 => 34,  692 => 399,  683 => 223,  678 => 133,  676 => 199,  666 => 222,  661 => 220,  656 => 219,  652 => 376,  645 => 369,  641 => 189,  635 => 188,  631 => 364,  625 => 361,  615 => 354,  607 => 180,  597 => 177,  590 => 204,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  555 => 200,  548 => 176,  540 => 160,  536 => 194,  529 => 159,  524 => 90,  516 => 294,  510 => 178,  504 => 155,  500 => 291,  495 => 158,  490 => 142,  486 => 286,  482 => 136,  470 => 121,  464 => 125,  459 => 116,  452 => 268,  434 => 118,  421 => 90,  417 => 145,  400 => 47,  385 => 159,  361 => 124,  344 => 24,  339 => 191,  324 => 110,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  259 => 89,  244 => 43,  231 => 69,  226 => 131,  215 => 280,  186 => 51,  152 => 41,  358 => 123,  351 => 141,  347 => 140,  343 => 92,  338 => 113,  327 => 102,  323 => 85,  319 => 124,  315 => 98,  301 => 80,  299 => 8,  293 => 90,  289 => 140,  281 => 98,  277 => 136,  271 => 94,  265 => 51,  262 => 81,  260 => 363,  257 => 103,  251 => 101,  248 => 84,  239 => 64,  228 => 75,  225 => 67,  213 => 69,  211 => 68,  197 => 30,  174 => 154,  134 => 35,  270 => 84,  253 => 78,  233 => 304,  212 => 60,  210 => 59,  206 => 67,  202 => 55,  198 => 64,  192 => 53,  185 => 61,  180 => 49,  175 => 47,  172 => 51,  167 => 54,  165 => 77,  160 => 39,  113 => 35,  81 => 26,  65 => 32,  129 => 67,  23 => 12,  97 => 41,  127 => 52,  110 => 45,  53 => 29,  100 => 62,  77 => 113,  20 => 11,  84 => 34,  155 => 48,  124 => 31,  153 => 72,  148 => 43,  137 => 29,  126 => 83,  114 => 50,  104 => 43,  90 => 25,  76 => 30,  70 => 29,  58 => 29,  34 => 16,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 57,  413 => 241,  409 => 132,  407 => 238,  402 => 107,  398 => 88,  393 => 168,  387 => 110,  384 => 106,  381 => 105,  379 => 104,  374 => 128,  368 => 126,  365 => 141,  362 => 148,  360 => 128,  355 => 122,  341 => 131,  337 => 90,  322 => 93,  314 => 88,  312 => 97,  309 => 82,  305 => 115,  298 => 101,  294 => 90,  285 => 78,  283 => 97,  278 => 95,  268 => 373,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 78,  140 => 91,  132 => 57,  128 => 32,  107 => 44,  61 => 31,  273 => 85,  269 => 133,  254 => 46,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 73,  219 => 101,  217 => 64,  208 => 124,  204 => 57,  179 => 44,  159 => 196,  143 => 33,  135 => 51,  119 => 44,  102 => 43,  71 => 29,  67 => 108,  63 => 105,  59 => 103,  38 => 17,  94 => 26,  89 => 34,  85 => 22,  75 => 112,  68 => 25,  56 => 13,  87 => 39,  21 => 11,  26 => 13,  93 => 39,  88 => 64,  78 => 20,  46 => 20,  27 => 13,  44 => 20,  31 => 15,  28 => 14,  201 => 56,  196 => 58,  183 => 58,  171 => 52,  166 => 209,  163 => 53,  158 => 44,  156 => 38,  151 => 52,  142 => 30,  138 => 49,  136 => 70,  121 => 51,  117 => 28,  105 => 44,  91 => 65,  62 => 24,  49 => 28,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 34,  69 => 33,  47 => 21,  40 => 8,  37 => 16,  22 => 12,  246 => 67,  157 => 49,  145 => 53,  139 => 51,  131 => 48,  123 => 65,  120 => 29,  115 => 15,  111 => 140,  108 => 45,  101 => 37,  98 => 36,  96 => 42,  83 => 16,  74 => 19,  66 => 16,  55 => 24,  52 => 26,  50 => 11,  43 => 24,  41 => 23,  35 => 20,  32 => 19,  29 => 3,  209 => 58,  203 => 60,  199 => 59,  193 => 62,  189 => 52,  187 => 59,  182 => 23,  176 => 309,  173 => 55,  168 => 51,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 38,  144 => 26,  141 => 39,  133 => 69,  130 => 33,  125 => 46,  122 => 82,  116 => 43,  112 => 14,  109 => 46,  106 => 64,  103 => 38,  99 => 30,  95 => 41,  92 => 41,  86 => 118,  82 => 33,  80 => 15,  73 => 34,  64 => 27,  60 => 26,  57 => 28,  54 => 27,  51 => 23,  48 => 24,  45 => 23,  42 => 9,  39 => 18,  36 => 6,  33 => 15,  30 => 14,);
    }
}
