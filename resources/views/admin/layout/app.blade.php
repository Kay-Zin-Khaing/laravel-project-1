<!DOCTYPE html>
<html>
<head>
  @include('admin.layout.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.layout.header')
    @include('admin.layout.sidebar')
    @section('main-content')
      @show
    @include('admin.layout.footer')

</div>
    @section('common-js')
      @show
      @section('post-js')
      @show
</body>
</html>
