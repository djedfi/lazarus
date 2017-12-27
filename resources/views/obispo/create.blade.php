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
    					<li class="active">Registrar Obispos</li>
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
          <!-- Form horizontal -->
          <div class="panel panel-flat">
            <div class="panel-body">
              {!!Form::open(array('class'=>'form-horizontal','route'=>'obispo.store','method'=>'POST','autocomplete'=>'off'))!!}
                <fieldset class="content-group">
                  <legend class="text-bold">Informacion del Obispo</legend>

                  @if(count($errors)>0)
                  <div class="alert alert-danger alert-bordered alert-rounded">
									    <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                      </ul>
							    </div>
                  @endif

                  <div class="form-group">
                    {!!Form::label('Nombre completo:', '', array('class' => 'control-label col-lg-2'));!!}
                      <div class="col-lg-10">
                        {!!Form::text('txtNombre',null,
                        ['class'=>'form-control','placeholder'=>'Ingresa el nombre completo del obispo','id'=>'txtNombre'])!!}
                      </div>
                  </div>

                  <div class="form-group">
                    {!!Form::label('Años:', '', array('class' => 'control-label col-lg-2'));!!}
                      <div class="col-lg-10">
                        <div class="col-md-4">
                            {!!Form::text('txtDesde',null,
                            ['class'=>'form-control','placeholder'=>'Desde','id'=>'txtDesde'])!!}
                        </div>
                        <div class="col-md-4">
                            {!!Form::text('txtHasta',null,
                            ['class'=>'form-control','placeholder'=>'Hasta','id'=>'txtHasta'])!!}
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                    {!!Form::label('Nombre completo:', '', array('class' => 'control-label col-lg-2'));!!}
                      <div class="col-lg-10">
                        {!!Form::text('txtMostrar',null,
                        ['class'=>'form-control','placeholder'=>'Ingresa el nombre completo del obispo','id'=>'txtMostrar'])!!}
                      </div>
                  </div>

                  <div class="text-right">
                  {{ Form::button('Guardar <i class="icon-floppy-disk position-right"></i>',
                  ['class'=>'btn btn-success btn-rounded', 'type'=>'submit']) }}
                  {{ Form::button('Limpiar <i class="icon-eraser2 position-right"></i>',
                  ['class'=>'btn btn-default btn-rounded', 'type'=>'reset']) }}
                  </div>

              {!!Form::close()!!}

            </div>
          </div>
          <!--/Form horizontal -->
      <!--/content -->
    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->
</div>
<!-- /page container -->

{!!Html::script('js/custom/obispo.js')!!}
@endsection
