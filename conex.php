<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba conexión BD</title>
</head>
<body>
    <?php 
    function conectarse(){
        if(!($link=mysqli_connect("localhost","root","","estudiante"))){
            echo "Error";
            exit();
        }
        return $link;
    }
    $link=conectarse();
    echo "Exito";
    ?>
</body>
</html>