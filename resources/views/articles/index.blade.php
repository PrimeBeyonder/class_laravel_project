@extends("layouts.app")
@section("content")
<div class="container" style="max-width: 800px">
    @if (session("info"))
        <div class="alert alert-info">
            {{session("info")}}
        </div>
    @endif
    @foreach ($articles as $article)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title mb-4">
                    {{$article->title}}
                </h3>
                <div class="text-muted mb-3">
                    {{$article->created_at}}

                </div>
                <div class="mb-4">
                    {{$article->body}}
                </div>
                <a href={{url("articles/detail/$article->id")}}>View Detail</a>
            </div>
        </div>
    @endforeach
    {{$articles->links()}}
</div>
@endsection