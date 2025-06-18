<?php

class Compra extends Persona{

    public $strCliente;
    protected $strFecha;



    function __construct(int $dpi, string $nombre, int $edad){
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setCliente(string $Cliente)
    {
        $this->strCliente = $Cliente;
    }
    public function getCliente():string
    {
        return $this -> strCliente;
    }

    public function setFecha(DateTime $fecha) {
        $this->strFecha = $fecha;
    }

    public function getFecha(): string {
        return $this->strFecha->format('Y-m-d H:i:s'); // Formato de la fecha
    }





}


?>