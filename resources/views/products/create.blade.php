@extends('layouts.app')
@section('content')
    @php
   
    $value= "";
    $disabled= "";
    $required= "";
    $hidden="";
    $state="available";
    $routeVariable="store";
    $method = 'POST';
    $actionProd='Crear Producto';
    $routeVariable = 'store'; // Define la variable que necesitas
    @endphp
    @include('includes.formprod', ['routeVariable' => $routeVariable])
@endsection