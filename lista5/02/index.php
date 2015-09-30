<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	
	include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/functions/html.php';
	
	include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/menu.php';

	
	if (isset($_POST['enviar'])){
		calculaDobro();
	}else{
		gerarInputNumero(30);
	}
	
	


?>