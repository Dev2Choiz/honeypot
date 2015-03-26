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
        // line 25
        $this->displayBlock('connexion', $context, $blocks);
        // line 37
        echo "
</header><div class=\"wrapper\">
";
        // line 39
        $this->displayBlock('wrapper', $context, $blocks);
        // line 71
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

    // line 25
    public function block_connexion($context, array $blocks = array())
    {
        // line 26
        echo "
";
        // line 27
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 28
            echo "<p>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "username", array()), "html", null, true);
            echo "</p>
";
        } else {
            // line 30
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

    // line 39
    public function block_wrapper($context, array $blocks = array())
    {
        // line 40
        echo "


";
        // line 43
        $this->displayBlock('h1', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "

<ul class=\"menu\">

<li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\">Toutes les marques</a></li>
<li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\">Toutes les catégories</a></li>
</ul>



";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 43
    public function block_h1($context, array $blocks = array())
    {
        // line 44
        echo "<h1>
Trouver la notice de votre objet en 3 clics
</h1>
";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
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
        return array (  182 => 63,  179 => 62,  172 => 44,  169 => 43,  162 => 67,  160 => 62,  152 => 57,  148 => 56,  142 => 52,  133 => 50,  129 => 49,  126 => 48,  124 => 43,  119 => 40,  116 => 39,  104 => 30,  98 => 28,  96 => 27,  93 => 26,  90 => 25,  84 => 12,  77 => 8,  74 => 7,  69 => 71,  67 => 39,  63 => 37,  61 => 25,  54 => 21,  49 => 19,  41 => 13,  39 => 12,  35 => 10,  33 => 7,  25 => 1,);
    }
}
