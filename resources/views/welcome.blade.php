@extends('layouts.app')

@section('title', 'Accueil - Maisonneuve Connect')

@section('content')
<!-- Section d'introduction -->
<section class="jumbotron text-center bg-light py-5 fade-in">
    <div class="container-lg">
        <h1 class="display-4 fw-bold">Welcome to Maisonneuve Connect</h1>
        <p class="lead">The platform that allows students at Collège Maisonneuve to connect for effective and dynamic
            exchanges.</p>
        <a href="#features" class="btn btn-primary btn-lg shadow-sm">Discover our features</a>
    </div>
</section>

<!-- Section des fonctionnalités -->
<section id="features" class="py-5 bg-white">
    <div class="container-lg">
        <h2 class="text-center mb-4 fw-bold">Main features</h2>
        <div class="row">
            <!-- Fonctionnalité 1 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">View of the students</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-people fs-1 text-primary"></i>
                        <p class="card-text mt-3">Access essential information about students at the College
                            Maisonneuve.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/students" class="btn btn-outline-primary">See the students</a>
                    </div>
                </div>
            </div>
            <!-- Fonctionnalité 2 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">Student Networking</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-chat-dots fs-1 text-primary"></i>
                        <p class="card-text mt-3">Connect with other students to exchange and collaborate.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-outline-primary disabled">Start networking</a>
                    </div>
                </div>
            </div>
            <!-- Fonctionnalité 3 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">Live chat</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-chat-right-text fs-1 text-primary"></i>
                        <p class="card-text mt-3">Engage in real-time conversations with your classmates.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-outline-primary disabled">Access the chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section appel à l'action -->
<section class="text-center py-5 bg-primary text-white">
    <div class="container-lg">
        <h2 class="fw-bold">Join the community now!</h2>
        <p class="lead">Start sharing and learning with your classmates.</p>
        <a href="{{ route('user.create') }}" class="btn btn-light btn-lg shadow-sm">sign up</a>
    </div>
</section>
@endsection