<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fea974b4c9ccfed6b849e86702bf177eb22885390c94a4333ee08a6bbce964a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 2);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "

<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/validarCorreo.js"), "html", null, true);
        echo "\" type='text/javascript'></script>


    <h2>REGISTRAR</h2>
    <hr>

    <div class=\"row\">
      <div class=\"col-sm-12\">

    ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 88
        echo "
        </div>

  </div>


   </div>
  </div>
  ";
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 17
        echo "        <form class=\"form-signin form-horizontal\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal fos_user_registration_register\" role=\"form\" onsubmit=\"return validarCorreo()\">

                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\" >Usuario:</label>
                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "username", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 1, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 25
            echo "                        <span class=\"help-block\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "username", array()), "vars", array()), "errors", array()), 1, array(), "array"), "message", array()), array(), "UserBundle"), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 29
        echo "                </div>

                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\" >Email:</label>
                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <span class=\"help-block\" id=\"errorEmail\">
                    ";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 1, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 38
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "vars", array()), "errors", array()), 1, array(), "array"), "message", array()), array(), "UserBundle"), "html", null, true);
            echo "
                    ";
        }
        // line 40
        echo "                    </span>
                </div>

                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\" >Contraseña:</label>
                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", false, true), "first", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 49
            echo "                        <span class=\"help-block\">
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), array(), "UserBundle"), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 53
        echo "                </div>


                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\" > Repite contraseña:</label>
                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 61
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", false, true), "second", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 62
            echo "                        <span class=\"help-block\">
                            ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), "errors", array()), 0, array(), "array"), "message", array()), array(), "UserBundle"), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 66
        echo "                </div>


                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <label>
                            <input type=\"submit\" class=\"btn btn-lg btn-primary btn-block\" id=\"_submit\" name=\"_submit\" value=\"Registrar\" />
                        </label>
                    </div>
                </div>


                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                    <a id=\"link_help\" href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a>
                </div>
                </div>


                ";
        // line 85
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                ";
        // line 86
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 86,  185 => 85,  177 => 80,  161 => 66,  155 => 63,  152 => 62,  150 => 61,  145 => 59,  137 => 53,  131 => 50,  128 => 49,  126 => 48,  121 => 46,  113 => 40,  107 => 38,  105 => 37,  99 => 34,  92 => 29,  86 => 26,  83 => 25,  81 => 24,  76 => 22,  65 => 17,  62 => 16,  50 => 88,  48 => 16,  36 => 7,  32 => 5,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
