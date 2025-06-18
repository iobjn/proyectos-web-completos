<?php
class Producto
{

    public $strDescripcion;
    public $fltPrecio;
    protected $intStockMinimo= 10;
    protected $strStatus= "ACTIVO";


    public function __construct(string $descripcion, float $precio){
        $this -> strDescripcion = $descripcion;
        $this -> fltPrecio = $precio;
    }

     public function getdetalleProduct(){
        $arrProduct = array('producto' => $this -> strDescripcion,
                            'precio' => $this -> fltPrecio,
                            'stock_minimo' => $this -> intStockMinimo,
                            'statsus' => $this -> strStatus);
        return $arrProduct;
     }


}