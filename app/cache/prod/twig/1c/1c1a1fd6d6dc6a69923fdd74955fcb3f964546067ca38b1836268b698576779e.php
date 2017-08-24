<?php

/* DemandaBundle:Default:demanda.html.twig */
class __TwigTemplate_0de753fc3692b03d849b5a584516d664659d2c578a8825852faeba94579d53f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portadaDemanda.html.twig", "DemandaBundle:Default:demanda.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "
        <div class=\"row\">

            <div class=\"col-md-3\">
                <div class=\"list-group\">
                    <h3><small> Nombre Demanda: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "getNombre", array(), "method"), "html", null, true);
        echo " </small></h3>
                    ";
        // line 10
        if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute(($context["demanda"] ?? null), "getAutor", array(), "method")))) {
            // line 11
            echo "                        <br>
                        <hr>
                        ";
            // line 13
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute(($context["demanda"] ?? null), "getAutor", array(), "method"))) {
                // line 14
                echo "                            <h3><small> Demanda de tu propiedad </small></h3>
                        ";
            }
            // line 16
            echo "                        ";
            if ((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN")) {
                // line 17
                echo "                            <h3><small> Administrador del sistema </small></h3>
                        ";
            }
            // line 19
            echo "                        <a id=\"linkAdmin\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editDemanda", array("idDemanda" => $this->getAttribute(($context["demanda"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\" >Editar</a>
                        <a id=\"linkAdmin\" data-toggle=\"modal\"  data-target=\"#isResolve_dialog\" class=\"list-group-item\" >Eliminar</a>
                        <br>
                        <hr>
                    ";
        } else {
            // line 24
            echo "                      <hr>
                        <h3><small> Demanda de ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "getAutor", array(), "method"), "html", null, true);
            echo " </small></h3>
                        <button type=\"button\" class=\"btn btn-info btnContactar\" data-toggle=\"modal\" data-target=\"#contact_dialogAutor\">Contactar</button>
                      <hr>
                    ";
        }
        // line 29
        echo "                    <ul class=\"list-group ulInfo\">
                      <li class=\"list-group-item list-group-item-success liInfo\">Fecha Inicio: ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "fechaInicio", array()), "Y-m-d"), "html", null, true);
        echo "</li>
                      <li class=\"list-group-item list-group-item-info liInfo\">Fecha Fin: ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "fechaFin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
                    </ul>
                    <hr>
                </div>
            </div>

            <div class=\"col-md-9\">

                <div class=\"thumbnail\">
                    <div class=\"row\">
                      <div class=\"col-xs-6 col-sm-4 col-md-4 col-lg-4\">
                        <img class=\"imgItemPerfil\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/demandas"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "getBrochure", array(), "method"), "html", null, true);
        echo "\" alt=\"Example\" />
                      </div>
                      <div class=\"col-xs-6 col-sm-8 col-md-8 col-lg-8\">

                        <article class=\"descripcionItem\">
                          <p>
                            ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "getDescripcion", array(), "method"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "getId", array(), "method"), "html", null, true);
        echo "
                            </p>
                         </article>
                    </div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                      <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
                        <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Seleccione el año para ver el número de visitas. <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                          ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
            // line 60
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemanda", array("idAnio" => $this->getAttribute($context["anio"], "id", array()), "idDemanda" => $this->getAttribute(($context["demanda"] ?? null), "getId", array(), "method"))), "html", null, true);
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
        // line 62
        echo "                        </ul>
                      </div>
                    </div>

                  </div>

                  <div class=\"row\">
                      <!-- Load jQuery from Google's CDN if needed -->
                      <script src=\"https://code.highcharts.com/stock/highstock.src.js\"></script>
                      <script src=\"https://code.highcharts.com/modules/drilldown.src.js\"></script>
                      <script type=\"text/javascript\">
                        ";
        // line 73
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart(($context["ob"] ?? null), "mootools");
        echo "
                      </script>

                      <hr>

                      <div class=\"col-md-12\">
                        <div  id=\"linechart\" style=\"margin: 4px\"></div>
                      </div>
                      <hr>


                  </div>

                </div>

                <div class=\"well\">

                    <div class=\"text-right\">
                      ";
        // line 91
        if (array_key_exists("formComment", $context)) {
            // line 92
            echo "                        ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formComment"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
            // line 93
            echo "
                        ";
            // line 94
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formComment"] ?? null), 'form_start', array("method" => "POST"));
            echo "

                        ";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formComment"] ?? null), 'widget');
            echo "
                        ";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formComment"] ?? null), 'errors');
            echo "
                        ";
            // line 98
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formComment"] ?? null), 'form_end');
            echo "
                      ";
        }
        // line 100
        echo "
                    </div>

                    <hr>

                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["demanda"] ?? null), "getComentarios", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 106
            echo "                      <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "getAutor", array(), "method"), "html", null, true);
            echo "
                            <span class=\"pull-right\">";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comentario"], "getFecha", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</span>
                            <p>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "getContenido", array(), "method"), "html", null, true);
            echo "</p>
                            ";
            // line 111
            if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute(($context["Demanda"] ?? null), "getAutor", array(), "method")))) {
                // line 112
                echo "                              <button class=\"btn btn-danger pull-right\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button>
                            ";
            }
            // line 114
            echo "                        </div>

                        <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
                           <div class=\"modal-dialog\">
                             <div class=\"modal-content\">
                               <div class=\"modal-header\">
                                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                                   <h4 class=\"modal-title custom_align\" id=\"Heading\">Eliminar comentario.</h4>
                                </div>
                               <div class=\"modal-body\">
                                 <div class=\"alert alert-danger\">
                                   <span class=\"glyphicon glyphicon-warning-sign\">
                                   </span> ¿ Desea eliminar el comentario ?</div>
                                 </div>
                                 <div class=\"modal-footer \">
                                   <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarComentario", array("idComentario" => $this->getAttribute($context["comentario"], "id", array()), "tipoItem" => "Demanda", "idItem" => $this->getAttribute(($context["demanda"] ?? null), "id", array()))), "html", null, true);
            echo "\" > <button type=\"button\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Si </button></a>
                                   <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
                                 </div>
                               </div>
                             <!-- /.modal-content -->
                           </div>
                           <!-- /.modal-dialog -->
                         </div>


                      </div>
                      <hr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "
                </div>

            </div>

        </div>


        <!-- the div that represents the modal dialog -->
          <div class=\"modal fade\" id=\"contact_dialogAutor\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Escribe el mensaje.</h4>
                    </div>

                    <div class=\"modal-body\">

                        ";
        // line 161
        if (array_key_exists("formContactAutor", $context)) {
            // line 162
            echo "                            ";
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formContactAutor"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
            // line 163
            echo "
                            ";
            // line 164
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formContactAutor"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemanda", array("id" => $this->getAttribute(($context["demanda"] ?? null), "id", array()))), "method" => "POST"));
            echo "

                            ";
            // line 166
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formContactAutor"] ?? null), "mensaje", array()), 'label');
            echo "
                            ";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formContactAutor"] ?? null), "mensaje", array()), 'widget');
            echo "
                            <br>
                            ";
            // line 169
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formContactAutor"] ?? null), 'form_end');
            echo "
                            <br>
                        ";
        }
        // line 172
        echo "
                    </div>

                </div>

            </div>

          </div>


        <!-- the div that represents the modal dialog -->
        <div class=\"modal fade\" id=\"isResolve_dialog\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\" style=\"text-align:center;\">¿Se ha resuelto?</h4>
                    </div>
                    <div class=\"modal-body\">
                      <br>
                      <br>
                      <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarDemanda", array("idDemanda" => $this->getAttribute(($context["demanda"] ?? null), "id", array()), "resolve" => "si")), "html", null, true);
        echo "\">
                              <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                            </a>
                          </div>
                          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarDemanda", array("idDemanda" => $this->getAttribute(($context["demanda"] ?? null), "id", array()), "resolve" => "no")), "html", null, true);
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


  ";
    }

    public function getTemplateName()
    {
        return "DemandaBundle:Default:demanda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 201,  349 => 196,  323 => 172,  317 => 169,  312 => 167,  308 => 166,  303 => 164,  300 => 163,  297 => 162,  295 => 161,  274 => 142,  255 => 129,  238 => 114,  234 => 112,  232 => 111,  228 => 110,  224 => 109,  220 => 108,  216 => 106,  212 => 105,  205 => 100,  200 => 98,  196 => 97,  192 => 96,  187 => 94,  184 => 93,  181 => 92,  179 => 91,  158 => 73,  145 => 62,  132 => 60,  128 => 59,  112 => 48,  101 => 42,  87 => 31,  83 => 30,  80 => 29,  73 => 25,  70 => 24,  61 => 19,  57 => 17,  54 => 16,  50 => 14,  48 => 13,  44 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DemandaBundle:Default:demanda.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/DemandaBundle/Resources/views/Default/demanda.html.twig");
    }
}
