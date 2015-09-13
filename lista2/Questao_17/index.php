<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Piloto</title>
	</head>
	<body>
		<h1>Ditite os dados solicitados para que o sistema efetue os cálculos</h1><br/>
		<form action="resultado.php" method="post">
		<label for="nome">Digite o nome do Piloto<br/></label>
		<input type="text" name="nome" id="nome" required="required"><br/>
		<label for="km">Qual a distancia percorrida (em quilometros)</label><br/>
		<input type="number" name="km" id="km" required="required"><br/>
		<label for="horas">Tempo em horas para percorrer a quilometragem</label><br/>
		<input type="number" required="required" id="horas" name="horas"><br/>
		<input type="submit" value="Enviar" name="enviar">
		<input type="reset" value="Limpar" name="limpar">
		</form>
	</body>
</html>