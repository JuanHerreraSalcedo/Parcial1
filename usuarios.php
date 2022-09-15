<?php

session_start();
if (!isset($_SESSION['rol'])) {
    header('location: login.php');
} else {
    if ($_SESSION['rol'] != 1) {
        header('location: login.php');
    }
}

$conexion = mysqli_connect('localhost','root','','parcial');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de usuarios</title>
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">usuario</th>
      <th scope="col">password</th>
      <th scope="col">rol</th>
      <th scope="col">Opciones</th>
    </tr>
    <?php
    $sql = "SELECT * FROM usuarios";
    $result= mysqli_query($conexion, $sql); 

    while($mostrar=mysqli_fetch_array($result)){
    ?>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $mostrar['id']?></td>
      <td><?php echo $mostrar['username']?></td>
      <td><?php echo $mostrar['password']?></td>
      <td><?php echo $mostrar['id_rol']?></td>
      <td><input type="submit" value="eliminar" name="btnEliminar"></td>

      <form action="eliminar.php" method="post">

      </form>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>