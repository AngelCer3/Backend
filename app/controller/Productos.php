<?php 

    namespace controller;
    
    use model\TablaProductos;

    require_once realpath('.../../vendor/autoload.php');



    class Productos{

        public function mostrar_productos(){
            $productos = new TablaProductos();
            echo json_encode($productos->consulta()->all());
        }

        public function mostrar_producto(){
            $producto = new TablaProductos();
            echo json_encode($producto->consulta()->first());
        }
        public function total_productos(){
            $total = new TablaProductos();
            return $total->count(['*'])->all();
        }
        public function limite_productos(){
            $tres = new TablaProductos();
            return $tres->consulta()->limit('3','1')->all();
        }

        public function filtra_productos(){
            $producto = new TablaProductos();
            return $producto->consulta()->where('nombre', '')->like('S')->all();
        }
        public function eliminar_producto(){
            $producto = new TablaProductos();
            echo json_encode($producto->eliminar()->where('id_producto', '3')->all());
        }
    }



?>