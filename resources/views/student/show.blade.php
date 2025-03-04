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
                    <h3 class="card-title">{{ $student->name }}</h3>
                </section>
                <section class="card-body">
                    <ul class="list-unstyled">
                        <li><strong>Adresse : </strong><br>{{ $student->address }}</li>
                        <li><strong>Téléphone : </strong>{{ $student->phone }}</li>
                        <li><strong>Email : </strong>{{ $student->email }}</li>
                        <li><strong>Aniversaire : </strong>{{ $student->dateOfBirth }}</li>
                        <li><strong>Ville : </strong>{{ $student->city->name }}</li>
                    </ul>
                </section>
                <footer class="card-footer">
                    <div class="text-center">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Modifier</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Delete
                            </button>
                        </div>
                    </div>
                </footer>
            </article>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this task?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete task</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection