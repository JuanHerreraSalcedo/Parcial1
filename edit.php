<?php 
include("conex.php");
$link=Conectarse();
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

mysqli_query($link, "update prueba set nombre='$nombre', apellido='$apellido' where id='$id'");
mysqli_close($link);
header("Location:index.php");
?>