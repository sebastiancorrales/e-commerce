@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-warning text-center"><h3>Actualizar pedido</h3></div>
                <div class="card-body">
                <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}


                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select class="form-control" name="categoria" id="categoria" value="{{$article->categoria}}">
                                    <option value="juguetes">Juguetes</option>
                                    <option value="juguetes">Juguetes</option>
                                    <option value="juguetes">Juguetes</option>
                                    <option value="juguetes">Juguetes</option>
                                </select>
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre_persona">Nombre de quien lo envia</label>
                                <input type="text" class="form-control" id="nombre_persona" name="nombre_persona" value="{{$article->nombre_persona}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre_articulo">Nombre del Articulo</label>
                                <input class="form-control" name="nombre_articulo" id="nombre_articulo"value="{{$article->nombre_articulo}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="form-control" placeholder="" id="descripcion" name="descripcion" value="{{$article->descripcion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="valor_envio">Valor envio</label>
                                <input type="number" class="form-control" placeholder="$5000" id="valor_envio" name="valor_envio"value="{{$article->valor_envio}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="fecha_entrega">Fecha entrega</label>
                                <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" value="{{$article->fecha_entrega}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefono">Telefono de contacto</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="{{$article->telefono}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$article->email}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="direccion_destino">Direccion de destino</label>
                                <input type="text" class="form-control" id="direccion_destino" name="direccion_destino" value="{{$article->direccion_destino}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" name="estado" id="estado" default="{{$article->estado}}">

                                    <option value="En bodega">En bodega</option>
                                    <option value="En camino">En Camino</option>
                                    <option value="Entregado">Entregado</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="sucursal">Sucursal</label>
                            <select class="form-control" name="sucursal" id="sucursal" default="{{$article->sucursal}}">
                                <option value="En bodega">El cable</option>
                                <option value="En camino">Pereira</option>
                                <option value="Entregado">calir</option>
                            </select>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
                </div>
            </div>



        </div>
    </div>



</div>
@endsection


