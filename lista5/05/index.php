<html>
<?php 
	include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/head.php';

	include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/menu.php';
?>

	<body>
		<div class="container" style="margin-top: 60px">
			<form action="resultado.php" method="post">
				<h1 align="center">Escreva o intervalo dos numeros que deseja resultado</h1><br>
				<label for="intervaloInicio"> de </label>	
				<input type="number" min="1" id="intervaloInicio" name="intervaloInicio" required="required">
				<label for="intervaloFim"> a </label>	
				<input type="number" min="1" id="intervaloFim" name="intervaloFim" required="required"><br><br>	
				<input type="submit" value="Enviar" name="enviar">
				<input type="reset" value="Limpar" name="limpar">
			</form>
		</div>
	</body>
</html>