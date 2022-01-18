<?php

class Conexion{
    var $resultado=null;
    var $nombre=null;
    var $url=null;
    var $img=null;
    var $stmt=null;
    function __construct() {
        require_once "configuracionBD.php";
        $this->mysqli = new mysqli(SERVIDOR,USUARIO, PASSWORD, DB);
    }
    /* function consultar($consulta){
        $this->resultado=$this->mysqli->query($consulta);
    }*/
    public function consultaPreparada($consulta){
       return $this->stmt=$this->mysqli->prepare($consulta);
    }
    public function asignarParametros(){
       return $this->stmt->bind_param("sss",$this->nombre,$this->url,$this->img);
    }
    public function setValores($nombre,$url,$img){
        $this->nombre=$nombre;
        $this->url=$url;
        $this->img=$img;
    }
    public function ejecutar(){
        $this->stmt->execute();
    }
    
}
?>