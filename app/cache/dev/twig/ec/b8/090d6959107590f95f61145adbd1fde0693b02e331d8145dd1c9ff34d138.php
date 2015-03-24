<?php

/* GGGNoticesBundle:Default:categorie.html.twig */
class __TwigTemplate_ecb8090d6959107590f95f61145adbd1fde0693b02e331d8145dd1c9ff34d138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GGGNoticesBundle:Default:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'wrapper' => array($this, 'block_wrapper'),
            'h1' => array($this, 'block_h1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GGGNoticesBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_wrapper($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('h1', $context, $blocks);
        // line 13
        echo "

";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<h3>Filtrer par marques</h3>
";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

";
        // line 22
        if ( !(null === $this->getContext($context, "marqueNom"))) {
            // line 23
            echo "<p class=\"info\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "nom")), "html", null, true);
            echo " de la marque ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getContext($context, "marqueNom")), "html", null, true);
            echo "</p>
";
        }
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "appareils"));
        foreach ($context['_seq'] as $context["_key"] => $context["appareil"]) {
            // line 26
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => $this->getAttribute($context["appareil"], "id", array()))), "html", null, true);
            echo "\">
<div class=\"appareil\">
<img src=\"/bundles/gggnotices/images/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "photo", array()), "html", null, true);
            echo ".jpg\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "nom", array()), "html", null, true);
            echo "\"/>
<strong class=\"nom\">";
            // line 29
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["appareil"], "nom", array())), "html", null, true);
            echo "</strong> 
<p class=\"description\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "description", array()), "html", null, true);
            echo "</p>
</div>
</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appareil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
<!--a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => 50));
        echo "\">toto</a-->


";
    }

    // line 10
    public function block_h1($context, array $blocks = array())
    {
        // line 11
        echo "<h1>Voici tous les appareils de la categorie ";
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 11,  132 => 10,  124 => 35,  121 => 34,  111 => 30,  107 => 29,  101 => 28,  95 => 26,  91 => 25,  83 => 23,  81 => 22,  76 => 20,  72 => 18,  63 => 16,  59 => 15,  55 => 13,  53 => 10,  50 => 9,  47 => 8,  41 => 3,  38 => 2,  11 => 1,);
    }
}
