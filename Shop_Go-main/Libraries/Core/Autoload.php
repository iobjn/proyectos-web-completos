<?php

spl_autoload_register(function ($class){
//    if(file_exists(LIBS.'Core/'.$class.".php")){   se elimino variable global y se paso directo con "Libraries/" = LIBS
//        require_once (LIBS.'Core/'.$class.".php");
//    }
    if(file_exists("Libraries/".'Core/'.$class.".php")){
        require_once ("Libraries/".'Core/'.$class.".php");
    }
});

?>