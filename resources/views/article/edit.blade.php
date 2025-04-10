@extends('layouts.app')

@section('title', __('lang.__article-edit-title'))

@section('content')
<div class="container">
    <h1>@lang("lang.__article-edit-header-title")</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title_fr">@lang('Title') (@lang("French"))</label>
            <input type="text" name="title_fr" id="title_fr" class="form-control"
                value="{{ old('title_fr', $article->title_fr) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="content_fr">@lang('Content') (@lang("French"))</label>
            <textarea name="content_fr" id="content_fr" class="form-control" rows="4"
                required>{{ old('content_fr', $article->content_fr) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="title_en">@lang('Title') (@lang("English"))</label>
            <input type="text" name="title_en" id="title_en" class="form-control"
                value="{{ old('title_en', $article->title_en) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="content_en">@lang('Content') (@lang("English"))</label>
            <textarea name="content_en" id="content_en" class="form-control" rows="4"
                required>{{ old('content_en', $article->content_en) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">@lang('Update')</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">@lang('Cancel')</a>
    </form>
</div>
@endsection