@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Importar datos desde CSV
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Importar Datos desde CSV</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Seleccione el archivo a importar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('handleImporter') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="box-body">
                <div class="form-group">
                  <label for="file">Archivo:</label>
                  <input type="file" id="file" name="file">
                

                  <p class="help-block">Solo se permiten archivos CSV separados por <strong>;</strong> (Punto y Coma).</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar Archivo</button>
              </div>
            </form>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
