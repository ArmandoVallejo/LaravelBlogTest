@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <a href="{{ route('posts.index')}}">Volver</a>
    <h1>Titulo: {{ $post->title }}</h1>
    <p><b>Categoria: </b>{{ $post->category }}</p>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.edit', $post)}}">Editar post</a>
    <form action="{{ route('posts.destroy', $post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar post</button>
    </form>
@endsection