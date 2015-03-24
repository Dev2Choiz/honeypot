<?php

/* GGGNoticesBundle:Default:listecategories.html.twig */
class __TwigTemplate_03182b5b1afe6cae0a73f6657b21f5412160c86d4efbf4afc6bcaf3d36f954a0 extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
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
        echo "Toutes les catégories
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style_liste.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "<nav><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\"</nav>
";
    }

    // line 14
    public function block_wrapper($context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('h1', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "<p class=\"erreur\">
\tInfo: ";
            // line 22
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo $_message_;
            echo "
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
<ul>
";
        // line 27
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 28
            echo "<li><a href=\"";
            if (isset($context["categorie"])) { $_categorie_ = $context["categorie"]; } else { $_categorie_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_categories_nom", array("nom" => $this->getAttribute($_categorie_, "nom", array()))), "html", null, true);
            echo "\">";
            if (isset($context["categorie"])) { $_categorie_ = $context["categorie"]; } else { $_categorie_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_categorie_, "nom", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories_nom", array("nom" => "toto"));
        echo "\">toto</a></li>
</ul>



";
    }

    // line 16
    public function block_h1($context, array $blocks = array())
    {
        // line 17
        echo "<h1>Retrouver votre matériel en commençant par sa catégorie</h1>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:listecategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 17,  130 => 16,  119 => 30,  106 => 28,  101 => 27,  97 => 25,  87 => 22,  84 => 21,  79 => 20,  76 => 19,  74 => 16,  71 => 15,  68 => 14,  61 => 11,  58 => 10,  51 => 7,  48 => 6,  43 => 3,  40 => 2,  11 => 1,);
    }
}
