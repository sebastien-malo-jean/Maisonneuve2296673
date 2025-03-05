@extends('layouts.app')
@section('title', "Édition d'un étudiant")
@section('content')
<header class="mb-5">
    <h1>Édition d'un étudiant</h1>
</header>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <article class=" h-100 d-flex flex-column">
                <section>
                    <form action="{{ route('student.update', $student->id) }}" method="post">
                        @csrf
                        @method('put')
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <label for="name" class="form-label"><strong>Nom : </strong></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name', $student->name) }}">
                                @if ($errors->has('name'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('name')}}
                                </div>
                                @endif
                            </li>
                            <li class="mb-3">
                                <label for="address" class="form-label"><strong>Adresse : </strong></label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ old('address', $student->address) }}">
                                @if ($errors->has('address'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('address')}}
                                </div>
                                @endif
                            </li>
                            <li class="mb-3">
                                <label for="phone" class="form-label"><strong>Téléphone : </strong></label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ old('phone', $student->phone) }}">
                                @if ($errors->has('phone'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('phone')}}
                                </div>
                                @endif
                            </li>
                            <li class="mb-3">
                                <label for="email" class="form-label"><strong>Email : </strong></label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email', $student->email) }}">
                                @if ($errors->has('email'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('email')}}
                                </div>
                                @endif
                            </li>
                            <li class="mb-3">
                                <label for="dateOfBirth" class="form-label"><strong>Aniversaire : </strong></label>
                                <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control"
                                    value="{{ old('dateOfBirth', $student->dateOfBirth) }}">
                                @if ($errors->has('dateOfBirth'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('dateOfBirth')}}
                                </div>
                                @endif
                            </li>
                            <li class="mb-3">
                                <label for="city_id" class="form-label">Ville</label>
                                <select name="city_id" id="city_id" class="form-select">
                                    <option value="">Toutes les villes</option>
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}" @selected(old('city_id', $student->city_id) ==
                                        $city->id)>
                                        {{ $city->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('city_id'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('city_id')}}
                                </div>
                                @endif
                            </li>
                        </ul>
                </section>
                <div class="text-center mb-3">
                    <input type="submit" value="Enregistrer" class="btn btn-primary">
                </div>
                </form>
            </article>
        </div>
    </div>
</section>
@endsection