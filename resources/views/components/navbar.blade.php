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
    </nav>