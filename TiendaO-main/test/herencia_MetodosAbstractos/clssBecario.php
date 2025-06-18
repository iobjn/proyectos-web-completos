.<?php


require_once('clsspersona.php');

class Becario extends Persona
{

    protected $fltPromedio;
    protected $strCurso;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setPromedio(string $promedio)
    {
        $this->fltPromedio = $promedio;
    }

    public function getPromedio(): float{
        return $this->fltPromedio;
    }

    public function setCursoActua(string $curso)
    {
        $this->strCurso = $curso;
    }

    public function getCursoActua(): string{
        return $this->strCurso;
    }







}


