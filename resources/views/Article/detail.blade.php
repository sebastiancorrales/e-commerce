@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col justify-content-left">
            <small>-Detalles del articulo</small>
           <div class="m-1">
               <h1>{{$article->nombre_persona}}</h1>
           </div>
           <div class="m-1">
               <h3>{{$article->nombre_articulo}}</h3>
           </div>
           <hr>
           <div class="m-1">
            <h6>-Categoria</h6>
            <h3>{{$article->categoria}}</h3>

           </div>
           <div class="m-1">
            <h6>-Descripcion</h6>
            <h3>{{$article->descripcion}}</h3>

           </div>
           <div class="m-1">
            <h6>-Valor del envio</h6>
            <h3>{{$article->valor_envio}}</h3>

           </div>
           <div class="m-1">
            <h6>-Fecha Entrega</h6>
            <h3>{{$article->fecha_entrega}}</h3>

           </div>
           <div class="m-1">
            <h6>-Direccion Destino</h6>
            <h3>{{$article->direccion_destino}}</h3>

           </div>
           <div class="m-1">
            <h6>-Contacto</h6>
            <h3>{{$article->telefono}}</h3>
            <h3>{{$article->email}}</h3>

           </div>
           <div class="m-1">
            <h6>-Estado</h6>
            <h3>{{$article->estado}}</h3>

           </div>
           <div class="m-1">
            <h6>-Sucursal</h6>
            <h3>{{$article->sucursal}}</h3>

           </div>
        </div>
    </div>
</div>
@endsection