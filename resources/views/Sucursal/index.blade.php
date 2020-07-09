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
                            <button class=" btn btn-sm bg-primary" href=""><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            {{-- <a href="{{route('Sucursal.show', $sucursal->id)}}">Mas info</a> --}}
                            {{-- {{-- <a href="{{route('Sucursal.destroy', $sucursal->id)}}">Eliminar</a> --}}
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
