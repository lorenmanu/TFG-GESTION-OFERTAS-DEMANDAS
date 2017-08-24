<?php

/* OfertaBundle:Default:addOferta.html.twig */
class __TwigTemplate_b7c8aa54b7eae921754c223c87d2b745f0e4dd0fc3a9c10034e89765681b0f1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portadaOferta.html.twig", "OfertaBundle:Default:addOferta.html.twig", 1);
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

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "

        <div class=\"panel panel-default\">
          <div class=\"panel-heading\"><h1>Añadir Oferta</h1></div>
          <div class=\"panel-body\">
            ";
        // line 9
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formOferta"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 10
        echo "
              ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formOferta"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addOferta"), "method" => "POST", "multipart" => "true"));
        echo "

              <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "nombre", array()), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "nombre", array()), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "nombre", array()), 'widget', array("attr" => array("class" => "nombre")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "descripcion", array()), 'label');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "descripcion", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "descripcion", array()), 'widget', array("attr" => array("class" => "descripcion")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "condiciones", array()), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "condiciones", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "condiciones", array()), 'widget', array("attr" => array("class" => "condiciones")));
        echo "
              </div>

              <div class='col-md-6'>
                <div class=\"form-group\">
                  ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "fechaInicio", array()), 'label');
        echo "
                  ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "fechaInicio", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
                </div>
              </div>

              <div class='col-md-6'>
                <div class=\"form-group\">
                  ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "fechaFin", array()), 'label');
        echo "
                  ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "fechaFin", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
                </div>
              </div>

              <div class=\"form-group\">
                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "contacto", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "contacto", array()), 'label');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "contacto", array()), 'widget', array("attr" => array("class" => "contacto")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "brochure", array()), 'label');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "brochure", array()), 'widget', array("attr" => array("class" => "file2")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "area", array()), 'label');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "area", array()), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "area", array()), 'widget', array("attr" => array("data-max-options" => "1")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "rama", array()), 'label');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "rama", array()), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "rama", array()), 'widget', array("attr" => array("data-max-options" => "1")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "disciplina", array()), 'label');
        echo "
                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "disciplina", array()), 'errors');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "disciplina", array()), 'widget', array("attr" => array("data-max-options" => "1")));
        echo "
              </div>

             <div class=\"form-group\">
                ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "tipo", array()), 'label');
        echo "
                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "tipo", array()), 'errors');
        echo "
                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? null), "tipo", array()), 'widget', array("attr" => array("data-max-options" => "1")));
        echo "
              </div>

              <br>
              <br>

              ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formOferta"] ?? null), 'form_end');
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
        // line 98
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
        // line 119
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

              var \$disciplina_selector = \$('#form_disciplina');
              \$disciplina_selector.html('<option value= > </option>');
            </script>

            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css\" />

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/selectFecha.js"), "html", null, true);
        echo "\"></script>

        </div>
      </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:addOferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 142,  250 => 119,  226 => 98,  208 => 83,  199 => 77,  195 => 76,  191 => 75,  184 => 71,  180 => 70,  176 => 69,  169 => 65,  165 => 64,  161 => 63,  154 => 59,  150 => 58,  146 => 57,  139 => 53,  135 => 52,  128 => 48,  124 => 47,  120 => 46,  112 => 41,  108 => 40,  99 => 34,  95 => 33,  87 => 28,  83 => 27,  79 => 26,  72 => 22,  68 => 21,  64 => 20,  57 => 16,  53 => 15,  49 => 14,  43 => 11,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OfertaBundle:Default:addOferta.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/OfertaBundle/Resources/views/Default/addOferta.html.twig");
    }
}
