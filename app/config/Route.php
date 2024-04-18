<?php
namespace config;
use controller\Usuarios;

require_once realpath('./vendor/autoload.php');
class Route
{
    private const SERVER = "http://backend.local/";
    private const DEP_IMG = self::SERVER . "public/img/";
    private const DEP_JS = self::SERVER . "public/js/";
    private const DEP_CSS = self::SERVER . "public/css/";

    private const DIRECTORIO = array(
        'home' => 'view/home.view',
        'productos' => 'view/productos.view',
        'error' => 'view/error.view',
        'login' => 'view/login/login.view',
        'registre' => 'view/login/registre.view',
        'comprobar'=> 'view/login/registre.comprobar.view',
        'logincomprobar'=> 'view/login/login.comprobar.view',
        'logout' => 'view/login/logout.view'
    );
   /*  public function __construct()
    {
    }  */
        


    public function vista()
    {   
        session_start();
        $sesiones = new Usuarios();
        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'login';

        if($vista === 'home'){
            $sesiones->verificar_session();
        }elseif($vista === 'login'){
            $sesiones->inicioSession();
        }elseif($vista === 'registre'){
            $sesiones->inicioSession();
        }
        
        if (array_key_exists($vista, self::DIRECTORIO)) {
            require_once self::DIRECTORIO[$vista] . '.php';
            /* if (!is_array(DIRECTORIO[$vista])) {
            } else {
                $controlador = DIRECTORIO[$vista];
                require_once './app/controller/' . $controlador['controller'] . '.php';
                $controlador_class = $controlador['controller']; 
                if (class_exists($controlador_class)) {
                    $controlador1 = new $controlador_class;  
                    $metodo1 = $controlador['method']();  
                    $controlador1->$metodo1();  
                } else {
                    echo "Class $controlador_class not found.";
                }
            } */
        } else {
            require_once self::DIRECTORIO['error'] . '.php';
        }
    }
    public function redireccion($ruta){
        $ruta_completa = self::SERVER . $ruta;
        return $ruta_completa;
    }

    public function dep_js($archivo){
        return self::DEP_JS.$archivo.'.js';
    }
    public function dep_css($archivo){
        return self::DEP_CSS.$archivo.'.css';
    }
    public function redirigir($ruta){
        echo '
        <script>
            window.location="/'.$ruta.'"
        </script>';
    }
}

?>