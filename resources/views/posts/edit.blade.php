@extends('layouts.app')

@section('title')
    Edit
@endsection

@section('content')
<h1>Editar el post</h1>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">
        Titulo: <input type="text" name="title" value="{{ $post->title }}">
    </label>

    <br>
    <br>

    <label for="">
        Slug: <input type="text" name="title" value="{{ $post->slug }}">
    </label>

    <br>
    <br>

    <label for="">
        Categoria: <input type="text" name="category" value="{{ $post->category }}">
    </label>

    <br>
    <br>

    <label for="">
        Contenido: 
        <textarea name="content">{{ $post->content }}</textarea>
    </label>

    <br>
    <br>

    <button type="submit">Actualizar</button>
    

</form>
@endsection