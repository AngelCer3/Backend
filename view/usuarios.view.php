<?php
    use config\Route;

    $dependencia = new Route();
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Datos de Usuario</h1>
            <a href="<?=$dependencia->redireccion('insertarUsuarios')?>" class="btn btn-success rounded-pill mt-2">Agregar Usuario</a>
            <table class="table table-dark table-hover table-bordered border-primary mt-2">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($datos) && is_array($datos)) {
                            foreach($datos as $usuario):
                    ?>
                    <tr>
                        <td><?php echo $usuario["nombre"] ?></td>
                        <td><?php echo $usuario["apellidoPaterno"] ?></td>
                        <td><?php echo $usuario["apellidoMaterno"] ?></td>
                        <td><?php echo $usuario["correo"] ?></td>
                        <td><?php echo $usuario["pass"] ?></td>
                        <td><a href="<?=$dependencia->redireccion('editarUsuarios').'/'.$usuario["id_usuario"]?>" class="btn btn-warning rounded-pill">Editar</a></td>
                        <td><a href="<?=$dependencia->redireccion('eliminarUsuario').'/'.$usuario['id_usuario']?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    <?php
                            endforeach;
                        } else {
                            echo "<tr><td colspan='4' class='text-center'>No hay usuarios disponibles</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
            <div class="row justify-content-center">
                <div class="col-md-4">
                <a href="<?=$dependencia->redireccion('home')?>" class="btn btn-primary rounded-pill mt-2">Inicio</a>
                    <a href="<?=$dependencia->redireccion('logout') ?>" class="btn btn-danger rounded-pill mt-2">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>
