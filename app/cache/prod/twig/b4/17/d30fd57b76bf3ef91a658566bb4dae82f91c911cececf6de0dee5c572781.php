<?php

/* GGGNoticesBundle:Default:layout.html.twig */
class __TwigTemplate_b417d30fd57b76bf3ef91a658566bb4dae82f91c911cececf6de0dee5c572781 extends Twig_Template
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
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "</header>\t

<div class=\"wrapper\">
";
        // line 29
        $this->displayBlock('wrapper', $context, $blocks);
        // line 63
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

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "
";
    }

    // line 29
    public function block_wrapper($context, array $blocks = array())
    {
        // line 30
        echo "


";
        // line 33
        $this->displayBlock('h1', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            echo "<p class=\"erreur\">
\tInfo: ";
            // line 41
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo $_message_;
            echo "
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "

<ul class=\"menu\">

<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\">Toutes les marques</a></li>
<li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\">Toutes les catégories</a></li>
</ul>



";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 33
    public function block_h1($context, array $blocks = array())
    {
        // line 34
        echo "<h1>
Trouver la notice de votre objet en 3 clics
</h1>
";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "
LAYOUT DE BASE

";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 55,  165 => 54,  158 => 34,  155 => 33,  148 => 59,  146 => 54,  138 => 49,  134 => 48,  128 => 44,  118 => 41,  115 => 40,  110 => 39,  107 => 38,  105 => 33,  100 => 30,  97 => 29,  92 => 24,  89 => 23,  83 => 12,  76 => 8,  73 => 7,  68 => 63,  66 => 29,  61 => 26,  59 => 23,  54 => 21,  49 => 19,  41 => 13,  39 => 12,  35 => 10,  33 => 7,  25 => 1,);
    }
}
