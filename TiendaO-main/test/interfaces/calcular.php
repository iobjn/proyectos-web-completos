<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>testInterface &#10003;</title>
</head>
<body style="background: #165751">
<div style="text-align: center;
            padding: 20px;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            font-size: 15px;
            background: aliceblue;
            border-radius: 10px;
            box-shadow: 5px 5px 10px chartreuse ;
            ">

    <?php
    require_once 'clssOperacion.php';

    $objR = new Calcular();
    $objoperacionDinamica = new Calcular();


    $numero =9;
    $potencia =10;

    $Rraiz= $objR->raiCuadrada($numero);
    $Rpotencia = $objR->potencia($numero,$potencia);

    $num = 50;
    $num1= 3;
    $operacion="7";
    $ROperacion = $objoperacionDinamica->op_basica($num,$num1,$operacion);

    echo "<span style='color: chartreuse'>&#10003;</span> La raíz cuadrada del número " . $numero . " es: " . $Rraiz . "<br>";
    echo "<span style='color: chartreuse'>&#10003;</span>  La potencia del número " . $numero . " elevado al exponente " . $potencia . " es: " . $Rpotencia . "<br>";
    echo "<span style='color: chartreuse'>&#10003;</span>  La operación de " . $num . " '" . $operacion . "' ". $num1 . " da como resultado: " .$ROperacion . "<br>";

    echo $objoperacionDinamica->op_basica(50,3,'+');

    ?>

</div>


</body>
</html>

