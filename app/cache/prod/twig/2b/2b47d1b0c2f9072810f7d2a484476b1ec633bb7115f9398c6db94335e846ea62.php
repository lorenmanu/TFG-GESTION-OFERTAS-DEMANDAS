<?php

/* UserBundle:Default:mostrarDemandasUser.html.twig */
class __TwigTemplate_234e7afd5d3e560fb3c88a5e23f754abde6186c0e847a3c3c1704f6b3d15da9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:mostrarDemandasUser.html.twig", 1);
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

    // line 2
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 3
        echo "

<div class=\"jumbotron\">
  <div class=\"row\">
    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
      <h3 id=\"cabeceraBienvenida\"> Demandas: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "</h3>
      <!-- Button trigger modal -->
    </div>
  </div>
  <div class=\"row\">
    ";
        // line 13
        if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") && (twig_first($this->env, $this->getAttribute(($context["user"] ?? null), "roles", array())) != "ROLE_SUPER_ADMIN"))) {
            // line 14
            echo "      <div class=\"col-xs-9 col-sm-11 col-md-12 col-lg-12\">
        <div class=\"btn btn-group pull-right\" style=\"padding: 0px; margin-top: 1%\">
          <a id=\"linkAdmin\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("perfilUser", array("userId" => $this->getAttribute(($context["user"] ?? null), "getId", array(), "method"))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary dropdown-toggle\"> Ir al perfil de ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getName", array(), "method"), "html", null, true);
            echo " </button> </a>
        </div>
      </div>
    ";
        }
        // line 20
        echo "  </div>
</div>




    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 27
            echo "      <div class=\"row\">
      <div class=\"row rowItem\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <h3>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "nombre", array()), "html", null, true);
            echo "</h3>
          </div>

          <h4>
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Categoria:
          ";
            // line 35
            if ($this->getAttribute($context["entry"], "area", array(), "any", true, true)) {
                // line 36
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "area", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
                    // line 37
                    echo "              ";
                    if ((null === $context["area"])) {
                        // line 38
                        echo "              ";
                    } else {
                        // line 39
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "nombre", array()), "html", null, true);
                        echo "
              ";
                    }
                    // line 41
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "            ";
            }
            // line 43
            echo "            ";
            if ($this->getAttribute($context["entry"], "rama", array(), "any", true, true)) {
                // line 44
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "rama", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rama"]) {
                    // line 45
                    echo "              ";
                    if ((null === $context["rama"])) {
                        // line 46
                        echo "              ";
                    } else {
                        // line 47
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rama"], "nombre", array()), "html", null, true);
                        echo "
              ";
                    }
                    // line 49
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rama'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "            ";
            }
            // line 51
            echo "            ";
            if ($this->getAttribute($context["entry"], "disciplina", array(), "any", true, true)) {
                // line 52
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "disciplina", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["disciplina"]) {
                    // line 53
                    echo "              ";
                    if ((null === $context["disciplina"])) {
                        // line 54
                        echo "              ";
                    } else {
                        // line 55
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["disciplina"], "nombre", array()), "html", null, true);
                        echo "
              ";
                    }
                    // line 57
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disciplina'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            ";
            }
            // line 59
            echo "          </div>
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Tipo:
            ";
            // line 61
            if ($this->getAttribute($context["entry"], "tipo", array(), "any", true, true)) {
                // line 62
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "tipo", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
                    // line 63
                    echo "              ";
                    if ((null === $context["tipo"])) {
                        // line 64
                        echo "              ";
                    } else {
                        // line 65
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array()), "html", null, true);
                        echo "
              ";
                    }
                    // line 67
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "            ";
            }
            // line 69
            echo "          </div>
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"> Autor:
              ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "autor", array()), "html", null, true);
            echo "
          </div>
          </h4>
      </div>

          <div class=\"row rowItem\">
            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-6\">
              <img class=\"img_show\" src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/demandas/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getBrochure", array(), "method"), "html", null, true);
            echo "\" alt=\"\" />
            </div>
            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-6 divDes\">
              <article class=\"descripcionItems\">
                <p>
                  ";
            // line 83
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
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "fechaInicio", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                  <li class=\"list-group-item list-group-item-info liInfo\">Fecha Fin: ";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "fechaFin", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-6 divInfoItem1\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                  <a class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\" >Ver</a>
                </div>

                ";
            // line 105
            if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute($context["entry"], "getAutor", array(), "method")))) {
                // line 106
                echo "                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\"  >Editar</a>
                  </div>
                  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 divInfoItem1\">
                    <a id=\"linkAdmin\" class=\"btnItem btn btn-blog pull-right marginBottom10\" data-toggle=\"modal\"  data-target=\"#isResolve_dialog\" >Eliminar</a>
                  </div>
                ";
            }
            // line 113
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
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarOferta", array("idOferta" => $this->getAttribute($context["entry"], "id", array()), "resolve" => "si")), "html", null, true);
            echo "\">
                                <button type=\"button\" id=\"submitForm\" class=\"btn btn-success pull-left\">Si</button>
                              </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                              <a href=\"";
            // line 152
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
        // line 171
        echo "  <div id=\"paginacion\">
    ";
        // line 172
        if (array_key_exists("pagination", $context)) {
            // line 173
            echo "      ";
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
            echo "
    ";
        }
        // line 175
        echo "  </div>



";
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:mostrarDemandasUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 175,  349 => 173,  347 => 172,  344 => 171,  319 => 152,  311 => 147,  275 => 113,  266 => 107,  263 => 106,  261 => 105,  255 => 102,  244 => 94,  240 => 93,  227 => 83,  218 => 78,  208 => 71,  204 => 69,  201 => 68,  195 => 67,  189 => 65,  186 => 64,  183 => 63,  178 => 62,  176 => 61,  172 => 59,  169 => 58,  163 => 57,  157 => 55,  154 => 54,  151 => 53,  146 => 52,  143 => 51,  140 => 50,  134 => 49,  128 => 47,  125 => 46,  122 => 45,  117 => 44,  114 => 43,  111 => 42,  105 => 41,  99 => 39,  96 => 38,  93 => 37,  88 => 36,  86 => 35,  78 => 30,  73 => 27,  69 => 26,  61 => 20,  52 => 16,  48 => 14,  46 => 13,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Default:mostrarDemandasUser.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Default/mostrarDemandasUser.html.twig");
    }
}
