<?php

/* UserBundle:Registration/Registration:register.html.twig */
class __TwigTemplate_d3cd63f42d7324072b829e2aa64708c7e1b636936dd579ce4cbf98f3c4841e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig.php", "UserBundle:Registration/Registration:register.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_side($context, array $blocks = array())
    {
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 50
        echo "


";
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal fos_user_registration_register\" role=\"form\">
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"form-group";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget');
        echo "
            ";
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 14
            echo "            <span class=\"help-block\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 18
        echo "    </div>
    <div class=\"form-group";
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "username", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget');
        echo "
            ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "username", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 23
            echo "            <span class=\"help-block\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "username", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 27
        echo "    </div>
    <div class=\"form-group";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", false, true), "first", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'label');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget');
        echo "
            ";
        // line 31
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", false, true), "first", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 32
            echo "            <span class=\"help-block\">
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 36
        echo "    </div>
    <div class=\"form-group";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", false, true), "second", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'label');
        echo "
            ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget');
        echo "
            ";
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", false, true), "second", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 41
            echo "            <span class=\"help-block\">
                ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 45
        echo "    </div>
    <input type=\"submit\" class=\"login login-submit\" id=\"_submit\" name=\"_submit\" value=\"Registrar\" />
    <a id=\"link_help\" href=\"/app_dev.php/login\">Login</a>
";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration/Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 48,  164 => 45,  158 => 42,  155 => 41,  153 => 40,  149 => 39,  145 => 38,  139 => 37,  136 => 36,  130 => 33,  127 => 32,  125 => 31,  121 => 30,  117 => 29,  111 => 28,  108 => 27,  102 => 24,  99 => 23,  97 => 22,  93 => 21,  89 => 20,  83 => 19,  80 => 18,  74 => 15,  71 => 14,  69 => 13,  65 => 12,  61 => 11,  55 => 10,  51 => 9,  44 => 8,  41 => 7,  34 => 50,  32 => 7,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Registration/Registration:register.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Registration/Registration/register.html.twig");
    }
}
