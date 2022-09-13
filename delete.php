<?php 
include("conex.php");
$link=Conectarse();
$id=$_GET['id'];

mysqli_query($link, "delete from prueba where id = $id");
mysqli_close($link);
header("Location:index.php");
?>