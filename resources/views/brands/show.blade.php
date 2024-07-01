@extends('layouts.app')

@section('content')
@include('includes.brandform', [
    'value' => '',
    'disabled' => 'disabled',
    'required' => '',
    'hidden' => 'hidden',
    'routeVariable' => 'show',
    'method' => 'POST',
    'actionProd' => 'Brand'
])  
@endsection