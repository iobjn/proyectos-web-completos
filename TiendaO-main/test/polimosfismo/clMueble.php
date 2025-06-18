<?php
require_once ('producto.php');

class Mueble extends Producto{

    public string $strColor;
    public string $strMatetial;
    public string $strMarca;
    public $strStatus = "Agotado";

    public function __construct(string $descripcion, float $precio, string $marca , string $color , string $material){
        parent::__construct($descripcion,$precio);

        $this->strMatetial=$material;
        $this->strColor=$color;
        $this->strMarca=$marca;
    }

    public function getdetalleProduct(){
        $arrProduct = array('producto' => $this -> strDescripcion,
            'precio' => $this -> fltPrecio,
            'stock_minimo' => $this -> intStockMinimo,
            'statsus' => $this -> strStatus,
            'color' => $this -> strColor,
            'material' => $this ->strMatetial,
            'marca' => $this ->strMarca);
        return $arrProduct;
    }
}

?>