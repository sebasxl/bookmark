@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header row">
        <div class="col-md-9">
{{--                 <h2>
                        <small>Version 1.1</small>
                      </h2> --}}
        </div>


      <div class="col-md-3">
      <form action="{{ route('buscador')}}" method="get" role="search">
        @csrf
                <div class="input-group">
                        <input type="text" name="finder" class="form-control" placeholder="ISBN, título, autor...">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                      </div><!-- /input-group -->

          </form>

      </div>



    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">

                        @if(Session::has('flash_message'))

                        <div class="alert alert-danger" role="alert"> {{Session::get('flash_message')}}</div>

                        @endif


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
                    <th></th>
                    <th>ISBN</th>
                    <th>TITULO</th>
                    <th>AUTOR</th>

                    <th>EDITORIAL</th>


                    <th>PUBLICACION</th>
                    <th>PRECIO</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($books as $book)
                  <tr>
                    <td> <img src="{{ $book->portada }}" width=50px; alt=""></td>
                    <td class="vertical">{{ $book->ean }}</td>
                    <td class="vertical">{{ $book->titulo }}</td>
                    <td>{{ $book->apellido_autor }} {{ $book->nombre_autor }}</td>

                    <td>{{ $book->editorial }}</td>

                    @if( $book->fecha_publicacion == '//')
                    <td></td>
                    @else
                    <td>{{ $book->fecha_publicacion }}</td>
                    @endif
                    @if ($book->pvp)
                    <td>${{ $book->pvp }}</td>
                    @else
                    <td></td>
                    @endif


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
