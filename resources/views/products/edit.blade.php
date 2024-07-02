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
    'taxes' => '1'
])
@endsection