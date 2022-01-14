<?php
    class Niveles{ 
       function __construct(){
            require_once 'operacionesBD.php';
            $this->nivel= new Conexion();
        }
       function preparar(){
           $consulta="INSERT INTO videojuegos(nombre,url,img)VALUES(?,?,?)";
           if(empty($this->nivel->consultaPreparada($consulta))){
               echo 'error';
               return;
           }else{
            if(!$this->nivel->asignarParametros()){
                echo 'error2';
                return;
            }
           }
       }
       function ejecucion($nombre,$img,$url){
            $this->nivel->setValores($nombre,$img,$url); 
            $this->nivel->ejecutar(); 
       }
    }
?>