<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Insertar PHP en MYSQL</h1>
        <hr>
        <form method="post" action="insert.php">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="apellido"></td>
                </tr>
                <tr>    
                    <td></td>
                    <td><input type="submit" value="enviar"></td>
                </tr>
            </table>
        </form>

        <?php
        include("conex.php");
        $link=Conectarse();

        $result=mysqli_query($link,"select * from prueba");

        ?>

        <table border="1">
            <tr>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php 
            while($row=mysqli_fetch_array($result)){
                printf("<tr>
                <td>%s</td>
                <td>%s</td>
                <td><a href=\"editGUI.php?id=%s&nombre=%s&apellido=%s\>Editar</a></td>
                <td><a href=\"delete.php?id=%s\">Borrar</a></td>
                </tr>", $row['nombre'],$row['apellido'],$row['id'],$row['nombre'],$row['apellido'],$row['id']);
            }
            mysqli_close($link);
            ?>
        </table>

    </center>
</body>
</html>