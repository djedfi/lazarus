<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lazarus - Actas Eclesiasticas Diocesis de San Miguel</title>
	<meta name="autor" content="Fernando Ventura | Edwin Figueroa">
	<meta name="description" content="Sistema de control de Actas de la Diócesis de San Miguel">
	<!-- Global stylesheets -->
	{!!Html::style('css/icons/icomoon/styles.css')!!}
	{!!Html::style('css/bootstrap.css')!!}
	{!!Html::style('css/core.css')!!}
	{!!Html::style('css/components.css')!!}
	{!!Html::style('css/colors.css')!!}

	<!-- /global stylesheets -->

	<!-- Core JS files -->
	{!!Html::script('js/plugins/loaders/pace.min.js')!!}
	{!!Html::script('js/core/libraries/jquery.min.js')!!}
	{!!Html::script('js/core/libraries/bootstrap.min.js')!!}
	{!!Html::script('js/plugins/loaders/blockui.min.js')!!}
	{!!Html::script('js/plugins/ui/nicescroll.min.js')!!}
	{!!Html::script('js/plugins/ui/drilldown.js')!!}
	<!-- /core JS files -->

	<!-- Theme JS files -->
	{!!Html::script('js/plugins/forms/styling/switchery.min.js')!!}
	{!!Html::script('js/plugins/forms/selects/bootstrap_multiselect.js')!!}
	{!!Html::script('js/plugins/ui/moment/moment_locales.min.js')!!}
	{!!Html::script('js/plugins/forms/inputs/bootstrap-datetimepicker.js')!!}
	{!!Html::script('js/plugins/forms/validation/validate.min.js')!!}
  {!!Html::script('js/core/app.js')!!}
	{!!Html::script('js/plugins/ui/ripple.min.js')!!}
	{!!Html::script('js/plugins/tables/datatables/datatables.min.js')!!}
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
				<a class="navbar-brand" href="index.html">{!!Html::image('images/logo_light.png')!!}</a>
		</div>


	</div>
	<!-- /main navbar -->


	<!-- Second navbar -->
	<div class="navbar navbar-default" id="navbar-second">
	  <ul class="nav navbar-nav no-border visible-xs-block">
	    <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
	  </ul>

	  <div class="navbar-collapse collapse" id="navbar-second-toggle">
	    <ul class="nav navbar-nav navbar-nav-material">
	      <li class="active"><a href="index.html"><i class="icon-display4 position-left"></i> Inicio</a></li>


	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          <i class="icon-server position-left"></i> Menu <span class="caret"></span>
	        </a>

	        <ul class="dropdown-menu width-200">

	          <li class="dropdown-submenu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-city"></i> Diocesis</a>
	            <ul class="dropdown-menu">
	              <li class="dropdown-header highlight">Modulos</li>
								<li><a href="">Obispos</a></li>
	              <li class="dropdown-submenu">
	                <a href="#">Vicarias</a>
	                <ul class="dropdown-menu">
										<li><a href="">Admin. Vicarias</a></li>
	                  <li><a href="">Parroquias</a></li>
										<li><a href="">Cargos Sacerdotales</a></li>
	                  <li><a href="">Sacerdotes</a></li>
	                </ul>
	              </li>

	            </ul>
	          </li>
	          <li class="dropdown-submenu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-magazine"></i> Libros y Actas</a>
	            <ul class="dropdown-menu">
	              <li class="dropdown-header highlight">Modulos de Libros</li>
	              <li><a href="">Tipos de Libro</a></li>
	              <li><a href="">Admin. de Libros</a></li>
								 <li class="dropdown-header highlight">Modulos de Actas</li>
								 <li><a href="starters/layout_navbar_fixed_main.html">Autorizadores</a></li>
								<li><a href="">Confirmaciones</a></li>
								<li><a href="">Bautizos</a></li>
								<li><a href="">Matrimonios</a></li>
	            </ul>
	          </li>
	          <li class="dropdown-header">Reportes e Informacion</li>
						<li class="dropdown-submenu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search4"></i> Buscar Actas</a>
	            <ul class="dropdown-menu">
								 <li class="dropdown-header highlight">Modulos de Busqueda</li>
								<li><a href="">Buscar Confirmaciones</a></li>
								<li><a href="">Buscar Bautizos</a></li>
								<li><a href="">Buscar Matrimonios</a></li>
	            </ul>
	          </li>
						<li class="dropdown-submenu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-pdf"></i> Imprimir Reportes</a>
	            <ul class="dropdown-menu">
								 <li class="dropdown-header highlight">Reportes de Lazarus</li>
								<li><a href="">.</a></li>
								<li><a href="">.</a></li>
								<li><a href="">.</a></li>
	            </ul>
	          </li>

	        </ul>
	      </li>
	    </ul>

	    <ul class="nav navbar-nav navbar-nav-material navbar-right">
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          <i class="icon-cog3"></i>
	          <span class="visible-xs-inline-block position-right">Share</span>
	          <span class="caret"></span>
	        </a>

	        <ul class="dropdown-menu dropdown-menu-right">
	          <li><a href="#"><i class="icon-user-lock"></i> Ajustes de Cuenta</a></li>
	          <li><a href="#"><i class="icon-statistics"></i> Mis datos</a></li>
	          <li class="divider"></li>
	          <li><a href="#"><i class="icon-exit3"></i> Cerrar Sesion</a></li>
	        </ul>
	      </li>
	    </ul>
	  </div>
	</div>
	<!-- /second navbar -->

		@yield('contenido')

	<!-- Footer -->
	<div class="footer text-muted">
		&copy; 2017-2018. <a href="#">Lazarus </a> por <a href="https://www.linkedin.com/in/ferventurart/" target="_blank">Fernando Ventura / Edwin Figueroa</a>
	</div>
	<!-- /footer -->

</body>
</html>
