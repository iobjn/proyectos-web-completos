<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
<div>
    <?php
    require_once 'classUsuario.php';


    $objUsuarioUno = new usuario("Brajan med", "bjnmx26gmail.com", "admin");
    $Car = new usuario("Pointer", "wosvagen@gmail.com", "Carga");

    echo '<br>';
    echo '1. acceder a propiedad public de manera instanciada >>>> ". $objUsuarioUno->strTipo'."<br>";

    echo '2. acceder a propiedad estatica directamente sin instanciar una clase >>>>' . usuario::$strEstado."<br><br>";

    echo '3. detalle error >>>>  <span style="background-color: aliceblue;border-radius: 10px; padding: 5px;"> AL INTENTAR ACCEDER A UNA CLASE PPIVADA DE MANERA DIRECTA O INSTANCIADA</span>: '."<br>";
    echo 'Acceder a propiedad estatica directsmente sin instasnciar una clase >>>>  . usuario::$strClave'."<br>";

echo '<hr>';
    echo '<p>Para acceder a una clase privada se hace de esta manera: </p>';
    echo '<pre>
            
         private $strNombre;

            function __construct(string $nombre, string $email, string $tipo )
            {
                $this->strNombre = $nombre;
            }
            
            public function getNombre():string
             {
                return $this->strNombre;
             } 
             
             
             & usamos el el metodo getNombrepara traerlo :: echo $objUsuarioUno->getNombre();
          </pre>';
    echo  '<br>' . '4. echo $objUsuarioUno -> getNombre(); >>>>>       ';
    echo $objUsuarioUno->getNombre(). '>>>>>  ';
    echo $objUsuarioUno->getEmail()."<br><hr>";

    echo 'Asi optenemos todos los datos de nuestra clase de manera privada <br>';
    echo '<pre>
<span style="font-weight: bold; border-radius: 10px;padding: 5px;background-color: darkorange;color:white; ">classUsuario.php</span>

class usuario{
    private $strNombre;
    private $strEmail;
    private $strTipo;
    private  $strClave;
    protected  $strFechaRegistro;
    static $strEstado = "activo";
    
     function __construct(string $nombre, string $email, string $tipo ){
        $this->strNombre = $nombre;
        $this->strEmail = $email;
        $this->strTipo = $tipo;
        $this->strClave = rand();
        $this->strFechaRegistro= date("Y-m-d H:m:s");

    }
   
    
     public function getPerfil()
    {
       echo "Datos del Usuario";
       echo "Nombre: ". $this ->strNombre;
       echo "Nombre: ". $this ->strEmail;
       echo "Fecha registro: ". $this ->strFechaRegistro;
       echo "Clave: ". $this ->strFechaRegistro;
       echo "Estado: ". self::$strEstado;
    }
        

<span style="font-weight: bold; border-radius: 10px;padding: 5px;background-color: darkorange;color:white;">user.php</span>
   
 require_once "classUsuario.php";
 echo $objUsuarioUno->getPerfil();
    
        
        
<span style="font-weight: bold; border-radius: 10px;padding: 5px;background-color: #165751;color:white;">LO CUAL IMPRIME ↓:   </span>  
        </pre>';


    echo "<div style='border:  2px solid black; padding: 20px; margin: 10px; display: inline-block'>";

    echo $objUsuarioUno->getPerfil();
    echo "</div> <hr>";


    echo "<div style='border:  2px solid black; padding: 20px; margin: 10px; display: inline-block'>";
    echo $Car->auto();
    $Car->setCambiarClave("1234566778
    "); //Aqui cambiamos la clase con nuestro metodo setCambiarClave
    echo "</div> <hr><br></pre>";


    echo "<fieldset style='border:  2px solid black; padding: 20px; margin: 10px; display: inline-block'><legend>Clave Cambiada</legend>";

    echo $Car->auto();
    echo "</fieldset> <hr><br></pre>";




    ?>


</div>
</body>
</html>

