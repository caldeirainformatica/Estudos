<html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
	<body>
		<?php 
			$nome 			= $_POST['nome'];
			$salario 		= $_POST['salario'];
			$TotalVendas	= $_POST['valorTotalVendas'];
			$comissao 		= $_POST['comissao'];
			
			$comissaoFinal = ($comissao/100) * $TotalVendas;
			
			
			
			echo '<font color="blue"><h1 align="center">O salário final do ' . $nome . ' é ' . 
			number_format(($comissaoFinal+$salario),2,',','.'); 	?>
		
		<br/><a href="index.php">Clique aqui para voltar</a>
		
				
	</body>
</html>