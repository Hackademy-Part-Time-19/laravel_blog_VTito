<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div  class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <div style="display: flex; justify-content:center; "  class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li  id="navlink" class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
          <li style="padding-left: 30px"  id="navlink"  class="nav-item">
            <a class="nav-link" href="{{ route('articoli.index') }}">Articoli</a>
          </li>
          <li style="padding-left: 30px"  id="navlink"  class="nav-item">
            <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
          </li>
          <li style="padding-left: 30px"  id="navlink"  class="nav-item">
            <a class="nav-link" href="{{ route('article.create') }}">Crea Articolo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>