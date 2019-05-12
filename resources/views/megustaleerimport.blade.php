@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Importar datos desde JSON
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Importar Datos desde JSON</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


      <div class="row">
            <div class="col-md-12">

                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Libreria</th>
                                    <th>URL</th>

                                </tr>
                                @foreach ($json as $data)
                                <tr>
                                    <td>{{ $data['isbn'] }}</td>
                                    <td>{{ $data['titulo'] }}</td>
                                    <td>
                                    {{ $data['paginas'] }}
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->

                </div>

            </div>
            <!-- /.col -->
        </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
