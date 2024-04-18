<?php

    use config\Route;

    $dependencia = new Route();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$dependencia->dep_css('main')?>">
    <title>Login</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row mt-2 justify-content-center">
            <div class="col text-center">
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="../../public/img/Fondo_Login.jpg" style="width: 15rem;" class="mx-auto d-block mt-2 rounded-4">
                    <div class="card-body">
                        <h5 class="card-title mt-2">Iniciar Sesion</h5>
                        <form action="<?=$dependencia->redireccion('logincomprobar')?>" method="POST">
                            <div class="mb-3 mt-2">
                                <label for="correo" class="form-label">Correo Electronico</label>
                                <input type="email" class="form-control" id="correo" name="correo">
                            </div>
                            <div class="mb-3 mt-2">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Ingresar</button>
                            <a href="<?=$dependencia->redireccion('registre')?>" class="btn btn-secondary mt-2">Registro</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>