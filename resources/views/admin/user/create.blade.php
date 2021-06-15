@extends('admin.layout.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="subtitle">Post Sub Title</label>
                  <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Subtitle">
                </div>
                <div class="form-group">
                  <label for="slug">Post Slub</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                </div>
              </div>
              <!-- /.box-body -->

                <!-- /.body-text -->
                <div class="box-header">
                    <h3 class="box-title">Write Post Content
                        <small>Simple and fast</small>
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                    <form>
                        <textarea name="body" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </form>
                </div>
                <!-- /.end-body-text -->

                <div class="box-body">
                    <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" name="image" id="image">
                    </div>
                    <div class="checkbox">
                    <label>
                        <input type="checkbox" name="status"> Publish
                    </label>
                    </div>
                </div>

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
    <!-- AdminLTE for Text Editor -->
    <script src="{{asset('admin/dist/js/textedit.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  @endsection