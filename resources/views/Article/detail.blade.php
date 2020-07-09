@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 justify-content-left">
            <ul class="list-group">
                <li class="list-group-item bg-warning font-weight-bold text-monospace">Detalles del articulo</li>
                <li class="list-group-item">
                    <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Nombre</label>
                    <div class="m-1">
                        <h1>{{$article->nombre_persona}}</h1>
                    </div>
                    <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Articulo</label>
                    <div class="m-1">
                        <h3>{{$article->nombre_articulo}}</h3>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Categoria</label>
                        <h3  class="text-monospace">{{$article->categoria}}</h3>

                       </div>
                </li>
                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Descripcion</label>
                        <h3 class="text-monospace">{{$article->descripcion}}</h3>

                       </div>

                </li>

                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Valor del envio</label>
                        <h3 class="text-monospace">{{$article->valor_envio}}</h3>

                       </div>

                </li>
              </ul>
        </div>
        <div class="col-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Fecha Entrega</label>
                        <h3 class="text-monospace">{{$article->fecha_entrega}}</h3>

                       </div>
                </li>

                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Direccion Destino</label>
                        <h3 class="text-monospace">{{$article->direccion_destino}}</h3>
                       </div>
                </li>

                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Contacto</label>
                        <h3 class="text-monospace">{{$article->telefono}}</h3>
                        <h3 class="text-monospace">{{$article->email}}</h3>
                       </div>
                </li>

                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Estado</label>
                        <h3 class="text-monospace">{{$article->estado}}</h3>

                       </div>
                </li>

                <li class="list-group-item">
                    <div class="m-1">
                        <label class="text-monospace font-weight-bold bg-success text-white border border-success rounded p-1">Sucursal</label>
                        <h3 class="text-monospace">{{$article->sucursal}}</h3>
                       </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
