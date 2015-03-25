<?php

/* GGGNoticesBundle:Default:layout.html.twig  */
class __TwigTemplate_5834e82bd20a758fa1c5dda58c77155ae67edad39ae43f0bd72e9c55d9580d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'wrapper' => array($this, 'block_wrapper'),
            'h1' => array($this, 'block_h1'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

<meta charset=\"ISO-8859-1\"/>

";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
<title>
";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "</title>

</head>
<body>

<header>
<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" title=\"retour à l'accueil\"/>
MON-ASPIRATEUR.FR
<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" title=\"bienvenue sur mon-aspirateur.fr\"/>
</a>

";
        // line 24
        $this->env->loadTemplate("GGGUserBundle:Security:login.html.twig")->display($context);
        // line 25
        echo "

";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "</header>\t

<div class=\"wrapper\">
";
        // line 33
        $this->displayBlock('wrapper', $context, $blocks);
        // line 65
        echo "</body>
</html>";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Honeypot-1";
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
        echo "
";
    }

    // line 33
    public function block_wrapper($context, array $blocks = array())
    {
        // line 34
        echo "


";
        // line 37
        $this->displayBlock('h1', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

<ul class=\"menu\">

<li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\">Toutes les marques</a></li>
<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\">Toutes les catégories</a></li>
</ul>



";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 37
    public function block_h1($context, array $blocks = array())
    {
        // line 38
        echo "<h1>
Trouver la notice de votre objet en 3 clics
</h1>
";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "
LAYOUT DE BASE

";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:layout.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  167 => 56,  160 => 38,  157 => 37,  150 => 61,  148 => 56,  140 => 51,  136 => 50,  130 => 46,  121 => 44,  117 => 43,  114 => 42,  112 => 37,  107 => 34,  104 => 33,  99 => 28,  96 => 27,  90 => 12,  83 => 8,  80 => 7,  75 => 65,  73 => 33,  68 => 30,  66 => 27,  62 => 25,  60 => 24,  54 => 21,  49 => 19,  41 => 13,  39 => 12,  35 => 10,  33 => 7,  25 => 1,);
    }
}
