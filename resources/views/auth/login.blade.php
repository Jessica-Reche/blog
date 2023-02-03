@extends('plantilla')

@section('titulo', 'Login')

@section('contenido')




    <section class="container mx-auto row col-9 col-md-4 border border-dark bg-white ">
        <legend class="text-center"><h1>Login</h1></legend>
        @if (!empty($error))
        <div class="text-danger">
            {{ $error }}
        </div>
        @endif
    <form  action="{{ route('login') }}" method="POST">
        @csrf
        <section class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control"
             name="login" id="login" />
           
        </section>
    
        <section class="form-group ">
            <label for="password">Password:</label>
            <input type="password" class="form-control"
             name="password" id="password" />
          
        </section>
      
       <div class="d-flex justify-content-center m-2">
          <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
       </div>
        
    
    </form>
    </section>

@endsection
