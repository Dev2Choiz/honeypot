<?php

/* GGGNoticesBundle:Default:appareil.html.twig */
class __TwigTemplate_48035c58f4c0e617c7ad6bff3d58e3e05cf82a31d9b66c9f7f55145c03f66f4e extends Twig_Template
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

    // line 4
    public function block_wrapper($context, array $blocks = array())
    {
        // line 5
        echo "

";
        // line 7
        $this->displayBlock('h1', $context, $blocks);
        // line 10
        echo "
<div class=\"appareil\">
<img src=\"/bundles/gggnotices/images/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appareil"), "photo", array()), "html", null, true);
        echo ".jpg\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appareil"), "nom", array()), "html", null, true);
        echo "\"/>
<p class=\"description\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appareil"), "description", array()), "html", null, true);
        echo "</p>

";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "appareil", true), "notice", array(), "any", false, true), "fichier", array(), "any", true, true)) {
            // line 16
            echo "
<a href=\"/bundles/gggnotices/notices/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appareil"), "notice", array()), "fichier", array()), "html", null, true);
            echo ".pdf\" title=\"notice pour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appareil"), "nom", array()), "html", null, true);
            echo "\">
Télécharger la notice de ";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appareil"), "categorie", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appareil"), "marque", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "appareil"), "nom", array())), "html", null, true);
            echo "
</a>

";
        } else {
            // line 22
            echo "<p class=\"info\">
Nous n'avons pas encore de notice pour 
";
            // line 24
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appareil"), "categorie", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appareil"), "marque", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "appareil"), "nom", array())), "html", null, true);
            echo "
</p>
";
        }
        // line 29
        echo "
</div>


";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "<h1> Notice pour ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "appareil"), "nom", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "appareil"), "marque", array()), "nom", array())), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:appareil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 8,  109 => 7,  101 => 29,  95 => 26,  91 => 25,  87 => 24,  83 => 22,  72 => 18,  66 => 17,  63 => 16,  61 => 15,  56 => 13,  50 => 12,  46 => 10,  44 => 7,  40 => 5,  37 => 4,  11 => 1,);
    }
}
