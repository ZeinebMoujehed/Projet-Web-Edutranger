<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Edutranger</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('actualities') ? 'active' : '' }}" href="{{ route('actualities') }}">Actualités</a>    
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact.form') ? 'active' : '' }}" href="{{ route('contact.form') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('apropos') ? 'active' : '' }}" href="{{ route('apropos') }}">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="{{ route('login') }}">Se connecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
