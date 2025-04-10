@extends('layouts.app')

@section('content')
<div class="container">
    <h1>@lang("lang.__user-index-header-title")</h1>
    @auth
    <div class="mb-4">
        <a href="{{ route('articles.create') }}"
            class="btn btn-primary">@lang("lang.__articles-index-form-create-btn")</a>
    </div>

    @forelse($articles as $article)
    <div class="card mb-3">
        <div class="card-body">
            <h4 class="card-title">
                {{ app()->getLocale() === 'en' ? $article->title_en : $article->title_fr }}
            </h4>
            <p class="card-text">
                {{ app()->getLocale() === 'en' ? $article->content_en : $article->content_fr }}
            </p>
            <p class="card-text">@lang("Comments") ({{ $article->comments->count() }})</p> <!-- Corrigé ici -->
            <small class="text-muted">
                @lang("WriteBy") {{ $article->user->name }} @lang("At") {{ $article->created_at->format('d/m/Y') }}
            </small>
            <div class="mt-2">
                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-primary">@lang("See")</a>
                @if($article->user_id === auth()->id())
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">@lang("Edit")</a>

                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Es-tu sûr de vouloir supprimer cet article ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">@lang("Delete")</button>
                </form>
                @endif
            </div>
        </div>
    </div>
    @empty
    <p>Aucun article disponible.</p>
    @endforelse
    @else
    <p>Veuillez vous connecter pour accéder au forum.</p>
    @endauth
</div>
@endsection