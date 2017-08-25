<?php

/* portadaOferta.html.twig */
class __TwigTemplate_cb3bb6045dc72e02b2b9df978d1fb403b7d3992cf6feee475aba416ec8cf06b1 extends Twig_Template
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
        $__internal_9bb5877a3e760142a58418727acfbb6680e100cfc9f2f21a45f9ee23a29fd0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb5877a3e760142a58418727acfbb6680e100cfc9f2f21a45f9ee23a29fd0bd->enter($__internal_9bb5877a3e760142a58418727acfbb6680e100cfc9f2f21a45f9ee23a29fd0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "portadaOferta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bb5877a3e760142a58418727acfbb6680e100cfc9f2f21a45f9ee23a29fd0bd->leave($__internal_9bb5877a3e760142a58418727acfbb6680e100cfc9f2f21a45f9ee23a29fd0bd_prof);

    }

    // line 3
    public function block_menuLateral($context, array $blocks = array())
    {
        $__internal_34b42372bb1a7dac7117efe2a796bbf2ba087ee60f160fcb319abab71efe0f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b42372bb1a7dac7117efe2a796bbf2ba087ee60f160fcb319abab71efe0f5b->enter($__internal_34b42372bb1a7dac7117efe2a796bbf2ba087ee60f160fcb319abab71efe0f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLateral"));

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
        
        $__internal_34b42372bb1a7dac7117efe2a796bbf2ba087ee60f160fcb319abab71efe0f5b->leave($__internal_34b42372bb1a7dac7117efe2a796bbf2ba087ee60f160fcb319abab71efe0f5b_prof);

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
  <li class=\"header\">OFERTAS</li>
    <li class=\"treeview\">
      <a href=\"{{ path('mostrarOfertas', {'limpiarCriteriosBusquedas': \"si\"}) }}\">
        <i class=\"fa fa-th\"></i>
        <span>Mostrar todas las ofertas</span>
      </a>
    </li>
    <li class=\"treeview\">
      <a href=\"{{ path('addOferta') }}\">
\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
        <span>Añadir Oferta</span>
      </a>
    </li>

    {{ render(controller('OfertaBundle:Default:menu')) }}

  </li>
{% endblock %}
", "portadaOferta.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/portadaOferta.html.twig");
    }
}
