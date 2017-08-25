<?php

/* DemandaBundle:Default:mostrarDemandas.html.twig */
class __TwigTemplate_b7c6289359fcdc144cade03a7071d133f57fefcb8e71970ac8b5c160d6a42aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portadaDemanda.html.twig", "DemandaBundle:Default:mostrarDemandas.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portadaDemanda.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_649fdc4ba90e0c8fd7c8a41f7cfec0ebcfb3e9403858686a983a5babc0b2de04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649fdc4ba90e0c8fd7c8a41f7cfec0ebcfb3e9403858686a983a5babc0b2de04->enter($__internal_649fdc4ba90e0c8fd7c8a41f7cfec0ebcfb3e9403858686a983a5babc0b2de04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DemandaBundle:Default:mostrarDemandas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_649fdc4ba90e0c8fd7c8a41f7cfec0ebcfb3e9403858686a983a5babc0b2de04->leave($__internal_649fdc4ba90e0c8fd7c8a41f7cfec0ebcfb3e9403858686a983a5babc0b2de04_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_f462d4b549e716a5da25f7ef4a9bc1518eef0d3f7f1a50ddde93520c24eb7c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f462d4b549e716a5da25f7ef4a9bc1518eef0d3f7f1a50ddde93520c24eb7c0b->enter($__internal_f462d4b549e716a5da25f7ef4a9bc1518eef0d3f7f1a50ddde93520c24eb7c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 5
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "mensaje"), "method")) {
            // line 7
            echo "  <script>
    // This would automatically run when page loads.
    \$( document ).ready(function() {
      \$(\"#mensajeError\").modal('show');
    });
  </script>
";
        }
        // line 14
        echo "
    <div class=\"row\">
      ";
        // line 16
        if ($this->getAttribute(($context["app"] ?? null), "session", array(), "any", true, true)) {
            // line 17
            echo "          <div class=\"col-md-12\">
            <h3 class=\"h3Busqueda\">
              <small>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "seccion"), "method"), "html", null, true);
            echo "</small>
            </h3>
          </div>
          <div class=\"col-md-12\">
            <hr>
          </div>
          <div class=\"col-md-12\">
            <h3 class=\"h3Busqueda\">
              <small>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "tipoDemanda"), "method"), "html", null, true);
            echo "</small>
            </h3>
          </div>
          <div class=\"col-md-12\">
            <hr class=\"hrStrong\">
          </div>
      ";
        }
        // line 34
        echo "        <div clas=\"row\">
          <div class=\"col-md-12\">
            <hr>
          </div>
          <div class=\"col-md-12\">
            <div class=\"input-group\" id=\"custom-search-input\">
                <input type=\"text\" autocomplete=\"off\" id=\"search\" class=\"form-control input-lg\" placeholder=\"Buscar...\">
            </div>
          </div>
          <div class=\"col-md-12\">
            <hr>
          </div>
        </div>
        <div clas=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
          <button class=\"btn-success btnPalabrasClave pull-right btn\" type=\"button\" id=\"btnPalabrasClave\" data-toggle=\"modal\" data-target=\"#palabrasClave\"> Avisarme
          </button>
          <button class=\"btn-danger btnPalabrasClave pull-left btn\" type=\"button\" id=\"btnNoPalabrasClave\" data-toggle=\"modal\" data-target=\"#noPalabrasClave\"> Dejar de avisarme
          </button>
        </div>
    </div>

    <!-- the div that represents the modal dialog -->
    <div class=\"modal fade\" id=\"noPalabrasClave\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <div class=\"panel panel-default\" id=\"modalCabecera\">
                  <div class=\"panel-heading\">
                    <div class=\"row\">
                      <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                        <h2>
                          ¿ No desea nuevos avisos ?
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
                <br>
                <br>
                <div class=\"row\">
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                      <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarPalabrasClaveDemanda");
        echo "\">
                        <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                      </a>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                        <button type=\"button\" id=\"submitForm\" class=\"btn btn-danger pull-right\" data-dismiss=\"modal\">No</button>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class=\"modal-footer\">

              </div>
           </div>
       </div>
   </div>



    <div class=\"modal fade modal-diag footer-to-bottom block-center\" id=\"palabrasClave\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
          <div class=\"panel panel-default\" id=\"modalCabecera\">
            <div class=\"panel-heading\">
              <div class=\"row\">
                <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                  <h2>
                    Añadir Aviso
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
              <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"well\">
                  <p id=\"pMenuInf\">
                    Introduzca las palabras clave que debe tener la demanda nueva que se añada para que le avisemos.
                    Las palabras clave no deberán tener entre ellas ningún caracter, solamente espacios en blanco,
                    ejemplo:
                    <br>
                    <hr>
                    <h3>investigación departamento facultad</h3>
                    <hr>
                    <br>
                  </p>
                </div>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                ";
        // line 145
        if (array_key_exists("formPalabrasClaveDemanda", $context)) {
            // line 146
            echo "                  ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formPalabrasClaveDemanda"] ?? $this->getContext($context, "formPalabrasClaveDemanda")), array(0 => "bootstrap_3_layout.html.twig"));
            // line 147
            echo "
                  ";
            // line 148
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPalabrasClaveDemanda"] ?? $this->getContext($context, "formPalabrasClaveDemanda")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemandas"), "method" => "POST"));
            echo "

                  ";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPalabrasClaveDemanda"] ?? $this->getContext($context, "formPalabrasClaveDemanda")), "palabrasClave", array()), 'label');
            echo "
                  ";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPalabrasClaveDemanda"] ?? $this->getContext($context, "formPalabrasClaveDemanda")), "palabrasClave", array()), 'widget');
            echo "
                ";
        }
        // line 153
        echo "              </div>

            </div>


        </div>

        <div class=\"modal-footer\">
          <div class=\"container-fluid\">
            ";
        // line 162
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPalabrasClaveDemanda"] ?? $this->getContext($context, "formPalabrasClaveDemanda")), 'form_end');
        echo "
          </div>
        </div>

      </div>

    </div>
   </div>



    ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 174
            echo "      <div class=\"row\">
        <div class=\"row rowItem\"\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h3>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "nombre", array()), "html", null, true);
            echo "</h3>
            </div>

            <h4>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Categoria:
                ";
            // line 182
            if ($this->getAttribute($this->getAttribute($context["entry"], "area", array(), "any", false, true), "nombre", array(), "any", true, true)) {
                // line 183
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "area", array()), "nombre", array()), "html", null, true);
                echo "
                ";
            }
            // line 185
            echo "                ";
            if ($this->getAttribute($this->getAttribute($context["entry"], "rama", array(), "any", false, true), "nombre", array(), "any", true, true)) {
                // line 186
                echo "                  /";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "rama", array()), "nombre", array()), "html", null, true);
                echo "
                ";
            }
            // line 188
            echo "                ";
            if ($this->getAttribute($this->getAttribute($context["entry"], "disciplina", array(), "any", false, true), "nombre", array(), "any", true, true)) {
                // line 189
                echo "                  /";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "disciplina", array()), "nombre", array()), "html", null, true);
                echo "
                ";
            }
            // line 191
            echo "            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Tipo:
                ";
            // line 193
            if ($this->getAttribute($this->getAttribute($context["entry"], "tipo", array(), "any", false, true), "nombre", array(), "any", true, true)) {
                // line 194
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "tipo", array()), "nombre", array()), "html", null, true);
                echo "
                ";
            }
            // line 196
            echo "            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Autor:
                ";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "autor", array()), "html", null, true);
            echo "
            </div>
            </h4>
        </div>

          <div class=\"row rowItem\">
            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">
              <img class=\"img_show\" src=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/demandas/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getBrochure", array(), "method"), "html", null, true);
            echo "\" alt=\"\" />
            </div>
            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-6 divDes\">
              <article class=\"descripcionItems\">
                <p>
                  ";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "descripcion", array()), "html", null, true);
            echo "
                  </p>
               </article>
            </div>
          </div>

          <div class=\"row rowItem\">
            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">
              <div class=\"row\">
                <ul class=\"list-group ulInfo\">
                  <li class=\"list-group-item list-group-item-success liInfo\">Fecha Inicio: ";
            // line 220
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "fechaInicio", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                  <li class=\"list-group-item list-group-item-info liInfo\">Fecha Fin: ";
            // line 221
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "fechaFin", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-6 divInfoItem1\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                  <a class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemanda", array("idDemanda" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\" >Ver</a>
                </div>

                ";
            // line 232
            if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute($context["entry"], "getAutor", array(), "method")))) {
                // line 233
                echo "                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editDemanda", array("idDemanda" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\"  >Editar</a>
                  </div>
                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" data-toggle=\"modal\"  data-target=\"#isResolve_dialog\" >Eliminar</a>
                  </div>
                ";
            }
            // line 240
            echo "              </div>
            </div>
          </div>

          <hr>

            <!-- the div that represents the modal dialog -->
            <div class=\"modal fade\" id=\"isResolve_dialog\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <div class=\"panel panel-default\" id=\"modalCabecera\">
                          <div class=\"panel-heading\">
                            <div class=\"row\">
                              <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                                <h2>
                                  ¿ Desea eliminar la demanda ?
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
                        <br>
                        <br>
                        <div class=\"row\">
                          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <a href=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarDemanda", array("idDemanda" => $this->getAttribute($context["entry"], "id", array()), "resolve" => "si")), "html", null, true);
            echo "\">
                                <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                              </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <a href=\"";
            // line 279
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarDemanda", array("idDemanda" => $this->getAttribute($context["entry"], "id", array()), "resolve" => "no")), "html", null, true);
            echo "\">
                                <button type=\"button\" id=\"submitForm\" class=\"btn btn-danger pull-right\">No</button>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                        <br>
                        <br>
                      <div class=\"modal-footer\">

                      </div>
                   </div>
               </div>
           </div>


      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "  <div id=\"paginacion\">
    ";
        // line 299
        if (array_key_exists("pagination", $context)) {
            // line 300
            echo "      ";
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
            echo "
    ";
        }
        // line 302
        echo "  </div>

  ";
        // line 304
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "mensaje"), "method")) {
            // line 305
            echo "    <div class=\"modal fade\" id=\"mensajeError\" role=\"dialog\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">¡Atención!</h4>
          </div>
          <div class=\"modal-body\">
            <p> No se puede añadir, consulte al administrador del sistema. </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-success pull-right\" data-dismiss=\"modal\">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 322
        echo "
  <script type=\"text/javascript\">
    \$(document).ready(function(){
      \$(\"#search\").autocomplete({
        source: '";
        // line 326
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demanda_search");
        echo "',
        focus: function( event, ui ) {
                //\$( \"#search\" ).val( ui.item.title ); // uncomment this line if you want to select value to search box
                return false;
              },
        appendTo: '#div',
        open: function() { \$('#div .ui-menu').width(300) },
            maxShowItems: 0, // Make list height fit to 5 items when items are over 5.
            select: function( event, ui ) {
              window.location.href = ui.item.url;;
            }
          }).data( \"ui-autocomplete\" )._renderItem = function( ul, item ) {
        var inner_html = '<div class=\"itemContent\"><a id=\"linkElement\" href=\"' + item.path +  '\" ><h4>' + item.title + '</h4><br><div class=\"row\"><div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-5\"><img class=\"img_show\" src=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/demandas"), "html", null, true);
        echo "/' + item.image + '/></div><div class=\"col-lg-8 col-md-8 col-sm-7 col-xs-7\"><article class=\"descripcion\"><p>' + item.description + '</p></article></div></a></div><hr id=\"searchSpace\">';
        \$('ui-id-1').attr('id', 'newID');
        return \$( \"<li></li>\" )
        .data( \"item.autocomplete\", item )
        .append(inner_html)
        .appendTo( ul ).css({'width': \$('#search').width(), height: \"18%\" });
      };
    });

  </script>


";
        
        $__internal_f462d4b549e716a5da25f7ef4a9bc1518eef0d3f7f1a50ddde93520c24eb7c0b->leave($__internal_f462d4b549e716a5da25f7ef4a9bc1518eef0d3f7f1a50ddde93520c24eb7c0b_prof);

    }

    public function getTemplateName()
    {
        return "DemandaBundle:Default:mostrarDemandas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 338,  485 => 326,  479 => 322,  460 => 305,  458 => 304,  454 => 302,  448 => 300,  446 => 299,  443 => 298,  418 => 279,  410 => 274,  374 => 240,  365 => 234,  362 => 233,  360 => 232,  354 => 229,  343 => 221,  339 => 220,  326 => 210,  317 => 205,  307 => 198,  303 => 196,  297 => 194,  295 => 193,  291 => 191,  285 => 189,  282 => 188,  276 => 186,  273 => 185,  267 => 183,  265 => 182,  257 => 177,  252 => 174,  248 => 173,  234 => 162,  223 => 153,  218 => 151,  214 => 150,  209 => 148,  206 => 147,  203 => 146,  201 => 145,  137 => 84,  85 => 34,  75 => 27,  64 => 19,  60 => 17,  58 => 16,  54 => 14,  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portadaDemanda.html.twig' %}


{% block cuerpo %}

{% if  app.request.query.get('mensaje') %}
  <script>
    // This would automatically run when page loads.
    \$( document ).ready(function() {
      \$(\"#mensajeError\").modal('show');
    });
  </script>
{% endif %}

    <div class=\"row\">
      {% if app.session is defined %}
          <div class=\"col-md-12\">
            <h3 class=\"h3Busqueda\">
              <small>{{ app.session.get('seccion') }}</small>
            </h3>
          </div>
          <div class=\"col-md-12\">
            <hr>
          </div>
          <div class=\"col-md-12\">
            <h3 class=\"h3Busqueda\">
              <small>{{ app.session.get('tipoDemanda') }}</small>
            </h3>
          </div>
          <div class=\"col-md-12\">
            <hr class=\"hrStrong\">
          </div>
      {% endif %}
        <div clas=\"row\">
          <div class=\"col-md-12\">
            <hr>
          </div>
          <div class=\"col-md-12\">
            <div class=\"input-group\" id=\"custom-search-input\">
                <input type=\"text\" autocomplete=\"off\" id=\"search\" class=\"form-control input-lg\" placeholder=\"Buscar...\">
            </div>
          </div>
          <div class=\"col-md-12\">
            <hr>
          </div>
        </div>
        <div clas=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
          <button class=\"btn-success btnPalabrasClave pull-right btn\" type=\"button\" id=\"btnPalabrasClave\" data-toggle=\"modal\" data-target=\"#palabrasClave\"> Avisarme
          </button>
          <button class=\"btn-danger btnPalabrasClave pull-left btn\" type=\"button\" id=\"btnNoPalabrasClave\" data-toggle=\"modal\" data-target=\"#noPalabrasClave\"> Dejar de avisarme
          </button>
        </div>
    </div>

    <!-- the div that represents the modal dialog -->
    <div class=\"modal fade\" id=\"noPalabrasClave\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <div class=\"panel panel-default\" id=\"modalCabecera\">
                  <div class=\"panel-heading\">
                    <div class=\"row\">
                      <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                        <h2>
                          ¿ No desea nuevos avisos ?
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
                <br>
                <br>
                <div class=\"row\">
                  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                      <a href=\"{{ path('eliminarPalabrasClaveDemanda') }}\">
                        <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                      </a>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                        <button type=\"button\" id=\"submitForm\" class=\"btn btn-danger pull-right\" data-dismiss=\"modal\">No</button>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class=\"modal-footer\">

              </div>
           </div>
       </div>
   </div>



    <div class=\"modal fade modal-diag footer-to-bottom block-center\" id=\"palabrasClave\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
          <div class=\"panel panel-default\" id=\"modalCabecera\">
            <div class=\"panel-heading\">
              <div class=\"row\">
                <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                  <h2>
                    Añadir Aviso
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
              <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"well\">
                  <p id=\"pMenuInf\">
                    Introduzca las palabras clave que debe tener la demanda nueva que se añada para que le avisemos.
                    Las palabras clave no deberán tener entre ellas ningún caracter, solamente espacios en blanco,
                    ejemplo:
                    <br>
                    <hr>
                    <h3>investigación departamento facultad</h3>
                    <hr>
                    <br>
                  </p>
                </div>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                {% if formPalabrasClaveDemanda is defined %}
                  {% form_theme formPalabrasClaveDemanda 'bootstrap_3_layout.html.twig' %}

                  {{ form_start(formPalabrasClaveDemanda, {'action': path('mostrarDemandas'), 'method': 'POST'}) }}

                  {{ form_label(formPalabrasClaveDemanda.palabrasClave) }}
                  {{ form_widget(formPalabrasClaveDemanda.palabrasClave) }}
                {% endif %}
              </div>

            </div>


        </div>

        <div class=\"modal-footer\">
          <div class=\"container-fluid\">
            {{ form_end(formPalabrasClaveDemanda) }}
          </div>
        </div>

      </div>

    </div>
   </div>



    {% for entry in pagination  %}
      <div class=\"row\">
        <div class=\"row rowItem\"\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <h3>{{ entry.nombre }}</h3>
            </div>

            <h4>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Categoria:
                {% if entry.area.nombre is defined %}
                  {{ entry.area.nombre }}
                {% endif %}
                {% if entry.rama.nombre is defined %}
                  /{{ entry.rama.nombre }}
                {% endif %}
                {% if entry.disciplina.nombre is defined %}
                  /{{ entry.disciplina.nombre }}
                {% endif %}
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Tipo:
                {% if entry.tipo.nombre is defined %}
                  {{ entry.tipo.nombre }}
                {% endif %}
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Autor:
                {{ entry.autor }}
            </div>
            </h4>
        </div>

          <div class=\"row rowItem\">
            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">
              <img class=\"img_show\" src=\"{{ asset('uploads/brochures/demandas/') }}{{ entry.getBrochure() }}\" alt=\"\" />
            </div>
            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-6 divDes\">
              <article class=\"descripcionItems\">
                <p>
                  {{ entry.descripcion }}
                  </p>
               </article>
            </div>
          </div>

          <div class=\"row rowItem\">
            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">
              <div class=\"row\">
                <ul class=\"list-group ulInfo\">
                  <li class=\"list-group-item list-group-item-success liInfo\">Fecha Inicio: {{ entry.fechaInicio|date('Y-m-d') }}</li>
                  <li class=\"list-group-item list-group-item-info liInfo\">Fecha Fin: {{ entry.fechaFin|date('Y-m-d') }}</li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-6 divInfoItem1\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                  <a class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"{{ path('mostrarDemanda', {'idDemanda': entry.id}) }}\" >Ver</a>
                </div>

                {% if app.security.getToken().getUser().roles|first == 'ROLE_SUPER_ADMIN' or app.security.getToken().getUser().getUsername()  == entry.getAutor() %}
                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"{{ path('editDemanda', {'idDemanda': entry.id}) }}\"  >Editar</a>
                  </div>
                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" data-toggle=\"modal\"  data-target=\"#isResolve_dialog\" >Eliminar</a>
                  </div>
                {% endif %}
              </div>
            </div>
          </div>

          <hr>

            <!-- the div that represents the modal dialog -->
            <div class=\"modal fade\" id=\"isResolve_dialog\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <div class=\"panel panel-default\" id=\"modalCabecera\">
                          <div class=\"panel-heading\">
                            <div class=\"row\">
                              <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                                <h2>
                                  ¿ Desea eliminar la demanda ?
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
                        <br>
                        <br>
                        <div class=\"row\">
                          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <a href=\"{{ path('eliminarDemanda', {'idDemanda': entry.id, 'resolve': \"si\"}) }}\">
                                <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                              </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <a href=\"{{ path('eliminarDemanda', {'idDemanda': entry.id, 'resolve': \"no\"}) }}\">
                                <button type=\"button\" id=\"submitForm\" class=\"btn btn-danger pull-right\">No</button>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                        <br>
                        <br>
                      <div class=\"modal-footer\">

                      </div>
                   </div>
               </div>
           </div>


      </div>
  {% endfor %}
  <div id=\"paginacion\">
    {% if pagination is defined %}
      {{ knp_pagination_render(pagination) }}
    {% endif %}
  </div>

  {% if  app.request.query.get('mensaje')  %}
    <div class=\"modal fade\" id=\"mensajeError\" role=\"dialog\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">¡Atención!</h4>
          </div>
          <div class=\"modal-body\">
            <p> No se puede añadir, consulte al administrador del sistema. </p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-success pull-right\" data-dismiss=\"modal\">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  <script type=\"text/javascript\">
    \$(document).ready(function(){
      \$(\"#search\").autocomplete({
        source: '{{ path(\"demanda_search\") }}',
        focus: function( event, ui ) {
                //\$( \"#search\" ).val( ui.item.title ); // uncomment this line if you want to select value to search box
                return false;
              },
        appendTo: '#div',
        open: function() { \$('#div .ui-menu').width(300) },
            maxShowItems: 0, // Make list height fit to 5 items when items are over 5.
            select: function( event, ui ) {
              window.location.href = ui.item.url;;
            }
          }).data( \"ui-autocomplete\" )._renderItem = function( ul, item ) {
        var inner_html = '<div class=\"itemContent\"><a id=\"linkElement\" href=\"' + item.path +  '\" ><h4>' + item.title + '</h4><br><div class=\"row\"><div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-5\"><img class=\"img_show\" src={{ asset('uploads/brochures/demandas') }}/' + item.image + '/></div><div class=\"col-lg-8 col-md-8 col-sm-7 col-xs-7\"><article class=\"descripcion\"><p>' + item.description + '</p></article></div></a></div><hr id=\"searchSpace\">';
        \$('ui-id-1').attr('id', 'newID');
        return \$( \"<li></li>\" )
        .data( \"item.autocomplete\", item )
        .append(inner_html)
        .appendTo( ul ).css({'width': \$('#search').width(), height: \"18%\" });
      };
    });

  </script>


{% endblock %}
", "DemandaBundle:Default:mostrarDemandas.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/DemandaBundle/Resources/views/Default/mostrarDemandas.html.twig");
    }
}
