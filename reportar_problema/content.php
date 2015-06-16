<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <a class="btn btn-lg btn-primary" data-toggle="modal" href="#myModal">Reportar</a>
    <!-- Modal HTML -->

    <div class="modal fade" id="myModal" style="display:none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">×</button>

                    <h4 class="modal-title">Confirmation</h4>
                </div>

                <div class="modal-body">
                    <p>Ingrese su error a reportar:</p>

                    <form action="../enviaremail.php" id="reportform" method="post" name="reportform">
                        Selecciona tipo de problema:
                        <select name="Erroroption" id=" mylist" onchange="favsports()">
                            <option>
                                Link malo
                            </option>

                            <option>
                                Error al ingresar
                            </option>

                            <option>
                                Error 404
                            </option>

                            <option>
                                otro
                            </option>
                        </select>
                        <textarea cols="40" name="Error" rows="5"></textarea>

                        <p class="text-warning"><small>If you don't save,
                            your changes will be lost.</small></p>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                    <input class="btn btn-primary" form="reportform" type="submit" value="Enviar">
                </div>
            </div>
        </div>
    </div>
</div>