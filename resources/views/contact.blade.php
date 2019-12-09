@extends('layout')
@section('title', 'Contact')
@section('content')
    <h1>Contact</h1>
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
        {!! $errors->first('name', '<small>:message</small>') !!}<br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        {!! $errors->first('email', '<small>:message</small>') !!}<br>
        <input type="text" name="subject" placeholder="Asunto" value="{{ old('subject') }}">
        {!! $errors->first('subject', '<small>:message</small>') !!}<br>
        <textarea name="content" placeholder="Mensaje">{{ old('content') }}</textarea>
        {!! $errors->first('content', '<small>:message</small>') !!}<br>
        <button type="submit">Enviar</button>
    </form>
@endsection
