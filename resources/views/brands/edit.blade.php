@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "";
        $hidden="";
        $actionProd='Update brand';
        $method = 'PUT';
        $routeVariable="update";
    @endphp
    @include('includes.brandform', ['routeVariable' => $routeVariable])
@endsection