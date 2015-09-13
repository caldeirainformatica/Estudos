<!DOCTYPE html>
<html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
		<form action="resultado.php" method="post">
			<label for="minimo">Digite o estoque mínimo</label><br />
			<input type="number" min="0" required="required" name="minimo" id="minimo"><br />
			<label for="maximo">Digite o estoque máximo</label><br />
			<input type="number" min="0" required="required" name="maximo" id="maximo"><br />
			<br />
			<input type="submit" value="Avançar" name="avancar">
			<input type="reset" value="Limpar" name="limpar">
		
		</form>
	</body>
</html>