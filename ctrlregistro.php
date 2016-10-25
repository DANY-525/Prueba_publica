<?php


include 'conexion.php';
$nombre=$_POST["email"];
$contrasena=$_POST["contrasena"];


//insertar los datos
$insertar = "INSERT INTO usuarios (id_usuario, usuario, password, rol) VALUES ('$nombre', '$nombre', '$contrasena', '2')";

//ejecutar consulta

$resultado =mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'error al registrarse';
}

else
{

	header("location:index.php");
}
mysqli_close($conexion);





?>