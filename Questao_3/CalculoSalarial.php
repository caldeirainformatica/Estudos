<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calculo Salarial</title>
</head>
<body>
	<?php 
		if (!empty($_POST)){
			$salarioAtual 		= $_POST ['salarioAtual'];
			$percentualAumento 	= $_POST ['percentualAumento'];
		}
	?>
	<h1 align="center">Calculo Salarial</h1>
	<p> Digite o valor do seu sálario atual e o percentual de aumento
	<form action="CalculoSalarial.php" method="post">
		<label for="salarioAtual">Salário atual: </label><input type="number" min="0" required="true" step="any" id="salarioAtual" name="salarioAtual"> <br /> 
		<label for="percentualAumento">Aumento em percentual: </label><input type="number" min="0" required="true" id="percentualAumento" name="percentualAumento"><br />
		<input type="submit" value="Enviar"> 
		<input type="reset" value="Limpar">
					
	
	<?php
	if (!empty($_POST)){
		$resultado = ((($salarioAtual/100)*$percentualAumento)+$salarioAtual);
		echo '<font color="blue"><h1>O seu novo salário é :' . $resultado . '</h1></font>';
		
		
		
	}else{
		echo '';
	}
	
	?>
</body>
</html>


