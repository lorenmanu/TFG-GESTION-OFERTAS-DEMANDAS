<?php

/* OfertaBundle:Default:addOferta.html.twig */
class __TwigTemplate_b331070009a559eeaa056e55aceed86f8fe35b4d144ca2a84208b950dd5b9fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.php", "OfertaBundle:Default:addOferta.html.twig", 1);
        $this->blocks = array(
            'side' => array($this, 'block_side'),
            'area' => array($this, 'block_area'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7bc4eab2d8377aecb54794b804e481343784205380226819629217a398008fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bc4eab2d8377aecb54794b804e481343784205380226819629217a398008fb->enter($__internal_b7bc4eab2d8377aecb54794b804e481343784205380226819629217a398008fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfertaBundle:Default:addOferta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7bc4eab2d8377aecb54794b804e481343784205380226819629217a398008fb->leave($__internal_b7bc4eab2d8377aecb54794b804e481343784205380226819629217a398008fb_prof);

    }

    // line 2
    public function block_side($context, array $blocks = array())
    {
        $__internal_a4116469dcfe85cac319fc553cc976fbda619a16614d63cd7fe01b56f2a8a10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4116469dcfe85cac319fc553cc976fbda619a16614d63cd7fe01b56f2a8a10f->enter($__internal_a4116469dcfe85cac319fc553cc976fbda619a16614d63cd7fe01b56f2a8a10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 3
        echo "
  <div id=\"pagina_contenido\">
    <div id=\"contenido\" class=\"sec_interior\">
      <div class=\"content_doku\">

        ";
        // line 8
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 9
        echo "
           ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addOferta"), "method" => "POST"));
        echo "

           ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "nombre", array()), 'label');
        echo "
           ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "nombre", array()), 'widget', array("attr" => array("class" => "nombre")));
        echo "

           ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "descripcion", array()), 'label');
        echo "
           ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "descripcion", array()), 'widget', array("attr" => array("class" => "descripcion")));
        echo "

           ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "condiciones", array()), 'label');
        echo "
           ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "condiciones", array()), 'widget', array("attr" => array("class" => "condiciones")));
        echo "

           ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "fechaInicio", array()), 'label');
        echo "
           ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "fechaInicio", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "

           ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "fechaFin", array()), 'label');
        echo "
           ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "fechaFin", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "

           ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "contacto", array()), 'label');
        echo "
           ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "contacto", array()), 'widget', array("attr" => array("class" => "contacto")));
        echo "


           ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "brochure", array()), 'label');
        echo "
           ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "brochure", array()), 'widget', array("attr" => array("class" => "file")));
        echo "
           ";
        // line 33
        $this->displayBlock('area', $context, $blocks);
        // line 36
        echo "           ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "area", array()), 'widget');
        echo "
           ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "rama", array()), 'widget');
        echo "
           ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), "disciplina", array()), 'widget');
        echo "
           ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formOferta"]) ? $context["formOferta"] : $this->getContext($context, "formOferta")), 'form_end');
        echo "

  
          <script>
              \$(\"#form_area\").change(function() {
                  var data = {
                    area_id: \$(this).val()
                  };
                  alert(data[0])
                  \$.ajax({
                      type: 'post',
                      url: '";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_ramas");
        echo "',
                      data: data,
                      success: function(data,url) {
                          var \$rama_selector = \$('#form_rama');
                          alert(data);

                          \$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
                          for (var i = 2, total = data.length; i < total;) {
                              \$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
                              i=i+2;
                          }

                      }
                  });
              });
          </script>
          <script>
          \$(\"#form_rama\").change(function() {
              var data = {
                rama_id: \$(this).val()
              };
              alert(data[0])
              \$.ajax({
                  type: 'post',
                  url: '";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_disciplinas");
        echo "',
                  data: data,
                  success: function(data,url) {
                      var \$rama_selector = \$('#form_disciplina');
                      alert(data);

                      \$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
                      for (var i = 2, total = data.length; i < total;) {
                          \$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
                          i=i+2;
                      }
                  }
              });
          });
      </script>

      </div>
    </div>
  </div>
  ";
        
        $__internal_a4116469dcfe85cac319fc553cc976fbda619a16614d63cd7fe01b56f2a8a10f->leave($__internal_a4116469dcfe85cac319fc553cc976fbda619a16614d63cd7fe01b56f2a8a10f_prof);

    }

    // line 33
    public function block_area($context, array $blocks = array())
    {
        $__internal_dbd0788a3ac5ba36b38d2e8358e6754131fb790fd22c3df54db2eccc3ea15954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd0788a3ac5ba36b38d2e8358e6754131fb790fd22c3df54db2eccc3ea15954->enter($__internal_dbd0788a3ac5ba36b38d2e8358e6754131fb790fd22c3df54db2eccc3ea15954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "area"));

        // line 34
        echo "
           ";
        
        $__internal_dbd0788a3ac5ba36b38d2e8358e6754131fb790fd22c3df54db2eccc3ea15954->leave($__internal_dbd0788a3ac5ba36b38d2e8358e6754131fb790fd22c3df54db2eccc3ea15954_prof);

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
        return array (  210 => 34,  204 => 33,  177 => 74,  150 => 50,  136 => 39,  132 => 38,  128 => 37,  123 => 36,  121 => 33,  117 => 32,  113 => 31,  107 => 28,  103 => 27,  98 => 25,  94 => 24,  89 => 22,  85 => 21,  80 => 19,  76 => 18,  71 => 16,  67 => 15,  62 => 13,  58 => 12,  53 => 10,  50 => 9,  48 => 8,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig.php' %}
{% block side %}

  <div id=\"pagina_contenido\">
    <div id=\"contenido\" class=\"sec_interior\">
      <div class=\"content_doku\">

        {% form_theme formOferta 'bootstrap_3_layout.html.twig' %}

           {{ form_start(formOferta, {'action': path('addOferta'), 'method': 'POST'}) }}

           {{ form_label(formOferta.nombre) }}
           {{ form_widget(formOferta.nombre, { 'attr': {'class': 'nombre'} }) }}

           {{ form_label(formOferta.descripcion) }}
           {{ form_widget(formOferta.descripcion, { 'attr': {'class': 'descripcion'} }) }}

           {{ form_label(formOferta.condiciones) }}
           {{ form_widget(formOferta.condiciones, { 'attr': {'class': 'condiciones'} }) }}

           {{ form_label(formOferta.fechaInicio) }}
           {{ form_widget(formOferta.fechaInicio, { 'attr': {'class': 'datepicker'} }) }}

           {{ form_label(formOferta.fechaFin) }}
           {{ form_widget(formOferta.fechaFin, { 'attr': {'class': 'datepicker'} }) }}

           {{ form_label(formOferta.contacto) }}
           {{ form_widget(formOferta.contacto, { 'attr': {'class': 'contacto'} }) }}


           {{ form_label(formOferta.brochure) }}
           {{ form_widget(formOferta.brochure, { 'attr': {'class': 'file'} }) }}
           {% block area %}

           {% endblock %}
           {{ form_widget(formOferta.area) }}
           {{ form_widget(formOferta.rama) }}
           {{ form_widget(formOferta.disciplina) }}
           {{ form_end(formOferta) }}

  
          <script>
              \$(\"#form_area\").change(function() {
                  var data = {
                    area_id: \$(this).val()
                  };
                  alert(data[0])
                  \$.ajax({
                      type: 'post',
                      url: '{{ path(\"select_ramas\") }}',
                      data: data,
                      success: function(data,url) {
                          var \$rama_selector = \$('#form_rama');
                          alert(data);

                          \$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
                          for (var i = 2, total = data.length; i < total;) {
                              \$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
                              i=i+2;
                          }

                      }
                  });
              });
          </script>
          <script>
          \$(\"#form_rama\").change(function() {
              var data = {
                rama_id: \$(this).val()
              };
              alert(data[0])
              \$.ajax({
                  type: 'post',
                  url: '{{ path(\"select_disciplinas\") }}',
                  data: data,
                  success: function(data,url) {
                      var \$rama_selector = \$('#form_disciplina');
                      alert(data);

                      \$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
                      for (var i = 2, total = data.length; i < total;) {
                          \$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
                          i=i+2;
                      }
                  }
              });
          });
      </script>

      </div>
    </div>
  </div>
  {% endblock %}
", "OfertaBundle:Default:addOferta.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/src/OfertaBundle/Resources/views/Default/addOferta.html.twig");
    }
}
