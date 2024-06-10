@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "";
        $hidden="";
        $actionProd='Update category';
        $method = 'PUT';
        $routeVariable="update";
    @endphp
    @include('includes.categoryform', ['routeVariable' => $routeVariable])
@endsection