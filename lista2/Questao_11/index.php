<!DOCTYPE html>
<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
		<form action="resultado.php" method="post">
			<label for="nome">Nome: </label><br />
			<input type="text" required="required" placeholder="Digite o nome do funcionário" name="nome" id="nome"><br />
			
			<label for="horas">Horas Trabalhadas</label><br />
			<input type="number" step="any" required="required" name="horas" id="horas"><br />
			
			<label for="valor_hora">Valor por hora</label><br />
			<input type="number" step="any" required="required" name="valor_hora" id="valor_hora"><br />
			
			<label for="numero_filhos">Numero de Filhos</label><br />
			<input type="number" name="numero_filhos" id="numero_filhos"><br />
			
			<input type="submit" value="Enviar" name="enviar">
			<input type="reset" value="Limpar" name="limpar">
		</form>
	</body>
</html>