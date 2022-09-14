<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercción PHP</title>
</head>
<body>

    <h1>Ejemplo de uso de bases de datos con PHP y MySQ</h1>


    <form action="procesar.php" method="POST">

        <table>
            <tr>
                <td>Nombre:</td>
                <td> <INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30"> </td>
            </tr>

            <tr>
                <td>Apellido:</td>
                <td> <INPUT TYPE="text" NAME="apellido" SIZE="20" MAXLENGTH="30"> </td>
            </tr>
        </table>

        <INPUT TYPE="submit" NAME="accion" VALUE="Grabar">
    </form>
    <hr>

    <?php  
        include("conex.php");  
        $link=conectarse();  
        $resultado = mysqli_query($link,"select * from prueba");  
    ?>  

    <table BORDER=1 CELLSPACING=1 CELLPADDING=1>  
        <TR>
            <TD>&nbsp;<B>Nombres</B></TD>  
            <TD>&nbsp;<B>Apellidos</B>&nbsp;</TD>
        </TR>  

        <?php  
            while($row = mysqli_fetch_array($resultado)) {  
                printf(
                    "<tr><td>&nbsp;%s</td> <td>&nbsp;%s&nbsp;</td></tr>", $row["nombres"],  $row["apellidos"]);  }  mysqli_free_result($resultado);  
                    mysqli_close($link);  
        ?>
    </table>  


    
</body>
</html>