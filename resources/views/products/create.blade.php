@extends('layouts.app')
@section('content')
    @php
    $value= "";
    $disabled= "";
    $required= "";
    $hidden="";
    $routeVariable="store";
    $method = 'POST';
    $actionProd='Create a product';
    $routeVariable = 'store'; // Define la variable que necesitas
    @endphp
    @include('includes.formprod', ['routeVariable' => $routeVariable])
@endsection