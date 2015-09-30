<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	
	include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/functions/html.php';
	
	include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/menu.php';
	
	if (isset($_POST['enviar'])){
		echo '<h1>A soma dos números é: ' . somaTudo(10) . '</h1>';
	}else{
		gerarInputNumero(10);
	}
	
?>