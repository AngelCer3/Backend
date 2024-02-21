<?php

    namespace controller;
    use model\TablaAlumnos;
    
    require_once realpath(".../../vendor/autoload.php");

    class Alumnos{
        public static function obtener_datos(){
            $alumno = new TablaAlumnos(); 
            echo json_encode($alumno->consulta());
        }
        public static function insertar_datos(){
            $alumno = new TablaAlumnos();
            echo json_encode($alumno->insercion(['nombre'=>'Axel', 'apellidoMaterno'=>'Vertiz', 'apellidoPaterno'=>'Martinez', 'edad'=>24, 'sexo'=>'Masculino', 'id_alumno'=>'']));
        }
        public static function actualizar_datos(){
            $alumno = new TablaAlumnos();
            echo json_encode($alumno->actualizar(['nombre'=>'Cristo', 'apellidoMaterno'=>'Suarez', 'id_alumno'=>2]));
        }
        public static function eliminar_datos(){
            $alumno = new TablaAlumnos();
            echo json_encode($alumno->eliminar(['id_alumno'=>2]));
        }
    }

?>  