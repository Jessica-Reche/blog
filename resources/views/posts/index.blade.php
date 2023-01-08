@extends('plantilla')

@section('titulo', "Listado de posts")

@section('contenido')
    <h1>Listado de posts</h1>
    <ul>
        @forelse ($posts as $post)
            <li>{{ $post->titulo }}  <a href="{{ route('posts.show', $post) }}">ver</a></li>

        @empty
            <li>No se encontraron posts</li>
        @endforelse
        </ul>
    
        {{ $posts->links() }}
   
@endsection
