<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="edit_<?php echo $row['codpr']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Encuesta</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" action="insertar.php?id=<?php echo $row['codpr']; ?>">
				<div class="row form-group">
					<div class="col-sm-10">
						<label class="control-label" style="position:relative; top:7px;"><?php echo $row['nompr']; ?></label>
					</div>
					
					<div class="col-sm-10">
						
						<textarea name="nomen" rows="10" cols="50"></textarea>
					</div>
					
					<div class="col-sm-10" style="display:none;">
						
						<input type="text" class="form-control" value="<?php echo $row['codpr']; ?>" name="codpr">
					</div>
					
					<div class="col-sm-10" style="display:none;">
						
						<input type="text" class="form-control" value="<?php echo $row['codpo']; ?>" name="codpo">
					</div>
					
				</div>
				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="agregar" class="btn btn-success">Enviar</a>
			</form>
			
			
            </div>

        </div>
    </div>
</div>

