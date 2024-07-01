@extends('layouts.app')
@section('content')
@include('includes.categoryform', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'routeVariable' => 'store',
    'method' => 'POST',
    'actionProd' => 'Create a category'
])
@endsection