<?php
require_once ("Autoload.php");
class Usuario extends Conexion{
    private $strNombre;
    private $intTelefono;
    private $strEmail;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }


    public function insertUsuario(string $nombre,int $telefono, string $email)
    {
        $this->strNombre= $nombre;
        $this->intTelefono= $telefono;
        $this->strEmail= $email;

        $sql = "INSERT INTO usuario(nombre,telefono,email) VALUES(?,?,?)";
        $insert= $this->conexion->prepare($sql);
        $arrData= array($this->strNombre,$this->intTelefono,$this->strEmail);
        $resInsert=$insert->execute($arrData);
        $idInsert= $this->conexion->lastInsertId();
        return $idInsert;


    }


    public function getUsuarios()
    {
        $sql= "SELECT * FROM usuario";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchAll(PDO::FETCH_ASSOC);
        return $request;
    }
}






?>


