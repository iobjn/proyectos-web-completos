<?php
//Load en archivo Core/load.php
$controllerFile = "Controllers/".$controller.".php";
if(file_exists($controllerFile))
{
//    echo "si existe controlador ".$controller;
    require_once ($controllerFile);
    $controller= new $controller();
    if(method_exists($controller,$method))
    {
        $controller->{$method}($params);
    }else{
        //echo "No existe en método ".$method;
        require_once("Controllers/Error.php");
    }

} else{
    //echo "No existe el controlador ".$controller;
    require_once("Controllers/Error.php");
}



?>