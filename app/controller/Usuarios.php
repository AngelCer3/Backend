<?php

    namespace controller;
    use model\TablaUsuarios;
    use config\View;
    use config\Route;
    require_once realpath('.../../vendor/autoload.php');

    class Usuarios extends View{
        
        public function index(){
        session_start();
        $usuario = new TablaUsuarios();
        $datos = $usuario->consulta()->all();
            if (isset($_SESSION['id_usuario'])) {
                return parent::vista('usuarios', $datos);
            } else {
                return parent::vista('login/login');
            }
        }
        public function insercion(){
            session_start();
            $usuario = new TablaUsuarios();
            $datos = $usuario->consulta()->all();
            if (isset($_SESSION['id_usuario'])) {
                return parent::vista('insertarUsuarios');
            } else {
                return parent::vista('usuarios', $datos);
            }
        }

        public function completarInsercion(){
        session_start();
       
        $usuario = new TablaUsuarios();
        $passEncrypt = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        $arreglo = [
            'nombre' => $_POST['nombre'],
            'apellidoPaterno' => $_POST['apellidoPaterno'],
            'apellidoMaterno' => $_POST['apellidoMaterno'],
            'correo' => $_POST['correo'],
            'pass' => $passEncrypt
        ];

        $stmt = $usuario->insercion($arreglo);
        if ($stmt) {
            $usuarios = new TablaUsuarios();
            $datos = $usuarios->consulta()->all();    
            return parent::vista('usuarios', $datos);
        } else {
            return parent::vista('error');
        }
    }
    public function editar($id){
        session_start();
        $usuario = new TablaUsuarios();
        $datos = $usuario->consulta()->where('id_usuario',$id)->first();
        if (isset($_SESSION['id_usuario'])) {
            return parent::vista('editarUsuarios', $datos);
        } else {
            return parent::vista('usuarios', $datos);
        }
    }
    public function completarEditar($id){
        session_start();
        $usuario = new TablaUsuarios();
        $passEncrypt = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        $arreglo = [
            'nombre' => $_POST['nombre'],
            'apellidoPaterno' => $_POST['apellidoPaterno'],
            'apellidoMaterno' => $_POST['apellidoMaterno'],
            'correo' => $_POST['correo'],
            'pass' => $passEncrypt
        ];

        $stmt = $usuario->actualizar($arreglo)->where('id_usuario', $id)->first();
        
        if (!$stmt) {
            $usuarios = new TablaUsuarios();
            $datos = $usuarios->consulta()->all();    
            return parent::vista('usuarios', $datos);
        } else {
            return parent::vista('error');
        }
    }
    public function eliminarUsuario($id){
        $usuario = new TablaUsuarios();   
        $datos = $usuario->eliminar()->where('id_usuario', $id)->get();
        if (!isset($_SESSION['id_usuario'])) {
            $datos = $usuario->consulta()->all();
            return parent::vista('usuarios', $datos);
        } else {
            return parent::vista('login/login');
        }
    }

       
    }
    $controlador = new Usuarios();

?>