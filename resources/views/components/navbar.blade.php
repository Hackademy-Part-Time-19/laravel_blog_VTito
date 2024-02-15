<nav style="height:60px" class="navbar navbar-expand-lg bg-body-tertiary">
    <div  class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div style="display: flex; justify-flex-start; " class="collapse navbar-collapse" id="navbarNav">
            <ul style="width: 100%" class="navbar-nav">
                <li id="navlink" class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li style="padding-left: 30px" id="navlink" class="nav-item">
                    <a class="nav-link" href="{{ route('articoli.index') }}">Articoli</a>
                </li>
                <li style="padding-left: 30px" id="navlink" class="nav-item">
                    <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                </li>
                <li style="padding-left: 30px" id="navlink" class="nav-item">
                    <a class="nav-link" href="{{ route('article.create') }}">Crea Articolo</a>
                </li>
            </ul>
            @auth
                <div  style="display: flex; align-items:center; justify-content:flex-end;width:80%;">
                    <form style="padding-top:5px" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            @endauth
            @guest
                <div class="dropdown mx-5" >
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Autenticati</button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('register') }}">Registrati</a>
                        </li>
                    </ul>
                </div>
            @endguest


        </div>
    </div>
</nav>
