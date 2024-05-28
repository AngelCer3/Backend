<?php

use config\Route;
use config\SecurityToken;

$dependencia = new Route();
$securityToken = new SecurityToken();
$token = $securityToken->generarToken();
?>

<div class="container mt-2">
    <div class="row mt-2 justify-content-center">
        <div class="col text-center">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="../../public/img/Fondo_Login.jpg" style="width: 15rem;" class="mx-auto d-block mt-2 rounded-4">
                <div class="card-body">
                    <h5 class="card-title mt-2">Registro</h5>
                    <form action="<?= $dependencia->redireccion('registreComprobar') ?>" method="POST">
                        <input type="hidden" name="csrf_token" value="<?php echo $token;?>">
                        <div class="mb-3 mt-2">
                            <label for="nombre" class="form-label">Nombre(s)</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno">
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno">
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="correo" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="correo" name="correo">
                            <div class="mb-3 mt-2">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Registro</button>
                            <a href="<?= $dependencia->redireccion('login') ?>" class="btn btn-secondary mt-2">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>