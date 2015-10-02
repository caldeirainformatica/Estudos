<html>
	<?php
		include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/head.php';
		
		include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/menu.php';
		
		?>
		<div style="margin-top: 60px" class="container"><?php 
		$intervaloInicio 	= $_POST['intervaloInicio'];
		$intervaloFim		= $_POST['intervaloFim'];
		$soma = 0;
		$impar = array();
		$i = 0; //segundo contador para auxiliar no array
		
		echo '<h3>Os numeros impares são: <br>';
		for ($cont = $intervaloInicio; $cont <= $intervaloFim; $cont++){
			if ($cont % 2 != 0){
				echo $impar[$i] = $cont .'<br/>';
				$i++;
				$soma = $soma + $cont;
			}
		}
		echo 'A soma destes números é:<br/> '.$soma . '</h3>';
		
	?>
		</div>
</html>