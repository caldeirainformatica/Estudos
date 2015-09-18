<html>
		<?php
			include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
		?>
	<body>
		<?php 
			include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
		?>

		<form  style="margin-top: 60px"  action="resultado.php" method="post">
		<h1>Informe o seu os dados abaixo para o calculo</h1><br/>
		
		
			<label for="nome"> Nome </label>
			<INPUT TYPE="text" NAME="nome" id="nome"><br/>
			<label for="cargo">Informe cargo</label>
			<input type="number" id="cargo" name="cargo" required="required"><br/>
			<label for="salario"> salario </label>
			<INPUT TYPE="number" step="any" NAME="salario" id="salario" required="required">

			<input type="submit" value="Enviar" name="enviar">
			<input type="reset" value="Limpar" name="limpar">
		</form>
	</body>
</html>