<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Filtres</h4>
        </div>
        <div class="card-body">
            <form action="" method="get">
                <div class="mb-3">
                    <label for="city" class="form-label">Ville</label>
                    <select name="city" id="city" class="form-select">
                        <option value="">Toutes les villes</option>
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                </div>
            </form>
        </div>
    </div>
</div>