<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4b084b6052013b3e9c9f81b84442f944aa3f3e1ed43e668402b9bd75634b84c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ed8ca418f8d0ad534c42419d028a0d2ba75d00adfc35b28b2a2c7424e4e6865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed8ca418f8d0ad534c42419d028a0d2ba75d00adfc35b28b2a2c7424e4e6865->enter($__internal_2ed8ca418f8d0ad534c42419d028a0d2ba75d00adfc35b28b2a2c7424e4e6865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed8ca418f8d0ad534c42419d028a0d2ba75d00adfc35b28b2a2c7424e4e6865->leave($__internal_2ed8ca418f8d0ad534c42419d028a0d2ba75d00adfc35b28b2a2c7424e4e6865_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44ec9f28176c366c9c661afd2f6224f4035bbe208012ed1afa03c62d508713ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ec9f28176c366c9c661afd2f6224f4035bbe208012ed1afa03c62d508713ff->enter($__internal_44ec9f28176c366c9c661afd2f6224f4035bbe208012ed1afa03c62d508713ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_44ec9f28176c366c9c661afd2f6224f4035bbe208012ed1afa03c62d508713ff->leave($__internal_44ec9f28176c366c9c661afd2f6224f4035bbe208012ed1afa03c62d508713ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a2d6b7d1e92186f907081ba1f602bda7a082dca42d6ec27f1052ce94cea35b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2d6b7d1e92186f907081ba1f602bda7a082dca42d6ec27f1052ce94cea35b9->enter($__internal_5a2d6b7d1e92186f907081ba1f602bda7a082dca42d6ec27f1052ce94cea35b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5a2d6b7d1e92186f907081ba1f602bda7a082dca42d6ec27f1052ce94cea35b9->leave($__internal_5a2d6b7d1e92186f907081ba1f602bda7a082dca42d6ec27f1052ce94cea35b9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e44d251af90ce108d6fe701f7f4abde1aef634b4429b0a194a20bd00736b5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e44d251af90ce108d6fe701f7f4abde1aef634b4429b0a194a20bd00736b5ce->enter($__internal_5e44d251af90ce108d6fe701f7f4abde1aef634b4429b0a194a20bd00736b5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5e44d251af90ce108d6fe701f7f4abde1aef634b4429b0a194a20bd00736b5ce->leave($__internal_5e44d251af90ce108d6fe701f7f4abde1aef634b4429b0a194a20bd00736b5ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
