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
                {{ $books->links() }}

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
                  @foreach($books as $book)
                  <tr>
                    <td>{{ $book->cod_articulo }}</td>
                    <td>{{ $book->isbn13 }}</td>
                    <td>{{ $book->titulo }}</td>
                    <td>{{ $book->apellido_autor }}</td>
                    <td>{{ $book->nombre_autor }}</td>
                    <td>{{ $book->editorial }}</td>
                    <td>{{ $book->coleccion }}</td>
                    <td>{{ $book->tipo }}</td>
                    <td>{{ $book->genero }}</td>
                    <td> <img src="{{ $book->portada }}" width=50px; alt=""></td>
                    
                    <td>{{ $book->formato }}</td>
                    <td>{{ $book->fecha_publicacion }}</td>
                    <td>{{ $book->edicion }}</td>
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
            {{ $books->links() }}
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
