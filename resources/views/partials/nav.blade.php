<nav class="navbar navbar-expand-lg navbar-light ">

    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('inicio') }}"><img src="https://i.ibb.co/fCnn8cy/gatito-blog-tras.png" alt="gatito-tras" border="0"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul  class="navbar-nav mr-auto">
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
        </div>
        <!--Log in, Registrer-->
        <section class="d-flex gap-1">
          @if (auth()->check())
        
          <a class="nav-link border bg-seconary text-dark" href="#"><strong>{{ auth()->user()->login }}</strong></a>
          <a class="nav-link border bg-seconary " href="{{ route('logout') }}">Logout</a>
      
      @endif
      @if (auth()->guest())
        <div class="{{ setActivo('login') }} nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </div>
      @endif
        </section>
        </form>
    </div>
  </nav>



