@extends('layouts.app')
@section('title', 'Users')
@section('content')
<h1 class="mt-5 mb-4">Users</h1>
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-md-12">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Users</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">other</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>

                            <td>
                                <ul>
                                    @if ($user->student)s->count() > 0)
                                    @forelse($user->students as $student)
                                    <li>{{$student->name}}</li>
                                    @empty
                                    <li class="text-danger"> There is no student to list</li>
                                    @endforelse
                                    @endif
                                </ul>
                            </td>
                            <td>
                                <a href="{{route('user.edit', $user->id)}}"
                                    class="btn btn-sm btn-outline-success">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users }}
            </div>
        </div>
    </div>
</div>
@endsection