@extends('layouts.app')
@section('title', 'Create Article')
@section('content')
<div class="container">
    <h1>@lang("lang.__articles-create-header-title")</h1>

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
            <label for="title_fr" class="form-label">@lang("Title") (@lang("French"))</label>
            <input type="text" class="form-control" name="title_fr" id="title_fr" value="{{ old('title_fr') }}"
                required>
        </div>

        <div class="mb-3">
            <label for="content_fr" class="form-label">@lang("Content") (@lang("French"))</label>
            <textarea class="form-control" name="content_fr" id="content_fr" rows="5"
                required>{{ old('content_fr') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="title_en" class="form-label">@lang("Title") (@lang("English"))</label>
            <input type="text" class="form-control" name="title_en" id="title_en" value="{{ old('title_en') }}"
                required>
        </div>

        <div class="mb-3">
            <label for="content_en" class="form-label">@lang("Content") (@lang("English"))</label>
            <textarea class="form-control" name="content_en" id="content_en" rows="5"
                required>{{ old('content_en') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">@lang("lang.__articles-create-form-btn")</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">@lang(key: "Cancel")</a>
    </form>
</div>
@endsection