@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Datos extraidos de MeGustaLeer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                

              <div class="box-tools pull-right">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Codigo Art.</th>                    
                    <th>ISBN13</th>                   
                    <th>Título</th>                    
                    <th>Apellido Autor</th>
                    <th>Nombre Autor</th>
                    <th>Editorial</th>
                    <th>Coleccion</th>
                    <th>Tipo</th>
                    <th>Genero</th>
                    <th>Portada</th>
                    <th>formato</th>
                    <th>F. Public</th>
                    <th>edicion</th>
                    <th>agotado</th>
                    <th>activo</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($json as $data)
                  <tr>
                    <td>{{ $data['matnr'] }}</td>
                    <td>{{ $data['isbn'] }}</td>
                    <td>{{ $data['titulo'] }}</td>
                    <td>{{ $data['autor'] }}</td>
                    <td>{{ $data['cod_sello_editorial'] }}</td>
                    <td>{{ $data['sello_editorial'] }}</td>
                    <td>{{ $data['coleccion'] }}</td>
                    <td><img src="{{ $data['portada'] }}" alt=""></td>
                    <td>{{ $data['subtitulo'] }}</td>
                    <td>{{ $data['paginas'] }}</td>
                    <td>{{ $data['medidas'] }}</td>
                  </tr>
                  @endforeach
                  </tbody>

                  

                </table>
                
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
            
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
