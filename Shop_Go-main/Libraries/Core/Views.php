<?php

class Views
{
    function getView($controller,$view,$data="")
    {
        $controller = get_class($controller);

        if($controller == "Home"){
//            $view = VIEWS.$view.".php";eliminamos la variable global de config.php
            $view = "Views/".$view.".php";
        }else{
//            $view = VIEWS.$controller."/".$view.".php";
            $view = "Views/".$controller."/".$view.".php";
        }
        require_once ($view);
    }
}

?>