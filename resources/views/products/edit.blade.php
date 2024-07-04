@extends('layouts.app')
@section('content')
@include('includes.formprod', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'actionProd' => 'Update product',
    'method' => 'PUT',
    'routeVariable' => 'update',
    'routeVariable' => route('products.' . $routeVariable, $product ?? null),
    'taxes' => '1'
])
@endsection