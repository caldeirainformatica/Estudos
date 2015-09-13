<html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
		<?php 
			$custo  = $_GET['custoFabrica'];
 			$distribuidor = $_GET['percentagemDistribuidor'];
			$impostos = $_GET['percentagemImpostos'];
			$custoTotal = (($custo+($custo*($distribuidor/100)))+($custo+($custo*($impostos/100))));
		
			echo '<font color="blue"><h1 align="center">O custo do veiculo é ' . number_format($custoTotal,2,',','.') . '</h1></font>';
		?>
		
		<form action="index.php">
			<a href="index.php">Clique aqui para voltar</a>
		
		</form>
				
	</body>


</html>