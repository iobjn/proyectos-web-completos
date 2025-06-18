<?php


class Deporte extends Persona
{
    public $strpractica;
    public $strTipo;


    function __construct (int $dpi, string $nombre, int $edad){
        parent::__construct($dpi, $nombre, $edad);
    }


    public function setPractica(string $practica){
        $this->strpractica= $practica;

    }

    public function getPractica():string{
       return $this->strpractica;

    }

    public function setTipo(string $tipo){
        $this->strTipo= $tipo;

    }


    public function getTipo(): string{
       return $this->strTipo;

    }


}
?>