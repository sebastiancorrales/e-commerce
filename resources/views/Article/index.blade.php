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
                    @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->nombre_persona}}</td>
                        <td>{{$article->fecha_entrega}}</td>
                        <td>{{$article->direccion_destino}}</td>
                        <td>{{$article->valor_envio}}</td>
                        <td>{{$article->estado}}</td>
                        <td>
                            <a href="">Editar</a>/
                            <a href="{{route('article.show', $article->id)}}">Mas info</a>/
                            <a href="{{route('article.destroy', $article->id)}}">Eliminar</a>
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
