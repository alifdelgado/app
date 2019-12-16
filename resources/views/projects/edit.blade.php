@extends('layout')
@section('title', 'Portfolio')
@section('content')
    <h1>Editar proyecto</h1>
    @include('partials.validation-errors')
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @method('PATCH')
        @include('projects.form', ['btnText' => 'Actualizar'])
    </form>
@endsection
