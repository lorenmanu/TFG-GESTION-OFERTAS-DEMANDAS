<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c11c13508fe14f36540a35d3e99a7be2ddb082d3b176316a55bf12705eee52dc extends Twig_Template
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
        $__internal_cb54a7d0f05328c33436445ec60c29da31259b76d7df4042d0049dda3b0a2bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb54a7d0f05328c33436445ec60c29da31259b76d7df4042d0049dda3b0a2bc8->enter($__internal_cb54a7d0f05328c33436445ec60c29da31259b76d7df4042d0049dda3b0a2bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb54a7d0f05328c33436445ec60c29da31259b76d7df4042d0049dda3b0a2bc8->leave($__internal_cb54a7d0f05328c33436445ec60c29da31259b76d7df4042d0049dda3b0a2bc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e8cb5e5f3b330e5d35f577390097675bee63787d6d7e1e70b36e3e40b65e227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8cb5e5f3b330e5d35f577390097675bee63787d6d7e1e70b36e3e40b65e227->enter($__internal_2e8cb5e5f3b330e5d35f577390097675bee63787d6d7e1e70b36e3e40b65e227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2e8cb5e5f3b330e5d35f577390097675bee63787d6d7e1e70b36e3e40b65e227->leave($__internal_2e8cb5e5f3b330e5d35f577390097675bee63787d6d7e1e70b36e3e40b65e227_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
