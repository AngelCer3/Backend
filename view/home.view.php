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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="<?= $dependencia->dep_css('main') ?>">
    <title>Home</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row mt-2 justify-content-center">
            <div class="col text-center">
                <a href="<?=$dependencia->redireccion('logout')?>" class="btn btn-secondary mt-2">Cerrar sesion</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>