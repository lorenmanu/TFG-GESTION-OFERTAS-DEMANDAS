<?php

/* UserBundle:Default:registroOfertasDemandas.html.twig */
class __TwigTemplate_9cad08627b3facfdc1406dfd25a6e24dd246ac8bfc7d3bbc3f87e2ff04e14d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:registroOfertasDemandas.html.twig", 1);
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

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"jumbotron\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
          <h3 id=\"cabeceraBienvenida\"> Registro Ofertas/Demandas </h3>
          <!-- Button trigger modal -->
        </div>
      </div>






    <!-- Load jQuery from Google's CDN if needed -->
    <script src=\"https://code.highcharts.com/highcharts.js\"></script>
    <script src=\"https://code.highcharts.com/modules/drilldown.js\"></script>
    <script type=\"text/javascript\">
      ";
        // line 23
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart(($context["chartOfertas"] ?? null), "mootools");
        echo "
      ";
        // line 24
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart(($context["chartDemandas"] ?? null), "mootools");
        echo "
    </script>


    <div class=\"row\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div  id=\"lineOfertas\"></div>
      </div>
    </div>

    <div class=\"row\" style=\"margin-top:2%\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div  id=\"lineDemandas\"></div>
      </div>
    </div>




";
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:registroOfertasDemandas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 24,  51 => 23,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Default:registroOfertasDemandas.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/UserBundle/Resources/views/Default/registroOfertasDemandas.html.twig");
    }
}
