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
            'js' => array($this, 'block_js'),
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
<span class=\"titre\">MON-ASPIRATEUR.FR</span>
<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" title=\"bienvenue sur mon-aspirateur.fr\"/>


";
        // line 23
        $this->displayBlock('connexion', $context, $blocks);
        // line 35
        echo "

";
        // line 37
        $this->displayBlock('menu', $context, $blocks);
        // line 47
        echo "

</header>

<div class=\"wrapper\">
";
        // line 52
        $this->displayBlock('wrapper', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('js', $context, $blocks);
        // line 83
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
    public function block_connexion($context, array $blocks = array())
    {
        // line 24
        echo "
";
        // line 25
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 26
            echo "<p>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "username", array()), "html", null, true);
            echo "</p>
";
        } else {
            // line 28
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

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        // line 38
        echo "<div class=\"menu\">
<ul>
<li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" \ttitle=\"retour à l'accueil\"/>Accueil</a></li>
<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>
</div>

";
    }

    // line 52
    public function block_wrapper($context, array $blocks = array())
    {
        // line 53
        echo "


";
        // line 56
        $this->displayBlock('h1', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 63
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "





";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 56
    public function block_h1($context, array $blocks = array())
    {
        // line 57
        echo "<h1>
Trouver la notice de votre objet en 3 clics
</h1>
";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
        echo "
LAYOUT DE BASE

";
    }

    // line 81
    public function block_js($context, array $blocks = array())
    {
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
        return array (  214 => 81,  207 => 72,  204 => 71,  197 => 57,  194 => 56,  187 => 76,  185 => 71,  177 => 65,  168 => 63,  164 => 62,  161 => 61,  159 => 56,  154 => 53,  151 => 52,  142 => 42,  138 => 41,  134 => 40,  130 => 38,  127 => 37,  115 => 28,  109 => 26,  107 => 25,  104 => 24,  101 => 23,  95 => 12,  88 => 8,  85 => 7,  80 => 83,  78 => 81,  75 => 80,  73 => 52,  66 => 47,  64 => 37,  60 => 35,  58 => 23,  52 => 20,  43 => 13,  41 => 12,  37 => 10,  35 => 7,  27 => 1,);
    }
}
