<?php
require_once ("autoload.php");
//require_once ('persona.php');
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

     }


?>