@extends('layouts.app')
@section('title', 'Edit Comment')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">@lang("lang.__comment-edit-header-title")</h1>

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

        <div class="form-group">
            <label for="content">@lang('Comment') :</label>
            <textarea id="content" name="content" class="form-control" rows="5"
                required>{{ old('content', $comment->content) }}</textarea>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">@lang('Update')</button>
            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-secondary">@lang('Cancel')</a>
        </div>
    </form>
</div>
@endsection