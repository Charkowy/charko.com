@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Productos</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Crear Nuevo Producto</a>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->title }} - <a href="{{ route('products.show', $product) }}">Show</a> | <a href="{{ route('products.edit', $product) }}">Update</a></li>
        @endforeach
    </ul>
</div>
@endsection