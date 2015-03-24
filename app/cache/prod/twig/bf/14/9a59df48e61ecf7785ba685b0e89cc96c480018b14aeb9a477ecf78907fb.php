<?php

/* GGGNoticesBundle:Default:marque.html.twig */
class __TwigTemplate_bf149a59df48e61ecf7785ba685b0e89cc96c480018b14aeb9a477ecf78907fb extends Twig_Template
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
        if (isset($context["nom"])) { $_nom_ = $context["nom"]; } else { $_nom_ = null; }
        echo twig_escape_filter($this->env, $_nom_, "html", null, true);
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "<p class=\"erreur\">
\tInfo: ";
            // line 17
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo $_message_;
            echo "
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<h3>Filtrer par categories</h3>
";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form');
        echo "

<hr/>

\t";
        // line 26
        if (isset($context["categorieNom"])) { $_categorieNom_ = $context["categorieNom"]; } else { $_categorieNom_ = null; }
        echo twig_escape_filter($this->env, $_categorieNom_, "html", null, true);
        echo "

<hr/>

";
        // line 30
        if (isset($context["appareils"])) { $_appareils_ = $context["appareils"]; } else { $_appareils_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_appareils_);
        foreach ($context['_seq'] as $context["_key"] => $context["appareil"]) {
            // line 31
            echo "<a href=\"";
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => $this->getAttribute($_appareil_, "id", array()))), "html", null, true);
            echo "\">
<div class=\"appareil\">
<img src=\"/bundles/gggnotices/images/";
            // line 33
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "photo", array()), "html", null, true);
            echo ".jpg\" alt=\"";
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "nom", array()), "html", null, true);
            echo "\"/>
<div class=\"nom\">";
            // line 34
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "nom", array()), "html", null, true);
            echo "</div> 
<p class=\"description\">";
            // line 35
            if (isset($context["appareil"])) { $_appareil_ = $context["appareil"]; } else { $_appareil_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_appareil_, "description", array()), "html", null, true);
            echo "</p>
</div>
</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appareil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
<!--a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => 50));
        echo "\">toto</a-->


";
    }

    // line 10
    public function block_h1($context, array $blocks = array())
    {
        // line 11
        echo "<h1>Voici tous les appareils de la marque ";
        if (isset($context["nom"])) { $_nom_ = $context["nom"]; } else { $_nom_ = null; }
        echo twig_escape_filter($this->env, $_nom_, "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:marque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 11,  145 => 10,  137 => 40,  134 => 39,  123 => 35,  118 => 34,  110 => 33,  103 => 31,  98 => 30,  90 => 26,  82 => 22,  78 => 20,  68 => 17,  65 => 16,  60 => 15,  56 => 13,  54 => 10,  51 => 9,  48 => 8,  41 => 3,  38 => 2,  11 => 1,);
    }
}
