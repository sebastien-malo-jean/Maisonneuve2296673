@extends('layouts.app')
@section('title', 'Students')
@section('content')

<header class="mb-3">
    <h1>Liste des étudiants</h1>
    <h2>Voici la liste de tous les Étudiants disponibles sur la platforme.</h2>
</header>

<div class="row">
    <div class="col-md-2">
        @include('layouts.components.filter')
    </div>
    <div class="col-md-10 row">
        @foreach($students as $student)
        <div class="col-md-4 mb-3">
            @include('layouts.components.studentCard')
        </div>
        @endforeach
    </div>
</div>
@endsection