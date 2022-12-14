<?php

session_start();
if (!isset($_SESSION['rol'])) {
    header('location: login.php');
} else {
    if ($_SESSION['rol'] != 1) {
        header('location: login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="row">
                    <a class="navbar-brand col-1" href="#"><img src="./img/control.png" class="img-thumbnail rounded-circle w-50" alt=""></a>
                    <a href="registrar.php" class="btn btn-outline-light btn-default px-5 col-3 me-2">Registrar usuarios</a>
                    <a href="usuarios.php" class="btn btn-outline-light btn-default px-5 col-3 me-2">Lista de usuarios</a>
                    <a href="logout.php" class="btn btn-outline-light btn-default px-5 col-3 me-2">Cerrar sesión</a>
                </div>
            </div>
        </nav>
    </header>
    <h1 class="row d-flex justify-content-center align-items-center h-100">Bienvenido Admin</h1>
    <h2 class="row d-flex justify-content-center align-items-center">Parcial Juan Camilo Herrera Salcedo 611</h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>