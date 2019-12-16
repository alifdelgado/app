@extends('layout')
@section('title', 'Portfolio')
@section('content')
    <h1>Crear nuevo proyecto</h1>
    @include('partials.validation-errors')
    <form action="{{ route('projects.store') }}" method="POST">
        @include('projects.form', ['btnText' => 'Guardar'])
    </form>
@endsection
