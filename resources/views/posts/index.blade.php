@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('content')
<h1>Aqui se muestran todos los posts</h1>
<a href="{{ route('posts.create') }}">Crear nuevo post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
@endsection