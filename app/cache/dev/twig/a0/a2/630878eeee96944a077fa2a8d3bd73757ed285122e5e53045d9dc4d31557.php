<?php

/* GGGUserBundle:Default:inscription.html.twig */
class __TwigTemplate_a0a2630878eeee96944a077fa2a8d3bd73757ed285122e5e53045d9dc4d31557 extends Twig_Template
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
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Page des inscriptions
";
    }

    // line 9
    public function block_wrapper($context, array $blocks = array())
    {
        // line 10
        echo "<h1>Créer votre compte pour consulter les notices, recevoir des alertes sur la parution des notices, etc.</h1>
";
    }

    public function getTemplateName()
    {
        return "GGGUserBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  40 => 5,  37 => 4,  11 => 1,);
    }
}
