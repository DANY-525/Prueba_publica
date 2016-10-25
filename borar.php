<form id="baja-contacto" name="baja_frm" action="eliminar-contacto.php" method="post" enctype="application/x-www-form-urlencoded">
	<fieldset>
		<legend>Eliminar Lectiva</legend>
		<div>
			<label for="email">MATERIA: </label>
			<select id="email" class="cambio" name="nombre_slc" required>
				<option value="">- - -</option>
				<?php include("select_nombre.php"); ?>
			</select>
		</div>
		<div>
			<input type="submit" id="enviar-baja" class="cambio" name="enviar_btn" value="eliminar" />
		</div>
		
	</fieldset>
</form>