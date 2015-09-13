<!DOCTYPE html>
<html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
	<body>
		<form action="resultado.php" method="post">
			<h1>Informe quantos dias de vida você tem</h1>
			<label for="dias">Dias </label><br/>
			<input type="number" placeholder="365" required="required" name="dias" id="dias" >
			<input type="submit" name="enviar" value="Enviar">
			<input type="reset" name="limpar" value="Limpar">
		</form>
	</body>
</html>