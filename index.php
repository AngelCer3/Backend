<?php
    
    $servidor = $_ENV['HOST'];
    $conexion;
    $puerto = $_ENV['PUERTO'];
    $db = $_ENV['DBNAME'];
    $usuario = $_ENV['USUARIO'];
    $pass = $_ENV['PASSWORD'];

    $conexion = new mysqli($servidor,$usuario,$pass,$db,$puerto);

    if($conexion->connect_error){
        echo ("Error en la conexion a la base de datos");
    }else{
        echo ("Conexion exitosa a la base de datos");
    }
?>