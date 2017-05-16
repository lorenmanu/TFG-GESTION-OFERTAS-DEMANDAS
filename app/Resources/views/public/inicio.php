<?php
/**
 *  @file posgrado.php
 *  @brief fichero encargado de mostrar la informaci�n relativa a los distintos posgrados que dependen del departamento
 *  @par en funci�n del idioma seleccionado por el usuario mostrar� un determinado fichero de contenido
 */

  $page->MuestraBreadCrumb(array(array("Ejemplo HTML")));
  $page->InicioContenidoGeneral();
  $page->MuestraMenu("Inicio"); //Mostramos el men� con las noticias
  $page->MuestraTitulo("Ejemplo HTML");


  $fichero_contenido_html = "ejemplo.cnt";
  include($fichero_contenido_html);

  $page->FinContenidoGeneral();
  $page->ContenidoLateral();
