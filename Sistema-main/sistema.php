<?php
require_once ("Autoload.php");

$objUsuario= new Usuario();
//
//$insert = $objUsuario->insertUsuario("brajan",326598,"bjnmx@gmail.com");
//echo $insert;
$users = $objUsuario->getUsuarios();
print_r("<pre>");
print_r($users);
print_r("<pre>");

?>