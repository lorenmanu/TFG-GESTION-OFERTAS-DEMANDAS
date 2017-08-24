<?php

/* includes/formato.inc.php */
class __TwigTemplate_2f49a2a84445757421dd9596a035ed465c480c4eef66175e2e9a7ba0a2106168 extends Twig_Template
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
\t@file formato.inc.php
\t@brief contiene las funciones relativas al cambio de formato para la representacion de texto
*/
\t
\t/**
\t * @brief función encargada de convertir una fecha dada por MySQL al formato
\t * de fecha que se utiliza en España
\t * @param \$fecha fecha en formato MySQL
\t */
function FormateaFecha(\$fecha){
    if(\$fecha == \"0000-00-00\"){
      return \"No disponible\";
    }
    else{
      if(\$fecha != \"\"){
        if(preg_match( '/([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{2,4})/', \$fecha, \$mifecha)){
          return \$fecha;
        }
        else{
          preg_match( '/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})/', \$fecha, \$mifecha);
          \$lafecha=\$mifecha[3].\"/\".\$mifecha[2].\"/\".\$mifecha[1];
          return \$lafecha;
        }
      }
      else{
        return \"\";
      }
    }
}

  /**
   *  @brief funcion encargada de formatear una fecha de MySQL de HH:MM:SS a HH:MM
   *  @param \$hora hora a la que realizar el formateo
   */
function FormateaHora(\$hora){
  \$h = explode(\":\", \$hora);
  \$hora_formateada = \$h[0].\":\".\$h[1];
  return \$hora_formateada;
}        



\t/**
\t * @brief función encargada de convertir una fecha en formato de España a MySQL
\t * @param \$fecha fecha en el formato de España 
\t */
function FormateaFechaMysql(\$fecha){
    preg_match( '/([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{2,4})/', \$fecha, \$mifecha);
    \$lafecha=\$mifecha[3].\"-\".\$mifecha[2].\"-\".\$mifecha[1];
    return \$lafecha;
} 

\t/**
\t*\t@brief función encargada de convertir una cadena de texto a formato html
\t*\t@param \$texto cadena de texto a convertir a formato html
\t*\t@return la cadena de texto convertida a formato html, (sustituyendo los caracteres especiles por sus correspondientes
\t\t\tcódigos HTML
\t*/
\tfunction ConvertirHTML( \$texto ){
\t\t  \$caracteres = array( \"á\",\"é\",\"í\",\"ó\",\"ú\",\"Á\",\"É\",\"Í\",\"Ó\",\"Ú\",\"ñ\",\"Ñ\",\"¿\");
\t\t  \$car_html = array(\"&aacute;\", \"&eacute;\",\"&iacute;\", \"&oacute;\",\"&uacute;\",
\t\t\t\t\t\t\t\"&Aacute;\", \"&Eacute;\",\"&Iacute;\", \"&Oacute;\",\"&Uacute;\",
\t\t\t\t\t\t\t\"&ntilde;\", \"&Ntilde;\",\"&iquest;\");
\t\t  \$t = str_replace(\$caracteres, \$car_html, \$texto);
\t\t  return \$t;
\t}
\t
\t/**
\t * @brief función encargada de convertir una cadena de texto de html a texto
\t * @param \$texto cadena de texto a convertir en formato txt
\t * @return la cadena reemplazando los caracteres HTML por su equivalente en TXT
\t */
  function ConvertirTXT( \$texto ){
\t\t  \$caracteres = array(\"<br />\", \"<br>\", \"<br/>\",\"&nbsp;\", \"<ul>\", \"<li>\");
\t\t  \$car_txt = array(\"\\n\", \"\\n\", \"\\n\", \" \", \"\\n\", \"\\n     \");
\t\t  \$t = str_replace(\$caracteres, \$car_txt, \$texto);
\t\t  \$t = strip_tags(\$t);
\t\t  return \$t;  
  }         \t
\t
\t/**
\t * @brief función encargada de eliminar los segundo de una hora en forma MySQL
\t * @param \$hora hora en formato MySQL
\t * @return la hora con los segundos quitados
\t */
  function quita_segundos (\$tiempo){
  \tlist( \$hora, \$min, \$segs ) = explode( ':', \$tiempo );
  \treturn \$hora.\":\".\$min;
  } 
  
  /**
   *  @brief función encargada de obtener las iniciales de un nombre de usuario
   *  @param \$nombre nombre completo del usuario
   *  @return un string con las iniciales del nombre
   */
  function ObtenerIniciales(\$nombre){
    \$n = explode(\" \", \$nombre);
    \$iniciales = \"\";
    foreach(\$n as \$palabras){
      \$iniciales .= \$palabras[0].\". \";
    }
    
    return \$iniciales;
  }               \t 
\t
?>
";
    }

    public function getTemplateName()
    {
        return "includes/formato.inc.php";
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
        return new Twig_Source("", "includes/formato.inc.php", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/includes/formato.inc.php");
    }
}
