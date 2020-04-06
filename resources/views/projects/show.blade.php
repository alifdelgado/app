@extends('layout')
@section('title', 'Portafolio | ' . $project->title)
@section('content')
<div class="card mt-3 shadow col-md-8 col-sm-12 mx-auto">
    <div class="card-header shadow-lg bg-primary text-white rounded">
        <h1 class="text-center display-4">{{ $project->title }}</h1>
    </div>
    <div class="card-body">
        <p class="card-text">{{ $project->description }}</p>
        <h6 class="card-subtitle mb-2 text-muted">{{ $project->created_at->diffForHumans() }}</h6>
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning shadow">Editar</a>
            </div>
            <div class="col-md-2">
                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger shadow">Delete</button>
                </form>
            </div>
            <div class="col-md-4">
                <a href="{{ route('projects.index') }}" class="btn btn-success shadow"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@stop
