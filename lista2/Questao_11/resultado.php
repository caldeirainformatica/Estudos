<html>
	<head>
		<meta charset="utf-8">
		<title>Calculo Salarial</title>
	</head>
	<body>
		<?php 
			$nome 			= $_POST['nome'];
			$horas			= $_POST['horas'];
			$valor_hora 	= $_POST['valor_hora'];
			$numero_filhos	= $_POST['numero_filhos'];
			if (($numero_filhos == '') or ($numero_filhos == null) or ($numero_filhos < 0)){
				$numero_filhos = 0;
			}
			$valorFilhos	= ($horas*$valor_hora)*$numero_filhos * 0.03;
			$resultado 		= ($horas*$valor_hora) + $valorFilhos;
			
			
			echo 'O ' . $nome . ' com ' . $numero_filhos . ' filhos, tem o salário de ' . $resultado;
			echo '<a href="index.php>Voltar</a>';
		
		
		?>
		
		
	</body>
</html>