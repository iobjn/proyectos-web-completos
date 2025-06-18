<?php
trait Producto{
    public $strProducto;
    public $fltPrecio;
    public $intStock;



    public function setProducto(string $producto, float $precio, int $stock){
        $this->strProducto = $producto;
        $this->fltPrecio = $precio;
        $this->intStock = $stock;


    }



    public function getProducto():string{
    $strInfo="
            Producto: {$this->strProducto} <br>
            Precio: {$this->fltPrecio} <br>
            Stock: {$this->intStock} <br>
             ";
        return $strInfo;
    }


    public function setProductoUpdateStock(string $producto, float $precio, int $stock){
        $this->strProducto = $producto;
        $this->fltPrecio = $precio;
        $this->intStock = $stock;


    }



    public function getProductoUpdateStock():string{
        $strInfo="
            <!--Producto: {$this->strProducto} <br>-->
            <!--Precio: {$this->fltPrecio} <br>-->
           <hr> Stock Actualizado despeus de compra: {$this->intStock} <br>
             ";
        return $strInfo;
    }



    public function setStock(int $cantidad){
        $this->intStock = $this->intStock - $cantidad;
    }

}
