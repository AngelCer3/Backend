<?php

    namespace config;

    use config\Route;

    require_once realpath('./vendor/autoload.php');

    $router = new Route();

    
    /* Vista Login */
    $router->get("/", ['Login', 'index']);
    $router->get("/login", ['Login', 'index']);
    $router->get("/registre", ['Login', 'registro']);
    $router->post("/registreComprobar", ['Login', 'completarRegistro']);
    $router->post("/loginComprobar", ['Login', 'comprobarUsuario']);
    $router->get("/logout", ['Login', 'cerrarSession']);

    /* Vista Home */
    $router->get("/home", ['Login', 'inicioSession']);

    /* Vistas Crud */
    $router->get("/usuarios", ['Usuarios', 'index']);
    $router->get("/insertarUsuarios", ['Usuarios', 'insercion']);
    $router->post("/comprobarInsercion", ['Usuarios', 'completarInsercion']);
    $router->get("/editarUsuarios", ['Usuarios','editar']);
    $router->post("/comprobarEditar",['Usuarios', 'completarEditar']);
    $router->get("/eliminarUsuario", ['Usuarios', 'eliminarUsuario']);

    $router->run()

?>