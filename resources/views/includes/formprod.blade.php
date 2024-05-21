<div class="container">
    <h1>@php echo $actionProd @endphp</h1>
    <form method="POST" action="{{ route('products.' . $routeVariable, $product ?? null) }}">
        @csrf
        @if($method !== 'POST')
            @method($method)
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $product->title ?? '') }}" {{ $disabled }} {{ $required }}>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" {{ $disabled }} {{ $required }}>{{ old('description', $product->description ?? '') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="state" class="form-label" >State</label>
            <select name="state" id="state" class="form-select"{{ $disabled }} >
                <option value="available" {{ $state == 'available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ $state == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                <option value="unknown" {{ $state == 'unknown' ? 'selected' : '' }}>Unknown</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" {{ $hidden }}>Guardar</button>
    </form>
    <a href="{{ route('products.index') }}">Back</a>
</div>