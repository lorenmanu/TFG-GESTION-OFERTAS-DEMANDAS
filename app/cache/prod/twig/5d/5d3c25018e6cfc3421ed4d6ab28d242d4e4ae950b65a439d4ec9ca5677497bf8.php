<?php

/* @Oferta/Default/subir.php */
class __TwigTemplate_134734c441734035bbda2f33e10c42e31aa7d85e81dfe1c84ed7673043e6be76 extends Twig_Template
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
\$uploadedfileload=\"true\";
\$uploadedfile_size=\$_FILES['uploadedfile'][size];
echo \$_FILES[uploadedfile][name];
if (\$_FILES[uploadedfile][size]>200000)
{\$msg=\$msg.\"El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>\";
\$uploadedfileload=\"false\";}

if (!(\$_FILES[uploadedfile][type] ==\"image/pjpeg\" OR \$_FILES[uploadedfile][type] ==\"image/gif\"))
{\$msg=\$msg.\" Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>\";
\$uploadedfileload=\"false\";}

\$file_name=\$_FILES[uploadedfile][name];
\$add=\"uploads/\$file_name\";
if(\$uploadedfileload==\"true\"){

if(move_uploaded_file (\$_FILES[uploadedfile][tmp_name], \$add)){
echo \" Ha sido subido satisfactoriamente\";
}else{echo \"Error al subir el archivo\";}

}else{echo \$msg;}
?>
";
    }

    public function getTemplateName()
    {
        return "@Oferta/Default/subir.php";
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
        return new Twig_Source("", "@Oferta/Default/subir.php", "/home/ubuntu/Escritorio/todo/TFG-LRR2/src/OfertaBundle/Resources/views/Default/subir.php");
    }
}
