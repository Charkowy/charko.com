@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create a new product</a>
    <ul>
 @foreach ($products as $product)
    <li>
        {{ $product->title }} - 
        <a href="{{ route('products.show', $product) }}">Show</a> | 
        <a href="{{ route('products.edit', $product) }}">Update</a> |
        <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $product->id }}').submit();">Delete</a>
        <form id="delete-form-{{ $product->id }}" action="{{ route('products.delete', $product) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </li>
@endforeach
    </ul>
</div>
@endsection