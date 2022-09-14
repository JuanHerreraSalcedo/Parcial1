<?php

include_once 'db.php';

session_start();

if (isset($_GET['cerrar_sesion'])) {
    session_unset();

    session_destroy();
}
if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location: admin.php');
            break;

        case 2:
            header('location: usuario.php');
            break;

        default:
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Database();
    // var_dump($username);
    $query = $db->connect()->prepare('SELECT*FROM usuarios Where username = :username AND password = :password');
    $query->execute([':username' => $username, ':password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if ($row == true) {
        $rol = $row[3];
        $_SESSION['rol'] = $rol;

        switch ($_SESSION['rol']) {
            case 1:
                header('location: admin.php');
                break;

            case 2:
                header('location: usuario.php');
                break;

            default:
        }
        switch ($_SESSION['rol']) {
            case 1:
                header('location: admin.php');
                break;

            case 2:
                header('location: usuario.php');
                break;

            default:
        }
    } else {
        echo "El usuario o contraseña son incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Inicia sesión</h2>
                                <form action="#" method="POST">
                                    <div class="form-outline form-white mb-4">
                                        <label for="">Usuario</label>
                                        <br>
                                        <input type="text" name="username" id="username" class="form-control form-control-lg" required>
                                        <br>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label for="">Contraseña</label>
                                        <br>
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" required>
                                    </div>
                                    <input type="submit" class="btn btn-outline-light btn-lg px-5" value="Iniciar sesión">
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>