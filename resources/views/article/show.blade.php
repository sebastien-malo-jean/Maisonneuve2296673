@extends('layouts.app')
@section('title', 'Students')
@section('content')

@section('content')
<div class="container">
    <h1>{{ app()->getLocale() === 'fr' ? $article->title_fr : $article->title_en }}</h1>
    <p>{{ app()->getLocale() === 'fr' ? $article->content_fr : $article->content_en }}</p>

    <p><strong>Écrit par :</strong> {{ $article->user->name }}</p>
    <p><strong>Date de création :</strong> {{ $article->created_at->format('d/m/Y') }}</p>

    <hr>

    <h4>Commentaires</h4>

    @foreach($article->comments as $comment)
    <div class="card mb-2">
        <div class="card-body">
            <p class="card-text">{{ $comment->content }}</p>
            <small class="text-muted">
                Commenté par {{ $comment->user->name }} le {{ $comment->created_at->format('d/m/Y') }}
            </small>
        </div>
    </div>
    @endforeach

    @auth
    <div class="mt-4">
        <form action="{{ route('comments.store', $article->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control" rows="3" placeholder="Votre commentaire..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Commenter</button>
        </form>
    </div>
    @endauth
</div>
@endsection