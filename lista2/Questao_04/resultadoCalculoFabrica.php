<html>
	<head>
		<meta charset="utf-8">
		<title>Resultado do custo do veiculos</title>
	</head>
	<body>
		<?php 
			$custo  = $_GET['custoFabrica'];
 			$distribuidor = 0.28;
			$impostos = 0.45;
			$custoTotal = (($custo*$impostos)+$custo)+(($custo*$distribuidor)+$custo);
		
			echo '<font color="blue"><h1 align="center">O custo do veiculo é ' . number_format($custoTotal,2,',','.') . '</h1></font>';
		?>
		
		<form action="index.php">
			<a href="index.php">Clique aqui para voltar</a>
		
		</form>
				
	</body>


</html>