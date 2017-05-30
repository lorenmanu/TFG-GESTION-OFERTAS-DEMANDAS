<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_5aebf28bf5de48f222399554a1dc5f7825be76177dcfab61a3c5fb2fcdc123d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.php", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'side' => array($this, 'block_side'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8056f0e16a57f5f9bb1cac95770e9c3b0c2ac34d0d81fbee73973091a36e6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8056f0e16a57f5f9bb1cac95770e9c3b0c2ac34d0d81fbee73973091a36e6ac->enter($__internal_f8056f0e16a57f5f9bb1cac95770e9c3b0c2ac34d0d81fbee73973091a36e6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8056f0e16a57f5f9bb1cac95770e9c3b0c2ac34d0d81fbee73973091a36e6ac->leave($__internal_f8056f0e16a57f5f9bb1cac95770e9c3b0c2ac34d0d81fbee73973091a36e6ac_prof);

    }

    // line 3
    public function block_side($context, array $blocks = array())
    {
        $__internal_b4bf0daa7c0d5fc86b5d809bd4ff186674e8d4686808927720f35391a809fe59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bf0daa7c0d5fc86b5d809bd4ff186674e8d4686808927720f35391a809fe59->enter($__internal_b4bf0daa7c0d5fc86b5d809bd4ff186674e8d4686808927720f35391a809fe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 4
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "                                Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " 
                            ";
        } else {
            // line 7
            echo "    <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\" class=\"form-signin\">
        <div class=\"login-container\">
        \t";
            // line 9
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 29
            echo "                <a id=\"link_help\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a> 
                <a id=\"link_help\" href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Forgot Password</a>
        </div>
    </form>

                                     Necesita loguearse 
                            ";
        }
        // line 36
        echo "

";
        
        $__internal_b4bf0daa7c0d5fc86b5d809bd4ff186674e8d4686808927720f35391a809fe59->leave($__internal_b4bf0daa7c0d5fc86b5d809bd4ff186674e8d4686808927720f35391a809fe59_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7496074435835a3de07aded6a03009b192c9b134f7cc3845d18f500f2a9575da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7496074435835a3de07aded6a03009b192c9b134f7cc3845d18f500f2a9575da->enter($__internal_7496074435835a3de07aded6a03009b192c9b134f7cc3845d18f500f2a9575da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "            <h1>Login to Your Account</h1><br>
            ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 14
        echo "            <form>
                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"remember_me\">Remember me</label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                </div>
            </form>
            ";
        
        $__internal_7496074435835a3de07aded6a03009b192c9b134f7cc3845d18f500f2a9575da->leave($__internal_7496074435835a3de07aded6a03009b192c9b134f7cc3845d18f500f2a9575da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 20,  106 => 17,  102 => 16,  98 => 14,  92 => 12,  90 => 11,  87 => 10,  81 => 9,  72 => 36,  63 => 30,  58 => 29,  56 => 9,  50 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig.php' %}

{% block side %}
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                Bienvenido {{ app.user.username }} 
                            {% else %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
        <div class=\"login-container\">
        \t{% block fos_user_content %}
            <h1>Login to Your Account</h1><br>
            {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
            <form>
                <div class=\"form-group\">
                    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"remember_me\">Remember me</label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                </div>
            </form>
            {% endblock fos_user_content %}
                <a id=\"link_help\" href=\"{{ path('fos_user_registration_register') }}\">Register</a> 
                <a id=\"link_help\" href=\"{{ path('fos_user_change_password') }}\">Forgot Password</a>
        </div>
    </form>

                                     Necesita loguearse 
                            {% endif %}


{% endblock %}", "@FOSUser/layout.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/src/UserBundle/Resources/views/layout.html.twig");
    }
}
