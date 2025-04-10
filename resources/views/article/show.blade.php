@extends('layouts.app')
@section('title', 'Students')
@section('content')

@section('content')
<div class="container">
    <h1>{{ app()->getLocale() === 'fr' ? $article->title_fr : $article->title_en }}</h1>
    <p>{{ app()->getLocale() === 'fr' ? $article->content_fr : $article->content_en }}</p>

    <p><strong>@lang("WritedBy") :</strong> {{ $article->user->name }}</p>
    <p><strong>@lang("CreatedAt") :</strong> {{ $article->created_at->format('d/m/Y') }}</p>

    <hr>

    <h4>@lang("Comments")</h4>

    @foreach($article->comments as $comment)
    <div class="card mb-2">
        <div class="card-body">
            <p class="card-text">{{ $comment->content }}</p>
            <small class="text-muted">
                @lang("CommentedBy") {{ $comment->user->name }} @lang("At") {{ $comment->created_at->format('d/m/Y') }}
            </small>
        </div>
        @if($comment->user_id === auth()->id())
        <form class="m-3"
            action="{{ route('comments.destroy', ['article' => $article->id, 'comment' => $comment->id]) }}"
            method="POST" class="d-inline" onsubmit="return confirm('Es-tu sûr de vouloir supprimer ce commentaire ?')">
            @csrf
            @method('DELETE')
            <a href="{{ route('comments.edit', [$article->id, $comment->id]) }}"
                class="btn btn-sm btn-warning">@lang("Edit")</a>
            <button class="btn btn-sm btn-danger">@lang("Delete")</button>
        </form>
        @endif
    </div>
    @endforeach

    @auth
    <div class="mt-4">
        <form action="{{ route('comments.store', $article->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control" rows="3" placeholder="@lang('YourComment')"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">@lang("CommentOn")</button>
        </form>
    </div>
    @endauth
</div>
@endsection