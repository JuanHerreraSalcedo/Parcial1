<?php
include('c.php');

$username = $_POST['username'];
$rol = $_POST['rol'];
$password = $_POST['password'];



$verificacion = mysqli_query($conexion, "SELECT * FROM parcial WHERE usuarios = '$username'");
$r = mysqli_num_rows($verificacion);

if($r > 0){
    echo '
    <script>
    alert("El nombre de usuario ya se esta utilizando");
    location.href = "./registrar.php";
    </script>
    ';
    exit;
}

$insertar = mysqli_query($conexion, "INSERT INTO parcial(username, password, rol) VALUES('$username', '$password', 'rol')");

if ($insertar){
    echo '
    <script>
    alert("Registro exitoso");
    location.href = "./login.php";
    </script>
    ';
}

mysqli_close($conexion);;

?>