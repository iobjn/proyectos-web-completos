<?php
require_once ('clMueble.php');

 class Mesa extends Mueble{
    private $strForma = "";
    protected $strTamaño;
    public $strStatus= "activo";

    public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamaño){
        parent::__construct($descripcion,$precio,$marca,$color,$material);
        $this->strTamaño = $tamaño;
    }

    public function setForma(string $forma){
        $this -> strForma = $forma;
    }

    public function getdetalleProduct(){
        $arrProduct = array('producto' => $this -> strDescripcion,
            'precio' => $this -> fltPrecio,
            'stock_minimo' => $this -> intStockMinimo,
            'statsus' => $this -> strStatus,
            'color' => $this -> strColor,
            'materia' => $this ->strMatetial,
            'tamaño' => $this ->strTamaño,
            'forma'=> $this -> strForma);
        return $arrProduct;
    }

}
//}

?>