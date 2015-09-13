<!DOCTYPE html>
<html>
	<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
		<form action="resultado.php" method="post">
			<h1>Informe quantos segundos durou o evento</h1>
			<label for="segundos">Dias </label><br/>
			<input type="number" placeholder="365" required="required" name="segundos" id="segundos" >
			<input type="submit" name="enviar" value="Enviar">
			<input type="reset" name="limpar" value="Limpar">
		</form>
	</body>
</html>