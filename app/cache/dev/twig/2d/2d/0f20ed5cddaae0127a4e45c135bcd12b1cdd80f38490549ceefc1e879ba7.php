<?php

/* RahaHomeBundle:Article:show.html.twig */
class __TwigTemplate_2d2d0f20ed5cddaae0127a4e45c135bcd12b1cdd80f38490549ceefc1e879ba7 extends Twig_Template
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
        // line 6
        echo "<article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "</h2>
        </header>
        ";
        // line 11
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media") && $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media"), "providerReference"))) {
            // line 12
            echo "
            ";
            // line 13
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "media"), "reference", array());
            // line 14
            echo "
        ";
        }
        // line 16
        echo "        <div>
            <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu"), "html", null, true);
        echo "</p>
        </div>
        <table class=\"record\">
            <tr>
            <th>Tags</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tags"), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <section class=\"comments\" id=\"comments\">
            <section class=\"previous-comments\">
                <h3>Comments</h3>
                ";
        // line 28
        $this->env->loadTemplate("RahaHomeBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 29
        echo "            </section>
           <h3>Add Comment</h3>
                ";
        // line 31
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("RahaHomeBundle:Comment:new", array("article_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), array());
        // line 32
        echo "        </section>

    </article>
    
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">
            Retour liste d'article
        </a>
    </li>
    <li>
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Modifier
        </a>
    </li>
    <li>";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
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
        return array (  108 => 47,  101 => 43,  93 => 38,  85 => 32,  83 => 31,  79 => 29,  77 => 28,  68 => 22,  60 => 17,  57 => 16,  53 => 14,  51 => 13,  48 => 12,  46 => 11,  41 => 9,  35 => 8,  31 => 6,  28 => 3,);
    }
}
