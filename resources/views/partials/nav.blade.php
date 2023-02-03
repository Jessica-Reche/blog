<nav class="navbar navbar-expand-lg navbar-light ">
  
  <a class="navbar-brand" href="{{ route('inicio') }}"><img src="https://i.ibb.co/fCnn8cy/gatito-blog-tras.png" alt="gatito-tras" border="0"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="{{ setActivo('inicio')}} nav-item">
        <a class="nav-link" href="{{ route('inicio') }}">Inicio </a>
      </li>
      <li class="{{ setActivo('posts.index') }} nav-item">
        <a class="nav-link" href="{{ route('posts.index') }}">Listado de post</a>
      </li>
      @if (auth()->check())
        <li class="{{ setActivo('posts.create') }} nav-item">
          <a class="nav-link" href="{{ route('posts.create') }}">Crear post</a>
        </li>
      @endif
    </ul>

 <div>
   <!--Log in, Registrer-->
   <section class="d-flex justify-content-between gap-5">
    <div class="d-flex gap-1 ">
      @if (auth()->check())
      
        <a class="nav-link" href="#">Bienvenido/a <strong>{{ auth()->user()->login }}</strong></a>
      
      
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
    
    @endif
    @if (auth()->guest())
      <div class="{{ setActivo('login') }} nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </div>
    @endif

    </div>
    
</section>

</div>


</nav>
