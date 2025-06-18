<?php
 require_once("classOperacion.php");
 $open =  new Bobeda(5, 9);
?>

<div>
    <p>Table de procesos con <?php echo  $open->userRoot . " AND " . $open->access ?> </p>
</div>

<?php

    $procesos = $open->getSuma();
    echo 'getSuma ' . $open->userRoot . "+" . $open->access . ' = procesos : ' . $procesos . "<br>";

    $procesos = $open->getResta();
    echo 'getResta ' . $open->userRoot . "-" . $open->access . ' = procesos : ' . $procesos . "<br>";

    $procesos = $open->getMult();
    echo 'getMult ' . $open->userRoot . "*" . $open->access . ' = procesos : ' . $procesos . "<br>";

    $procesos = $open->getDiv();
    echo 'getDiv ' . $open->userRoot . "/" . $open->access . ' = procesos : ' . $procesos . "<br>";




?>