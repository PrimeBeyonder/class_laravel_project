@extends("layouts.app")
@section("content")
<div class="container" style="max-width: 800px">
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
            <option value="1">News</option>
            <option value="2">Tech</option>
        </select>
        <button class="btn mt-3 btn-primary">Add Article</button>
    </div>
  </form>
</div>
@endsection