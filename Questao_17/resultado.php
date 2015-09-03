<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Piloto</title>
	</head>
	<body>
		<?php 
			$nome = $_POST['nome'];
			$km = $_POST['km'];
			$horas = $_POST['horas'];
			
			$media = ($km/$horas);
			
			echo 'A velocidade média do ' . $nome . ' foi ' . $media . 'km/h.';
		?>
	</body>
</html>
