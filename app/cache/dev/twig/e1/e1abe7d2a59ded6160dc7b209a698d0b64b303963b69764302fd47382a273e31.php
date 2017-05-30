<?php

/* OfertaBundle:Default:oferta.html.twig */
class __TwigTemplate_ae18fa7febfc6b24349313ff5442a0084548721ecfdebbd7f2082bc1da329471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.php", "OfertaBundle:Default:oferta.html.twig", 1);
        $this->blocks = array(
            'side' => array($this, 'block_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6831b516d1a5f8da5ae4ef1097155b610f88dd5c4759b043a7dcd9472b1b2b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6831b516d1a5f8da5ae4ef1097155b610f88dd5c4759b043a7dcd9472b1b2b04->enter($__internal_6831b516d1a5f8da5ae4ef1097155b610f88dd5c4759b043a7dcd9472b1b2b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfertaBundle:Default:oferta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6831b516d1a5f8da5ae4ef1097155b610f88dd5c4759b043a7dcd9472b1b2b04->leave($__internal_6831b516d1a5f8da5ae4ef1097155b610f88dd5c4759b043a7dcd9472b1b2b04_prof);

    }

    // line 3
    public function block_side($context, array $blocks = array())
    {
        $__internal_dea8b2165200e283d713f9ae220c01d3c34c72036c922ff9221a68403204a401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea8b2165200e283d713f9ae220c01d3c34c72036c922ff9221a68403204a401->enter($__internal_dea8b2165200e283d713f9ae220c01d3c34c72036c922ff9221a68403204a401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 4
        if (array_key_exists("oferta", $context)) {
            // line 5
            echo "  <div id=\"contenido\" class=\"sec_interior\">
    <div class=\"content_doku\">
        <img width=\"200\" alt=\"mapa_bbm3i\" title=\"mapa_bbm3i\" class=\"medialeft\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/oferta"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "getBrochure", array(), "method"), "html", null, true);
            echo "\" alt=\"Example\" />
          <div id=\"descripcionOferta\">
            <p id=\"nombre\"> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "getNombre", array(), "method"), "html", null, true);
            echo " </li>
            <p id=\"ruta\"> ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "getFechaInicio", array(), "method"), "Y-m-d"), "html", null, true);
            echo " </p>
            <p id=\"nombre\"> Visitas--> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "getVisitas", array(), "method"), "html", null, true);
            echo " </li>
          </div>

          ";
            // line 14
            if (array_key_exists("form", $context)) {
                // line 15
                echo "            ";
                $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
                // line 16
                echo "
            ";
                // line 17
                echo                 $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
                echo "

            ";
                // line 19
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenido", array()), 'label');
                echo "

            ";
                // line 21
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            ";
                // line 22
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
          ";
            }
            // line 24
            echo "          <div class=\"DocumentList\">
            <ul>
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "getComentarios", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
                // line 27
                echo "                  <div class=\"divContainerMain\">
                      <h3> Down Side Callout </h3>
                      <div class=\"divContainerDown\">
                          ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "getContenido", array(), "method"), "html", null, true);
                echo "
                      </div>
                      <div class=\"calloutDown\">
                        <div class=\"calloutDown2\">
                        </div>
                  </div>
                  <div>
                    <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("send_email", array("receptor" => $this->getAttribute($context["comentario"], "getAutor", array(), "method"), "emisor" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "getAutor", array(), "method"), "html", null, true);
                echo " </a> Said</div>
                  </div>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "          </div>


        </div>
    </div>
";
        }
        
        $__internal_dea8b2165200e283d713f9ae220c01d3c34c72036c922ff9221a68403204a401->leave($__internal_dea8b2165200e283d713f9ae220c01d3c34c72036c922ff9221a68403204a401_prof);

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
        return array (  129 => 41,  117 => 37,  107 => 30,  102 => 27,  98 => 26,  94 => 24,  89 => 22,  85 => 21,  80 => 19,  75 => 17,  72 => 16,  69 => 15,  67 => 14,  61 => 11,  57 => 10,  53 => 9,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
{% if oferta is defined %}
  <div id=\"contenido\" class=\"sec_interior\">
    <div class=\"content_doku\">
        <img width=\"200\" alt=\"mapa_bbm3i\" title=\"mapa_bbm3i\" class=\"medialeft\" src=\"{{ asset('uploads/brochures/oferta') }}/{{ oferta.getBrochure() }}\" alt=\"Example\" />
          <div id=\"descripcionOferta\">
            <p id=\"nombre\"> {{ oferta.getNombre() }} </li>
            <p id=\"ruta\"> {{ oferta.getFechaInicio()|date('Y-m-d') }} </p>
            <p id=\"nombre\"> Visitas--> {{ oferta.getVisitas() }} </li>
          </div>

          {% if form is defined %}
            {% form_theme form 'bootstrap_3_layout.html.twig' %}

            {{ form_start(form, {method: 'POST'}) }}

            {{ form_label(form.contenido) }}

            {{ form_widget(form) }}
            {{ form_errors(form) }}
          {% endif %}
          <div class=\"DocumentList\">
            <ul>
              {% for comentario in oferta.getComentarios()  %}
                  <div class=\"divContainerMain\">
                      <h3> Down Side Callout </h3>
                      <div class=\"divContainerDown\">
                          {{ comentario.getContenido() }}
                      </div>
                      <div class=\"calloutDown\">
                        <div class=\"calloutDown2\">
                        </div>
                  </div>
                  <div>
                    <a href=\"{{ path('send_email', {'receptor': comentario.getAutor(), 'emisor': app.user.name}) }}\"> {{ comentario.getAutor() }} </a> Said</div>
                  </div>

              {% endfor %}
          </div>


        </div>
    </div>
{% endif %}
{% endblock %}

", "OfertaBundle:Default:oferta.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/src/OfertaBundle/Resources/views/Default/oferta.html.twig");
    }
}
