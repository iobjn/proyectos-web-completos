.<?php


require_once('clsspersona.php');

class Proveedor extends Persona
{

    protected $fltProveedor;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setpresupuesto(string $presupuesto)
    {
        $this->fltProveedor = $presupuesto;
    }

    public function getpresupuesto(): float
    {
        return $this->fltProveedor;
    }


}


