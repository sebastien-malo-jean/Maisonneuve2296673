@extends('layouts.app')

@section('title', 'Home - Maisonneuve Connect')

@section('content')
<!-- Section d'introduction -->
<section class="jumbotron text-center bg-light py-5 fade-in">
    <div class="container-lg">
        <h1 class="display-4 fw-bold">@lang("lang.__welcome-h1")</h1>
        <p class="lead">@lang("lang.__welcome-h1-subtitle")</p>
        <a href="#features" class="btn btn-primary btn-lg shadow-sm">@lang("lang.__welcome-h1-btn")</a>
    </div>
</section>

<!-- Section des fonctionnalités -->
<section id="features" class="py-5 bg-white">
    <div class="container-lg">
        <h2 class="text-center mb-4 fw-bold">@lang("lang.__features-card-title")</h2>
        <div class="row">
            <!-- Fonctionnalité 1 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">@lang("lang.__features-card-1-title")</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-people fs-1 text-primary"></i>
                        <p class="card-text mt-3">@lang("lang.__features-card-1-body")</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/students" class="btn btn-outline-primary">@lang("lang.__features-card-1-btn")</a>
                    </div>
                </div>
            </div>
            <!-- Fonctionnalité 2 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">@lang("lang.__features-card-2-title")</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-chat-dots fs-1 text-primary"></i>
                        <p class="card-text mt-3">@lang("lang.__features-card-2-body")</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-outline-primary disabled">@lang("lang.__features-card-2-btn")</a>
                    </div>
                </div>
            </div>
            <!-- Fonctionnalité 3 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">@lang("lang.__features-card-3-title")</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-chat-right-text fs-1 text-primary"></i>
                        <p class="card-text mt-3">@lang("lang.__features-card-3-body")</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-outline-primary disabled">@lang("lang.__features-card-3-btn")</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section appel à l'action -->
<section class="text-center py-5 bg-primary text-white">
    <div class="container-lg">
        <h2 class="fw-bold">@lang("lang.__CTA-container-title")</h2>
        <p class="lead">@lang("lang.__CTA-container-subtitle")</p>
        <a href="{{ route('user.create') }}"
            class="btn btn-secondary btn-lg shadow-sm">@lang("lang.__CTA-container-btn")</a>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">@lang("lang.__CTA-container-btn-2")</a>
    </div>
</section>
@endsection