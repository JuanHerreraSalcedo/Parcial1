<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
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
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Registro de usuarios</h2>

                            <form class="px-md-2" method="POST" action="./registro.php">

                                <div class="form-outline mb-4">
                                    <input type="text" class="form-control" name="username"/>
                                    <label class="form-label">Usuario</label>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label pb-2">Tipo de rol</label>
                                    <select class="select" name="rol">
                                        <option value="" disabled>Rol</option>
                                        <option value="1">admin</option>
                                        <option value="2">usuario</option>
                                    </select>
                                </div>

                                <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                    <div class="col-md-6">
                                        <div class="form-outline form-white mb-4">
                                            <input type="password" class="form-control" name="password"/>
                                            <label class="form-label">Contraseña</label>
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-outline-light btn-lg px-5">Registrar</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>