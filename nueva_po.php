<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar nueva posibilidad</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" action="registro_po.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Posiblidad:</label>
					</div>
					<div class="col-sm-10">
						
						<textarea name="nompo" rows="10" cols="50"></textarea>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Pregunta:</label>
					</div>
					<div class="col-sm-10">
					<select class="form-control" name="codpr" id="preg"  selected="" data-toggle="tooltip" data-placement="top" title="Elige la pregunta">
						
					</select>
					</div>
				</div>
				
				
				</div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Pregunta</button>
			</form>
			
            </div>

        </div>
		
    </div>
</div>

<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="edit_<?php echo $row['codpr']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Pregunta</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" action="editar.php?id=<?php echo $row['codpr']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Pregunta:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nompr" value="<?php echo $row['nompr']; ?>">
					</div>
				</div>
				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
			</form>
			
			
            </div>

        </div>
    </div>
</div>
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['codpr']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar Empleado</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $row['nompr'].' ' ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="eliminar.php?id=<?php echo $row['codpr']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>