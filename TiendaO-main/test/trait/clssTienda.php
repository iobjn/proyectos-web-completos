<?php
require_once ("producto.php");
require_once ("car.php");


class Tienda{
    use Producto,Car;
    public $fltTotal=0;

    public function getCar()
    {
        $this->fltTotal= $this->fltPrecio * $this->fltCantidad;
        $infoCar="
        <br >TOTAL DE CARRITO: <br>
        <hr>
        Producto: {$this->strProducto} <br>
        Precio: $ {$this->fltPrecio}.00 <br>
        <!--Stock:{$this->intStock} <br>-->
        Cantidad:{$this->fltCantidad} pz<br>
        Total: $ {$this->fltTotal} .00 <br>
        ";
        return $infoCar;
    }

}