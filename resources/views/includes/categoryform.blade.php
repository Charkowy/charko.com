<div class="container">
    <h1>@php echo $actionProd @endphp</h1>
    <form method="POST" action="{{ route('categories.' . $routeVariable, $category ?? null) }}">
        @csrf
        @if($method !== 'POST')
            @method($method)
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Category</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" {{ $disabled }} {{ $required }}>
        </div>
        <div class="mb-3">
            <label for="parent_id" class="form-label" >Parent</label>
            <select name="parent_id" id="parent_id" class="form-select" {{ $disabled }}>
                    <option value="null" {{ old('parent_id', $category->parent_id ?? '') == $category->id ? 'selected' : '' }}>New</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('parent_id', $category->parent_id ?? '') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary" {{ $hidden }}>Guardar</button>
    </form>
    <a href="{{ route('categories.index') }}">Back</a>
</div>