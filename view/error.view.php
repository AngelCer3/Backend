<?php

    use config\Route;
    $enlace =  new Route();
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Error 404</h1>
            <a href="<?=$enlace->redireccion('login/login')?>" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>