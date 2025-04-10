@extends('layouts.app')
@section('title', "Présentation d'étudiant")
@section('content')
<header class="mb-5">
    <h1>@lang("lang.__student-show-header-title")</h1>
    <h2>@lang("lang.__student-show-header-subtitle") {{ $user->name }}.</h2>
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
                        <li><strong>@lang("Address") : </strong><br>{{ $student->address }}</li>
                        <li><strong>@lang("Phone") : </strong>{{ $student->phone }}</li>
                        <li><strong>@lang("Email") : </strong>{{ $user->email }}</li>
                        <li><strong>@lang("Birthday") : </strong>{{ $student->dateOfBirth }}</li>
                        <li><strong>@lang("City") : </strong>{{ $student->city->name }}</li>
                    </ul>
                </section>
                <footer class="card-footer">
                    <div class="text-center">
                        <div class="text-center mb-3">
                            @if ($student->id == auth()->user()->id)
                            <a href="{{ route('user.edit', $student->id) }}"
                                class="btn btn-outline-primary">@lang("Edit")</a>
                            @endif
                        </div>
                    </div>
                </footer>
            </article>
        </div>
    </div>
</section>


@endsection