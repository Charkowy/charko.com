@extends('layouts.app')

@section('content')
@php
         // Define la variable que necesitas
        $value= "";
        $disabled= "disabled";
        $required= "";
        $hidden="hidden";
        $state="available";
        $routeVariable="";
        $method = 'POST';
        $actionProd='Product';
        $routeVariable = 'show';
    @endphp
    @include('includes.formprod', ['routeVariable' => $routeVariable])
@endsection