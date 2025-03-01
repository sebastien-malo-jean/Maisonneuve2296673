@extends('layouts.app')

@section('title', 'Accueil - Maisonneuve Connect')

@section('content')
<!-- Section d'introduction -->
<section class="jumbotron text-center bg-light py-5">
    <div class="container background-image">
        <img src="https://www.cmaisonneuve.qc.ca/wp-content/themes/cmaisonneuve/img/template/logo_college_maisonneuve.png"
            alt="Collège Maisonneuve" class="img-fluid">
        <h1 class="display-4">Bienvenue sur Maisonneuve Connect</h1>
        <p class="lead">La plateforme qui connecte les étudiants du Collège Maisonneuve pour des échanges efficaces et
            dynamiques.</p>
        <a href="#features" class="btn btn-primary btn-lg">Découvrez nos fonctionnalités</a>
    </div>
</section>

<!-- Section des fonctionnalités -->
<section id="features" class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">Fonctionnalités principales</h2>
        <div class="row">
            <!-- Fonctionnalité 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Vue sur les étudiants du Collège</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Accède à des informations essentielles sur les étudiants du Collège
                            Maisonneuve et reste connecté avec eux pour des projets ou des discussions en ligne.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/students" class="btn btn-primary">Voir les étudiants</a>
                    </div>
                </div>
            </div>
            <!-- Fonctionnalité 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Networking étudiant</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Connecte-toi facilement avec d'autres étudiants pour des projets
                            collaboratifs, des discussions académiques ou simplement pour échanger des idées.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary disabled">Commencer à réseauter</a>
                    </div>
                </div>
            </div>
            <!-- Fonctionnalité 3 -->
            <div class="col-md-4 mb-4 mouse-pointer">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Chat en direct</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Engage des conversations en temps réel avec tes camarades, participe à des
                            discussions instantanées et reste informé de tout ce qui se passe autour de toi.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary disabled">Accéder au chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section appel à l'action -->
<section class="text-center py-5 bg-primary text-white">
    <div class="container">
        <h2>Rejoins la communauté dès maintenant !</h2>
        <p class="lead">Commence à échanger, partager et apprendre avec tes camarades.</p>
        <a href="#" class="btn btn-light btn-lg">S'inscrire</a>
    </div>
</section>


@endsection