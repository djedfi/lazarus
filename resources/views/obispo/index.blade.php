@extends('layouts.principal')

@section('contenido')
<!-- Page header -->
<div class="page-header">
  <div class="page-header-content">
    <div class="page-title">
    				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Diocesis</span> - Obispos</h4>

    				<ul class="breadcrumb breadcrumb-caret position-right">
    					<li><a href="">Inicio</a></li>
    					<li><a href="">Obispos</a></li>
    					<li class="active">Listado de Obispos  </li>
    				</ul>
    			</div>
  </div>
</div>
<!-- /page header -->


<!-- Page container -->
<div class="page-container">

  <!-- Page content -->
  <div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">
      <!-- content -->
      <div class="panel panel-flat">
        <div class="panel-body">

        </div>
      </div>
      <!--/content -->
    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->
</div>
<!-- /page container -->

{!!Html::script('js/custom/obispo.js')!!}
@endsection
