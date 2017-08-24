<?php

/* public/inicio.php */
class __TwigTemplate_ca978b05776ad0d2b0b055ac376b090869af38bc0a8d534dc93cf01539b35d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
/**
 *  @file posgrado.php
 *  @brief fichero encargado de mostrar la informaci�n relativa a los distintos posgrados que dependen del departamento
 *  @par en funci�n del idioma seleccionado por el usuario mostrar� un determinado fichero de contenido
 */

  \$page->MuestraBreadCrumb(array(array(\"Ejemplo HTML\")));
  \$page->InicioContenidoGeneral();
  \$page->MuestraMenu(\"Inicio\"); //Mostramos el men� con las noticias
  \$page->MuestraTitulo(\"Ejemplo HTML\");


  \$fichero_contenido_html = \"ejemplo.cnt\";
  include(\$fichero_contenido_html);

  \$page->FinContenidoGeneral();
  \$page->ContenidoLateral();
";
    }

    public function getTemplateName()
    {
        return "public/inicio.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/inicio.php", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/public/inicio.php");
    }
}
