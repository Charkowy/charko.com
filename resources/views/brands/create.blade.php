@extends('layouts.app')
@section('content')
    @php
    $value= "";
    $disabled= "";
    $required= "";
    $hidden="";
    $routeVariable="store";
    $method = 'POST';
    $actionProd='Create a Brand';
    $routeVariable = 'store'; // Define la variable que necesitas
    @endphp
    @include('includes.brandform', ['routeVariable' => $routeVariable])
@endsection