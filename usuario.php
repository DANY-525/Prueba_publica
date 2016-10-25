<?php
error_reporting(E_ALL ^ E_NOTICE);

$op = $_GET["op"];
switch($op)
{

case "listado":
$contenido = "listado.php";
$titulo = "lisa contactos";
break;
case "listadop":
$contenido = "listadoprofesor.php";
$titulo = "lisa contactos";
break;
case "listadoel":
$contenido = "listadomaterias.php";
$titulo = "lisa contactos";
break;

case "actualizar":
$contenido = "actualizar.php";
$titulo = "listado estudiantes lectiva";
break;

case "subir":
$contenido = "crearlectiva.php";
$titulo = "crear lectiva";
break;







}
?>

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


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="?op=listado">lectivas</a></li>
  
  <li role="presentation"><a href="?op=listadop">profesor</a></li>
  <li role="presentation"><a href="?op=listadoel">promedio Estudiantes lectivas</a></li>
   <li role="presentation"><a href="index.php">salir</a></li>
</ul>

<?php include($contenido);?>





</body>

</html>
