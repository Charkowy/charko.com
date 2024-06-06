@extends('layouts.app')

@section('content')
@php
         // Define la variable que necesitas
        $value= "";
        $disabled= "disabled";
        $required= "";
        $hidden="hidden";
        $routeVariable="";
        $method = 'POST';
        $actionProd='Brand';
        $routeVariable = 'show';
    @endphp
    @include('includes.brandform', ['routeVariable' => $routeVariable])
@endsection