<?php

/* OfertaBundle:Default:index.html.twig */
class __TwigTemplate_04023bc106c201dad309756ef34fab68c296bc77a4daa1da0468dd2ae4c90ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.php", "OfertaBundle:Default:index.html.twig", 1);
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
        $__internal_d89ec793e2230c26eb5aeac9e7759078799debf117dfcee84fd92c5e5e4d67e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89ec793e2230c26eb5aeac9e7759078799debf117dfcee84fd92c5e5e4d67e9->enter($__internal_d89ec793e2230c26eb5aeac9e7759078799debf117dfcee84fd92c5e5e4d67e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfertaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89ec793e2230c26eb5aeac9e7759078799debf117dfcee84fd92c5e5e4d67e9->leave($__internal_d89ec793e2230c26eb5aeac9e7759078799debf117dfcee84fd92c5e5e4d67e9_prof);

    }

    // line 3
    public function block_side($context, array $blocks = array())
    {
        $__internal_73e0d1ffb3f8b7196eb2c82b8ce787348f6fca0a09f9fba3ffbf7e14bc2b8fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e0d1ffb3f8b7196eb2c82b8ce787348f6fca0a09f9fba3ffbf7e14bc2b8fb1->enter($__internal_73e0d1ffb3f8b7196eb2c82b8ce787348f6fca0a09f9fba3ffbf7e14bc2b8fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 4
        echo "  <div id=\"contenido\" class=\"sec_interior\">
    <div class=\"content_doku\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 7
            echo "                <div id=\"showOferta\">
                    <img id=\"img_show\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/oferta"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "brochure", array()), "html", null, true);
            echo "\" alt=\"\" />
                    <div id=\"descripcion_show\">
                                <p class=\"lead\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "descripcion", array()), "html", null, true);
            echo "</p>
                                <p class=\"lead\">Area</p>
                                <p class=\"lead\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "area", array()), "nombre", array()), "html", null, true);
            echo "</p>
                                <p class=\"lead\">Rama</p>
                                <p class=\"lead\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "rama", array()), "nombre", array()), "html", null, true);
            echo "</p>
                                <p class=\"lead\">Disciplina</p>
                                <p class=\"lead\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "disciplina", array()), "nombre", array()), "html", null, true);
            echo "</p>
                            <a id=\"link_help\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showOferta", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\" >Ver</a>
                        </div>
                    </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "


        </div>
        <div id=\"paginacion\">
          ";
        // line 26
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
  </div>

";
        
        $__internal_73e0d1ffb3f8b7196eb2c82b8ce787348f6fca0a09f9fba3ffbf7e14bc2b8fb1->leave($__internal_73e0d1ffb3f8b7196eb2c82b8ce787348f6fca0a09f9fba3ffbf7e14bc2b8fb1_prof);

    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  87 => 21,  77 => 17,  73 => 16,  68 => 14,  63 => 12,  58 => 10,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
  <div id=\"contenido\" class=\"sec_interior\">
    <div class=\"content_doku\">
        {% for entry in pagination %}
                <div id=\"showOferta\">
                    <img id=\"img_show\" src=\"{{ asset('uploads/brochures/oferta') }}/{{ entry.brochure }}\" alt=\"\" />
                    <div id=\"descripcion_show\">
                                <p class=\"lead\">{{ entry.descripcion }}</p>
                                <p class=\"lead\">Area</p>
                                <p class=\"lead\">{{ entry.area.nombre }}</p>
                                <p class=\"lead\">Rama</p>
                                <p class=\"lead\">{{ entry.rama.nombre }}</p>
                                <p class=\"lead\">Disciplina</p>
                                <p class=\"lead\">{{ entry.disciplina.nombre }}</p>
                            <a id=\"link_help\" href=\"{{ path('showOferta', {'id': entry.id}) }}\" >Ver</a>
                        </div>
                    </div>
              {% endfor %}



        </div>
        <div id=\"paginacion\">
          {{ knp_pagination_render(pagination) }}
        </div>
    </div>
  </div>

{% endblock %}
", "OfertaBundle:Default:index.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/src/OfertaBundle/Resources/views/Default/index.html.twig");
    }
}
