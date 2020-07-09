<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
                                <select name="categoria" id="categoria">
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
                                <input type="number" class="form-control" placeholder="$5000" id="valor_envio" name="valor_evio">
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
                                <select name="estado" id="estado">
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
                            <select name="sucursal" id="sucursal">
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