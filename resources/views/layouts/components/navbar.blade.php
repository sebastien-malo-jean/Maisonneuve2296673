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
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Étudiants
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('student.index') }}">Liste d'étudiants</a>
                    <a class="dropdown-item" href="{{ route('student.create') }}">Création d'étudiant</a>
                </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Compte
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Connexion</a>
                    <a class="dropdown-item" href="#">Création de compte</a>
                    <a class="dropdown-item" href="#">Déconnexion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>