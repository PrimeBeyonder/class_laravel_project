@extends("layouts.app")
@section("content")
<div class="container" style="max-width: 700px;">

    @if (session("info"))
        <div class="alert alert-info">
            {{session("info")}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-warning">
            @foreach ($errors->all() as $err )
            {{$err}}
            @endforeach
        </div>
    @endif

        <div class="card mb-2 border-primary">
            <div class="card-body mb-3">
                <h3 class="card-title mb-4">
                    {{$article->title}} <br>
                </h3>
                <div class="text-muted mb-2">
                    <b>Category : </b>
                    {{$article->category->name}}  <br>
                    <b>User : </b>
                    <b class="text-success">{{$article->user->name}}</b> <br>
                    {{$article->created_at}}

                </div>
                <div class="mb-3">
                    {{$article->body}}
                </div>
                @auth
                @can("delete-article", $article)
                <a href={{url("articles/delete/$article->id")}} class="btn btn-sm btn-outline-danger">Delete</a>
                <a href={{url("articles/edit/$article->id")}} class="btn btn-sm btn-outline-primary ms-3">Edit</a>
                @endcan
                @endauth
                
            </div>
        </div>
        <ul class="list-group mt-4">
            <li class="list-group-item active">
                Comments ({{count($article->comments)}})
            </li>
            @foreach ($article->comments as $comment )
                <li class="list-group-item">
                    @auth
                    @can("delete-comment" , $comment)
                        <a href={{url("/comments/delete/$comment->id")}} class="btn-close float-end"></a>
                    @endcan
                    @endauth
                   
                    <b class="text-success">{{$comment->user->name}}</b> <br>
                    {{$comment->content}}
                </li>
            @endforeach
        </ul>
        @auth
            <form action={{url("/comment/add")}} method="post">
        @csrf
        <input type="hidden" name="article_id" value="{{$article->id}}">
        <input type="hidden" name="user_id" value="{{$article->user_id}}">
        <textarea name="content" class="form-control my-4"></textarea>
        <button class="btn btn-secondary">Add Comment</button>
        </form> 
        @endauth
       
</div>
@endsection