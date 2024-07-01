@extends('layouts.app')
@section('content')
@include('includes.brandform', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'actionProd' => 'Update brand',
    'method' => 'PUT',
    'routeVariable' => 'update'
])
@endsection