<?php

namespace controller;

use config\View;
use model\TablaProductos;
use model\TablaUsuarios;

require_once realpath('.../../vendor/autoload.php');

class Login extends View
{
    public function index()
    {
        session_start();
        $producto = new TablaProductos();
        $datos = $producto->consulta()->all();
        if (isset($_SESSION['id_usuario'])) {
            return parent::vista('home', $datos);
        } else {
            return parent::vista('login/login');
        }
    }

    public function registro()
    {
        session_start();
        $producto = new TablaProductos();
        $datos = $producto->consulta()->all();
        if (isset($_SESSION['id_usuario'])) {
            return parent::vista('home', $datos);
        } else {
            return parent::vista('login/registre');
        }
    }

    public function completarRegistro()
    {
        session_start();
        $producto = new TablaProductos();
        $datos = $producto->consulta()->all();
        if (isset($_SESSION['id_usuario'])) {
            return parent::vista('home', $datos);
        }

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
            return parent::vista('login/login');
        } else {
            return parent::vista('error');
        }
    }
    public function comprobarUsuario()
    {
        session_start();
        $producto = new TablaProductos();
        $datos = $producto->consulta()->all();
        if (isset($_SESSION['id_usuario'])) {
            return parent::vista('home', $datos);
        }

        $usuario = new TablaUsuarios();

        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        $correo_veri = $usuario->consulta()->where('correo', $correo)->first();

        if ($correo_veri && password_verify($pass, $correo_veri['pass'])) {
            $_SESSION['correo'] = $correo_veri['correo'];
            $_SESSION['id_usuario'] = $correo_veri['id_usuario'];

            return parent::vista('home', $datos);
        } else {
            return parent::vista('login/login');
        }
    }
    public function readProductos()
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            $producto = new TablaProductos();
            $datos = $producto->consulta()->all();
            return parent::vista('home', $datos);
        } else {
            return parent::vista('login/login');
        }
    }


    public function verificarSession()
    {
        if (!isset($_SESSION['id_usuario'])) {
            return parent::vista('login/login');
            echo "No hay sesión iniciada";
        }
    }

    public function inicioSession()
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            $this->verificarSession();
            $producto = new TablaProductos();
            $datos = $producto->consulta()->all();
            return parent::vista('home', $datos);
        } else {
            return parent::vista('login/login');
        }
    }


    public function cerrarSession()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        return parent::vista('login/login');
    }
}
$controlador = new Login();
?>