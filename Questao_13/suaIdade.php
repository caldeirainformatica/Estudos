<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sua Idade</title>
	</head>
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