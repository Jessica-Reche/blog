
@extends('plantilla')

@section('titulo', 'Crear post')

@section('contenido')

<section class="container mx-auto row col-md-8  border border-dark bg-white">
    <legend class="text-center"><h1>Crear post</h1></legend>
<form  action="{{ route('posts.store') }}" method="POST">
    @csrf
    <section class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}">
       
       @error('titulo')
         <small class="text-danger"> {{ $message }} </small>
       @enderror



    </section>

    <section class="form-group ">
        <label for="contenido">Contenido:</label>
        <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10">{{ old('contenido') }}
            
        </textarea>
        @error('contenido')
        <small class="text-danger">  {{ $message }}</small>
        @enderror
       
      
    </section>
    <!--aUTOR SELECT USANDO POR AHORA EL PRIMER USUARIO QUE ENCUENTRE-->
    <section class="form-group ">
        <label for="usuario_id">Autor:</label>
        <select name="usuario_id" id="usuario_id" class="form-control">
            @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->login }}</option>
            @endforeach
        </select>
        
   </section>
   <div class="d-flex justify-content-center m-2">
      <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
   </div>
    

</form>
</section>







@endsection

