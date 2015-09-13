	<!DOCTYPE html>
	<html>
		<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
		
			<?php 
				$raio = $_POST['raio'];
				$altura = $_POST['altura'];
				
				$volume = (pi()) * pow($raio,2) * $altura;
				
				echo "<h1> O volume da caixa d'agua é $volume</h1>";
				
			
				echo '<a href="index.php">Voltar</a>';
						
			?>
		</body>
		
	</html>
