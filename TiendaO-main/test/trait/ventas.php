<?php
require_once ("clssTienda.php");

$objProducto = new Tienda();

$strProducto="libro";
$fltPrecio=8;
$intStock=25;
$intVenta=10;



$objProducto ->setProducto($strProducto,$fltPrecio,$intStock);
echo $objProducto ->getProducto();


$objProducto->setStock($intVenta);

$objProducto ->setCar($strProducto,$intVenta);
echo $objProducto ->getCar();


echo $objProducto ->getProductoUpdateStock();



