<?php

/* AreaBundle:Default:editMenu.html.twig */
class __TwigTemplate_fa34899d91fa4adab5b00c0afb775c46a13ea43cf0a2743231ea3f8be5f3d445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AreaBundle:Default:editMenu.html.twig", 1);
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
  ";
        // line 4
        if (array_key_exists("mensaje", $context)) {
            // line 5
            echo "    <script>
      // This would automatically run when page loads.
      \$( document ).ready(function() {
        \$(\"#mensajeError\").modal('show');
      });
    </script>
  ";
        }
        // line 12
        echo "

  <div class=\"row\">
    <div class=\"col-xs-10 col-sm-6 col-md-8\">
      <h2>
        Editar Menú
      </h2>
    </div>
    <div class=\"col-xs-2 col-md-4\">
      <button class=\"btn btn-info pull-right\" type=\"button\" id=\"btnInfoMenu\" data-toggle=\"modal\" data-target=\"#infMenuDiag\"><i class=\"fa fa-question\" aria-hidden=\"true\"></i>
      </button>
    </div>
    <br>
    <br>
    <br>
    <hr id=\"hrStrong\">
  </div>

    <div class=\"modal fade modal-diag footer-to-bottom block-center\" id=\"infMenuDiag\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
          <div class=\"panel panel-default\" id=\"modalCabecera\">
            <div class=\"panel-heading\">
              <div class=\"row\">
                <div class=\"col-xs-10 col-sm-10 col-md-10 col-lg-10\">
                  <h2>
                    Información del sistema
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
                <img class=\"imgExplicacion\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/expliaciones/editarMenu.png"), "html", null, true);
        echo "\">
              </div>

              <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"well\">
                  <p id=\"pMenuInf\">
                    Aquí podremos editar el menú que podemos ver en el apartado \"¿ Dónde buscar ?\" en
                    la sección \"Ofertas\" o \"Demandas\". Para las áreas, ramas y disciplinas se ofrecen las siguientes opciones: <br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Añadir área/rama/disciplina/tipo: se dirigirá a un formulario con los campos correspondientes para crear el nuevo elemento(área, rama, disciplina o tipo).<br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Editar área/rama/disciplina/tipo: permite editar un área, rama, disciplina o tipo. Antes se debe seleccionar el elemento que se quiera editar en el menú desplegable.<br>
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> Elimnar área/rama/disciplina/tipo: elimina el área, rama, disciplina o tipo seleccionado previamente en el menú desplegable.
                  </p>
                </div>
              </div>
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



   <div class=\"row rowMenu\">
     <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 colMenu\">
          <br>
          <hr class=\"hrMenu\">
          <h4> Areas </h4>
          <hr class=\"hrMenu\">

          <ul class=\"nav nav-pills\" style=\"width: 100%; height: 10%\">
            <li role=\"presentation\" ><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addArea");
        echo "\">Añadir Area</a></li>
            <li role=\"presentation\" ><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editArea");
        echo "\">Editar Area</a></li>
            <li id=\"deleteItem\" role=\"presentation\" ><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteArea");
        echo "\">Eliminar Area</a></li>
          </ul>

          <select id=\"form_area_menu\" name=\"form[area][]\" required=\"required\" class=\"form-control\" multiple=\"multiple\" style=\"width: 100%; height: 70%\">
            ";
        // line 102
        if (array_key_exists("areas", $context)) {
            // line 103
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
                // line 104
                echo "                <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "getId", array(), "method"), "html", null, true);
                echo " >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["area"], "getNombre", array(), "method"), "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            ";
        }
        // line 107
        echo "          </select>
      </div>
    </div>

    <div class=\"row rowMenu\">
      <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 colMenu\">
          <br>
          <hr class=\"hrMenu\">
          <h4> Ramas </h4>
          <hr class=\"hrMenu\">
          <ul class=\"nav nav-pills\" style=\"width: 100%; height: 10%\" >
            <li role=\"presentation\" ><a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addRama");
        echo "\">Añadir Rama</a></li>
            <li role=\"presentation\" ><a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editRama");
        echo "\">Editar Rama</a></li>
            <li id=\"deleteItem\" role=\"presentation\" ><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteRama");
        echo "\">Eliminar Rama</a></li>
          </ul>

          <select id=\"form_rama_menu\" name=\"form[rama][]\" required=\"required\" class=\"form-control\" multiple=\"multiple\" style=\"width: 100%; height: 70%\"></select>
      </div>
    </div>

    <div class=\"row rowMenu\">
      <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 colMenu\">
          <br>
          <hr class=\"hrMenu\">
          <h4 > Disciplinas </h4>
          <hr class=\"hrMenu\">
          <ul class=\"nav nav-pills\" style=\"width: 100%; height: 10%\">
            <li role=\"presentation\" ><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addDisciplina");
        echo "\">Añadir Disciplina</a></li>
            <li role=\"presentation\" ><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editDisciplina");
        echo "\">Editar Disciplina</a></li>
            <li id=\"deleteItem\" role=\"presentation\" ><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteDisciplina");
        echo "\">Eliminar Disciplina</a></li>
          </ul>

          <select id=\"form_disciplina_menu\" name=\"form[disciplina][]\" required=\"required\" class=\"form-control\" multiple=\"multiple\" style=\"width: 100%; height: 70%\"></select>
       </div>
    </div>

    <div class=\"row rowMenu\">
      <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 colMenu\">
          <br>
          <hr class=\"hrMenu\">
          <h4> Tipos </h4>
          <hr class=\"hrMenu\">
          <ul class=\"nav nav-pills\" style=\"width: 100%; height: 10%\">
            <li role=\"presentation\" ><a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addTipo");
        echo "\">Añadir Tipo</a></li>
            <li role=\"presentation\" ><a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editTipo");
        echo "\">Editar Tipo</a></li>
            <li id=\"deleteItem\" role=\"presentation\" ><a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteTipo");
        echo "\">Eliminar Tipo</a></li>
          </ul>

          <select id=\"form_tipo_menu\" name=\"form[tipo][]\" required=\"required\" class=\"form-control\" multiple=\"multiple\" style=\"width: 100%; height: 70%\">
            ";
        // line 156
        if (array_key_exists("tipos", $context)) {
            // line 157
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
                // line 158
                echo "                <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "getId", array(), "method"), "html", null, true);
                echo " >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "getNombre", array(), "method"), "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "            ";
        }
        // line 161
        echo "          </select>
      </div>
    </div>




        ";
        // line 168
        if (array_key_exists("mensaje", $context)) {
            // line 169
            echo "          <div class=\"modal fade\" id=\"mensajeError\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">¡Atención!</h4>
                </div>
                <div class=\"modal-body\">
                  ";
            // line 177
            if (array_key_exists("mensaje", $context)) {
                // line 178
                echo "                      <p> ";
                echo twig_escape_filter($this->env, ($context["mensaje"] ?? null), "html", null, true);
                echo " </p>
                  ";
            }
            // line 180
            echo "                </div>
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-success pull-right\" data-dismiss=\"modal\">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 188
        echo "
    <script>
      \$(\"#form_area_menu\").change(function() {
        var data = {
          area_id: \$(this).val()
        };
        alert(data[0])
          \$.ajax({
            type: 'post',
              url: '";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_rama");
        echo "',
                     data: data,
                      success: function(data,url) {
                          var \$rama_selector = \$('#form_rama_menu');
                          alert(data);

                          \$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
                          for (var i = 2, total = data.length; i < total;) {
                              \$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
                              i=i+2;
                          }

                      }
                  });
              });

        \$(\"#form_rama_menu\").change(function() {
            var data = {
              rama_id: \$(this).val()
            };
            alert(data[0])
            \$.ajax({
                type: 'post',
                url: '";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_disciplina");
        echo "',
                  data: data,
                success: function(data,url) {
                    var \$rama_selector = \$('#form_disciplina_menu');
                    alert(data);
                    \$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
                    for (var i = 2, total = data.length; i < total;) {
                       \$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
                        i=i+2;
                    }
                }
            });
        });
        \$(\"#form_disciplina_menu\").change(function() {
            var data = {
              disciplina_id: \$(this).val()
            };
            alert(data[0])
            \$.ajax({
                type: 'post',
                url: '";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_disciplina");
        echo "',
                data: data,
                success: function(data,url) {
            }
          });
        });
        \$(\"#form_tipo_menu\").change(function() {
            var data = {
              tipo_id: \$(this).val()
            };
            alert(data[0])
            \$.ajax({
                type: 'post',
                url: '";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_tipo");
        echo "',
                data: data,
                success: function(data,url) {
            }
          });
        });
    </script>


";
    }

    public function getTemplateName()
    {
        return "AreaBundle:Default:editMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 253,  368 => 240,  345 => 220,  319 => 197,  308 => 188,  298 => 180,  292 => 178,  290 => 177,  280 => 169,  278 => 168,  269 => 161,  266 => 160,  255 => 158,  250 => 157,  248 => 156,  241 => 152,  237 => 151,  233 => 150,  216 => 136,  212 => 135,  208 => 134,  191 => 120,  187 => 119,  183 => 118,  170 => 107,  167 => 106,  156 => 104,  151 => 103,  149 => 102,  142 => 98,  138 => 97,  134 => 96,  91 => 56,  45 => 12,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AreaBundle:Default:editMenu.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/AreaBundle/Resources/views/Default/editMenu.html.twig");
    }
}
