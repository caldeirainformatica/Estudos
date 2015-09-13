<!DOCTYPE html>
<html>
<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
	<h1 align="center">Caixa d'agua</h1>
	<form action="resultado_volume.php" method="post">
		
		<h1 align="center">Informe o raio e a altura para o calculo</h1>
		
		<label for="raio">Raio</label><br />
		
		<input type="number" step="any" min="1" required="true" id="raio" name="raio"><br />
		
		<label for="altura">Altura</label><br />
		
		<input type="number" step="any" min="1" required="true" id="altura" name="altura"><br />
		
		<input type="submit" value="Calcular">
		<input type="reset" value="Limpar">
		
	</form>

</body>
</html>
