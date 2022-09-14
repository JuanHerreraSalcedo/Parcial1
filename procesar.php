<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
include("conex.php");
$link=conectarse();
mysqli_query($link, "insert to prueba (nombres,apellidos) values ('$nombres','$apellidos')");
header("Location:select.php")

?>