@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Título">
        <br><br>
        <textarea name="body" placeholder="Contenido"></textarea>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
@endsection
