<?php

/* DisciplinaBundle:Default:editarDisciplina.html.twig */
class __TwigTemplate_e4d7e252e4d572fb3f3c798519f671bdf7e89cb4dfebb5f49256ff96d0b36189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "DisciplinaBundle:Default:editarDisciplina.html.twig", 1);
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
            Añadir Disciplina
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editDisciplina"), "method" => "POST"));
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

              <br>
              <div class=\"form-group\">
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
              </div>



           ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
           ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "



     </div>      
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "DisciplinaBundle:Default:editarDisciplina.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 44,  94 => 43,  86 => 38,  82 => 37,  72 => 30,  68 => 29,  61 => 25,  58 => 24,  56 => 23,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DisciplinaBundle:Default:editarDisciplina.html.twig", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/DisciplinaBundle/Resources/views/Default/editarDisciplina.html.twig");
    }
}
