<html>
		<?php
			include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
		?>
	<body>
		<?php 
			include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
			
			$nome 		= $_POST['nome'];
			$salario 	= $_POST['salario'];
			$cargo		= $_POST['cargo'];
		
			
		?>

		<form style="margin-top: 60px" action="resultado.php">
		<h1>Resultado do calculo</h1><br/>
		<?php
			if ($cargo == 101){
				echo 'O salário do ' . $nome . ' que tem o cargo ' . $cargo . ' passa a ser ' . ($salario*1.05);
			}elseif ($cargo == 102){
				echo 'O salário do ' . $nome . ' que tem o cargo ' . $cargo . ' passa a ser ' . ($salario*1.075);
			}elseif ($cargo == 103){
				echo 'O salário do ' . $nome . ' que tem o cargo ' . $cargo . ' passa a ser ' . ($salario*1.10);
			}else{
				echo 'O salário do ' . $nome . ' que tem o cargo ' . $cargo . ' passa a ser ' . ($salario*1.15);
			}
			?>