
<?php
require_once ("autoload.php");
//require_once ('persona.php');
class Cliente extends Persona{

    protected $fltCredito;

    function __construct (int $dpi, string $nombre, int $edad){
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setCredito(string $credito){
        $this->fltCredito = $credito;
    }

    public function getCredito():float{
        return $this->fltCredito;
    }


}

?>