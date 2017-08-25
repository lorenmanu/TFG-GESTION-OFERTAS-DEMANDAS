<?php

/* portadaDemanda.html.twig */
class __TwigTemplate_01e5d19f2e71d6fa1261328a94747c5e049b172dbe8bdae9f4c1098f09dad0bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "portadaDemanda.html.twig", 1);
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
        $__internal_f88a1045b03f8655f65e6d8372f71e9c30f40c418c15396656f41ca5ce3a61d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88a1045b03f8655f65e6d8372f71e9c30f40c418c15396656f41ca5ce3a61d2->enter($__internal_f88a1045b03f8655f65e6d8372f71e9c30f40c418c15396656f41ca5ce3a61d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "portadaDemanda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f88a1045b03f8655f65e6d8372f71e9c30f40c418c15396656f41ca5ce3a61d2->leave($__internal_f88a1045b03f8655f65e6d8372f71e9c30f40c418c15396656f41ca5ce3a61d2_prof);

    }

    // line 3
    public function block_menuLateral($context, array $blocks = array())
    {
        $__internal_0e9daf6fbea02f8d53d6131a1b69bcb8a0237d037fd0a8df9db5a66c72d03db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9daf6fbea02f8d53d6131a1b69bcb8a0237d037fd0a8df9db5a66c72d03db4->enter($__internal_0e9daf6fbea02f8d53d6131a1b69bcb8a0237d037fd0a8df9db5a66c72d03db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

        // line 4
        echo "  <li class=\"header\">Demandas</li>
    <li class=\"treeview\">
      <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemandas", array("limpiarCriteriosBusquedas" => "si"));
        echo "\">
        <i class=\"fa fa-th\"></i>
        <span>Mostrar todas las demandas</span>
      </a>
    </li>
    <li class=\"treeview\">
      <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addDemanda");
        echo "\">
\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
        <span>Añadir Demandas</span>
      </a>
    </li>

    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("DemandaBundle:Default:menu"));
        echo "

  </li>
";
        
        $__internal_0e9daf6fbea02f8d53d6131a1b69bcb8a0237d037fd0a8df9db5a66c72d03db4->leave($__internal_0e9daf6fbea02f8d53d6131a1b69bcb8a0237d037fd0a8df9db5a66c72d03db4_prof);

    }

    public function getTemplateName()
    {
        return "portadaDemanda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  53 => 12,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block menuLateral %}
  <li class=\"header\">Demandas</li>
    <li class=\"treeview\">
      <a href=\"{{ path('mostrarDemandas', {'limpiarCriteriosBusquedas': \"si\"}) }}\">
        <i class=\"fa fa-th\"></i>
        <span>Mostrar todas las demandas</span>
      </a>
    </li>
    <li class=\"treeview\">
      <a href=\"{{ path('addDemanda') }}\">
\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
        <span>Añadir Demandas</span>
      </a>
    </li>

    {{ render(controller('DemandaBundle:Default:menu')) }}

  </li>
{% endblock %}
", "portadaDemanda.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/portadaDemanda.html.twig");
    }
}
