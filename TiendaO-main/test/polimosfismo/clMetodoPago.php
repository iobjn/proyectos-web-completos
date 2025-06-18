<?php

require_once ('producto.php');

class Pago extends Producto {

    public string $strtipoPago;
    public float $fltQuantity;
    public string $strFecha;

    public function __construct(string $descripcion, float $precio,
                    string $pago, float $quantity, string $fecha){
        parent::__construct($descripcion,$precio);

        $this -> strtipoPago = $pago ;
        $this -> fltQuantity =  $quantity;
        $this -> strFecha = $fecha ;

    }

    public function getdetalleProduct(){
        $arrProduct = array('Producto' => $this -> strDescripcion,
            'precio' => $this -> fltPrecio,
            'tipo pago' => $this -> strtipoPago,
            'pago' => $this -> fltQuantity,
            'fecha' => $this -> strFecha
            );
        return $arrProduct;
//        return $arrProduct;
    }

}



