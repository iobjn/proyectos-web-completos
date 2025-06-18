<?php

require_once ('clsspersona.php');
 class Empleado extends Persona{

    protected $strPuesto; 

     function __construct (int $dpi, string $nombre, int $edad){

      
           parent::__construct($dpi, $nombre, $edad);

     }

     public function setPuesto(string $puesto){
        $this->strPuesto = $puesto;  //optenemos el valor con set
     }
     //traermos el  valor con get 
     public function getPuesto():string{
        return $this->strPuesto;
     }

     public function getDatosPersonales(){

         $datos = "
                <h2>DATOS PERSONALES</h2>
                DPI: {$this->intDpi}<br>
                Nombre: {$this->strNombre}<br>
                Edad: {$this->intEdad}<br>
        ";
         return $datos;
     }



    public function setMensaje(string $mensaje){
        $this->mensaje = $mensaje;
    }
    public function getMensaje():string{
//        return $this->mensaje.'nombre: '.$this->strNombre
        return $this->mensaje.' '.$this->strNombre;
    }




 }


?>