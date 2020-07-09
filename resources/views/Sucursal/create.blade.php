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
                    <form>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input type="text" class="form-control" placeholder="Carrea aa #  10 - 00" id="direccion" name="direccion">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="destinatario">Nombre</label>
                                    <input type="text" class="form-control" id="destinatario" name="destinatario">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="number" class="form-control" placeholder="###" id="telefono" name="telefono">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="destinatario">Horarios</label>
                                    <input type="text" class="form-control" id="destinatario" name="destinatario">
                                </div>
                            </div>
                        </div>






                        <div class="row justify-content-center p-4">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success btn-block ">Enviar</button>
                            </div>
                        </div>

                    </form>
                    <div class="modal-footer">
                        {{-- <div class="col-4">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success btn-block ">Enviar</button>
                        </div> --}}
                      </div>

            </div>
        </div>
    </div>
</div>
