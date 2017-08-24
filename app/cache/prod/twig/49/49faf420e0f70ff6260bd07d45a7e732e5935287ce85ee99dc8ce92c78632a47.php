<?php

/* DemandaBundle:Default:editDemanda.html.twig */
class __TwigTemplate_0da56489322089eadddb520cffe4e9d43e1e97bc0fddc91257b870e5c26e5f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portadaDemanda.html.twig", "DemandaBundle:Default:editDemanda.html.twig", 1);
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


        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h1>
              Editar Demanda
            </h1>

            <div class=\"col-md-12 text-center\">
                <div class=\"list-group\">
                    <h3><small> Nombre Demanda: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "getNombre", array(), "method"), "html", null, true);
        echo " </small></h3>
                    ";
        // line 16
        if (((twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "roles", array())) == "ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute(($context["demanda"] ?? null), "getAutor", array(), "method")))) {
            // line 17
            echo "                        <hr>
                          <a id=\"linkAdmin\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrarDemanda", array("idDemanda" => $this->getAttribute(($context["demanda"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\" > Volver a demanda: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["demanda"] ?? null), "getNombre", array(), "method"), "html", null, true);
            echo " </a>
                        <hr>
                    ";
        }
        // line 21
        echo "                </div>
            </div>

          </div>
          <div class=\"panel-body\">
            ";
        // line 26
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formDemanda"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 27
        echo "
              ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formDemanda"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editDemanda"), "method" => "POST", "multipart" => "true"));
        echo "

              <div class=\"form-group\">
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "nombre", array()), 'label');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "nombre", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "nombre", array()), 'widget', array("attr" => array("class" => "nombre")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "descripcion", array()), 'label');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "descripcion", array()), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "descripcion", array()), 'widget', array("attr" => array("class" => "descripcion")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "condiciones", array()), 'label');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "condiciones", array()), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "condiciones", array()), 'widget', array("attr" => array("class" => "condiciones")));
        echo "
              </div>

              <div class='col-md-6'>
                <div class=\"form-group\">
                  ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "fechaInicio", array()), 'label');
        echo "
                  ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "fechaInicio", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
                </div>
              </div>

              <div class='col-md-6'>
                <div class=\"form-group\">
                  ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "fechaFin", array()), 'label');
        echo "
                  ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "fechaFin", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
                </div>
              </div>

              <div class=\"form-group\">
                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "contacto", array()), 'errors');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "contacto", array()), 'label');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "contacto", array()), 'widget', array("attr" => array("class" => "contacto")));
        echo "
              </div>

              <div class=\"form-group\">
                <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"200000\"/>
                <input name=\"uploadedfile\" type=\"file\" accept=\"png\" />
                ";
        // line 71
        if (array_key_exists("mensaje", $context)) {
            // line 72
            echo "                  <span> ";
            echo twig_escape_filter($this->env, ($context["mensaje"] ?? null), "html", null, true);
            echo " </span>
                ";
        }
        // line 74
        echo "              </div>

              <div class=\"form-group\">
                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "area", array()), 'label');
        echo "
                ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "area", array()), 'errors');
        echo "
                ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "area", array()), 'widget');
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "rama", array()), 'label');
        echo "
                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "rama", array()), 'errors');
        echo "
                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "rama", array()), 'widget');
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "disciplina", array()), 'label');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "disciplina", array()), 'errors');
        echo "
                ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "disciplina", array()), 'widget');
        echo "
              </div>

             <div class=\"form-group\">
                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "tipo", array()), 'label');
        echo "
                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "tipo", array()), 'errors');
        echo "
                ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formDemanda"] ?? null), "tipo", array()), 'widget');
        echo "
              </div>


              <br>
              <br>

              ";
        // line 104
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formDemanda"] ?? null), 'form_end');
        echo "

              <br>
              <br>
              <br>
              <br>


              <script>
                \$(\"#form_area\").change(function() {
                  var data = {
                    area_id: \$(this).val()
                  };
                  \$.ajax({
                      type: 'post',
                      url: '";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_rama");
        echo "',
                      data: data,
                      success: function(data,url) {
                          var \$rama_selector = \$('#form_rama');
                          var \$disciplina_selector = \$('#form_disciplina');
                          \$disciplina_selector.html('<option value= > </option>');
                          \$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
                          for (var i = 2, total = data.length; i < total;) {
                              \$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
                              i=i+2;
                          }

                      }
                  });
                });
                \$(\"#form_rama\").change(function() {
                var data = {
                  rama_id: \$(this).val()
                };
                \$.ajax({
                  type: 'post',
                  url: '";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_disciplina");
        echo "',
                  data: data,
                  success: function(data,url) {
                      var \$rama_selector = \$('#form_disciplina');

                      \$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
                      for (var i = 2, total = data.length; i < total;) {
                          \$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
                          i=i+2;
                      }
                  }
                });
              });
            </script>

            ";
        // line 155
        if ((null === $this->getAttribute(($context["demanda"] ?? null), "disciplina", array()))) {
            // line 156
            echo "              <script>
                var \$disciplina_selector = \$('#form_disciplina');
                \$disciplina_selector.html('<option value= > </option>');
              </script>
            ";
        }
        // line 161
        echo "

            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css\" />

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
            <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/selectFecha.js"), "html", null, true);
        echo "\"></script>

        </div>
      </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "DemandaBundle:Default:editDemanda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 168,  312 => 161,  305 => 156,  303 => 155,  285 => 140,  261 => 119,  243 => 104,  233 => 97,  229 => 96,  225 => 95,  218 => 91,  214 => 90,  210 => 89,  203 => 85,  199 => 84,  195 => 83,  188 => 79,  184 => 78,  180 => 77,  175 => 74,  169 => 72,  167 => 71,  158 => 65,  154 => 64,  150 => 63,  142 => 58,  138 => 57,  129 => 51,  125 => 50,  117 => 45,  113 => 44,  109 => 43,  102 => 39,  98 => 38,  94 => 37,  87 => 33,  83 => 32,  79 => 31,  73 => 28,  70 => 27,  68 => 26,  61 => 21,  53 => 18,  50 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DemandaBundle:Default:editDemanda.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/DemandaBundle/Resources/views/Default/editDemanda.html.twig");
    }
}
