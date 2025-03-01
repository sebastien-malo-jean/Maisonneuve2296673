<article class="card">
    <section class="card-header">
        <h3 class="card-title">{{ $student->name }}</h3>
    </section>
    <section class="card-body">
        <ul class="list-unstyled">
            <li><strong>Adresse</strong><br>{{ $student->address }}</li>
            <li><strong>Téléphone</strong><br>{{ $student->phone }}</li>
            <li><strong>email</strong><br>{{ $student->email }}</li>
            <li><strong>Aniversaire</strong><br>{{ $student->dateOfBirth }}</li>
            <li><strong>Ville</strong><br>{{ $student->city_id }}</li>
        </ul>
    </section>
    <footer class="card-footer">
        <div class="text-center">
            <a href="#" class="btn btn-primary">Voir l'étudiant</a>
        </div>
    </footer>
</article>