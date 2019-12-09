@extends('layout')
@section('title', 'Portafolio | ' . $project->title)
@section('content')
    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
