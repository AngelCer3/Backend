<?php

    namespace controller;
    use model\TablaUsuarios;
    use config\Route;
    require_once realpath('.../../vendor/autoload.php');

    class Usuarios{
        
        public function insertarUsuarios(){
            $ruta = new Route();
            $usuarios = new TablaUsuarios();

            $passEncrypt = password_hash($_POST['pass'], PASSWORD_DEFAULT);

            $arreglo = ['nombre'=>$_POST['nombre'], 
            'apellidoPaterno'=>$_POST['apellidoPaterno'], 
            'apellidoMaterno'=>$_POST['apellidoMaterno'],
            'correo'=>$_POST['correo'],
            'pass'=>$passEncrypt];

            $stmt = $usuarios->insercion($arreglo);

            if($stmt){
                echo print_r($stmt);
                $ruta->redirigir('login');
            }else{
                echo print_r($stmt);
                $ruta->redirigir('error');
            }
            
        }
        public function comprobarUsuario(){
           
            $ruta = new Route();
            $usuario = new TablaUsuarios();

            $correo = $_POST['correo'];
            $pass = $_POST['pass'];

           $correo_veri = $usuario->consulta()->where('correo',$correo)->first();


           if($correo_veri){
            if(password_verify($pass,$correo_veri['pass'])){
                session_start();
                $_SESSION['correo'] = $correo_veri['correo'];
                $_SESSION['id_usuario'] =$correo_veri['id_usuario']; 
                $ruta->redirigir('home');
            }else{
                $ruta->redirigir('login');
            }
           }else{
                $ruta->redirigir('login');
           }

        }
        public function verificar_session(){
            $ruta = new Route();
            if(!isset($_SESSION['id_usuario'])){
                $ruta->redirigir('login');
            }
        }
    
        public function inicioSession(){
            $ruta = new Route();
            if(isset($_SESSION['id_usuario'])){
                $ruta->redirigir('home');
            }
        }
    
        public function cerrarSession(){
            $ruta = new Route();
            session_start();
            $_SESSION = array();
            session_destroy();
            $ruta->redirigir('login');
        }
    }

?>