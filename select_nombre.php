<?php
//Incluyo el archivo de la conexión a la BD
include("conexion2.php");
//Constryo el query para traer los registros en el select del HTML
$consulta = "SELECT nombre FROM lectivas ORDER BY nombre";
//Ejecuto el query
$ejecutar_consulta = $conexion->query($consulta);
//Con un while recorro todos los registros generados de la consulta anterior
//Construyo las opciones del select de forma dinámica con los registros de la consulta
while($registro = $ejecutar_consulta->fetch_assoc())
{
	echo "<option value='".utf8_encode($registro["nombre"])."'";
	if($_GET["contacto_slc"]==$registro["nombre"])
	{
		echo " selected";	
	}
	echo ">".utf8_encode($registro["nombre"])."</option>";
}
//$conexion->close();
?>