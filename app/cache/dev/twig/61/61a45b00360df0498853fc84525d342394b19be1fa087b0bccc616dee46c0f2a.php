<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fab23d47c17af488dae9a10b02c134e1ba734fb58af9f9f9363c8991cbde759c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a894bc6e2be7d730c41d258560cb65c1abae4989074f9c297a1cbdb3243dbc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a894bc6e2be7d730c41d258560cb65c1abae4989074f9c297a1cbdb3243dbc43->enter($__internal_a894bc6e2be7d730c41d258560cb65c1abae4989074f9c297a1cbdb3243dbc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a894bc6e2be7d730c41d258560cb65c1abae4989074f9c297a1cbdb3243dbc43->leave($__internal_a894bc6e2be7d730c41d258560cb65c1abae4989074f9c297a1cbdb3243dbc43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4c18a1063689091d576775ab34a8bc67ea16b9ca069f6ebf31ffa088ddbadcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c18a1063689091d576775ab34a8bc67ea16b9ca069f6ebf31ffa088ddbadcd->enter($__internal_f4c18a1063689091d576775ab34a8bc67ea16b9ca069f6ebf31ffa088ddbadcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f4c18a1063689091d576775ab34a8bc67ea16b9ca069f6ebf31ffa088ddbadcd->leave($__internal_f4c18a1063689091d576775ab34a8bc67ea16b9ca069f6ebf31ffa088ddbadcd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7542c7f068a3743049e13e72016d5ea73d2947bdb70058f2ab18b806f1aa5d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7542c7f068a3743049e13e72016d5ea73d2947bdb70058f2ab18b806f1aa5d18->enter($__internal_7542c7f068a3743049e13e72016d5ea73d2947bdb70058f2ab18b806f1aa5d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7542c7f068a3743049e13e72016d5ea73d2947bdb70058f2ab18b806f1aa5d18->leave($__internal_7542c7f068a3743049e13e72016d5ea73d2947bdb70058f2ab18b806f1aa5d18_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b379ae6fd4e6dbf0dd34560dbd8aac0aa09dde7cb4e06aee30ccaf6c48833d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b379ae6fd4e6dbf0dd34560dbd8aac0aa09dde7cb4e06aee30ccaf6c48833d1a->enter($__internal_b379ae6fd4e6dbf0dd34560dbd8aac0aa09dde7cb4e06aee30ccaf6c48833d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b379ae6fd4e6dbf0dd34560dbd8aac0aa09dde7cb4e06aee30ccaf6c48833d1a->leave($__internal_b379ae6fd4e6dbf0dd34560dbd8aac0aa09dde7cb4e06aee30ccaf6c48833d1a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
