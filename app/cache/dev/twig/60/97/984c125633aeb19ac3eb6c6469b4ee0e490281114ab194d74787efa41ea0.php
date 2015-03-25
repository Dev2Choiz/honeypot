<?php

/* GGGNoticesBundle::layout.html.twig */
class __TwigTemplate_6097984c125633aeb19ac3eb6c6469b4ee0e490281114ab194d74787efa41ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        $this->displayBlock('stylesheet', $context, $blocks);
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

";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "</body>
</html>";
    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
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

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "
<div class=\"wrapper\">

";
        // line 22
        $this->displayBlock('h1', $context, $blocks);
        // line 25
        echo "
<ul class=\"menu\">

<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\">Toutes les marques</a></li>

</ul>



";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 22
    public function block_h1($context, array $blocks = array())
    {
        // line 23
        echo "<h1>Trouver la notice de votre objet en 3 clics</h1>
";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "
LAYOUT DE BASE

";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  111 => 34,  106 => 23,  103 => 22,  96 => 39,  94 => 34,  85 => 28,  80 => 25,  78 => 22,  73 => 19,  70 => 18,  64 => 12,  57 => 8,  54 => 7,  49 => 43,  47 => 18,  40 => 13,  38 => 12,  34 => 10,  32 => 7,  24 => 1,);
    }
}
