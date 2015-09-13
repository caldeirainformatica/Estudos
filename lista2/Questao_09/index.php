<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insert title here</title>
	</head>
	<body>
		<form action="resultado.php" method="post">
			<h1>Digite as duas notas e clique em avançar</h1><br />
			<label for="numero1">Número 1</label><br />
			<input type="number" step="any" min="0" required="required" name="numero1" id="numero1"><br />
			<label for="numero2">Numero 2</label><br />
			<input type="number" step="any" min="0" required="required" name="numero2" id="numero2"><br />
			<br />
			<input type="submit" value="Avançar" name="avancar">
			<input type="reset" value="Limpar" name="limpar">
		
		</form>
	</body>
</html>