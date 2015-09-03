<html>
	<head>
		<meta charset="utf-8">
		<title>Resultado</title>
	</head>
	<body>
		<?php 
			$nome 			= $_POST['nome'];
			$salario 		= $_POST['salario'];
			$TotalVendas	= $_POST['valorTotalVendas'];
			$comissao 		= $_POST['comissao'];
			
			$comissaoFinal = ($comissao/100) * $TotalVendas;
			
			
			
			echo '<font color="blue"><h1 align="center">O salário final do ' . $nome . ' é ' . 
			number_format(($comissaoFinal+$salario),2,',','.'); 	?>
		
		<br/><a href="salario.html">Clique aqui para voltar</a>
		
				
	</body>
</html>