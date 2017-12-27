@extends('layouts.principal')

@section('contenido')
<!-- Page header -->
<div class="page-header">
  <div class="page-header-content">
    <div class="page-title">
    				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Diocesis</span> - Confirmas</h4>

    				<ul class="breadcrumb breadcrumb-caret position-right">
    					<li><a href="">Inicio</a></li>
    					<li><a href="">Confirmas</a></li>
    					<li class="active">Listado de Actas de Confirma</li>
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
            <table class="table" id="myTable">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Fecha Confirma</td>
                  <td>Sacerdote Confirma</td>
                  <td>Parroquia Confirma</td>
                  <td>Nombre Confirmado</td>
                  <td>Apellido Confirmado</td>
                </tr>
              </thead>

            </table>
        </div>
      </div>
      <!--/content -->
    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->
</div>
<!-- /page container -->
<script>
  $(document).ready(function(){
      $("#myTable").DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "/api/confirmas",
        "columns":[
          {data : 'idconfirma'},
          {data : 'fecha_confirma'},
          {data : 'sacerdote_confirma'},
          {data : 'parroquia_confirma'},
          {data : 'nombre_confirmado'},
          {data : 'apellido_confirmado'},
        ]
      });
  });
</script>
@endsection
