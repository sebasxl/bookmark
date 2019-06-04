@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Exportar Bookmark
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Exportar a Archivo</li>
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
              <h3 class="box-title">Puede exportar la tabla Books</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                Mediante esta acción se descargará un archivo CSV separado por ; (Punto y Coma)
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ route('export2csv')}}" class="btn btn-primary">Descargar CSV</a>
              </div>
            </form>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
        <!--<div class="box box-warning">
             <div class="box-header with-border">
              <h3 class="box-title">O realizar un Backup de la Base de datos</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form role="form">
              <div class="box-body">
              Esto realizará una copia completa de la base de datos y se descargará a su PC mediante un archivo .sql -->

              <!-- /.box-body -->

              <!-- <div class="box-footer">
              <button type="submit" class="btn btn-primary">Hacer Backup</button>
              </div>
            </form>
          </div>-->
        </div> 
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
