@extends('layouts.app')
@section('content')
    @php
    $value= "";
    $disabled= "";
    $required= "";
    $hidden="";
    $routeVariable="store";
    $method = 'POST';
    $actionProd='Create a category';
    $routeVariable = 'store'; // Define la variable que necesitas
    @endphp
    @include('includes.categoryform', ['routeVariable' => $routeVariable])
@endsection