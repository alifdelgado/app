@extends('layout')
@section('title', 'Portfolio')
@section('content')
<div class="card mt-3 shadow col-md-8 col-sm-12 mx-auto">
    <div class="card-header shadow-lg bg-primary text-white rounded">
        <h1 class="text-center display-4">Crear proyecto</h1>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <a href="{{ route('projects.index') }}" class="btn btn-success shadow"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
        @include('partials.validation-errors')
        <form action="{{ route('projects.store') }}" method="POST" class="row">
            @include('projects.form', ['btnText' => 'Guardar'])
        </form>
    </div>
</div>
@stop
