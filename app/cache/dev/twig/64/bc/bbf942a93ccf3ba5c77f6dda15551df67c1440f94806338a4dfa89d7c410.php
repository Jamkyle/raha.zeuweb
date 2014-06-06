<?php

/* RahaHomeBundle:Article:index.html.twig */
class __TwigTemplate_64bcbbf942a93ccf3ba5c77f6dda15551df67c1440f94806338a4dfa89d7c410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RahaHomeBundle::layout.html.twig");

        $this->blocks = array(
            'carousel' => array($this, 'block_carousel'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RahaHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_carousel($context, array $blocks = array())
    {
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Article list</h1>

    <table class=\"records_list\">
        <tbody>
            <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "            
              <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                  ";
            // line 14
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media")) {
                // line 15
                echo "                        ";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media"), "thumbnail", array());
                echo " ";
                // line 16
                echo "                    ";
            }
            // line 17
            echo "                  <div class=\"caption\">
                    <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</h3>
                    <p>";
            // line 19
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</p>
                    <p><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Voir</a> 
                        ";
            // line 21
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 22
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-default\" role=\"button\">Edit</a>
                            <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-default\" role=\"button\">Supprimer</a>
                        ";
            }
            // line 25
            echo "                    </p>

                  </div>
                </div>
              </div>
           

        <!--
            <tr>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td></td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu"), "html", null, true);
            echo "</td>

                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tags"), "html", null, true);
            echo "</td>

        -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "         </div>
        </tbody>
    </table>

";
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "    <ul>
        <li>
            <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("article_new", array("choice" => "youtube"));
            echo "\">
                new youtube
            </a>
        </li>
        <li>
            <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("article_new", array("choice" => "dailymotion"));
            echo "\">
                new dailymotion
            </a>
        </li>
        <li>
            <a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("article_new", array("choice" => "image"));
            echo "\">
                new image
            </a>
        </li>
        <li>
            <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("article_new", array("choice" => "vimeo"));
            echo "\">
                new vimeo
            </a>
        </li>
    </ul>
";
        }
        // line 71
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "RahaHomeBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 71,  164 => 65,  156 => 60,  148 => 55,  140 => 50,  136 => 48,  134 => 47,  128 => 43,  118 => 39,  113 => 37,  109 => 36,  102 => 34,  91 => 25,  86 => 23,  81 => 22,  79 => 21,  75 => 20,  69 => 19,  65 => 18,  62 => 17,  59 => 16,  55 => 15,  53 => 14,  48 => 11,  44 => 10,  37 => 5,  34 => 4,  29 => 2,);
    }
}
