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
                    <th>ISBN13</th>                   
                    <th>Título</th>                    
                    <th>Apellido y Nombre</th>
                    
                    <th>Editorial</th>
                    
                    
                    <th>F. Public</th>
                    <th>PVP</th>
                    <th>Portada</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($books as $book)
                  <tr>
                    <td>{{ $book->isbn13 }}</td>
                    <td>{{ $book->titulo }}</td>
                    <td>{{ $book->apellido_autor }}, {{ $book->nombre_autor }}</td>
                    
                    <td>{{ $book->editorial }}</td>
                    
                    
                    <td>{{ $book->fecha_publicacion }}</td>
                    <td>{{ $book->pvp }}</td>
                    <td> <img src="{{ $book->portada }}" width=50px; alt=""></td>
                    
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
