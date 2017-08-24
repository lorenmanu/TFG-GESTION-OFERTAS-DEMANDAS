<?php

/* request->query */
class __TwigTemplate_b95012a6339ba44baa35139ce55c7212c95353cd5da95cc0250ac31955b05363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.php", "request->query", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'latDer' => array($this, 'block_latDer'),
            'general' => array($this, 'block_general'),
            'latIzq' => array($this, 'block_latIzq'),
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

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('latDer', $context, $blocks);
        // line 16
        echo "
  <div id=\"pagina\">
    <h1 id=\"titulo_pagina\">
      <span class=\"texto_titulo\">
      </span>
    </h1>
    ";
        // line 22
        $this->displayBlock('general', $context, $blocks);
        // line 25
        echo "    </div>
  



";
        // line 30
        $this->displayBlock('latIzq', $context, $blocks);
        // line 68
        echo "



";
    }

    // line 5
    public function block_latDer($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"navigation\">
        ";
        // line 7
        if (array_key_exists("chart", $context)) {
            // line 8
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OfertaBundle:Default:menu2"));
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OfertaBundle:Default:menu"));
            echo "
        ";
        }
        // line 12
        echo "    </div>


";
    }

    // line 22
    public function block_general($context, array $blocks = array())
    {
        // line 23
        echo "
    ";
    }

    // line 30
    public function block_latIzq($context, array $blocks = array())
    {
        // line 31
        echo "
    <div id=\"banners\">
        <div class=\"mod-banners\">
            <ul>
                <li class=\"banner_container model-resaltado-01 showtext\">
                    <a class=\"banner\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addOferta");
        echo "\">
                        <h4>Añadir Oferta.</h4>
                    </a>
                </li>
            </ul>
            <ul>
                <li class=\"banner_container model-resaltado-01 showtext\">
                    <a class=\"banner\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath("main"), "html", null, true);
        echo "\">
                    <h4>Logout.</h4>
                    </a>
                </li>
            </ul>
            <ul>
                <li class=\"banner_container model-resaltado-01 showtext\">
                    <a class=\"banner\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarMenu");
        echo "\">
                        <h4>Editar Menu.</h4>
                    </a>
                </li>
            </ul>
            <ul>
                <li class=\"banner_container model-resaltado-01 showtext\">
                    <a class=\"banner\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grafica_ofertas");
        echo "\">
                    <h4>Gráfica Ofertas.</h4>
                    </a>
                </li>
            </ul>
        </div>
    </div>



    ";
    }

    public function getTemplateName()
    {
        return "request->query";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  131 => 50,  121 => 43,  111 => 36,  104 => 31,  101 => 30,  96 => 23,  93 => 22,  86 => 12,  80 => 10,  74 => 8,  72 => 7,  69 => 6,  66 => 5,  58 => 68,  56 => 30,  49 => 25,  47 => 22,  39 => 16,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "request->query", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/request->query");
    }
}
