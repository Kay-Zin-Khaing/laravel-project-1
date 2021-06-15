<div class="box-body">
    <div class="form-group">
        <label for="name">Category Title</label>
        <input type="text" class="form-control" name="name" value="@yield('EditName')" id="name" placeholder="Name">
        @if($errors->has('name'))
        @foreach($errors->get('name') as $error)
            <label class="text-danger">{{$error}}</label>
        @endforeach
        @endif
    </div>
    <div class="form-group">
        <label for="slug">Category Slub</label>
        <input type="text" class="form-control" name="slug" value="@yield('EditSlug')" id="slug" placeholder="Slug">
        @if($errors->has('slug'))
        @foreach($errors->get('slug') as $error)
            <label class="text-danger">{{$error}}</label>
        @endforeach
        @endif
    </div>
</div>
<!-- /.box-body -->