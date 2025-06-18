<?php
require_once('clsspagos.php');
class Pagos extends persona{

    public $DateAFecha,$fltHoraM,$fltMinutoM,$fltSegundoM,$strPagoTipo,$fltMonto,$strIva;

    public function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setAFecha( DateTime $AFecha){
        $this -> DateAFecha = $AFecha;
    }
    public function getAFecha():string{
        return $this->DateAFecha->format('Y-m-d H:i:s'); // Formato de la fecha
    }

    public function setHoraMov( float $HoraMov){
        $this -> fltHoraM = $HoraMov;
    }
    public  function getHoraMov():float{
        return $this -> fltHoraM;
    }

    public function setMinutoM( float $MinutoM){
        $this -> fltMinutoM = $MinutoM;
    }
    public function getMinutoM():float{
        return $this -> fltMinutoM;
    }

    public function setSegundoM(float $SegundoM){
        $this-> fltSegundoM = $SegundoM;
    }
    public function getSegundoM():float{
        return  $this-> fltSegundoM;
    }
    public function setPagoTipo(string $PagoTipo){
        $this -> strPagoTipo = $PagoTipo;
    }
    public function getPagoTipo():string{
        return $this -> strPagoTipo;
    }

    public function setMontoM(float $MontoM){
        $this -> fltMonto = $MontoM;
    }
    public function getMontoM():float{
        return $this ->fltMonto;
    }

    public function setIva(string $Iva){
        $this -> strIva = $Iva;
    }
    public function getIva():string{
        return $this -> strIva;
    }
}