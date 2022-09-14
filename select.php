<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select php MySQL</title>
</head>
<body>
    <h1>Select PHP MySQL </h1>
    <hr>
    <?php
    include ("conex.php");
    $link= conectarse();
    $resultado = mysqli_query($link,"SELECT*from prueba");
    ?>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>
        <?php
        while($row=mysqli_fetch_array($resultado)){
            printf(
                
            "<tr>
                <td>%s</td>
                <td>%s</td>
            <tr>",$row["nombres"],$row["apellidos"]);
        }
        mysqli_free_result($resultado);
        ?>
    </table>
</body>
</html>