<?php 

    namespace model;
    use config\ORM;

    class TablaUsuarios extends ORM{
        protected $tabla = 't_usuarios';
        protected $id_tabla = 'id_usuario';
    }

?>