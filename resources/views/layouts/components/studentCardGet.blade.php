<article class="card h-100 d-flex flex-column">
    <section class="card-header">
        <h3 class="card-title">{{ $student->name }}</h3>
    </section>
    <section class="card-body">
        <ul class="list-unstyled">
            <li><strong>Adresse : </strong><br>{{ $student->address }}</li>
            <li><strong>Téléphone : </strong>{{ $student->phone }}</li>
            <li><strong>Email : </strong>{{ $student->email }}</li>
            <li><strong>Aniversaire : </strong>{{ $student->dateOfBirth }}</li>
            <li><strong>Ville : </strong>{{ $student->city->name }}</li>
        </ul>
    </section>
    <footer class="card-footer">
        <div class="text-center">
            @if(request()->routeIs('student.show') && request()->route('student') instanceof \App\Models\Student &&
            request()->route('student')->id == $student->id)
            <!-- Ne pas afficher le bouton si nous sommes déjà sur la page d'un étudiant -->
            <div class="d-flex justify-content-between">
                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Modifier</a>
                <a href="" class="btn btn-danger">Supprimer</a>
            </div>
            @else
            <a href="{{ route('student.show', $student->id) }}" class="btn btn-primary">Voir l'étudiant</a>
            @endif
        </div>
    </footer>
</article>