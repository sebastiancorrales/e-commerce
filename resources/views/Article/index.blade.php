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
                            <a href="{{route('article.edit', $article->id)}}">Editar</a>/
                            <a href="{{route('article.show', $article->id)}}">Mas info</a>/
                            <div class="dropdown btn-circle">
                                <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
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


@include('Article.create')


@endsection