@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 justify-content-left">
            <ul class="list-group">
                <li class="list-group-item bg-warning font-weight-bold text-monospace">Detalles de la Sucursal</li>
                <li class="list-group-item">
                    <div class="m-1">
                        <label class="font-weight-bold text-monospace bg-success text-white border border-success rounded p-1">Direccion</label>
                        <h3 class="text-monospace">{{$sucursal->direccion}}</h3>

                       </div>
                </li>
                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Nombre</label>
                        <h3 class="text-monospace">{{$sucursal->nombre}}</h3>

                       </div>

                </li>

                <li class="list-group-item">
                    <div class="m-1">
                        <label class="font-weight-bold text-monospace bg-success text-white border border-success rounded p-1">Telefono</label>
                        <h3 class="text-monospace">{{$sucursal->telefono}}</h3>

                       </div>

                </li>

                <li class="list-group-item">
                    <div class="m-1">
                        <label class="font-weight-bold text-monospace bg-success text-white border border-success rounded p-1">Horarios</label>
                        <h3 class="text-monospace">{{$sucursal->horarios}}</h3>

                       </div>
                </li>
              </ul>

        </div>
    </div>
</div>
@endsection
