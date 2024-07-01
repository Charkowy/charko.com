@extends('layouts.app')

@section('content')
@include('includes.categoryform', [
    'value' => '',
    'disabled' => 'disabled',
    'required' => '',
    'hidden' => 'hidden',
    'routeVariable' => 'show',
    'method' => 'POST',
    'actionProd' => 'Category'
])
@endsection