<?php
    require_once realpath('./vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable('./');
    $dotenv->load();

    echo $_ENV['PUERTO'];
    echo $_ENV['USUARIO'];
    echo $_ENV['PASSWORD'];
    echo $_ENV['HOST'];
    echo $_ENV['DBNAME'];
?>