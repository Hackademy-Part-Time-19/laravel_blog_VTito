<nav id="navbarContainer" class="navbar navbar-expand-lg bg-body-tertiary">
    <div style="background-color:trasparent;" id="navbar" class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div style="display: flex; justify-flex-start; " class="collapse navbar-collapse" id="navbarNav">
            <ul style="width: 100%" class="navbar-nav">
                <li id="navlink" class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li style="padding-left: 30px" id="navlink" class="nav-item">
                    <a class="nav-link active" href="{{ route('articles.index') }}">Articoli</a>
                </li>
                <li style="padding-left: 30px" id="navlink" class="nav-item">
                    <a class="nav-link active" href="{{ route('contacts') }}">Contatti</a>
                </li>
                <li style="padding-left: 30px" id="navlink" class="nav-item">
                    <a class="nav-link active" href="{{ route('articles.create') }}">Crea Articolo</a>
                </li>
            </ul>

            <div style="font-weight:800;margin-right:20px;" class="dropdown">
                <button style="font-weight: 800;" class="btn btn-secondary dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Categorie
                </button>
                <ul class="dropdown-menu">
                    @foreach ($categories as $categorie)
                        <li>
                            <a class="dropdown-items"
                                href="{{ route('article.byCategory', $categorie) }}">{{ $categorie->name }}</a>
                        </li>
                    @endforeach
                    @auth
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdpwn-item" href="{{route('category.index')}}">Gestione Categorie</a>
                    </li>
                    @endauth
                </ul>
            </div>
            @auth

                <form style= "height:20px; margin-right:40px; margin-bottom:19px;" action="{{ route('logout') }}"
                    method="POST">
                    @csrf
                    <button style="font-weight:800;" class="btn btn-secondary" type="submit">Logout</button>
                </form>

            @endauth
            @guest
                <div class="dropdown mx-5">
                    <button style="font-weight:800;" class="btn btn-secondary dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false"> Autenticati</button>
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
