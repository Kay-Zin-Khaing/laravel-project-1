@extends('admin.post.post_field')

@section('SelectMethod')
<div class="form-group">
    <label>Select Tag</label>
    <select name="tags[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
      {{-- Create Finished Tag show and Selected --}}
      @foreach($tags as $tag) 
        <option value="{{$tag->id}}">{{$tag->name}}</option>
      @endforeach
    </select>
</div>
<div class="form-group">
    <label>Select Category</label>
    <select name="categories[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
        {{-- Create Finished Category show and Selected --}}
        @foreach($categories as $category)  
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
</div>
@endsection

@section('CheckMethod')
<div class="checkbox">
  <label>
      <input type="checkbox" name="status" value="1"> Publish
  </label>
</div>
@endsection