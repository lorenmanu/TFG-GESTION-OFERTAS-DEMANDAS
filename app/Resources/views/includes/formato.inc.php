<?php
/**
	@file formato.inc.php
	@brief contiene las funciones relativas al cambio de formato para la representacion de texto
*/
	
	/**
	 * @brief función encargada de convertir una fecha dada por MySQL al formato
	 * de fecha que se utiliza en España
	 * @param $fecha fecha en formato MySQL
	 */
function FormateaFecha($fecha){
    if($fecha == "0000-00-00"){
      return "No disponible";
    }
    else{
      if($fecha != ""){
        if(preg_match( '/([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{2,4})/', $fecha, $mifecha)){
          return $fecha;
        }
        else{
          preg_match( '/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})/', $fecha, $mifecha);
          $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
          return $lafecha;
        }
      }
      else{
        return "";
      }
    }
}

  /**
   *  @brief funcion encargada de formatear una fecha de MySQL de HH:MM:SS a HH:MM
   *  @param $hora hora a la que realizar el formateo
   */
function FormateaHora($hora){
  $h = explode(":", $hora);
  $hora_formateada = $h[0].":".$h[1];
  return $hora_formateada;
}        



	/**
	 * @brief función encargada de convertir una fecha en formato de España a MySQL
	 * @param $fecha fecha en el formato de España 
	 */
function FormateaFechaMysql($fecha){
    preg_match( '/([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{2,4})/', $fecha, $mifecha);
    $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
    return $lafecha;
} 

	/**
	*	@brief función encargada de convertir una cadena de texto a formato html
	*	@param $texto cadena de texto a convertir a formato html
	*	@return la cadena de texto convertida a formato html, (sustituyendo los caracteres especiles por sus correspondientes
			códigos HTML
	*/
	function ConvertirHTML( $texto ){
		  $caracteres = array( "á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","Ñ","¿");
		  $car_html = array("&aacute;", "&eacute;","&iacute;", "&oacute;","&uacute;",
							"&Aacute;", "&Eacute;","&Iacute;", "&Oacute;","&Uacute;",
							"&ntilde;", "&Ntilde;","&iquest;");
		  $t = str_replace($caracteres, $car_html, $texto);
		  return $t;
	}
	
	/**
	 * @brief función encargada de convertir una cadena de texto de html a texto
	 * @param $texto cadena de texto a convertir en formato txt
	 * @return la cadena reemplazando los caracteres HTML por su equivalente en TXT
	 */
  function ConvertirTXT( $texto ){
		  $caracteres = array("<br />", "<br>", "<br/>","&nbsp;", "<ul>", "<li>");
		  $car_txt = array("\n", "\n", "\n", " ", "\n", "\n     ");
		  $t = str_replace($caracteres, $car_txt, $texto);
		  $t = strip_tags($t);
		  return $t;  
  }         	
	
	/**
	 * @brief función encargada de eliminar los segundo de una hora en forma MySQL
	 * @param $hora hora en formato MySQL
	 * @return la hora con los segundos quitados
	 */
  function quita_segundos ($tiempo){
  	list( $hora, $min, $segs ) = explode( ':', $tiempo );
  	return $hora.":".$min;
  } 
  
  /**
   *  @brief función encargada de obtener las iniciales de un nombre de usuario
   *  @param $nombre nombre completo del usuario
   *  @return un string con las iniciales del nombre
   */
  function ObtenerIniciales($nombre){
    $n = explode(" ", $nombre);
    $iniciales = "";
    foreach($n as $palabras){
      $iniciales .= $palabras[0].". ";
    }
    
    return $iniciales;
  }               	 
	
?>
