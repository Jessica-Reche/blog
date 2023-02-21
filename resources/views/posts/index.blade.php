@extends('plantilla')

@section('titulo', "Listado de posts")

@section('contenido')

  

  <main class="container text-center">
    <section class="row">
        
      <legend><h1>Listado de posts </h1></legend>
      @if (auth()->check())
      <div class="d-flex justify-content-center mb-2">
        <a class="btn btn-outline-primary" href="{{ route('posts.create') }}">Añadir post</a>
      </div>
      @endif
      @forelse ($posts as $post)
        <section class=" col-md-5 col-lg-auto pb-4">
          <article class="card text-center" style="width: 18rem;">
            <section class="card-body overflow-hidden" style="height: 10rem;">
              <h5 class="card-title">{{ $post->titulo }} ({{ $post->usuario->login }}) </h5>
              <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
              <p class="card-text ">{{ $post->contenido }}</p>
            </section>
            <section class="card-footer d-flex justify-content-end" style="background: inherit; border-color: inherit;">
              <a href="{{ route('posts.show', $post) }}" class="align-self-start btn btn-outline-secondary">Ver</a>&nbsp;
            
              <form action="{{ route('posts.like', $post->id) }}" method="POST">
                @method('PUT')  
                @csrf
                <button class="align-self-end btn btn-outline-secondary {{isset($post->like)&&$post->like?'disabled':''}}">🖤{{$post->like}}</button>
              </form>
               
              &nbsp;
              <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @method('DELETE')
                @csrf
       
                @if (auth()->check())
                @if (isset($post->usuario_id) && auth()->user()->id == $post->usuario_id || auth()->user()->rol == 'admin')
                <button class="align-self-end btn btn-outline-primary">🗑️</button>
                @endif 
                @endif
              </form>
              &nbsp;
              @if (auth()->check())
              @if (isset($post->usuario_id) && auth()->user()->id == $post->usuario_id || auth()->user()->rol == 'admin')
              <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-secondary">✏️</a>
              @endif
              @endif
             
            </section>
          </article>
        </section>
        &nbsp;
      @empty
        <li>No se encontraron posts</li>
      @endforelse
      {{ $posts->links() }}
    </section>
  </main>
@endsection
