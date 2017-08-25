<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ff78fbc51ae38e67c56e6bffb81a40d1bb92fd4a7a01adfb1a7010123c263747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c5afa361fa88b86017d35f3034f9aae963ef2f32a98fd3a3c772585e22bcd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5afa361fa88b86017d35f3034f9aae963ef2f32a98fd3a3c772585e22bcd8f->enter($__internal_2c5afa361fa88b86017d35f3034f9aae963ef2f32a98fd3a3c772585e22bcd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c5afa361fa88b86017d35f3034f9aae963ef2f32a98fd3a3c772585e22bcd8f->leave($__internal_2c5afa361fa88b86017d35f3034f9aae963ef2f32a98fd3a3c772585e22bcd8f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd39c2e4708abea9742cb7244db35fbdef66f9f174ff4a5da2bbdfb45648384c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd39c2e4708abea9742cb7244db35fbdef66f9f174ff4a5da2bbdfb45648384c->enter($__internal_fd39c2e4708abea9742cb7244db35fbdef66f9f174ff4a5da2bbdfb45648384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_fd39c2e4708abea9742cb7244db35fbdef66f9f174ff4a5da2bbdfb45648384c->leave($__internal_fd39c2e4708abea9742cb7244db35fbdef66f9f174ff4a5da2bbdfb45648384c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
