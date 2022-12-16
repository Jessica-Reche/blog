
<nav class=" navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="#">logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('inicio') }}">Inicio </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts_listado') }}">Listado de post</a>
        </li>


      </ul>
    </div>
  </nav>
