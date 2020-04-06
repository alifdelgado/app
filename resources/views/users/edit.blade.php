@extends('layout')
@section('title', 'User')
@section('content')
<div class="card mt-3 shadow col-md-8 col-sm-12 mx-auto">
    <div class="card-header shadow-lg bg-primary text-white rounded">
        <h1 class="text-center display-4">Edit {{ $user->name }}</h1>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <a href="{{ route('users.index') }}" class="btn btn-success shadow"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
        @include('partials.validation-errors')
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="row">
            @method('PATCH')
            @include('users.form', ['btnText' => 'Actualizar'])
        </form>
    </div>
</div>
@stop
