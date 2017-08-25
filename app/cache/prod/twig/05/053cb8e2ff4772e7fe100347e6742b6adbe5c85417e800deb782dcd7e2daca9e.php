<?php

/* index.html.twig */
class __TwigTemplate_b9306499c00dd325b87de5df475345111e9e7f178a94ff0cd0595f85e484c208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_be1d617cebcfc61c365b36199f8da53d1f85fbed37b364b81ff2df6e2e04dd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1d617cebcfc61c365b36199f8da53d1f85fbed37b364b81ff2df6e2e04dd5b->enter($__internal_be1d617cebcfc61c365b36199f8da53d1f85fbed37b364b81ff2df6e2e04dd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be1d617cebcfc61c365b36199f8da53d1f85fbed37b364b81ff2df6e2e04dd5b->leave($__internal_be1d617cebcfc61c365b36199f8da53d1f85fbed37b364b81ff2df6e2e04dd5b_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_a1172f7e2f16ddb0ca31142fc2728649de502417d7845f75b9bc1b1de5a3477e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1172f7e2f16ddb0ca31142fc2728649de502417d7845f75b9bc1b1de5a3477e->enter($__internal_a1172f7e2f16ddb0ca31142fc2728649de502417d7845f75b9bc1b1de5a3477e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modalMostrarOfertas.css"), "html", null, true);
        echo "\" media=\"all\" />
    <div class=\"jumbotron\">
      <div class=\"row\">
        <div class=\"row center-block\">
          <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                <h4 id=\"cabeceraBienvenida\">  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
        echo " </h4>
              </div>
              <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 text-center\">
                <div class=\"btn-group\" style=\"padding: 0px\">
                  <button type=\"button\" class=\"btn  btn-primary\" data-toggle=\"modal\" data-target=\"#modalIntro\">
                  ¿ Necesitas ayuda ?
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
            <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
              <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Seleccione el año para ver el número de visitas. <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anios"] ?? $this->getContext($context, "anios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
            // line 30
            echo "                  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registroVisitasUser", array("idAnio" => $this->getAttribute($context["anio"], "id", array()), "userId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getId", array(), "method"))), "html", null, true);
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
        // line 32
        echo "              </ul>
            </div>

          </div>
        </div>

        <div class=\"row\">
          <!-- Load jQuery from Google's CDN if needed -->

          <script src=\"https://code.highcharts.com/highcharts.js\"></script>
          <script src=\"https://code.highcharts.com/modules/drilldown.js\"></script>
          <script type=\"text/javascript\">
            ";
        // line 44
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart(($context["chart"] ?? $this->getContext($context, "chart")), "mootools");
        echo "
          </script>
          <hr>

          <div class=\"col-md-12\">
            <div  id=\"linechart\"></div>
          </div>
        </div>

      </div>
    </div>

    <div class=\"modal fade modal-fullscreen footer-to-bottom\" id=\"modalIntro\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
          <div class=\"panel panel-default\" id=\"modalCabecera\">
            <div class=\"panel-heading\">
              <div class=\"row\">
                <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                  <h2>
                    Ayuda Inicial
                  </h2>
                </div>
                <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                  <h4>
                    <a id=\"linkCerrar\" href=\"#\" data-dismiss=\"modal\" class=\"class pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"modal-body\">

          <div class=\"container-fluid text-center\">
            <br>
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <img class=\"imgExplicacion\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/expliaciones/explicacion_inicio1.png"), "html", null, true);
        echo "\">
              </div>

              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <div class=\"well\">
                  <p>
                    El menú de la izquierda es el que se le mostrará en la página de inicio. Las opciones afrecidas son:<br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Inicio: nos dirigirá a la página de inicio.<br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Secciones: menú desplegable que nos permitirá ver las ofertas y las demandas.<br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Logout: para cerrar la sesión.
                  </p>
                </div>
              </div>
            </div>


            <hr>

            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <img class=\"imgExplicacion\" width=\"100\" height=\"100\" class=\"imgExplicacion\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/expliaciones/explicacion_inicio2.png"), "html", null, true);
        echo "\">
              </div>

              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <div class=\"well\">
                  <p> Si pincha en \"Secciones/Ofertas\" o \"Secciones/Demandas\", se añadirá las siguientes opciones al menú:<br>
                  <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Mostrar todas las ofertas/demandas: mostrará todas las ofertas sin ningún criterio de búsqueda.<br>
                  <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Añadir Oferta/Demanda: nos dirigirá a un formulario para añadir una oferta o una demanda.<br>
                  <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> ¿Dónde buscar? : permite filtrar las búsquedas según el tipo y el área.
                  </p>
                </div>
              </div>
            </div>


            <hr>


          </div>


        </div>
        <div class=\"modal-footer\">
          <div class=\"container-fluid\">
            <button type=\"button\" class=\"btn btn-primary btn-lg pull-right\" data-dismiss=\"modal\" >Cerrar</button>
          </div>
        </div>
      </div>

    </div>
   </div>








";
        
        $__internal_a1172f7e2f16ddb0ca31142fc2728649de502417d7845f75b9bc1b1de5a3477e->leave($__internal_a1172f7e2f16ddb0ca31142fc2728649de502417d7845f75b9bc1b1de5a3477e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 103,  144 => 83,  102 => 44,  88 => 32,  75 => 30,  71 => 29,  51 => 12,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block cuerpo %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/modalMostrarOfertas.css') }}\" media=\"all\" />
    <div class=\"jumbotron\">
      <div class=\"row\">
        <div class=\"row center-block\">
          <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-7\">
                <h4 id=\"cabeceraBienvenida\">  {{ app.security.getToken().getUser().getUsername() }} </h4>
              </div>
              <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-5 text-center\">
                <div class=\"btn-group\" style=\"padding: 0px\">
                  <button type=\"button\" class=\"btn  btn-primary\" data-toggle=\"modal\" data-target=\"#modalIntro\">
                  ¿ Necesitas ayuda ?
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
            <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
              <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Seleccione el año para ver el número de visitas. <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\">
                {% for anio in anios  %}
                  <li><a href=\"{{ path('registroVisitasUser', {'idAnio': anio.id, 'userId':app.security.getToken().getUser().getId() }) }}\">Visitas Año {{ anio.getAnio() }}. Total: {{ anio.getVisitas() }} visitas. </a></li>
                {% endfor %}
              </ul>
            </div>

          </div>
        </div>

        <div class=\"row\">
          <!-- Load jQuery from Google's CDN if needed -->

          <script src=\"https://code.highcharts.com/highcharts.js\"></script>
          <script src=\"https://code.highcharts.com/modules/drilldown.js\"></script>
          <script type=\"text/javascript\">
            {{ chart(chart, 'mootools')  }}
          </script>
          <hr>

          <div class=\"col-md-12\">
            <div  id=\"linechart\"></div>
          </div>
        </div>

      </div>
    </div>

    <div class=\"modal fade modal-fullscreen footer-to-bottom\" id=\"modalIntro\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
          <div class=\"panel panel-default\" id=\"modalCabecera\">
            <div class=\"panel-heading\">
              <div class=\"row\">
                <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                  <h2>
                    Ayuda Inicial
                  </h2>
                </div>
                <div class=\"col-xs-2 col-sm-2 col-md-2 col-lg-2\">
                  <h4>
                    <a id=\"linkCerrar\" href=\"#\" data-dismiss=\"modal\" class=\"class pull-right\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"modal-body\">

          <div class=\"container-fluid text-center\">
            <br>
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <img class=\"imgExplicacion\" src=\"{{ asset('img/expliaciones/explicacion_inicio1.png') }}\">
              </div>

              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <div class=\"well\">
                  <p>
                    El menú de la izquierda es el que se le mostrará en la página de inicio. Las opciones afrecidas son:<br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Inicio: nos dirigirá a la página de inicio.<br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Secciones: menú desplegable que nos permitirá ver las ofertas y las demandas.<br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Logout: para cerrar la sesión.
                  </p>
                </div>
              </div>
            </div>


            <hr>

            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <img class=\"imgExplicacion\" width=\"100\" height=\"100\" class=\"imgExplicacion\" src=\"{{ asset('img/expliaciones/explicacion_inicio2.png') }}\">
              </div>

              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                <div class=\"well\">
                  <p> Si pincha en \"Secciones/Ofertas\" o \"Secciones/Demandas\", se añadirá las siguientes opciones al menú:<br>
                  <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Mostrar todas las ofertas/demandas: mostrará todas las ofertas sin ningún criterio de búsqueda.<br>
                  <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Añadir Oferta/Demanda: nos dirigirá a un formulario para añadir una oferta o una demanda.<br>
                  <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> ¿Dónde buscar? : permite filtrar las búsquedas según el tipo y el área.
                  </p>
                </div>
              </div>
            </div>


            <hr>


          </div>


        </div>
        <div class=\"modal-footer\">
          <div class=\"container-fluid\">
            <button type=\"button\" class=\"btn btn-primary btn-lg pull-right\" data-dismiss=\"modal\" >Cerrar</button>
          </div>
        </div>
      </div>

    </div>
   </div>








{% endblock %}
", "index.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/index.html.twig");
    }
}
