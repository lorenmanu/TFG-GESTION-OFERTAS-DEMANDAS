<?php

/* UserBundle:Default:registroVisitasUser.html.twig */
class __TwigTemplate_b89f053acc97afdcdee7b8d3e2b21b317a173e5a400ba2a7c62a31352bd2bf35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:registroVisitasUser.html.twig", 1);
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
    <div class=\"jumbotron\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
          <h3 id=\"cabeceraBienvenida\"> Registro Visitas Usuario: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "</h3>
          <!-- Button trigger modal -->
        </div>
      </div>
      <div class=\"row\">
        ";
        // line 14
        if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") && (twig_first($this->env, $this->getAttribute(($context["user"] ?? null), "roles", array())) != "ROLE_SUPER_ADMIN"))) {
            // line 15
            echo "          <div class=\"col-xs-12 col-sm-7 col-md-6 col-lg-6 text-center\">
            <div class=\"btn-group btn\" style=\"padding: 0px\">
              <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">Seleccione el año para ver el número de visitas. <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["anios"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
                // line 20
                echo "                    <li><a href=\"";
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
            // line 22
            echo "                </ul>
             </div>
          </div>
          <div class=\"col-xs-12 col-sm-5 col-md-6 col-lg-6 text-center\">
            <div class=\"btn btn-group\" style=\"padding: 0px; margin-top: 1%\">
              <a id=\"linkAdmin\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("perfilUser", array("userId" => $this->getAttribute(($context["user"] ?? null), "getId", array(), "method"))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary dropdown-toggle\"> Ir al perfil de ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getName", array(), "method"), "html", null, true);
            echo " </button> </a>
            </div>
          </div>
        ";
        } else {
            // line 31
            echo "          <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
            <div class=\"btn-group btn\" style=\"padding: 0px\">
              <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">Seleccione el año para ver el número de visitas. <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["anios"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
                // line 36
                echo "                    <li><a href=\"";
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
            // line 38
            echo "                </ul>
            </div>
          </div>
        ";
        }
        // line 42
        echo "      </div>
    </div>





    <!-- Load jQuery from Google's CDN if needed -->
    <script src=\"https://code.highcharts.com/highcharts.js\"></script>
    <script src=\"https://code.highcharts.com/modules/drilldown.js\"></script>
    <script type=\"text/javascript\">
      ";
        // line 53
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart(($context["chart"] ?? null), "mootools");
        echo "
    </script>

    <hr>

    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
      <div  id=\"linechart\"></div>
    </div>




";
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:registroVisitasUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  115 => 42,  109 => 38,  96 => 36,  92 => 35,  86 => 31,  77 => 27,  70 => 22,  57 => 20,  53 => 19,  47 => 15,  45 => 14,  37 => 9,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Default:registroVisitasUser.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Default/registroVisitasUser.html.twig");
    }
}
