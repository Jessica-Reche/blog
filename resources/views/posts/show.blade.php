@extends('plantilla')

@section('titulo', "Ficha post")

@section('contenido')
<section>
     <!--Sección del título-->
     <section>
         <div id="intro" class="p-5 text-center ">
            <h1 class="mb-0 h4">{{ $post->titulo }}</h1>
          </div>
            
         <div class="row align-items-center mb-4">
           <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-5 shadow-1-strong me-2"
                height="35" alt="" loading="lazy" />
                 <span> Publicado el <u>{{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</u> por</span>
                 <a href="" class="text-dark ">{{ $post->usuario->login  }}</a>
         </div>
                
       <!--Sección de contenido-->                 
      </section>

      <section class="border-bottom mb-3">
            <article>
                <p>{{ $post->contenido }}</p>       
            </article>
      </section>
        
  
     <!-- Comentarios -->
    <section class="border-bottom mb-3">
      @forelse($post->comentarios as $comentario)  
             
              <div class="row mb-4">
                <div class="col-2">
                  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg"
                    class="img-fluid shadow-1-strong rounded-5" alt="" />
                </div>
  
                <div class="col-10">
                  <p class="mb-2"><strong>{{ $comentario->usuario->login }} 
                   </strong> <span>{{ Carbon\Carbon::parse($comentario->created_at)->format('d/m/Y') }}</span></p>
                  <p> {{ $comentario->comentario }}</p>
                </div>
              </div>

           
              @empty
              <div class="col-10">
                <p class="mb-2"><strong>No hay comentarios</strong></p>
               
              </div>
          @endforelse
      </section>
    
    
        


</section>

@endsection
