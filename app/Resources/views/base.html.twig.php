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
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" id="css-style" type="text/css" href="{{ asset('css/style.css') }}" media="all" />

		<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
		<script src="{{ asset('bundles/pugxautocompleter/js/autocompleter-jqueryui.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>

		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<style>
			.ui-menu { width: 150px; }
		</style>
		<script>
	  $( function() {
	    $( ".datepicker" ).datepicker();
	  } );
	  </script>
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
				<div id="rastro-idiomas">
					<div id="rastro">
						<ul id="rastro_breadcrumb">
							<li class="first">
								<a class="first" href="#">1er nivel</a>
							</li>
							<li>
								<a href="#">2º nivel</a>
							</li>
							<li class="last">
								<a class="last" href="#">ultimo nivel 2</a>
							</li>
						</ul>
					</div>
				</div><div class="general">
					<div class="navigation">
					{% if areas is defined %}
						{% for area in areas  %}
						  <ul>
						    <li class="has-sub"> <a href="#">{{ area.getNombre() }}</a>
						      <ul>
										{% for rama in area.getRamas()  %}
						        	<li class="has-sub"> <a href="#">{{ rama.getNombre() }}</a><
						          	<ul>
													{% for disciplina in rama.getDisciplinas()  %}
						            		<li class="has-sub"><a href="#">{{ disciplina.getNombre() }}</a>
						            		</li>
														{% endfor %}
						          		</ul>
						        		</li>
												{% endfor %}
						      	</ul>
						    	</li>
						  	</ul>
								{% endfor %}
								{% endif %}
						</div>
				{% block side %}

				{% endblock %}
			</div>

				<div id="banners">
					<div class="mod-banners">
						<ul>
							<li class="banner_container model-resaltado-01 showtext">
								<a class="banner" href="URL DONDE APUNTA EL BANNER">
									<strong>LINEA 1 DE TEXTO</strong>
									<em>LINEA 2 DE TEXTO</em>
									<span>LINEA 3 DE TEXTO</span>
								</a>
							</li>
							<li class="banner_container model-resaltado-01 dont_showtext">
								<a class="banner" href="URL DONDE APUNTA EL BANNER">
									<strong>LINEA 1 DE TEXTO</strong>
									<em>LINEA 2 DE TEXTO</em>
									<span>LINEA 3 DE TEXTO</span>
								</a>
							</li>
							<li class="banner_container model-resaltado-02 showtext">
								<a class="banner" href="/depto_bbm3i/pages/www.gmail.com">
									<strong>linea 1</strong>
									<em>linea 2</em>
									<span>linea 3</span>
								</a>
							</li>
							<li class="banner_container model-resaltado-02 dont_showtext">
								<a class="banner" href="/depto_bbm3i/pages/www.gmail.com">
									<strong>linea 1</strong>
									<em>linea 2</em>
									<span>linea 3</span>
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
