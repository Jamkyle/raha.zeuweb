<?php

/* ::carousel.html.twig */
class __TwigTemplate_8b45700929ba373864209ca3fa3ecf621eea8350de754898231474eeb1ac237b extends Twig_Template
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
        echo "<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "      <li data-target=\"#carousel-example-generic\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\"></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ol>
  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"http://www.ac-nice.fr/sand/wp-content/uploads/2011/07/fond-ecran-paysage-1024x768.jpg\" alt=\"...\">
      <div class=\"carousel-caption\">
        <h4>TheRahaSite</h4>
      </div>
    </div>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "      
      <div class=\"item\">
        ";
            // line 20
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media")) {
                // line 21
                echo "          ";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media"), "big", array());
                echo " ";
                // line 22
                echo "        ";
            }
            // line 23
            echo "
        <div class=\"carousel-caption\">
          <h2><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</a></h2>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
  </div>

<!--
    
     <div class=\"item\">
    <img src=\"http://www.gogoall.net/fonds/nature/p/paysage/paysage_32.jpg\" alt=\"\">
    <div class=\"carousel-caption\">
      <h4>Title</h4>
    </div>
  </div>
     <div class=\"item\">
    <img src=\"http://images.ados.fr/1/bd-manga/paysages/photo/hd/4175300417/1624420222/paysages-paysage-virtuel-big.jpg\" alt=\"\">
    <div class=\"carousel-caption\">
      <h4>Title</h4>
    </div>
  </div>
  </div>
-->

  <!-- Controls -->
  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
  </a>
  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "::carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  70 => 25,  66 => 23,  63 => 22,  59 => 21,  57 => 20,  53 => 18,  49 => 17,  38 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
