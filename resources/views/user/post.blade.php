@extends('user.app')

@section('bg-img',asset('user/img/post-bg.jpg'))

@section('title', $post->title)
@section('sub-heading', $post->subtitle)

@section('common-css')
  <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
@endsection

@section('main-content')

<!-- Post Content -->
<article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <small>Created at : {{$post->created_at->diffforhumans()}}</small>
          </div>
          <div class="col-lg-8 col-md-10 mx-auto">
            {!! htmlspecialchars_decode($post->body) !!}
              <div class="col-lg-4 pull-left">
                <h4>Category label</h4>
                @foreach ($post->categories as $category)
                  <small><i class="fal fa-angle-right" style="font-family: 'Fontawesome';"></i> {{$category->name}}</small>
                @endforeach
              </div>

              <div class="col-lg-4 pull-right">
                <h4>Tag label</h4>
                @foreach ($post->tags as $tag)
                  <small><i class="fal fa-angle-right" style="font-family: 'Fontawesome';"></i> {{$tag->name}}</small>
                @endforeach
              </div>
          </div>
        </div>
      </div>
    </article>

    <hr>

@endsection