@extends('layouts.app')
@section('title', "Création d'un étudiant")
@section('content')
<header class="mb-5">
    <h1>Création d'un étudiant</h1>
</header>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('layouts.components.studentCardPost')
        </div>
    </div>
</section>
@endsection