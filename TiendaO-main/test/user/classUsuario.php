<?php

class usuario{
//    private $strNombre;
//    public $strEmail;
//    private $strTipo;
//    private  $strClave;
//    protected  $strFechaRegistro;
//    static $strEstado = "activo";
    private $strNombre;
    private $strEmail;
    private $strTipo;
    private  $strClave;
    protected  $strFechaRegistro;
    static $strEstado = "activo";

    function __construct(string $nombre, string $email, string $tipo ){
        $this->strNombre = $nombre;
        $this->strEmail = $email;
        $this->strTipo = $tipo;
        $this->strClave = rand();
        $this->strFechaRegistro= date('Y-m-d H:m:s');

    }

    public function getNombre():string
    {
        return $this->strNombre;
    }
    public function getEmail():string
    {
        return $this->strEmail;
    }

    public function getPerfil()
    {
        echo "Datos del Usuario <br>";
        echo "Nombre: ". $this ->strNombre."<br>";
        echo "Nombre: ". $this ->strEmail."<br>";
        echo "Fecha registro: ". $this ->strFechaRegistro."<br>";
        echo "Clave: ". $this ->strFechaRegistro."<br>";
        echo "Estado: ". self::$strEstado."<br>";
    }


    public function auto()
    {
        echo "Datos del Auto <br>";
        echo "Nombre: ". $this ->strNombre."<br>";
        echo "Nombre: ". $this ->strEmail."<br>";
        echo "Fecha registro: ". $this ->strFechaRegistro."<br>";
        echo "Clave: ". $this ->strClave."<br>";
        echo "Estado: ". self::$strEstado."<br>";
    }

    public function setCambiarClave(string $pass)
    {
        $this->strClave=$pass;
    }





}


?>