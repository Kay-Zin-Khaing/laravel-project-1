@extends('admin.layout.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create {{substr(Route::currentRouteName(),0,-7)}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('tag.store')}}"><i class="fa fa-dashboard"></i>Back to {{substr(Route::currentRouteName(),0,-7)}}</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="{{route('tag.store')}}/@yield('EditId')" method="post">
              {{csrf_field()}}
              @section('EditMethod')
                @show
              @include('includes.form-field')
              <div class="box-body">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->     
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('common-js')
    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
@endsection