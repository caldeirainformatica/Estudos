<!DOCTYPE html>
<html>
<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
	<?php 
		if (!empty($_POST)){
			$salarioAtual 		= $_POST ['salarioAtual'];
			$percentualAumento 	= $_POST ['percentualAumento'];
		}
	?>
	<h1 align="center">Calculo Salarial</h1>
	<?php 
	if (empty($_POST)){
		echo '<p> Digite o valor do seu sálario atual e o percentual de aumento';
	}
	?>
	<form action="index.php" method="post">
		<label for="salarioAtual">Salário atual: <br /></label><input type="number"  min="0" required="true" step="any" id="salarioAtual" name="salarioAtual"> <br /> 
		<label for="percentualAumento">Aumento em percentual: <br/></label><input type="number" min="0" required="true" step="any" id="percentualAumento" name="percentualAumento"><br />
		<input type="submit" value="Enviar"> 
		<input type="reset" value="Limpar">
					
	
	<?php
	if (!empty($_POST)){
		$resultado = ((($salarioAtual/100)*$percentualAumento)+$salarioAtual);
		echo '<font color="blue"><h3>Com o aumento de ' . $percentualAumento . '%<br />
					O seu novo salário passa a ser :R$ ' . number_format(($resultado),2,",",".") . '</h3></font>';
		
		
		
	}else{
		echo '';
	}
	
	?>
</body>
</html>


