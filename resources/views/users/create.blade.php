@extends('layout')
@section('title', 'User')
@section('content')
<div class="card mt-3 shadow col-md-8 col-sm-12 mx-auto">
    <div class="card-header shadow-lg bg-primary text-white rounded">
        <h1 class="text-center display-4">Create user</h1>
    </div>
    <div class="card-body">
        @include('partials.validation-errors')
        <form action="{{ route('users.store') }}" method="POST" class="row">
            @include('users.form', ['btnText' => 'Guardar'])
        </form>
    </div>
</div>
@stop
