@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header row">
            <div class="col-md-9">
               <h3>
                                        <small>Hemos encontrado {{ $books->count() }} resultados</small>
                                      </h3>
            </div>


            <div class="col-md-3">
                <form action="{{ route('buscador')}}" method="get" role="search">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="finder" class="form-control" placeholder="ISBN, título, autor..."
                               value="{{ $finder ?? '' }}">
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
                                        <th>PUBLICACIÓN</th>
                                        <th>PRECIO</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($books as $book)
                                        <tr>
                                            <td><img src="{{ $book->portada }}" width=50px; alt=""></td>

                                            <td class="vertical">{{ $book->ean }}</td>
                                            <td class="vertical"><a href="#modal-{{$book->id}}" data-toggle="modal"
                                                                    data-target="#modal-{{$book->id}}">{{ $book->titulo }}</a>
                                            </td>
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

                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

            @foreach($books as $book)
                <div class="modal fade" id="modal-{{$book->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title text-center bg-blue"><strong>{{ $book->titulo }}</strong> </h3>
                            </div>
                            <div class="modal-body">
                                <p>
                                        <table class="table no-margin">
                                                <tr>
                                                        <td colspan="4"><span class="link-black text-sm">Subtitulo: </span><strong>{{ $book->subtitulo }}</strong>

                                                        </td>
                                                    </tr>
                                            <tr>
                                                <th colspan="2" rowspan="8"><img src="{{ $book->portada }}" width=150px; alt="">
                                                </th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><span class="link-black text-sm">Autor: </span><strong>{{ $book->apellido_autor }} {{ $book->nombre_autor }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="link-black text-sm text-center">EAN: </span>{{ $book->ean }}</td>
                                                <td rowspan="2" class="bg-yellow text-center">Precio Venta:
                                                    <h3 class="bg-yellow text-center">${{ $book->pvp }}</h3></td>
                                            </tr>
                                            <tr>
                                                <td><span  class="link-black text-sm">Publicación: </span>{{ $book->fecha_publicacion }}</td>

                                            </tr>
                                            <tr>
                                                <td><span class="link-black text-sm">Colección: </span>{{ $book->coleccion }}</td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="link-black text-sm">Género: </span>{{ $book->genero }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><span class="link-black text-sm">Editorial: </span><strong>{{ $book->editorial }}</strong></td>
                                            </tr>

                                            <tr><td colspan="2"></td></tr>

                                            <tr>
                                                <td colspan="4"><span class="link-black text-sm">Sinopsis: </span><br>
                                                    {{ $book->sinopsis }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><span class="link-black text-sm">Páginas: </span>{{ $book->paginas }}</td>
                                                <td><span class="link-black text-sm">Idioma: </span>{{ $book->idioma }}</td>
                                                <td></td>
                                            </tr>

                                        </table>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            @endforeach
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
