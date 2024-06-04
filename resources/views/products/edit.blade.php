@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "";
        $hidden="";
        $state="available";
        $actionProd='Actualizar Producto';
        $method = 'PUT';
        $routeVariable="update";
    @endphp
    @include('includes.formprod', ['routeVariable' => $routeVariable])
@endsection