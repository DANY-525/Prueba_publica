<?php
function conectarse()
{
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="prueba_tecnica";

	$conectar = new mysqli($servidor,$usuario,$password,$bd);
	return $conectar;
}

$conexion = conectarse();
?>