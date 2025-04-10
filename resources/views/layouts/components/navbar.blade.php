<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="https://www.cmaisonneuve.qc.ca/wp-content/themes/cmaisonneuve/img/template/logo_college_maisonneuve.png"
            alt="Collège Maisonneuve" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">@lang("Home")</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">@lang("Users")</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.index') }}">Forum</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @lang("Students")
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('student.index') }}">@lang("StudentsList")</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @lang("Language") ({{ App::getLocale() }})
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('lang', 'en') }}">@lang("English")</a>
                    <a class="dropdown-item" href="{{ route('lang', 'fr') }}">@lang("French")</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="d-flex justify-content-end me-3">
        @auth
        <span class="navbar-text me-3">@lang("greeting"){{ Auth::user()->name }}</span>
        <a href="{{ route('logout') }}" class="btn btn-secondary ms-2">@lang("Logout")</a>
        @endauth

        @guest
        <a href="{{ route('user.create') }}" class="btn btn-secondary">@lang("CreateAcount")</a>
        <a href="{{ route('login') }}" class="btn btn-primary ms-2">@lang("Login")</a>
        @endguest
    </div>
</nav>