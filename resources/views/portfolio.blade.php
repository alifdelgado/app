@extends('layout')
@section('title', 'Portfolio')
@section('content')
    <h1>Portfolio</h1>
    @forelse ($projects as $project)
        <p><h5>{{ $project->title }}</h5></p>
    @empty
        <h3>No project registered</h3>
    @endforelse
    {{ $projects->links() }}
@endsection
