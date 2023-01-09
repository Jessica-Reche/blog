
<nav class=" navbar navbar-expand-lg navbar-light bg-light">
  
  <a class="navbar-brand"  href="{{ route('inicio') }}"><img src="https://i.ibb.co/fCnn8cy/gatito-blog-tras.png" alt="gatito-tras" border="0"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('inicio') }}">Inicio </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index') }}">Listado de post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.nuevoPrueba') }}">Crear post</a>
        </li>

      </ul>

   

    </div>
<!--Ocultar elemento en movil y activarlo dentro del dropdown-->



   
   
      
   
  </nav>
