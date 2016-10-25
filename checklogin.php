<?php

$usuario=$_POST['user_name'];
$clave=$_POST['codigo'];


//conectar a la base de datos


$conexion=mysqli_connect("localhost","root","","prueba_tecnica");
$conexion2=mysqli_connect("localhost","root","","prueba_tecnica");




$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and password='$clave' and rol='1'";

$consulta2="SELECT * FROM usuarios WHERE usuario='$usuario' and password='$clave' and rol='2'";


$resultado=mysqli_query($conexion,$consulta);
$resultado2=mysqli_query($conexion2,$consulta2);



$filas=mysqli_num_rows($resultado);
$filas2=mysqli_num_rows($resultado2);


if ($filas>0) {
	header("location:admin.php?op=subir");
}

elseif ($filas2>0) {
	header("location:usuario.php?op=listado");
}
else
{

header("location:index.php");
echo "error";
}


$conexion->close();


?>


