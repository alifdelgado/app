@extends('layout')
@section('title', 'Portafolio | ' . $project->title)
@section('content')
    <h2>{{ $project->title }}</h2>
    <a href="{{ route('projects.edit', $project) }}">Editar</a>
    <form action="{{ route('projects.destroy', $project) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
