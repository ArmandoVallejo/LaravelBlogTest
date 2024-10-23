
@extends('layouts.app')

@section('title', 'Laravel 11')

@push('css')
    <style>body { background-color: #f3f3f3; }</style>
@endpush

@section('content')
<div class="max-w-4xl mx-auto px-4">
    <!-- <h1>Bienvenido a la pagina principal</h1> -->
    <x-alert2 type="warning" class="mb-4">
        <x-slot name="title">Título de la alerta</x-slot>
        Contenido de la alerta
    </x-alert2>

    <p>hola mundo</p>
</div>
@endsection

@push('js')
    <script>
        val y=3
        console.log(y)
    </script>
@endpush


    

