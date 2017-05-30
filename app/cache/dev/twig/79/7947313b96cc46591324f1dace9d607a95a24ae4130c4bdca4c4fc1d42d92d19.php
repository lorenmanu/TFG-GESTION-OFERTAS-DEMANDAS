<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_70f8cf296f1c2cb8e640cec033b769d1641f6171ce1b044af73f8d81b43978a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d486d3505964c3160b1ac7e0b4d6d141300b0e325426045d2a79be4e05998eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d486d3505964c3160b1ac7e0b4d6d141300b0e325426045d2a79be4e05998eb->enter($__internal_7d486d3505964c3160b1ac7e0b4d6d141300b0e325426045d2a79be4e05998eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d486d3505964c3160b1ac7e0b4d6d141300b0e325426045d2a79be4e05998eb->leave($__internal_7d486d3505964c3160b1ac7e0b4d6d141300b0e325426045d2a79be4e05998eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af92f797f203735941197f177d86278b5ef5db6b5875b482b5fa1b78eb0f3420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af92f797f203735941197f177d86278b5ef5db6b5875b482b5fa1b78eb0f3420->enter($__internal_af92f797f203735941197f177d86278b5ef5db6b5875b482b5fa1b78eb0f3420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_af92f797f203735941197f177d86278b5ef5db6b5875b482b5fa1b78eb0f3420->leave($__internal_af92f797f203735941197f177d86278b5ef5db6b5875b482b5fa1b78eb0f3420_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8ed0dbbff66849f32d6a4635507beffce1eccefb2b71882a4be4992c8f5b665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ed0dbbff66849f32d6a4635507beffce1eccefb2b71882a4be4992c8f5b665->enter($__internal_d8ed0dbbff66849f32d6a4635507beffce1eccefb2b71882a4be4992c8f5b665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8ed0dbbff66849f32d6a4635507beffce1eccefb2b71882a4be4992c8f5b665->leave($__internal_d8ed0dbbff66849f32d6a4635507beffce1eccefb2b71882a4be4992c8f5b665_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_659b3d00f0b124fdef18e5255b739908eb4b20414d56c7049e7f547bfd37ba25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659b3d00f0b124fdef18e5255b739908eb4b20414d56c7049e7f547bfd37ba25->enter($__internal_659b3d00f0b124fdef18e5255b739908eb4b20414d56c7049e7f547bfd37ba25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_659b3d00f0b124fdef18e5255b739908eb4b20414d56c7049e7f547bfd37ba25->leave($__internal_659b3d00f0b124fdef18e5255b739908eb4b20414d56c7049e7f547bfd37ba25_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
