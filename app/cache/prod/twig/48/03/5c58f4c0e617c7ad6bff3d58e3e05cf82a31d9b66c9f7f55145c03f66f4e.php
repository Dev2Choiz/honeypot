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
        if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "photo", array()), "html", null, true);
        echo ".jpg\" alt=\"";
        if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "nom", array()), "html", null, true);
        echo "\"/>
<p class=\"description\">";
        // line 13
        if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "description", array()), "html", null, true);
        echo "</p>

";
        // line 15
        if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
        if ($this->getAttribute($this->getAttribute($_appareil_, "notice", array(), "any", false, true), "fichier", array(), "any", true, true)) {
            // line 16
            echo "
<a href=\"/bundles/gggnotices/notices/";
            // line 17
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_appareil_, "notice", array()), "fichier", array()), "html", null, true);
            echo ".pdf\" title=\"notice pour ";
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "nom", array()), "html", null, true);
            echo "\">
Télécharger la notice de ";
            // line 18
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($_appareil_, "categorie", array()), "nom", array())), "html", null, true);
            echo " ";
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($_appareil_, "marque", array()), "nom", array())), "html", null, true);
            echo " ";
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_appareil_, "nom", array())), "html", null, true);
            echo "
</a>

";
        } else {
            // line 22
            echo "<p class=\"info\">
Nous n'avons pas encore de notice pour 
";
            // line 24
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($_appareil_, "categorie", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 25
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($_appareil_, "marque", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 26
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_appareil_, "nom", array())), "html", null, true);
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
        if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "nom", array()), "html", null, true);
        echo " de ";
        if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($_appareil_, "marque", array()), "nom", array())), "html", null, true);
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
        return array (  124 => 8,  121 => 7,  113 => 29,  106 => 26,  101 => 25,  96 => 24,  92 => 22,  78 => 18,  70 => 17,  67 => 16,  64 => 15,  58 => 13,  50 => 12,  46 => 10,  44 => 7,  40 => 5,  37 => 4,  11 => 1,);
    }
}
