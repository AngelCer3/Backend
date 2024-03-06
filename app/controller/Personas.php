<?php

namespace controller;

use model\TablaPersona;

require_once realpath('.../../vendor/autoload.php');



class Personas
{
    public static function obtener_datos()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->consulta()->first());
    }
    public static function obtener_datos_elemento(){
        $persona = new TablaPersona();
        return $persona->consulta()->where('nombre', 'cristo')->where('edad', '23')->first();
    }
    public static function contar_datos(){
        $persona = new TablaPersona();
        return $persona->count(['*'])->where('edad', '23')->all();
    }
    public static function insertar_datos()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->insercion(['nombre'=>'Angel', 'edad'=>23, 'sexo'=>'Femenino']));
    }
    public static function actualizar_datos(){
        $persona = new TablaPersona();
        echo json_encode($persona->actualizar(['nombre'=>'Striker', 'edad'=> 10])->where('id_persona', '2'));
    }
    public static function eliminar_datos(){
        $persona = new TablaPersona();
        echo json_encode($persona->eliminar()->where('nombre', 'Carlitos'));
    }
}

?>