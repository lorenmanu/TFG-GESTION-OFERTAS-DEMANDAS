<?php

/* OfertaBundle:Default:addOferta.html.twig */
class __TwigTemplate_8d9cd19225bba309cd2ce68adec60ae25a95ce62334328b433c8fd5ad1d5c2a6 extends Twig_Template
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
        $__internal_00a7661ad740cd3afb1a53232b8cac063058aedb59b52295524f6625d3212444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a7661ad740cd3afb1a53232b8cac063058aedb59b52295524f6625d3212444->enter($__internal_00a7661ad740cd3afb1a53232b8cac063058aedb59b52295524f6625d3212444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfertaBundle:Default:addOferta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00a7661ad740cd3afb1a53232b8cac063058aedb59b52295524f6625d3212444->leave($__internal_00a7661ad740cd3afb1a53232b8cac063058aedb59b52295524f6625d3212444_prof);

    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_c7b97ff622b2b2907e2a51bcf4c4aeee3abeb124aff3961955ba1f953446cc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b97ff622b2b2907e2a51bcf4c4aeee3abeb124aff3961955ba1f953446cc68->enter($__internal_c7b97ff622b2b2907e2a51bcf4c4aeee3abeb124aff3961955ba1f953446cc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 4
        echo "

        <div class=\"panel panel-default\">
          <div class=\"panel-heading\"><h1>Añadir Oferta</h1></div>
          <div class=\"panel-body\">
            ";
        // line 9
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["formOferta"] ?? $this->getContext($context, "formOferta")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 10
        echo "
              ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formOferta"] ?? $this->getContext($context, "formOferta")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addOferta"), "method" => "POST", "multipart" => "true"));
        echo "

              <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "nombre", array()), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "nombre", array()), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "nombre", array()), 'widget', array("attr" => array("class" => "nombre")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "descripcion", array()), 'label');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "descripcion", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "descripcion", array()), 'widget', array("attr" => array("class" => "descripcion")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "condiciones", array()), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "condiciones", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "condiciones", array()), 'widget', array("attr" => array("class" => "condiciones")));
        echo "
              </div>

              <div class='col-md-6'>
                <div class=\"form-group\">
                  ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "fechaInicio", array()), 'label');
        echo "
                  ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "fechaInicio", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
                </div>
              </div>

              <div class='col-md-6'>
                <div class=\"form-group\">
                  ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "fechaFin", array()), 'label');
        echo "
                  ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "fechaFin", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
                </div>
              </div>

              <div class=\"form-group\">
                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "contacto", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "contacto", array()), 'label');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "contacto", array()), 'widget', array("attr" => array("class" => "contacto")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "brochure", array()), 'label');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "brochure", array()), 'widget', array("attr" => array("class" => "file2")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "area", array()), 'label');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "area", array()), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "area", array()), 'widget', array("attr" => array("data-max-options" => "1")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "rama", array()), 'label');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "rama", array()), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "rama", array()), 'widget', array("attr" => array("data-max-options" => "1")));
        echo "
              </div>

              <div class=\"form-group\">
                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "disciplina", array()), 'label');
        echo "
                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "disciplina", array()), 'errors');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "disciplina", array()), 'widget', array("attr" => array("data-max-options" => "1")));
        echo "
              </div>

             <div class=\"form-group\">
                ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "tipo", array()), 'label');
        echo "
                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "tipo", array()), 'errors');
        echo "
                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formOferta"] ?? $this->getContext($context, "formOferta")), "tipo", array()), 'widget', array("attr" => array("data-max-options" => "1")));
        echo "
              </div>

              <br>
              <br>

              ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formOferta"] ?? $this->getContext($context, "formOferta")), 'form_end');
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
        
        $__internal_c7b97ff622b2b2907e2a51bcf4c4aeee3abeb124aff3961955ba1f953446cc68->leave($__internal_c7b97ff622b2b2907e2a51bcf4c4aeee3abeb124aff3961955ba1f953446cc68_prof);

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
        return array (  285 => 142,  259 => 119,  235 => 98,  217 => 83,  208 => 77,  204 => 76,  200 => 75,  193 => 71,  189 => 70,  185 => 69,  178 => 65,  174 => 64,  170 => 63,  163 => 59,  159 => 58,  155 => 57,  148 => 53,  144 => 52,  137 => 48,  133 => 47,  129 => 46,  121 => 41,  117 => 40,  108 => 34,  104 => 33,  96 => 28,  92 => 27,  88 => 26,  81 => 22,  77 => 21,  73 => 20,  66 => 16,  62 => 15,  58 => 14,  52 => 11,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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


        <div class=\"panel panel-default\">
          <div class=\"panel-heading\"><h1>Añadir Oferta</h1></div>
          <div class=\"panel-body\">
            {% form_theme formOferta 'bootstrap_3_layout.html.twig' %}

              {{ form_start(formOferta, {'action': path('addOferta'), 'method': 'POST', 'multipart': 'true'}) }}

              <div class=\"form-group\">
                {{ form_label(formOferta.nombre) }}
                {{ form_errors(formOferta.nombre) }}
                {{ form_widget(formOferta.nombre, { 'attr': {'class': 'nombre'} }) }}
              </div>

              <div class=\"form-group\">
                {{ form_label(formOferta.descripcion) }}
                {{ form_errors(formOferta.descripcion) }}
                {{ form_widget(formOferta.descripcion, { 'attr': {'class': 'descripcion'} }) }}
              </div>

              <div class=\"form-group\">
                {{ form_label(formOferta.condiciones) }}
                {{ form_errors(formOferta.condiciones) }}
                {{ form_widget(formOferta.condiciones, { 'attr': {'class': 'condiciones'} }) }}
              </div>

              <div class='col-md-6'>
                <div class=\"form-group\">
                  {{ form_label(formOferta.fechaInicio) }}
                  {{ form_widget(formOferta.fechaInicio, { 'attr': {'class': 'datepicker'} }) }}
                </div>
              </div>

              <div class='col-md-6'>
                <div class=\"form-group\">
                  {{ form_label(formOferta.fechaFin) }}
                  {{ form_widget(formOferta.fechaFin, { 'attr': {'class': 'datepicker'} }) }}
                </div>
              </div>

              <div class=\"form-group\">
                {{ form_errors(formOferta.contacto) }}
                {{ form_label(formOferta.contacto) }}
                {{ form_widget(formOferta.contacto, { 'attr': {'class': 'contacto'} }) }}
              </div>

              <div class=\"form-group\">
                {{ form_label(formOferta.brochure) }}
                {{ form_widget(formOferta.brochure, { 'attr': {'class': 'file2'} }) }}
              </div>

              <div class=\"form-group\">
                {{ form_label(formOferta.area) }}
                {{ form_errors(formOferta.area) }}
                {{ form_widget(formOferta.area, { 'attr': {'data-max-options': '1'} }) }}
              </div>

              <div class=\"form-group\">
                {{ form_label(formOferta.rama) }}
                {{ form_errors(formOferta.rama) }}
                {{ form_widget(formOferta.rama, { 'attr': {'data-max-options': '1'} }) }}
              </div>

              <div class=\"form-group\">
                {{ form_label(formOferta.disciplina) }}
                {{ form_errors(formOferta.disciplina) }}
                {{ form_widget(formOferta.disciplina, { 'attr': {'data-max-options': '1'} }) }}
              </div>

             <div class=\"form-group\">
                {{ form_label(formOferta.tipo) }}
                {{ form_errors(formOferta.tipo) }}
                {{ form_widget(formOferta.tipo, { 'attr': {'data-max-options': '1'} }) }}
              </div>

              <br>
              <br>

              {{ form_end(formOferta) }}

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
                      url: '{{ path(\"select_rama\") }}',
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
                  url: '{{ path(\"select_disciplina\") }}',
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
            <script src=\"{{ asset('js/selectFecha.js') }}\"></script>

        </div>
      </div>
  </div>

{% endblock %}
", "OfertaBundle:Default:addOferta.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/OfertaBundle/Resources/views/Default/addOferta.html.twig");
    }
}
