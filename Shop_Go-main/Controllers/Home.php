<?php
    class Home extends Controllers
    {
    public function __construct()
    {//heredamos el metodo constructor, ya que extendemos de controllers &// ese método a su vez llama el método loadmodel
        parent::__construct();
    }

    public function home()
    {
        $data['page_id'] = 1;
        $data['tag_page'] = "Inicio Shop_Go";
        $data['page_title'] = "Shop&Go";
        $data['page_name'] = "home";
        $data['page_content'] = "Con nuestra aplicación, puedes comprar productos de cannabis legales, seguros y de la más alta calidad. Directo a tu casa y en tiempo récord.";
        $this->views->getView($this, "home", $data);

    }
}
//
//
//
//        public function datos($params)
//        {
//            echo "<br>"."Dato (parametro) recibido: ".$params;
//        }
//
//        public function carrito($params)
//        {// echo "<br>". "Dato del Carrito $params". " mensaje desde controlador " ."<br>";
//            $carrito = $this->model->getCarrito($params);
//            echo $carrito;
//        }
//    }
//
?>