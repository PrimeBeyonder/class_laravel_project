@extends("layouts.app")
@section("content")
<div class="container" style="max-width: 700px;">
        <div class="card mb-2 border-primary">
            <div class="card-body mb-3">
                <h3 class="card-title mb-4">
                    {{$article->title}}
                </h3>
                <div class="text-muted mb-2">
                    <b>Category : </b>
                    {{$article->category->name}}  
                    {{$article->created_at}}

                </div>
                <div class="mb-3">
                    {{$article->body}}
                </div>
                <a href={{url("articles/delete/$article->id")}} class="btn btn-sm btn-outline-danger">Delete</a>
            </div>
        </div>
        <ul class="list-group mt-4">
            <li class="list-group-item active">
                Comments ({{count($article->comments)}})
            </li>
            @foreach ($article->comments as $comment )
                <li class="list-group-item">
                    <a href={{url("/comments/delete/$comment->id")}} class="btn-close float-end"></a>
                    {{$comment->content}}
                </li>
            @endforeach
        </ul>
        <form action={{url("/comment/add")}} method="post">
        @csrf
        <input type="hidden" name="article_id" value="{{$article->id}}">
        <textarea name="content" class="form-control my-4"></textarea>
        <button class="btn btn-secondary">Add Comment</button>
        </form>
</div>
@endsection