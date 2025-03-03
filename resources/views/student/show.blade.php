@extends('layouts.app')
@section('title', "Présentation d'étudiant")
@section('content')
<header class="mb-5">
    <h1>Présentation d'étudiant</h1>
    <h2>Voici la carte de l'étudiant(e) {{ $student->name }}.</h2>
</header>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('layouts.components.studentCardGet', ['student' => $student])
        </div>
    </div>
</section>
@endsection