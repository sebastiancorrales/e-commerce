@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-circle" aria-hidden="true"></i> Sucursal</button>
        </div>
    </div>
    <div class="row">
    <div class="col">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">telefono</th>
                        <th scope="col">Horarios</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sucursales as $sucursal)
                    <tr>
                        <th scope="row">{{$sucursal->id}}</th>
                        <td>{{$sucursal->direccion}}</td>
                        <td>{{$sucursal->nombre}}</td>
                        <td>{{$sucursal->telefono}}</td>
                        <td>{{$sucursal->horarios}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{route('sucursal.edit', $sucursal->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-success btn-sm" href="{{route('sucursal.show', $sucursal->id)}}"><i class="fa fa-eye"></i></a>
                            <div class="dropdown btn-circle">
                                <div class="" id="dropdownEliminar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownEliminar">
                                    <p class="text-muted pl-1 pr-1 mt-2 mb-1 text-center mensaje-eliminar">¿Desea eliminar este Articulo?</p>
                                    <form action="{{ route('sucursal.destroy', $sucursal->id) }}" method="POST" class="d-block form-destroy dropdown-item">
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


@include('Sucursal.create')


@endsection
