@extends('layouts.app')
@section('title', 'Edit Comment')
@section('content')
<div class="container">
    <h1>Modifier le commentaire</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('comments.update', ['article' => $article->id, 'comment' => $comment->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <textarea name="content" required>{{ old('content', $comment->content) }}</textarea>
        <button type="submit">Mettre à jour</button>
    </form>
</div>
@endsection