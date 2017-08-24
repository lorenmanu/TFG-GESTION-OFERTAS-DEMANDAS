<?php

/* portadaOferta.html.twig */
class __TwigTemplate_3ff6867ca976e02f51cfa9484889aa6debd61e7118fb18acd1a876fdeb24cd34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "portadaOferta.html.twig", 1);
        $this->blocks = array(
            'menuLateral' => array($this, 'block_menuLateral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 4
        echo "  <li class=\"header\">OFERTAS</li>
    <li class=\"treeview\">
      <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOfertas", array("limpiarCriteriosBusquedas" => "si"));
        echo "\">
        <i class=\"fa fa-th\"></i>
        <span>Mostrar todas las ofertas</span>
      </a>
    </li>
    <li class=\"treeview\">
      <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addOferta");
        echo "\">
\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
        <span>Añadir Oferta</span>
      </a>
    </li>

    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OfertaBundle:Default:menu"));
        echo "

  </li>
";
    }

    public function getTemplateName()
    {
        return "portadaOferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  44 => 12,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portadaOferta.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/portadaOferta.html.twig");
    }
}
