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
                Mediante esta acción se descargará un archivo con formato XLSX
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ route('export2csv')}}" class="btn btn-primary">Descargar XLS</a>
              </div>
            </form>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
        @if(session()->has('notif'))

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">{{ session()->get('notif')}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              Todos los Backups se estan guardando en /public_html/storage/app/Bookmark. <br>
              Un mail será enviado desde no-responder@bookmark.com.ar <br>
              Elimine los backups que ya no utilizará
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        @endif
        <div class="box box-warning">
             <div class="box-header with-border">
              <h3 class="box-title">O realizar un Backup de la Base de datos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form role="form">-->
            <div class="box-body">
              Esto realizará una copia completa de la base de datos y se descargará a su PC mediante un archivo .sql 

              <!-- /.box-body -->

              <div class="box-footer">
              <a href="{{ url('/hacer-backup') }}" type="submit" class="btn btn-primary">Hacer Backup</a>
              </div>
           
          </div>
        </div> 
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
