<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php 
    include("conex.php");
    $link=Conectarse();
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    ?>
</head>
<body>
    <center>
        <h1>Editar datos</h1>
        <hr>
        <form action="edit.php">
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" readonly value=<?php echo $id?>></td>
                </tr>
                <tr>
                <td>Nombre</td>
                    <td><input type="text" name="nombre" readonly value=<?php echo $id?>></td>                    
                </tr>
                <td>Apellidos</td>
                    <td><input type="text" name="apellido" readonly value=<?php echo $id?>></td>                    
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Actualizar"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>