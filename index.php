<?php
    use controller\Personas;
    require_once realpath('./vendor/autoload.php');
    echo print_r (Personas::eliminar_datos());
?>