@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-circle" aria-hidden="true"></i> Envio</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre Persona</th>
                        <th scope="col">Fecha de Entrega</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Valor + Envio</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles ?? '' as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->nombre_persona}}</td>
                        <td>{{$article->fecha_entrega}}</td>
                        <td>{{$article->direccion_destino}}</td>
                        <td>{{$article->valor_envio}}</td>
                        <td>{{$article->estado}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{route('article.edit', $article->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-success btn-sm" href="{{route('article.show', $article->id)}}"><i class="fa fa-eye"></i></a>
                            <div class="dropdown btn-circle">
                                <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                    <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este Articulo?</p>
                                    <form action="{{ route('article.destroy', $article->id) }}" method="POST" class="d-block form-destroy dropdown-item">
                                        @method('delete')
                                        @csrf

                                        <button type="submit" class="btn btn-danger d-block w-100">Confirmar</button>
                                    </form>
                                </div>
                        </td>
                    </tr>
                    @endforeach

                    


                </tbody>
            </table>

        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Realizar envio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select class="form-control" name="categoria" id="categoria">
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
                                <input type="text" class="form-control" id="nombre_persona" name="nombre_persona">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre_articulo">Nombre del Articulo</label>
                                <input class="form-control" name="nombre_articulo" id="nombre_articulo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="form-control" placeholder="" id="descripcion" name="descripcion">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="valor_envio">Valor envio</label>
                                <input type="number" class="form-control" placeholder="$5000" id="valor_envio" name="valor_envio">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="fecha_entrega">Fecha entrega</label>
                                <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefono">Telefono de contacto</label>
                                <input type="text" class="form-control" placeholder="Carrea aa #  10 - 00" id="telefono" name="telefono">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="direccion_destino">Direccion de destino</label>
                                <input type="text" class="form-control" id="direccion_destino" name="direccion_destino">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" name="estado" id="estado">
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
                            <select class="form-control"  name="sucursal" id="sucursal">
                        
                             @foreach($sucursals as $sucursal)

                             <option value="{{$sucursal->nombre}}">{{$sucursal->nombre}}</option>
                        
                             @endforeach
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


@endsection
