@extends('admin.layout.app')

@section('common-css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{substr(Route::CurrentRouteName(),0,-6)}}
        <small>starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>{{substr($action = Route::currentRouteAction(),21,-21)}}</a></li>
        <li><a href="{{route('post.index')}}">{{substr(Route::CurrentRouteName(),0,-6)}}</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><a href="{{route('post.create')}}" class="btn btn-primary">Add New</a></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>SubTitle</th>
              <th>Slug</th>
              <th>Created at</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>View</th>
            </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
                <tr>
                  <td>{{$loop->index + 1}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->subtitle}}</td>
                  <td>{{$post->slug}}</td>
                  <td>{{$post->created_at->diffforhumans()}}</td>
                  <td><a href="{{route('post.edit',$post->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                    <form id="delete-post-{{$post->id}}" action="{{route('post.destroy',$post->id)}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <button style="border:none;color:red;background:none;" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                  </td>
                  <td><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>SubTitle</th>
              <th>Slug</th>
              <th>Created at</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>View</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('common-js')
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for Text Editor -->
<script src="{{asset('admin/dist/js/textedit.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  // Post Table
  $(function () {
    $('#example1').DataTable();
  });
</script>
@endsection