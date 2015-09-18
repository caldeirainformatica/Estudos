<html>
		<?php
			include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
		?>
	<body>
		<?php 
			include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
			
			$sexo 	= $_POST['sexo'];
			$altura = $_POST['altura'];
			
			if ($sexo == 'masculino'){
				$pesoIdeal = (72.7 * $altura) - 58;
			}else{
				$pesoIdeal = (62.1 * $altura) - 44.7;
			}
			
			
		?>

		<form style="margin-top: 60px" action="resultado.php">
		<h1>Resultado do calculo</h1><br/>
		<p>O seu peso ideal é: <?php echo $pesoIdeal?>
		