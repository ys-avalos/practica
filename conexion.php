<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INDEX</title>
<link rel="stylesheet" type="text/css">
</head>
<body>

<?php
 
$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="contacto";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die ("error con la conxion");

$nombre= $_POST["nombre"];
$telefono= $_POST["telefono"];
$correo = $_POST["correo"];
$comentario = $_POST["comentario"];

$insertar = "INSERT into contacto VALUES ('$nombre', '$telefono', '$correo','$comentario')";

$resultado = mysqli_query($conexion, $insertar);
die ("los Datos se guardaron con exito");

mysqli_close($conexion);
?>

<a href="index.html" target="_self"> LOS DATOS SE GUARDARON CON EXITO </a>
</body>
</html>