@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create a new category</a>
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }} - <a href="{{ route('categories.show', $category) }}">Show</a> | <a href="{{ route('categories.edit', $category) }}">Update</a> |
        <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $category->id }}').submit();">Delete</a>
        <form id="delete-form-{{ $category->id }}" action="{{ route('categories.delete', $category) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection