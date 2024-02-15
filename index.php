<?php
    use controller\CRUD;
    require_once realpath('./vendor/autoload.php');
    $newUser = array(
        'id_persona' => '',
        'nombre' => 'axel',
        'edad' => '23',
        'sexo' => 'Siempre'
    );
    $crud = new CRUD('usuarios');
    $crud->insercion($newUser);
?>