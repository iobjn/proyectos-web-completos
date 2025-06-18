<?php

    class Conexion
    {
        private $host = "localhost";
        private $user = "root";
        private $password = "986532";
        private $db = "db_sistema";
        private $conect = "";


        public function __construct()
        {
            $connectionString = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";
            try{
                $this->conect = new PDO($connectionString,$this->user,$this->password);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "conexion correcta";

            }catch (Exception $e){
                $this->conect = 'Error de conexión';
                echo "ERROR: ". $e->getMessage();
            }
        }

        public function connect()
        {
            return $this->conect;
        }
    }

//$connect = new Conexion();



?>