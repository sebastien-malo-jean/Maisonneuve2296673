@extends('layouts.app')
@section('title', 'Registration')
@section('content')
@if(!$errors->isEmpty())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<h1 class="mt-5 mb-4">Registration</h1>
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Registration</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('user.store') }}">
                    @csrf

                    {{-- User fields --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    {{-- Student fields --}}
                    <hr>
                    <h5>Student information</h5>

                    <div class="mb-3">
                        <label for="address" class="form-label">Adress</label>
                        <input type="text" class="form-control" name="address" value="{{old('address')}}">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                    </div>

                    <div class="mb-3">
                        <label for="dateOfBirth" class="form-label">Birthday</label>
                        <input type="date" class="form-control" name="dateOfBirth" value="{{old('dateOfBirth')}}">
                    </div>

                    <div class="mb-3">
                        <label for="city_id" class="form-label">City</label>
                        <select name="city_id" class="form-select">
                            <option value="">Select a city</option>
                            @foreach($cities as $city)
                            <option value="{{ $city->id }}" @selected(old('city_id')==$city->id)>
                                {{ $city->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb3 text-center">
                        <button type="submit" class="btn btn-primary">Create the account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection