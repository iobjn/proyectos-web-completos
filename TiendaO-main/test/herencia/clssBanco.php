<?php

class Banco extends Persona
{


    public $strTipoBanco ,$strTipoPago, $strDomicilio, $fltSaldo,$fltCVV ,$fltNTargeta ,
           $fltCompra , $DateNacimiento, $strStatus, $strGrado;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setTipoBanco(string $TipoBanco){
        $this -> strTipoBanco = $TipoBanco;
    }
    public function getTipoBanco():string{
        return $this -> strTipoBanco;
    }

    public  function setTipoPago(string $TipoPago){
        $this ->strTipoPago = $TipoPago;
    }

    public function getTipoPago():string{
        return $this -> strTipoPago;
    }


    public function setDomicilio(string $Domicilio){
        $this -> strDomicilio = $Domicilio;
    }
    public function getDomicilio():string{
        return $this -> strDomicilio;
    }


    public function setSaldo(float $Saldo){
        $this -> fltSaldo = $Saldo;
    }
    public function getSaldo():float{
        return $this -> fltSaldo;
    }

    public function setCVV(float $CVV){
        $this -> fltCVV = $CVV;
    }
    public function getCVV():float{
        return $this -> fltCVV;
    }

    public function setNTargeta(float $NTargeta){
        $this -> fltNTargeta = $NTargeta;
    }
    public function getNTargeta():float{
        return $this -> fltNTargeta;
    }

    public function setNCompra(float $Compra){
        $this -> fltCompra = $Compra;
    }
    public function getNCompra():float{
        return $this -> fltCompra;
    }

    public function setFNacimiento(DateTime $FNacimiento){
        $this -> DateNacimiento = $FNacimiento;
    }
    public function getFNacimiento():string{
        return $this->DateNacimiento->format('Y-m-d H:i:s'); // Formato de la fecha
    }

    public function setStatus(string $Status){
        $this-> strStatus = $Status;
    }
    public function getStatus():string{
        return $this-> strStatus;
    }

    public function setGradoEscolar(string $Grado){
        $this -> strGrado = $Grado;
    }
    public function getGradoEscolar():string{
        return $this -> strGrado;
    }











}
?>