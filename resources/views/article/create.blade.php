@extends('layouts.app')
@section('title', 'Create Article')
@section('content')
<div class="container">
    <h1>Écrire un nouvel article</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title_fr" class="form-label">Titre (Français)</label>
            <input type="text" class="form-control" name="title_fr" id="title_fr" value="{{ old('title_fr') }}"
                required>
        </div>

        <div class="mb-3">
            <label for="content_fr" class="form-label">Contenu (Français)</label>
            <textarea class="form-control" name="content_fr" id="content_fr" rows="5"
                required>{{ old('content_fr') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="title_en" class="form-label">Title (English)</label>
            <input type="text" class="form-control" name="title_en" id="title_en" value="{{ old('title_en') }}"
                required>
        </div>

        <div class="mb-3">
            <label for="content_en" class="form-label">Content (English)</label>
            <textarea class="form-control" name="content_en" id="content_en" rows="5"
                required>{{ old('content_en') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Publier l'article</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection