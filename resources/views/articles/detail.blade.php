@extends("layouts.app")
@section("content")
<div class="container" style="max-width: 700px;">
        <div class="card mb-2 border-primary">
            <div class="card-body mb-3">
                <h3 class="card-title mb-4">
                    {{$article->title}}
                </h3>
                <div class="text-muted mb-2">
                    {{$article->created_at}}

                </div>
                <div class="mb-3">
                    {{$article->body}}
                </div>
                <a href={{url("articles/delete/$article->id")}} class="btn btn-sm btn-outline-danger">Delete</a>
            </div>
        </div>
</div>
@endsection