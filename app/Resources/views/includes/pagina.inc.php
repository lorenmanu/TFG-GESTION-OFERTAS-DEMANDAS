<?php
  /**
   *	@file pagina.inc.php
   *	@brief implementacion de la clase pagina, para facilitar la implementacion y modificacion de la parte html correspondiente a cada una de las paginas de la aplicación
  */

class pagina{
    var $titulo_nav = "Plataforma Uniweb Curso Básico"; //! titulo de la pagina web que aparecera en la ventana del navegador

    // Operaciones de la clase
    /**
      @brief funcion para la modificacion de la variable @a $titulo_nav
      @par Mediante el uso del puntero this cambia el valor de la variable $titulo_nav
      @param $nuevo_titulo_nav nuevo titulo que aparecera en la ventana del navegador
    */
    function SetTitulo_nav( $nuevo_titulo_nav ){
      $this -> titulo_nav = $nuevo_titulo_nav;
    }

    /**
      @brief imprime el texto html relativo a la cabecera de paginas principales de la aplicacion web.
    */
    function MuestraCabecera(){

    ?>
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es" >
	<head>
		<title><?php echo "Plataforma Uniweb Curso Básico" ?></title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="description" content="Universidad de Granada - Departamento de Ciencias de la Computación e Inteligencia Artificial CCIA-UGR" />
		<meta name="keywords" content="universidad,granada, Departamento Ciencias de la Computación e Inteligencia Artifical (Docencia Tutorías Asignaturas Profesores)" />
		<meta http-equiv="content-language" name="language" content="es" />
		<meta http-equiv="X-Frame-Options" content="deny" />
		<meta name="verify-v1" content="wzNyCz8sYCNt7F8Bg9GWfznkU43lC9PNaZZAxRzkjJA=" />
		<meta name="author" content="Plantilla Neutra Oficina Web UGR http://ofiweb.ugr.es" />
		<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
		<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
		<link rel="stylesheet" id="css-style" type="text/css" href="css/style-ugr.css" media="all" />
  
		<?php
		  if(isset($_GET["p"])){
		    ?>
		    <style type="text/css">
		      div#general{width:100%;}
		      div#pagina{width:691px; background-image: url("img/interior/contenido-fondo.png"); background-size: 692px 70px;}
		      div#interior_pie{background-image:none;}
		    </style>
		    <?php
		  }
		  else{
		  ?>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/interface.js"></script>

			<!--[if lt IE 7]>
			 <style type="text/css">
			 .dock img { behavior: url(iepngfix.htc) }
			 </style>
			<![endif]-->
		  <?php
		  }
		?>
	</head>
	<body>
		<div id="contenedor_margenes" class="">
			<div id="contenedor" class="">
				<div id="cabecera" class="">
					<h1 id="cab_inf">Ciencias de la Computación e Inteligencia Artificial</h1>
					<div id="formularios">	
					  <div id="buscador">
					    <h2><?php echo "Buscar" ?></h2>
					    <form action="http://www.google.es/search?hl=es&amp;as_qdr=all" method="get" onsubmit="javascript:document.getElementById('sq').value+=' site:www.ugr.es'">
						<div id="formulario_buscar">
						  <div id="buscador-input">
						    <label id="buscar" for="sq">
							<input type="hidden" name="search" value="1" />
							<input class="with_default_value" type="text" name="query" id="sq" value="<?php echo "busqueda..." ?>" onclick="this.value=''" />
						    </label>
						    <label id="enviar_buscar" for="submit_buscar">
						      <input type="image" src="img/transp.gif" alt="iniciar búsqueda" name="submit" id="submit_buscar" class="image-buscar"/>
						    </label>
						  </div>
						</div>
					     </form>
					  </div>			
						<a href="http://www.ugr.es" id="enlace_ugr">Universidad de Granada</a>
						<span class="separador_enlaces"> | </span>
						<div class="depto titulo"><span class="titulo_stack">Departamento</span><a href="index.php" id="enlace_stack">Departamento de Ciencias de la Computación e I.A.</a></div>
						<span class="separador_enlaces"> | </span>
					</div>
				</div>
    <?php
  } //fin de la funcion MuestraCabecera


  /**
   *	@brief función encargada de mostrar el título de la página
   *	@param $titulo titulo a mostrar
   */
  function MuestraTitulo($titulo){
  ?>
    <div id="pagina">
      <h1 id="titulo_pagina"><span class="texto_titulo"><?php echo $titulo; ?></span></h1>
      <div id="contenido" class="sec_interior">
	<div class="content_doku">
  <?php
  }

  /**
   *	@brief Función encargada de mostrar la sección de contenido general (Menu y contenido principal) de la página
   */
  function InicioContenidoGeneral(){
    ?>
      <div id="general">
    <?php
  }

  /**
   *	@brief Función encargada de mostrar el fin de sección de contenido general (Menu y contenido principal) de la página
   */
  function FinContenidoGeneral(){
    //Cierra los 3 divs que se abren en muestra titulo y el de Inicio de contenido general
    ?>
	    </div> 
	  </div>						
	</div>
      </div>
    <?php
  }

  /**
  *	@brief función encargada de mostrar el contenido al lateral de la página
  */
  function ContenidoLateral(){
  ?>
	<div id="banners">
		<div class="mod-banners">
			<ul>
				<li class="banner_container model-mecenazgo-01 dont_showtext">
					<a class="banner" href="http://mecenas.ugr.es">
						<strong>Plan de Mecenazgo</strong>
						<em>Universidad de Granada</em>
						<span></span>
					</a>
				</li>

                                <li class="banner_container model-fb-01 dont_showtext">
                                        <a class="banner" href="https://www.facebook.com/pages/Decsai-CCIA-Universidad-de-Granada/634885553295826?fref=nf">
                                                <strong>Facebook</strong>
                                                <em>Find us on facebook</em>
                                                <span></span>
                                        </a>
                                </li>

			</ul>
		</div>
		</div>
		<div id="lateral_doku">
			<div class="content_doku content_doku_display">
				<div class="content_doku">
				</div>
			</div>
		</div>
    <?php
  }
  
  /**
   *  @brief funcion encargada de mostrar el menu vertical del lateral de la página
   *  @param $pagina pagina en la que se encuentra actualmente el usuario   
   */
  function MuestraMenu($pagina){
    include("includes/lang/es.php");
    include("config/config.php");
    
    $docencia = array("Docencia", "Asignaturas", "Profesores", "Posgrado");
    $informacion_general = array("Información", "Notas de Prensa", "Historia", "Tesis", "Ex-miembros", "Gobierno y Comisiones", "Sedes y Locales", "Política Ambiental de la UGR", "Acerca de");

    ?>
    <div id="menus">
      <div id="enlaces_secciones" class="mod-menu_secciones">
      <ul>
	<li class="<?php if($pagina=="Inicio") echo "selected tipo2-selected"; else echo "tipo2"; ?> item-first_level"><a href="index.php"><?php echo "Inicio" ?></a></li>
	<li class="<?php if($pagina=="Docencia" || in_array($pagina,$docencia)) echo "selected tipo2-selected"; else echo "tipo2"; ?> item-first_level"><a href="index.php?p=docencia"><?php echo "Docencia" ?></a>
	  <ul> 
	    <li class="<?php if($pagina=="Asignaturas") echo "selected tipo1-selected"; else echo "tipo1"; ?> item-second_level first-child"><a href="index.php?p=asignaturas"><?php echo "Asignaturas" ?></a></li>
	    <li class="<?php if($pagina=="Profesores") echo "selected tipo1-selected"; else echo "tipo1"; ?> item-second_level"><a href="index.php?p=profesores"><?php echo "Profesores" ?></a></li>
	    <li class="<?php if($pagina=="Posgrado")echo "selected tipo1-selected"; else echo "tipo1"; ?> item-second_level"><a href="index.php?p=posgrado"><?php echo "Posgrado" ?></a></li>
	  </ul>
	</li>
	</ul>
</div>
      <?php if($pagina == "Inicio"){ ?>
	  <form class="widget_loginform" action="<?php echo $config['HTTPS_URL']; ?>" method="post">
	    <div id="login_form_widget" class="mod-buttons fieldset login_form login_form_widget">
	      <label id="login_widget" for="ilogin_widget" class="login login_widget">
		<span>Usuario</span>
		<input name="user" id="ilogin_widget" value="usuario..." onfocus="javascript:if(this.value='usuario...') this.value='';return true;" type="text" />
	      </label>
	      <label id="password_widget" for="ipassword_widget" class="password password_widget">
		<span>Contraseña</span>
		<input name="passwd" id="ipassword_widget" type="password" />
	      </label>
	      <label id="enviar_login_widget" for="submit_login_widget" class="enviar_login enviar_login_widget">
		<input src="img/transp.gif" alt="enviar datos de identificación" name="submit" id="submit_login_widget" class="image-enviar" type="image" />
	      </label>
	      <div style="float:right; margin-top:5px;"><a id="forgot" href="">¿Olvidó su contraseña?</a></div>
	      <span id="login_error_widget"> </span>
	    </div>
	</form>
      <?php } ?>
    </div>
    <?php
  }//fin de la función muestra menu    
  
  
  
  /**
   *  @brief funcion encargada de mostrar el pie de la aplicacion
   */
  function MuestraPie(){
    include("includes/lang/es.php");
    
    ?>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct = "UA-2290740-1";urchinTracker();</script>

				    <div id="interior_pie">
					    <div id="pie">
						    <a class="cmswebmap" href="index.php?p=mapa"><?php echo "Ver Mapa Web" ?></a>
						    <span class="separador_enlaces"> | </span>
						    <a class="contactar" href="index.php?p=contacto"><?php echo "Contacto" ?></a>
						    <span class="separador_enlaces"> | </span>
						    <a class="validador" href="index.php?p=accesibilidad"><?php echo "Accesibilidad" ?></a>
						    <span class="separador_enlaces"> | </span>
						    <a class="privacidad" href="index.php?p=privacidad"><?php echo "Política de Privacidad" ?></a>
						    <p>						    
						    <a href="http://www.ugr.es/pages/creditos">&copy; <?php echo date('Y'); ?></a> <span class="separador_enlaces"> | </span> <a href="http://www.ugr.es">Universidad de Granada</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
	    </body>
    </html>
    <?php

  }      
  
  /**
   * @brief funcion encargada de mostrar la miga de Pan de la aplicacion
   * @param $miga miga de pan de la aplicación   
   * @param $seleccion idioma indica si debe mostrarse la opción para cambiar de idioma (por defecto no)   
   */
  function MuestraBreadCrumb($miga, $seleccion_idioma = 0){
    include("includes/lang/es.php");
    ?>
	<div id="rastro-idiomas">
		<div class="language">
		</div>
		<div id="rastro">
			<ul id="rastro_breadcrumb">
				<?php
					  $breadcrumb = "<li class='first'><a class='first' href='index.php'>".$lang["Inicio"]."</a></li>";
					  $num_migas = sizeof($miga);
					  for($i=0; $i < $num_migas - 1; $i++){
					    $m = $miga[$i];
					    $breadcrumb .= "<li><a href='$m[1]'>$m[0]</a></li>";
					  }
					  if($num_migas != 0){
					    $ultimo = $num_migas-1;
					    $breadcrumb .= "<li><a class='last' href='#'>".$miga[$ultimo][0]."</a></li>";
					  }      

					  echo $breadcrumb;
				?>
			</ul>
		</div>

	</div>
    <?php
  }   

}//fin de la clase pagina

//#################   FUNCIONES EXTERNAS A LA CLASE PÁGINA #############
   /**
    * @brief funcion encargada de mostrar un mensaje de error
    * @param $error error a mostrar
    */
   function MuestraMensajeError($error){
    echo "<div style='border: 1px solid #900; color:#900; margin: 10px 20px 10px 20px; text-align:center;'>$error</div>";
   }                         
	
   /**
    * @brief funcion encargada de mostrar un mensaje de evento correcto
    * @param $mensaje mensaje a mostrar
    */
   function MuestraMensajeOK($mensaje){
    echo "<div style='border: 1px solid #090; color:#090; margin: 10px 20px 10px 20px; text-align:center;'>$mensaje</div>";
   }  
   
  /**
   * @brief funcion encargada de mostrar un boton de con el texto volver al history.back()
  */          
  function MuestraBotonVolver(){
    include("includes/lang/es.php");
    ?>
        <div style="margin:10px auto; text-align:center;">
                <input type='button' class='submit' onclick="history.back();" value="<?php echo $lang["Volver"]; ?>" />
        </div>
    <?php
  }
?>
