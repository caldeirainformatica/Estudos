<!DOCTYPE html>
<html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
		<?php 
			$nome = $_POST['nome'];
			$km = $_POST['km'];
			$horas = $_POST['horas'];
			
			$media = ($km/$horas);
			
			echo 'A velocidade média do ' . $nome . ' foi ' . $media . 'km/h.';
		?>
		<a href="index.html">Clique aqui para voltar</a>
	</body>
</html>
