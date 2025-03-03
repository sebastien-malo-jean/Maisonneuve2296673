<article class="card h-100 d-flex flex-column">
    <section class="card-body">
        <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <ul class="list-unstyled">
                <li class="mb-3">
                    <label for="name" class="form-label"><strong>Nom : </strong></label>
                    <input type="text" name="name" id="name" class="form-control">
                </li>
                <li class="mb-3">
                    <label for="address" class="form-label"><strong>Adresse : </strong></label>
                    <input type="text" name="address" id="address" class="form-control">
                </li>
                <li class="mb-3">
                    <label for="phone" class="form-label"><strong>Téléphone : </strong></label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </li>
                <li class="mb-3">
                    <label for="email" class="form-label"><strong>Email : </strong></label>
                    <input type="email" name="email" id="email" class="form-control">
                </li>
                <li class="mb-3">
                    <label for="dateOfBirth" class="form-label"><strong>Aniversaire : </strong></label>
                    <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control">
                </li>
                <li class="mb-3">
                    <label for="city" class="form-label">Ville</label>
                    <select name="city" id="city" class="form-select">
                        <option value="">Toutes les villes</option>
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </li>
            </ul>
    </section>
    <div class="text-center mb-3">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
    </form>
</article>