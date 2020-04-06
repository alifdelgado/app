@extends('layout')
@section('title', 'Portfolio')
@section('content')
<div class="card mt-3 shadow col-md-8 col-sm-12 mx-auto">
    <div class="card-header shadow-lg bg-primary text-white rounded">
        <h1 class="text-center display-4">Portfolio</h1>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @forelse ($projects as $project)
                <a href="{{ route('projects.show', $project) }}" class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $project->title }}
                    <span class="badge badge-primary badge-pill">{{ $project->created_at->diffForHumans() }}</span>
                </a>
            @empty
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    No project registered
                </li>
            @endforelse
        </ul>
        <div class="row">
            <div class="col-md-6">
                {{ $projects->links() }}
            </div>
            <div class="col-md-4 ml-auto">
                <a href="{{ route('projects.create') }}">Crear nuevo proyecto</a>
            </div>
        </div>
    </div>
</div>
@endsection
