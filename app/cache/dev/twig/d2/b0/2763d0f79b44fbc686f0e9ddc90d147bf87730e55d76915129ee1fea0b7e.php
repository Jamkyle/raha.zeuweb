<?php

/* RahaHomeBundle:Comment:index.html.twig */
class __TwigTemplate_d2b02763d0f79b44fbc686f0e9ddc90d147bf87730e55d76915129ee1fea0b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 4
            echo "            <article class=\"comment ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\" id=\"comment-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
            echo "\">
                <header>
                    <p><span class=\"highlight\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user"), "html", null, true);
            echo "</span> commented <time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "created"), "l, F j, Y"), "html", null, true);
            echo "</time></p>
                </header>
                <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment"), "html", null, true);
            echo "</p>
            </article>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "            <p>Aucun Commentaire pour le moment, Soyez le premier a Commenter...</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "RahaHomeBundle:Comment:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 13,  61 => 8,  52 => 6,  44 => 4,  26 => 3,  20 => 1,  22 => 12,  43 => 17,  19 => 11,  162 => 35,  157 => 30,  154 => 29,  149 => 24,  146 => 23,  141 => 20,  135 => 17,  129 => 16,  123 => 15,  118 => 10,  113 => 5,  95 => 37,  92 => 36,  90 => 35,  78 => 26,  76 => 23,  72 => 21,  70 => 20,  66 => 18,  63 => 17,  58 => 15,  50 => 11,  42 => 7,  38 => 15,  34 => 14,  108 => 47,  101 => 43,  93 => 38,  85 => 32,  83 => 29,  79 => 29,  77 => 11,  68 => 22,  60 => 16,  57 => 16,  53 => 14,  51 => 13,  48 => 10,  46 => 11,  41 => 9,  35 => 8,  31 => 6,  28 => 1,);
    }
}
