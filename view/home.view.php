<?php

    use config\Route;

    $dependencia = new Route();
?>



<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Datos</h1>

            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($datos) && is_array($datos)) {
                            foreach($datos as $producto):
                    ?>
                    <tr>
                        <td><?php echo $producto["nombre"] ?></td>
                        <td><?php echo $producto["tipo"] ?></td>
                        <td><?php echo $producto["precio"] ?></td>
                        <td><?php echo $producto["cantidad"] ?></td>
                    </tr>
                    <?php
                            endforeach;
                        } else {
                            echo "<tr><td colspan='4'>No hay productos disponibles</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="<?=$dependencia->redireccion('usuarios')?>" class="btn btn-primary rounded-pill mt-2">Usuarios</a>
            <a href="<?=$dependencia->redireccion('logout') ?>" class="btn btn-danger rounded-pill mt-2">Cerrar Sesion</a>
        </div>
    </div>
</div>
