@extends('layouts.app')

@section('title', 'Accueil - Maisonneuve Connect')

@section('content')
<!-- Section d'introduction -->
<section class="jumbotron text-center bg-light py-5 fade-in">
    <div class="container-lg">
        <h1 class="display-4 fw-bold">Bienvenue sur Maisonneuve Connect</h1>
        <p class="lead">La plateforme qui connecte les étudiants du Collège Maisonneuve pour des échanges efficaces et
            dynamiques.</p>
        <a href="#features" class="btn btn-primary btn-lg shadow-sm">Découvrez nos fonctionnalités</a>
    </div>
</section>

<!-- Section des fonctionnalités -->
<section id="features" class="py-5 bg-white">
    <div class="container-lg">
        <h2 class="text-center mb-4 fw-bold">Fonctionnalités principales</h2>
        <div class="row">
            <!-- Fonctionnalité 1 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">Vue sur les étudiants</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-people fs-1 text-primary"></i>
                        <p class="card-text mt-3">Accède à des informations essentielles sur les étudiants du Collège
                            Maisonneuve.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/students" class="btn btn-outline-primary">Voir les étudiants</a>
                    </div>
                </div>
            </div>
            <!-- Fonctionnalité 2 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">Networking étudiant</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-chat-dots fs-1 text-primary"></i>
                        <p class="card-text mt-3">Connecte-toi avec d'autres étudiants pour échanger et collaborer.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-outline-primary disabled">Commencer à réseauter</a>
                    </div>
                </div>
            </div>
            <!-- Fonctionnalité 3 -->
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">Chat en direct</h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-chat-right-text fs-1 text-primary"></i>
                        <p class="card-text mt-3">Engage des conversations en temps réel avec tes camarades.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-outline-primary disabled">Accéder au chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section appel à l'action -->
<section class="text-center py-5 bg-primary text-white">
    <div class="container-lg">
        <h2 class="fw-bold">Rejoins la communauté dès maintenant !</h2>
        <p class="lead">Commence à échanger, partager et apprendre avec tes camarades.</p>
        <a href="#" class="btn btn-light btn-lg shadow-sm">S'inscrire</a>
    </div>
</section>
@endsection