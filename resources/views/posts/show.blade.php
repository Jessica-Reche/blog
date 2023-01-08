@extends('plantilla')

@section('titulo', "Ficha post")

@section('contenido')
    <h1>Ficha del post {{ $post->id }}</h1>
    <p> {{ $post->titulo }}</p>
    <p>{{ $post->contenido }}</p>
    <p>Fecha de creación: {{ $post->created_at }}</p>

@endsection
