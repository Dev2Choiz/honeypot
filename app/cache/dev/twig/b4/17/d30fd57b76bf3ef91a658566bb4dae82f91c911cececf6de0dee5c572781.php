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
            'connexion' => array($this, 'block_connexion'),
            'menu' => array($this, 'block_menu'),
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

MON-ASPIRATEUR.FR
<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" title=\"bienvenue sur mon-aspirateur.fr\"/>


";
        // line 24
        $this->displayBlock('connexion', $context, $blocks);
        // line 36
        echo "

";
        // line 38
        $this->displayBlock('menu', $context, $blocks);
        // line 48
        echo "

</header>

<div class=\"wrapper\">
";
        // line 53
        $this->displayBlock('wrapper', $context, $blocks);
        // line 81
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

    // line 24
    public function block_connexion($context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 26
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 27
            echo "<p>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "username", array()), "html", null, true);
            echo "</p>
";
        } else {
            // line 29
            echo "<form action=\"";
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
<input type=\"text\" name=\"_username\" placeholder=\"pseudo ou mail\" />
<input type=\"password\" name=\"_password\" placeholder=\"password\" />
<input type=\"submit\" value=\"Connexion\"/>
</form>
";
        }
    }

    // line 38
    public function block_menu($context, array $blocks = array())
    {
        // line 39
        echo "<div class=\"menu\">
<ul>
<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" \ttitle=\"retour à l'accueil\"/>Accueil</a></li>
<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>
</div>

";
    }

    // line 53
    public function block_wrapper($context, array $blocks = array())
    {
        // line 54
        echo "


";
        // line 57
        $this->displayBlock('h1', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "





";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 57
    public function block_h1($context, array $blocks = array())
    {
        // line 58
        echo "<h1>
Trouver la notice de votre objet en 3 clics
</h1>
";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
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
        return array (  202 => 73,  199 => 72,  192 => 58,  189 => 57,  182 => 77,  180 => 72,  172 => 66,  163 => 64,  159 => 63,  156 => 62,  154 => 57,  149 => 54,  146 => 53,  137 => 43,  133 => 42,  129 => 41,  125 => 39,  122 => 38,  110 => 29,  104 => 27,  102 => 26,  99 => 25,  96 => 24,  90 => 12,  83 => 8,  80 => 7,  75 => 81,  73 => 53,  66 => 48,  64 => 38,  60 => 36,  58 => 24,  52 => 21,  42 => 13,  40 => 12,  36 => 10,  34 => 7,  26 => 1,);
    }
}
