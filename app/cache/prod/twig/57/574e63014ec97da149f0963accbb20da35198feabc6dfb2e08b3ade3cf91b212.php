<?php

/* includes/pagina.inc.php */
class __TwigTemplate_7f5e43de3814f0f753abce9c9f734b052cd857cd4d47932800524a186da2f41e extends Twig_Template
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
   *\t@file pagina.inc.php
   *\t@brief implementacion de la clase pagina, para facilitar la implementacion y modificacion de la parte html correspondiente a cada una de las paginas de la aplicación
  */

class pagina{
    var \$titulo_nav = \"Plataforma Uniweb Curso Básico\"; //! titulo de la pagina web que aparecera en la ventana del navegador

    // Operaciones de la clase
    /**
      @brief funcion para la modificacion de la variable @a \$titulo_nav
      @par Mediante el uso del puntero this cambia el valor de la variable \$titulo_nav
      @param \$nuevo_titulo_nav nuevo titulo que aparecera en la ventana del navegador
    */
    function SetTitulo_nav( \$nuevo_titulo_nav ){
      \$this -> titulo_nav = \$nuevo_titulo_nav;
    }

    /**
      @brief imprime el texto html relativo a la cabecera de paginas principales de la aplicacion web.
    */
    function MuestraCabecera(){

    ?>
      <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
      <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"es\" xml:lang=\"es\" >
\t<head>
\t\t<title><?php echo \"Plataforma Uniweb Curso Básico\" ?></title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
\t\t<meta name=\"description\" content=\"Universidad de Granada - Departamento de Ciencias de la Computación e Inteligencia Artificial CCIA-UGR\" />
\t\t<meta name=\"keywords\" content=\"universidad,granada, Departamento Ciencias de la Computación e Inteligencia Artifical (Docencia Tutorías Asignaturas Profesores)\" />
\t\t<meta http-equiv=\"content-language\" name=\"language\" content=\"es\" />
\t\t<meta http-equiv=\"X-Frame-Options\" content=\"deny\" />
\t\t<meta name=\"verify-v1\" content=\"wzNyCz8sYCNt7F8Bg9GWfznkU43lC9PNaZZAxRzkjJA=\" />
\t\t<meta name=\"author\" content=\"Plantilla Neutra Oficina Web UGR http://ofiweb.ugr.es\" />
\t\t<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/vnd.microsoft.icon\" />
\t\t<link rel=\"icon\" href=\"favicon.ico\" type=\"image/vnd.microsoft.icon\" />
\t\t<link rel=\"stylesheet\" id=\"css-style\" type=\"text/css\" href=\"css/style-ugr.css\" media=\"all\" />
  
\t\t<?php
\t\t  if(isset(\$_GET[\"p\"])){
\t\t    ?>
\t\t    <style type=\"text/css\">
\t\t      div#general{width:100%;}
\t\t      div#pagina{width:691px; background-image: url(\"img/interior/contenido-fondo.png\"); background-size: 692px 70px;}
\t\t      div#interior_pie{background-image:none;}
\t\t    </style>
\t\t    <?php
\t\t  }
\t\t  else{
\t\t  ?>
\t\t\t<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"js/interface.js\"></script>

\t\t\t<!--[if lt IE 7]>
\t\t\t <style type=\"text/css\">
\t\t\t .dock img { behavior: url(iepngfix.htc) }
\t\t\t </style>
\t\t\t<![endif]-->
\t\t  <?php
\t\t  }
\t\t?>
\t</head>
\t<body>
\t\t<div id=\"contenedor_margenes\" class=\"\">
\t\t\t<div id=\"contenedor\" class=\"\">
\t\t\t\t<div id=\"cabecera\" class=\"\">
\t\t\t\t\t<h1 id=\"cab_inf\">Ciencias de la Computación e Inteligencia Artificial</h1>
\t\t\t\t\t<div id=\"formularios\">\t
\t\t\t\t\t  <div id=\"buscador\">
\t\t\t\t\t    <h2><?php echo \"Buscar\" ?></h2>
\t\t\t\t\t    <form action=\"http://www.google.es/search?hl=es&amp;as_qdr=all\" method=\"get\" onsubmit=\"javascript:document.getElementById('sq').value+=' site:www.ugr.es'\">
\t\t\t\t\t\t<div id=\"formulario_buscar\">
\t\t\t\t\t\t  <div id=\"buscador-input\">
\t\t\t\t\t\t    <label id=\"buscar\" for=\"sq\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"search\" value=\"1\" />
\t\t\t\t\t\t\t<input class=\"with_default_value\" type=\"text\" name=\"query\" id=\"sq\" value=\"<?php echo \"busqueda...\" ?>\" onclick=\"this.value=''\" />
\t\t\t\t\t\t    </label>
\t\t\t\t\t\t    <label id=\"enviar_buscar\" for=\"submit_buscar\">
\t\t\t\t\t\t      <input type=\"image\" src=\"img/transp.gif\" alt=\"iniciar búsqueda\" name=\"submit\" id=\"submit_buscar\" class=\"image-buscar\"/>
\t\t\t\t\t\t    </label>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t     </form>
\t\t\t\t\t  </div>\t\t\t
\t\t\t\t\t\t<a href=\"http://www.ugr.es\" id=\"enlace_ugr\">Universidad de Granada</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<div class=\"depto titulo\"><span class=\"titulo_stack\">Departamento</span><a href=\"index.php\" id=\"enlace_stack\">Departamento de Ciencias de la Computación e I.A.</a></div>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
    <?php
  } //fin de la funcion MuestraCabecera


  /**
   *\t@brief función encargada de mostrar el título de la página
   *\t@param \$titulo titulo a mostrar
   */
  function MuestraTitulo(\$titulo){
  ?>
    <div id=\"pagina\">
      <h1 id=\"titulo_pagina\"><span class=\"texto_titulo\"><?php echo \$titulo; ?></span></h1>
      <div id=\"contenido\" class=\"sec_interior\">
\t<div class=\"content_doku\">
  <?php
  }

  /**
   *\t@brief Función encargada de mostrar la sección de contenido general (Menu y contenido principal) de la página
   */
  function InicioContenidoGeneral(){
    ?>
      <div id=\"general\">
    <?php
  }

  /**
   *\t@brief Función encargada de mostrar el fin de sección de contenido general (Menu y contenido principal) de la página
   */
  function FinContenidoGeneral(){
    //Cierra los 3 divs que se abren en muestra titulo y el de Inicio de contenido general
    ?>
\t    </div> 
\t  </div>\t\t\t\t\t\t
\t</div>
      </div>
    <?php
  }

  /**
  *\t@brief función encargada de mostrar el contenido al lateral de la página
  */
  function ContenidoLateral(){
  ?>
\t<div id=\"banners\">
\t\t<div class=\"mod-banners\">
\t\t\t<ul>
\t\t\t\t<li class=\"banner_container model-mecenazgo-01 dont_showtext\">
\t\t\t\t\t<a class=\"banner\" href=\"http://mecenas.ugr.es\">
\t\t\t\t\t\t<strong>Plan de Mecenazgo</strong>
\t\t\t\t\t\t<em>Universidad de Granada</em>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</a>
\t\t\t\t</li>

                                <li class=\"banner_container model-fb-01 dont_showtext\">
                                        <a class=\"banner\" href=\"https://www.facebook.com/pages/Decsai-CCIA-Universidad-de-Granada/634885553295826?fref=nf\">
                                                <strong>Facebook</strong>
                                                <em>Find us on facebook</em>
                                                <span></span>
                                        </a>
                                </li>

\t\t\t</ul>
\t\t</div>
\t\t</div>
\t\t<div id=\"lateral_doku\">
\t\t\t<div class=\"content_doku content_doku_display\">
\t\t\t\t<div class=\"content_doku\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    <?php
  }
  
  /**
   *  @brief funcion encargada de mostrar el menu vertical del lateral de la página
   *  @param \$pagina pagina en la que se encuentra actualmente el usuario   
   */
  function MuestraMenu(\$pagina){
    include(\"includes/lang/es.php\");
    include(\"config/config.php\");
    
    \$docencia = array(\"Docencia\", \"Asignaturas\", \"Profesores\", \"Posgrado\");
    \$informacion_general = array(\"Información\", \"Notas de Prensa\", \"Historia\", \"Tesis\", \"Ex-miembros\", \"Gobierno y Comisiones\", \"Sedes y Locales\", \"Política Ambiental de la UGR\", \"Acerca de\");

    ?>
    <div id=\"menus\">
      <div id=\"enlaces_secciones\" class=\"mod-menu_secciones\">
      <ul>
\t<li class=\"<?php if(\$pagina==\"Inicio\") echo \"selected tipo2-selected\"; else echo \"tipo2\"; ?> item-first_level\"><a href=\"index.php\"><?php echo \"Inicio\" ?></a></li>
\t<li class=\"<?php if(\$pagina==\"Docencia\" || in_array(\$pagina,\$docencia)) echo \"selected tipo2-selected\"; else echo \"tipo2\"; ?> item-first_level\"><a href=\"index.php?p=docencia\"><?php echo \"Docencia\" ?></a>
\t  <ul> 
\t    <li class=\"<?php if(\$pagina==\"Asignaturas\") echo \"selected tipo1-selected\"; else echo \"tipo1\"; ?> item-second_level first-child\"><a href=\"index.php?p=asignaturas\"><?php echo \"Asignaturas\" ?></a></li>
\t    <li class=\"<?php if(\$pagina==\"Profesores\") echo \"selected tipo1-selected\"; else echo \"tipo1\"; ?> item-second_level\"><a href=\"index.php?p=profesores\"><?php echo \"Profesores\" ?></a></li>
\t    <li class=\"<?php if(\$pagina==\"Posgrado\")echo \"selected tipo1-selected\"; else echo \"tipo1\"; ?> item-second_level\"><a href=\"index.php?p=posgrado\"><?php echo \"Posgrado\" ?></a></li>
\t  </ul>
\t</li>
\t</ul>
</div>
      <?php if(\$pagina == \"Inicio\"){ ?>
\t  <form class=\"widget_loginform\" action=\"<?php echo \$config['HTTPS_URL']; ?>\" method=\"post\">
\t    <div id=\"login_form_widget\" class=\"mod-buttons fieldset login_form login_form_widget\">
\t      <label id=\"login_widget\" for=\"ilogin_widget\" class=\"login login_widget\">
\t\t<span>Usuario</span>
\t\t<input name=\"user\" id=\"ilogin_widget\" value=\"usuario...\" onfocus=\"javascript:if(this.value='usuario...') this.value='';return true;\" type=\"text\" />
\t      </label>
\t      <label id=\"password_widget\" for=\"ipassword_widget\" class=\"password password_widget\">
\t\t<span>Contraseña</span>
\t\t<input name=\"passwd\" id=\"ipassword_widget\" type=\"password\" />
\t      </label>
\t      <label id=\"enviar_login_widget\" for=\"submit_login_widget\" class=\"enviar_login enviar_login_widget\">
\t\t<input src=\"img/transp.gif\" alt=\"enviar datos de identificación\" name=\"submit\" id=\"submit_login_widget\" class=\"image-enviar\" type=\"image\" />
\t      </label>
\t      <div style=\"float:right; margin-top:5px;\"><a id=\"forgot\" href=\"\">¿Olvidó su contraseña?</a></div>
\t      <span id=\"login_error_widget\"> </span>
\t    </div>
\t</form>
      <?php } ?>
    </div>
    <?php
  }//fin de la función muestra menu    
  
  
  
  /**
   *  @brief funcion encargada de mostrar el pie de la aplicacion
   */
  function MuestraPie(){
    include(\"includes/lang/es.php\");
    
    ?>
\t<script src=\"http://www.google-analytics.com/urchin.js\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\">_uacct = \"UA-2290740-1\";urchinTracker();</script>

\t\t\t\t    <div id=\"interior_pie\">
\t\t\t\t\t    <div id=\"pie\">
\t\t\t\t\t\t    <a class=\"cmswebmap\" href=\"index.php?p=mapa\"><?php echo \"Ver Mapa Web\" ?></a>
\t\t\t\t\t\t    <span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t    <a class=\"contactar\" href=\"index.php?p=contacto\"><?php echo \"Contacto\" ?></a>
\t\t\t\t\t\t    <span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t    <a class=\"validador\" href=\"index.php?p=accesibilidad\"><?php echo \"Accesibilidad\" ?></a>
\t\t\t\t\t\t    <span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t    <a class=\"privacidad\" href=\"index.php?p=privacidad\"><?php echo \"Política de Privacidad\" ?></a>
\t\t\t\t\t\t    <p>\t\t\t\t\t\t    
\t\t\t\t\t\t    <a href=\"http://www.ugr.es/pages/creditos\">&copy; <?php echo date('Y'); ?></a> <span class=\"separador_enlaces\"> | </span> <a href=\"http://www.ugr.es\">Universidad de Granada</a></p>
\t\t\t\t\t    </div>
\t\t\t\t    </div>
\t\t\t    </div>
\t\t    </div>
\t    </body>
    </html>
    <?php

  }      
  
  /**
   * @brief funcion encargada de mostrar la miga de Pan de la aplicacion
   * @param \$miga miga de pan de la aplicación   
   * @param \$seleccion idioma indica si debe mostrarse la opción para cambiar de idioma (por defecto no)   
   */
  function MuestraBreadCrumb(\$miga, \$seleccion_idioma = 0){
    include(\"includes/lang/es.php\");
    ?>
\t<div id=\"rastro-idiomas\">
\t\t<div class=\"language\">
\t\t</div>
\t\t<div id=\"rastro\">
\t\t\t<ul id=\"rastro_breadcrumb\">
\t\t\t\t<?php
\t\t\t\t\t  \$breadcrumb = \"<li class='first'><a class='first' href='index.php'>\".\$lang[\"Inicio\"].\"</a></li>\";
\t\t\t\t\t  \$num_migas = sizeof(\$miga);
\t\t\t\t\t  for(\$i=0; \$i < \$num_migas - 1; \$i++){
\t\t\t\t\t    \$m = \$miga[\$i];
\t\t\t\t\t    \$breadcrumb .= \"<li><a href='\$m[1]'>\$m[0]</a></li>\";
\t\t\t\t\t  }
\t\t\t\t\t  if(\$num_migas != 0){
\t\t\t\t\t    \$ultimo = \$num_migas-1;
\t\t\t\t\t    \$breadcrumb .= \"<li><a class='last' href='#'>\".\$miga[\$ultimo][0].\"</a></li>\";
\t\t\t\t\t  }      

\t\t\t\t\t  echo \$breadcrumb;
\t\t\t\t?>
\t\t\t</ul>
\t\t</div>

\t</div>
    <?php
  }   

}//fin de la clase pagina

//#################   FUNCIONES EXTERNAS A LA CLASE PÁGINA #############
   /**
    * @brief funcion encargada de mostrar un mensaje de error
    * @param \$error error a mostrar
    */
   function MuestraMensajeError(\$error){
    echo \"<div style='border: 1px solid #900; color:#900; margin: 10px 20px 10px 20px; text-align:center;'>\$error</div>\";
   }                         
\t
   /**
    * @brief funcion encargada de mostrar un mensaje de evento correcto
    * @param \$mensaje mensaje a mostrar
    */
   function MuestraMensajeOK(\$mensaje){
    echo \"<div style='border: 1px solid #090; color:#090; margin: 10px 20px 10px 20px; text-align:center;'>\$mensaje</div>\";
   }  
   
  /**
   * @brief funcion encargada de mostrar un boton de con el texto volver al history.back()
  */          
  function MuestraBotonVolver(){
    include(\"includes/lang/es.php\");
    ?>
        <div style=\"margin:10px auto; text-align:center;\">
                <input type='button' class='submit' onclick=\"history.back();\" value=\"<?php echo \$lang[\"Volver\"]; ?>\" />
        </div>
    <?php
  }
?>
";
    }

    public function getTemplateName()
    {
        return "includes/pagina.inc.php";
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
        return new Twig_Source("", "includes/pagina.inc.php", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/includes/pagina.inc.php");
    }
}
