<?php
class Errors extends Controllers {

    public function __construct()
    {
        //heredamos el metodo constructor, ya que extendemos de controllers &
        // ese método a su vez llama el método loadmodel
        parent::__construct();

    }
    public function notFount()
    {
        //echo "Mnj desde el controllers";
        $this->views->getView($this,"error");
    }
}

$notFount = new Errors();
$notFount->notFount();
?>