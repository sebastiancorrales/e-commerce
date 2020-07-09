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
            <form>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="electronico -- textil">
                                  </div>

                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="remitente">Nombre de quien envia</label>
                                    <input type="text" class="form-control" id="remitente" name="remitente">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" cols="15" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="precio">Asegurado</label>
                                    <input type="number" class="form-control" placeholder="$10000" id="precio" name="precio">
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
                                    <label for="fecha_envio">Fecha envio</label>
                                    <input type="date" class="form-control" id="fecha_envio" name="fecha_envio">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="direccion_destino">Direccion destino</label>
                                    <input type="text" class="form-control" placeholder="Carrea aa #  10 - 00" id="direccion_destino" name="direccion_destino">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="destinatario">Persona quien resibe</label>
                                    <input type="text" class="form-control" id="destinatario" name="destinatario">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="sucursal">Sucursal</label>
                                    <select  class="form-control" id="sucursal" name="sucursal">
                                        <option value="0">Seleccione la sucursal</option>
                                    </select>
                                </div>

                            </div>
                        </div>




                        <div class="row justify-content-center p-4">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success btn-block ">Enviar</button>
                            </div>
                        </div>

                      </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
