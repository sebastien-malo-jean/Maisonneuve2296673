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
            <article class="card h-100 d-flex flex-column">
                <section class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </section>
                <section class="card-body">
                    <ul class="list-unstyled">
                        <li><strong>Adresse : </strong><br>{{ $student->address }}</li>
                        <li><strong>Téléphone : </strong>{{ $student->phone }}</li>
                        <li><strong>Email : </strong>{{ $user->email }}</li>
                        <li><strong>Aniversaire : </strong>{{ $student->dateOfBirth }}</li>
                        <li><strong>Ville : </strong>{{ $student->city->name }}</li>
                    </ul>
                </section>
                <footer class="card-footer">
                    <div class="text-center">
                        <div class="text-center mb-3">
                            <a href="{{ route('user.edit', $student->id) }}"
                                class="btn btn-outline-primary">Modifier</a>
                        </div>
                    </div>
                </footer>
            </article>
        </div>
    </div>
</section>


@endsection