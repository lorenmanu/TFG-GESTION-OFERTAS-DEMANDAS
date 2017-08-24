<?php

/* RamaBundle:Default:editarRama.html.twig */
class __TwigTemplate_177be399930558239857ca0e691e6d1a4fde663a218cedf97981ffe78eea2987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RamaBundle:Default:editarRama.html.twig", 1);
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
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <div class=\"row\">
        <div class=\"col-xs-6 col-sm-6 col-md-8\">
          <h2>
            Editar Rama
          </h2>
        </div>
        <div class=\"col-xs-6 col-md-4\">
          <a class=\"col-xs-6\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarMenu");
        echo "\" >
            <button class=\"btn btn-danger pull-right\" type=\"button\" id=\"btn_atras\"><i class=\"icon-white icon-remove\"></i>
                <i class=\"fa fa-reply\"></i>
            </button>
          </a>
        </div>
      </div>
    </div>
      <div class=\"panel-body\">

        ";
        // line 23
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 24
        echo "
           ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editRama"), "method" => "POST"));
        echo "

              <br>
              <div class=\"form-group\">
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombre", array()), 'label');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombre", array()), 'widget');
        echo "
              <div>

              <br>
              <div class=\"form-group\">
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "disciplinas", array()), 'label');
        echo "
                <br>
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "disciplinas", array()), 'widget', array("attr" => array("class" => "selectpicker", "data-live-search" => "true", "data-max-options" => "1")));
        echo "
              </div>

              <br>
              <div class=\"form-group\">
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
              </div>



           ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
           ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "



     </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "RamaBundle:Default:editarRama.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  105 => 48,  97 => 43,  93 => 42,  85 => 37,  80 => 35,  72 => 30,  68 => 29,  61 => 25,  58 => 24,  56 => 23,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "RamaBundle:Default:editarRama.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/RamaBundle/Resources/views/Default/editarRama.html.twig");
    }
}
