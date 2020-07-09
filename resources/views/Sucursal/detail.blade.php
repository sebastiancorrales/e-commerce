@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col justify-content-left">
            <small>-Detalles de la Sucursal</small>
           <div class="m-1">
            <h6>-Direccion</h6>
            <h3>{{$sucursal->direccion}}</h3>

           </div>
           <div class="m-1">
            <h6>-Nombre</h6>
            <h3>{{$sucursal->nombre}}</h3>

           </div>
           <div class="m-1">
            <h6>-Telefono</h6>
            <h3>{{$sucursal->telefono}}</h3>

           </div>
           <div class="m-1">
            <h6>-Horarios</h6>
            <h3>{{$sucursal->horarios}}</h3>

           </div>
        </div>
    </div>
</div>
@endsection
