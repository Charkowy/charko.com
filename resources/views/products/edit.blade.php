@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "";
        $hidden="";
        $actionProd='Update product';
        $method = 'PUT';
        $routeVariable="update";
    @endphp
    @include('includes.formprod', ['routeVariable' => $routeVariable])
@endsection