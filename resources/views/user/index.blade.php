@extends('layouts.app')
@section('title', 'Users')
@section('content')
@if (session('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<h1 class="mt-5 mb-4">@lang("lang.__user-index-header-title")</h1>
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-md-12">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">@lang("lang.__user-index-table-title")</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">@lang("User")</th>
                            <th scope="col">@lang("Phone")</th>
                            <th scope="col">@lang("Address")</th>
                            <th scope="col">@lang("City")</th>
                            <th scope="col">@lang("YearOfBirth")</th>
                            <th scope="col">@lang("Edit")</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->students->phone}}</td>
                            <td>{{$user->students->address}}</td>
                            <td>{{$user->students->city->name}}</td>
                            <td>{{ date('Y', strtotime($user->students->dateOfBirth)) }}</td>
                            <td>

                                @if (Auth::user()->id === $user->id)

                                <a href="{{route('user.edit', $user->id)}}"
                                    class="btn btn-sm btn-outline-success">@lang("Edit")</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection