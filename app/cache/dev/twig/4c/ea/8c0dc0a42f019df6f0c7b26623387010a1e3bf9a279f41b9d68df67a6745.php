<?php

/* GGGNoticesBundle:Default:listemarques.html.twig */
class __TwigTemplate_4cea8c0dc0a42f019df6f0c7b26623387010a1e3bf9a279f41b9d68df67a6745 extends Twig_Template
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
        echo "Toutes les marques
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

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "<nav><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\"</nav>
";
    }

    // line 16
    public function block_wrapper($context, array $blocks = array())
    {
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('h1', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "<p class=\"erreur\">
\tInfo: ";
            // line 24
            echo $context["message"];
            echo "
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
<ul>
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "marques"));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 30
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_marques_nom", array("nom" => $this->getAttribute($context["marque"], "nom", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["marque"], "nom", array())), "html", null, true);
            echo "  ";
            if ($this->getAttribute($context["marque"], "logo", array())) {
                echo "<img src=\"/bundles/gggnotices/images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "logo", array()), "html", null, true);
                echo ".jpg\" alt=\"logo ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "nom", array()), "html", null, true);
                echo "\"/>";
            }
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</ul>



";
    }

    // line 18
    public function block_h1($context, array $blocks = array())
    {
        // line 19
        echo "<h1>Retrouver votre matériel en commençant par la marque</h1>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:listemarques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 19,  130 => 18,  122 => 32,  103 => 30,  99 => 29,  95 => 27,  86 => 24,  83 => 23,  79 => 22,  76 => 21,  74 => 18,  71 => 17,  68 => 16,  61 => 12,  58 => 11,  51 => 7,  48 => 6,  43 => 3,  40 => 2,  11 => 1,);
    }
}
