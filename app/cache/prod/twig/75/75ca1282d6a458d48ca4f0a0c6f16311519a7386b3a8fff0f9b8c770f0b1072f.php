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
        $__internal_b42333262f92c658b6191315019a67ae96c3be1f2ded3d6c3554a8f1fe3ea5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42333262f92c658b6191315019a67ae96c3be1f2ded3d6c3554a8f1fe3ea5a3->enter($__internal_b42333262f92c658b6191315019a67ae96c3be1f2ded3d6c3554a8f1fe3ea5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "portadaDemanda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42333262f92c658b6191315019a67ae96c3be1f2ded3d6c3554a8f1fe3ea5a3->leave($__internal_b42333262f92c658b6191315019a67ae96c3be1f2ded3d6c3554a8f1fe3ea5a3_prof);

    }

    // line 3
    public function block_menuLateral($context, array $blocks = array())
    {
        $__internal_b9c4e5727d747cac30f4cf3e15599a88cf345eb564ebddfac58a13eeb919c8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c4e5727d747cac30f4cf3e15599a88cf345eb564ebddfac58a13eeb919c8c9->enter($__internal_b9c4e5727d747cac30f4cf3e15599a88cf345eb564ebddfac58a13eeb919c8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

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
        
        $__internal_b9c4e5727d747cac30f4cf3e15599a88cf345eb564ebddfac58a13eeb919c8c9->leave($__internal_b9c4e5727d747cac30f4cf3e15599a88cf345eb564ebddfac58a13eeb919c8c9_prof);

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
