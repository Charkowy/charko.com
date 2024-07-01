@extends('layouts.app')
@section('content')
@include('includes.categoryform', [
    'value' => '',
    'disabled' => '',
    'required' => '',
    'hidden' => '',
    'actionProd' => 'Update category',
    'method' => 'PUT',
    'routeVariable' => 'update'
])
@endsection