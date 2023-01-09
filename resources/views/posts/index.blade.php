@extends('plantilla')

@section('titulo', "Listado de posts")

@section('contenido')


    <a class="btn btn-outline-primary" href="{{ route('posts.nuevoPrueba') }}">Añadir post</a>
   
    <h1>Listado de posts </h1>

    <div class="container">
        <div class="row">
        
      @forelse ($posts as $post)    
      <div class="col">
         <div class="card text-center" style="width: 18rem; ">
              <div class="card-body overflow-hidden" style="height: 10rem;">
                 <h5 class="card-title">{{ $post->titulo }} </h5>
                
                 <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                 <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       
                </div>
                <div class="card-footer d-flex justify-content-end " style="background: inherit; border-color: inherit;">
                   
                 <a href="{{ route('posts.show', $post) }} " class="align-self-start btn btn-outline-secondary ">Ver</a>
                 &nbsp;
                 <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                       <button  class="align-self-end btn btn-outline-primary">🗑️</button>
                </form>
                    &nbsp; 
                 <a href="{{ route('posts.editarPrueba', $post) }}" class="btn btn-outline-secondary">✏️</a>
                </div>
            
        
      </div>

    </div>

        @empty
            <li>No se encontraron posts</li>
        @endforelse
      
    
        {{ $posts->links() }}
   
@endsection
