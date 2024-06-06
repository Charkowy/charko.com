@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Brands</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-primary">Create a new brand</a>
    <ul>
        @foreach ($brands as $brand)
            <li>{{ $brand->brand }} - <a href="{{ route('brands.show', $brand) }}">Show</a> | <a href="{{ route('brands.edit', $brand) }}">Update</a> |
        <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $brand->id }}').submit();">Delete</a>
        <form id="delete-form-{{ $brand->id }}" action="{{ route('brands.delete', $brand) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection