<div class="card">
    @php $locale = session()->get('locale'); @endphp
    <div class="card-header">
        <h4 class="card-title">@lang("lang.__filters-card-title")</h4>
    </div>
    <div class="card-body">
        <form action="" method="get">
            <div class="mb-3">
                <label for="name" class="form-label">@lang("lang.__filters-form-label-Name")</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">@lang("lang.__filters-form-label-Email")</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="birthOfDate" class="form-label">@lang("lang.__filters-form-label-Birthday")</label>
                <input type="date" id="birthOfDate" name="birthOfDate" class="form-control">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">@lang("lang.__filters-form-label-City")</label>
                <select name="city" id="city" class="form-select">
                    <option value="">@lang("lang.__filters-form-label-City-option")</option>
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="orderBy" class="form-label">@lang("lang.__filters-form-label-OrderBy")</label>
                <select name="orderBy" id="orderBy" class="form-select">
                    <option value="name" {{ request('orderBy') == 'name' ? 'selected' : '' }}>
                        @lang("lang.__filters-form-label-OrderBy-option-1")</option>
                    <option value="dateOfBirth" {{ request('orderBy') == 'dateOfBirth' ? 'selected' : '' }}>
                        @lang("lang.__filters-form-label-OrderBy-option-2")
                    </option>
                    <option value="email" {{ request('orderBy') == 'email' ? 'selected' : '' }}>
                        @lang("lang.__filters-form-label-OrderBy-option-3")</option>
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="order" id="asc" value="asc" checked>
                <label class="form-check-label" for="asc">
                    @lang("lang.__filters-form-label-radio-1")
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="order" id="desc" value="desc">
                <label class="form-check-label" for="desc">
                    @lang("lang.__filters-form-label-radio-2")
                </label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">@lang("lang.__filters-form-btn")</button>
            </div>
        </form>
    </div>
</div>