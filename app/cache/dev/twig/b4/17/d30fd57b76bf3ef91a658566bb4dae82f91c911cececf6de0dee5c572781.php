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
<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/logo_happy.png"), "html", null, true);
        echo "\" 
\t alt=\"logo\" 
\t title=\"bienvenue sur mon-aspirateur.fr\"/>
<span class=\"titre\">Faîtes durer vos appareils et économisez</span>



";
        // line 26
        $this->displayBlock('connexion', $context, $blocks);
        // line 45
        echo "

";
        // line 47
        $this->displayBlock('menu', $context, $blocks);
        // line 58
        echo "

</header>

<div class=\"wrapper\">
";
        // line 63
        $this->displayBlock('wrapper', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('js', $context, $blocks);
        // line 94
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

    // line 26
    public function block_connexion($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"log\">

";
        // line 29
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 30
            echo "<p>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "username", array()), "html", null, true);
            echo "</p>
";
        } else {
            // line 32
            echo "
<form action=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
<input type=\"text\" name=\"_username\" placeholder=\"pseudo ou mail\" />
<input type=\"password\" name=\"_password\" placeholder=\"password\" />
<input type=\"submit\" value=\"Connexion\"/>
vous n'avez pas encore de compte ? <a href=\" ";
            // line 37
            echo $this->env->getExtension('routing')->getPath("ggg_user_inscription");
            echo "\" title=\"page des inscriptions\">inscrivez-vous</a>
</form>


";
        }
        // line 42
        echo "
</div>
";
    }

    // line 47
    public function block_menu($context, array $blocks = array())
    {
        // line 48
        echo "
<div class=\"menu\">
<ul>
<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" \ttitle=\"retour à l'accueil\"/>Accueil</a></li>
<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>
</div>

";
    }

    // line 63
    public function block_wrapper($context, array $blocks = array())
    {
        // line 64
        echo "


";
        // line 67
        $this->displayBlock('h1', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 74
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "





";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 67
    public function block_h1($context, array $blocks = array())
    {
        // line 68
        echo "<h1>
Trouvez la notice de votre appareil en 3 clics
</h1>
";
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
        // line 83
        echo "
LAYOUT DE BASE

";
    }

    // line 92
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
        return array (  231 => 92,  224 => 83,  221 => 82,  214 => 68,  211 => 67,  204 => 87,  202 => 82,  194 => 76,  185 => 74,  181 => 73,  178 => 72,  176 => 67,  171 => 64,  168 => 63,  159 => 53,  155 => 52,  151 => 51,  146 => 48,  143 => 47,  137 => 42,  129 => 37,  122 => 33,  119 => 32,  113 => 30,  111 => 29,  107 => 27,  104 => 26,  98 => 12,  91 => 8,  88 => 7,  83 => 94,  81 => 92,  78 => 91,  76 => 63,  69 => 58,  67 => 47,  63 => 45,  61 => 26,  51 => 19,  43 => 13,  41 => 12,  37 => 10,  35 => 7,  27 => 1,);
    }
}
