@extends('layouts.app')
@section('content')
@include('includes.formprod', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'routeVariable' => 'store',
    'method' => 'POST',
    'actionProd' => 'Create a product'
])
@endsection