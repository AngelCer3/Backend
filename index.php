<?php
    /* use controller\Personas; */
    use config\Route;
    require_once realpath('./vendor/autoload.php');
   /*  require_once './app/config/Config.php'; */
    /* echo print_r(Personas::like_datos()); */
    $indice = new Route();
    $indice->vista();
?>