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
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>cod_articulo</th>
                    <th>isbn10</th>
                    <th>isbn13</th>
                    <th>ean</th>
                    <th>titulo</th>
                    <th>subtitulo</th>
                    <th>apellido_autor</th>
                    <th>nombre_autor</th>
                    <th>biografia_autor</th>
                    <th>ilustrador</th>
                    <th>traductor</th>
                    <th>editorial</th>
                    <th>coleccion</th>
                    <th>categoria</th>
                    <th>tipo</th>
                    <th>genero</th>
                    <th>sinopsis</th>
                    <th>contratapa</th>
                    <th>metadata</th>
                    <th>portada</th>
                    <th>booktrailer</th>
                    <th>digital</th>
                    <th>idioma</th>
                    <th>formato</th>
                    <th>fecha_publicacion</th>
                    <th>edicion</th>
                    <th>pvp</th>
                    <th>moneda</th>
                    <th>paginas</th>
                    <th>medidas</th>
                    <th>peso</th>
                    <th>agotado</th>
                    <th>activo</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($books as $book)
                  <tr>
                    <td>{{ $book->cod_articulo }}</td>
                    <td>{{ $book->isbn10 }}</td>
                    <td>{{ $book->isbn13 }}</td>
                    <td>{{ $book->ean }}</td>
                    <td>{{ $book->titulo }}</td>
                    <td>{{ $book->subtitulo }}</td>
                    <td>{{ $book->apellido_autor }}</td>
                    <td>{{ $book->nombre_autor }}</td>
                    <td>{{ $book->biografia_autor }}</td>
                    <td>{{ $book->ilustrador }}</td>
                    <td>{{ $book->traductor }}</td>
                    <td>{{ $book->editorial }}</td>
                    <td>{{ $book->coleccion }}</td>
                    <td>{{ $book->categoria }}</td>
                    <td>{{ $book->tipo }}</td>
                    <td>{{ $book->genero }}</td>
                    <td>{{ $book->sinopsis }}</td>
                    <td>{{ $book->contratapa }}</td>
                    <td>{{ $book->metadata }}</td>
                    <td>{{ $book->portada }}</td>
                    <td>{{ $book->booktrailer }}</td>
                    <td>{{ $book->digital }}</td>
                    <td>{{ $book->idioma }}</td>
                    <td>{{ $book->formato }}</td>
                    <td>{{ $book->fecha_publicacion }}</td>
                    <td>{{ $book->edicion }}</td>
                    <td>{{ $book->pvp }}</td>
                    <td>{{ $book->moneda }}</td>
                    <td>{{ $book->paginas }}</td>
                    <td>{{ $book->medidas }}</td>
                    <td>{{ $book->peso }}</td>
                    <td>{{ $book->agotado }}</td>
                    <td>{{ $book->activo }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
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
