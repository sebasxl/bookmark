@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.2</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content-main">
      <!-- Info boxes -->
      <div class="title m-b-md">
        Bookmark
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">

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
            <div class="col-md-3"></div>
        </div>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
