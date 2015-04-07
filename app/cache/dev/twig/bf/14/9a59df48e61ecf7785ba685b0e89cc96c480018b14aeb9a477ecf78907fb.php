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
            'js' => array($this, 'block_js'),
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
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
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
        // line 15
        echo "

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_filtre"), 'form_start');
        echo "
<h3>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_filtre"), "nom", array()), 'label', array("label" => "Filtre par catégories"));
        echo "</h3>
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_filtre"), "nom", array()), 'widget');
        echo "
";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_filtre"), 'form_end');
        echo "


";
        // line 27
        if ( !(null === $this->getContext($context, "categorieNom"))) {
            // line 28
            echo "<p class=\"info\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "categorieNom")), "html", null, true);
            echo " de la marque ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getContext($context, "nom")), "html", null, true);
            echo "</p>
";
        }
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "appareils"));
        foreach ($context['_seq'] as $context["_key"] => $context["appareil"]) {
            // line 31
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => $this->getAttribute($context["appareil"], "id", array()))), "html", null, true);
            echo "\">
<div class=\"appareil\">
<img src=\"/bundles/gggnotices/images/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "photo", array()), "html", null, true);
            echo ".jpg\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "nom", array()), "html", null, true);
            echo "\"/>
<strong class=\"nom\">";
            // line 34
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["appareil"], "marque", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["appareil"], "nom", array())), "html", null, true);
            echo "</strong> 
<!--p class=\"description\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "description", array()), "html", null, true);
            echo "</p-->
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
        echo "
<h1>Trouvez la notice de votre appareil ";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getContext($context, "nom")), "html", null, true);
        echo "</h1>

";
    }

    // line 45
    public function block_js($context, array $blocks = array())
    {
        // line 46
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/formulaires.js"), "html", null, true);
        echo "\"></script>
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
        return array (  163 => 46,  160 => 45,  153 => 12,  150 => 11,  147 => 10,  139 => 40,  136 => 39,  126 => 35,  120 => 34,  114 => 33,  108 => 31,  104 => 30,  96 => 28,  94 => 27,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  73 => 20,  64 => 18,  60 => 17,  56 => 15,  54 => 10,  51 => 9,  48 => 8,  42 => 3,  39 => 2,  11 => 1,);
    }
}
