<?php


class homeModel
{

    public function __construct(){
//        echo "Mensaje desde el modelo home"."<br>";
    }

    public function getCarrito($params)
    {
        return "Datos del Carrito ".$params. " mensaje desde modelo ";
    }
}

?>

