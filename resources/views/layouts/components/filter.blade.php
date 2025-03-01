<div class="card">
    <div class="card-header">
        <h4 class="card-title">Filtres</h4>
    </div>
    <div class="card-body">
        <form action="" method="get">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="birthOfDate" class="form-label">Anniversaire</label>
                <input type="date" id="birthOfDate" name="birthOfDate" class="form-control">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ville</label>
                <select name="city" id="city" class="form-select">
                    <option value="">Toutes les villes</option>
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="order" id="asc" value="asc" checked>
                <label class="form-check-label" for="asc">
                    Ordre Ascendant
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="order" id="desc" value="desc">
                <label class="form-check-label" for="desc">
                    Ordre Descendant
                </label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Filtrer</button>
            </div>
        </form>
    </div>
</div>