<?php

/* base.html.twig.php */
class __TwigTemplate_855f28dbeeb203f11982c5dc60433d1dcaf0fed66505c40d34c3ec8ee1eee2c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'side' => array($this, 'block_side'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0a61f547283c5ba745c8cbab6d0e8fc1a7742f9075f4a4e77849f8640f7d767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a61f547283c5ba745c8cbab6d0e8fc1a7742f9075f4a4e77849f8640f7d767->enter($__internal_c0a61f547283c5ba745c8cbab6d0e8fc1a7742f9075f4a4e77849f8640f7d767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig.php"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"es\" xml:lang=\"es\" >
\t<head>
\t\t<title>NOMBRE DEPARTAMENTO | Universidad de Granada</title>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta name=\"description\" content=\"Universidad de Granada - NOMBRE DEPARTAMENTO\" />
\t\t<meta name=\"keywords\" content=\"universidad,granada,NOMBRE DEPARTAMENTO\" />
\t\t<meta http-equiv=\"content-language\" name=\"language\" content=\"es\" />
\t\t<link rel=\"shortcut icon\" href=\"/img/favicon.ico\" type=\"image/vnd.microsoft.icon\" />

\t\t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">

\t\t<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
\t\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

\t\t<!-- Latest compiled and minified CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

\t\t<!-- Optional theme -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

\t\t<!-- Latest compiled and minified JavaScript -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

\t\t<link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@0.6.2/build/pure-min.css\" integrity=\"sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD\" crossorigin=\"anonymous\">
\t\t<style>
\t\t\t.ui-menu { width: 150px; }
\t\t</style>
\t\t<script>
\t  \$( function() {
\t    \$( \".datepicker\" ).datepicker();
\t  } );
\t  </script>
\t\t<script>
\t\t\$(\"#form_rama\").change(function() {
\t\t\t\tvar data = {
\t\t\t\t\trama_id: \$(this).val()
\t\t\t\t};
\t\t\t\t\$.ajax({
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\turl: '";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_disciplinas");
        echo "',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(data,url) {
\t\t\t\t\t\t\t\tvar \$rama_selector = \$('#form_disciplina');

\t\t\t\t\t\t\t\t\$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
\t\t\t\t\t\t\t\tfor (var i = 2, total = data.length; i < total;) {
\t\t\t\t\t\t\t\t\t\t\$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
\t\t\t\t\t\t\t\t\t\ti=i+2;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t});
\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t    \$(\"#search\").autocomplete({
\t\t        source: '";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oferta_search");
        echo "',
\t\t            focus: function( event, ui ) {
\t\t            \$( \"#search\" ).val( ui.item.title ); // uncomment this line if you want to select value to search box
\t\t            return false;
\t\t        },
\t\t        maxShowItems: 0, // Make list height fit to 5 items when items are over 5.
\t\t        select: function( event, ui ) {
\t\t            window.location.href = ui.item.url;;
\t\t        }
\t\t    }).data( \"ui-autocomplete\" )._renderItem = function( ul, item ) {
\t\t        var inner_html = '<a href=\"' + 'http://tfg.local/app_dev.php/showOferta/?id=' + item.id +  '\" ><div class=\"list_item_container\"><div class=\"image\"><img src=";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/brochures/oferta"), "html", null, true);
        echo "/' + item.image + ' ></div><div class=\"label\"><h4><b>' + item.title + '</b></h4></div><p>' + item.description + '</p></div></a>';
\t\t        return \$( \"<li></li>\" )
\t\t                .data( \"item.autocomplete\", item )
\t\t                .append(inner_html)
\t\t                .appendTo( ul );
\t\t    };
\t\t});
\t\t</script>
<script src=\"https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js\" type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/3.0.10/adapters/mootools-adapter.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>

\t  <link rel=\"stylesheet\" id=\"css-style\" type=\"text/css\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"all\" />

\t</head>


\t<body>
\t\t<div id=\"contenedor_margenes\" class=\"container\">
\t\t\t<div id=\"contenedor\" class=\"\">
\t\t\t\t<div id=\"cabecera\" class=\"\">
\t\t\t\t\t<h1 id=\"cab_inf\">NOMBRE DEPARTAMENTO</h1>
\t\t\t\t\t<div id=\"formularios\">
\t\t\t\t\t\t<a href=\"http://www.ugr.es\" id=\"enlace_ugr\">Universidad de Granada</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<div class=\"depto ejemplo_completo\"><span class=\"titulo_stack\">Departamento</span><a href=\"index.html\" id=\"enlace_stack\">NOMBRE DEL DEPARTAMENTO</a></div>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"rastro-idiomas\">
\t\t\t\t  \t";
        // line 107
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 108
            echo "\t\t\t\t\t\t<ul id=\"menu_inicio\">
  \t\t\t\t\t\t\t<li id=\"item_inicio\"><a href=\"http://tfg.local/app_dev.php/mostrarOfertas\">Ofertas</a></li>
  \t\t\t\t\t\t\t<li id=\"item_inicio\"><a href=\"http://tfg.local/app_dev.php/mostrarDemandas\">Demt</a></li>
  \t\t\t\t\t    </ul>
        \t\t\t";
        }
        // line 113
        echo "\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"general\">
\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t";
        // line 119
        if (array_key_exists("chart", $context)) {
            // line 120
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OfertaBundle:Default:menu2"));
            echo "
\t\t\t\t\t";
        } else {
            // line 122
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OfertaBundle:Default:menu"));
            echo "

\t\t\t\t\t";
        }
        // line 125
        echo "
\t\t\t\t\t</div>

\t\t\t\t<div id=\"pagina\">
  \t\t\t\t\t<h1 id=\"titulo_pagina\">
  \t\t\t\t\t\t<span class=\"texto_titulo\">
  \t\t\t\t\t\t\t";
        // line 131
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 132
            echo "            \t\t\t\t\tBienvenido ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " 
        \t\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t\t\t Necesita loguearse 
        \t\t\t\t\t";
        }
        // line 136
        echo "  \t\t\t\t\t\t</span>
  \t\t\t\t\t</h1>
  \t\t\t\t\t\t";
        // line 138
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 139
            echo "  \t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"color: white; background-color: #5b518b\">BLOG SEARCH</span>
\t\t\t\t\t\t\t\t<input type=\"text\" autocomplete=\"off\" id=\"search\" class=\"form-control input-lg\" placeholder=\"Enter Blog Title Here\">
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t ";
        } else {
            // line 144
            echo "\t\t\t\t\t\t 
        \t\t\t     ";
        }
        // line 146
        echo "
  \t\t\t\t\t\t";
        // line 147
        $this->displayBlock('side', $context, $blocks);
        // line 150
        echo "\t\t\t\t </div>
\t\t\t</div>

\t\t\t\t<div id=\"banners\">
\t\t\t\t\t<div class=\"mod-banners\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"banner_container model-resaltado-01 showtext\">
\t\t\t\t\t\t\t\t<a class=\"banner\" href=\"";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addOferta");
        echo "\">
\t\t\t\t\t\t\t\t\t<h1>Añadir Oferta</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"lateral_doku\">
\t\t\t\t\t<div class=\"content_doku content_doku_display\">
\t\t\t\t\t\t<div class=\"content_doku\">
\t\t\t\t\t\t<p>   Contenido en el margen <p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"interior_pie\">
\t\t\t\t\t<div id=\"pie\">
\t\t\t\t\t\t<a class=\"cmswebmap\" href=\"#\">Mapa del sitio</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<a class=\"contactar\" href=\"#\">Contacto</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<a class=\"validador\" href=\"#\">Accesibilidad</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<a class=\"privacidad\" href=\"#\">Política de privacidad</a>
\t\t\t\t\t\t<p><a href=\"http://www.ugr.es/pages/creditos\">&copy; 2011</a> <span class=\"separador_enlaces\"> | </span> <a href=\"http://www.ugr.es\">Universidad de Granada</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</body>
</html>
";
        
        $__internal_c0a61f547283c5ba745c8cbab6d0e8fc1a7742f9075f4a4e77849f8640f7d767->leave($__internal_c0a61f547283c5ba745c8cbab6d0e8fc1a7742f9075f4a4e77849f8640f7d767_prof);

    }

    // line 147
    public function block_side($context, array $blocks = array())
    {
        $__internal_54fbbec65f7cd24894812bacc1ee5ceb298991564c7a38b88a99be536a23fe95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fbbec65f7cd24894812bacc1ee5ceb298991564c7a38b88a99be536a23fe95->enter($__internal_54fbbec65f7cd24894812bacc1ee5ceb298991564c7a38b88a99be536a23fe95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 148
        echo "
\t\t\t\t         ";
        
        $__internal_54fbbec65f7cd24894812bacc1ee5ceb298991564c7a38b88a99be536a23fe95->leave($__internal_54fbbec65f7cd24894812bacc1ee5ceb298991564c7a38b88a99be536a23fe95_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 148,  266 => 147,  226 => 157,  217 => 150,  215 => 147,  212 => 146,  208 => 144,  201 => 139,  199 => 138,  195 => 136,  191 => 134,  185 => 132,  183 => 131,  175 => 125,  168 => 122,  162 => 120,  160 => 119,  152 => 113,  145 => 108,  143 => 107,  121 => 88,  104 => 74,  91 => 64,  71 => 47,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"es\" xml:lang=\"es\" >
\t<head>
\t\t<title>NOMBRE DEPARTAMENTO | Universidad de Granada</title>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta name=\"description\" content=\"Universidad de Granada - NOMBRE DEPARTAMENTO\" />
\t\t<meta name=\"keywords\" content=\"universidad,granada,NOMBRE DEPARTAMENTO\" />
\t\t<meta http-equiv=\"content-language\" name=\"language\" content=\"es\" />
\t\t<link rel=\"shortcut icon\" href=\"/img/favicon.ico\" type=\"image/vnd.microsoft.icon\" />

\t\t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">

\t\t<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
\t\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

\t\t<!-- Latest compiled and minified CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

\t\t<!-- Optional theme -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

\t\t<!-- Latest compiled and minified JavaScript -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

\t\t<link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@0.6.2/build/pure-min.css\" integrity=\"sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD\" crossorigin=\"anonymous\">
\t\t<style>
\t\t\t.ui-menu { width: 150px; }
\t\t</style>
\t\t<script>
\t  \$( function() {
\t    \$( \".datepicker\" ).datepicker();
\t  } );
\t  </script>
\t\t<script>
\t\t\$(\"#form_rama\").change(function() {
\t\t\t\tvar data = {
\t\t\t\t\trama_id: \$(this).val()
\t\t\t\t};
\t\t\t\t\$.ajax({
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\turl: '{{ path(\"select_disciplinas\") }}',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(data,url) {
\t\t\t\t\t\t\t\tvar \$rama_selector = \$('#form_disciplina');

\t\t\t\t\t\t\t\t\$rama_selector.html('<option value=\"' + data[0].toString() + '\">' + data[1].toString() + '</option>');
\t\t\t\t\t\t\t\tfor (var i = 2, total = data.length; i < total;) {
\t\t\t\t\t\t\t\t\t\t\$rama_selector.append('<option value=\"' + data[i] + '\">' + data[i+1] + '</option>');
\t\t\t\t\t\t\t\t\t\ti=i+2;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t});
\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t    \$(\"#search\").autocomplete({
\t\t        source: '{{ path(\"oferta_search\") }}',
\t\t            focus: function( event, ui ) {
\t\t            \$( \"#search\" ).val( ui.item.title ); // uncomment this line if you want to select value to search box
\t\t            return false;
\t\t        },
\t\t        maxShowItems: 0, // Make list height fit to 5 items when items are over 5.
\t\t        select: function( event, ui ) {
\t\t            window.location.href = ui.item.url;;
\t\t        }
\t\t    }).data( \"ui-autocomplete\" )._renderItem = function( ul, item ) {
\t\t        var inner_html = '<a href=\"' + 'http://tfg.local/app_dev.php/showOferta/?id=' + item.id +  '\" ><div class=\"list_item_container\"><div class=\"image\"><img src={{ asset('uploads/brochures/oferta') }}/' + item.image + ' ></div><div class=\"label\"><h4><b>' + item.title + '</b></h4></div><p>' + item.description + '</p></div></a>';
\t\t        return \$( \"<li></li>\" )
\t\t                .data( \"item.autocomplete\", item )
\t\t                .append(inner_html)
\t\t                .appendTo( ul );
\t\t    };
\t\t});
\t\t</script>
<script src=\"https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js\" type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/3.0.10/adapters/mootools-adapter.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>

\t  <link rel=\"stylesheet\" id=\"css-style\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\" media=\"all\" />

\t</head>


\t<body>
\t\t<div id=\"contenedor_margenes\" class=\"container\">
\t\t\t<div id=\"contenedor\" class=\"\">
\t\t\t\t<div id=\"cabecera\" class=\"\">
\t\t\t\t\t<h1 id=\"cab_inf\">NOMBRE DEPARTAMENTO</h1>
\t\t\t\t\t<div id=\"formularios\">
\t\t\t\t\t\t<a href=\"http://www.ugr.es\" id=\"enlace_ugr\">Universidad de Granada</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<div class=\"depto ejemplo_completo\"><span class=\"titulo_stack\">Departamento</span><a href=\"index.html\" id=\"enlace_stack\">NOMBRE DEL DEPARTAMENTO</a></div>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"rastro-idiomas\">
\t\t\t\t  \t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t\t\t\t<ul id=\"menu_inicio\">
  \t\t\t\t\t\t\t<li id=\"item_inicio\"><a href=\"http://tfg.local/app_dev.php/mostrarOfertas\">Ofertas</a></li>
  \t\t\t\t\t\t\t<li id=\"item_inicio\"><a href=\"http://tfg.local/app_dev.php/mostrarDemandas\">Demt</a></li>
  \t\t\t\t\t    </ul>
        \t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"general\">
\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t{% if chart is defined %}
\t\t\t\t\t\t{{ render(controller('OfertaBundle:Default:menu2')) }}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{{ render(controller('OfertaBundle:Default:menu')) }}

\t\t\t\t\t{% endif %}

\t\t\t\t\t</div>

\t\t\t\t<div id=\"pagina\">
  \t\t\t\t\t<h1 id=\"titulo_pagina\">
  \t\t\t\t\t\t<span class=\"texto_titulo\">
  \t\t\t\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            \t\t\t\t\tBienvenido {{ app.user.username }} 
        \t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t Necesita loguearse 
        \t\t\t\t\t{% endif %}
  \t\t\t\t\t\t</span>
  \t\t\t\t\t</h1>
  \t\t\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
  \t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"color: white; background-color: #5b518b\">BLOG SEARCH</span>
\t\t\t\t\t\t\t\t<input type=\"text\" autocomplete=\"off\" id=\"search\" class=\"form-control input-lg\" placeholder=\"Enter Blog Title Here\">
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t {% else %}
\t\t\t\t\t\t 
        \t\t\t     {% endif %}

  \t\t\t\t\t\t{% block side %}

\t\t\t\t         {% endblock %}
\t\t\t\t </div>
\t\t\t</div>

\t\t\t\t<div id=\"banners\">
\t\t\t\t\t<div class=\"mod-banners\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"banner_container model-resaltado-01 showtext\">
\t\t\t\t\t\t\t\t<a class=\"banner\" href=\"{{ path('addOferta') }}\">
\t\t\t\t\t\t\t\t\t<h1>Añadir Oferta</h1>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"lateral_doku\">
\t\t\t\t\t<div class=\"content_doku content_doku_display\">
\t\t\t\t\t\t<div class=\"content_doku\">
\t\t\t\t\t\t<p>   Contenido en el margen <p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"interior_pie\">
\t\t\t\t\t<div id=\"pie\">
\t\t\t\t\t\t<a class=\"cmswebmap\" href=\"#\">Mapa del sitio</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<a class=\"contactar\" href=\"#\">Contacto</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<a class=\"validador\" href=\"#\">Accesibilidad</a>
\t\t\t\t\t\t<span class=\"separador_enlaces\"> | </span>
\t\t\t\t\t\t<a class=\"privacidad\" href=\"#\">Política de privacidad</a>
\t\t\t\t\t\t<p><a href=\"http://www.ugr.es/pages/creditos\">&copy; 2011</a> <span class=\"separador_enlaces\"> | </span> <a href=\"http://www.ugr.es\">Universidad de Granada</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</body>
</html>
", "base.html.twig.php", "/home/lorenmanu/Escritorio/TFG-V2-master/app/Resources/views/base.html.twig.php");
    }
}
