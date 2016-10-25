<?php
$nombre= $_POST["nombre_slc"];
include("conexion2.php");
$consulta="DELETE FROM lectivas WHERE nombre='$nombre'";

$ejecutar_consulta = $conexion->query($consulta);

if($ejecutar_consulta)
	 header("location:admin.php?op=subir");
else
	$mensaje = "No se pudo eliminar el contacto con el email <b>$nombre</b> :/";

$conexion->close();
?>