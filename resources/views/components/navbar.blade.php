<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('article.index')}}" class="nav-link" aria-current="page">Tutti gli articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a href="{{route('byCategory', ['category' => $category])}}" class="dropdown-item text-capitalize">{{$category->name}}</a>
                        </li>
                        @if(!$loop->last)
                        <hr class="dropdown-divider">
                        @endif
                        @endforeach
                    </ul>
                </li>
                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a href="{{route('revisor.index')}}" class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25">
                        Zona revisore
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{\App\Models\Article::toBeRevisedCount()}}
                        </span>
                    </a>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('create.article')}}" class="dropdown-item">Pubblica un articolo</a></li>
                        <li>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                        </li>
                        <form action="{{route('logout')}}" method="POST" class="d-none text-danger" id="form-logout">@csrf</form>
                    </ul>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, utente!
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('login')}}" class="dropdown-item">Accedi</a></li>
                        <hr class="dropdown-divider">
                        <li><a href="{{route('register')}}" class="dropdown-item">Registrati</a></li>
                    </ul>
                </li>
                @endauth
            </div>
        </div>
        <form class="d-flex ms-auto" role="search" action="{{route('article.search')}}" method="GET">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Cerca un articolo" name="query">
                <button class="input-group-text btn btn-outline-success" type="submit" id="basic-addon2">Cerca</button>
            </div>
        </form>
    </nav>