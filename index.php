<?php
    use controller\Personas;
    require_once realpath('./vendor/autoload.php');
    echo print_r(Personas::contar_datos());
?>