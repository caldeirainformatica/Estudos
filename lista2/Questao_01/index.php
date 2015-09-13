<!DOCTYPE html>
<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>
	<h1 align="center" style="margin-top: 60px;">EXERCÍCIO 1</h1>
	<form action="exercicio1.php" method="post">
		<label for="nome">Aluno: </label><input type="text" required="true" autocomplete="off" placeholder="Digite o nome do aluno" id="nome" name="nome">
		<br />
		<br />
		<label for="nota1">1º Nota</label><input type="number" step="any" min="0" max="10" required="true" placeholder="10.00" id="nota1" name="nota1"><br />
		<label for="nota2">2º Nota</label><input type="number" step="any" min="0" max="10"  required="true" placeholder="10.00" id="nota2" name="nota2"><br />
		<label for="nota3">3º Nota</label><input type="number" step="any" min="0" max="10"  required="true" placeholder="10.00" id="nota3" name="nota3"><br />
		<label for="nota4">4º Nota</label><input type="number" step="any" min="0" max="10"  required="true" placeholder="10.00" id="nota4" name="nota4"><br />
		<input type="submit" value="Calcular">
		<input type="reset" value="Limpar">
		
	</form>

</body>
</html>
