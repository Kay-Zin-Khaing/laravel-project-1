@extends('admin.layout.app')

@section('common-css')
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Create {{substr(Route::currentRouteName(),0,-7)}}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('post.store')}}"><i class="fa fa-dashboard"></i>Back to {{substr(Route::currentRouteName(),0,-7)}}</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" action="{{route('post.store')}}/@yield('EditId')" method="post">
            {{csrf_field()}}
            @section('EditMethod')
              @show
            <div class="box-body">
              <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" class="form-control" name="title" value="@yield('EditTitle')" id="title" placeholder="Title">
                @if($errors->has('title'))
                  @foreach($errors->get('title') as $error)
                    <label class="text-danger">{{$error}}</label>
                  @endforeach
                @endif
              </div>

              <div class="form-group">
                <label for="subtitle">Post Sub Title</label>
                <input type="text" class="form-control" name="subtitle" value="@yield('EditSubtitle')" id="subtitle" placeholder="Subtitle">
                @if($errors->has('subtitle'))
                  @foreach($errors->get('subtitle') as $error)
                    <label class="text-danger">{{$error}}</label>
                  @endforeach
                @endif
              </div>

              <div class="form-group">
                <label for="slug">Post Slub</label>
                <input type="text" class="form-control" name="slug" value="@yield('EditSlug')" id="slug" placeholder="Slug">
                @if($errors->has('slug'))
                  @foreach($errors->get('slug') as $error)
                    <label class="text-danger">{{$error}}</label>
                  @endforeach
                @endif
              </div>

              <!-- Select Method -->
              @section('SelectMethod')
                @show
              <!-- End Select Method -->

              <!-- /.body-text -->
              <div class="form-group">
                <h3 class="box-title">Write Post Content
                    <small>Simple and fast</small>
                </h3>
                <textarea name="body" id="editor1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@yield('EditBody')</textarea>
                @if($errors->has('body'))
                  @foreach($errors->get('body') as $error)
                    <label class="text-danger">{{$error}}</label>
                  @endforeach
                @endif
              </div>
              <!-- /.end-body-text -->

              <!-- Image File Upload -->
              <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
              </div>
              <!-- End Image File Upload -->

              <!-- Status -->
              @section('CheckMethod')
                @show
              <!-- End Status -->
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <!-- /.end box-body -->
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
  {{-- <script src="{{asset('admin/dist/js/textedit.js')}}"></script> --}}
  {{-- <script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script> --}}
  <script src="//cdn.ckeditor.com/4.11.2/full/ckeditor.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Selected -->
  <script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <script>
    $(function () {
      $('.select2').select2()
      CKEDITOR.replace('editor1')
  })
  </script>
@endsection
