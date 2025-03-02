@extends('layouts.app')
@section('title', 'Students')
@section('content')

<header class="mb-4">
    <h1>Liste des étudiants</h1>
    <h2>Voici la liste de tous les Étudiants disponibles sur la plateforme.</h2>
</header>
<div class="row-md-3 d-flex">
    <!-- Filtre réduit à une colonne de taille 3 -->
    <div class=" col-md-3">
        @include('layouts.components.filter', ['cities' => $cities])
    </div>
    <!-- Cartes, occupent 9 colonnes -->
    <div class="col-md-9 ms-3">
        <div class="row d-flex">
            @foreach($students as $student)
            <div class="col-md-4 mb-4">
                <!-- Carte de l'étudiant -->
                @include('layouts.components.studentCardGet', ['student' => $student])
            </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $students->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

@endsection