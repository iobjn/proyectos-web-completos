<?php
require_once('Operacion.php');
require_once('interface_test.php');

     class Calcular implements Operacion,test_interface {
          public function raiCuadrada(float $numero): float{
            $total = sqrt($numero);
            return $total;
          }

          public function potencia(int $numero,int $potencia):int{
            $total = pow($numero,$potencia);
            return $total;
          }




          public function op_basica(float $num,float $num1,string $operacion){
              if($operacion == "+"){
                  $result = $num + $num1;
              }else if($operacion == "-"){
                  $result = $num - $num1;
              }else if($operacion == "*"){
                  $result = $num * $num1;
              }else if($operacion == "/"){
                  $result = $num / $num1;
              }else{
                  $result = " <span style='color: firebrick'>&#10007;</span> Operacion Invalida";
              }
              $detalleOperacion = "El resultado de {$num} '{$operacion}' {$num1} es: {$result}";
              return $detalleOperacion;
          }



    }