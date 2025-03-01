<article class="card">
    <section class="card-header">
        <h3 class="card-title">{{ $student->name }}</h3>
    </section>
    <section class="card-body">
        <ul class="list-unstyled">
            <li><strong>Adresse : </strong>{{ $student->address }}</li>
            <li><strong>Téléphone : </strong>{{ $student->phone }}</li>
            <li><strong>email : </strong>{{ $student->email }}</li>
            <li><strong>Aniversaire : </strong>{{ $student->dateOfBirth }}</li>
            <li><strong>Ville : </strong>{{ $student->city_id }}</li>
        </ul>
    </section>
    <footer class="card-footer">
        <div class="d-flex justify-content-between">
            <a href="{{ route("student.show", $student->id) }}" class="btn btn-primary">Voir</a>
        </div>
    </footer>
</article>