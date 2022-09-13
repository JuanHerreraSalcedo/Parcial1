<?php 
include("conex.php");
$link=Conectarse();
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];

mysqli_query($link,"insert into prueba (nombre, apellido) value ('$nombre','$apellido')");
mysqli_close($link);
header("Location:index.php");
?>