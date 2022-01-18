<?php
    class VideoJuego{ 
       function __construct(){
            require_once 'operacionesBD.php';
            $this->juego= new Conexion();
        }
       function preparar(){
           $consulta="INSERT INTO videojuegos(nombre,url,img)VALUES(?,?,?)";
           if(empty($this->juego->consultaPreparada($consulta))){
               echo 'error';
               return;
           }else{
            if(!$this->juego->asignarParametros()){
                echo 'error2';
                return;
            }
           }
       }
       function ejecucion($nombre,$img,$url){
            $this->juego->setValores($nombre,$img,$url); 
            $this->juego->ejecutar(); 
       }
    }
?>