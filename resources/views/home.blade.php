@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-dash col-2 m-1" style="width: 18rem;">
            <a href="{{route('article.index')}}">
                <div class="card-body">
                    <h3>Pedidos</h3>
                    <h6>Total de pedidos {{$articles}}</h6>
                </div>
            </a>
        </div>
        <div class="card-dash col-2 m-1" style="width: 18rem;">
            <a href="{{route('sucursal.index')}}">
                <div class="card-body">
                    <h3>Sucursales</h3>
                    <h6>Sucursales: {{$sucursals}}</h6>
                </div>
            </a>
        </div>
    </div>
    @endsection
