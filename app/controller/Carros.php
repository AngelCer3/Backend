<?php

    namespace controller;
    use model\TablaCarros;

    require_once realpath(".../../vendor/autoload.php");

    class Carros 
    {

        public static function obtener_datos(){
            $carro = new TablaCarros();
            echo json_encode($carro->consulta());
        }
        public static function insercion_datos(){
            $carro = new TablaCarros();
            echo json_encode($carro->insercion(['marca' => 'honda', 'modelo'=> 'Spike', 'color'=>'plateado', 'placa'=>'ARMJASG', 'kilometraje'=>10,'id_carro'=>'']));
        }
        public static function actualizar_datos(){
            $carro = new TablaCarros();
            echo json_encode($carro->actualizar(['placa'=>'AMRGDESD3', 'id_carro'=>1]));
        }
        public static function eliminar_datos(){
            $carro = new TablaCarros();
            echo json_encode($carro->eliminar(['id_carro'=>1]));
        }

    }

?>