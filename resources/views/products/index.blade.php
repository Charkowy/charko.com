@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>
    <form method="GET" action="{{ route('products.index') }}">
        <div class="form-row align-items-end">
            <div class="col">
                <label for="order">Order By Price</label>
                <select class="form-control" id="order" name="order">
                    <option value="" disabled selected>Select Order</option>
                    <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Price: High to Low</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Sort</button>
            </div>
        </div>
    </form>

    <a href="{{ route('products.create') }}" class="btn btn-primary my-3">Create a new product</a>
    <x-product-table :products="$products" />
</div>
@endsection