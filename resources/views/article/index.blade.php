@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Forum des étudiants</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @auth
    <div class="mb-4">
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Écrire un article</a>
    </div>

    @forelse($articles as $article)
    <div class="card mb-3">
        <div class="card-body">
            <h4 class="card-title">
                {{ app()->getLocale() === 'fr' ? $article->title_fr : $article->title_en }}
            </h4>
            <p class="card-text">
                {{ app()->getLocale() === 'fr' ? $article->content_fr : $article->content_en }}
            </p>
            <small class="text-muted">
                Écrit par {{ $article->user->name }} le {{ $article->created_at->format('d/m/Y') }}
            </small>
            <div class="mt-2">
                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-primary">Voir</a>
                @if($article->user_id === auth()->id())
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">Modifier</a>

                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Es-tu sûr de vouloir supprimer cet article ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Supprimer</button>
                </form>
                @endif
            </div>
        </div>
    </div>
    @empty
    <p>Aucun article pour le moment.</p>
    @endforelse
    @else
    <p>Veuillez vous connecter pour accéder au forum.</p>
    @endauth
</div>
@endsection