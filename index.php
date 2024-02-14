<?php
    use controller\CRUD;
    require_once realpath('./vendor/autoload.php');
    $crud = new CRUD('usuarios');
    $crud->insercion("axel", 18, "Siempre" );
?>