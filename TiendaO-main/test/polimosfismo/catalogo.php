<?php
require_once ("clMesa.php");
require_once ("clMetodoPago.php");
//require_once ("clLugar.php");

$objCama = new Producto("Cama",1500);
$arrInfoProducto = $objCama -> getdetalleProduct();
print_r('<pre>');
print_r($arrInfoProducto);
print_r('</pre>');


$objMueble = new Mueble("closet",2000,"casita","cafe","madera");
$arrInfoMueble = $objMueble ->getdetalleProduct();
print_r('<pre>');
print_r($arrInfoMueble);
print_r('</pre>');


$objMesa = new Mesa("Model ea",1800,"eames","blanco","madera simple","15mt");
$objMesa -> setForma("redonda");
$arrInfoMesa = $objMesa -> getdetalleProduct();
print_r('<pre>');
print_r($arrInfoMesa);
print_r('</pre>');




$objPago = new Pago("cama eames", 1500, 'targeta', 1500, '20-2024');
$arrInfoPay = $objPago -> getdetalleProduct();
print_r('<pre>');
print_r($arrInfoPay);
print_r('</pre>');
