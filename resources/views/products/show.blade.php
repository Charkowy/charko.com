@extends('layouts.app')

@section('content')
    @include('includes.formprod', [
    'value' => '',
    'disabled' => 'disabled',
    'required' => '',
    'hidden' => 'hidden',
    'state' => 'available',
    'routeVariable' => 'show',
    'method' => 'POST',
    'actionProd' => 'Product'
])
@endsection