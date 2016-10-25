<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

</head>
<body>

<script>
	window.onload = function()
	{
		var lista = document.getElementById("contacto-lista");
		lista.onchange = seleccionarContacto;

		function seleccionarContacto()
		{
			window.location="?op=actualizar&contacto_slc="+lista.value
		}
	}
</script>
<form id="cambio-contacto" name="cambio_frm" action="modificar-contacto.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Actualizar lectiva</legend>
		<div>
			<label for="contacto-lista">Escoja lectiva: </label>
			<select id="contacto-lista" class="cambio" name="contacto_slc" required>
				<option value="">- - -</option>
				<?php include("select_nombre.php"); ?>
			</select>
		</div>
	
	</fieldset>
</form>
  </table>
</div>

</html>
