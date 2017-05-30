<?php

/* OfertaBundle:Default:grafica.html.twig */
class __TwigTemplate_979f1be07e5624eb1d947159c29f5002d2779d9feb48c9ced212aba60d4f0572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig.php", "OfertaBundle:Default:grafica.html.twig", 1);
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
        $__internal_54e04ed29df2082a387792115a06ba6938c32abd35ed6786b6b05db5a3214ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e04ed29df2082a387792115a06ba6938c32abd35ed6786b6b05db5a3214ca7->enter($__internal_54e04ed29df2082a387792115a06ba6938c32abd35ed6786b6b05db5a3214ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfertaBundle:Default:grafica.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e04ed29df2082a387792115a06ba6938c32abd35ed6786b6b05db5a3214ca7->leave($__internal_54e04ed29df2082a387792115a06ba6938c32abd35ed6786b6b05db5a3214ca7_prof);

    }

    // line 3
    public function block_side($context, array $blocks = array())
    {
        $__internal_5607327595a3d6f32d032131b34840cac022514b2fb4b47d72a46936471d5e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5607327595a3d6f32d032131b34840cac022514b2fb4b47d72a46936471d5e45->enter($__internal_5607327595a3d6f32d032131b34840cac022514b2fb4b47d72a46936471d5e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 4
        echo "  <div id=\"contenido\" class=\"sec_interior\">
    <div class=\"content_doku\">
         <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
        </div>
    </div>
      <!-- Load MooTools from Google's CDN if needed and the highcharts adapter -->
<script src=\"https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js\" type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/3.0.10/adapters/mootools-adapter.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 16
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "mootools");
        echo "
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
        
        $__internal_5607327595a3d6f32d032131b34840cac022514b2fb4b47d72a46936471d5e45->leave($__internal_5607327595a3d6f32d032131b34840cac022514b2fb4b47d72a46936471d5e45_prof);

    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:grafica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
         <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
        </div>
    </div>
      <!-- Load MooTools from Google's CDN if needed and the highcharts adapter -->
<script src=\"https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js\" type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/3.0.10/adapters/mootools-adapter.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    {{ chart(chart, 'mootools') }}
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
{% endblock %}

", "OfertaBundle:Default:grafica.html.twig", "/home/lorenmanu/Escritorio/TFG-V2-master/src/OfertaBundle/Resources/views/Default/grafica.html.twig");
    }
}
