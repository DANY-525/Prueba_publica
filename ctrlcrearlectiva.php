<?php

include 'conexion.php';
$amigo=$_POST['numero'];

$nombre=$_POST['nombre'];
$profesor=$_POST['profesor'];
$materia=$_POST['materia'];



$insertar ="INSERT INTO lectivas (idlectivas, nombre, profesor, descripcion, num_c_disponibles) VALUES ('$nombre', '$nombre', '$profesor', '$materia', '$amigo')";
$resultado =mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'error al registrarse';
}

else
{

	header("location:admin.php?op=subir");
}
mysqli_close($conexion);



?>