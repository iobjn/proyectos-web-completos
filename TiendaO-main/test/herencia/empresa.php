<?php

 require_once ("clssempleado.php");
 require_once ("clsscliente.php");
 require_once ("classproveedor.php");
 require_once ("clssBecario.php");
 require_once ("classdeporte.php");
 require_once ("clsshospital.php");
 require_once ("clsscompra.php");
 require_once ("clssBanco.php");
 require_once ("clsspagos.php");

 $objEmpleado = new Empleado(785454,"brajan",25);
 $objEmpleado -> setPuesto("developer");
 echo $objEmpleado -> getDatosPersonales();
 echo "Puesto:" . $objEmpleado -> getPuesto();



$objCliente = new Cliente(666,"ernesto",65);
$objCliente -> setCredito(1800);
echo $objCliente -> getDatosPersonales();
echo "Credito:". $objCliente -> getCredito();



$objProveedor = new Proveedor(555,"Truper", 10);
$objProveedor ->setPresupuesto(40000);
echo $objProveedor -> getDatosPersonales();
echo "Presupuesto:" . $objProveedor -> getPresupuesto();



$objBecarios = new Becario(01,"UVM TORRES CUEVAS", 25);
$objBecarios ->setPromedio(10);
$objBecarios ->setCursoActua("Algebra");
echo $objBecarios -> getDatosPersonales();
echo "Promedio:" . $objBecarios -> getPromedio()."<br>";
echo "Curso Actual:" . $objBecarios -> getCursoActua();



$objDeporte = new Deporte(3,"ignacio",30);
$objDeporte -> setTipo("fultbol");
$objDeporte -> setPractica("si");
echo $objDeporte -> getDatosPersonales();
echo "Practica Deporte: " . $objDeporte -> getPractica()."<br>";
echo "¿Que tipo de Deporte?: " . $objDeporte -> getTipo();



$objMedicos = new Medicos(1,"dr. Simi",25);
$objMedicos ->setPuestoMedico("Odontologo");
$objMedicos ->setsNomi("$ ");
$objMedicos ->setNominaMedica(1000000);
$objMedicos ->setSeguro("IMSS");
$objMedicos ->setHr(10);
$objMedicos ->setHrs("hrs");
echo $objMedicos ->getDatosPersonales();
echo "Puesto Médico: " . $objMedicos->getPuestoMedico()."<br>";
echo "Salario: " . $objMedicos->getsNomi()  . $objMedicos->getNominaMedica(). " MXM " ."<br>";
echo "Tipo de Seguro: " . $objMedicos->getSeguro()."<br>";
echo "Horario Laboral: " . $objMedicos->getHr(). " " . $objMedicos->getHrs();


$objCompra = new Compra (5,"usuario externo",15);
$objCompra ->setCliente(" externo");
$objCompra->setFecha(new DateTime('2024-12-25 15:30:00'));
echo $objCompra ->getDatosPersonales();
echo "Cliente: " . $objCompra->getCliente()."<br>";
echo "Fecha Compra: " . $objCompra->getFecha();



$objBanco = new Banco (1, "BBVA", 1500);
$objBanco ->setTipoBanco("BBVA");
$objBanco ->setTipoPago("Targeta");
$objBanco ->setDomicilio("desconocido");
$objBanco ->setSaldo(1500);
$objBanco ->setCVV(140);
$objBanco ->setNTargeta(41525245875);
$objBanco ->setNCompra(025);
$objBanco ->setFNacimiento(new DateTime('2024-12-25 15:30:00'));
$objBanco ->setStatus("sin buro");
$objBanco ->setGradoEscolar(3);
echo $objBanco -> getDatosPersonales();
echo "TIPO DE BANCO: " . $objBanco->getTipoBanco()."<br>";
echo "TIPO DE PAGO: " . $objBanco->getTipoPago()."<br>";
echo "DOMICILIO: " . $objBanco->getDomicilio()."<br>";
echo "SALDO: " . $objBanco->getSaldo()."<br>";
echo "CVV: " . $objBanco->getCVV()."<br>";
echo "NUMERO DE TARGTEA: " . $objBanco->getNTargeta()."<br>";
echo "NUMERO DE COMPRA: " . $objBanco->getNCompra()."<br>";
echo "FECHA DE NACIMIENTO: " . $objBanco->getFNacimiento()."<br>";
echo "STATUS BANCARIO:" . $objBanco->getStatus()."<br>";
echo "GRADO ESCOLAR:" . $objBanco->getGradoEscolar()."<br>";




$objPagos = new Pagos (1, "BBVA", 1500);
$objPagos -> setAFecha(new DateTime('2024-12-25 15:30:00'));
$objPagos -> setHoraMov(5);
$objPagos -> setMinutoM(25);
$objPagos -> setSegundoM(15);
$objPagos -> setPagoTipo('targeta');
$objPagos -> setMontoM(2500);
$objPagos -> setIva(16.5);
echo $objPagos -> getDatosPersonales();

echo "FECHA DE COMPRA: " . $objPagos->getAFecha()."<br>";
echo "HOTA DE COMPRA:  " . $objPagos->getHoraMov()."<br>";
echo "MINUTO DE COMPRA: " . $objPagos->getMinutoM()."<br>";
echo "SEGUNDO DE COMPRA:  " . $objPagos->getSegundoM()."<br>";
echo "METODO DE PAGO: " . $objPagos->getPagoTipo()."<br>";
echo "MONTO: " . $objPagos->getMontoM()."<br>";
echo "IVA MONTO COMISION: " . $objPagos->getIva()."<br>";


?>
