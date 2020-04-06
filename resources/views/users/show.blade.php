@extends('layout')
@section('title', 'Users | ' . $user->name)
@section('content')
<div class="card mt-3 shadow col-md-8 col-sm-12 mx-auto">
    <div class="card-header shadow-lg bg-primary text-white rounded">
        <h1 class="text-center display-4">{{ $user->name }}</h1>
    </div>
    <div class="card-body">
        <h3 class="card-text">{{ $user->name }}</h3>
        <p class="card-text">{{ $user->email }}</p>
        <h6 class="card-subtitle mb-2 text-muted">{{ $user->created_at->diffForHumans() }}</h6>
        <div class="row">
            @can('edit', $user)
                <div class="col-md-2">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning shadow">Editar</a>
                </div>
            @endcan
            @if (auth()->user()->hasRoles(['admin']))
                <div class="col-md-2">
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger shadow">Delete</button>
                    </form>
                </div>
            @endif
            <div class="col-md-4">
                <a href="{{ route('users.index') }}" class="btn btn-success shadow"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@stop
