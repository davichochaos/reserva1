<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

<body>
<div class="modal fade bs-reserva-modal-lg" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="gridSystemModalLabel">Reserva de Mesa</h4></center>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label>Nombre y Apellido:</label>
                </div>

                <div class="col-md-4">
                  <input type="text" name="nombre" placeholder="Nombre">
                </div>
              </div>        
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label>Numero Celular:</label>
                </div>
                
                <div class="col-md-4">
                  <input type="text" name="telefono" placeholder="Telefono">
                </div>
              </div>        
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label>Hora de Reserva:</label>
                </div>
                <div class="col-md-4">
                  <input type="times" name="hora" placeholder="Hora" data-toggle="popover" data-trigger="hover" title="Aviso !!" data-content="Una vez hecha la reserva se le esperara 10 min en caso contrario se cancelara">
                </div>
              </div>        
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label>Fecha Reserva:</label>
                </div>
                <div class="col-md-4">
                  <input type="text" name="fecha_reservacion" placeholder="<?php echo date("F j, Y");?>">
                </div>
              </div>        
            </div>

          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</html>