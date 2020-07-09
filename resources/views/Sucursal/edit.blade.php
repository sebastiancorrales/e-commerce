@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-warning text-center"><h3>Actualizar sucursal</h3></div>
                <div class="card-body">
                    <form action="{{ route('sucursal.update', $sucursal->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    {{ method_field('PUT') }}

                               <div class="form-row">
                                   <div class="col">
                                       <div class="form-group">
                                           <label for="direccion">Direccion</label>
                                           <input type="text" class="form-control" placeholder="Carrea aa #  10 - 00" id="direccion" name="direccion" value="{{$sucursal->direccion}}">
                                       </div>
                                   </div>
                                   <div class="col">
                                       <div class="form-group">
                                           <label for="nombre">Nombre</label>
                                           <input type="text" class="form-control" id="nombre" name="nombre" value="{{$sucursal->nombre}}">
                                       </div>
                                   </div>
                               </div>

                               <div class="form-row">
                                   <div class="col">
                                       <div class="form-group">
                                           <label for="telefono">Telefono</label>
                                           <input type="number" class="form-control" placeholder="###" id="telefono" name="telefono" value="{{$sucursal->telefono}}">
                                       </div>
                                   </div>
                                   <div class="col">
                                       <div class="form-group">
                                           <label for="horarios">Horarios</label>
                                           <input type="text" class="form-control" id="horarios" name="horarios" value="{{$sucursal->horarios}}">
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
