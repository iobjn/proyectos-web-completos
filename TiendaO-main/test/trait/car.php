<?php
trait Car{
    public $strPorducto;
    public $fltCantidad;

    public function setCar(string $producto, float $cantidad){
        $this->strPorducto=$producto;
        $this->fltCantidad=$cantidad;
    }

//    public function getCar():float{
//        $strInf="
//        Cantidad:{$this->fltCantidad} <br>
//        ";
//        return $strInf;
//    }

    abstract function getCar();
}
