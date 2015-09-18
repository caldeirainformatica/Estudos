<html>
		<?php
			include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
		?>
	<body>
		<?php 
			include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
		?>

		<form  style="margin-top: 60px"  action="resultado.php" methodo ='posto' method="post">
		<h1>Informe o seu os dados abaixo para o calculo</h1><br/>
		
		
			<label for="altura">Informe sua altura</label>
			<input type="number" step="any" id="altura" name="altura" required="required"><br/>
			<label for="feminino"> feminino </label>
			<INPUT TYPE="RADIO" NAME="sexo" VALUE="feminino" id="feminino">
			<label for="masculino"> masculino </label>
			<INPUT TYPE="RADIO" NAME="sexo" VALUE="masculino" id="masculino" checked="checked"><br/>

			<input type="submit" value="Enviar" name="enviar">
			<input type="reset" value="Limpar" name="limpar">
		</form>
	</body>
</html>