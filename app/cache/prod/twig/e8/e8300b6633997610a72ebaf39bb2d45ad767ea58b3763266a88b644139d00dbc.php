<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_153683b532b94fee94dd2910dbfe39f2649741cc01434f2e74338cd18105ea8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.php", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'latDer' => array($this, 'block_latDer'),
            'general' => array($this, 'block_general'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('latDer', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('general', $context, $blocks);
        // line 24
        echo "
";
    }

    // line 4
    public function block_latDer($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"navigation\">
    </div>
";
    }

    // line 9
    public function block_general($context, array $blocks = array())
    {
        // line 10
        echo "  <div id=\"pagina\">
    <h1 id=\"titulo_pagina\">
      <span class=\"texto_titulo\">
      </span>
    </h1>

    ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "            \t\t\t\t\t<h4 id=\"divSaludo\"> Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo ": </h4>
    ";
        } else {
            // line 19
            echo "\t     Necesita loguearse 
    ";
        }
        // line 21
        echo "    </div>

  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  76 => 19,  70 => 17,  68 => 16,  60 => 10,  57 => 9,  51 => 5,  48 => 4,  43 => 24,  41 => 9,  38 => 8,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:confirmed.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
