@extends('layout')
@section('title', 'User')
@section('content')
<div class="card mt-3 shadow col-md-8 col-sm-12 mx-auto">
    <div class="card-header shadow-lg bg-primary text-white rounded">
        <h1 class="text-center display-4">Users</h1>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-1 ml-auto">
                <a href="{{ route('users.create') }}" class="btn btn-success shadow"><i class="fas fa-user-plus"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 border p-3 text-center bg-info text-white">
                Name
            </div>
            <div class="col-md-3 border p-3 text-center bg-info text-white">
                Email
            </div>
            <div class="col-md-3 border p-3 text-center bg-info text-white">
                Role
            </div>
            <div class="col-md-1 border p-3 text-center bg-info text-white">
                Show
            </div>
            <div class="col-md-1 border p-3 text-center bg-info text-white">
                Edit
            </div>
            <div class="col-md-1 border p-3 text-center bg-info text-white">
                Delete
            </div>
            @forelse ($users as $user)
                <div class="col-md-3 border text-center">
                    {{ $user->name }}
                </div>
                <div class="col-md-3 border text-center">
                    {{ $user->email }}
                </div>
                <div class="col-md-3 border text-center">
                    {{ $user->roles->pluck('name')->implode(' - ') }}
                </div>
                <div class="col-md-1 border text-center">
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info shadow text-white">
                        <i class="fas fa-user-alt"></i>
                    </a>
                </div>
                <div class="col-md-1 border text-center">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success shadow">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
                <div class="col-md-1 border text-center">
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger shadow"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </div>
            @empty
                <div class="col-md-12">
                    No hay usuarios registrados
                </div>
            @endforelse
        </div>
    </div>
</div>
@stop
