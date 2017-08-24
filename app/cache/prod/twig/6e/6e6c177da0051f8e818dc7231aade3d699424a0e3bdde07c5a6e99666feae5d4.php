<?php

/* css/style.css */
class __TwigTemplate_e332ea96094dbafe2f784f18abc8d2b0a8f0382acc98f4bc11f27e25fb9e0528 extends Twig_Template
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
        echo "* {
    margin: 0;
    padding: 0;
    background-repeat: no-repeat;
    border-style: solid;
    border-width: 0;
}

html {
    background-color: #FFFFFF;
}

a img {
\tborder: medium none;
}

a {
    color: #543342;
    text-decoration: none;
}

a:hover {
    color: #DD3B15;
}

a, a:hover, a:visited, a:active {
    outline: medium none;
}

ol, ul {
    list-style-position: inside;
    list-style-type: none;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Georgia,serif;
    font-style: normal;
    font-weight: normal;
}
div#contenedor {
    margin-left: auto;
    margin-right: auto;
    padding-top: 10px;
    background-repeat: no-repeat;
    font-family: Verdana,sans;
    font-size: 11px;
    width: 950px;
}
div#contenedor_margenes {
    margin-left: auto;
    margin-right: auto;
    width: 1024px;
}
div#sombras {
    background-image: url(\"../img/general/sombra.png\");
    background-repeat: repeat-y;
}
span.separador_enlaces {
    display: none;
}

/*****************/
/* Cabecera gral */
/*****************/
div#cabecera {
    position: relative;
    width: 100%;
\tborder-color: #6D6C71;
}
div#cabecera h1#cab_inf {
    height: 138px;
    left: 237px;
    position: absolute;
    top: 79px;
    width: 712px;
    background-position: center center;
    text-indent: -9999em;
    background-image: url(\"../img/general/cabecera-foto.jpg\");
    background-position: 0 0;
    border-color: #6D6C71;
}

div#cabecera a.enlace_provisional {
    display: block;
    float: left;
    margin-left: 204px;
    margin-top: 62px;
    min-height: 19px;
    padding-left: 26px;
    background-image: url(\"../img/general/cabecera-flecha_off.png\");
    background-position: 0 0;
    font-size: 90%;
}
div#cabecera a.enlace_provisional:hover {
    background-image: url(\"../img/general/cabecera-flecha_on.png\");
}
div#cabecera a.enlace_provisional strong {
    display: block;
    color: #FFFFFF;
    font-style: normal;
    font-weight: normal;
    line-height: 0.8em;
    text-transform: uppercase;
}
div#cabecera a.enlace_provisional em {
    color: #846E78;
    font-style: normal;
    font-weight: normal;
}
div#cabecera a.enlace_provisional:hover em {
    color: #FFFFFF;
}
div#cabecera div#formularios {
    height: 238px;
    background-image: url(\"../img/general/logo-ugr.png\");
    background-position: right top;
    border-color: #6D6C71;
}
div#cabecera div#formularios span#obituario {
    display: none;
}
div#cabecera.activar_obituario div#formularios label#buscar {
    right: 91px;
}
div#cabecera.activar_obituario div#formularios label#buscar input {
    width: 10em;
}
div#cabecera.activar_obituario div#formularios label#enviar_buscar {
    right: 67px;
}
div#cabecera.activar_obituario div#formularios span#obituario {
    display: block;
    height: 52px;
    position: absolute;
    right: 0;
    width: 52px;
}
div#cabecera a#enlace_ugr {
    display: block;
    height: 69px;
    margin-left: 750px;
    width: 200px;
\ttext-indent: -9999em;
}
div#cabecera div.depto span {
    display: block;
    text-indent: -9999em;
}
div#cabecera div.depto {
    border-bottom: 10px none;
    border-top: 10px none;
    float: left;
    height: 138px;
    width: 949px;
    background-image: url(\"../img/general/cabecera-departamento.png\");
    background-repeat: no-repeat;
    border-color: #6D6C71;
    border-style: solid;
}


div#cabecera div.depto a {
    text-indent: -9999em;
}
div#cabecera a#enlace_stack {
    display: block;
    height: 138px;
    margin-top: -13px;
    width: 238px;
    color: #00387E;
    font-family: Georgia,\"Times New Roman\",Times,serif;
    font-size: 23px;
    letter-spacing: -0.2px;
}
div#cabecera a#enlace_stack_subtit {
    display: block;
    padding-left: 57px;
    padding-top: 0;
}
div#cabecera div#enlaces_contactos {
    border-bottom: 1px solid;
    height: 31px;
}
div#cabecera div#enlaces_contactos a {
    display: block;
    float: right;
    height: 13px;
    margin-top: 9px;
    min-width: 80px;
    padding-left: 18px;
}
div#cabecera div#enlaces_contactos a.titulaciones {
    float: left;
    margin-top: 6px;
    padding: 0 0 0 6px;
    background: none repeat scroll 0 0 transparent;
    color: #D73B12;
    font-size: 11pt;
    letter-spacing: 2px;
    padding-right: 10px;
    text-transform: uppercase;
}
div#cabecera div#enlaces_contactos a.titulaciones_ugr {
    float: left;
    margin-top: 6px;
    padding: 0;
    background: none repeat scroll 0 0 transparent;
    color: #6F6F71;
    font-size: 11pt;
    letter-spacing: 2px;
}

div#cabecera div#enlaces_contactos a.titulaciones:hover {
    background: none repeat scroll 0 0 transparent;
    color: #D73B12;
}
div#cabecera div#enlaces_contactos a.titulaciones_ugr:hover {
    background: none repeat scroll 0 0 transparent;
    color: #6F6F71;
}

/***************/
/* Breadcrumbs */
/***************/
div#rastro {
    min-height: 20px;
    padding: 4px 0 0;
    line-height: 24px;
    text-align: left;
}
div#rastro li {
    display: inline;
}
div#rastro a {
    margin-right: 3px;
    padding-left: 15px;
    width: 100%;
    background: url(\"../img/general/rastro-enlace-sig.png\") no-repeat scroll 0 60% transparent;
    color: #99989C;
    line-height: 24px;
}
div#rastro a.first {
    padding-left: 27px;
    background: url(\"../img/general/rastro-enlace.png\") no-repeat scroll 12px center transparent;
}
div#rastro ul#rastro_breadcrumb {
    margin-top: -4px;
    border-color: #FFFFFF;
}
div#rastro a.last {
    color: #023A79;
}
div#rastro a:hover {
    color: #DD3B15;
    text-decoration: none;
}

/***************/
/* Pie         */
/***************/
div#pie {
    border-top-width: 1px;
    clear: both;
    height: 115px;
    overflow: hidden;
    padding-bottom: 40px;
    padding-left: 0;
    text-align: right;
    background-color: #FFFFFF;
    background-image: url(\"../img/general/pie-fondo.png\");
    background-position: 0 0;
    background-repeat: repeat-x;
    border-color: #6D6C71;
}
div#pie a {
    display: block;
    float: left;
    margin-left: 20px;
    margin-top: 17px;
    padding-right: 20px;
    text-align: right;
    background: url(\"../img/general/contactos_flecha_off.png\") no-repeat scroll right center transparent;
    color: #FFFFFF;
}
div#pie p {
    height: 18px;
    margin-right: 0;
    margin-top: 115px;
    padding-top: 5px;
    text-align: right;
    background-color: #FFFFFF;
    border-color: #C4C4C4;
    color: #8A8A8A;
}
div#pie p a {
    display: inline;
    float: none;
    margin: 0;
    padding: 0;
    background-image: none;
    color: #8A8A8A;
}
div#pie a:hover {
    background: url(\"../img/general/contactos_flecha_on.png\") no-repeat scroll right center transparent;
    color: #FFFFFF;
}
div#pie p a:hover {
    background-image: none;
    color: #DADADA;
    text-decoration: underline;
}
div#pie p#pie_credits_txt {
    float: left;
    position: absolute;
    text-indent: -999px;
    top: -142px;
}
div#pie p#pie_credits_img {
    float: left;
    position: relative;
    top: -138px;
    width: 103px;
}

/************/
/* BANNERS  */
/************/
div#banners {
    border-bottom-width: 1px;
    clear: right;
    float: right;
    width: 165px;
    background-color: #FFFFFF;
    border-color: #B2B2B4;
    border-style: solid;
}

/************/
/* lateral  */
/************/
div#lateral_doku {
    clear: right;
    float: right;
    margin-top: 7px;
    width: 162px;
}
div#contenido {
    color: #4D4D4D;
}
div#general {
    border-width: 0 0 1px;
    float: left;
    overflow: hidden;
    position: relative;
    width: 772px;
    background-image: url(\"../img/general/sombra_izq.png\");
    background-position: left center;
    background-repeat: repeat-y;
    border-color: #FFFFFF;
}
div#menus {
    border-bottom-width: 1px;
    float: left;
    height: 1%;
    padding-bottom: 9px;
    width: 238px;
    background-color: #FFFFFF;
    border-color: #B2B2B4;
    border-style: solid;
}
div#frecuentes {
    margin-bottom: -1px;
    margin-top: -1px;
    padding-top: 0;
    background-position: left top;
}
div#pagina {
    float: right;
    margin-bottom: 10px;
    padding-bottom: 30px;
    width: 513px;
    background-color: #FFFFFF;
    background-image: url(\"../img/interior/contenido-fondo.png\");
    background-position: left 41px;
    background-repeat: no-repeat;
}
div#pagina h1#titulo_pagina {
    min-height: 34px;
    padding-left: 62px;
    padding-top: 7px;
    position: relative;
    background-color: #FFFFFF;
    background-image: url(\"../img/interior/pagina-titulo_principal.png\");
    border-bottom-style: solid;
    border-color: #DD3B02;
    color: #FFFFFF;
    font-size: 18px;
}
div#pagina h1#titulo_pagina span.texto_titulo {
    display: block;
    min-height: 26px;
    padding-left: 13px;
    padding-top: 8px;
    background-color: #000000;
    background-image: url(\"../img/interior/pagina-titulo_principal-h1.png\");
    background-position: 0 bottom;
}
div#pagina div#contenido {
    margin-top: 20px;
    padding-left: 25px;
    padding-right: 25px;
}
div#interior_pie {
    background-image: url(\"../img/general/sombra_dcha.png\");
    background-position: right center;
    background-repeat: repeat-y;
}
div.sec_interior a.doble_interno span.mas {
    display: none;
}
div.sec_interior a.doble_externo strong {
    margin-left: 0.5em;
    margin-right: 0.5em;
    padding: 0 14px 0 1px;
    background-image: url(\"../img/interior/enlace_doble-fondo_off.png\");
    background-position: right center;
    color: #0F3852;
    text-transform: uppercase;
}
div.sec_interior a.doble_externo em.mas {
    display: none;
}
div.sec_interior h1 {
    clear: both;
    margin: 25px 0 2px;
    padding-bottom: 15px;
    padding-top: 5px;
    background-color: #FFFFFF;
    background-image: url(\"../img/interior/sombra-inferior-cabecera-nivel1.png\");
    background-position: 0 bottom;
    background-repeat: repeat-x;
    color: #0F3852;
    color: red;
    margin-left: 0;
    margin-right: 0;
}
div.sec_interior h1 a {
    border-bottom-width: 1px;
    display: block;
    margin-bottom: 5px;
    padding-bottom: 2px;
    padding-left: 19px;
    background-image: url(\"../img/interior/cabecera-nivel1_bullet.png\");
    background-position: 0 6px;
    border-color: #718593;
    color: #0F3852;
    font-family: Georgia,\"Times New Roman\",Times,serif;
    font-size: 14px;
    font-style: normal;
    line-height: 24px;
    text-align: left;
}
div.sec_interior h2, div.sec_interior h3, div.sec_interior h4, div.sec_interior h5, div.sec_interior h6 {
    clear: both;
    padding-bottom: 15px;
    padding-top: 5px;
}
div.sec_interior h2 a, div.sec_interior h3 a, div.sec_interior h4 a, div.sec_interior h5 a, div.sec_interior h6 a {
    border-bottom-width: 1px;
    display: block;
    padding-bottom: 2px;
    padding-left: 30px;
    background-position: 0 center;
    border-color: #718593;
    color: #0F3852;
    font-family: Georgia,\"Times New Roman\",Times,serif;
    font-size: 14px;
    font-style: normal;
    line-height: 24px;
    text-align: left;
}
div.sec_interior img.mediacenter {
    border-width: 1px 0;
    display: block;
    margin: 20px auto;
    max-width: 485px;
    padding-bottom: 6px;
    padding-top: 6px;
}
div.sec_interior img.mediaright, div.sec_interior img.medialeft {
    border-width: 1px 0;
    margin-bottom: 2px;
    margin-top: 4px;
    padding: 6px 0;
    position: relative;
    z-index: 1;
}
div.sec_interior img.medialeft {
    float: left;
    margin-left: 0;
    margin-right: 10px;
}
div.sec_interior img.mediaright {
    float: right;
    margin-left: 10px;
    margin-right: 0;
}
div.sec_interior a.mail img {
    margin-bottom: -2px;
}
div.sec_interior p {
    clear: both;
    margin-bottom: 1em;
    margin-left: -20px;
    overflow: hidden;
    padding-left: 20px;
    position: relative;
    color: #404040;
    text-align: justify;
}
div.sec_interior blockquote {
    margin-bottom: 1em;
    margin-left: 34px;
}
div.sec_interior table {
    border-collapse: collapse;
    border-width: 1px 0 2px;
    margin-bottom: 2em;
    margin-left: 0;
    table-layout: auto;
    width: 460px;
    border-bottom-color: #DD3B15;
    border-collapse: collapse;
    border-top-color: #DD3B15;
    empty-cells: show;
    text-align: left;
    background-color: #DD3B15;
    background-position: left top;
    background-repeat: no-repeat;
}
div.sec_interior table th {
    min-height: 26px;
    padding: 4px 1em;
    color: #FFFFFF;
    font-weight: normal;
    text-transform: uppercase;
}
div.sec_interior table td {
    padding: 4px 1em;
    background-color: #FFFFFF;
    border-bottom: 1px solid #999999;
    border-top: 1px solid #999999;
    color: #404040;
}
div.sec_interior ul {
    margin-bottom: 1.2em;
    margin-top: 6px;
    list-style-position: outside;
    list-style-type: none;
}
div.sec_interior ul ul {
    margin-bottom: 0;
    margin-left: 20px;
}
div.sec_interior ul li {
    margin-bottom: 6px;
    padding-left: 10px;
    background-image: url(\"../img/interior/lista-nivel1.png\");
    background-position: left 4px;
    background-repeat: no-repeat;
    color: #404040;
    text-align: justify;
}
div.sec_interior ul li a {
    padding-right: 14px;
}
div.sec_interior ul li a.media {
    padding-left: 1px;
    padding-right: 1px;
}
div.sec_interior ul li a strong, div.sec_interior ul li a em, div.sec_interior ul li a span {
    margin-left: 10px;
}
div.sec_interior ul li a.autolink {
    padding-right: 0;
}
div.sec_interior ol {
    margin-bottom: 1.2em;
    margin-top: 6px;
}
div.sec_interior ol li {
    margin-left: 34px;
}
div.sec_interior ol li a {
    padding-right: 14px;
}
div.sec_interior ol li a.autolink {
    padding-right: 0;
}
div.sec_interior ul.departamento {
    border-width: 4px 0;
    margin: 20px 34px 20px 15px;
}
div.sec_interior ul.departamento li.level1 {
    border-width: 1px 0;
    margin: 5px 0 0;
    padding: 12px 24px 12px 30px;
}
div.sec_interior ul.departamento li.level1:first-child {
    margin-top: 0;
}
div.sec_interior ul.departamento li.level1 ul {
    border-width: 0;
    margin: 3px 0 0;
}
div.sec_interior ul.departamento li.level1 ul li {
    padding-left: 12px;
}
div.sec_interior ul.departamento li.level1 ul.departamento {
    border-width: 0;
    margin: 3px 0 0;
}
div.sec_interior ul.departamento li.level1 ul.departamento li.level2 {
    overflow: hidden;
    padding-left: 0;
}
div.sec_interior ul.departamento li.level1 ul.departamento li.level2 a {
    display: block;
    float: left;
    line-height: 14px;
    padding-left: 16px;
}
div.sec_interior ul.departamento li.level1 ul.departamento li.level2 a.doble_externo {
    padding-left: 0;
}
div.sec_interior ul.enlaces {
    border-width: 0 0 0;
    margin-right: 27px;
}
div.sec_interior ul.enlaces li {
    clear: both;
    display: block;
    margin-bottom: 0;
    overflow: hidden;
    padding-left: 0;
    padding-right: 0;
    position: relative;
}
div.sec_interior ul.enlaces li {
    margin-top: 3px;
}
div.sec_interior ul.enlaces li div.li {
    border-bottom-width: 1px;
    overflow: hidden;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-top: 5px;
}
div.sec_interior ul.enlaces li a {
    border-width: 0 0 0;
    padding: 2px 15px 2px 2px;
}
div.sec_interior ul.enlaces li div.li a {
}
div.sec_interior ul.enlaces ul.enlaces {
    margin-top: -1px;
}
div.sec_interior ul.enlaces li {
}
div.sec_interior ul.enlaces ul.enlaces li {
    width: 438px;
}
div.sec_interior ul.enlaces ul.enlaces ul.enlaces li {
    width: 418px;
}
div.sec_interior ul.enlaces li a.doble_interno span.mas {
    display: none;
}
div.sec_interior ul.enlaces li a.doble_externo {
    border-bottom-width: 0;
    display: block;
    height: 100%;
    margin: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 56px;
}
div.sec_interior ul.enlaces li a.doble_externo strong {
    bottom: 4px;
    display: block;
    margin-left: 8px;
    position: absolute;
}
div.sec_interior ul.enlaces li a.doble_externo em {
    display: none;
}
div.sec_interior ul.enlaces li a.doble_interno {
    width: 354px;
}
div.sec_interior ul.enlaces ul.enlaces li a.doble_interno {
    width: 334px;
}
div.sec_interior ul.enlaces ul.enlaces ul.enlaces li a.doble_interno {
    width: 314px;
}
div.sec_interior ul.noenlaces {
    border-width: 1px 0 0;
    margin-right: 27px;
}
div.sec_interior ul.noenlaces li {
    border-width: 0 0 1px;
    clear: both;
    display: block;
    margin-bottom: 0;
    padding-left: 0;
    padding-right: 0;
    position: relative;
}
div.sec_interior ul.noenlaces li div.li {
    position: relative;
}
div.sec_interior ul.noenlaces ul.noenlaces {
    margin-top: -1px;
}
div.sec_interior ul.noenlaces li {
    width: 458px;
}
div.sec_interior ul.noenlaces ul.noenlaces li {
    width: 438px;
}
div.sec_interior ul.noenlaces ul.noenlaces ul.noenlaces li {
    width: 418px;
}
div.sec_interior div.footnotes {
    margin-top: 3em;
    padding-top: 0.2em;
}
div.sec_interior a.fn_top {
    position: relative;
    top: 0;
}
div.sec_interior a.doble_externo em, div.sec_interior a.doble_externo strong {
    font-style: normal;
    font-weight: normal;
}
div.sec_interior a.doble_externo {
    font-size: 80%;
    text-decoration: none;
    vertical-align: baseline;
}
div.sec_interior a.doble_externo strong {
}
div.sec_interior a.doble_externo:hover strong {
    background-image: url(\"../img/interior/enlace_doble-fondo_on.png\");
    color: #DD3B15;
}
div.sec_interior a.autolink {
    text-decoration: none;
}
div.sec_interior h2 {
    background-position: 0 32px;
    background-repeat: repeat-x;
    color: #0F3852;
}
div.sec_interior h2 a, div.sec_interior h3 a, div.sec_interior h4 a, div.sec_interior h5 a, div.sec_interior h6 a {
}
div.sec_interior h3, div.sec_interior h4, div.sec_interior h5, div.sec_interior h6 {
    background-image: url(\"../img/interior/cabecera-nivel2.png\");
    background-position: 0 4px;
    color: #0F3852;
    font-size: 13px;
}
div.sec_interior img.mediacenter, div.sec_interior img.medialeft, div.sec_interior img.mediaright {
    border-color: #757575;
    border-style: solid;
}
div.sec_interior p {
}
div.sec_interior p a {
    color: #DD3B02;
}
div.sec_interior p a:hover {
    background-color: #DD3B02;
    color: #FFFFFF;
}
div.sec_interior p em.u {
    font-style: normal;
    text-decoration: underline;
}
div.sec_interior p.imagen_aislada {
    background-image: none;
}
div.sec_interior p.imagen_aislada img {
    max-width: 440px;
}
div.sec_interior table td strong {
    text-transform: uppercase;
}
div.sec_interior table td.leftalign, div.sec_interior table th.leftalign {
    text-align: left;
}
div.sec_interior table td.centeralign, div.sec_interior table th.centeralign {
    text-align: center;
}
div.sec_interior table td.rightalign, div.sec_interior table th.rightalign {
    text-align: right;
}
div.sec_interior table td.par {
    background-color: #F0F0F0;
}
div.sec_interior table tr:hover td {
    background-color: #FBDCCC;
    color: #DD3B15;
}
div.sec_interior table.titulacion tr td {
    background-color: #F0F0F0;
    color: #404040;
}
div.sec_interior ul li a {
    background-image: url(\"../img/interior/lista_enlaces-nivel1-flecha_off.gif\");
    background-position: right center;
    color: #404040;
}
div.sec_interior ul li a:hover {
    background-color: #DD3B15;
    background-image: url(\"../img/interior/lista_enlaces-nivel1-flecha_on.png\");
    color: #FFFFFF;
}
div.sec_interior ul li a.media:hover {
    background: none repeat scroll 0 0 transparent;
}
div.sec_interior ul li a.autolink {
    background: none repeat scroll 0 0 transparent;
}
div.sec_interior ul li a.autolink:hover {
    background-color: #DD3B02;
}
div.sec_interior ol {
    list-style-position: outside;
    list-style-type: decimal;
}
div.sec_interior ol li {
    background-image: none;
    color: #404040;
    text-align: justify;
}
div.sec_interior ol li a {
    background-image: url(\"../img/interior/lista-flecha-nivel1.png\");
    background-position: right center;
    color: #404040;
}
div.sec_interior ol li a:hover {
    color: #E65218;
    text-decoration: underline;
}
div.sec_interior ol li a.autolink {
    background-image: none;
}
div.sec_interior ul.departamento {
    border-color: #DD3B02;
}
div.sec_interior ul.departamento li.level1 {
    background-color: #EBEBEB;
    background-image: none;
    border-color: #98858E;
    color: #404040;
    text-transform: uppercase;
}
div.sec_interior ul.departamento li.level1 ul {
    text-transform: none;
}
div.sec_interior ul.departamento li.level1 ul li {
    background-image: url(\"../img/interior/lista_departamento-sublista_item.png\");
    background-position: 0 5px;
}
div.sec_interior ul.departamento li.level1 ul li a {
    background-image: url(\"../img/interior/lista_departamento-sublista_enlace.png\");
}
div.sec_interior ul.departamento li.level1 ul li a:hover {
    background-image: url(\"../img/interior/lista_enlaces-nivel1-flecha_on.png\");
}
div.sec_interior ul.departamento li.level1 ul li a.autolink {
    background: none repeat scroll 0 0 transparent;
}
div.sec_interior ul.departamento li.level1 ul li a.autolink:hover {
    background-color: #DD3B02;
}
div.sec_interior ul.departamento li.level1 ul li a.doble_externo {
    background-image: none;
    text-decoration: none;
}
div.sec_interior ul.departamento li.level1 ul li a.doble_externo:hover {
    text-decoration: none;
}
div.sec_interior ul.departamento li.level1 ul.departamento li.level2 {
    background-image: none;
}
div.sec_interior ul.departamento li.level1 ul.departamento li.level2 a {
    background-color: #EBEBEB;
    background-image: url(\"../img/interior/lista_departamento-enlace_destacado_off.png\");
    background-position: 0 2px;
    color: #404040;
    text-decoration: none;
}
div.sec_interior ul.departamento li.level1 ul.departamento li.level2 a:hover {
    background-image: url(\"../img/interior/lista_departamento-enlace_destacado_on.png\");
    color: #DD3B15;
    text-decoration: none;
}
div.sec_interior ul.departamento li.level1 ul.departamento li.level2 a.doble_externo, div.sec_interior ul.departamento li.level1 ul.departamento li.level2 a.doble_externo:hover {
    background-image: none;
}
div.sec_interior ul.enlaces {
    border-color: #B6B5B8;
    list-style-type: none;
}
div.sec_interior ul.enlaces li {
    background-image: none;
}
div.sec_interior ul.enlaces li div.li em {
    background-image: url(\"../img/interior/lista-fondo.gif\");
    background-position: 0 50%;
    background-repeat: no-repeat;
    font-style: normal;
    font-weight: normal;
}
div.sec_interior ul.enlaces li div.li {
    background-image: url(\"../img/interior/lista_enlaces-nivel1_off.png\");
    background-position: left center;
    border-color: #B6B5B8;
    border-style: solid;
}
div.sec_interior ul.enlaces li a {
    background-color: #FFFFFF;
    border-color: #B6B5B8;
    color: #DD3B02;
    line-height: 12px;
    text-align: left;
    text-decoration: none;
}
div.sec_interior ul.enlaces li a:hover {
    background-color: #DD3B02;
    color: #FFFFFF;
    text-decoration: none;
}
div.sec_interior ul.noenlaces {
    border-color: #B6B5B8;
    list-style-type: none;
}
div.sec_interior ul.noenlaces li {
    background-image: none;
    border-color: #B6B5B8;
}
div.sec_interior ul.noenlaces li div.li em {
    background-image: url(\"../img/interior/lista-fondo.gif\");
    background-position: 6px 50%;
    background-repeat: no-repeat;
    font-style: normal;
    font-weight: normal;
}
div.sec_interior ul.enlaces li a.doble_externo, div.sec_interior ul.enlaces ul.enlaces li a.doble_externo, div.sec_interior ul.enlaces ul.enlaces ul.enlaces li a.doble_externo {
    background-image: url(\"../img/interior/enlace_doble-lista_enlaces-externo_separador.gif\");
    background-position: left bottom;
}
div.sec_interior ul.enlaces li a.doble_externo:hover, div.sec_interior ul.enlaces ul.enlaces li a.doble_externo:hover, div.sec_interior ul.enlaces ul.enlaces ul.enlaces li a.doble_externo:hover {
    background-color: #DD3B02;
    background-image: url(\"../img/interior/enlace_doble-lista_enlaces-externo_separador.gif\");
}
div.sec_interior ul.enlaces li a, div.sec_interior ul.enlaces li a.doble_interno {
    background-image: url(\"../img/interior/lista_enlaces-nivel1-flecha_off.gif\");
}
div.sec_interior ul.enlaces li.level2 div.li {
    background-image: url(\"../img/interior/lista_enlaces-nivel2-circulo_off.png\");
}
div.sec_interior ul.enlaces li.level3 div.li {
    background-image: url(\"../img/interior/lista_enlaces-nivel3-circulo_off.png\");
}
div.sec_interior ul.enlaces li a:hover, div.sec_interior ul.enlaces li a.doble_interno:hover {
    background-image: url(\"../img/interior/lista_enlaces-nivel1-flecha_on.png\");
}
div.sec_interior ul.enlaces ul.enlaces li a, div.sec_interior ul.enlaces ul.enlaces li a.doble_interno {
    background-image: url(\"../img/interior/lista_enlaces-nivel2_off.gif\");
    color: #6D6C71;
}
div.sec_interior ul.enlaces ul.enlaces li a:hover, div.sec_interior ul.enlaces ul.enlaces li a.doble_interno:hover {
    background-color: #6D6C71;
    background-image: url(\"../img/interior/lista_enlaces-nivel2_on.png\");
    color: #FFFFFF;
}
div.sec_interior ul.enlaces ul.enlaces ul.enlaces li a, div.sec_interior ul.enlaces ul.enlaces ul.enlaces li a.doble_interno {
    background-image: url(\"../img/interior/lista_enlaces-nivel3_off.png\");
    color: #A7A7AA;
}
div.sec_interior ul.enlaces ul.enlaces ul.enlaces li a:hover, div.sec_interior ul.enlaces ul.enlaces ul.enlaces li a.doble_interno:hover {
    background-color: #A7A7AA;
    background-image: url(\"../img/interior/lista_enlaces-nivel3_on.png\");
    color: #FFFFFF;
}
div.sec_interior div.footnotes {
    border-color: #826C75;
    color: #404040;
}
div.sec_interior div.footnotes a {
    color: #543342;
}
div.sec_interior div.footnotes a:hover {
    color: #DD3B15;
}
div.sec_interior a.fn_top {
    font-family: Georgia;
    font-size: 10px !important;
    text-decoration: none;
}
div.mod-banners ul {
    display: block;
    margin-top: 7px;
    padding-left: 0;
    z-index: 2;
}
div.mod-banners ul li {
    border-bottom-width: 0;
    border-top-width: 0;
    display: block;
    width: 100%;
}
div.mod-banners ul li a.banner {
    display: block;
    margin-bottom: 10px;
    overflow: hidden;
    padding-left: 12px;
    padding-right: 21px;
    padding-top: 5px;
    position: relative;
    z-index: -1;
}
div.mod-banners ul li:hover {
    position: relative;
    z-index: 0;
}
div.mod-banners ul li a.banner strong {
    display: block;
}
div.mod-banners ul li a.banner strong, div.mod-banners ul li a.banner em, div.mod-banners ul li a.banner span {
    display: block;
}
div.mod-banners ul li.model-resaltado-01 a.banner {
    height: 64px;
    margin-top: 0;
    z-index: 0;
}
div.mod-banners ul li.model-resaltado-02 a.banner {
    height: 133px;
    margin-top: 0;
    z-index: 0;
}
div.mod-banners ul li.model-resaltado-01:hover, div.mod-banners ul li.model-resaltado-02:hover {
    position: relative;
    z-index: 2;
}
div.mod-banners ul li.model-resaltado-01 a.banner strong, div.mod-banners ul li.model-resaltado-02 a.banner strong, div.mod-banners ul li.model-resaltado-01 a.banner em, div.mod-banners ul li.model-resaltado-02 a.banner em, div.mod-banners ul li.model-resaltado-01 a.banner span, div.mod-banners ul li.model-resaltado-02 a.banner span {
}
div.mod-banners ul li.model-resaltado-01 a.banner strong, div.mod-banners ul li.model-resaltado-02 a.banner strong {
    border-bottom-width: 1px;
    display: block;
    padding-bottom: 4px;
    width: 153px;
}
div.mod-banners a.admin_edit {
    display: block;
    margin-left: 9px;
    margin-top: 3px;
}
div.mod-banners ul li {
    background-image: none !important;
    line-height: 120%;
}
div.mod-banners ul li strong, div.mod-banners ul li em {
    font-style: normal;
    font-weight: normal;
}
div.mod-banners ul li.dont_showtext a.banner * {
    text-indent: -9999em;
}
div.mod-banners ul li a.banner {
    background-color: #FFFFFF;
    background-position: 0 0;
}
div.mod-banners ul li a.banner strong {
    border-color: #B2B2B4;
    border-style: solid;
    color: #FFFFFF;
    font-weight: bold;
}
div.mod-banners ul li a.banner:hover strong {
    color: #FFFFFF;
}
div.mod-banners ul li a.banner em {
    color: #4A677A;
}
div.mod-banners ul li a.banner:hover em {
    color: #4A677A;
}
div.mod-banners ul li a.banner span {
    color: #4A677A;
}
div.mod-banners ul li a.banner:hover span {
    color: #4A677A;
}
div.mod-banners ul li a.banner:hover {
    background-color: #FFFFFF;
    text-decoration: none !important;
}
div.mod-banners ul li.model-resaltado-01 a.banner strong {
    color: #FFFFFF;
}
div.mod-banners ul li.model-resaltado-01 a.banner:hover strong {
    color: #FFFFFF;
}
div.mod-banners ul li.model-resaltado-01 a.banner em {
    color: #4A677A;
}
div.mod-banners ul li.model-resaltado-01 a.banner:hover em {
    color: #4A677A;
}
div.mod-banners ul li.model-resaltado-01 a.banner span {
    color: #4A677A;
}
div.mod-banners ul li.model-resaltado-01 a.banner:hover span {
    color: #4A677A;
}
div.mod-banners ul li.model-resaltado-02 a.banner strong {
    color: #FFFFFF;
}
div.mod-banners ul li.model-resaltado-02 a.banner:hover strong {
    color: #FFFFFF;
}
div.mod-banners ul li.model-resaltado-02 a.banner em {
    color: #4A677A;
}
div.mod-banners ul li.model-resaltado-02 a.banner:hover em {
    color: #4A677A;
}
div.mod-banners ul li.model-resaltado-02 a.banner span {
    color: #4A677A;
}
div.mod-banners ul li.model-resaltado-02 a.banner:hover span {
    color: #4A677A;
}
div.mod-forms fieldset {
    border-bottom-width: 4px;
    border-top-width: 5px;
    position: relative;
    width: 434px;
}
div.mod-forms fieldset h1, div.mod-forms fieldset h2, div.mod-forms fieldset h3 {
    margin-left: 0;
    margin-right: 0;
}
div.mod-forms fieldset h3 {
    border-top-width: 1px;
    margin-bottom: 6px;
}
div.mod-forms fieldset label, div.mod-forms fieldset span.label, div.mod-forms fieldset div.label {
    border-bottom-width: 1px;
    display: block;
    overflow: hidden;
    padding: 6px 10px;
}
div.mod-forms fieldset span.label-no-border, div.mod-forms fieldset div.label-no-border {
    border-bottom-width: 0;
}
div.mod-forms fieldset span.label label, div.mod-forms fieldset div.label label {
    border-bottom-width: 0;
    margin-bottom: 5px;
    margin-left: 100px;
    padding-bottom: 0;
    padding-top: 0;
}
div.mod-forms fieldset span.label span.container, div.mod-forms fieldset div.label span.container {
    display: block;
    float: left;
    width: 298px;
}
div.mod-forms fieldset span.label span.container label, div.mod-forms fieldset div.label span.container label {
    margin-left: 0;
    padding-left: 0;
}
div.mod-forms fieldset label span.etiqueta, div.mod-forms fieldset span.label span.etiqueta, div.mod-forms fieldset div.label span.etiqueta {
    display: block;
    float: left;
    margin-right: 16px;
    width: 84px;
}
div.mod-forms fieldset label span.mensaje, div.mod-forms fieldset span.label span.mensaje, div.mod-forms fieldset div.label span.mensaje {
    display: block;
    margin-left: 100px;
}
div.mod-forms fieldset input.error, div.mod-forms fieldset textarea.error, div.mod-forms fieldset select.error {
    border-width: 1px;
}
div.mod-forms fieldset input, div.mod-forms fieldset textarea {
    display: block;
    padding-left: 3px;
}
div.mod-forms fieldset textarea, div.mod-forms fieldset input.text, div.mod-forms fieldset input.file {
    margin-left: 100px;
    width: 295px;
}
div.mod-forms fieldset a.agregar_image {
    margin-left: 100px;
    margin-top: 10px;
}
div.mod-forms fieldset span.label label.radio {
    margin-left: 100px;
}
div.mod-forms fieldset span.label label.radio_first {
    margin-left: 0;
}
div.mod-forms fieldset input.radio {
    display: inline;
    margin-right: 3px;
    vertical-align: middle;
}
div.mod-forms fieldset input.checkbox {
    display: inline;
    margin-bottom: 3px;
    margin-right: 3px;
    vertical-align: middle;
}
div.mod-forms fieldset select {
    max-width: 314px;
}
div.mod-forms fieldset input.hidden {
    display: none;
}
div.mod-forms fieldset label.radioimage {
    float: left;
    padding-left: 0;
}
div.mod-forms fieldset span.radioimages label.radioimage_first {
    margin-left: 0;
    padding-top: 4px;
}
div.mod-forms fieldset label.radioimage img {
    margin-right: 3px;
    vertical-align: middle;
}
div.mod-forms fieldset input.radioimage {
    display: inline;
    margin-right: 3px;
    vertical-align: middle;
}
div.mod-forms fieldset input.pathselector {
    display: inline;
    margin-right: 3px;
    vertical-align: middle;
}
div.mod-forms fieldset span.file_infobox {
    display: block;
    margin-left: 100px;
}
div.mod-forms fieldset span.file_infobox em {
    display: block;
    margin-left: 10px;
}
div.mod-forms fieldset span.file_infobox input.file_remove {
    display: block;
    margin-left: 10px;
}
div.mod-forms fieldset span.mensaje_reemplazar {
    margin-top: 10px;
}
div.mod-forms fieldset span.error {
    display: block;
    margin-left: 100px;
}
div.mod-forms fieldset input.submit_img {
    display: block;
    float: right;
    height: 25px;
    padding: 0;
    width: 85px;
}
div.mod-forms fieldset input.cancel_img {
    display: block;
    float: left;
    height: 25px;
    padding: 0;
    width: 77px;
}
div.mod-forms fieldset .uploadprogress {
    border: 1px solid;
    display: block;
    height: 15px;
    margin: auto;
    padding: 0;
    text-align: right;
    width: 150px;
}
div.mod-forms fieldset #info_upload {
    height: 15px;
    padding: 0;
    width: 0;
}
div.mod-forms div.forms_big fieldset {
    width: 493px;
}
div.mod-forms div.forms_big fieldset span.label span.container, div.mod-forms div.forms_big fieldset div.label span.container {
    display: block;
    float: left;
    width: auto;
}
div.mod-forms div.forms_big fieldset span.etiqueta {
    display: block;
    float: none;
    margin-bottom: 3px;
    margin-right: 0;
    width: 100%;
}
div.mod-forms div.forms_big fieldset textarea, div.mod-forms div.forms_big fieldset input.text, div.mod-forms div.forms_big fieldset input.textarea {
    margin-left: 0;
    width: 450px;
}
div.mod-forms div.forms_big fieldset span.error {
    display: block;
    margin-left: 0;
}
div.mod-forms div.forms_big fieldset label.select {
    margin-left: 0;
    padding-left: 0;
}
div.mod-forms div.forms_big fieldset label.select select {
    max-width: 470px;
}
div.mod-forms div.forms_big fieldset span.etiqueta_breadcrumb {
    display: block;
    float: left;
    margin-bottom: 3px;
    margin-right: 0;
    width: 95%;
}
div.mod-forms fieldset input#breadcrumb_rename {
    display: block;
    margin-top: 9px;
    padding-left: 3px;
}
div.mod-forms fieldset {
    background-color: #E5E5E5;
    border-color: #DD3B02;
    border-style: solid;
}
div.mod-forms fieldset label, div.mod-forms fieldset div.label, div.mod-forms fieldset span.label {
    border-color: #808080;
    border-style: solid;
}
div.mod-forms fieldset span.etiqueta {
    color: #404040;
    text-align: right;
}
div.mod-forms fieldset .label-clonable-container .label .etiqueta {
    background-image: none;
    padding-left: 0;
}
div.mod-forms fieldset span.error {
    color: #F01616;
}
div.mod-forms fieldset input.error, div.mod-forms fieldset textarea.error, div.mod-forms fieldset select.error {
    border-color: #F01616;
    border-style: dotted;
}
div.mod-forms fieldset input, div.mod-forms fieldset textarea {
    color: #404040;
    font-size: 1em;
}
div.mod-forms fieldset textarea {
    font-family: sans-serif;
    font-size: 1em;
}
div.mod-forms fieldset input.submit_img {
    background-image: url(\"../img/interior/formulario-enviar_off.png\");
    outline: medium none;
    text-indent: -9999em;
}
div.mod-forms fieldset input.submit_img:hover {
    background-image: url(\"../img/interior/formulario-enviar_on.png\");
    outline: medium none;
}
div.mod-forms fieldset input.submit_img:active {
    background-image: url(\"../img/interior/formulario-enviar_on.png\");
    outline: medium none;
}
div.mod-forms fieldset input.cancel_img {
    background-image: url(\"../img/interior/formulario-cancelar_off.png\");
    outline: medium none;
    text-indent: -9999em;
}
div.mod-forms fieldset input.cancel_img:hover {
    background-image: url(\"../img/interior/formulario-cancelar_on.png\");
    outline: medium none;
}
div.mod-forms fieldset input.cancel_img:active {
    background-image: url(\"../img/interior/formulario-cancelar_on.png\");
    outline: medium none;
}
div.mod-forms fieldset .uploadprogress {
    border-color: #808080;
}
div.mod-forms fieldset #info_upload {
    background-color: #DD3B02;
}
div.mod-forms div.forms_big fieldset span.etiqueta, div.mod-forms div.forms_big fieldset span.etiqueta_breadcrumb {
    font-size: 110%;
    text-align: left;
}
div.mod-forms form#form_edit input, div.mod-forms form#form_edit textarea {
    font-size: 1.091em;
}
.debug + br, .debugF + br, .debugFM + br, .debugC + br, .debugW + br {
    display: none;
}
.debug, .debugF, .debugFM, .debugC, .debugW {
    border-bottom-style: dashed;
    border-bottom-width: 1px;
    border-left-style: solid;
    border-left-width: 3px;
    display: block;
    font-size: 85%;
    margin-left: 2px;
    padding: 2px;
}
.debug {
    border-color: black;
    color: black;
}
.debugF {
    border-color: blue;
    color: blue;
}
.debugFM {
    color: #800000;
}
.debugC {
    border-color: red;
    color: red;
}
.debugW {
    border-color: green;
    color: green;
}
div.mod-forms fieldset textarea, div.mod-forms fieldset input.text, div.mod-forms fieldset input.file {
    border: 1px solid #DD3B02;
}
div.mod-menu_secciones ul {
    border-right-width: 1px;
    margin-bottom: 13px;
    padding-bottom: 0;
    width: 238px;
}
div.mod-menu_secciones ul li a {
    border-bottom-width: 1px;
    border-top-width: 1px;
    display: block;
    margin-top: -1px;
    min-height: 19px;
    padding: 6px 46px 4px 38px;
}
div.mod-menu_secciones ul li.tipo1, div.mod-menu_secciones ul li.tipo1-selected {
    padding-left: 28px;
    width: 210px;
}
div.mod-menu_secciones ul li.tipo1-selected a, div.mod-menu_secciones ul li.tipo1-selected a:hover {
}
div.mod-menu_secciones a.admin_edit {
    display: block;
    margin-bottom: 3px;
    margin-left: 14px;
    margin-top: 3px;
}
div.mod-menu_secciones ul {
    border-color: #B2B2B4;
    border-style: solid;
}
div.mod-menu_secciones ul li a {
    background-position: 0 center;
    font-family: Verdana,sans-serif;
    text-align: right;
}
div.mod-menu_secciones ul li.tipo1 a, div.mod-menu_secciones ul ul li.tipo1 a {
    background-color: #FFFFFF;
    background-image: url(\"../img/general/menu-subitem_off.png\");
    background-position: 0 center;
    border-color: #AAABAF;
    color: #6D6C71;
}
div.mod-menu_secciones ul li.tipo1 a:hover, div.mod-menu_secciones ul ul li.tipo1 a:hover {
    background-color: #FFFFFF;
    background-image: url(\"../img/general/menu-subitem_on.png\");
    border-color: #AAABAF;
    color: #0F3852;
}
div.mod-menu_secciones ul li.tipo2 a, div.mod-menu_secciones ul ul li.tipo2 a {
    background-color: #FFFFFF;
    background-image: url(\"../img/general/menu-item_off.png\");
    border-color: #AAABAF;
    color: #024EA4;
}
div.mod-menu_secciones ul li.tipo2 a:hover, div.mod-menu_secciones ul ul li.tipo2 a:hover {
    background-color: #FFFFFF;
    background-image: url(\"../img/general/menu-item_on.png\");
    color: #024EA4;
}
div.mod-menu_secciones ul li.tipo2-selected a, div.mod-menu_secciones ul li.tipo2-selected a:hover {
    background-color: #FFFFFF;
    background-image: url(\"../img/general/menu-item_actual_off.png\");
    background-position: 0 center;
    border-color: #AAABAF;
    color: #FFFFFF;
}
div.mod-menu_secciones ul li.tipo1-selected a, div.mod-menu_secciones ul li.tipo1-selected a:hover {
    background-color: #FFFFFF;
    background-image: url(\"../img/general/menu-subitem_on.png\");
    border-color: #AAABAF;
    color: #0F3852;
}
div.mod-menu_secciones ul li.adicional1 a {
    background-image: url(\"../img/general/menu-item_buscador_off.png\");
    border-color: #AAABAF;
    color: #6D6C71;
}
div.mod-menu_secciones ul li.adicional1 a:hover {
    background-image: url(\"../img/general/menu-item_buscador_on.png\");
    border-color: #AAABAF;
    color: #FFFFFF;
}
div.mod-menu_secciones ul li.adicional1-selected a, div.mod-menu_secciones ul li.adicional1-selected a:hover {
    background-image: url(\"../img/general/menu-item_buscador_on.png\");
    border-color: #AAABAF;
    color: #FFFFFF;
}
div.related_information, div.related_information_all_tags, div.related_information_tag_cloud {
    clear: right;
    float: right;
    margin-bottom: 5px;
    margin-top: 3px;
    padding-left: 10px;
    width: 163px;
}
div.related_information h1, div.related_information_all_tags h1, div.related_information_tag_cloud h1 {
    background-image: none;
    font-size: 12px;
    margin: 0;
    width: 153px;
}
div.related_information ul {
    margin: 0;
    overflow: hidden;
    width: 153px;
}
div.related_information li {
    border-top: 1px solid;
    display: block;
    float: left;
    margin: 4px 4px 0;
    overflow: hidden;
    width: 145px;
}
div.related_information li strong {
    display: block;
    margin-bottom: 0;
}
div.related_information li span {
    display: block;
    font-size: 9px;
}
div.related_information li span.relatedfoto {
    background-position: 0 50%;
    border: 3px solid;
    float: left;
    height: 60px;
    margin-bottom: 3px;
    margin-right: 3px;
    margin-top: 3px;
    width: 60px;
}
div.related_information, div.related_information_all_tags, div.related_information_tag_cloud {
    background-color: transparent;
}
div.related_information li span.relatedfoto {
    border-color: #C8C8C8;
}
div.related_information div.admin_tags form input {
    border-color: #404040;
}
div.related_information div.admin_tags form label {
    font-weight: bold;
}
div.related_information li span {
    color: #404040;
}
div.related_information li.app_tag_eliminado {
    background-color: #FFCCCC;
}
div.related_information li strong a {
    color: #404040;
}
div.related_information h1, div.related_information_all_tags h1 div.related_information_tag_cloud h1 {
    background-image: none;
    border-color: #404040;
    color: #404040;
}
div.newest_content {
    clear: both;
    margin: 20px 15px 0;
    overflow: hidden;
    padding: 15px;
}
div.newest_content span {
    float: left;
    margin-right: 5px;
    padding-top: 3px;
}
div.newest_content div.language {
    float: left;
    margin-right: 5px;
}
div.newest_content div.language img {
    float: left;
}
div.newest_content div.language div.lang-separator {
    float: left;
}
div.newest_content div.language a {
    display: inline-block;
    float: left;
    padding-top: 5px;
}
div.newest_content {
    background-color: transparent;
}
div.page-list-onlyonepage {
    display: none;
}
div.page-list {
    clear: left;
    display: block;
    float: left;
    margin-bottom: 15px;
    margin-top: 15px;
}
div.page-list p {
    display: none;
}
div.page-list a.pager_navigation {
    display: block;
    float: left;
    height: 16px;
    text-indent: -9999em;
    width: 16px;
}
div.page-list a.pager_hidden {
    display: none;
}
div.page-list a.pager_prev_hidden {
    margin-left: -16px;
}
div.page-list a.pager_next_hidden {
    margin-left: -16px;
    margin-right: 16px;
}
div.page-list ul {
    clear: none;
    display: inline;
    margin: 0;
    padding: 0;
    width: auto;
}
div.page-list ul li {
    clear: none;
    display: block;
    float: left;
    margin-left: 2px;
    margin-right: 2px;
    margin-top: 0;
    padding: 0 5px;
}
div.page-list ul li a {
    display: block;
    height: 16px;
    line-height: 16px;
    padding: 0;
    width: 16px;
}
div.page-list a.pager_navigation {
    background-position: center 80%;
}
div.page-list a.pager_prev {
    background: url(\"../img/general/paginador-anterior-off.png\") no-repeat scroll 0 2px transparent;
}
div.page-list a.pager_prev:hover {
    background: url(\"../img/general/paginador-anterior-on.png\") no-repeat scroll 0 2px transparent;
}
div.page-list a.pager_next {
    background: url(\"../img/general/paginador-siguiente-off.png\") no-repeat scroll 0 2px transparent;
}
div.page-list a.pager_next:hover {
    background: url(\"../img/general/paginador-siguiente-on.png\") no-repeat scroll 0 2px transparent;
}
div.page-list a.pager_hidden {
    background-image: none;
}
div.page-list ul li {
    background-image: none;
}
div.page-list ul li a {
    background: none repeat scroll 0 0 transparent;
    text-align: center;
}
div.page-list ul li a:hover {
    background: none repeat scroll 0 0 transparent;
}
div.page-list ul li.current_page a {
    background-color: #DD3B15;
    color: #FFFFFF;
}
div.page-list ul li.current_page a:hover {
    background-color: #DD3B15;
    color: #FFFFFF;
    text-decoration: none;
}
div.sec_interior h1 {
}
div.mod-forms div.forms_big fieldset {
    width: 510px;
}
div.borde-exterior {
    background-image: url(\"../img/interior/cabecera-nivel1_fondo.png\");
    background-repeat: repeat-x;
    height: 12px;
    width: 519px;
}
div.borde-ficha {
    background-image: url(\"../img/interior/cabecera-nivel1_fondo.png\");
    background-repeat: repeat-x;
    height: 12px;
    width: 529px;
}

.fields td {
    width: 70%;
}
.fields td.titulo {
    width: 30%;
}
div.sec_interior table p {
    margin-bottom: 0;
    margin-left: 0;
    padding-left: 0;
}
div.file img {
    margin-right: 5px;
    margin-top: 0;
    width: auto;
}

div.genericfield div.file {
    float: left;
    padding-left: 22px;
}

li.model-resaltado-01 a.banner {
    background-image: url(\"../img/banners/resaltado-01_off.png\");
}
li.model-resaltado-01 a.banner:hover {
    background-image: url(\"../img/banners/resaltado-01_on.png\");
}
li.model-resaltado-02 a.banner {
    background-image: url(\"../img/banners/resaltado-02_off.png\");
}
li.model-resaltado-02 a.banner:hover {
    background-image: url(\"../img/banners/resaltado-02_on.png\");
}

.select2-selection__rendered {
  width: 100%;
  height: 100%;
}

.select2-selection--multiple {
  width: 100%;
  height: 100%;
}


.ui-menu { width: 150px; }";
    }

    public function getTemplateName()
    {
        return "css/style.css";
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
        return new Twig_Source("", "css/style.css", "/home/ubuntu/Escritorio/todo/TFG-LRR2/app/Resources/views/css/style.css");
    }
}
