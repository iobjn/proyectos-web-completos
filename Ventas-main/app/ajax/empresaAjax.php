<?php
	
	require_once "../../config/app.php";
	require_once "../views/inc/session_start.php";
	require_once "../../autoload.php";
	
	use app\controllers\companyController;

	if(isset($_POST['modulo_empresa'])){

		$insEmpresa = new companyController();

		if($_POST['modulo_empresa']=="registrar"){
			echo $insEmpresa->registrarEmpresaControlador();
		}

		if($_POST['modulo_empresa']=="actualizar"){
			echo $insEmpresa->actualizarEmpresaControlador();
		}

		if($_POST['modulo_empresa']=="eliminarFoto"){
			echo $insEmpresa->eliminarFotoEmpresaControlador();
		}

		if($_POST['modulo_empresa']=="actualizarFoto"){
			echo $insEmpresa->actualizarFotoEmpresaControlador();
		}
		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");
	}