@extends('layout')
@section('title', 'Contact')
@section('content')
<div class="card mt-3 shadow col-md-8 col-sm-12 mx-auto">
    <div class="card-header shadow-lg bg-primary text-white rounded">
        <h1 class="text-center display-4">Contact</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('messages.store') }}" method="POST" class="row">
            @csrf
            <div class="form-group col-md-12">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}">
                {!! $errors->first('name', '<small>:message</small>') !!}
            </div>
            <div class="form-group col-md-12">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                {!! $errors->first('email', '<small>:message</small>') !!}
            </div>
            <div class="form-group col-md-12">
                <label>Asunto</label>
                <input type="text" name="subject" class="form-control" placeholder="Asunto" value="{{ old('subject') }}">
                {!! $errors->first('subject', '<small>:message</small>') !!}
            </div>
            <div class="form-group col-md-12">
                <label>Mensaje</label>
                <textarea name="content" class="form-control" placeholder="Mensaje">{{ old('content') }}</textarea>
                {!! $errors->first('content', '<small>:message</small>') !!}
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
