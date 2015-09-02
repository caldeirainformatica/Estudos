	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Resultado</title>
		</head>
		<body>
		
			<?php 
				$raio = $_POST['raio'];
				$altura = $_POST['altura'];
				
				$volume = (pi()) * pow($raio,2) * $altura;
				
				echo "<h1> O volume da caixa d'agua é $volume</h1>";
				
			
				echo '<a href="volume.php">Voltar</a>';
						
			?>
		</body>
		
	</html>
