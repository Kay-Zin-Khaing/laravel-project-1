@extends('admin.post.post')

@section('EditId', $PostEdit->id)
@section('EditTitle',$PostEdit->title)
@section('EditSubtitle',$PostEdit->subtitle)
@section('EditSlug',$PostEdit->slug)
@section('EditBody',$PostEdit->body)

@section('SelectMethod')
<div class="form-group">
  <label>Select Tag</label>
  <select name="tags[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
    {{-- Create Finished Tag show and Selected --}}
    @foreach($tags as $tag) 
      <option value="{{$tag->id}}" @foreach ($PostEdit->tags as $postTag)
          @if ($postTag->id == $tag->id)
              selected
          @endif
      @endforeach>{{$tag->name}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label>Select Category</label>
  <select name="categories[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
    {{-- Create Finished Category show and Selected --}}
    @foreach($categories as $category)  
      <option value="{{$category->id}}" @foreach ($PostEdit->categories as $postCategory)
          @if ($postCategory->id == $category->id)
              selected
          @endif
      @endforeach>{{$category->name}}</option>
    @endforeach
  </select>
</div>
@endsection

@section('CheckMethod')
    <div class="checkbox">
        <label>
            <input type="checkbox" name="status" value="1" @if ($PostEdit->status == 1)
                {{'checked'}}
            @endif> Publish
        </label>
    </div>
@endsection

@section('EditMethod')
    {{method_field('PUT')}}
@endsection