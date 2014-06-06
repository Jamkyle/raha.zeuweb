<?php

/* RahaHomeBundle:Article:show.html.twig */
class __TwigTemplate_2d2d0f20ed5cddaae0127a4e45c135bcd12b1cdd80f38490549ceefc1e879ba7 extends Twig_Template
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
        // line 7
        echo "<article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "</h2>
        </header>
        ";
        // line 12
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media") && $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media"), "providerReference"))) {
            // line 13
            echo "
            ";
            // line 14
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media"), "reference", array());
            // line 15
            echo "
        ";
        }
        // line 17
        echo "        <div>
            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu"), "html", null, true);
        echo "</p>
        </div>
      <p>Tags: <span class=\"highlight\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tags"), "html", null, true);
        echo "</span></p>
        <section class=\"comments\" id=\"comments\">
            <section class=\"previous-comments\">
                <h3>Comments</h3>
                ";
        // line 24
        $this->env->loadTemplate("RahaHomeBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 25
        echo "            </section>
           <h3>Add Comment</h3>
                ";
        // line 27
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("RahaHomeBundle:Comment:new", array("article_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), array());
        // line 28
        echo "        </section>

    </article>
    
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">
            Retour liste d'article
        </a>
    </li>
    ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "    <li>
        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
            Modifier
        </a>
    </li>
    <li>";
            // line 44
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "</li>
    ";
        }
        // line 46
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "RahaHomeBundle:Article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  113 => 44,  106 => 40,  103 => 39,  101 => 38,  94 => 34,  86 => 28,  84 => 27,  80 => 25,  78 => 24,  71 => 20,  66 => 18,  63 => 17,  59 => 15,  57 => 14,  54 => 13,  52 => 12,  47 => 10,  41 => 9,  37 => 7,  34 => 4,  29 => 2,);
    }
}
