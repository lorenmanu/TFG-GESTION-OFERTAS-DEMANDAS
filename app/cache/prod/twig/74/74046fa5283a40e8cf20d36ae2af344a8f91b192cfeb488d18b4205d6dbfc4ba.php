<?php

/* UserBundle:Default:addUser.html.twig */
class __TwigTemplate_39ed00ff92342d759c213364735989cb584c102bfed9fad12f9039f06700f117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:addUser.html.twig", 2);
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "        Bienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "    ";
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 91
            echo "
        </div>

  </div>


    ";
        }
        // line 98
        echo "   </div>
  </div>
  ";
    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 20
        echo "        <form class=\"form-signin form-horizontal\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addUser");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal fos_user_registration_register\" role=\"form\" onsubmit=\"return validarCorreo()\">

                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\" >Usuario:</label>
                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 27
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "username", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 1, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 28
            echo "                        <span class=\"help-block\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "username", array()), "vars", array()), "errors", array()), 1, array(), "array"), "message", array()), array(), "UserBundle"), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 32
        echo "                </div>

                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\" >Email:</label>
                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <span class=\"help-block\" id=\"errorEmail\">
                    ";
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 1, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 41
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "email", array()), "vars", array()), "errors", array()), 1, array(), "array"), "message", array()), array(), "UserBundle"), "html", null, true);
            echo "
                    ";
        }
        // line 43
        echo "                    </span>
                </div>

                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\" >Contraseña:</label>
                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 51
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", false, true), "first", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 52
            echo "                        <span class=\"help-block\">
                            ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()), 0, array(), "array"), "message", array()), array(), "UserBundle"), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 56
        echo "                </div>


                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\" > Repite contraseña:</label>
                    <div class=\"col-xs-12 col-sm-6 col-md-8\">
                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 64
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array(), "any", false, true), "second", array(), "any", false, true), "vars", array(), "any", false, true), "errors", array(), "any", false, true), 0, array(), "array", false, true), "message", array(), "any", true, true)) {
            // line 65
            echo "                        <span class=\"help-block\">
                            ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), "errors", array()), 0, array(), "array"), "message", array()), array(), "UserBundle"), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 69
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
                    <a id=\"link_help\" href=\"/app_dev.php/login\">Login</a>
                </div>
                </div>


                ";
        // line 88
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                ";
        // line 89
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 89,  194 => 88,  173 => 69,  167 => 66,  164 => 65,  162 => 64,  157 => 62,  149 => 56,  143 => 53,  140 => 52,  138 => 51,  133 => 49,  125 => 43,  119 => 41,  117 => 40,  111 => 37,  104 => 32,  98 => 29,  95 => 28,  93 => 27,  88 => 25,  77 => 20,  74 => 19,  68 => 98,  59 => 91,  56 => 19,  50 => 17,  48 => 16,  36 => 7,  32 => 5,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Default:addUser.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Default/addUser.html.twig");
    }
}
