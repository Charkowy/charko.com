@extends('layouts.app')
@section('content')
    @include('products.partials.form', [
        'value' => '',
        'disabled' => '',
        'required' => '',
        'hidden' => '',
        'routeVariable' => route('products.store'),
        'method' => 'POST',
        'actionProd' => 'Create a product',
        'taxes' => '1',
    ])
@endsection
