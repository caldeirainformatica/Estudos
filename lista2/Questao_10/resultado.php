<html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
		<?php
			$minimo = $_POST['minimo'];
			$maximo = $_POST['maximo'];
			$estoqueMedio = (($minimo+$maximo) /2);
			
			
			echo '<h1> O estoque médio é: ' . $estoqueMedio . '</h1>';
		?>
			<a href="index.php">voltar</a>
	</body>
</html>