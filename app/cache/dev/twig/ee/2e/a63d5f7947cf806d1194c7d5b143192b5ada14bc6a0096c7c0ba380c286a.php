<?php

/* SonataMediaBundle:MediaAdmin:select_provider.html.twig */
class __TwigTemplate_ee2ea63d5f7947cf806d1194c7d5b143192b5ada14bc6a0096c7c0ba380c286a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:action.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_select_provider", array(), "SonataMediaBundle"), "html", null, true);
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 20
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["code"] => $context["provider"]) {
            // line 25
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("provider" => $this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "name"))), "method"), "html", null, true);
            echo "\"
                   class=\"btn btn-app\"
                   data-toggle=\"tooltip\"
                   data-placement=\"top\"
                   title=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "providerMetadata"), "description"), array(), (($this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : null), "providerMetadata", array(), "any", false, true), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : null), "providerMetadata", array(), "any", false, true), "domain"), "SonataMediaBundle")) : ("SonataMediaBundle"))), "html", null, true);
            echo "\"
                        >
                    ";
            // line 31
            if ((null === $this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "providerMetadata"), "image"))) {
                // line 32
                echo "                        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "providerMetadata"), "option", array(0 => "class"), "method"), "html", null, true);
                echo "\"></i>
                    ";
            } else {
                // line 34
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "providerMetadata"), "image")), "html", null, true);
                echo "\" style=\"max-height: 20px; max-width: 100px;\"/>
                        <br />
                    ";
            }
            // line 37
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")), "providerMetadata"), "title"), array(), (($this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : null), "providerMetadata", array(), "any", false, true), "domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["provider"]) ? $context["provider"] : null), "providerMetadata", array(), "any", false, true), "domain"), "SonataMediaBundle")) : ("SonataMediaBundle"))), "html", null, true);
            echo "
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_provider_available", array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:select_provider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  92 => 40,  83 => 37,  76 => 34,  70 => 32,  68 => 31,  63 => 29,  55 => 25,  50 => 24,  43 => 20,  38 => 17,  35 => 16,  29 => 14,);
    }
}
