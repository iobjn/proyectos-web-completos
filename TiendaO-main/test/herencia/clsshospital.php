<?php

class Medicos extends Persona{

public $strParamedicos;
protected $fltSueldo;
public $strSueldo;
protected $strTipoSeguro;
public $fltHorario;
public $strHorario;



    function __construct(int $dpi, string $nombre, int $edad){
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setPuestoMedico(string $PuestoMedico)
    {
        $this->strParamedicos = $PuestoMedico;
    }
    public function getPuestoMedico():string
    {
        return $this -> strParamedicos;
    }

    public function setsNomi(string $sueldoc){
        $this->strSueldo=$sueldoc;
    }

    public function getsNomi():string{
        return $this->strSueldo;
    }



    public function setNominaMedica(float $sueldo){
        $this->fltSueldo = $sueldo;
    }
    public function getNominaMedica():float{
        return $this->fltSueldo;
    }

    public function setSeguro(string $seguro){
        $this->strTipoSeguro=$seguro;
    }
    public function getSeguro():string{
        return $this->strTipoSeguro;
    }


    public function setHr(float $horario){
        $this->fltHorario=$horario;
    }

    public function getHr():float{
        return $this->fltHorario;
    }

   public function setHrs(string $horario){
        $this->strHorario=$horario;
    }

    public function getHrs():string{
        return $this->strHorario;
    }


}


?>