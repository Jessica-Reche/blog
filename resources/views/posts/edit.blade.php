<!--FORMULARIO DE EDICIÓN DE UN POST-->
 @extends('plantilla')

 @section('titulo', 'Editar post')

 @section('contenido')

<section class="container mx-auto row col-md-8  ">
    <legend class="text-center"><h1>Editar post</h1></legend>
 <form action="{{ route('posts.update', $post) }}" method="POST">

     @method('PUT')
     @csrf

     <div class="form-group">
         <label for="titulo">Título:</label>
         <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo', $post->titulo) }}">
     </div>

     <div class="form-group">
         <label for="contenido">Contenido:</label>
         <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10">{{$post->contenido}}</textarea>
      
   </div>

   <div class="d-flex justify-content-center mt-2">
    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
 </div>

 </form>
</section>
 @endsection

