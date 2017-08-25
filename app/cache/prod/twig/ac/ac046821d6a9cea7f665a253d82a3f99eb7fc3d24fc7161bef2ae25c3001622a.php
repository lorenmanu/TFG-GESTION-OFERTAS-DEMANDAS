<?php

/* OfertaBundle:Default:mostrarOfertas.html.twig */
class __TwigTemplate_4b324e822379009a467a4df64b1afbe5861096ebe76e6edd867c8a93eade73ec extends Twig_Template
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
        $__internal_6f785b2864cd6849a9d39ad3bd5eee7744d7ae9808cc366b1b489a2548b531ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f785b2864cd6849a9d39ad3bd5eee7744d7ae9808cc366b1b489a2548b531ac->enter($__internal_6f785b2864cd6849a9d39ad3bd5eee7744d7ae9808cc366b1b489a2548b531ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfertaBundle:Default:mostrarOfertas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f785b2864cd6849a9d39ad3bd5eee7744d7ae9808cc366b1b489a2548b531ac->leave($__internal_6f785b2864cd6849a9d39ad3bd5eee7744d7ae9808cc366b1b489a2548b531ac_prof);

    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_f5a4d07e38ee5b53f5a20087dfe13ceadbb5e5fc916c7c8db2d7dfb18ebeb2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a4d07e38ee5b53f5a20087dfe13ceadbb5e5fc916c7c8db2d7dfb18ebeb2c3->enter($__internal_f5a4d07e38ee5b53f5a20087dfe13ceadbb5e5fc916c7c8db2d7dfb18ebeb2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

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
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "tipoOferta"), "method"), "html", null, true);
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
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formPalabrasClaveOferta"] ?? $this->getContext($context, "formPalabrasClaveOferta")), array(0 => "bootstrap_3_layout.html.twig"));
            // line 151
            echo "
                  ";
            // line 152
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPalabrasClaveOferta"] ?? $this->getContext($context, "formPalabrasClaveOferta")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOfertas"), "method" => "POST"));
            echo "

                  ";
            // line 154
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPalabrasClaveOferta"] ?? $this->getContext($context, "formPalabrasClaveOferta")), "palabrasClave", array()), 'label');
            echo "
                  ";
            // line 155
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formPalabrasClaveOferta"] ?? $this->getContext($context, "formPalabrasClaveOferta")), "palabrasClave", array()), 'widget');
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formPalabrasClaveOferta"] ?? $this->getContext($context, "formPalabrasClaveOferta")), 'form_end');
        echo "
          </div>
        </div>

      </div>

    </div>
   </div>



    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
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
          ";
            // line 197
            if ($this->getAttribute($this->getAttribute($context["entry"], "tipo", array(), "any", false, true), "nombre", array(), "any", true, true)) {
                // line 198
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "tipo", array()), "nombre", array()), "html", null, true);
                echo "
          ";
            }
            // line 200
            echo "          </div>
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Autor:
              ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "autor", array()), "html", null, true);
            echo "
          </div>
          </h4>
      </div>

          <div class=\"row rowItem\">
            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">
              <img class=\"img_show\" src=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/ofertas/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getBrochure", array(), "method"), "html", null, true);
            echo "\" alt=\"\" />
            </div>
            <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-5 divDes\">
              <article class=\"descripcionItems\">
                <p>
                  ";
            // line 214
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
            // line 224
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "fechaInicio", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                  <li class=\"list-group-item list-group-item-info liInfo\">Fecha Fin: ";
            // line 225
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "fechaFin", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-6 divInfoItem1\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                  <a class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\" >Ver</a>
                </div>

                ";
            // line 236
            if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute($context["entry"], "getAutor", array(), "method")))) {
                // line 237
                echo "                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\"  >Editar</a>
                  </div>
                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" data-toggle=\"modal\"  data-target=\"#isResolve_dialog\" >Eliminar</a>
                  </div>
                ";
            }
            // line 244
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
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()), "resolve" => "si")), "html", null, true);
            echo "\">
                                <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                              </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <a href=\"";
            // line 283
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
        // line 302
        echo "  <div id=\"paginacion\">
    ";
        // line 303
        if (array_key_exists("pagination", $context)) {
            // line 304
            echo "      ";
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
            echo "
    ";
        }
        // line 306
        echo "  </div>

  ";
        // line 308
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "mensaje"), "method")) {
            // line 309
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
        // line 326
        echo "
  <script type=\"text/javascript\">
    \$(document).ready(function(){
      \$(\"#search\").autocomplete({
        source: '";
        // line 330
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
        // line 342
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
        
        $__internal_f5a4d07e38ee5b53f5a20087dfe13ceadbb5e5fc916c7c8db2d7dfb18ebeb2c3->leave($__internal_f5a4d07e38ee5b53f5a20087dfe13ceadbb5e5fc916c7c8db2d7dfb18ebeb2c3_prof);

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
        return array (  504 => 342,  489 => 330,  483 => 326,  464 => 309,  462 => 308,  458 => 306,  452 => 304,  450 => 303,  447 => 302,  422 => 283,  414 => 278,  378 => 244,  369 => 238,  366 => 237,  364 => 236,  358 => 233,  347 => 225,  343 => 224,  330 => 214,  321 => 209,  311 => 202,  307 => 200,  301 => 198,  299 => 197,  295 => 195,  289 => 193,  286 => 192,  280 => 190,  277 => 189,  271 => 187,  269 => 186,  261 => 181,  256 => 178,  252 => 177,  238 => 166,  227 => 157,  222 => 155,  218 => 154,  213 => 152,  210 => 151,  207 => 150,  205 => 149,  141 => 88,  89 => 38,  79 => 31,  68 => 23,  61 => 18,  59 => 17,  54 => 14,  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portadaOferta.html.twig' %}


{% block cuerpo %}

{% if  app.request.query.get('mensaje') is defined %}
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
            <hr class=\"hrStrong\">
          </div>
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
              <small>{{ app.session.get('tipoOferta') }}</small>
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
                      <a href=\"{{ path('eliminarPalabrasClaveOferta') }}\">
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
                {% if formPalabrasClaveOferta is defined %}
                  {% form_theme formPalabrasClaveOferta 'bootstrap_3_layout.html.twig' %}

                  {{ form_start(formPalabrasClaveOferta, {'action': path('mostrarOfertas'), 'method': 'POST'}) }}

                  {{ form_label(formPalabrasClaveOferta.palabrasClave) }}
                  {{ form_widget(formPalabrasClaveOferta.palabrasClave) }}
                {% endif %}
              </div>

            </div>


        </div>

        <div class=\"modal-footer\">
          <div class=\"container-fluid\">
            {{ form_end(formPalabrasClaveOferta) }}
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
              <img class=\"img_show\" src=\"{{ asset('uploads/brochures/ofertas/') }}{{ entry.getBrochure() }}\" alt=\"\" />
            </div>
            <div class=\"col-lg-9 col-md-9 col-sm-7 col-xs-5 divDes\">
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
                  <a class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"{{ path('mostrarOferta', {'idOferta': entry.id}) }}\" >Ver</a>
                </div>

                {% if app.security.getToken().getUser().roles|first == 'ROLE_SUPER_ADMIN' or app.security.getToken().getUser().getUsername()  == entry.getAutor() %}
                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"{{ path('editOferta', {'idOferta': entry.id}) }}\"  >Editar</a>
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
                              <a href=\"{{ path('eliminarOferta', {'idOferta': entry.id, 'resolve': \"si\"}) }}\">
                                <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                              </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <a href=\"{{ path('eliminarOferta', {'idOferta': entry.id, 'resolve': \"no\"}) }}\">
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

  {% if  app.request.query.get('mensaje') %}
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
        source: '{{ path(\"oferta_search\") }}',
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
        var inner_html = '<div class=\"itemContent\"><a id=\"linkElement\" href=\"' + item.path +  '\" ><h4>' + item.title + '</h4><br><div class=\"row\"><div class=\"col-lg-4 col-md-4 col-sm-5 col-xs-5\"><img class=\"img_show\" src={{ asset('uploads/brochures/ofertas') }}/' + item.image + '/></div><div class=\"col-lg-8 col-md-8 col-sm-7 col-xs-7\"><article class=\"descripcion\"><p>' + item.description + '</p></article></div></a></div><hr id=\"searchSpace\">';
        \$('ui-id-1').attr('id', 'newID');
        return \$( \"<li></li>\" )
        .data( \"item.autocomplete\", item )
        .append(inner_html)
        .appendTo( ul ).css({'width': \$('#search').width(), height: \"18%\" });
      };
    });

  </script>


{% endblock %}
", "OfertaBundle:Default:mostrarOfertas.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/OfertaBundle/Resources/views/Default/mostrarOfertas.html.twig");
    }
}
