<?php

/* OfertaBundle:Default:mostrarOfertas.html.twig */
class __TwigTemplate_05a24e6a412dc55da6fdd7b8571d54e2915cd6ba4a9a42848928431992d1cc8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portadaOferta.html.twig", "OfertaBundle:Default:mostrarOfertas.html.twig", 1);
        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portadaOferta.html.twig";
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
";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "mensaje"), "method", true, true)) {
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
        // line 17
        if ($this->getAttribute(($context["app"] ?? null), "session", array(), "any", true, true)) {
            // line 18
            echo "          <div class=\"col-md-12\">
            <hr class=\"hrStrong\">
          </div>
          <div class=\"col-md-12\">
            <h3 class=\"h3Busqueda\">
              <small>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "seccion"), "method"), "html", null, true);
            echo "</small>
            </h3>
          </div>
          <div class=\"col-md-12\">
            <hr>
          </div>
          <div class=\"col-md-12\">
            <h3 class=\"h3Busqueda\">
              <small>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "tipoOferta"), "method"), "html", null, true);
            echo "</small>
            </h3>
          </div>
          <div class=\"col-md-12\">
            <hr class=\"hrStrong\">
          </div>
      ";
        }
        // line 38
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
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarPalabrasClaveOferta");
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
                    Introduzca las palabras clave que debe tener la oferta nueva que se añada para que le avisemos.
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
        // line 149
        if (array_key_exists("formPalabrasClaveOferta", $context)) {
            // line 150
            echo "                  ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formPalabrasClaveOferta"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
            // line 151
            echo "
                  ";
            // line 152
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPalabrasClaveOferta"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOfertas"), "method" => "POST"));
            echo "

                  ";
            // line 154
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPalabrasClaveOferta"] ?? null), "palabrasClave", array()), 'label');
            echo "
                  ";
            // line 155
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPalabrasClaveOferta"] ?? null), "palabrasClave", array()), 'widget');
            echo "
                ";
        }
        // line 157
        echo "              </div>

            </div>


        </div>

        <div class=\"modal-footer\">
          <div class=\"container-fluid\">
            ";
        // line 166
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPalabrasClaveOferta"] ?? null), 'form_end');
        echo "
          </div>
        </div>

      </div>

    </div>
   </div>



    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 178
            echo "      <div class=\"row\">
      <div class=\"row rowItem\"\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <h3>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "nombre", array()), "html", null, true);
            echo "</h3>
          </div>

          <h4>
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Categoria:
              ";
            // line 186
            if ($this->getAttribute($this->getAttribute($context["entry"], "area", array(), "any", false, true), "nombre", array(), "any", true, true)) {
                // line 187
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "area", array()), "nombre", array()), "html", null, true);
                echo "
              ";
            }
            // line 189
            echo "              ";
            if ($this->getAttribute($this->getAttribute($context["entry"], "rama", array(), "any", false, true), "nombre", array(), "any", true, true)) {
                // line 190
                echo "                /";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "rama", array()), "nombre", array()), "html", null, true);
                echo "
              ";
            }
            // line 192
            echo "              ";
            if ($this->getAttribute($this->getAttribute($context["entry"], "disciplina", array(), "any", false, true), "nombre", array(), "any", true, true)) {
                // line 193
                echo "                /";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "disciplina", array()), "nombre", array()), "html", null, true);
                echo "
              ";
            }
            // line 195
            echo "          </div>
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Tipo:

          </div>
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Autor:
              ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "autor", array()), "html", null, true);
            echo "
          </div>
          </h4>
      </div>

          <div class=\"row rowItem\">
            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">
              <img class=\"img_show\" src=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/ofertas/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getBrochure", array(), "method"), "html", null, true);
            echo "\" alt=\"\" />
            </div>
            <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-5 divDes\">
              <article class=\"descripcionItems\">
                <p>
                  ";
            // line 212
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
            // line 222
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "fechaInicio", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                  <li class=\"list-group-item list-group-item-info liInfo\">Fecha Fin: ";
            // line 223
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "fechaFin", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-6 divInfoItem1\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                  <a class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\" >Ver</a>
                </div>

                ";
            // line 234
            if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute($context["entry"], "getAutor", array(), "method")))) {
                // line 235
                echo "                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"";
                // line 236
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\"  >Editar</a>
                  </div>
                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" data-toggle=\"modal\"  data-target=\"#isResolve_dialog\" >Eliminar</a>
                  </div>
                ";
            }
            // line 242
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
                                  ¿ Desea eliminar la oferta ?
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
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()), "resolve" => "si")), "html", null, true);
            echo "\">
                                <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                              </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <a href=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()), "resolve" => "no")), "html", null, true);
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
        // line 300
        echo "  <div id=\"paginacion\">
    ";
        // line 301
        if (array_key_exists("pagination", $context)) {
            // line 302
            echo "      ";
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
            echo "
    ";
        }
        // line 304
        echo "  </div>

  ";
        // line 306
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "mensaje"), "method")) {
            // line 307
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
        // line 324
        echo "
  <script type=\"text/javascript\">
    \$(document).ready(function(){
      \$(\"#search\").autocomplete({
        source: '";
        // line 328
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oferta_search");
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
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/ofertas"), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:mostrarOfertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 340,  471 => 328,  465 => 324,  446 => 307,  444 => 306,  440 => 304,  434 => 302,  432 => 301,  429 => 300,  404 => 281,  396 => 276,  360 => 242,  351 => 236,  348 => 235,  346 => 234,  340 => 231,  329 => 223,  325 => 222,  312 => 212,  303 => 207,  293 => 200,  286 => 195,  280 => 193,  277 => 192,  271 => 190,  268 => 189,  262 => 187,  260 => 186,  252 => 181,  247 => 178,  243 => 177,  229 => 166,  218 => 157,  213 => 155,  209 => 154,  204 => 152,  201 => 151,  198 => 150,  196 => 149,  132 => 88,  80 => 38,  70 => 31,  59 => 23,  52 => 18,  50 => 17,  45 => 14,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OfertaBundle:Default:mostrarOfertas.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/OfertaBundle/Resources/views/Default/mostrarOfertas.html.twig");
    }
}
