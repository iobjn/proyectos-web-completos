<?php
//#[AllowDynamicProperties]

class Controllers
{
    protected $model; // 👈 la propiedad se declara aquí a partir de php 8.2
    protected $views; // 👈 la propiedad se declara aquí a partir de php 8.2

    public function __construct()
    {
        $this->views = new Views();
        $this->loadModel();
    }



    public function loadModel()
    {
        //HomeModel.php
        $model = get_class($this)."Model";
        $routClass = "Models/".$model.".php";
        if(file_exists($routClass)){
            require_once ($routClass);
            $this->model = new $model();
        }


    }
}

?>