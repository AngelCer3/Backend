<?php
namespace config;
use config\Conexion;
use PDO;

require_once realpath('.../../vendor/autoload.php');
class ORM
{
    protected $tabla;
    protected $id_tabla;
    protected $atributos;
    function __construct()
    {
        $this->atributos = $this->atributos_tabla();
    }

    private function atributos_tabla(){
        $consulta = Conexion::obtener_conexion()->prepare("DESCRIBE $this->tabla");
        $consulta->execute();
        $campos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $atributos = [];
        foreach($campos as $campo){
            array_push($atributos, $campo['Field']);
        }
        return $atributos;
    }

    public function consulta($seleccion = ['*'])
    {
        $seleccion = implode(',', $seleccion);
        $consulta = Conexion::obtener_conexion()->prepare("SELECT $seleccion FROM $this->tabla");
        if ($consulta->execute()) {
            $data = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $data = [];
        }
        return $data;
    }
    private function consulta_id($id)
    {
        $consulta = Conexion::obtener_conexion()->prepare("SELECT * FROM $this->tabla WHERE $this->id_tabla=:id_tabla");
        if ($consulta->execute($id)) {
            $data = $consulta->fetch(PDO::FETCH_ASSOC);
        } else {
            $data = [];
        }
        return $data;
    }
    public function insercion($data)
    {
        $datos_tabla = implode(",", $this->atributos);
        $datos_values = ":" . implode(", :", $this->atributos);

        $consulta = Conexion::obtener_conexion()->prepare("INSERT INTO $this->tabla ($datos_tabla) VALUES ($datos_values)");
        return $consulta->execute($data);
    }
    public function actualizar($data)
    {
        /* $query = "";
        $contador = 0;
        foreach(array_keys($data) as $key){
            $query .= $this->id_tabla == $key ? '' : ($contador !=0 ? ','.$key.'=:'. $key : $key .'=:'. $key); 
            $contador++;
        } */

        $query = [];
        foreach(array_keys($data) as $key){
            if($this->id_tabla != $key){
                array_push($query, $key.'=:'.$key);
            }
        }
        $query = implode(', ', $query);
        $consulta = Conexion::obtener_conexion()->prepare("UPDATE $this->tabla SET $query  WHERE $this->id_tabla=:$this->id_tabla");
        return $consulta->execute($data);
    }
    public function eliminar($id)
    {
        $consulta = Conexion::obtener_conexion()->prepare("DELETE FROM $this->tabla WHERE $this->id_tabla= :$this->id_tabla");
        return $consulta->execute($id);
    }
}
?>