<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es" >
	<head>
		<title>NOMBRE DEPARTAMENTO | Universidad de Granada</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Universidad de Granada - NOMBRE DEPARTAMENTO" />
		<meta name="keywords" content="universidad,granada,NOMBRE DEPARTAMENTO" />
		<meta http-equiv="content-language" name="language" content="es" />
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/vnd.microsoft.icon" />

		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
		<style>
			.ui-menu { width: 150px; }
		</style>
		<script>
	  $( function() {
	    $( ".datepicker" ).datepicker();
	  } );
	  </script>
		<script>
		$("#form_rama").change(function() {
				var data = {
					rama_id: $(this).val()
				};
				$.ajax({
						type: 'post',
						url: '{{ path("select_disciplinas") }}',
						data: data,
						success: function(data,url) {
								var $rama_selector = $('#form_disciplina');

								$rama_selector.html('<option value="' + data[0].toString() + '">' + data[1].toString() + '</option>');
								for (var i = 2, total = data.length; i < total;) {
										$rama_selector.append('<option value="' + data[i] + '">' + data[i+1] + '</option>');
										i=i+2;
								}
						}
				});
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function(){
		    $("#search").autocomplete({
		        source: '{{ path("oferta_search") }}',
		            focus: function( event, ui ) {
		            $( "#search" ).val( ui.item.title ); // uncomment this line if you want to select value to search box
		            return false;
		        },
		        maxShowItems: 0, // Make list height fit to 5 items when items are over 5.
		        select: function( event, ui ) {
		            window.location.href = ui.item.url;;
		        }
		    }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
		        var inner_html = '<a href="' + 'http://tfg.local/app_dev.php/showOferta/?id=' + item.id +  '" ><div class="list_item_container"><div class="image"><img src={{ asset('uploads/brochures/oferta') }}/' + item.image + ' ></div><div class="label"><h4><b>' + item.title + '</b></h4></div><p>' + item.description + '</p></div></a>';
		        return $( "<li></li>" )
		                .data( "item.autocomplete", item )
		                .append(inner_html)
		                .appendTo( ul );
		    };
		});
		</script>
<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js" type="text/javascript"></script>
<script src="//code.highcharts.com/3.0.10/adapters/mootools-adapter.js" type="text/javascript"></script>

<script src="//code.highcharts.com/4.1.8/highcharts.js"></script>
<script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>

	  <link rel="stylesheet" id="css-style" type="text/css" href="{{ asset('css/style.css') }}" media="all" />

	</head>


	<body>
		<div id="contenedor_margenes" class="container">
			<div id="contenedor" class="">
				<div id="cabecera" class="">
					<h1 id="cab_inf">NOMBRE DEPARTAMENTO</h1>
					<div id="formularios">
						<a href="http://www.ugr.es" id="enlace_ugr">Universidad de Granada</a>
						<span class="separador_enlaces"> | </span>
						<div class="depto ejemplo_completo"><span class="titulo_stack">Departamento</span><a href="index.html" id="enlace_stack">NOMBRE DEL DEPARTAMENTO</a></div>
						<span class="separador_enlaces"> | </span>
					</div>
				</div>
				</div>
				<div id="rastro-idiomas">
				  	{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}
						<ul id="menu_inicio">
  							<li id="item_inicio"><a href="http://tfg.local/app_dev.php/mostrarOfertas">Ofertas</a></li>
  							<li id="item_inicio"><a href="http://tfg.local/app_dev.php/mostrarDemandas">Demt</a></li>
  					    </ul>
        			{% endif %}
				</div>

				</div>
				</div>
				<div class="general">
					<div class="navigation">
					{% if chart is defined %}
						{{ render(controller('OfertaBundle:Default:menu2')) }}
					{% else %}
						{{ render(controller('OfertaBundle:Default:menu')) }}

					{% endif %}

					</div>

				<div id="pagina">
  					<h1 id="titulo_pagina">
  						<span class="texto_titulo">
  							{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}
            					Bienvenido {{ app.user.username }} 
        					{% else %}
								 Necesita loguearse 
        					{% endif %}
  						</span>
  					</h1>
  						{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}
  							<div class="input-group">
								<span class="input-group-addon" style="color: white; background-color: #5b518b">BLOG SEARCH</span>
								<input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter Blog Title Here">
						    </div>
						 {% else %}
						 
        			     {% endif %}

  						{% block side %}

				         {% endblock %}
				 </div>
			</div>

				<div id="banners">
					<div class="mod-banners">
						<ul>
							<li class="banner_container model-resaltado-01 showtext">
								<a class="banner" href="{{ path('addOferta') }}">
									<h1>Añadir Oferta</h1>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="lateral_doku">
					<div class="content_doku content_doku_display">
						<div class="content_doku">
						<p>   Contenido en el margen <p>
						</div>
					</div>
				</div>
				<div id="interior_pie">
					<div id="pie">
						<a class="cmswebmap" href="#">Mapa del sitio</a>
						<span class="separador_enlaces"> | </span>
						<a class="contactar" href="#">Contacto</a>
						<span class="separador_enlaces"> | </span>
						<a class="validador" href="#">Accesibilidad</a>
						<span class="separador_enlaces"> | </span>
						<a class="privacidad" href="#">Política de privacidad</a>
						<p><a href="http://www.ugr.es/pages/creditos">&copy; 2011</a> <span class="separador_enlaces"> | </span> <a href="http://www.ugr.es">Universidad de Granada</a></p>
					</div>
				</div>
			</div>
		</div>


	</body>
</html>
