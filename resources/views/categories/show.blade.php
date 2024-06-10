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
        $actionProd='Category';
        $routeVariable = 'show';
    @endphp
    @include('includes.categoryform', ['routeVariable' => $routeVariable])
@endsection