<?php

/* OfertaBundle:Default:oferta.html.twig */
class __TwigTemplate_dafec5ad8da207bdacadbaff0e22d0173e3ad4546df6661d0186abb08b77f29c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portadaOferta.html.twig", "OfertaBundle:Default:oferta.html.twig", 1);
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
        $__internal_f83e1ef414679c78f14c722f331b34d6ce44473eb5215f9eb89c44e5c2132f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83e1ef414679c78f14c722f331b34d6ce44473eb5215f9eb89c44e5c2132f7b->enter($__internal_f83e1ef414679c78f14c722f331b34d6ce44473eb5215f9eb89c44e5c2132f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfertaBundle:Default:oferta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83e1ef414679c78f14c722f331b34d6ce44473eb5215f9eb89c44e5c2132f7b->leave($__internal_f83e1ef414679c78f14c722f331b34d6ce44473eb5215f9eb89c44e5c2132f7b_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_dc883adec818ef8918de996f824b3d07f30440c92d46f3aa38a74a6882203bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc883adec818ef8918de996f824b3d07f30440c92d46f3aa38a74a6882203bc6->enter($__internal_dc883adec818ef8918de996f824b3d07f30440c92d46f3aa38a74a6882203bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "
        <div class=\"row\">

            <div class=\"col-md-3\">
                <div class=\"list-group\">
                    <h3><small> Nombre Oferta: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getNombre", array(), "method"), "html", null, true);
        echo " </small></h3>
                    ";
        // line 10
        if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getAutor", array(), "method")))) {
            // line 11
            echo "                        <br>
                        <hr>
                        ";
            // line 13
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getAutor", array(), "method"))) {
                // line 14
                echo "                            <h3><small> Oferta de tu propiedad </small></h3>
                        ";
            }
            // line 16
            echo "                        ";
            if ((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN")) {
                // line 17
                echo "                            <h3><small> Administrador del sistema </small></h3>
                        ";
            }
            // line 19
            echo "                        <a id=\"linkAdmin\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editOferta", array("idOferta" => $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\" >Editar</a>
                        <a id=\"linkAdmin\" data-toggle=\"modal\"  data-target=\"#isResolve_dialog\" class=\"list-group-item\" >Eliminar</a>
                        <br>
                        <hr>
                    ";
        } else {
            // line 24
            echo "                      <hr>
                        <h3><small> Oferta de ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getAutor", array(), "method"), "html", null, true);
            echo " </small></h3>
                        <button type=\"button\" class=\"btn btn-info btnContactar\" data-toggle=\"modal\" data-target=\"#contact_dialogAutor\">Contactar</button>
                      <hr>
                    ";
        }
        // line 29
        echo "                    <ul class=\"list-group ulInfo\">
                      <li class=\"list-group-item list-group-item-success liInfo\">Fecha Inicio: ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "fechaInicio", array()), "Y-m-d"), "html", null, true);
        echo "</li>
                      <li class=\"list-group-item list-group-item-info liInfo\">Fecha Fin: ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "fechaFin", array()), "Y-m-d"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/ofertas"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getBrochure", array(), "method"), "html", null, true);
        echo "\" alt=\"Example\" />
                      </div>
                      <div class=\"col-xs-6 col-sm-8 col-md-8 col-lg-8\">

                        <article class=\"descripcionItem\">
                          <p>
                            ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getDescripcion", array(), "method"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getId", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["anios"] ?? $this->getContext($context, "anios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
            // line 60
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOferta", array("idAnio" => $this->getAttribute($context["anio"], "id", array()), "idOferta" => $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getId", array(), "method"))), "html", null, true);
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
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart(($context["ob"] ?? $this->getContext($context, "ob")), "mootools");
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
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formComment"] ?? $this->getContext($context, "formComment")), array(0 => "bootstrap_3_layout.html.twig"));
            // line 93
            echo "
                        ";
            // line 94
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formComment"] ?? $this->getContext($context, "formComment")), 'form_start', array("method" => "POST"));
            echo "

                        ";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formComment"] ?? $this->getContext($context, "formComment")), 'widget');
            echo "
                        ";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formComment"] ?? $this->getContext($context, "formComment")), 'errors');
            echo "
                        ";
            // line 98
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formComment"] ?? $this->getContext($context, "formComment")), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getComentarios", array(), "method"));
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
            if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "getAutor", array(), "method")))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarComentario", array("idComentario" => $this->getAttribute($context["comentario"], "id", array()), "tipoItem" => ($context["oferta"] ?? $this->getContext($context, "oferta")), "idItem" => $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "id", array()))), "html", null, true);
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
            $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formContactAutor"] ?? $this->getContext($context, "formContactAutor")), array(0 => "bootstrap_3_layout.html.twig"));
            // line 163
            echo "
                            ";
            // line 164
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formContactAutor"] ?? $this->getContext($context, "formContactAutor")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOferta", array("id" => $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "id", array()))), "method" => "POST"));
            echo "

                            ";
            // line 166
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formContactAutor"] ?? $this->getContext($context, "formContactAutor")), "mensaje", array()), 'label');
            echo "
                            ";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formContactAutor"] ?? $this->getContext($context, "formContactAutor")), "mensaje", array()), 'widget');
            echo "
                            <br>
                            ";
            // line 169
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formContactAutor"] ?? $this->getContext($context, "formContactAutor")), 'form_end');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarOferta", array("idOferta" => $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "id", array()), "resolve" => "si")), "html", null, true);
        echo "\">
                              <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                            </a>
                          </div>
                          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarOferta", array("idOferta" => $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "id", array()), "resolve" => "no")), "html", null, true);
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
        
        $__internal_dc883adec818ef8918de996f824b3d07f30440c92d46f3aa38a74a6882203bc6->leave($__internal_dc883adec818ef8918de996f824b3d07f30440c92d46f3aa38a74a6882203bc6_prof);

    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:oferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 201,  358 => 196,  332 => 172,  326 => 169,  321 => 167,  317 => 166,  312 => 164,  309 => 163,  306 => 162,  304 => 161,  283 => 142,  264 => 129,  247 => 114,  243 => 112,  241 => 111,  237 => 110,  233 => 109,  229 => 108,  225 => 106,  221 => 105,  214 => 100,  209 => 98,  205 => 97,  201 => 96,  196 => 94,  193 => 93,  190 => 92,  188 => 91,  167 => 73,  154 => 62,  141 => 60,  137 => 59,  121 => 48,  110 => 42,  96 => 31,  92 => 30,  89 => 29,  82 => 25,  79 => 24,  70 => 19,  66 => 17,  63 => 16,  59 => 14,  57 => 13,  53 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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

        <div class=\"row\">

            <div class=\"col-md-3\">
                <div class=\"list-group\">
                    <h3><small> Nombre Oferta: {{ oferta.getNombre() }} </small></h3>
                    {% if app.security.getToken().getUser().roles|first == 'ROLE_SUPER_ADMIN' or app.security.getToken().getUser().getUsername()  == oferta.getAutor() %}
                        <br>
                        <hr>
                        {% if app.security.getToken().getUser().getUsername()  == oferta.getAutor() %}
                            <h3><small> Oferta de tu propiedad </small></h3>
                        {% endif %}
                        {% if app.security.getToken().getUser().roles|first  == 'ROLE_SUPER_ADMIN' %}
                            <h3><small> Administrador del sistema </small></h3>
                        {% endif %}
                        <a id=\"linkAdmin\" href=\"{{ path('editOferta', {'idOferta': oferta.id}) }}\" class=\"list-group-item\" >Editar</a>
                        <a id=\"linkAdmin\" data-toggle=\"modal\"  data-target=\"#isResolve_dialog\" class=\"list-group-item\" >Eliminar</a>
                        <br>
                        <hr>
                    {% else %}
                      <hr>
                        <h3><small> Oferta de {{ oferta.getAutor() }} </small></h3>
                        <button type=\"button\" class=\"btn btn-info btnContactar\" data-toggle=\"modal\" data-target=\"#contact_dialogAutor\">Contactar</button>
                      <hr>
                    {% endif %}
                    <ul class=\"list-group ulInfo\">
                      <li class=\"list-group-item list-group-item-success liInfo\">Fecha Inicio: {{ oferta.fechaInicio|date('Y-m-d') }}</li>
                      <li class=\"list-group-item list-group-item-info liInfo\">Fecha Fin: {{ oferta.fechaFin|date('Y-m-d') }}</li>
                    </ul>
                    <hr>
                </div>
            </div>

            <div class=\"col-md-9\">

                <div class=\"thumbnail\">
                    <div class=\"row\">
                      <div class=\"col-xs-6 col-sm-4 col-md-4 col-lg-4\">
                        <img class=\"imgItemPerfil\" src=\"{{ asset('uploads/brochures/ofertas') }}/{{ oferta.getBrochure() }}\" alt=\"Example\" />
                      </div>
                      <div class=\"col-xs-6 col-sm-8 col-md-8 col-lg-8\">

                        <article class=\"descripcionItem\">
                          <p>
                            {{ oferta.getDescripcion() }}  {{ oferta.getId() }}
                            </p>
                         </article>
                    </div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                      <div class=\"btn-group\" style=\"padding: 0px; margin-top: 1%\">
                        <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Seleccione el año para ver el número de visitas. <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                          {% for anio in anios  %}
                            <li><a href=\"{{ path('mostrarOferta', {'idAnio': anio.id, 'idOferta':oferta.getId() }) }}\">Visitas Año {{ anio.getAnio() }}. Total: {{ anio.getVisitas() }} visitas. </a></li>
                          {% endfor %}
                        </ul>
                      </div>
                    </div>

                  </div>

                  <div class=\"row\">
                      <!-- Load jQuery from Google's CDN if needed -->
                      <script src=\"https://code.highcharts.com/stock/highstock.src.js\"></script>
                      <script src=\"https://code.highcharts.com/modules/drilldown.src.js\"></script>
                      <script type=\"text/javascript\">
                        {{ chart(ob, 'mootools')  }}
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
                      {% if formComment is defined %}
                        {% form_theme formComment 'bootstrap_3_layout.html.twig' %}

                        {{ form_start(formComment, {method: 'POST'}) }}

                        {{ form_widget(formComment) }}
                        {{ form_errors(formComment) }}
                        {{ form_end(formComment) }}
                      {% endif %}

                    </div>

                    <hr>

                    {% for comentario in oferta.getComentarios()  %}
                      <div class=\"row\">
                        <div class=\"col-md-12\">
                            {{ comentario.getAutor() }}
                            <span class=\"pull-right\">{{ comentario.getFecha()|date('Y-m-d') }}</span>
                            <p>{{ comentario.getContenido() }}</p>
                            {% if app.security.getToken().getUser().roles|first == 'ROLE_SUPER_ADMIN' or app.security.getToken().getUser().getUsername()  == oferta.getAutor() %}
                              <button class=\"btn btn-danger pull-right\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\" ><span class=\"glyphicon glyphicon-trash\"></span></button>
                            {% endif %}
                        </div>

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
                                   <a href=\"{{ path('eliminarComentario', {'idComentario': comentario.id, 'tipoItem': oferta, 'idItem': oferta.id }) }}\" > <button type=\"button\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Si </button></a>
                                   <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
                                 </div>
                               </div>
                             <!-- /.modal-content -->
                           </div>
                           <!-- /.modal-dialog -->
                         </div>


                      </div>
                      <hr>
                    {% endfor %}

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

                        {% if formContactAutor is defined %}
                            {% form_theme formContactAutor 'bootstrap_3_layout.html.twig' %}

                            {{ form_start(formContactAutor, {'action': path('mostrarOferta', {'id': oferta.id}), 'method': 'POST'}) }}

                            {{ form_label(formContactAutor.mensaje) }}
                            {{ form_widget(formContactAutor.mensaje) }}
                            <br>
                            {{ form_end(formContactAutor) }}
                            <br>
                        {% endif %}

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
                            <a href=\"{{ path('eliminarOferta', {'idOferta': oferta.id, 'resolve': \"si\"}) }}\">
                              <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                            </a>
                          </div>
                          <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                            <a href=\"{{ path('eliminarOferta', {'idOferta': oferta.id, 'resolve': \"no\"}) }}\">
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


  {% endblock %}
", "OfertaBundle:Default:oferta.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/OfertaBundle/Resources/views/Default/oferta.html.twig");
    }
}
