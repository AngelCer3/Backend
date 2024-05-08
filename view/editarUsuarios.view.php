<?php

use config\Route;

$dependencia = new Route();
?>

<div class="container mt-2">
    <div class="row mt-2 justify-content-center">
        <div class="col text-center">
            <div class="card mx-auto" style="width: 24rem;">
                <div class="card-body">
                    <h5 class="card-title mt-2">Registro</h5>
                    <form action="<?= $dependencia->redireccion('comprobarEditar').'/'.$datos["id_usuario"]?>" method="POST">
                        <div class="mb-3 mt-2">
                            <label for="id_usuario" class="form-label">Nombre(s)</label>
                            <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $datos['id_usuario']?>" hidden>
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="nombre" class="form-label">Nombre(s)</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos['nombre']?>">
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="<?php echo $datos['apellidoPaterno']?>">
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="<?php echo $datos['apellidoMaterno']?>">
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="correo" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $datos['correo']?>">
                        </div>
                        <div class="mb-3 mt-2">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="pass" name="pass" value="<?php echo $datos['pass']?>">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill mt-2">Actualizar</button>
                        <a href="<?= $dependencia->redireccion('usuarios') ?>" class="btn btn-secondary rounded-pill mt-2">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
