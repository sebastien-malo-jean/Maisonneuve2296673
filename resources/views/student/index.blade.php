@extends('layouts.app')
@section('title', 'Students')
@section('content')

<header class="mb-4">
    <h1>Students list</h1>
    <h2>Here is the list of all the students available on the platform.</h2>
</header>
<div class="row d-flex">
    <div class=" col-md-3">
        @include('layouts.components.filter', ['cities' => $cities])
    </div>
    <div class="col-md-9">
        <div class="row d-flex">
            @foreach($students as $student)
            <div class="col-md-4 mb-3">
                <!-- Carte de l'étudiant -->
                <article class="card h-100 d-flex flex-column">
                    <section class="card-header">
                        <h3 class="card-title">{{ $student->user_name }}</h3>
                    </section>
                    <section class="card-body">
                        <ul class="list-unstyled">
                            <li><strong>Adress : </strong><br>{{ $student->address }}</li>
                            <li><strong>Phone : </strong>{{ $student->phone }}</li>
                            <li><strong>Birthday : </strong>{{ $student->dateOfBirth }}</li>
                            <li><strong>City : </strong>{{ $student->city->name }}</li>
                        </ul>
                    </section>
                    <footer class="card-footer">
                        <div class="text-center">
                            <a href="{{ route('student.show', $student->id) }}" class="btn btn-primary">Show student</a>
                        </div>
                    </footer>
                </article>
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