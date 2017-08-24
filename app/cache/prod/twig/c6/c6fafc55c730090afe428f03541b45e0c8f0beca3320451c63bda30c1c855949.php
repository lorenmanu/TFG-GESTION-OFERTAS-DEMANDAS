<?php

/* UserBundle:Default:perfilUser.html.twig */
class __TwigTemplate_3a19a32277e0fa3731abd3bcb28d4870d1ef4c3b1959b2ec953b994bf4d99ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:perfilUser.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
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

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modalMostrarOfertas.css"), "html", null, true);
        echo "\" media=\"all\" />

  <!-- /.container -->
  ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "page"), "method")) {
            // line 10
            echo "    <script>
      // This would automatically run when page loads.
      \$( document ).ready(function() {
        \$(\"#myModalFullscreen\").modal('show');
      });
    </script>

  ";
        }
        // line 18
        echo "
    <div class=\"jumbotron\">
        <h3 id=\"cabeceraBienvenida\"> Usuario ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "</h3>


        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center\">
              <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOfertasUser", array("nameUser" => $this->getAttribute(($context["user"] ?? null), "getName", array(), "method"), "userId" => $this->getAttribute(($context["user"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\"><button class=\"btn btn-primary center-block\" data-target=\"#myModalFullscreenOfertas\" contenteditable=\"false\"> Ver Ofertas  </button> </a>
              </div>
            </div>

            <div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center\">
              <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
                  <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemandasUser", array("nameUser" => $this->getAttribute(($context["user"] ?? null), "getName", array(), "method"), "userId" => $this->getAttribute(($context["user"] ?? null), "getId", array(), "method"))), "html", null, true);
        echo "\"><button class=\"btn btn-primary center-block\"  data-target=\"#myModalFullscreenDemandas\" contenteditable=\"false\"> Ver Demandas  </button></a>
              </div>
            </div>

            <div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center\">
              <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteUser", array("nameUser" => $this->getAttribute(($context["user"] ?? null), "getName", array(), "method"))), "html", null, true);
        echo "\"><button class=\"btn btn-primary center-block\" data-toggle=\"modal\" data-target=\"#myModalFullscreen\" contenteditable=\"false\"> Eliminar  </button> </a>
              </div>
            </div>

            <div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center\">
              <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
                <button type=\"button\" class=\"btn btn-primary center-block\" data-toggle=\"modal\" data-target=\"#contact_dialog\">Contactar</button>
              </div>
            </div>
        </div>
        <div class=\"row\">
          <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
            <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
              <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Seleccione el año para ver el número de visitas. <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
            // line 54
            echo "                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroVisitasUser", array("idAnio" => $this->getAttribute($context["anio"], "id", array()), "userId" => $this->getAttribute(($context["user"] ?? null), "getId", array(), "method"))), "html", null, true);
            echo "\">Visitas Año ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["anio"], "getAnio", array(), "method"), "html", null, true);
            echo ". Total: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["anio"], "getVisitas", array(), "method"), "html", null, true);
            echo " visitas. </a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "              </ul>
            </div>
          </div>

        </div>
    </div>






  <div class=\"modal fade\" id=\"contact_dialog\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Escribe el mensaje.</h4>
            </div>
            <div class=\"modal-body\">

                ";
        // line 77
        if (array_key_exists("formContact", $context)) {
            // line 78
            echo "                    ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formContact"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
            // line 79
            echo "
                    ";
            // line 80
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formContact"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("perfilUser", array("userId" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "method" => "POST"));
            echo "

                    ";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formContact"] ?? null), "mensaje", array()), 'label');
            echo "
                    ";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formContact"] ?? null), "mensaje", array()), 'widget');
            echo "
                    <br>
                    ";
            // line 85
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formContact"] ?? null), 'form_end');
            echo "
                    <br>
                ";
        }
        // line 88
        echo "
            </div>
        </div>
    </div>
  </div>




  <div class=\"row\">
      <!-- Load jQuery from Google's CDN if needed -->
      <script src=\"https://code.highcharts.com/highcharts.js\"></script>
  <script src=\"https://code.highcharts.com/modules/drilldown.js\"></script>
      <script type=\"text/javascript\">
        ";
        // line 102
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart(($context["ob"] ?? null), "mootools");
        echo "
      </script>

      <hr>

      <div class=\"col-md-12\">
        <div  id=\"linechart\" style=\"margin: 4px\"></div>
      </div>
      <hr>


  </div>

    <br>


";
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:perfilUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 102,  169 => 88,  163 => 85,  158 => 83,  154 => 82,  149 => 80,  146 => 79,  143 => 78,  141 => 77,  118 => 56,  105 => 54,  101 => 53,  83 => 38,  74 => 32,  65 => 26,  56 => 20,  52 => 18,  42 => 10,  40 => 9,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Default:perfilUser.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Default/perfilUser.html.twig");
    }
}
