@extends("layouts.app")
@section("content")
<div class="container" style="max-width: 800px">
  @if ($errors->any())
  <div class="alert alert-warning">
      @foreach ($errors->all() as $err )
      {{$err}}
      @endforeach
  </div>
@endif
  <form method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Body</label>
        <textarea name="body" class="form-control mb-2"></textarea>
    </div>
    <div class="mb-3">
        <label for="">Category</label>
        <select name="category_id" class="form-select mb-2">
          @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
        <button class="btn mt-3 btn-primary">Add Article</button>
    </div>
  </form>
</div>
@endsection